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

/* _includes/forms/lightswitch */
class __TwigTemplate_18c321cac800b1656c4ad74035d2b6fee160fcce491be435cd08a4139f1d0882 extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "_includes/forms/lightswitch");
        // line 1
        $context["on"] = (((isset($context["on"]) || array_key_exists("on", $context))) ? ((isset($context["on"]) || array_key_exists("on", $context) ? $context["on"] : (function () { throw new RuntimeError('Variable "on" does not exist.', 1, $this->source); })())) : (false));
        // line 2
        $context["value"] = (((isset($context["value"]) || array_key_exists("value", $context))) ? ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 2, $this->source); })())) : ("1"));
        // line 3
        $context["small"] = (((isset($context["small"]) || array_key_exists("small", $context))) ? ((isset($context["small"]) || array_key_exists("small", $context) ? $context["small"] : (function () { throw new RuntimeError('Variable "small" does not exist.', 3, $this->source); })())) : (false));
        // line 4
        $context["toggle"] = (((isset($context["toggle"]) || array_key_exists("toggle", $context))) ? ((isset($context["toggle"]) || array_key_exists("toggle", $context) ? $context["toggle"] : (function () { throw new RuntimeError('Variable "toggle" does not exist.', 4, $this->source); })())) : (false));
        // line 5
        $context["reverseToggle"] = (((isset($context["reverseToggle"]) || array_key_exists("reverseToggle", $context))) ? ((isset($context["reverseToggle"]) || array_key_exists("reverseToggle", $context) ? $context["reverseToggle"] : (function () { throw new RuntimeError('Variable "reverseToggle" does not exist.', 5, $this->source); })())) : (false));
        // line 6
        $context["disabled"] = ((((isset($context["disabled"]) || array_key_exists("disabled", $context)) && (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 6, $this->source); })()))) ? (true) : (false));
        // line 7
        echo "
<div class=\"lightswitch";
        // line 8
        if ((isset($context["on"]) || array_key_exists("on", $context) ? $context["on"] : (function () { throw new RuntimeError('Variable "on" does not exist.', 8, $this->source); })())) {
            echo " on";
        }
        if ((isset($context["small"]) || array_key_exists("small", $context) ? $context["small"] : (function () { throw new RuntimeError('Variable "small" does not exist.', 8, $this->source); })())) {
            echo " small";
        }
        if (((isset($context["toggle"]) || array_key_exists("toggle", $context) ? $context["toggle"] : (function () { throw new RuntimeError('Variable "toggle" does not exist.', 8, $this->source); })()) || (isset($context["reverseToggle"]) || array_key_exists("reverseToggle", $context) ? $context["reverseToggle"] : (function () { throw new RuntimeError('Variable "reverseToggle" does not exist.', 8, $this->source); })()))) {
            echo " fieldtoggle";
        }
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 8, $this->source); })())) {
            echo " disabled";
        }
        echo "\" tabindex=\"0\" data-value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "\"";
        // line 9
        if ((isset($context["id"]) || array_key_exists("id", $context))) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 10
        if ((isset($context["labelId"]) || array_key_exists("labelId", $context))) {
            echo " aria-labelledby=\"";
            echo twig_escape_filter($this->env, (isset($context["labelId"]) || array_key_exists("labelId", $context) ? $context["labelId"] : (function () { throw new RuntimeError('Variable "labelId" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 11
        if ((isset($context["toggle"]) || array_key_exists("toggle", $context) ? $context["toggle"] : (function () { throw new RuntimeError('Variable "toggle" does not exist.', 11, $this->source); })())) {
            echo " data-target=\"";
            echo twig_escape_filter($this->env, (isset($context["toggle"]) || array_key_exists("toggle", $context) ? $context["toggle"] : (function () { throw new RuntimeError('Variable "toggle" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 12
        if ((isset($context["reverseToggle"]) || array_key_exists("reverseToggle", $context) ? $context["reverseToggle"] : (function () { throw new RuntimeError('Variable "reverseToggle" does not exist.', 12, $this->source); })())) {
            echo " data-reverse-target=\"";
            echo twig_escape_filter($this->env, (isset($context["reverseToggle"]) || array_key_exists("reverseToggle", $context) ? $context["reverseToggle"] : (function () { throw new RuntimeError('Variable "reverseToggle" does not exist.', 12, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 13
        if (        $this->hasBlock("attr", $context, $blocks)) {
            echo " ";
            $this->displayBlock("attr", $context, $blocks);
        }
        echo ">
    <div class=\"lightswitch-container\">
        <div class=\"label on\"></div>
        <div class=\"handle\"></div>
        <div class=\"label off\"></div>
    </div>
    ";
        // line 19
        if ((isset($context["name"]) || array_key_exists("name", $context))) {
            // line 20
            echo craft\helpers\Html::hiddenInput((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 20, $this->source); })()), (((isset($context["on"]) || array_key_exists("on", $context) ? $context["on"] : (function () { throw new RuntimeError('Variable "on" does not exist.', 20, $this->source); })())) ? ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 20, $this->source); })())) : ("")), ["disabled" => (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 20, $this->source); })())]);
        }
        // line 22
        echo "</div>
";
        // line 0
        craft\helpers\Template::endProfile("template", "_includes/forms/lightswitch");
    }

    public function getTemplateName()
    {
        return "_includes/forms/lightswitch";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 0,  110 => 22,  107 => 20,  105 => 19,  93 => 13,  87 => 12,  81 => 11,  75 => 10,  69 => 9,  53 => 8,  50 => 7,  48 => 6,  46 => 5,  44 => 4,  42 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set on = (on is defined ? on : false) %}
{%- set value = (value is defined ? value : '1') %}
{%- set small = (small is defined ? small : false) %}
{%- set toggle = (toggle is defined ? toggle : false) %}
{%- set reverseToggle = (reverseToggle is defined ? reverseToggle : false) %}
{%- set disabled = (disabled is defined and disabled ? true : false) %}

<div class=\"lightswitch{% if on %} on{% endif %}{% if small %} small{% endif %}{% if toggle or reverseToggle %} fieldtoggle{% endif %}{% if disabled %} disabled{% endif %}\" tabindex=\"0\" data-value=\"{{ value }}\"
    {%- if id is defined %} id=\"{{ id }}\"{% endif %}
    {%- if labelId is defined %} aria-labelledby=\"{{ labelId }}\"{% endif %}
    {%- if toggle %} data-target=\"{{ toggle }}\"{% endif %}
    {%- if reverseToggle %} data-reverse-target=\"{{ reverseToggle }}\"{% endif %}
    {%- if block('attr') is defined %} {{ block('attr') }}{% endif %}>
    <div class=\"lightswitch-container\">
        <div class=\"label on\"></div>
        <div class=\"handle\"></div>
        <div class=\"label off\"></div>
    </div>
    {% if name is defined -%}
        {{ hiddenInput(name, on ? value : '', {disabled: disabled}) }}
    {%- endif %}
</div>
", "_includes/forms/lightswitch", "/var/www/dev.mavenshake.com/vendor/craftcms/cms/src/templates/_includes/forms/lightswitch.html");
    }
}
