<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_8197c3665eb54af64f2d7bd358fa5d553b9572695456ead28dc3b70c0752d3ea extends Twig_Template
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
        $__internal_49cdeb07057b16eef523ff74d7ef39c1de7b289592213b720b8ccc4bc5515505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49cdeb07057b16eef523ff74d7ef39c1de7b289592213b720b8ccc4bc5515505->enter($__internal_49cdeb07057b16eef523ff74d7ef39c1de7b289592213b720b8ccc4bc5515505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_0206e412fe64a37624b9c5b0fe1e5789577427b22ddccd2d4fe6127efdcbbf26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0206e412fe64a37624b9c5b0fe1e5789577427b22ddccd2d4fe6127efdcbbf26->enter($__internal_0206e412fe64a37624b9c5b0fe1e5789577427b22ddccd2d4fe6127efdcbbf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_49cdeb07057b16eef523ff74d7ef39c1de7b289592213b720b8ccc4bc5515505->leave($__internal_49cdeb07057b16eef523ff74d7ef39c1de7b289592213b720b8ccc4bc5515505_prof);

        
        $__internal_0206e412fe64a37624b9c5b0fe1e5789577427b22ddccd2d4fe6127efdcbbf26->leave($__internal_0206e412fe64a37624b9c5b0fe1e5789577427b22ddccd2d4fe6127efdcbbf26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
