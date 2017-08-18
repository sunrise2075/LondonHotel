<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_57c86c2c57f364ae28d4943d0d64974cb699410ac09d4b00d63aa02babb17885 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a372e8ef40688312b3c73d90abac87ca13e68576c30430ef148face974803523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a372e8ef40688312b3c73d90abac87ca13e68576c30430ef148face974803523->enter($__internal_a372e8ef40688312b3c73d90abac87ca13e68576c30430ef148face974803523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_853362f8063de6c36f7e433b9dc9d241382dcdffc02a92096cb50b2e9969a373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_853362f8063de6c36f7e433b9dc9d241382dcdffc02a92096cb50b2e9969a373->enter($__internal_853362f8063de6c36f7e433b9dc9d241382dcdffc02a92096cb50b2e9969a373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_a372e8ef40688312b3c73d90abac87ca13e68576c30430ef148face974803523->leave($__internal_a372e8ef40688312b3c73d90abac87ca13e68576c30430ef148face974803523_prof);

        
        $__internal_853362f8063de6c36f7e433b9dc9d241382dcdffc02a92096cb50b2e9969a373->leave($__internal_853362f8063de6c36f7e433b9dc9d241382dcdffc02a92096cb50b2e9969a373_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
