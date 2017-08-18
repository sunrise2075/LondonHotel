<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_4e29f8266a6732ce5a01d370cae84b2d10ef42c962370581ea58249b4824d783 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02a56723bdbd8bc5d3124ec34298f7b88806ed652894f42004609d8028ce1e20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02a56723bdbd8bc5d3124ec34298f7b88806ed652894f42004609d8028ce1e20->enter($__internal_02a56723bdbd8bc5d3124ec34298f7b88806ed652894f42004609d8028ce1e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_0073c0f08c7f2a980d3a17e0b97068c255da1ee69326afcc2ec20fac5bab9d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0073c0f08c7f2a980d3a17e0b97068c255da1ee69326afcc2ec20fac5bab9d5b->enter($__internal_0073c0f08c7f2a980d3a17e0b97068c255da1ee69326afcc2ec20fac5bab9d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02a56723bdbd8bc5d3124ec34298f7b88806ed652894f42004609d8028ce1e20->leave($__internal_02a56723bdbd8bc5d3124ec34298f7b88806ed652894f42004609d8028ce1e20_prof);

        
        $__internal_0073c0f08c7f2a980d3a17e0b97068c255da1ee69326afcc2ec20fac5bab9d5b->leave($__internal_0073c0f08c7f2a980d3a17e0b97068c255da1ee69326afcc2ec20fac5bab9d5b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_37a8096221287ba5144c1b0d94a759c8fbb89ade259f042f095a10b6c20301a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a8096221287ba5144c1b0d94a759c8fbb89ade259f042f095a10b6c20301a8->enter($__internal_37a8096221287ba5144c1b0d94a759c8fbb89ade259f042f095a10b6c20301a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f96e72db0e8919b999fc9eddeffcfdff6a78687bbcaeb2c173b81bccb4190f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f96e72db0e8919b999fc9eddeffcfdff6a78687bbcaeb2c173b81bccb4190f61->enter($__internal_f96e72db0e8919b999fc9eddeffcfdff6a78687bbcaeb2c173b81bccb4190f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f96e72db0e8919b999fc9eddeffcfdff6a78687bbcaeb2c173b81bccb4190f61->leave($__internal_f96e72db0e8919b999fc9eddeffcfdff6a78687bbcaeb2c173b81bccb4190f61_prof);

        
        $__internal_37a8096221287ba5144c1b0d94a759c8fbb89ade259f042f095a10b6c20301a8->leave($__internal_37a8096221287ba5144c1b0d94a759c8fbb89ade259f042f095a10b6c20301a8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e8fc1a26ba65b30af45735c42d2c1e282a8d02fa2aac5ee8e466700a3c8b5ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e8fc1a26ba65b30af45735c42d2c1e282a8d02fa2aac5ee8e466700a3c8b5ca->enter($__internal_4e8fc1a26ba65b30af45735c42d2c1e282a8d02fa2aac5ee8e466700a3c8b5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_48a6e6dca121fa16e4b7d1c361570aea26e34b9b7e473f18c0d6018597c740d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a6e6dca121fa16e4b7d1c361570aea26e34b9b7e473f18c0d6018597c740d6->enter($__internal_48a6e6dca121fa16e4b7d1c361570aea26e34b9b7e473f18c0d6018597c740d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_48a6e6dca121fa16e4b7d1c361570aea26e34b9b7e473f18c0d6018597c740d6->leave($__internal_48a6e6dca121fa16e4b7d1c361570aea26e34b9b7e473f18c0d6018597c740d6_prof);

        
        $__internal_4e8fc1a26ba65b30af45735c42d2c1e282a8d02fa2aac5ee8e466700a3c8b5ca->leave($__internal_4e8fc1a26ba65b30af45735c42d2c1e282a8d02fa2aac5ee8e466700a3c8b5ca_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
