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
        $__internal_601353185d612639d88203451e35a05ccd13d8d7afd5b24f086d5c3d378be345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_601353185d612639d88203451e35a05ccd13d8d7afd5b24f086d5c3d378be345->enter($__internal_601353185d612639d88203451e35a05ccd13d8d7afd5b24f086d5c3d378be345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_601353185d612639d88203451e35a05ccd13d8d7afd5b24f086d5c3d378be345->leave($__internal_601353185d612639d88203451e35a05ccd13d8d7afd5b24f086d5c3d378be345_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ddc6ad16ef72cd008eb7688d74b4764f70f0813674139e98febc3e02ff3d74e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc6ad16ef72cd008eb7688d74b4764f70f0813674139e98febc3e02ff3d74e6->enter($__internal_ddc6ad16ef72cd008eb7688d74b4764f70f0813674139e98febc3e02ff3d74e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ddc6ad16ef72cd008eb7688d74b4764f70f0813674139e98febc3e02ff3d74e6->leave($__internal_ddc6ad16ef72cd008eb7688d74b4764f70f0813674139e98febc3e02ff3d74e6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_256064d9f6421e7daeaf9d48f0d9945c6c9315c98d275d6c53c934c550aa95c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256064d9f6421e7daeaf9d48f0d9945c6c9315c98d275d6c53c934c550aa95c5->enter($__internal_256064d9f6421e7daeaf9d48f0d9945c6c9315c98d275d6c53c934c550aa95c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_256064d9f6421e7daeaf9d48f0d9945c6c9315c98d275d6c53c934c550aa95c5->leave($__internal_256064d9f6421e7daeaf9d48f0d9945c6c9315c98d275d6c53c934c550aa95c5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_121b804d74177db02406122717727fa3046af6edae516f670733055333e9dc35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121b804d74177db02406122717727fa3046af6edae516f670733055333e9dc35->enter($__internal_121b804d74177db02406122717727fa3046af6edae516f670733055333e9dc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_121b804d74177db02406122717727fa3046af6edae516f670733055333e9dc35->leave($__internal_121b804d74177db02406122717727fa3046af6edae516f670733055333e9dc35_prof);

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
