<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_59edfea8f1d771826c2593a362cd5e46072558d9c4640438a778810cc5f57d5d extends Twig_Template
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
        $__internal_4f5c968797fec20d00ee2152d92f039d193486363922582ad83e3a133d6a1614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f5c968797fec20d00ee2152d92f039d193486363922582ad83e3a133d6a1614->enter($__internal_4f5c968797fec20d00ee2152d92f039d193486363922582ad83e3a133d6a1614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_d3d1e2e492f9fc90962f270d9aa04c0bf9c94e3762844a6b4fc99e61bbd1f9a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d1e2e492f9fc90962f270d9aa04c0bf9c94e3762844a6b4fc99e61bbd1f9a6->enter($__internal_d3d1e2e492f9fc90962f270d9aa04c0bf9c94e3762844a6b4fc99e61bbd1f9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_4f5c968797fec20d00ee2152d92f039d193486363922582ad83e3a133d6a1614->leave($__internal_4f5c968797fec20d00ee2152d92f039d193486363922582ad83e3a133d6a1614_prof);

        
        $__internal_d3d1e2e492f9fc90962f270d9aa04c0bf9c94e3762844a6b4fc99e61bbd1f9a6->leave($__internal_d3d1e2e492f9fc90962f270d9aa04c0bf9c94e3762844a6b4fc99e61bbd1f9a6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
