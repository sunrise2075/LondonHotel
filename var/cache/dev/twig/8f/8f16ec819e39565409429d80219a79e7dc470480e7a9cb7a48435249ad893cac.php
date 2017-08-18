<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_984505c96580befa6e2a4f9b70e9221843e0cf5ee344f7c8b9b816f1b848a354 extends Twig_Template
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
        $__internal_c370f3a46655c2603dec6620b66304bde3bdb6b14eafdf193127c95b2b41e0d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c370f3a46655c2603dec6620b66304bde3bdb6b14eafdf193127c95b2b41e0d8->enter($__internal_c370f3a46655c2603dec6620b66304bde3bdb6b14eafdf193127c95b2b41e0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_b22c5b76034cbf03dba228ce0fa2038082bdf6c5b2544a67e3ddfe338b30f4b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b22c5b76034cbf03dba228ce0fa2038082bdf6c5b2544a67e3ddfe338b30f4b9->enter($__internal_b22c5b76034cbf03dba228ce0fa2038082bdf6c5b2544a67e3ddfe338b30f4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_c370f3a46655c2603dec6620b66304bde3bdb6b14eafdf193127c95b2b41e0d8->leave($__internal_c370f3a46655c2603dec6620b66304bde3bdb6b14eafdf193127c95b2b41e0d8_prof);

        
        $__internal_b22c5b76034cbf03dba228ce0fa2038082bdf6c5b2544a67e3ddfe338b30f4b9->leave($__internal_b22c5b76034cbf03dba228ce0fa2038082bdf6c5b2544a67e3ddfe338b30f4b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
