<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_a3286960c4937078cb3bfa8806f6bbbda96de6c6d8c7588076addbcf43cf3015 extends Twig_Template
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
        $__internal_fa6e5019308a029ce203a65ac279f4de297000ab2693cd625ca1a0791c019089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa6e5019308a029ce203a65ac279f4de297000ab2693cd625ca1a0791c019089->enter($__internal_fa6e5019308a029ce203a65ac279f4de297000ab2693cd625ca1a0791c019089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_b30ed56ba1c02d17f64f24cdec55fd5fd9527e40785130896bf1bd680fa97434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b30ed56ba1c02d17f64f24cdec55fd5fd9527e40785130896bf1bd680fa97434->enter($__internal_b30ed56ba1c02d17f64f24cdec55fd5fd9527e40785130896bf1bd680fa97434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_fa6e5019308a029ce203a65ac279f4de297000ab2693cd625ca1a0791c019089->leave($__internal_fa6e5019308a029ce203a65ac279f4de297000ab2693cd625ca1a0791c019089_prof);

        
        $__internal_b30ed56ba1c02d17f64f24cdec55fd5fd9527e40785130896bf1bd680fa97434->leave($__internal_b30ed56ba1c02d17f64f24cdec55fd5fd9527e40785130896bf1bd680fa97434_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
