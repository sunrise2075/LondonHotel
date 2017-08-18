<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_c5b12845d2c7997eb5db85a4d42bdacf27ff5e20b94ccb50c8cea2b7f208254e extends Twig_Template
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
        $__internal_519d43245921a8605d484971fa5346794e19796832a526d537920ee705d8d156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_519d43245921a8605d484971fa5346794e19796832a526d537920ee705d8d156->enter($__internal_519d43245921a8605d484971fa5346794e19796832a526d537920ee705d8d156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_4d6d6cb8ca49f4084094199b8520492da39b61a959b1413de6db64f0c0b5344c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6d6cb8ca49f4084094199b8520492da39b61a959b1413de6db64f0c0b5344c->enter($__internal_4d6d6cb8ca49f4084094199b8520492da39b61a959b1413de6db64f0c0b5344c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_519d43245921a8605d484971fa5346794e19796832a526d537920ee705d8d156->leave($__internal_519d43245921a8605d484971fa5346794e19796832a526d537920ee705d8d156_prof);

        
        $__internal_4d6d6cb8ca49f4084094199b8520492da39b61a959b1413de6db64f0c0b5344c->leave($__internal_4d6d6cb8ca49f4084094199b8520492da39b61a959b1413de6db64f0c0b5344c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
