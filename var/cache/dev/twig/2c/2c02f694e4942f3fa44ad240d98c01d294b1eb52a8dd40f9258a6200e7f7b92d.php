<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_aaf1f5fbf0335be4addbe51c4d2b733c2ab49b7a52d1354b23da7af33ffbbd27 extends Twig_Template
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
        $__internal_5602e25d7f8cf9717ec4b2b222792a54b1351ea85dbf7534f7deaa53a4d87bdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5602e25d7f8cf9717ec4b2b222792a54b1351ea85dbf7534f7deaa53a4d87bdb->enter($__internal_5602e25d7f8cf9717ec4b2b222792a54b1351ea85dbf7534f7deaa53a4d87bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_d018bdfbf8958487c2611242015269b2fa68dfcfd99d21b1d729e07b3ad2d6fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d018bdfbf8958487c2611242015269b2fa68dfcfd99d21b1d729e07b3ad2d6fd->enter($__internal_d018bdfbf8958487c2611242015269b2fa68dfcfd99d21b1d729e07b3ad2d6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_5602e25d7f8cf9717ec4b2b222792a54b1351ea85dbf7534f7deaa53a4d87bdb->leave($__internal_5602e25d7f8cf9717ec4b2b222792a54b1351ea85dbf7534f7deaa53a4d87bdb_prof);

        
        $__internal_d018bdfbf8958487c2611242015269b2fa68dfcfd99d21b1d729e07b3ad2d6fd->leave($__internal_d018bdfbf8958487c2611242015269b2fa68dfcfd99d21b1d729e07b3ad2d6fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
