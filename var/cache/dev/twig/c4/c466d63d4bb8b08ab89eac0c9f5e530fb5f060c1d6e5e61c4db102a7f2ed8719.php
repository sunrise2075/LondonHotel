<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_53b68d3799eaf0f81eb2f1a48ba98660ba6c2dee0f79b15c6e1a4306007d5995 extends Twig_Template
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
        $__internal_40810ddbdb034c2c531bdc7b73f1e9286c356464615336c7aa6d6b1ef43cf36f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40810ddbdb034c2c531bdc7b73f1e9286c356464615336c7aa6d6b1ef43cf36f->enter($__internal_40810ddbdb034c2c531bdc7b73f1e9286c356464615336c7aa6d6b1ef43cf36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_e32dbaec5e2ba86480d28a23f164ec337d54bd8289c8bfd3c6d8f7f69b0e9b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32dbaec5e2ba86480d28a23f164ec337d54bd8289c8bfd3c6d8f7f69b0e9b86->enter($__internal_e32dbaec5e2ba86480d28a23f164ec337d54bd8289c8bfd3c6d8f7f69b0e9b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_40810ddbdb034c2c531bdc7b73f1e9286c356464615336c7aa6d6b1ef43cf36f->leave($__internal_40810ddbdb034c2c531bdc7b73f1e9286c356464615336c7aa6d6b1ef43cf36f_prof);

        
        $__internal_e32dbaec5e2ba86480d28a23f164ec337d54bd8289c8bfd3c6d8f7f69b0e9b86->leave($__internal_e32dbaec5e2ba86480d28a23f164ec337d54bd8289c8bfd3c6d8f7f69b0e9b86_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
