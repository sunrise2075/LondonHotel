<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_46fb94d3043ab9342a6bbe165e6ceb23c8071781b8811ff3096b37eed5b30bd5 extends Twig_Template
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
        $__internal_429b13a4d68edb1a2054b5f23f88817850ab2489d3e551eaa77051ea9d48cc4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_429b13a4d68edb1a2054b5f23f88817850ab2489d3e551eaa77051ea9d48cc4d->enter($__internal_429b13a4d68edb1a2054b5f23f88817850ab2489d3e551eaa77051ea9d48cc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_7b92f58526c89b6c43638f81362888e804404babc30b78b0850412d64e5c0319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b92f58526c89b6c43638f81362888e804404babc30b78b0850412d64e5c0319->enter($__internal_7b92f58526c89b6c43638f81362888e804404babc30b78b0850412d64e5c0319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_429b13a4d68edb1a2054b5f23f88817850ab2489d3e551eaa77051ea9d48cc4d->leave($__internal_429b13a4d68edb1a2054b5f23f88817850ab2489d3e551eaa77051ea9d48cc4d_prof);

        
        $__internal_7b92f58526c89b6c43638f81362888e804404babc30b78b0850412d64e5c0319->leave($__internal_7b92f58526c89b6c43638f81362888e804404babc30b78b0850412d64e5c0319_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
