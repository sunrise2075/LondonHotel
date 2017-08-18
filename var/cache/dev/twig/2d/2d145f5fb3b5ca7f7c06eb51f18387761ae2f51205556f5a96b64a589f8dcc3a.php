<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_07315ed7fef70b803afe8fd07cd80fa98465065bbe5944a6f719618ac0044594 extends Twig_Template
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
        $__internal_108b097fed105192511c9d05ac39ce07a6c1f8ec96d72a5f6946d8e905b41a0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_108b097fed105192511c9d05ac39ce07a6c1f8ec96d72a5f6946d8e905b41a0d->enter($__internal_108b097fed105192511c9d05ac39ce07a6c1f8ec96d72a5f6946d8e905b41a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_c6c902ac7a0111d222fe5a12df0b26b380ae426cb304a6563d48e18321407114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c902ac7a0111d222fe5a12df0b26b380ae426cb304a6563d48e18321407114->enter($__internal_c6c902ac7a0111d222fe5a12df0b26b380ae426cb304a6563d48e18321407114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_108b097fed105192511c9d05ac39ce07a6c1f8ec96d72a5f6946d8e905b41a0d->leave($__internal_108b097fed105192511c9d05ac39ce07a6c1f8ec96d72a5f6946d8e905b41a0d_prof);

        
        $__internal_c6c902ac7a0111d222fe5a12df0b26b380ae426cb304a6563d48e18321407114->leave($__internal_c6c902ac7a0111d222fe5a12df0b26b380ae426cb304a6563d48e18321407114_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
