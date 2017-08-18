<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_db67576ab13396060acbd6222717f8f87487f92492b5724a5ae606fb5f0f15b4 extends Twig_Template
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
        $__internal_5b2b96c10f853f7161af990f8dfc6c2071ab79a75a00e99bc1ba4121294dd599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b2b96c10f853f7161af990f8dfc6c2071ab79a75a00e99bc1ba4121294dd599->enter($__internal_5b2b96c10f853f7161af990f8dfc6c2071ab79a75a00e99bc1ba4121294dd599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_e9d1e016fc85b3ca14c533614d3d88436560fa40fffe6e5777e348fa0df9c405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d1e016fc85b3ca14c533614d3d88436560fa40fffe6e5777e348fa0df9c405->enter($__internal_e9d1e016fc85b3ca14c533614d3d88436560fa40fffe6e5777e348fa0df9c405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5b2b96c10f853f7161af990f8dfc6c2071ab79a75a00e99bc1ba4121294dd599->leave($__internal_5b2b96c10f853f7161af990f8dfc6c2071ab79a75a00e99bc1ba4121294dd599_prof);

        
        $__internal_e9d1e016fc85b3ca14c533614d3d88436560fa40fffe6e5777e348fa0df9c405->leave($__internal_e9d1e016fc85b3ca14c533614d3d88436560fa40fffe6e5777e348fa0df9c405_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
