<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_17a554e40bd3d9db1981ef15a9247be3530b67b3cd5626e7874f8804576ff299 extends Twig_Template
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
        $__internal_a60937f62b20ad818cdf79ffa628df05c4166f74783e131b751464252bf40352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a60937f62b20ad818cdf79ffa628df05c4166f74783e131b751464252bf40352->enter($__internal_a60937f62b20ad818cdf79ffa628df05c4166f74783e131b751464252bf40352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_63d00fa1f54a415f7c60a3def973176e0c8f20a9fbed02ccf47ed1cc3e7ec166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d00fa1f54a415f7c60a3def973176e0c8f20a9fbed02ccf47ed1cc3e7ec166->enter($__internal_63d00fa1f54a415f7c60a3def973176e0c8f20a9fbed02ccf47ed1cc3e7ec166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a60937f62b20ad818cdf79ffa628df05c4166f74783e131b751464252bf40352->leave($__internal_a60937f62b20ad818cdf79ffa628df05c4166f74783e131b751464252bf40352_prof);

        
        $__internal_63d00fa1f54a415f7c60a3def973176e0c8f20a9fbed02ccf47ed1cc3e7ec166->leave($__internal_63d00fa1f54a415f7c60a3def973176e0c8f20a9fbed02ccf47ed1cc3e7ec166_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
