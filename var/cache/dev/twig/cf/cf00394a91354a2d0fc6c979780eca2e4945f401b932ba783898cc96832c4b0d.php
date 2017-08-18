<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c02a4531965c8d193a8b1cab86cd62377bb671c85e8cc5b32fc79d88f6a2bc1f extends Twig_Template
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
        $__internal_f56d509e40e87c48757c26801a1f2cf84a4fbb82fb7ab47bcc960ad4fcb0aa08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f56d509e40e87c48757c26801a1f2cf84a4fbb82fb7ab47bcc960ad4fcb0aa08->enter($__internal_f56d509e40e87c48757c26801a1f2cf84a4fbb82fb7ab47bcc960ad4fcb0aa08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_4c576b25b8c5bb4c46d6f07ff35d40fe5bebec13edd2e4134f2b4a7fae37b9be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c576b25b8c5bb4c46d6f07ff35d40fe5bebec13edd2e4134f2b4a7fae37b9be->enter($__internal_4c576b25b8c5bb4c46d6f07ff35d40fe5bebec13edd2e4134f2b4a7fae37b9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f56d509e40e87c48757c26801a1f2cf84a4fbb82fb7ab47bcc960ad4fcb0aa08->leave($__internal_f56d509e40e87c48757c26801a1f2cf84a4fbb82fb7ab47bcc960ad4fcb0aa08_prof);

        
        $__internal_4c576b25b8c5bb4c46d6f07ff35d40fe5bebec13edd2e4134f2b4a7fae37b9be->leave($__internal_4c576b25b8c5bb4c46d6f07ff35d40fe5bebec13edd2e4134f2b4a7fae37b9be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
