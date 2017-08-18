<?php

/* reservations/index.html.twig */
class __TwigTemplate_c7cba6309dfbbf1258af328073ab7a4f7db01fb53a85c8eb96dc0452886960c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservations/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3cb9949e656d3381997f9a42ab4dcf879580714cb4137c3cac69d921ba87d34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3cb9949e656d3381997f9a42ab4dcf879580714cb4137c3cac69d921ba87d34->enter($__internal_f3cb9949e656d3381997f9a42ab4dcf879580714cb4137c3cac69d921ba87d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $__internal_71e3205a656f4d96ef5869235d9a30788238c5959b1cd076d0bc7ca888afe6f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e3205a656f4d96ef5869235d9a30788238c5959b1cd076d0bc7ca888afe6f1->enter($__internal_71e3205a656f4d96ef5869235d9a30788238c5959b1cd076d0bc7ca888afe6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3cb9949e656d3381997f9a42ab4dcf879580714cb4137c3cac69d921ba87d34->leave($__internal_f3cb9949e656d3381997f9a42ab4dcf879580714cb4137c3cac69d921ba87d34_prof);

        
        $__internal_71e3205a656f4d96ef5869235d9a30788238c5959b1cd076d0bc7ca888afe6f1->leave($__internal_71e3205a656f4d96ef5869235d9a30788238c5959b1cd076d0bc7ca888afe6f1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a35b9b92c6ba080e5907fafa1ab15af90c25a7d618c88539d4453de29758a36b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a35b9b92c6ba080e5907fafa1ab15af90c25a7d618c88539d4453de29758a36b->enter($__internal_a35b9b92c6ba080e5907fafa1ab15af90c25a7d618c88539d4453de29758a36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_66369b0315b3f9b9075bcdd650d97a63b73d5551fe8bb375b1161600823c0454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66369b0315b3f9b9075bcdd650d97a63b73d5551fe8bb375b1161600823c0454->enter($__internal_66369b0315b3f9b9075bcdd650d97a63b73d5551fe8bb375b1161600823c0454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Reservations</h4>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">ROOM</th>
              <th width=\"200\">Name</th>
              <th width=\"200\">DATES</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
          ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 20
            echo "            <tr>
              <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "room", array()), "name", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "title", array())), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "lastName", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reservation"], "dateIn", array()), "M-d-Y")), "html", null, true);
            echo " to ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reservation"], "dateOut", array()), "M-d-Y")), "html", null, true);
            echo "</td>
              <td>
                <a class=\"hollow button alert\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cancel_booking", array("id_reservation" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Are you sure you wish to cancel the reservation?')\">CANCEL</a>
              </td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_66369b0315b3f9b9075bcdd650d97a63b73d5551fe8bb375b1161600823c0454->leave($__internal_66369b0315b3f9b9075bcdd650d97a63b73d5551fe8bb375b1161600823c0454_prof);

        
        $__internal_a35b9b92c6ba080e5907fafa1ab15af90c25a7d618c88539d4453de29758a36b->leave($__internal_a35b9b92c6ba080e5907fafa1ab15af90c25a7d618c88539d4453de29758a36b_prof);

    }

    public function getTemplateName()
    {
        return "reservations/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 29,  92 => 25,  85 => 23,  77 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Reservations</h4>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">ROOM</th>
              <th width=\"200\">Name</th>
              <th width=\"200\">DATES</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
          {% for reservation in reservations %}
            <tr>
              <td>{{reservation.room.name}}</td>
              <td>{{reservation.client.title | capitalize}}. {{reservation.client.name}} {{reservation.client.lastName}}</td>
              <td>{{ reservation.dateIn | date('M-d-Y') | upper }} to {{ reservation.dateOut | date('M-d-Y') | upper }}</td>
              <td>
                <a class=\"hollow button alert\" href=\"{{ path('cancel_booking', { 'id_reservation' : reservation.id }) }}\" onclick=\"return confirm('Are you sure you wish to cancel the reservation?')\">CANCEL</a>
              </td>
            </tr>
          {% endfor %}
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "reservations/index.html.twig", "/Users/franky/Documents/symfony-projects/LondonHotel/app/Resources/views/reservations/index.html.twig");
    }
}
