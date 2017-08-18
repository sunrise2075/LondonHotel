<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5b9da9a7cafeae9291cbf46a6e1d74f08e0ca3a25966a06b9b8f8321d05763e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb5a3c7ed08043d0c19fa2f0b7c97b2d1421d58c37c9c4fdd4e906722feeb5d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb5a3c7ed08043d0c19fa2f0b7c97b2d1421d58c37c9c4fdd4e906722feeb5d4->enter($__internal_eb5a3c7ed08043d0c19fa2f0b7c97b2d1421d58c37c9c4fdd4e906722feeb5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_381a3bc13ab94cf6d7fc5c63b9d129095abeadf0db2a403d8ca341a42832cdc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381a3bc13ab94cf6d7fc5c63b9d129095abeadf0db2a403d8ca341a42832cdc0->enter($__internal_381a3bc13ab94cf6d7fc5c63b9d129095abeadf0db2a403d8ca341a42832cdc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb5a3c7ed08043d0c19fa2f0b7c97b2d1421d58c37c9c4fdd4e906722feeb5d4->leave($__internal_eb5a3c7ed08043d0c19fa2f0b7c97b2d1421d58c37c9c4fdd4e906722feeb5d4_prof);

        
        $__internal_381a3bc13ab94cf6d7fc5c63b9d129095abeadf0db2a403d8ca341a42832cdc0->leave($__internal_381a3bc13ab94cf6d7fc5c63b9d129095abeadf0db2a403d8ca341a42832cdc0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b72c625e65eb1ba0a91acf4e0269b6b44ac80778df483a7bdaff65a789eff086 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b72c625e65eb1ba0a91acf4e0269b6b44ac80778df483a7bdaff65a789eff086->enter($__internal_b72c625e65eb1ba0a91acf4e0269b6b44ac80778df483a7bdaff65a789eff086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3a4e8eee29b73c135191c5c2e786d7bb98bee73782c7b20c6658ac71b73a5b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a4e8eee29b73c135191c5c2e786d7bb98bee73782c7b20c6658ac71b73a5b05->enter($__internal_3a4e8eee29b73c135191c5c2e786d7bb98bee73782c7b20c6658ac71b73a5b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_3a4e8eee29b73c135191c5c2e786d7bb98bee73782c7b20c6658ac71b73a5b05->leave($__internal_3a4e8eee29b73c135191c5c2e786d7bb98bee73782c7b20c6658ac71b73a5b05_prof);

        
        $__internal_b72c625e65eb1ba0a91acf4e0269b6b44ac80778df483a7bdaff65a789eff086->leave($__internal_b72c625e65eb1ba0a91acf4e0269b6b44ac80778df483a7bdaff65a789eff086_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
