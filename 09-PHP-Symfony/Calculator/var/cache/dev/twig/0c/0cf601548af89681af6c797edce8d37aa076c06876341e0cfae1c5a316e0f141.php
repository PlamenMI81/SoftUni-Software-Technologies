<?php

/* base.html.twig */
class __TwigTemplate_3c6a8a8d0186d77249898ed80aa8da407eb4342d05d7fee64eb51c51dae11c00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49335e610999a6cbd80c6f5af3a154e7fc0cfffa7c2d3cf0c46a2ee32c3ddf70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49335e610999a6cbd80c6f5af3a154e7fc0cfffa7c2d3cf0c46a2ee32c3ddf70->enter($__internal_49335e610999a6cbd80c6f5af3a154e7fc0cfffa7c2d3cf0c46a2ee32c3ddf70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_49335e610999a6cbd80c6f5af3a154e7fc0cfffa7c2d3cf0c46a2ee32c3ddf70->leave($__internal_49335e610999a6cbd80c6f5af3a154e7fc0cfffa7c2d3cf0c46a2ee32c3ddf70_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_903d3867f80430b6638a1efc4fa7fbfa8b37b96d0b8eaf5fd91893ed47266499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903d3867f80430b6638a1efc4fa7fbfa8b37b96d0b8eaf5fd91893ed47266499->enter($__internal_903d3867f80430b6638a1efc4fa7fbfa8b37b96d0b8eaf5fd91893ed47266499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_903d3867f80430b6638a1efc4fa7fbfa8b37b96d0b8eaf5fd91893ed47266499->leave($__internal_903d3867f80430b6638a1efc4fa7fbfa8b37b96d0b8eaf5fd91893ed47266499_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_658962bd7f99a551c72a8389b4009906d6af78eafaf327c3d02b206803ec6f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658962bd7f99a551c72a8389b4009906d6af78eafaf327c3d02b206803ec6f45->enter($__internal_658962bd7f99a551c72a8389b4009906d6af78eafaf327c3d02b206803ec6f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_658962bd7f99a551c72a8389b4009906d6af78eafaf327c3d02b206803ec6f45->leave($__internal_658962bd7f99a551c72a8389b4009906d6af78eafaf327c3d02b206803ec6f45_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_1a77e3853174161ba60d05a6a5bacce370f7453300d8b2a7fd16829e7a2901d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a77e3853174161ba60d05a6a5bacce370f7453300d8b2a7fd16829e7a2901d6->enter($__internal_1a77e3853174161ba60d05a6a5bacce370f7453300d8b2a7fd16829e7a2901d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_1a77e3853174161ba60d05a6a5bacce370f7453300d8b2a7fd16829e7a2901d6->leave($__internal_1a77e3853174161ba60d05a6a5bacce370f7453300d8b2a7fd16829e7a2901d6_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_48a2f35cae1acc82f9e2aa8c8b91e254030c37808e797cbaccdb794401d244c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a2f35cae1acc82f9e2aa8c8b91e254030c37808e797cbaccdb794401d244c3->enter($__internal_48a2f35cae1acc82f9e2aa8c8b91e254030c37808e797cbaccdb794401d244c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_48a2f35cae1acc82f9e2aa8c8b91e254030c37808e797cbaccdb794401d244c3->leave($__internal_48a2f35cae1acc82f9e2aa8c8b91e254030c37808e797cbaccdb794401d244c3_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_803e4e7302f7d5318d2d3c505ec863f658e4a5b725a10e5df40e3e02a36026ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_803e4e7302f7d5318d2d3c505ec863f658e4a5b725a10e5df40e3e02a36026ce->enter($__internal_803e4e7302f7d5318d2d3c505ec863f658e4a5b725a10e5df40e3e02a36026ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_803e4e7302f7d5318d2d3c505ec863f658e4a5b725a10e5df40e3e02a36026ce->leave($__internal_803e4e7302f7d5318d2d3c505ec863f658e4a5b725a10e5df40e3e02a36026ce_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_6c51d5c945231c01abb9e70bc801a3e8711c96624a2b612fc7ef59792ef642de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c51d5c945231c01abb9e70bc801a3e8711c96624a2b612fc7ef59792ef642de->enter($__internal_6c51d5c945231c01abb9e70bc801a3e8711c96624a2b612fc7ef59792ef642de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_6c51d5c945231c01abb9e70bc801a3e8711c96624a2b612fc7ef59792ef642de->leave($__internal_6c51d5c945231c01abb9e70bc801a3e8711c96624a2b612fc7ef59792ef642de_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d8a44cc0abb2e6b122c31f98481fa498860b5e9edba8f624483981740405fb13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a44cc0abb2e6b122c31f98481fa498860b5e9edba8f624483981740405fb13->enter($__internal_d8a44cc0abb2e6b122c31f98481fa498860b5e9edba8f624483981740405fb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d8a44cc0abb2e6b122c31f98481fa498860b5e9edba8f624483981740405fb13->leave($__internal_d8a44cc0abb2e6b122c31f98481fa498860b5e9edba8f624483981740405fb13_prof);

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
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
