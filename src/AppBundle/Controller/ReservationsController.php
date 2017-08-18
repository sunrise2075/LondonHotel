<?php
// src/AppBundle/Controller/ReservationsController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Reservation;

class ReservationsController extends Controller
{
    /**
     * @Route("/reservations", name="reservations")
     * **/
    public function showIndex()
    {

    	$data = [];
    	$reservation_array = $this->getDoctrine()
    				->getRepository('AppBundle:Reservation')
    				->findAll();
    	$data['reservations'] = $reservation_array;
        return $this->render("reservations/index.html.twig", $data);
    }
    
    /**
     * @Route("/reservations/{id_client}", name="booking")
     * **/
    public function booking(Request $request, $id_client)
    {
    	$data = [];
    	//query the client information
    	$client = $this->getDoctrine()
    					->getRepository('AppBundle:Client')
    					->find($id_client);
    	//set client data in the page
    	$data['client'] = $client;
    	
    	//prepare data for the form and table
    	//initialize parameters
    	$data['dates'] = [];
    	$data['dates']['from'] = '';
    	$data['dates']['to'] = '';
    	$data['available_rooms'] = [];
    	
    	$form = $this->createFormBuilder()
    				->add('dateFrom')
    				->add('dateTo')
    				->getForm();
    	
    	$form->handleRequest($request);
    	//execute query
    	if ($form->isSubmitted()) {
    		$form_data = $form->getData();
    		
    		$data['dates']['from'] = $form_data['dateFrom'];
    		$data['dates']['to'] = $form_data['dateTo'];
    		
    		$em = $this->getDoctrine()->getManager();
    		$available_rooms= $em->getRepository('AppBundle:Room')
    		->getAvailableRooms($form_data['dateFrom'], $form_data['dateTo']);
    		
    		$data['available_rooms'] = $available_rooms;
    	}
    							
    	return $this->render("reservations/book.html.twig", $data);
    }

    /**
     * @Route("/reservations/{id_client}/{id_room}/{date_in}/{date_out}", name="bookRoom")
     * **/
    public function bookRoom(Request $request, $id_client, $id_room, $date_in, $date_out)
    {
    	$reservation = new Reservation();
    	$date_start = new \DateTime($date_in);
    	$date_final = new \DateTime($date_out);
    	$reservation->setDateIn($date_start);
    	$reservation->setDateOut($date_final);
 
    	//Get entity manager
    	$em = $this->getDoctrine()
    				->getManager();
    	//Query room availablity
    	$room_availability = False;
    	$room_availability= $em->getRepository('AppBundle:Room')
    							->checkRoomAvailability($id_room,$date_in, $date_out);
    	//Check room availablity
        if(!$room_availability)
        {
        	$client = $this->getDoctrine()
				           ->getRepository('AppBundle:Client')
				           ->find($id_client);
        	$room = $this->getDoctrine()
        				 ->getRepository('AppBundle:Room')
        				 ->find($id_room);
        	
        	$reservation->setRoom($room);
        	$reservation->setClient($client);
        	
        	$em->persist($reservation);
        	$em->flush();
        	
        	return $this->redirectToRoute('index_clients');
        }else
        {
        	throw new \Exception('Room is already booked!');
        }
    }
    
    /**
     * @Route("/reservations/cancel/{id_reservation}", name="cancel_booking")
     * **/
    public function cancelBooking($id_reservation)
    {
    	$em = $this->getDoctrine()
    				->getManager();
    	
    				$reservation = $em->getReference('AppBundle:Reservation', $id_reservation);
    	$em->remove($reservation);
    	$em->flush();
    	
    	return $this->redirectToRoute('reservations');
    }
}