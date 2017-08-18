<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_585975bc412b522b6d1b7384f017be220d04364c0adf6a9eafba13fd33048d31 extends Twig_Template
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
        $__internal_0aeb3ac0ae9c70759036bc8a499b89cda11cbb62f31f9d25c33580748684a078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aeb3ac0ae9c70759036bc8a499b89cda11cbb62f31f9d25c33580748684a078->enter($__internal_0aeb3ac0ae9c70759036bc8a499b89cda11cbb62f31f9d25c33580748684a078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_3cbee59e0b9aa354451d27257f29e88730487f263272a96ffac66136e4320927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cbee59e0b9aa354451d27257f29e88730487f263272a96ffac66136e4320927->enter($__internal_3cbee59e0b9aa354451d27257f29e88730487f263272a96ffac66136e4320927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_0aeb3ac0ae9c70759036bc8a499b89cda11cbb62f31f9d25c33580748684a078->leave($__internal_0aeb3ac0ae9c70759036bc8a499b89cda11cbb62f31f9d25c33580748684a078_prof);

        
        $__internal_3cbee59e0b9aa354451d27257f29e88730487f263272a96ffac66136e4320927->leave($__internal_3cbee59e0b9aa354451d27257f29e88730487f263272a96ffac66136e4320927_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
