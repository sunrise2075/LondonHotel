<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_f47758b81b780728bd11dfacb317071f5b53ed424713bacdcf6828c1702b1982 extends Twig_Template
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
        $__internal_9984013944af5e3c00331f08e0bec6fc94c4ac8aaee12322f3fb33ee2aaa44e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9984013944af5e3c00331f08e0bec6fc94c4ac8aaee12322f3fb33ee2aaa44e7->enter($__internal_9984013944af5e3c00331f08e0bec6fc94c4ac8aaee12322f3fb33ee2aaa44e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_644959462adbb6694fc84aa857fdbbbbe5d16c5ac146968318817d128248be51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644959462adbb6694fc84aa857fdbbbbe5d16c5ac146968318817d128248be51->enter($__internal_644959462adbb6694fc84aa857fdbbbbe5d16c5ac146968318817d128248be51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_9984013944af5e3c00331f08e0bec6fc94c4ac8aaee12322f3fb33ee2aaa44e7->leave($__internal_9984013944af5e3c00331f08e0bec6fc94c4ac8aaee12322f3fb33ee2aaa44e7_prof);

        
        $__internal_644959462adbb6694fc84aa857fdbbbbe5d16c5ac146968318817d128248be51->leave($__internal_644959462adbb6694fc84aa857fdbbbbe5d16c5ac146968318817d128248be51_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
