<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_f890f91aa4ece7148ff97449cf724547af4f2e1ef94db308656cf7e1bfe3cfc3 extends Twig_Template
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
        $__internal_ab90c3249474c1701ef354a7e0cbeffc7c97cf89ede052e24136238d53a42e54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab90c3249474c1701ef354a7e0cbeffc7c97cf89ede052e24136238d53a42e54->enter($__internal_ab90c3249474c1701ef354a7e0cbeffc7c97cf89ede052e24136238d53a42e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_5e15e1bef9c9c4ff15f73350a5b784d0121f323d08c17029138ee29c5eddbe26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e15e1bef9c9c4ff15f73350a5b784d0121f323d08c17029138ee29c5eddbe26->enter($__internal_5e15e1bef9c9c4ff15f73350a5b784d0121f323d08c17029138ee29c5eddbe26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ab90c3249474c1701ef354a7e0cbeffc7c97cf89ede052e24136238d53a42e54->leave($__internal_ab90c3249474c1701ef354a7e0cbeffc7c97cf89ede052e24136238d53a42e54_prof);

        
        $__internal_5e15e1bef9c9c4ff15f73350a5b784d0121f323d08c17029138ee29c5eddbe26->leave($__internal_5e15e1bef9c9c4ff15f73350a5b784d0121f323d08c17029138ee29c5eddbe26_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
