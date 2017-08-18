<?php

/* admin/index.html.twig */
class __TwigTemplate_33ef5fbe9c8249dcc76eac0ff1b6462f0c888398d7f958dd1465802ff80640f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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
        $__internal_7677ef183c6d2a5febe91834d16ec65baa88b2240664a4a0fc484358f1b20a8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7677ef183c6d2a5febe91834d16ec65baa88b2240664a4a0fc484358f1b20a8e->enter($__internal_7677ef183c6d2a5febe91834d16ec65baa88b2240664a4a0fc484358f1b20a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_20aa62b58ce91fcaa99f428a9f642e80b14627fa01fd2017689754a2de81647f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20aa62b58ce91fcaa99f428a9f642e80b14627fa01fd2017689754a2de81647f->enter($__internal_20aa62b58ce91fcaa99f428a9f642e80b14627fa01fd2017689754a2de81647f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7677ef183c6d2a5febe91834d16ec65baa88b2240664a4a0fc484358f1b20a8e->leave($__internal_7677ef183c6d2a5febe91834d16ec65baa88b2240664a4a0fc484358f1b20a8e_prof);

        
        $__internal_20aa62b58ce91fcaa99f428a9f642e80b14627fa01fd2017689754a2de81647f->leave($__internal_20aa62b58ce91fcaa99f428a9f642e80b14627fa01fd2017689754a2de81647f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17ea73d3917fd988c368eb6e8d8e44bc14684a749326a65157541a683e14e6b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17ea73d3917fd988c368eb6e8d8e44bc14684a749326a65157541a683e14e6b5->enter($__internal_17ea73d3917fd988c368eb6e8d8e44bc14684a749326a65157541a683e14e6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_595537299de7e1d585f0b1f1ff19a6d13bcdf3793bf2a031b8baed948895372a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_595537299de7e1d585f0b1f1ff19a6d13bcdf3793bf2a031b8baed948895372a->enter($__internal_595537299de7e1d585f0b1f1ff19a6d13bcdf3793bf2a031b8baed948895372a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/attractions.jpg"), "html", null, true);
        echo "\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>

";
        
        $__internal_595537299de7e1d585f0b1f1ff19a6d13bcdf3793bf2a031b8baed948895372a->leave($__internal_595537299de7e1d585f0b1f1ff19a6d13bcdf3793bf2a031b8baed948895372a_prof);

        
        $__internal_17ea73d3917fd988c368eb6e8d8e44bc14684a749326a65157541a683e14e6b5->leave($__internal_17ea73d3917fd988c368eb6e8d8e44bc14684a749326a65157541a683e14e6b5_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"{{ asset('images/attractions.jpg') }}\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>

{% endblock %}
", "admin/index.html.twig", "/Users/franky/Documents/symfony-projects/LondonHotel/app/Resources/views/admin/index.html.twig");
    }
}
