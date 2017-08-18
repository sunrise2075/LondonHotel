<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_1a193c62cbe481a8c7645801751021bc3b19cb16d08f1106e9e1ba8cc8694d3b extends Twig_Template
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
        $__internal_53d3fbfa989f36fd56acf14f9511cbe63c05145badad52e8a20b0ba1da049e68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53d3fbfa989f36fd56acf14f9511cbe63c05145badad52e8a20b0ba1da049e68->enter($__internal_53d3fbfa989f36fd56acf14f9511cbe63c05145badad52e8a20b0ba1da049e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_5ad333583b0c103efd5753fbf4748998dfbdeae4bdf5ef3bc8ce0755fa8bf87e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad333583b0c103efd5753fbf4748998dfbdeae4bdf5ef3bc8ce0755fa8bf87e->enter($__internal_5ad333583b0c103efd5753fbf4748998dfbdeae4bdf5ef3bc8ce0755fa8bf87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_53d3fbfa989f36fd56acf14f9511cbe63c05145badad52e8a20b0ba1da049e68->leave($__internal_53d3fbfa989f36fd56acf14f9511cbe63c05145badad52e8a20b0ba1da049e68_prof);

        
        $__internal_5ad333583b0c103efd5753fbf4748998dfbdeae4bdf5ef3bc8ce0755fa8bf87e->leave($__internal_5ad333583b0c103efd5753fbf4748998dfbdeae4bdf5ef3bc8ce0755fa8bf87e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
