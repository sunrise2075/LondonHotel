<?php

/* base.html.twig */
class __TwigTemplate_22e52d6d7fd3e2eed62a344835c142a0a265e7682ff7a78028496d21a3b1e1fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c8a42e4a26a708c5847f7c9ca970058f9bb668c3634cdef57268b00f609dd02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c8a42e4a26a708c5847f7c9ca970058f9bb668c3634cdef57268b00f609dd02->enter($__internal_5c8a42e4a26a708c5847f7c9ca970058f9bb668c3634cdef57268b00f609dd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0312e8aef9d578258b1835cd3dcbc5a9b36e1942fdac20beb3d96a4c1157cb88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0312e8aef9d578258b1835cd3dcbc5a9b36e1942fdac20beb3d96a4c1157cb88->enter($__internal_0312e8aef9d578258b1835cd3dcbc5a9b36e1942fdac20beb3d96a4c1157cb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/foundation.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.date.css"), "html", null, true);
        echo "\">
    </head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_clients");
        echo "\">Clients</a></li>
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservations");
        echo "\">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2017</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/what-input.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.date.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>
    </body>
</html>
";
        
        $__internal_5c8a42e4a26a708c5847f7c9ca970058f9bb668c3634cdef57268b00f609dd02->leave($__internal_5c8a42e4a26a708c5847f7c9ca970058f9bb668c3634cdef57268b00f609dd02_prof);

        
        $__internal_0312e8aef9d578258b1835cd3dcbc5a9b36e1942fdac20beb3d96a4c1157cb88->leave($__internal_0312e8aef9d578258b1835cd3dcbc5a9b36e1942fdac20beb3d96a4c1157cb88_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_57d38cf038ae648039c5dbe1ccea572428afdaaf1940ca42c589bbba35bc266f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57d38cf038ae648039c5dbe1ccea572428afdaaf1940ca42c589bbba35bc266f->enter($__internal_57d38cf038ae648039c5dbe1ccea572428afdaaf1940ca42c589bbba35bc266f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_351960412cf0dab406a29456ddf5e3fbabe84d6a562835e3b7d1ae1df1b10aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351960412cf0dab406a29456ddf5e3fbabe84d6a562835e3b7d1ae1df1b10aa2->enter($__internal_351960412cf0dab406a29456ddf5e3fbabe84d6a562835e3b7d1ae1df1b10aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Landon Hotel App";
        
        $__internal_351960412cf0dab406a29456ddf5e3fbabe84d6a562835e3b7d1ae1df1b10aa2->leave($__internal_351960412cf0dab406a29456ddf5e3fbabe84d6a562835e3b7d1ae1df1b10aa2_prof);

        
        $__internal_57d38cf038ae648039c5dbe1ccea572428afdaaf1940ca42c589bbba35bc266f->leave($__internal_57d38cf038ae648039c5dbe1ccea572428afdaaf1940ca42c589bbba35bc266f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_38382854d45b3843ca87af7a7a5d42162bc37384c559cdf6fc4d241c310b0b5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38382854d45b3843ca87af7a7a5d42162bc37384c559cdf6fc4d241c310b0b5f->enter($__internal_38382854d45b3843ca87af7a7a5d42162bc37384c559cdf6fc4d241c310b0b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f654e662851db414dee21be5f68995ccadc28f73b6f1483129ab27a139ae7d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f654e662851db414dee21be5f68995ccadc28f73b6f1483129ab27a139ae7d34->enter($__internal_f654e662851db414dee21be5f68995ccadc28f73b6f1483129ab27a139ae7d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f654e662851db414dee21be5f68995ccadc28f73b6f1483129ab27a139ae7d34->leave($__internal_f654e662851db414dee21be5f68995ccadc28f73b6f1483129ab27a139ae7d34_prof);

        
        $__internal_38382854d45b3843ca87af7a7a5d42162bc37384c559cdf6fc4d241c310b0b5f->leave($__internal_38382854d45b3843ca87af7a7a5d42162bc37384c559cdf6fc4d241c310b0b5f_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a7c51985cc7a783aaca37af62423641cdce249d237975b55ec7a03bd7c69c29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a7c51985cc7a783aaca37af62423641cdce249d237975b55ec7a03bd7c69c29->enter($__internal_2a7c51985cc7a783aaca37af62423641cdce249d237975b55ec7a03bd7c69c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a66974411f36e82638b60c9f4864d45ab2d6a4bd29c8a09c6c8b73b24196385c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a66974411f36e82638b60c9f4864d45ab2d6a4bd29c8a09c6c8b73b24196385c->enter($__internal_a66974411f36e82638b60c9f4864d45ab2d6a4bd29c8a09c6c8b73b24196385c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a66974411f36e82638b60c9f4864d45ab2d6a4bd29c8a09c6c8b73b24196385c->leave($__internal_a66974411f36e82638b60c9f4864d45ab2d6a4bd29c8a09c6c8b73b24196385c_prof);

        
        $__internal_2a7c51985cc7a783aaca37af62423641cdce249d237975b55ec7a03bd7c69c29->leave($__internal_2a7c51985cc7a783aaca37af62423641cdce249d237975b55ec7a03bd7c69c29_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_53416dde231bd104820c7caddafdf36f7cd6050318ec2e05ff665bbe91455a6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53416dde231bd104820c7caddafdf36f7cd6050318ec2e05ff665bbe91455a6e->enter($__internal_53416dde231bd104820c7caddafdf36f7cd6050318ec2e05ff665bbe91455a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c193de81467e4ee0409a34b82c067a48a1a5bee009139e07388c05da335ec5ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c193de81467e4ee0409a34b82c067a48a1a5bee009139e07388c05da335ec5ce->enter($__internal_c193de81467e4ee0409a34b82c067a48a1a5bee009139e07388c05da335ec5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c193de81467e4ee0409a34b82c067a48a1a5bee009139e07388c05da335ec5ce->leave($__internal_c193de81467e4ee0409a34b82c067a48a1a5bee009139e07388c05da335ec5ce_prof);

        
        $__internal_53416dde231bd104820c7caddafdf36f7cd6050318ec2e05ff665bbe91455a6e->leave($__internal_53416dde231bd104820c7caddafdf36f7cd6050318ec2e05ff665bbe91455a6e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 45,  187 => 31,  170 => 6,  152 => 5,  130 => 51,  126 => 50,  122 => 49,  118 => 48,  114 => 47,  109 => 46,  107 => 45,  92 => 32,  90 => 31,  78 => 22,  74 => 21,  70 => 20,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Landon Hotel App{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/foundation.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.date.css') }}\">
    </head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li><a href=\"{{ path(\"home\") }}\">Home</a></li>
            <li><a href=\"{{ path(\"index_clients\") }}\">Clients</a></li>
            <li><a href=\"{{ path(\"reservations\") }}\">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    {% block body %}{% endblock %}
    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2017</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        {% block javascripts %}{% endblock %}
        <script src=\"{{ asset('js/vendor/jquery.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/what-input.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/foundation.js') }}\"></script>
        <script src=\"{{ asset('js/app.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.date.js') }}\"></script>
        <script>
            \$('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>
    </body>
</html>
", "base.html.twig", "/Users/franky/Documents/symfony-projects/LondonHotel/app/Resources/views/base.html.twig");
    }
}
