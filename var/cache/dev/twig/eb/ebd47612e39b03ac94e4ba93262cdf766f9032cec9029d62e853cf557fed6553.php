<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_14605e780f28331c9fdf88fe374a612989ffb834d9f6b84a015e29b9eb923e60 extends Twig_Template
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
        $__internal_f7a64c0ea271b065477a31859ea58e5fffb5c6ddf24436a1b821b30c4c52c46f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7a64c0ea271b065477a31859ea58e5fffb5c6ddf24436a1b821b30c4c52c46f->enter($__internal_f7a64c0ea271b065477a31859ea58e5fffb5c6ddf24436a1b821b30c4c52c46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_8c91d3ed710361daac38d844e457ff8e02eca07e080e60cf986ec2a1114e43b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c91d3ed710361daac38d844e457ff8e02eca07e080e60cf986ec2a1114e43b4->enter($__internal_8c91d3ed710361daac38d844e457ff8e02eca07e080e60cf986ec2a1114e43b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_f7a64c0ea271b065477a31859ea58e5fffb5c6ddf24436a1b821b30c4c52c46f->leave($__internal_f7a64c0ea271b065477a31859ea58e5fffb5c6ddf24436a1b821b30c4c52c46f_prof);

        
        $__internal_8c91d3ed710361daac38d844e457ff8e02eca07e080e60cf986ec2a1114e43b4->leave($__internal_8c91d3ed710361daac38d844e457ff8e02eca07e080e60cf986ec2a1114e43b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
