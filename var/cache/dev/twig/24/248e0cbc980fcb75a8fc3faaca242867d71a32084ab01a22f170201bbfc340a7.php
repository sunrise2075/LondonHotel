<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_f6c9f1d21f6be8cbcf703030e551d6b57066174db4e712408f29b6c3a539d4f7 extends Twig_Template
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
        $__internal_899da9d6ac5611d8baf3190efd19ce008f13795fa22fd441638081259aa7d7ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_899da9d6ac5611d8baf3190efd19ce008f13795fa22fd441638081259aa7d7ec->enter($__internal_899da9d6ac5611d8baf3190efd19ce008f13795fa22fd441638081259aa7d7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_763e88d996c5d190e4788c838af61b82f98687713c3a2196d0c836966c5b0631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_763e88d996c5d190e4788c838af61b82f98687713c3a2196d0c836966c5b0631->enter($__internal_763e88d996c5d190e4788c838af61b82f98687713c3a2196d0c836966c5b0631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_899da9d6ac5611d8baf3190efd19ce008f13795fa22fd441638081259aa7d7ec->leave($__internal_899da9d6ac5611d8baf3190efd19ce008f13795fa22fd441638081259aa7d7ec_prof);

        
        $__internal_763e88d996c5d190e4788c838af61b82f98687713c3a2196d0c836966c5b0631->leave($__internal_763e88d996c5d190e4788c838af61b82f98687713c3a2196d0c836966c5b0631_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
