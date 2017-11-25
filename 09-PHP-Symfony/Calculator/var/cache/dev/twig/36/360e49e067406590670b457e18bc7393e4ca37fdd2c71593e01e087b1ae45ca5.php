<?php

/* form/fields.html.twig */
class __TwigTemplate_6b3863b9585d5d6e391322e04a0539de4f16d45fff3a95ac26d5c1d88da83506 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_224fd9e821c05d8dd241fc8f32ca2c579a92f998eac2a07d9e63edcb93f4a0f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224fd9e821c05d8dd241fc8f32ca2c579a92f998eac2a07d9e63edcb93f4a0f2->enter($__internal_224fd9e821c05d8dd241fc8f32ca2c579a92f998eac2a07d9e63edcb93f4a0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_224fd9e821c05d8dd241fc8f32ca2c579a92f998eac2a07d9e63edcb93f4a0f2->leave($__internal_224fd9e821c05d8dd241fc8f32ca2c579a92f998eac2a07d9e63edcb93f4a0f2_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_4d6c9ed9df25f5205d8c6308f8487cef00119a8977517811a2595b33b67f6791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6c9ed9df25f5205d8c6308f8487cef00119a8977517811a2595b33b67f6791->enter($__internal_4d6c9ed9df25f5205d8c6308f8487cef00119a8977517811a2595b33b67f6791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 13
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            ";
        // line 15
        echo "                ";
        // line 16
        echo "            ";
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4d6c9ed9df25f5205d8c6308f8487cef00119a8977517811a2595b33b67f6791->leave($__internal_4d6c9ed9df25f5205d8c6308f8487cef00119a8977517811a2595b33b67f6791_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  48 => 15,  44 => 13,  41 => 12,  38 => 11,  26 => 10,  23 => 9,);
    }

    public function getSource()
    {
        return "{#
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block date_time_picker_widget %}
    {% spaceless %}
        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            {{ block('datetime_widget') }}
            {#<span class=\"input-group-addon\">#}
                {#<span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>#}
            {#</span>#}
        </div>
    {% endspaceless %}
{% endblock %}
";
    }
}
