<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_d30f13ce4d035319a153f8d5663395b462f03ac399d3a88c026fc1a21d9489bb extends Twig_Template
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
        $__internal_3d0b525f8b621acdcc0018514891016b6826dc2a9632c60b85ded702481e7bca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d0b525f8b621acdcc0018514891016b6826dc2a9632c60b85ded702481e7bca->enter($__internal_3d0b525f8b621acdcc0018514891016b6826dc2a9632c60b85ded702481e7bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_69f4ad5cb77a10d68a777224ea54c75301b097b2817e223a4d31ae2a7b195c72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f4ad5cb77a10d68a777224ea54c75301b097b2817e223a4d31ae2a7b195c72->enter($__internal_69f4ad5cb77a10d68a777224ea54c75301b097b2817e223a4d31ae2a7b195c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3d0b525f8b621acdcc0018514891016b6826dc2a9632c60b85ded702481e7bca->leave($__internal_3d0b525f8b621acdcc0018514891016b6826dc2a9632c60b85ded702481e7bca_prof);

        
        $__internal_69f4ad5cb77a10d68a777224ea54c75301b097b2817e223a4d31ae2a7b195c72->leave($__internal_69f4ad5cb77a10d68a777224ea54c75301b097b2817e223a4d31ae2a7b195c72_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
