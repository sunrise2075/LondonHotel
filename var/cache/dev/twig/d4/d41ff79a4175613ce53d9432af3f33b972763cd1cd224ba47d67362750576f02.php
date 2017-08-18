<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_8002ecfa5c881c687e5e5a646e3b6bc8c7527a9b8a3f7af20707a69ddb0874bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ff659a6092b5d273985c66d2fe071fa6f6bef375612be33060df7fed1583a1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ff659a6092b5d273985c66d2fe071fa6f6bef375612be33060df7fed1583a1f->enter($__internal_9ff659a6092b5d273985c66d2fe071fa6f6bef375612be33060df7fed1583a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_3ca1c4320f12363239caeb2e2e3f51e576859c40b6382f709adfda783ae670ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca1c4320f12363239caeb2e2e3f51e576859c40b6382f709adfda783ae670ca->enter($__internal_3ca1c4320f12363239caeb2e2e3f51e576859c40b6382f709adfda783ae670ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ff659a6092b5d273985c66d2fe071fa6f6bef375612be33060df7fed1583a1f->leave($__internal_9ff659a6092b5d273985c66d2fe071fa6f6bef375612be33060df7fed1583a1f_prof);

        
        $__internal_3ca1c4320f12363239caeb2e2e3f51e576859c40b6382f709adfda783ae670ca->leave($__internal_3ca1c4320f12363239caeb2e2e3f51e576859c40b6382f709adfda783ae670ca_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ea6e8cff04a07b07d9384decde99fe8263de2b23e6eaf23dc329ddabf035da95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6e8cff04a07b07d9384decde99fe8263de2b23e6eaf23dc329ddabf035da95->enter($__internal_ea6e8cff04a07b07d9384decde99fe8263de2b23e6eaf23dc329ddabf035da95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ea0465024be73ea0ce12efa6b4b1c40f1124a7befa3a2bd448fbafda29952c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea0465024be73ea0ce12efa6b4b1c40f1124a7befa3a2bd448fbafda29952c66->enter($__internal_ea0465024be73ea0ce12efa6b4b1c40f1124a7befa3a2bd448fbafda29952c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_ea0465024be73ea0ce12efa6b4b1c40f1124a7befa3a2bd448fbafda29952c66->leave($__internal_ea0465024be73ea0ce12efa6b4b1c40f1124a7befa3a2bd448fbafda29952c66_prof);

        
        $__internal_ea6e8cff04a07b07d9384decde99fe8263de2b23e6eaf23dc329ddabf035da95->leave($__internal_ea6e8cff04a07b07d9384decde99fe8263de2b23e6eaf23dc329ddabf035da95_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4a50e41485f8977010abdc26c111c399bfa8630dc62c3ad9bfd2c863edfd1083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a50e41485f8977010abdc26c111c399bfa8630dc62c3ad9bfd2c863edfd1083->enter($__internal_4a50e41485f8977010abdc26c111c399bfa8630dc62c3ad9bfd2c863edfd1083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a0a6eb3a2ae522a3b2c972937afc4ec8a546a49bc30d24a0b78183e437af18d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a6eb3a2ae522a3b2c972937afc4ec8a546a49bc30d24a0b78183e437af18d6->enter($__internal_a0a6eb3a2ae522a3b2c972937afc4ec8a546a49bc30d24a0b78183e437af18d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a0a6eb3a2ae522a3b2c972937afc4ec8a546a49bc30d24a0b78183e437af18d6->leave($__internal_a0a6eb3a2ae522a3b2c972937afc4ec8a546a49bc30d24a0b78183e437af18d6_prof);

        
        $__internal_4a50e41485f8977010abdc26c111c399bfa8630dc62c3ad9bfd2c863edfd1083->leave($__internal_4a50e41485f8977010abdc26c111c399bfa8630dc62c3ad9bfd2c863edfd1083_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
