<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3c8d1f2ffb959ccb917839180f1154d9f247134511fda2afb6690059085b68f3 extends Twig_Template
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
        $__internal_b9b0bc266692edaf3f3f7a3cb338b8e9177d931c26cddc4922b3cfadbf7e9d56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9b0bc266692edaf3f3f7a3cb338b8e9177d931c26cddc4922b3cfadbf7e9d56->enter($__internal_b9b0bc266692edaf3f3f7a3cb338b8e9177d931c26cddc4922b3cfadbf7e9d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_f24fdfb3523b6272eb05788788a8cc33817e92d7b2c2626735fe3846ea4aa0dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f24fdfb3523b6272eb05788788a8cc33817e92d7b2c2626735fe3846ea4aa0dc->enter($__internal_f24fdfb3523b6272eb05788788a8cc33817e92d7b2c2626735fe3846ea4aa0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_b9b0bc266692edaf3f3f7a3cb338b8e9177d931c26cddc4922b3cfadbf7e9d56->leave($__internal_b9b0bc266692edaf3f3f7a3cb338b8e9177d931c26cddc4922b3cfadbf7e9d56_prof);

        
        $__internal_f24fdfb3523b6272eb05788788a8cc33817e92d7b2c2626735fe3846ea4aa0dc->leave($__internal_f24fdfb3523b6272eb05788788a8cc33817e92d7b2c2626735fe3846ea4aa0dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
