<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7aa6d4422d6e0063ef0f946bb0989114d7527a013665471ffa76bd6626429e18 extends Twig_Template
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
        $__internal_d4aaf161c4966eb44f99613d111f463952038660fb1b7fa9e8c95c28f244dca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4aaf161c4966eb44f99613d111f463952038660fb1b7fa9e8c95c28f244dca5->enter($__internal_d4aaf161c4966eb44f99613d111f463952038660fb1b7fa9e8c95c28f244dca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_8d9ad91e415200e6bb45a3f7e0ab6815799de981f7879c8ae853dff89d1f99cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9ad91e415200e6bb45a3f7e0ab6815799de981f7879c8ae853dff89d1f99cc->enter($__internal_8d9ad91e415200e6bb45a3f7e0ab6815799de981f7879c8ae853dff89d1f99cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d4aaf161c4966eb44f99613d111f463952038660fb1b7fa9e8c95c28f244dca5->leave($__internal_d4aaf161c4966eb44f99613d111f463952038660fb1b7fa9e8c95c28f244dca5_prof);

        
        $__internal_8d9ad91e415200e6bb45a3f7e0ab6815799de981f7879c8ae853dff89d1f99cc->leave($__internal_8d9ad91e415200e6bb45a3f7e0ab6815799de981f7879c8ae853dff89d1f99cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
