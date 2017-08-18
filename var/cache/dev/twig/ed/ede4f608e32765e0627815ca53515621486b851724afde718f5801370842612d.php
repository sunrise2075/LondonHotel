<?php

/* clients/index.html.twig */
class __TwigTemplate_55a445c2be1382c4fdb054a7cf20d22f086983746d953b2c25dc02e5b1d8a529 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/index.html.twig", 1);
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
        $__internal_f3c9f4449a628dbffb0918a9081a4027ea18543f0ce65f8723c052ff01f314a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3c9f4449a628dbffb0918a9081a4027ea18543f0ce65f8723c052ff01f314a1->enter($__internal_f3c9f4449a628dbffb0918a9081a4027ea18543f0ce65f8723c052ff01f314a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_c5964c67b2759bf882b7efb3d26b8747d31fd15276ade11aed789b60177f0f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5964c67b2759bf882b7efb3d26b8747d31fd15276ade11aed789b60177f0f03->enter($__internal_c5964c67b2759bf882b7efb3d26b8747d31fd15276ade11aed789b60177f0f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3c9f4449a628dbffb0918a9081a4027ea18543f0ce65f8723c052ff01f314a1->leave($__internal_f3c9f4449a628dbffb0918a9081a4027ea18543f0ce65f8723c052ff01f314a1_prof);

        
        $__internal_c5964c67b2759bf882b7efb3d26b8747d31fd15276ade11aed789b60177f0f03->leave($__internal_c5964c67b2759bf882b7efb3d26b8747d31fd15276ade11aed789b60177f0f03_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_10d880e03d41b4419f8b36607ce8de3b27e4d821dde514962cc36426254f0f3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10d880e03d41b4419f8b36607ce8de3b27e4d821dde514962cc36426254f0f3c->enter($__internal_10d880e03d41b4419f8b36607ce8de3b27e4d821dde514962cc36426254f0f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_76bcaf7a773125ceb9db4f9074862ac7ccfe82ea6bf88eb1c6f67a8be06eacd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76bcaf7a773125ceb9db4f9074862ac7ccfe82ea6bf88eb1c6f67a8be06eacd3->enter($__internal_76bcaf7a773125ceb9db4f9074862ac7ccfe82ea6bf88eb1c6f67a8be06eacd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients</h4>
        <div class=\"medium-2  columns\"><a class=\"button\" href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_client");
        echo "\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 19
            echo "              <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["client"], "title", array())), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "lastName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                  <a class=\"hollow button\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modify_client", array("id_client" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("booking", array("id_client" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">BOOK A ROOM</a>
                </td>
              </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_76bcaf7a773125ceb9db4f9074862ac7ccfe82ea6bf88eb1c6f67a8be06eacd3->leave($__internal_76bcaf7a773125ceb9db4f9074862ac7ccfe82ea6bf88eb1c6f67a8be06eacd3_prof);

        
        $__internal_10d880e03d41b4419f8b36607ce8de3b27e4d821dde514962cc36426254f0f3c->leave($__internal_10d880e03d41b4419f8b36607ce8de3b27e4d821dde514962cc36426254f0f3c_prof);

    }

    public function getTemplateName()
    {
        return "clients/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 28,  92 => 24,  88 => 23,  83 => 21,  75 => 20,  72 => 19,  68 => 18,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
        <h4>Clients</h4>
        <div class=\"medium-2  columns\"><a class=\"button\" href=\"{{ path(\"new_client\") }}\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          {% for client in clients %}
              <tr>
                <td>{{ client.title | capitalize}}. {{ client.name }} {{ client.lastName }}</td>
                <td>{{ client.email }}</td>
                <td>
                  <a class=\"hollow button\" href=\"{{ path(\"modify_client\", {'id_client':client.id}) }}\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"{{ path(\"booking\", {'id_client': client.id}) }}\">BOOK A ROOM</a>
                </td>
              </tr>
          {% endfor %}
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "clients/index.html.twig", "/Users/franky/Documents/symfony-projects/LondonHotel/app/Resources/views/clients/index.html.twig");
    }
}
