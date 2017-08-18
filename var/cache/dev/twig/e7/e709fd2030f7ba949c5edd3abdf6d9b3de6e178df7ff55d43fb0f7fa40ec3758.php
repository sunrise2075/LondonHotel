<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_52ed7b09cc9bda4b07d6d85e453000b8f054f9ffb21a78f7e4a1516c0f793898 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e627f63d80f8b0a67e501682cde5642d3c7f0c79f1e108581162ecc3eccae3c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e627f63d80f8b0a67e501682cde5642d3c7f0c79f1e108581162ecc3eccae3c1->enter($__internal_e627f63d80f8b0a67e501682cde5642d3c7f0c79f1e108581162ecc3eccae3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_0717e7886faf5521af7f314f5ea409eba3162c97ce3b0bb3269d29de7a9fa63a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0717e7886faf5521af7f314f5ea409eba3162c97ce3b0bb3269d29de7a9fa63a->enter($__internal_0717e7886faf5521af7f314f5ea409eba3162c97ce3b0bb3269d29de7a9fa63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e627f63d80f8b0a67e501682cde5642d3c7f0c79f1e108581162ecc3eccae3c1->leave($__internal_e627f63d80f8b0a67e501682cde5642d3c7f0c79f1e108581162ecc3eccae3c1_prof);

        
        $__internal_0717e7886faf5521af7f314f5ea409eba3162c97ce3b0bb3269d29de7a9fa63a->leave($__internal_0717e7886faf5521af7f314f5ea409eba3162c97ce3b0bb3269d29de7a9fa63a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_80a88e9b17caba3a6f2d19567622958cf3e756595f214b66e02b82703ad75aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a88e9b17caba3a6f2d19567622958cf3e756595f214b66e02b82703ad75aa1->enter($__internal_80a88e9b17caba3a6f2d19567622958cf3e756595f214b66e02b82703ad75aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ecfa1a535bdc39b4ec7216230d3c21e578334a88e076a5c849e02d21307f6a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecfa1a535bdc39b4ec7216230d3c21e578334a88e076a5c849e02d21307f6a3b->enter($__internal_ecfa1a535bdc39b4ec7216230d3c21e578334a88e076a5c849e02d21307f6a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ecfa1a535bdc39b4ec7216230d3c21e578334a88e076a5c849e02d21307f6a3b->leave($__internal_ecfa1a535bdc39b4ec7216230d3c21e578334a88e076a5c849e02d21307f6a3b_prof);

        
        $__internal_80a88e9b17caba3a6f2d19567622958cf3e756595f214b66e02b82703ad75aa1->leave($__internal_80a88e9b17caba3a6f2d19567622958cf3e756595f214b66e02b82703ad75aa1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
