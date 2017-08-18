<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_22c72c03391b2743217a7884bfd1a8d5f9aaee484a7326701662adb5833a948c extends Twig_Template
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
        $__internal_238e29f51d39a56fa52e9a3e5c9303795734b295b098b588395489e9496cb7bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_238e29f51d39a56fa52e9a3e5c9303795734b295b098b588395489e9496cb7bb->enter($__internal_238e29f51d39a56fa52e9a3e5c9303795734b295b098b588395489e9496cb7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_da8a290d80b7c3ce0efee1e3b69c385f541aa2ebd225429e23234d0dba273bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da8a290d80b7c3ce0efee1e3b69c385f541aa2ebd225429e23234d0dba273bfb->enter($__internal_da8a290d80b7c3ce0efee1e3b69c385f541aa2ebd225429e23234d0dba273bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_238e29f51d39a56fa52e9a3e5c9303795734b295b098b588395489e9496cb7bb->leave($__internal_238e29f51d39a56fa52e9a3e5c9303795734b295b098b588395489e9496cb7bb_prof);

        
        $__internal_da8a290d80b7c3ce0efee1e3b69c385f541aa2ebd225429e23234d0dba273bfb->leave($__internal_da8a290d80b7c3ce0efee1e3b69c385f541aa2ebd225429e23234d0dba273bfb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
