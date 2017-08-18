<?php

/* reservations/book.html.twig */
class __TwigTemplate_69b8bcf138a4a1e52de5dd20fc6b080feaef25114a25ef267462b26d541e2945 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservations/book.html.twig", 1);
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
        $__internal_7cdbf3024921b8c3169ccc6f6a0d792cc0987a502d1fa816de257442a400d1b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cdbf3024921b8c3169ccc6f6a0d792cc0987a502d1fa816de257442a400d1b3->enter($__internal_7cdbf3024921b8c3169ccc6f6a0d792cc0987a502d1fa816de257442a400d1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $__internal_7ff7eb6b27ca6622d3cd1fcd0992bf4f5b3398454642629dcd89f47642572fa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff7eb6b27ca6622d3cd1fcd0992bf4f5b3398454642629dcd89f47642572fa0->enter($__internal_7ff7eb6b27ca6622d3cd1fcd0992bf4f5b3398454642629dcd89f47642572fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cdbf3024921b8c3169ccc6f6a0d792cc0987a502d1fa816de257442a400d1b3->leave($__internal_7cdbf3024921b8c3169ccc6f6a0d792cc0987a502d1fa816de257442a400d1b3_prof);

        
        $__internal_7ff7eb6b27ca6622d3cd1fcd0992bf4f5b3398454642629dcd89f47642572fa0->leave($__internal_7ff7eb6b27ca6622d3cd1fcd0992bf4f5b3398454642629dcd89f47642572fa0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_098f8c221eee7d6fba14b1cb4ee5625d1cbf97d409dddc6e6389fc047ab031a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_098f8c221eee7d6fba14b1cb4ee5625d1cbf97d409dddc6e6389fc047ab031a5->enter($__internal_098f8c221eee7d6fba14b1cb4ee5625d1cbf97d409dddc6e6389fc047ab031a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4755b51121af706874bdd88fc40b959b7881d2c8feee4c60196bc3bc65f80fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4755b51121af706874bdd88fc40b959b7881d2c8feee4c60196bc3bc65f80fdd->enter($__internal_4755b51121af706874bdd88fc40b959b7881d2c8feee4c60196bc3bc65f80fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR:</div>
        <div class=\"medium-2  columns\"><b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "name", array()), "html", null, true);
        echo "</b></div>
        <form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("booking", array("id_client" => $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>
          <div class=\"medium-2  columns\"><input name=\"form[dateFrom]\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? $this->getContext($context, "dates")), "from", array()), "html", null, true);
        echo "\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"form[dateTo]\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? $this->getContext($context, "dates")), "to", array()), "html", null, true);
        echo "\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
        </form>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Room</th>
              <th width=\"200\">Availability</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
          ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["available_rooms"] ?? $this->getContext($context, "available_rooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 28
            echo "            <tr>
              <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "name", array()), "html", null, true);
            echo "</td>
              <td>
                <div class=\"callout success\">
                    <h7>Available</h7>
                </div>
              </td>
              <td>
                <a class=\"hollow button warning\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bookRoom", array("id_client" => $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "id", array()), "id_room" => $this->getAttribute($context["room"], "id", array()), "date_in" => $this->getAttribute(($context["dates"] ?? $this->getContext($context, "dates")), "from", array()), "date_out" => $this->getAttribute(($context["dates"] ?? $this->getContext($context, "dates")), "to", array()))), "html", null, true);
            echo "\">BOOK NOW</a>
              </td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_4755b51121af706874bdd88fc40b959b7881d2c8feee4c60196bc3bc65f80fdd->leave($__internal_4755b51121af706874bdd88fc40b959b7881d2c8feee4c60196bc3bc65f80fdd_prof);

        
        $__internal_098f8c221eee7d6fba14b1cb4ee5625d1cbf97d409dddc6e6389fc047ab031a5->leave($__internal_098f8c221eee7d6fba14b1cb4ee5625d1cbf97d409dddc6e6389fc047ab031a5_prof);

    }

    public function getTemplateName()
    {
        return "reservations/book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 40,  103 => 36,  93 => 29,  90 => 28,  86 => 27,  70 => 14,  65 => 12,  60 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR:</div>
        <div class=\"medium-2  columns\"><b>{{ client.name }}</b></div>
        <form action=\"{{ path('booking', {'id_client': client.id}) }}\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>
          <div class=\"medium-2  columns\"><input name=\"form[dateFrom]\" value=\"{{ dates.from }}\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"form[dateTo]\" value=\"{{ dates.to }}\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
        </form>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Room</th>
              <th width=\"200\">Availability</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
          {% for room in available_rooms %}
            <tr>
              <td>{{ room.name }}</td>
              <td>
                <div class=\"callout success\">
                    <h7>Available</h7>
                </div>
              </td>
              <td>
                <a class=\"hollow button warning\" href=\"{{ path('bookRoom', {'id_client': client.id, 'id_room': room.id, 'date_in': dates.from, 'date_out': dates.to}) }}\">BOOK NOW</a>
              </td>
            </tr>
          {% endfor %}
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "reservations/book.html.twig", "/Users/franky/Documents/symfony-projects/LondonHotel/app/Resources/views/reservations/book.html.twig");
    }
}
