<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_0abc6f40acca74d673f20a22d3c643166dd1267fa9f90a808e54c32fd1361d6a extends Twig_Template
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
        $__internal_1d0e3dfb4bcec6d8515c338807ed1c66306f8115ed797a11bbc8940bb4012c51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d0e3dfb4bcec6d8515c338807ed1c66306f8115ed797a11bbc8940bb4012c51->enter($__internal_1d0e3dfb4bcec6d8515c338807ed1c66306f8115ed797a11bbc8940bb4012c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_6ba9498320a94d0ed30cc45c4172d5589c390ec44127ecc3a91c49353ee8577b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba9498320a94d0ed30cc45c4172d5589c390ec44127ecc3a91c49353ee8577b->enter($__internal_6ba9498320a94d0ed30cc45c4172d5589c390ec44127ecc3a91c49353ee8577b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1d0e3dfb4bcec6d8515c338807ed1c66306f8115ed797a11bbc8940bb4012c51->leave($__internal_1d0e3dfb4bcec6d8515c338807ed1c66306f8115ed797a11bbc8940bb4012c51_prof);

        
        $__internal_6ba9498320a94d0ed30cc45c4172d5589c390ec44127ecc3a91c49353ee8577b->leave($__internal_6ba9498320a94d0ed30cc45c4172d5589c390ec44127ecc3a91c49353ee8577b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
