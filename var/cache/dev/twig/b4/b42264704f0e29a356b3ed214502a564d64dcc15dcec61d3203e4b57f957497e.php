<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_7b49ceb456ac29305887b056b745efcba25c82d59ba4be6ba1001fc50ea63a53 extends Twig_Template
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
        $__internal_25dc78e8d99a6693f439436ffb1b60d1c73c1c76b340195c2aa17fb4e460a5d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25dc78e8d99a6693f439436ffb1b60d1c73c1c76b340195c2aa17fb4e460a5d5->enter($__internal_25dc78e8d99a6693f439436ffb1b60d1c73c1c76b340195c2aa17fb4e460a5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_76736ccf2c325133800bf808c013ad1ce3ea435cdf105a6c93364fa78e9c58d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76736ccf2c325133800bf808c013ad1ce3ea435cdf105a6c93364fa78e9c58d4->enter($__internal_76736ccf2c325133800bf808c013ad1ce3ea435cdf105a6c93364fa78e9c58d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_25dc78e8d99a6693f439436ffb1b60d1c73c1c76b340195c2aa17fb4e460a5d5->leave($__internal_25dc78e8d99a6693f439436ffb1b60d1c73c1c76b340195c2aa17fb4e460a5d5_prof);

        
        $__internal_76736ccf2c325133800bf808c013ad1ce3ea435cdf105a6c93364fa78e9c58d4->leave($__internal_76736ccf2c325133800bf808c013ad1ce3ea435cdf105a6c93364fa78e9c58d4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
