<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_63d3c19d53acabf83246b15e5f0dee6cd3fbb95abab7acb744bab2466c060f3c extends Twig_Template
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
        $__internal_9ebb2649f0074ba965ff6415afea7a384a26463bf554cf4429bad85e59ee5d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ebb2649f0074ba965ff6415afea7a384a26463bf554cf4429bad85e59ee5d48->enter($__internal_9ebb2649f0074ba965ff6415afea7a384a26463bf554cf4429bad85e59ee5d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_87fb0db970bff24419bf6d0b92d5b06cf219d305bf33bfa629f7f7658f636abb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87fb0db970bff24419bf6d0b92d5b06cf219d305bf33bfa629f7f7658f636abb->enter($__internal_87fb0db970bff24419bf6d0b92d5b06cf219d305bf33bfa629f7f7658f636abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_9ebb2649f0074ba965ff6415afea7a384a26463bf554cf4429bad85e59ee5d48->leave($__internal_9ebb2649f0074ba965ff6415afea7a384a26463bf554cf4429bad85e59ee5d48_prof);

        
        $__internal_87fb0db970bff24419bf6d0b92d5b06cf219d305bf33bfa629f7f7658f636abb->leave($__internal_87fb0db970bff24419bf6d0b92d5b06cf219d305bf33bfa629f7f7658f636abb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
