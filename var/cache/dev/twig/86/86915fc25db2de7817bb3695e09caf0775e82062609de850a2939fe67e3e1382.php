<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_e11d5e8395d86d98b7d409d44045c48324109aadafb8e7ecd9848eedd142973d extends Twig_Template
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
        $__internal_3e1b7c884ecd5734d16d8eeec249fa6567676f0f6ea8b7569fcb1a80444cc710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e1b7c884ecd5734d16d8eeec249fa6567676f0f6ea8b7569fcb1a80444cc710->enter($__internal_3e1b7c884ecd5734d16d8eeec249fa6567676f0f6ea8b7569fcb1a80444cc710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_1652f1351974231fb5fde9b1d96e9b954bec36b3334d9e47e2e621e3b02452cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1652f1351974231fb5fde9b1d96e9b954bec36b3334d9e47e2e621e3b02452cc->enter($__internal_1652f1351974231fb5fde9b1d96e9b954bec36b3334d9e47e2e621e3b02452cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3e1b7c884ecd5734d16d8eeec249fa6567676f0f6ea8b7569fcb1a80444cc710->leave($__internal_3e1b7c884ecd5734d16d8eeec249fa6567676f0f6ea8b7569fcb1a80444cc710_prof);

        
        $__internal_1652f1351974231fb5fde9b1d96e9b954bec36b3334d9e47e2e621e3b02452cc->leave($__internal_1652f1351974231fb5fde9b1d96e9b954bec36b3334d9e47e2e621e3b02452cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
