<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_03a982e6b5c7fdb7e5c79dbb157f3147291b113dd45da85fd30323be72d311e6 extends Twig_Template
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
        $__internal_ade814bc88e5bd54b74520d789c909109636cd2063d78326a8ee0c0e4a81a18f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ade814bc88e5bd54b74520d789c909109636cd2063d78326a8ee0c0e4a81a18f->enter($__internal_ade814bc88e5bd54b74520d789c909109636cd2063d78326a8ee0c0e4a81a18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_d0847523583d18f20b7b56735fe803e910bb381ed058aced1837f26b86cce383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0847523583d18f20b7b56735fe803e910bb381ed058aced1837f26b86cce383->enter($__internal_d0847523583d18f20b7b56735fe803e910bb381ed058aced1837f26b86cce383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ade814bc88e5bd54b74520d789c909109636cd2063d78326a8ee0c0e4a81a18f->leave($__internal_ade814bc88e5bd54b74520d789c909109636cd2063d78326a8ee0c0e4a81a18f_prof);

        
        $__internal_d0847523583d18f20b7b56735fe803e910bb381ed058aced1837f26b86cce383->leave($__internal_d0847523583d18f20b7b56735fe803e910bb381ed058aced1837f26b86cce383_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
