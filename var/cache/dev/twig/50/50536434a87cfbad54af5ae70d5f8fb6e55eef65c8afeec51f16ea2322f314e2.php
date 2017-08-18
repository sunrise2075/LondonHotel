<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_e4e8368a4163fce3e002b88c7620c51e3fd9222e22af08c406efcd3c5d322614 extends Twig_Template
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
        $__internal_4cb0b34af602b84733c7724ef122ee6a054d89138af2eb3c640228c66d962583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cb0b34af602b84733c7724ef122ee6a054d89138af2eb3c640228c66d962583->enter($__internal_4cb0b34af602b84733c7724ef122ee6a054d89138af2eb3c640228c66d962583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_d563ce5131f4218b1b45d7089d5f94eef56580e88ff8cf41c2a7eaf223e98cb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d563ce5131f4218b1b45d7089d5f94eef56580e88ff8cf41c2a7eaf223e98cb4->enter($__internal_d563ce5131f4218b1b45d7089d5f94eef56580e88ff8cf41c2a7eaf223e98cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_4cb0b34af602b84733c7724ef122ee6a054d89138af2eb3c640228c66d962583->leave($__internal_4cb0b34af602b84733c7724ef122ee6a054d89138af2eb3c640228c66d962583_prof);

        
        $__internal_d563ce5131f4218b1b45d7089d5f94eef56580e88ff8cf41c2a7eaf223e98cb4->leave($__internal_d563ce5131f4218b1b45d7089d5f94eef56580e88ff8cf41c2a7eaf223e98cb4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
