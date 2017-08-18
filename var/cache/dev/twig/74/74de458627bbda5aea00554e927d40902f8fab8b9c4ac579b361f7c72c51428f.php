<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_37c4aab3eadd7c2e4543107c44abce7341ac883bf6c341e9e99233861695d5d7 extends Twig_Template
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
        $__internal_c71263e624fdaa686448aebd80b13f71cd67f7eefe3ef3913b9ed206303fe2ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c71263e624fdaa686448aebd80b13f71cd67f7eefe3ef3913b9ed206303fe2ca->enter($__internal_c71263e624fdaa686448aebd80b13f71cd67f7eefe3ef3913b9ed206303fe2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_a19ef95199206b09c9aa8af4f309cda516bb30c0c0cad93a00cfc29438b45b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a19ef95199206b09c9aa8af4f309cda516bb30c0c0cad93a00cfc29438b45b85->enter($__internal_a19ef95199206b09c9aa8af4f309cda516bb30c0c0cad93a00cfc29438b45b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c71263e624fdaa686448aebd80b13f71cd67f7eefe3ef3913b9ed206303fe2ca->leave($__internal_c71263e624fdaa686448aebd80b13f71cd67f7eefe3ef3913b9ed206303fe2ca_prof);

        
        $__internal_a19ef95199206b09c9aa8af4f309cda516bb30c0c0cad93a00cfc29438b45b85->leave($__internal_a19ef95199206b09c9aa8af4f309cda516bb30c0c0cad93a00cfc29438b45b85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
