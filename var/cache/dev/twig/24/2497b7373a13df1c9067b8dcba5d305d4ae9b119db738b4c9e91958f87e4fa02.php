<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_cf3d4b2554e3ec295d307bbede5f35aa5bd9acda17ce1419164cd38eef2e4233 extends Twig_Template
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
        $__internal_62e7182b87dfd9223ec565e4dd9a3dcb3939f30afd28872dcfad2cf8ee2026c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62e7182b87dfd9223ec565e4dd9a3dcb3939f30afd28872dcfad2cf8ee2026c6->enter($__internal_62e7182b87dfd9223ec565e4dd9a3dcb3939f30afd28872dcfad2cf8ee2026c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_84629bdd3197443135e8d530daf08a76907c13cdcfcaef88f182f0f89b15904a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84629bdd3197443135e8d530daf08a76907c13cdcfcaef88f182f0f89b15904a->enter($__internal_84629bdd3197443135e8d530daf08a76907c13cdcfcaef88f182f0f89b15904a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_62e7182b87dfd9223ec565e4dd9a3dcb3939f30afd28872dcfad2cf8ee2026c6->leave($__internal_62e7182b87dfd9223ec565e4dd9a3dcb3939f30afd28872dcfad2cf8ee2026c6_prof);

        
        $__internal_84629bdd3197443135e8d530daf08a76907c13cdcfcaef88f182f0f89b15904a->leave($__internal_84629bdd3197443135e8d530daf08a76907c13cdcfcaef88f182f0f89b15904a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
