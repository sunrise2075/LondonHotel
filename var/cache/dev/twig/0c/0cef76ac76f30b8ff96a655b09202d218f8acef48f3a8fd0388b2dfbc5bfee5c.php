<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b67aa2d7bad39db64ca9c69743272a3fb719189976ae487ab0ba93226c69c547 extends Twig_Template
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
        $__internal_a9b66a73e7366d13b8c8b154c4c4c46fc90cc3ab29863b61610f84baf378fcd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9b66a73e7366d13b8c8b154c4c4c46fc90cc3ab29863b61610f84baf378fcd6->enter($__internal_a9b66a73e7366d13b8c8b154c4c4c46fc90cc3ab29863b61610f84baf378fcd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f5a6c9da18fa7366829b8cc61019c7fa2593719c96b1f387ed150f16136422be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a6c9da18fa7366829b8cc61019c7fa2593719c96b1f387ed150f16136422be->enter($__internal_f5a6c9da18fa7366829b8cc61019c7fa2593719c96b1f387ed150f16136422be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a9b66a73e7366d13b8c8b154c4c4c46fc90cc3ab29863b61610f84baf378fcd6->leave($__internal_a9b66a73e7366d13b8c8b154c4c4c46fc90cc3ab29863b61610f84baf378fcd6_prof);

        
        $__internal_f5a6c9da18fa7366829b8cc61019c7fa2593719c96b1f387ed150f16136422be->leave($__internal_f5a6c9da18fa7366829b8cc61019c7fa2593719c96b1f387ed150f16136422be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
