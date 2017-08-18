<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b92cee0d3dcaafba82ac8784b75c906a47838f1245539ed02aee25f0383bb302 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb36673c1debd3d9457e106fffafb409f0e52b9589d27558a7faca27b7e388b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb36673c1debd3d9457e106fffafb409f0e52b9589d27558a7faca27b7e388b8->enter($__internal_eb36673c1debd3d9457e106fffafb409f0e52b9589d27558a7faca27b7e388b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f4866b10212c4fefb234188523d26cc470b96f38ba56cc2ec8a36a2e1bac66a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4866b10212c4fefb234188523d26cc470b96f38ba56cc2ec8a36a2e1bac66a4->enter($__internal_f4866b10212c4fefb234188523d26cc470b96f38ba56cc2ec8a36a2e1bac66a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb36673c1debd3d9457e106fffafb409f0e52b9589d27558a7faca27b7e388b8->leave($__internal_eb36673c1debd3d9457e106fffafb409f0e52b9589d27558a7faca27b7e388b8_prof);

        
        $__internal_f4866b10212c4fefb234188523d26cc470b96f38ba56cc2ec8a36a2e1bac66a4->leave($__internal_f4866b10212c4fefb234188523d26cc470b96f38ba56cc2ec8a36a2e1bac66a4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_523efc926eb78ca09f9496c4059e44fde321ad297c64cbd0dc7337f95133a2e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_523efc926eb78ca09f9496c4059e44fde321ad297c64cbd0dc7337f95133a2e3->enter($__internal_523efc926eb78ca09f9496c4059e44fde321ad297c64cbd0dc7337f95133a2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e2d4b94952e3b9d32fdf0f16d25d1832c53087b5921f0c57f3819c33a0ebdb24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d4b94952e3b9d32fdf0f16d25d1832c53087b5921f0c57f3819c33a0ebdb24->enter($__internal_e2d4b94952e3b9d32fdf0f16d25d1832c53087b5921f0c57f3819c33a0ebdb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e2d4b94952e3b9d32fdf0f16d25d1832c53087b5921f0c57f3819c33a0ebdb24->leave($__internal_e2d4b94952e3b9d32fdf0f16d25d1832c53087b5921f0c57f3819c33a0ebdb24_prof);

        
        $__internal_523efc926eb78ca09f9496c4059e44fde321ad297c64cbd0dc7337f95133a2e3->leave($__internal_523efc926eb78ca09f9496c4059e44fde321ad297c64cbd0dc7337f95133a2e3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b9a377d73f05a99a1465ae0409ae39f3a68e2264078b59b57a0063c45eb58e26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9a377d73f05a99a1465ae0409ae39f3a68e2264078b59b57a0063c45eb58e26->enter($__internal_b9a377d73f05a99a1465ae0409ae39f3a68e2264078b59b57a0063c45eb58e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cdfb944d58ad4594ab7d1e576c92b5629f79d2413c22b6e11b6198a31e492c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdfb944d58ad4594ab7d1e576c92b5629f79d2413c22b6e11b6198a31e492c76->enter($__internal_cdfb944d58ad4594ab7d1e576c92b5629f79d2413c22b6e11b6198a31e492c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cdfb944d58ad4594ab7d1e576c92b5629f79d2413c22b6e11b6198a31e492c76->leave($__internal_cdfb944d58ad4594ab7d1e576c92b5629f79d2413c22b6e11b6198a31e492c76_prof);

        
        $__internal_b9a377d73f05a99a1465ae0409ae39f3a68e2264078b59b57a0063c45eb58e26->leave($__internal_b9a377d73f05a99a1465ae0409ae39f3a68e2264078b59b57a0063c45eb58e26_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5da3b16e6bad1b9d07064e7be39ed7af06e0be880d43f937e5ed3894c5fa42df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5da3b16e6bad1b9d07064e7be39ed7af06e0be880d43f937e5ed3894c5fa42df->enter($__internal_5da3b16e6bad1b9d07064e7be39ed7af06e0be880d43f937e5ed3894c5fa42df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_220cf5b9e03b09a5a1686d32e2b1bd5643f5fe7aa0979b77196640f92473fd05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220cf5b9e03b09a5a1686d32e2b1bd5643f5fe7aa0979b77196640f92473fd05->enter($__internal_220cf5b9e03b09a5a1686d32e2b1bd5643f5fe7aa0979b77196640f92473fd05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_220cf5b9e03b09a5a1686d32e2b1bd5643f5fe7aa0979b77196640f92473fd05->leave($__internal_220cf5b9e03b09a5a1686d32e2b1bd5643f5fe7aa0979b77196640f92473fd05_prof);

        
        $__internal_5da3b16e6bad1b9d07064e7be39ed7af06e0be880d43f937e5ed3894c5fa42df->leave($__internal_5da3b16e6bad1b9d07064e7be39ed7af06e0be880d43f937e5ed3894c5fa42df_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
