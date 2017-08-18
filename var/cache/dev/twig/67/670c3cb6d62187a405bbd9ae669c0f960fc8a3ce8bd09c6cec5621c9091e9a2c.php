<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_4e9f0cee3b1b5f79722802ae2a65aa8a386f85ce421231a98191fb15bd8db6ec extends Twig_Template
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
        $__internal_c120d698ddb34ad43f541daa112e68a79c7832c06ff6ea235646909f3b8bbcd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c120d698ddb34ad43f541daa112e68a79c7832c06ff6ea235646909f3b8bbcd3->enter($__internal_c120d698ddb34ad43f541daa112e68a79c7832c06ff6ea235646909f3b8bbcd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_10680149ddbcf8ebde872181f00cf3d2b050f8c90980e57f64c9e813005ef899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10680149ddbcf8ebde872181f00cf3d2b050f8c90980e57f64c9e813005ef899->enter($__internal_10680149ddbcf8ebde872181f00cf3d2b050f8c90980e57f64c9e813005ef899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c120d698ddb34ad43f541daa112e68a79c7832c06ff6ea235646909f3b8bbcd3->leave($__internal_c120d698ddb34ad43f541daa112e68a79c7832c06ff6ea235646909f3b8bbcd3_prof);

        
        $__internal_10680149ddbcf8ebde872181f00cf3d2b050f8c90980e57f64c9e813005ef899->leave($__internal_10680149ddbcf8ebde872181f00cf3d2b050f8c90980e57f64c9e813005ef899_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
