<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_c6224273f808488cd51c5da42ab6da456434b908e52c9b98a2d187e6dda474fe extends Twig_Template
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
        $__internal_6cbaffd6282424e783744d6209a5451b6b40b3df343ce21e2e5e86901fbf4455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cbaffd6282424e783744d6209a5451b6b40b3df343ce21e2e5e86901fbf4455->enter($__internal_6cbaffd6282424e783744d6209a5451b6b40b3df343ce21e2e5e86901fbf4455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_26a6ed90965b6844e3c75598265775603e55fc8b145ae68e8d1f3f98d368da80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a6ed90965b6844e3c75598265775603e55fc8b145ae68e8d1f3f98d368da80->enter($__internal_26a6ed90965b6844e3c75598265775603e55fc8b145ae68e8d1f3f98d368da80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_6cbaffd6282424e783744d6209a5451b6b40b3df343ce21e2e5e86901fbf4455->leave($__internal_6cbaffd6282424e783744d6209a5451b6b40b3df343ce21e2e5e86901fbf4455_prof);

        
        $__internal_26a6ed90965b6844e3c75598265775603e55fc8b145ae68e8d1f3f98d368da80->leave($__internal_26a6ed90965b6844e3c75598265775603e55fc8b145ae68e8d1f3f98d368da80_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
