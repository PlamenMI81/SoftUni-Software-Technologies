<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_00591920f25c9dff5aaf30b5ba2c7725e6a30dfce96f3412e130e1fe83fee2f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f4a3aa1e3b51e7bf229faa0b49fbbed12ce8563235649fc5fd46f9a29819e83f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a3aa1e3b51e7bf229faa0b49fbbed12ce8563235649fc5fd46f9a29819e83f->enter($__internal_f4a3aa1e3b51e7bf229faa0b49fbbed12ce8563235649fc5fd46f9a29819e83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4a3aa1e3b51e7bf229faa0b49fbbed12ce8563235649fc5fd46f9a29819e83f->leave($__internal_f4a3aa1e3b51e7bf229faa0b49fbbed12ce8563235649fc5fd46f9a29819e83f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a317ac2570c4779779f41e61738c6807ba08f51ce008d9f732d56fa677b99ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a317ac2570c4779779f41e61738c6807ba08f51ce008d9f732d56fa677b99ff->enter($__internal_5a317ac2570c4779779f41e61738c6807ba08f51ce008d9f732d56fa677b99ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5a317ac2570c4779779f41e61738c6807ba08f51ce008d9f732d56fa677b99ff->leave($__internal_5a317ac2570c4779779f41e61738c6807ba08f51ce008d9f732d56fa677b99ff_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8d0129d572eb70d200c9feb74f4cecb1421bfaa27e5b42559303243c343d2886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0129d572eb70d200c9feb74f4cecb1421bfaa27e5b42559303243c343d2886->enter($__internal_8d0129d572eb70d200c9feb74f4cecb1421bfaa27e5b42559303243c343d2886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8d0129d572eb70d200c9feb74f4cecb1421bfaa27e5b42559303243c343d2886->leave($__internal_8d0129d572eb70d200c9feb74f4cecb1421bfaa27e5b42559303243c343d2886_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2dd721299bb77d6fc534bbb8a44fb576575bd206f4afe7a0dd49b29e5b8f072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2dd721299bb77d6fc534bbb8a44fb576575bd206f4afe7a0dd49b29e5b8f072->enter($__internal_f2dd721299bb77d6fc534bbb8a44fb576575bd206f4afe7a0dd49b29e5b8f072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f2dd721299bb77d6fc534bbb8a44fb576575bd206f4afe7a0dd49b29e5b8f072->leave($__internal_f2dd721299bb77d6fc534bbb8a44fb576575bd206f4afe7a0dd49b29e5b8f072_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
