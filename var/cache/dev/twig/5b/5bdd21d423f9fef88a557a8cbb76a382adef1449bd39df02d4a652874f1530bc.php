<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4707ec56c6adcc18f72bcb43e2ceb26e1e71a55b4258af700e78d1508960f128 extends Twig_Template
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
        $__internal_81393a02225784b389745e3243d136850037eed429c48fc1ac0594833a982f41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81393a02225784b389745e3243d136850037eed429c48fc1ac0594833a982f41->enter($__internal_81393a02225784b389745e3243d136850037eed429c48fc1ac0594833a982f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_28207bd2a428eeda41ef2b89a7a94c92cd24dbde9d3916e393f277dcf4528582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28207bd2a428eeda41ef2b89a7a94c92cd24dbde9d3916e393f277dcf4528582->enter($__internal_28207bd2a428eeda41ef2b89a7a94c92cd24dbde9d3916e393f277dcf4528582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_81393a02225784b389745e3243d136850037eed429c48fc1ac0594833a982f41->leave($__internal_81393a02225784b389745e3243d136850037eed429c48fc1ac0594833a982f41_prof);

        
        $__internal_28207bd2a428eeda41ef2b89a7a94c92cd24dbde9d3916e393f277dcf4528582->leave($__internal_28207bd2a428eeda41ef2b89a7a94c92cd24dbde9d3916e393f277dcf4528582_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
