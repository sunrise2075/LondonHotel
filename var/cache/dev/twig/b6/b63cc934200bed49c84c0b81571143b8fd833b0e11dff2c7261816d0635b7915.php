<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7d0a29947ef8f666dc10c5c8729bb05163e550bdd442241cb1b2433913623fa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1dbb90987ffda7baaa9e76a773709d77e8da33f32ae5c8b9c8a300ec2477a63f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dbb90987ffda7baaa9e76a773709d77e8da33f32ae5c8b9c8a300ec2477a63f->enter($__internal_1dbb90987ffda7baaa9e76a773709d77e8da33f32ae5c8b9c8a300ec2477a63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f4107de4dcc98d9f2959a08503ceeefce28ed97807f06b9384eb02529f53be23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4107de4dcc98d9f2959a08503ceeefce28ed97807f06b9384eb02529f53be23->enter($__internal_f4107de4dcc98d9f2959a08503ceeefce28ed97807f06b9384eb02529f53be23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dbb90987ffda7baaa9e76a773709d77e8da33f32ae5c8b9c8a300ec2477a63f->leave($__internal_1dbb90987ffda7baaa9e76a773709d77e8da33f32ae5c8b9c8a300ec2477a63f_prof);

        
        $__internal_f4107de4dcc98d9f2959a08503ceeefce28ed97807f06b9384eb02529f53be23->leave($__internal_f4107de4dcc98d9f2959a08503ceeefce28ed97807f06b9384eb02529f53be23_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_07cd599158aade0236af412c7d41f8e27d7e70dd01ff0d6b7935dcb7e928036f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07cd599158aade0236af412c7d41f8e27d7e70dd01ff0d6b7935dcb7e928036f->enter($__internal_07cd599158aade0236af412c7d41f8e27d7e70dd01ff0d6b7935dcb7e928036f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e7541012a37f450d8bb27e199622d8c79d616be9a930e0c2064aa4c7f1fb9c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7541012a37f450d8bb27e199622d8c79d616be9a930e0c2064aa4c7f1fb9c36->enter($__internal_e7541012a37f450d8bb27e199622d8c79d616be9a930e0c2064aa4c7f1fb9c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_e7541012a37f450d8bb27e199622d8c79d616be9a930e0c2064aa4c7f1fb9c36->leave($__internal_e7541012a37f450d8bb27e199622d8c79d616be9a930e0c2064aa4c7f1fb9c36_prof);

        
        $__internal_07cd599158aade0236af412c7d41f8e27d7e70dd01ff0d6b7935dcb7e928036f->leave($__internal_07cd599158aade0236af412c7d41f8e27d7e70dd01ff0d6b7935dcb7e928036f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2b269c95bd8fb2968e0204e284c0cce2a59e06e7a86850fe764aca81b5919a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2b269c95bd8fb2968e0204e284c0cce2a59e06e7a86850fe764aca81b5919a6->enter($__internal_e2b269c95bd8fb2968e0204e284c0cce2a59e06e7a86850fe764aca81b5919a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b62cb9e256301c82aae95df2dfc533d5a80954d3fd9a6a4186567db2ac45c556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b62cb9e256301c82aae95df2dfc533d5a80954d3fd9a6a4186567db2ac45c556->enter($__internal_b62cb9e256301c82aae95df2dfc533d5a80954d3fd9a6a4186567db2ac45c556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b62cb9e256301c82aae95df2dfc533d5a80954d3fd9a6a4186567db2ac45c556->leave($__internal_b62cb9e256301c82aae95df2dfc533d5a80954d3fd9a6a4186567db2ac45c556_prof);

        
        $__internal_e2b269c95bd8fb2968e0204e284c0cce2a59e06e7a86850fe764aca81b5919a6->leave($__internal_e2b269c95bd8fb2968e0204e284c0cce2a59e06e7a86850fe764aca81b5919a6_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_474d9f47137cfb60d75f63cc825d4a0292cf525fe8da757e3a417f50ff305dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_474d9f47137cfb60d75f63cc825d4a0292cf525fe8da757e3a417f50ff305dc0->enter($__internal_474d9f47137cfb60d75f63cc825d4a0292cf525fe8da757e3a417f50ff305dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4102ea2031acd29ce0e11fe87940686e8befd3ebbd8e81b20f4665258387939f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4102ea2031acd29ce0e11fe87940686e8befd3ebbd8e81b20f4665258387939f->enter($__internal_4102ea2031acd29ce0e11fe87940686e8befd3ebbd8e81b20f4665258387939f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4102ea2031acd29ce0e11fe87940686e8befd3ebbd8e81b20f4665258387939f->leave($__internal_4102ea2031acd29ce0e11fe87940686e8befd3ebbd8e81b20f4665258387939f_prof);

        
        $__internal_474d9f47137cfb60d75f63cc825d4a0292cf525fe8da757e3a417f50ff305dc0->leave($__internal_474d9f47137cfb60d75f63cc825d4a0292cf525fe8da757e3a417f50ff305dc0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
