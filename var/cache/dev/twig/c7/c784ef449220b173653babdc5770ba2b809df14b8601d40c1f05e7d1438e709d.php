<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_c2235d6ba490bd656348bd182d3d5cab093af3dc94d6de04793b0bb1c9e65a03 extends Twig_Template
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
        $__internal_84e70efd24ecf4606fd41e8430be633466894259acac6064b87adac8da7e2eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84e70efd24ecf4606fd41e8430be633466894259acac6064b87adac8da7e2eb9->enter($__internal_84e70efd24ecf4606fd41e8430be633466894259acac6064b87adac8da7e2eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_5e472c52516af446b733a984025166f504704b145a7593c76d4b61a980bc5ad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e472c52516af446b733a984025166f504704b145a7593c76d4b61a980bc5ad3->enter($__internal_5e472c52516af446b733a984025166f504704b145a7593c76d4b61a980bc5ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_84e70efd24ecf4606fd41e8430be633466894259acac6064b87adac8da7e2eb9->leave($__internal_84e70efd24ecf4606fd41e8430be633466894259acac6064b87adac8da7e2eb9_prof);

        
        $__internal_5e472c52516af446b733a984025166f504704b145a7593c76d4b61a980bc5ad3->leave($__internal_5e472c52516af446b733a984025166f504704b145a7593c76d4b61a980bc5ad3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
