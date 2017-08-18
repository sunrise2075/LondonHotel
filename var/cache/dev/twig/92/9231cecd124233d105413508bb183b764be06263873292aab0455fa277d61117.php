<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_733b883909b66e4f0a2ec107c28cf1a36acbd9b45a13eb4b88b71ce8916391ca extends Twig_Template
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
        $__internal_9ba0cbc40880ec493a9482c51341d8771f369b56b0662dec921c7c17cdd699ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ba0cbc40880ec493a9482c51341d8771f369b56b0662dec921c7c17cdd699ef->enter($__internal_9ba0cbc40880ec493a9482c51341d8771f369b56b0662dec921c7c17cdd699ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_6a83747ad15f2bc90003b8207b2a793a8da6862a0e6f70ee4f8c1e5f7d193012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a83747ad15f2bc90003b8207b2a793a8da6862a0e6f70ee4f8c1e5f7d193012->enter($__internal_6a83747ad15f2bc90003b8207b2a793a8da6862a0e6f70ee4f8c1e5f7d193012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_9ba0cbc40880ec493a9482c51341d8771f369b56b0662dec921c7c17cdd699ef->leave($__internal_9ba0cbc40880ec493a9482c51341d8771f369b56b0662dec921c7c17cdd699ef_prof);

        
        $__internal_6a83747ad15f2bc90003b8207b2a793a8da6862a0e6f70ee4f8c1e5f7d193012->leave($__internal_6a83747ad15f2bc90003b8207b2a793a8da6862a0e6f70ee4f8c1e5f7d193012_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
