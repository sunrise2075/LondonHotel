<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b0e597429c731b3070868b11cab3ec0a85729ec4f4c2c09ff853962e246f5f5b extends Twig_Template
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
        $__internal_9f66a645312b9354a1c5d8d6a325ee9da12d77d44e0809b9173b698d77050712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f66a645312b9354a1c5d8d6a325ee9da12d77d44e0809b9173b698d77050712->enter($__internal_9f66a645312b9354a1c5d8d6a325ee9da12d77d44e0809b9173b698d77050712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_aa6779371f34406c6d181781c3a7c2ea3bd7822eb08da20d8578634c8e9a58bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa6779371f34406c6d181781c3a7c2ea3bd7822eb08da20d8578634c8e9a58bc->enter($__internal_aa6779371f34406c6d181781c3a7c2ea3bd7822eb08da20d8578634c8e9a58bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_9f66a645312b9354a1c5d8d6a325ee9da12d77d44e0809b9173b698d77050712->leave($__internal_9f66a645312b9354a1c5d8d6a325ee9da12d77d44e0809b9173b698d77050712_prof);

        
        $__internal_aa6779371f34406c6d181781c3a7c2ea3bd7822eb08da20d8578634c8e9a58bc->leave($__internal_aa6779371f34406c6d181781c3a7c2ea3bd7822eb08da20d8578634c8e9a58bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
