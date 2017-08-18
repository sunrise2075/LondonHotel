<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_fb72a5674f47256ca99e52304878b15f7aba8bdfddc1733d6586d6815f4d3271 extends Twig_Template
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
        $__internal_f9c10de685502cf2a48856212ba4c1a206d5d774b1434160d233a2f6ff5e3c66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9c10de685502cf2a48856212ba4c1a206d5d774b1434160d233a2f6ff5e3c66->enter($__internal_f9c10de685502cf2a48856212ba4c1a206d5d774b1434160d233a2f6ff5e3c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_10bab464abd6ed3fde64140cbf93eec20184505b5ee946346ef43eedc85dffdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10bab464abd6ed3fde64140cbf93eec20184505b5ee946346ef43eedc85dffdd->enter($__internal_10bab464abd6ed3fde64140cbf93eec20184505b5ee946346ef43eedc85dffdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f9c10de685502cf2a48856212ba4c1a206d5d774b1434160d233a2f6ff5e3c66->leave($__internal_f9c10de685502cf2a48856212ba4c1a206d5d774b1434160d233a2f6ff5e3c66_prof);

        
        $__internal_10bab464abd6ed3fde64140cbf93eec20184505b5ee946346ef43eedc85dffdd->leave($__internal_10bab464abd6ed3fde64140cbf93eec20184505b5ee946346ef43eedc85dffdd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
