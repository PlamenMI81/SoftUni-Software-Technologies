<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b2054544318b58acb7c3921111f4a4d7c24960bce0d5ae7736167eb268abafe6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3561791b01bea292abaf69685baca917f7be30ad6facb14516debe5eefb8dbf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3561791b01bea292abaf69685baca917f7be30ad6facb14516debe5eefb8dbf5->enter($__internal_3561791b01bea292abaf69685baca917f7be30ad6facb14516debe5eefb8dbf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3561791b01bea292abaf69685baca917f7be30ad6facb14516debe5eefb8dbf5->leave($__internal_3561791b01bea292abaf69685baca917f7be30ad6facb14516debe5eefb8dbf5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_85a76ef592e269a6de0f5f47a38648d5f1cfe0af97c8cd6dce72c631d1c3f9dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85a76ef592e269a6de0f5f47a38648d5f1cfe0af97c8cd6dce72c631d1c3f9dc->enter($__internal_85a76ef592e269a6de0f5f47a38648d5f1cfe0af97c8cd6dce72c631d1c3f9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_85a76ef592e269a6de0f5f47a38648d5f1cfe0af97c8cd6dce72c631d1c3f9dc->leave($__internal_85a76ef592e269a6de0f5f47a38648d5f1cfe0af97c8cd6dce72c631d1c3f9dc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4ab93c3ddd90bb18ba1b18851688093b94a6935b9e4f41ac06a6365ee90a58eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab93c3ddd90bb18ba1b18851688093b94a6935b9e4f41ac06a6365ee90a58eb->enter($__internal_4ab93c3ddd90bb18ba1b18851688093b94a6935b9e4f41ac06a6365ee90a58eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4ab93c3ddd90bb18ba1b18851688093b94a6935b9e4f41ac06a6365ee90a58eb->leave($__internal_4ab93c3ddd90bb18ba1b18851688093b94a6935b9e4f41ac06a6365ee90a58eb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0cd66cb93db7ce6e2d50eb15ee40a685a3d3a79394726e98f507e20a95a31cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cd66cb93db7ce6e2d50eb15ee40a685a3d3a79394726e98f507e20a95a31cca->enter($__internal_0cd66cb93db7ce6e2d50eb15ee40a685a3d3a79394726e98f507e20a95a31cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0cd66cb93db7ce6e2d50eb15ee40a685a3d3a79394726e98f507e20a95a31cca->leave($__internal_0cd66cb93db7ce6e2d50eb15ee40a685a3d3a79394726e98f507e20a95a31cca_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
