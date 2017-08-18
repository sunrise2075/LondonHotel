<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_1a8ea2f29b0e8fcd32a8fb732c69cce726093125e892d6435320cbbdf55006d6 extends Twig_Template
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
        $__internal_485750fe2b67524a468d4c0c38d1d3f382348bd939c0fa9afea9b03247d1c8d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_485750fe2b67524a468d4c0c38d1d3f382348bd939c0fa9afea9b03247d1c8d5->enter($__internal_485750fe2b67524a468d4c0c38d1d3f382348bd939c0fa9afea9b03247d1c8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_0a806503a9761fc6eabb956cedf8a654245a9397592529124458ac9bbd3ab6bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a806503a9761fc6eabb956cedf8a654245a9397592529124458ac9bbd3ab6bf->enter($__internal_0a806503a9761fc6eabb956cedf8a654245a9397592529124458ac9bbd3ab6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_485750fe2b67524a468d4c0c38d1d3f382348bd939c0fa9afea9b03247d1c8d5->leave($__internal_485750fe2b67524a468d4c0c38d1d3f382348bd939c0fa9afea9b03247d1c8d5_prof);

        
        $__internal_0a806503a9761fc6eabb956cedf8a654245a9397592529124458ac9bbd3ab6bf->leave($__internal_0a806503a9761fc6eabb956cedf8a654245a9397592529124458ac9bbd3ab6bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
