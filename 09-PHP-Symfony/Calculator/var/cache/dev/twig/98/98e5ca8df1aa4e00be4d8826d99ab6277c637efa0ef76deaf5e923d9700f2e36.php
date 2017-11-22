<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8acd9d3d8cbe3a8339b99cfc0f9732ce43879c96efeea723e01d1dbb054fd2db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_017df20b85c60cf867852a15a81f23abd93c42259486b35e092f51bbed5d24f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017df20b85c60cf867852a15a81f23abd93c42259486b35e092f51bbed5d24f5->enter($__internal_017df20b85c60cf867852a15a81f23abd93c42259486b35e092f51bbed5d24f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_017df20b85c60cf867852a15a81f23abd93c42259486b35e092f51bbed5d24f5->leave($__internal_017df20b85c60cf867852a15a81f23abd93c42259486b35e092f51bbed5d24f5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_31dbbcb8927d93c75b584b2a304085fa5232ec0e71d6d2a7bbea38e8c9ebc269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31dbbcb8927d93c75b584b2a304085fa5232ec0e71d6d2a7bbea38e8c9ebc269->enter($__internal_31dbbcb8927d93c75b584b2a304085fa5232ec0e71d6d2a7bbea38e8c9ebc269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_31dbbcb8927d93c75b584b2a304085fa5232ec0e71d6d2a7bbea38e8c9ebc269->leave($__internal_31dbbcb8927d93c75b584b2a304085fa5232ec0e71d6d2a7bbea38e8c9ebc269_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e00c86dfa63187e44bf000cc5c5f02523efa3646300a8e433491932317167c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e00c86dfa63187e44bf000cc5c5f02523efa3646300a8e433491932317167c8->enter($__internal_0e00c86dfa63187e44bf000cc5c5f02523efa3646300a8e433491932317167c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0e00c86dfa63187e44bf000cc5c5f02523efa3646300a8e433491932317167c8->leave($__internal_0e00c86dfa63187e44bf000cc5c5f02523efa3646300a8e433491932317167c8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_028bb65f7de1fa98a21dc74eaed795c1cf0186728265f16fe6a31c51f9e4aad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_028bb65f7de1fa98a21dc74eaed795c1cf0186728265f16fe6a31c51f9e4aad9->enter($__internal_028bb65f7de1fa98a21dc74eaed795c1cf0186728265f16fe6a31c51f9e4aad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_028bb65f7de1fa98a21dc74eaed795c1cf0186728265f16fe6a31c51f9e4aad9->leave($__internal_028bb65f7de1fa98a21dc74eaed795c1cf0186728265f16fe6a31c51f9e4aad9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
