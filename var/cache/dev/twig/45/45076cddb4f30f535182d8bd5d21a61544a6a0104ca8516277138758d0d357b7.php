<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e95c9d7e3865262da325421c54be43acb05a7c14938080290291cd79ea35e746 extends Twig_Template
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
        $__internal_602715eaf61a312178b195f42e011ccbeb3bf8c27088a65d5c6b15e8590c743c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_602715eaf61a312178b195f42e011ccbeb3bf8c27088a65d5c6b15e8590c743c->enter($__internal_602715eaf61a312178b195f42e011ccbeb3bf8c27088a65d5c6b15e8590c743c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a0ddfced0b4237aa2716517c6312cb191f4042803ca6702e51c1b8563040cb90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ddfced0b4237aa2716517c6312cb191f4042803ca6702e51c1b8563040cb90->enter($__internal_a0ddfced0b4237aa2716517c6312cb191f4042803ca6702e51c1b8563040cb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_602715eaf61a312178b195f42e011ccbeb3bf8c27088a65d5c6b15e8590c743c->leave($__internal_602715eaf61a312178b195f42e011ccbeb3bf8c27088a65d5c6b15e8590c743c_prof);

        
        $__internal_a0ddfced0b4237aa2716517c6312cb191f4042803ca6702e51c1b8563040cb90->leave($__internal_a0ddfced0b4237aa2716517c6312cb191f4042803ca6702e51c1b8563040cb90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
