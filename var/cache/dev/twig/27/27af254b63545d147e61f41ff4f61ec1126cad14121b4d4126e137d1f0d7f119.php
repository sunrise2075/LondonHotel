<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_86cda109e0a43481b81de71e28009450ee4106893438f474d4ec522b759214ff extends Twig_Template
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
        $__internal_9ab34513a387e7f819286c2b72d6f07df46c65e5ecc27854d3ec1a6e192bd333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ab34513a387e7f819286c2b72d6f07df46c65e5ecc27854d3ec1a6e192bd333->enter($__internal_9ab34513a387e7f819286c2b72d6f07df46c65e5ecc27854d3ec1a6e192bd333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_56db3403d0ec41f639e149138dd420ec29189a9f487b32274a862059cf2ebbbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56db3403d0ec41f639e149138dd420ec29189a9f487b32274a862059cf2ebbbe->enter($__internal_56db3403d0ec41f639e149138dd420ec29189a9f487b32274a862059cf2ebbbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9ab34513a387e7f819286c2b72d6f07df46c65e5ecc27854d3ec1a6e192bd333->leave($__internal_9ab34513a387e7f819286c2b72d6f07df46c65e5ecc27854d3ec1a6e192bd333_prof);

        
        $__internal_56db3403d0ec41f639e149138dd420ec29189a9f487b32274a862059cf2ebbbe->leave($__internal_56db3403d0ec41f639e149138dd420ec29189a9f487b32274a862059cf2ebbbe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
