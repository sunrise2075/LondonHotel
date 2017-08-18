<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_21324357a1d9085b902510ae61ab7ff3ed65e0d28998bcb2d3a20e55f71f5c6d extends Twig_Template
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
        $__internal_cffa0e4a479575f07d97ea8c53ba46172cd0775afe31085f03136b0cf8fa36ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cffa0e4a479575f07d97ea8c53ba46172cd0775afe31085f03136b0cf8fa36ce->enter($__internal_cffa0e4a479575f07d97ea8c53ba46172cd0775afe31085f03136b0cf8fa36ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_b7bd13a6095f04c34c8a0235300fb981de49bfd11112d9880152c42dc5b02444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7bd13a6095f04c34c8a0235300fb981de49bfd11112d9880152c42dc5b02444->enter($__internal_b7bd13a6095f04c34c8a0235300fb981de49bfd11112d9880152c42dc5b02444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_cffa0e4a479575f07d97ea8c53ba46172cd0775afe31085f03136b0cf8fa36ce->leave($__internal_cffa0e4a479575f07d97ea8c53ba46172cd0775afe31085f03136b0cf8fa36ce_prof);

        
        $__internal_b7bd13a6095f04c34c8a0235300fb981de49bfd11112d9880152c42dc5b02444->leave($__internal_b7bd13a6095f04c34c8a0235300fb981de49bfd11112d9880152c42dc5b02444_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
