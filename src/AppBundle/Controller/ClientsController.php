<?php
// src/AppBundle/Controller/ClientsController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Client;

class ClientsController extends Controller
{
	
	private $titles = ['mr', 'ms', 'mrs', 'dr', 'mx'];

    /**
     * @Route("/guests", name="index_clients")
     * **/
    public function showIndex()
    {
        $data = [];
        
        $clients = $this->getDoctrine()
        				->getRepository('AppBundle:Client')
        				->findAll();
        $data['clients'] = $clients;
        return $this->render("clients/index.html.twig", $data);
    }

    /**
     * @Route("/guests/modify/{id_client}", name="modify_client")
     * **/
    public function showDetails(Request $request, $id_client)
    {
    	$data = [];

    	$client_repo = $this->getDoctrine()
    						->getRepository('AppBundle:Client');
    	$data['mode'] = 'modify';
    	$data['form'] = [];
    	$data['titles'] = $this->titles;
    	
    	//use form builder to receive data
    	$form = $this->createFormBuilder()
    	->add('name')
    	->add('last_name')
    	->add('title')
    	->add('address')
    	->add('zip_code')
    	->add('city')
    	->add('state')
    	->add('email')
    	->getForm();
    	$form->handleRequest($request);
    	
    	if($form->isSubmitted())
    	{
    		$form_data = $form->getData();
    		$data['form'] = [];
    		$data['form'] = $form_data;
    		
    		$client = $client_repo->find($id_client);
    		$client->setTitle($form_data['title']);
    		$client->setName($form_data['name']);
    		$client->setLastName($form_data['last_name']);
    		$client->setAddress($form_data['address']);
    		$client->setZipCode($form_data['zip_code']);
    		$client->setCity($form_data['city']);
    		$client->setState($form_data['state']);
    		$client->setEmail($form_data['email']);
    		
    		$em = $this->getDoctrine()
    				   ->getManager();
    		$em->persist($client);
    		$em->flush();
    		
    		return $this->redirectToRoute('index_clients');
    	}else
    	{
    		$client_obj =  $client_repo->find($id_client);
    		$client_data=[];
    		$client_data['id'] = $client_obj->getId();
    		$client_data['title'] = $client_obj->getTitle();
    		$client_data['name'] = $client_obj->getName();
    		$client_data['last_name'] = $client_obj->getLastName();
    		$client_data['address'] = $client_obj->getAddress();
    		$client_data['zip_code'] = $client_obj->getZipCode();
    		$client_data['city'] = $client_obj->getCity();
    		$client_data['state'] = $client_obj->getState();
    		$client_data['email'] = $client_obj->getEmail();
    		
    		$client_data['titles'] = $this->titles;
    		
    		$data['form'] = $client_data;
    	}
    	
    	return $this->render("clients/form.html.twig", $data);
    }

    /**
     * @Route("/guests/new", name="new_client")
     * **/
    public function showNew(Request $request)
    {
    	$data = [];
    	$data['mode'] = "new_client";
    	$data['titles'] = $this->titles;
    	$data['form'] = [];
    	$data['form']['title'] = '';
    	
    	//use form builder to receive data
    	$form = $this->createFormBuilder()
    				->add('name')
    				->add('last_name')
    				->add('title')
    				->add('address')
    				->add('zip_code')
    				->add('city')
    				->add('state')
    				->add('email')
    				->getForm();
    	$form->handleRequest($request);
    	
    	if($form->isSubmitted())
    	{
    		$form_data = $form->getData();
    		$data['form'] = [];
    		$data['form'] = $form_data;
    		
    		$em = $this->getDoctrine()->getManager();
    		$client = new Client();
    		$client->setTitle($form_data['title']);
    		$client->setName($form_data['name']);
    		$client->setLastName($form_data['last_name']);
    		$client->setAddress($form_data['address']);
    		$client->setZipCode($form_data['zip_code']);
    		$client->setCity($form_data['city']);
    		$client->setState($form_data['state']);
    		$client->setEmail($form_data['email']);
    		
    		$em->persist($client);
    		$em->flush();
    		
    		return $this->redirectToRoute("index_clients");
    	}
    				
    	return $this->render("clients/form.html.twig", $data);
    }

}


























































