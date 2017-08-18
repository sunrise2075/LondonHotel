<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_d067c62a5bbc1ec14fd02d391d467c703b148e2eeeec4f1145815825b1a8a1fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2106824267ef0a0c9230a19febfe9a6cbe9bea6d0036060b7f9d058362334a24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2106824267ef0a0c9230a19febfe9a6cbe9bea6d0036060b7f9d058362334a24->enter($__internal_2106824267ef0a0c9230a19febfe9a6cbe9bea6d0036060b7f9d058362334a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_81463ae5ea005054c7d5f39156fa47b4ee5717ba45110b87e067ec2320472daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81463ae5ea005054c7d5f39156fa47b4ee5717ba45110b87e067ec2320472daf->enter($__internal_81463ae5ea005054c7d5f39156fa47b4ee5717ba45110b87e067ec2320472daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2106824267ef0a0c9230a19febfe9a6cbe9bea6d0036060b7f9d058362334a24->leave($__internal_2106824267ef0a0c9230a19febfe9a6cbe9bea6d0036060b7f9d058362334a24_prof);

        
        $__internal_81463ae5ea005054c7d5f39156fa47b4ee5717ba45110b87e067ec2320472daf->leave($__internal_81463ae5ea005054c7d5f39156fa47b4ee5717ba45110b87e067ec2320472daf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_340a0970f4617a1062fcbf95132f21b91683fc0b78390faede29cee22d5f58bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_340a0970f4617a1062fcbf95132f21b91683fc0b78390faede29cee22d5f58bf->enter($__internal_340a0970f4617a1062fcbf95132f21b91683fc0b78390faede29cee22d5f58bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_86afd72062089a771a18cbc58a887dacf10d1e67af38bfd92600a84cfdea7e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86afd72062089a771a18cbc58a887dacf10d1e67af38bfd92600a84cfdea7e1b->enter($__internal_86afd72062089a771a18cbc58a887dacf10d1e67af38bfd92600a84cfdea7e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_86afd72062089a771a18cbc58a887dacf10d1e67af38bfd92600a84cfdea7e1b->leave($__internal_86afd72062089a771a18cbc58a887dacf10d1e67af38bfd92600a84cfdea7e1b_prof);

        
        $__internal_340a0970f4617a1062fcbf95132f21b91683fc0b78390faede29cee22d5f58bf->leave($__internal_340a0970f4617a1062fcbf95132f21b91683fc0b78390faede29cee22d5f58bf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d3aea03cda3606725c1b5a90ef659d96982061e0e8d02981389cdcccb0d124b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d3aea03cda3606725c1b5a90ef659d96982061e0e8d02981389cdcccb0d124b->enter($__internal_0d3aea03cda3606725c1b5a90ef659d96982061e0e8d02981389cdcccb0d124b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0f8b3ce19e37487e0ff600092734898371a7242bf67e55c51a4c85afce86a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f8b3ce19e37487e0ff600092734898371a7242bf67e55c51a4c85afce86a01->enter($__internal_e0f8b3ce19e37487e0ff600092734898371a7242bf67e55c51a4c85afce86a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_e0f8b3ce19e37487e0ff600092734898371a7242bf67e55c51a4c85afce86a01->leave($__internal_e0f8b3ce19e37487e0ff600092734898371a7242bf67e55c51a4c85afce86a01_prof);

        
        $__internal_0d3aea03cda3606725c1b5a90ef659d96982061e0e8d02981389cdcccb0d124b->leave($__internal_0d3aea03cda3606725c1b5a90ef659d96982061e0e8d02981389cdcccb0d124b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
