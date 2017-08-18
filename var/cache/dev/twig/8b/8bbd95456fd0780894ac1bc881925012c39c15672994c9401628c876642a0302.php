<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_46bca856752666aa29e762dfff6fc9cbc54ccaec7c6750d5e92b14931c38f00d extends Twig_Template
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
        $__internal_862745e3994c7043ae755e905410521b36a23b222f41ffb7f1a2b57df439da6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_862745e3994c7043ae755e905410521b36a23b222f41ffb7f1a2b57df439da6f->enter($__internal_862745e3994c7043ae755e905410521b36a23b222f41ffb7f1a2b57df439da6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_d0c5c0bf93513b023bd7cf52668130263a85383f39f97917f832eaf66be01f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0c5c0bf93513b023bd7cf52668130263a85383f39f97917f832eaf66be01f13->enter($__internal_d0c5c0bf93513b023bd7cf52668130263a85383f39f97917f832eaf66be01f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_862745e3994c7043ae755e905410521b36a23b222f41ffb7f1a2b57df439da6f->leave($__internal_862745e3994c7043ae755e905410521b36a23b222f41ffb7f1a2b57df439da6f_prof);

        
        $__internal_d0c5c0bf93513b023bd7cf52668130263a85383f39f97917f832eaf66be01f13->leave($__internal_d0c5c0bf93513b023bd7cf52668130263a85383f39f97917f832eaf66be01f13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
