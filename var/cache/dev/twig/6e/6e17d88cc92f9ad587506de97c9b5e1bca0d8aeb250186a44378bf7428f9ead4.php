<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_78bc61b7fa32d623645140918cb3a325707ea274d199d3c1b456064915b75f3d extends Twig_Template
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
        $__internal_7490f24fc3ab8114f17c95d2450b029c3f8e40fd32c107580a85adce34cf6aa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7490f24fc3ab8114f17c95d2450b029c3f8e40fd32c107580a85adce34cf6aa4->enter($__internal_7490f24fc3ab8114f17c95d2450b029c3f8e40fd32c107580a85adce34cf6aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_1c2b6635e99effbc1a1268749307da576edfd9aa2457152537f77548fd2c7ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c2b6635e99effbc1a1268749307da576edfd9aa2457152537f77548fd2c7ff0->enter($__internal_1c2b6635e99effbc1a1268749307da576edfd9aa2457152537f77548fd2c7ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_7490f24fc3ab8114f17c95d2450b029c3f8e40fd32c107580a85adce34cf6aa4->leave($__internal_7490f24fc3ab8114f17c95d2450b029c3f8e40fd32c107580a85adce34cf6aa4_prof);

        
        $__internal_1c2b6635e99effbc1a1268749307da576edfd9aa2457152537f77548fd2c7ff0->leave($__internal_1c2b6635e99effbc1a1268749307da576edfd9aa2457152537f77548fd2c7ff0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
