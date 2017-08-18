<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_67f9e125f076553221793dd94335bed6df7f3f4e480309f5ff9c56b49d6248ea extends Twig_Template
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
        $__internal_13c42c6c0585596d4133822a583cbf4fd6f9188a5317aaa79998096e59d36379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13c42c6c0585596d4133822a583cbf4fd6f9188a5317aaa79998096e59d36379->enter($__internal_13c42c6c0585596d4133822a583cbf4fd6f9188a5317aaa79998096e59d36379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_5e823d56f96dafeb9cb229829381a13e71159836d64d3ed1265d6f35fb37c48e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e823d56f96dafeb9cb229829381a13e71159836d64d3ed1265d6f35fb37c48e->enter($__internal_5e823d56f96dafeb9cb229829381a13e71159836d64d3ed1265d6f35fb37c48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_13c42c6c0585596d4133822a583cbf4fd6f9188a5317aaa79998096e59d36379->leave($__internal_13c42c6c0585596d4133822a583cbf4fd6f9188a5317aaa79998096e59d36379_prof);

        
        $__internal_5e823d56f96dafeb9cb229829381a13e71159836d64d3ed1265d6f35fb37c48e->leave($__internal_5e823d56f96dafeb9cb229829381a13e71159836d64d3ed1265d6f35fb37c48e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
