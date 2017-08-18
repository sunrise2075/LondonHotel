<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4d19a1295302c2b1b7d3463e2707e37611808fd7815c55fed8b5c355d4cc6971 extends Twig_Template
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
        $__internal_f3b0ff75cf324b3190170d1fc4917d79e948af615147ef4174c54399b7e36a09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3b0ff75cf324b3190170d1fc4917d79e948af615147ef4174c54399b7e36a09->enter($__internal_f3b0ff75cf324b3190170d1fc4917d79e948af615147ef4174c54399b7e36a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_fe5c922344e8a2e5ca1eaf44acab31a838807debbf7fde1a5302da854b6d0725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe5c922344e8a2e5ca1eaf44acab31a838807debbf7fde1a5302da854b6d0725->enter($__internal_fe5c922344e8a2e5ca1eaf44acab31a838807debbf7fde1a5302da854b6d0725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f3b0ff75cf324b3190170d1fc4917d79e948af615147ef4174c54399b7e36a09->leave($__internal_f3b0ff75cf324b3190170d1fc4917d79e948af615147ef4174c54399b7e36a09_prof);

        
        $__internal_fe5c922344e8a2e5ca1eaf44acab31a838807debbf7fde1a5302da854b6d0725->leave($__internal_fe5c922344e8a2e5ca1eaf44acab31a838807debbf7fde1a5302da854b6d0725_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
