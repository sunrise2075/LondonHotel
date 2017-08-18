<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_369b3615618aca3c7fd9e5b5aeb398c9b6040190e311650aaa4131ff5d76e5a2 extends Twig_Template
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
        $__internal_45036a9cdb16b9505cca52c2460cb12b062b39960d38eef1ea97949c4fe4b837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45036a9cdb16b9505cca52c2460cb12b062b39960d38eef1ea97949c4fe4b837->enter($__internal_45036a9cdb16b9505cca52c2460cb12b062b39960d38eef1ea97949c4fe4b837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_50f521d76762ecc714741642d1c401d717d20c80acc83cd3730f24c24e304435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f521d76762ecc714741642d1c401d717d20c80acc83cd3730f24c24e304435->enter($__internal_50f521d76762ecc714741642d1c401d717d20c80acc83cd3730f24c24e304435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_45036a9cdb16b9505cca52c2460cb12b062b39960d38eef1ea97949c4fe4b837->leave($__internal_45036a9cdb16b9505cca52c2460cb12b062b39960d38eef1ea97949c4fe4b837_prof);

        
        $__internal_50f521d76762ecc714741642d1c401d717d20c80acc83cd3730f24c24e304435->leave($__internal_50f521d76762ecc714741642d1c401d717d20c80acc83cd3730f24c24e304435_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
