<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_c372ea0fc2037994edc2295b1a9f70375efec7f903c4ecf5c33b51de3d19df29 extends Twig_Template
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
        $__internal_7313e18fc354d2662907d39668be11e6124a02c4b9fbb6b65658a10548980543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7313e18fc354d2662907d39668be11e6124a02c4b9fbb6b65658a10548980543->enter($__internal_7313e18fc354d2662907d39668be11e6124a02c4b9fbb6b65658a10548980543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_a00b9d2652f9a8ebbf78956ce77a9a35d9a60da4b806a3ddf01e8ea729754e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00b9d2652f9a8ebbf78956ce77a9a35d9a60da4b806a3ddf01e8ea729754e67->enter($__internal_a00b9d2652f9a8ebbf78956ce77a9a35d9a60da4b806a3ddf01e8ea729754e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_7313e18fc354d2662907d39668be11e6124a02c4b9fbb6b65658a10548980543->leave($__internal_7313e18fc354d2662907d39668be11e6124a02c4b9fbb6b65658a10548980543_prof);

        
        $__internal_a00b9d2652f9a8ebbf78956ce77a9a35d9a60da4b806a3ddf01e8ea729754e67->leave($__internal_a00b9d2652f9a8ebbf78956ce77a9a35d9a60da4b806a3ddf01e8ea729754e67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
