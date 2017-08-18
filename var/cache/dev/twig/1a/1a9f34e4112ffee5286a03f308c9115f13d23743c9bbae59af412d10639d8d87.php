<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_b51796378008995559ba89b4094b615b17141dcb1d991435ff4ce9c78c0ad7c2 extends Twig_Template
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
        $__internal_26a98e7cdd1a72b7d2ad980b1fcc935fe2e2eb9f1cf96c7ad2bf068d76c62f3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26a98e7cdd1a72b7d2ad980b1fcc935fe2e2eb9f1cf96c7ad2bf068d76c62f3f->enter($__internal_26a98e7cdd1a72b7d2ad980b1fcc935fe2e2eb9f1cf96c7ad2bf068d76c62f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_3ed77775ef18fa6bdb0af8d9d1bd48e79293e2f2c3a7dd9a5aa05b8e08ee7228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed77775ef18fa6bdb0af8d9d1bd48e79293e2f2c3a7dd9a5aa05b8e08ee7228->enter($__internal_3ed77775ef18fa6bdb0af8d9d1bd48e79293e2f2c3a7dd9a5aa05b8e08ee7228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_26a98e7cdd1a72b7d2ad980b1fcc935fe2e2eb9f1cf96c7ad2bf068d76c62f3f->leave($__internal_26a98e7cdd1a72b7d2ad980b1fcc935fe2e2eb9f1cf96c7ad2bf068d76c62f3f_prof);

        
        $__internal_3ed77775ef18fa6bdb0af8d9d1bd48e79293e2f2c3a7dd9a5aa05b8e08ee7228->leave($__internal_3ed77775ef18fa6bdb0af8d9d1bd48e79293e2f2c3a7dd9a5aa05b8e08ee7228_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
