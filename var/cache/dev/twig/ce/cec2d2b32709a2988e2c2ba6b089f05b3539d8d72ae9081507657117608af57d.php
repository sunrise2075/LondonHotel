<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_593d10979dc0f4b40c5c0b703e830a9ccfe2bafa9fdabf362ad5f4f2640ed424 extends Twig_Template
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
        $__internal_fe9a5f13a8dadf2d912e1dec2ad8d1e036a6641511c4fd6cb8b15c1e49342ae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe9a5f13a8dadf2d912e1dec2ad8d1e036a6641511c4fd6cb8b15c1e49342ae0->enter($__internal_fe9a5f13a8dadf2d912e1dec2ad8d1e036a6641511c4fd6cb8b15c1e49342ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_0841fd64d30363a7dac64d84caa9382f273b691e6314e35d37269a9261bb6067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0841fd64d30363a7dac64d84caa9382f273b691e6314e35d37269a9261bb6067->enter($__internal_0841fd64d30363a7dac64d84caa9382f273b691e6314e35d37269a9261bb6067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_fe9a5f13a8dadf2d912e1dec2ad8d1e036a6641511c4fd6cb8b15c1e49342ae0->leave($__internal_fe9a5f13a8dadf2d912e1dec2ad8d1e036a6641511c4fd6cb8b15c1e49342ae0_prof);

        
        $__internal_0841fd64d30363a7dac64d84caa9382f273b691e6314e35d37269a9261bb6067->leave($__internal_0841fd64d30363a7dac64d84caa9382f273b691e6314e35d37269a9261bb6067_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
