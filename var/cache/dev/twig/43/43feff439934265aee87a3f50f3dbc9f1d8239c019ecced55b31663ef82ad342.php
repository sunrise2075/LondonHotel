<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c9491781b15660cbdbc0ee9a0f66ed83202e3754243de39c9154c87d500a367e extends Twig_Template
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
        $__internal_07e119662ed7a7401797e1c69a445bf0c64b826f084d689521692922b0efd946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07e119662ed7a7401797e1c69a445bf0c64b826f084d689521692922b0efd946->enter($__internal_07e119662ed7a7401797e1c69a445bf0c64b826f084d689521692922b0efd946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_bbc15fab581eb7b78b1a5c5e925147984d693e4d99eb1c34e15b6d632be95623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc15fab581eb7b78b1a5c5e925147984d693e4d99eb1c34e15b6d632be95623->enter($__internal_bbc15fab581eb7b78b1a5c5e925147984d693e4d99eb1c34e15b6d632be95623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_07e119662ed7a7401797e1c69a445bf0c64b826f084d689521692922b0efd946->leave($__internal_07e119662ed7a7401797e1c69a445bf0c64b826f084d689521692922b0efd946_prof);

        
        $__internal_bbc15fab581eb7b78b1a5c5e925147984d693e4d99eb1c34e15b6d632be95623->leave($__internal_bbc15fab581eb7b78b1a5c5e925147984d693e4d99eb1c34e15b6d632be95623_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
