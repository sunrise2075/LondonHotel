<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f8dec6437b1a13b64c5e8a8c3a4c13f6a83881fd4deddb2755188ef54c7b594c extends Twig_Template
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
        $__internal_82cf828bcc7bc93a794266f0306b7d841ed5db1e29aba917d407f9cd7d080808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82cf828bcc7bc93a794266f0306b7d841ed5db1e29aba917d407f9cd7d080808->enter($__internal_82cf828bcc7bc93a794266f0306b7d841ed5db1e29aba917d407f9cd7d080808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_bb8232082b5e630124f65d4cec020ffd3ba4703a828236422b93cfe8d579d645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8232082b5e630124f65d4cec020ffd3ba4703a828236422b93cfe8d579d645->enter($__internal_bb8232082b5e630124f65d4cec020ffd3ba4703a828236422b93cfe8d579d645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_82cf828bcc7bc93a794266f0306b7d841ed5db1e29aba917d407f9cd7d080808->leave($__internal_82cf828bcc7bc93a794266f0306b7d841ed5db1e29aba917d407f9cd7d080808_prof);

        
        $__internal_bb8232082b5e630124f65d4cec020ffd3ba4703a828236422b93cfe8d579d645->leave($__internal_bb8232082b5e630124f65d4cec020ffd3ba4703a828236422b93cfe8d579d645_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/franky/Documents/symfony-projects/LondonHotel/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
