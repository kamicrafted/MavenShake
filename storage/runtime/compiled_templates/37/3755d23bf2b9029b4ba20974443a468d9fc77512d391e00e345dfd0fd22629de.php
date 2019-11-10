<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* _includes/forms/select */
class __TwigTemplate_52585088097b05650db5c08db97900abbc740c8e86b987893374c3c5f1617c5c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "_includes/forms/select");
        // line 1
        $context["class"] = twig_join_filter($this->extensions['craft\web\twig\Extension']->filterFilter([0 => "select", 1 => ((        // line 3
(isset($context["class"]) || array_key_exists("class", $context))) ? ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 3, $this->source); })())) : (null)), 2 => (((        // line 4
(isset($context["disabled"]) || array_key_exists("disabled", $context)) && (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 4, $this->source); })()))) ? ("disabled") : (null))]), " ");
        // line 7
        $context["options"] = (((isset($context["options"]) || array_key_exists("options", $context))) ? ((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 7, $this->source); })())) : ([]));
        // line 8
        $context["value"] = (((isset($context["value"]) || array_key_exists("value", $context))) ? ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 8, $this->source); })())) : (null));
        // line 9
        $context["hasOptgroups"] = false;
        // line 11
        echo "<div class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\"";
        // line 12
        if (        $this->hasBlock("attr", $context, $blocks)) {
            echo " ";
            $this->displayBlock("attr", $context, $blocks);
        }
        echo ">
    <select";
        // line 14
        if ((isset($context["id"]) || array_key_exists("id", $context))) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 14, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 15
        if (((isset($context["toggle"]) || array_key_exists("toggle", $context)) && (isset($context["toggle"]) || array_key_exists("toggle", $context) ? $context["toggle"] : (function () { throw new RuntimeError('Variable "toggle" does not exist.', 15, $this->source); })()))) {
            echo " class=\"fieldtoggle\" data-target-prefix=\"";
            ((((isset($context["targetPrefix"]) || array_key_exists("targetPrefix", $context)) &&  !(null === (isset($context["targetPrefix"]) || array_key_exists("targetPrefix", $context) ? $context["targetPrefix"] : (function () { throw new RuntimeError('Variable "targetPrefix" does not exist.', 15, $this->source); })())))) ? (print (twig_escape_filter($this->env, (isset($context["targetPrefix"]) || array_key_exists("targetPrefix", $context) ? $context["targetPrefix"] : (function () { throw new RuntimeError('Variable "targetPrefix" does not exist.', 15, $this->source); })()), "html", null, true))) : (print ("")));
            echo "\"";
        }
        // line 16
        if ((isset($context["name"]) || array_key_exists("name", $context))) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 17
        if ((((isset($context["autofocus"]) || array_key_exists("autofocus", $context)) && (isset($context["autofocus"]) || array_key_exists("autofocus", $context) ? $context["autofocus"] : (function () { throw new RuntimeError('Variable "autofocus" does not exist.', 17, $this->source); })())) &&  !craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 17, $this->source); })()), "app", []), "request", []), "isMobileBrowser", [0 => true], "method"))) {
            echo " autofocus";
        }
        // line 18
        if (((isset($context["disabled"]) || array_key_exists("disabled", $context)) && (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 18, $this->source); })()))) {
            echo " disabled";
        }
        echo ">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 20
            echo "            ";
            if (craft\helpers\Template::attribute($this->env, $this->source, $context["option"], "optgroup", [], "any", true, true)) {
                // line 21
                echo "                ";
                if ((isset($context["hasOptgroups"]) || array_key_exists("hasOptgroups", $context) ? $context["hasOptgroups"] : (function () { throw new RuntimeError('Variable "hasOptgroups" does not exist.', 21, $this->source); })())) {
                    // line 22
                    echo "                    </optgroup>
                ";
                } else {
                    // line 24
                    echo "                    ";
                    $context["hasOptgroups"] = true;
                    // line 25
                    echo "                ";
                }
                // line 26
                echo "                <optgroup label=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["option"], "optgroup", []), "html", null, true);
                echo "\">
            ";
            } else {
                // line 28
                echo "                ";
                $context["optionLabel"] = ((craft\helpers\Template::attribute($this->env, $this->source, $context["option"], "label", [], "any", true, true)) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["option"], "label", [])) : ($context["option"]));
                // line 29
                echo "                ";
                $context["optionValue"] = ((craft\helpers\Template::attribute($this->env, $this->source, $context["option"], "value", [], "any", true, true)) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["option"], "value", [])) : ($context["key"]));
                // line 30
                echo "                ";
                $context["optionDisabled"] = ((craft\helpers\Template::attribute($this->env, $this->source, $context["option"], "disabled", [], "any", true, true)) ? (craft\helpers\Template::attribute($this->env, $this->source, $context["option"], "disabled", [])) : (false));
                // line 31
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["optionValue"]) || array_key_exists("optionValue", $context) ? $context["optionValue"] : (function () { throw new RuntimeError('Variable "optionValue" does not exist.', 31, $this->source); })()), "html", null, true);
                echo "\"";
                if ((((isset($context["optionValue"]) || array_key_exists("optionValue", $context) ? $context["optionValue"] : (function () { throw new RuntimeError('Variable "optionValue" does not exist.', 31, $this->source); })()) . "") === ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 31, $this->source); })()) . ""))) {
                    echo " selected";
                }
                if ((isset($context["optionDisabled"]) || array_key_exists("optionDisabled", $context) ? $context["optionDisabled"] : (function () { throw new RuntimeError('Variable "optionDisabled" does not exist.', 31, $this->source); })())) {
                    echo " disabled";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["optionLabel"]) || array_key_exists("optionLabel", $context) ? $context["optionLabel"] : (function () { throw new RuntimeError('Variable "optionLabel" does not exist.', 31, $this->source); })()), "html", null, true);
                echo "</option>
            ";
            }
            // line 33
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        ";
        if ((isset($context["hasOptgroups"]) || array_key_exists("hasOptgroups", $context) ? $context["hasOptgroups"] : (function () { throw new RuntimeError('Variable "hasOptgroups" does not exist.', 34, $this->source); })())) {
            // line 35
            echo "            </optgroup>
        ";
        }
        // line 37
        echo "    </select>
</div>
";
        // line 0
        craft\helpers\Template::endProfile("template", "_includes/forms/select");
    }

    public function getTemplateName()
    {
        return "_includes/forms/select";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 0,  150 => 37,  146 => 35,  143 => 34,  137 => 33,  122 => 31,  119 => 30,  116 => 29,  113 => 28,  107 => 26,  104 => 25,  101 => 24,  97 => 22,  94 => 21,  91 => 20,  87 => 19,  81 => 18,  77 => 17,  71 => 16,  65 => 15,  59 => 14,  52 => 12,  48 => 11,  46 => 9,  44 => 8,  42 => 7,  40 => 4,  39 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set class = [
    'select',
    (class is defined ? class : null),
    (disabled is defined and disabled ? 'disabled' : null),
]|filter|join(' ') %}

{%- set options = (options is defined ? options : []) %}
{%- set value = (value is defined ? value : null) %}
{%- set hasOptgroups = false -%}

<div class=\"{{ class }}\"
        {%- if block('attr') is defined %} {{ block('attr') }}{% endif %}>
    <select
        {%- if id is defined %} id=\"{{ id }}\"{% endif %}
        {%- if toggle is defined and toggle %} class=\"fieldtoggle\" data-target-prefix=\"{{ targetPrefix ?? '' }}\"{% endif %}
        {%- if name is defined %} name=\"{{ name }}\"{% endif %}
        {%- if autofocus is defined and autofocus and not craft.app.request.isMobileBrowser(true) %} autofocus{% endif %}
        {%- if disabled is defined and disabled %} disabled{% endif %}>
        {% for key, option in options %}
            {% if option.optgroup is defined %}
                {% if hasOptgroups %}
                    </optgroup>
                {% else %}
                    {% set hasOptgroups = true %}
                {% endif %}
                <optgroup label=\"{{ option.optgroup }}\">
            {% else %}
                {% set optionLabel = (option.label is defined ? option.label : option) %}
                {% set optionValue = (option.value is defined ? option.value : key) %}
                {% set optionDisabled = (option.disabled is defined ? option.disabled : false) %}
                <option value=\"{{ optionValue }}\"{% if (optionValue~'') is same as (value~'') %} selected{% endif %}{% if optionDisabled %} disabled{% endif %}>{{ optionLabel }}</option>
            {% endif %}
        {% endfor %}
        {% if hasOptgroups %}
            </optgroup>
        {% endif %}
    </select>
</div>
", "_includes/forms/select", "/var/www/dev.mavenshake.com/vendor/craftcms/cms/src/templates/_includes/forms/select.html");
    }
}
