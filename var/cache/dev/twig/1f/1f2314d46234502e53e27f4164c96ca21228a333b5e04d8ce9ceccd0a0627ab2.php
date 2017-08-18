<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_18507effff441833af85445150a74c1d1984c4052e4e3d9c05f3f8b8e83ddc7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_93e3b719c205ca728b9c7b5debd4cd7a55669fba79e0804e6468e0a1d3bd2d62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93e3b719c205ca728b9c7b5debd4cd7a55669fba79e0804e6468e0a1d3bd2d62->enter($__internal_93e3b719c205ca728b9c7b5debd4cd7a55669fba79e0804e6468e0a1d3bd2d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8ae24d084550cedeadad6283164c754a3a5a306def9b294a6cd062f3048bc85c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae24d084550cedeadad6283164c754a3a5a306def9b294a6cd062f3048bc85c->enter($__internal_8ae24d084550cedeadad6283164c754a3a5a306def9b294a6cd062f3048bc85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93e3b719c205ca728b9c7b5debd4cd7a55669fba79e0804e6468e0a1d3bd2d62->leave($__internal_93e3b719c205ca728b9c7b5debd4cd7a55669fba79e0804e6468e0a1d3bd2d62_prof);

        
        $__internal_8ae24d084550cedeadad6283164c754a3a5a306def9b294a6cd062f3048bc85c->leave($__internal_8ae24d084550cedeadad6283164c754a3a5a306def9b294a6cd062f3048bc85c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_11f006ad15547013b6d42d7fed78173978e156b14c7c4e6d8c21fa4b56894007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11f006ad15547013b6d42d7fed78173978e156b14c7c4e6d8c21fa4b56894007->enter($__internal_11f006ad15547013b6d42d7fed78173978e156b14c7c4e6d8c21fa4b56894007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3c91e0d3dd85a9129ff23ed270425026437526a370e6c25d36ad54e17f7f78d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c91e0d3dd85a9129ff23ed270425026437526a370e6c25d36ad54e17f7f78d4->enter($__internal_3c91e0d3dd85a9129ff23ed270425026437526a370e6c25d36ad54e17f7f78d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3c91e0d3dd85a9129ff23ed270425026437526a370e6c25d36ad54e17f7f78d4->leave($__internal_3c91e0d3dd85a9129ff23ed270425026437526a370e6c25d36ad54e17f7f78d4_prof);

        
        $__internal_11f006ad15547013b6d42d7fed78173978e156b14c7c4e6d8c21fa4b56894007->leave($__internal_11f006ad15547013b6d42d7fed78173978e156b14c7c4e6d8c21fa4b56894007_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_33e2b56f7292e728f33e57e9b9c648886ca4cd3f30287dfbd77c11f87a66384a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33e2b56f7292e728f33e57e9b9c648886ca4cd3f30287dfbd77c11f87a66384a->enter($__internal_33e2b56f7292e728f33e57e9b9c648886ca4cd3f30287dfbd77c11f87a66384a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_748aa0f5f69543d0f95ed635191c0d6f27e98585b7c1ff65e12308d09786b2c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748aa0f5f69543d0f95ed635191c0d6f27e98585b7c1ff65e12308d09786b2c5->enter($__internal_748aa0f5f69543d0f95ed635191c0d6f27e98585b7c1ff65e12308d09786b2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_748aa0f5f69543d0f95ed635191c0d6f27e98585b7c1ff65e12308d09786b2c5->leave($__internal_748aa0f5f69543d0f95ed635191c0d6f27e98585b7c1ff65e12308d09786b2c5_prof);

        
        $__internal_33e2b56f7292e728f33e57e9b9c648886ca4cd3f30287dfbd77c11f87a66384a->leave($__internal_33e2b56f7292e728f33e57e9b9c648886ca4cd3f30287dfbd77c11f87a66384a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0c073cc94c95b2174a9aaefd4dc873c524fb5368046ac4bb7e4c27dbd087af23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c073cc94c95b2174a9aaefd4dc873c524fb5368046ac4bb7e4c27dbd087af23->enter($__internal_0c073cc94c95b2174a9aaefd4dc873c524fb5368046ac4bb7e4c27dbd087af23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_acc59fdfab8b324fd2a4fec627b0ffd616805678a4aaca5816d08547105d6e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc59fdfab8b324fd2a4fec627b0ffd616805678a4aaca5816d08547105d6e62->enter($__internal_acc59fdfab8b324fd2a4fec627b0ffd616805678a4aaca5816d08547105d6e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_acc59fdfab8b324fd2a4fec627b0ffd616805678a4aaca5816d08547105d6e62->leave($__internal_acc59fdfab8b324fd2a4fec627b0ffd616805678a4aaca5816d08547105d6e62_prof);

        
        $__internal_0c073cc94c95b2174a9aaefd4dc873c524fb5368046ac4bb7e4c27dbd087af23->leave($__internal_0c073cc94c95b2174a9aaefd4dc873c524fb5368046ac4bb7e4c27dbd087af23_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
