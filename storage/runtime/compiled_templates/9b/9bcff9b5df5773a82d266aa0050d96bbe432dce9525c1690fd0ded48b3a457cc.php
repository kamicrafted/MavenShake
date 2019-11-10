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

/* _includes/forms/text */
class __TwigTemplate_ae653f941610c934ef1f16c1a31c986d6c005fb21afbb7779a10fe6629903e1d extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "_includes/forms/text");
        // line 1
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1, $this->source); })())) : ("text"));
        // line 2
        $context["autocomplete"] = (((isset($context["autocomplete"]) || array_key_exists("autocomplete", $context))) ? ((isset($context["autocomplete"]) || array_key_exists("autocomplete", $context) ? $context["autocomplete"] : (function () { throw new RuntimeError('Variable "autocomplete" does not exist.', 2, $this->source); })())) : (false));
        // line 4
        $context["class"] = twig_join_filter($this->extensions['craft\web\twig\Extension']->filterFilter([0 => "text", 1 => (((        // line 6
(isset($context["class"]) || array_key_exists("class", $context)) && (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 6, $this->source); })()))) ? ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 6, $this->source); })())) : (null)), 2 => (((        // line 7
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 7, $this->source); })()) == "password")) ? ("password") : (null)), 3 => (((        // line 8
(isset($context["disabled"]) || array_key_exists("disabled", $context)) && (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 8, $this->source); })()))) ? ("disabled") : (null)), 4 => (((        // line 9
(isset($context["size"]) || array_key_exists("size", $context)) && (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 9, $this->source); })()))) ? (null) : ("fullwidth"))]), " ");
        // line 12
        if (((((isset($context["showCharsLeft"]) || array_key_exists("showCharsLeft", $context)) && (isset($context["showCharsLeft"]) || array_key_exists("showCharsLeft", $context) ? $context["showCharsLeft"] : (function () { throw new RuntimeError('Variable "showCharsLeft" does not exist.', 12, $this->source); })())) && (isset($context["maxlength"]) || array_key_exists("maxlength", $context))) && (isset($context["maxlength"]) || array_key_exists("maxlength", $context) ? $context["maxlength"] : (function () { throw new RuntimeError('Variable "maxlength" does not exist.', 12, $this->source); })()))) {
            // line 13
            $context["style"] = (((("padding-" . (((craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 13, $this->source); })()), "app", []), "locale", []), "getOrientation", [], "method") == "ltr")) ? ("right") : ("left"))) . ": ") . ((7.2 * twig_length_filter($this->env, (isset($context["maxlength"]) || array_key_exists("maxlength", $context) ? $context["maxlength"] : (function () { throw new RuntimeError('Variable "maxlength" does not exist.', 13, $this->source); })()))) + 14)) . "px;");
        }
        // line 16
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 16, $this->source); })()) == "password")) {
            echo "<div class=\"passwordwrapper\">";
        }
        // line 17
        echo "<input class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\" type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\"";
        // line 18
        if ((isset($context["style"]) || array_key_exists("style", $context))) {
            echo " style=\"";
            echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 19
        if ((isset($context["id"]) || array_key_exists("id", $context))) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 20
        if ((isset($context["size"]) || array_key_exists("size", $context))) {
            echo " size=\"";
            echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 21
        if ((isset($context["name"]) || array_key_exists("name", $context))) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 22
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 23
        if (((isset($context["maxlength"]) || array_key_exists("maxlength", $context)) && (isset($context["maxlength"]) || array_key_exists("maxlength", $context) ? $context["maxlength"] : (function () { throw new RuntimeError('Variable "maxlength" does not exist.', 23, $this->source); })()))) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, (isset($context["maxlength"]) || array_key_exists("maxlength", $context) ? $context["maxlength"] : (function () { throw new RuntimeError('Variable "maxlength" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 24
        if (((isset($context["showCharsLeft"]) || array_key_exists("showCharsLeft", $context)) && (isset($context["showCharsLeft"]) || array_key_exists("showCharsLeft", $context) ? $context["showCharsLeft"] : (function () { throw new RuntimeError('Variable "showCharsLeft" does not exist.', 24, $this->source); })()))) {
            echo " data-show-chars-left";
        }
        // line 25
        if ((((isset($context["autofocus"]) || array_key_exists("autofocus", $context)) && (isset($context["autofocus"]) || array_key_exists("autofocus", $context) ? $context["autofocus"] : (function () { throw new RuntimeError('Variable "autofocus" does not exist.', 25, $this->source); })())) &&  !craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 25, $this->source); })()), "app", []), "request", []), "isMobileBrowser", [0 => true], "method"))) {
            echo " autofocus";
        }
        // line 26
        if ( !((isset($context["autocomplete"]) || array_key_exists("autocomplete", $context) ? $context["autocomplete"] : (function () { throw new RuntimeError('Variable "autocomplete" does not exist.', 26, $this->source); })()) === null)) {
            echo " autocomplete=\"";
            ((((isset($context["autocomplete"]) || array_key_exists("autocomplete", $context) ? $context["autocomplete"] : (function () { throw new RuntimeError('Variable "autocomplete" does not exist.', 26, $this->source); })()) === true)) ? (print ("on")) : ((((isset($context["autocomplete"]) || array_key_exists("autocomplete", $context) ? $context["autocomplete"] : (function () { throw new RuntimeError('Variable "autocomplete" does not exist.', 26, $this->source); })())) ? (print (twig_escape_filter($this->env, (isset($context["autocomplete"]) || array_key_exists("autocomplete", $context) ? $context["autocomplete"] : (function () { throw new RuntimeError('Variable "autocomplete" does not exist.', 26, $this->source); })()), "html", null, true))) : (print ("off")))));
            echo "\"";
        }
        // line 27
        if ( !(($context["autocorrect"]) ?? (true))) {
            echo " autocorrect=\"off\"";
        }
        // line 28
        if ( !(($context["autocapitalize"]) ?? (true))) {
            echo " autocapitalize=\"off\"";
        }
        // line 29
        if (((isset($context["disabled"]) || array_key_exists("disabled", $context)) && (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 29, $this->source); })()))) {
            echo " disabled ";
        }
        // line 30
        if (((isset($context["readonly"]) || array_key_exists("readonly", $context)) && (isset($context["readonly"]) || array_key_exists("readonly", $context) ? $context["readonly"] : (function () { throw new RuntimeError('Variable "readonly" does not exist.', 30, $this->source); })()))) {
            echo " readonly ";
        }
        // line 31
        if ((isset($context["title"]) || array_key_exists("title", $context))) {
            echo " title=\"";
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 31, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 32
        if ((isset($context["placeholder"]) || array_key_exists("placeholder", $context))) {
            echo " placeholder=\"";
            echo twig_escape_filter($this->env, (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 33
        if ((isset($context["step"]) || array_key_exists("step", $context))) {
            echo " step=\"";
            echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 33, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 34
        if ((isset($context["min"]) || array_key_exists("min", $context))) {
            echo " min=\"";
            echo twig_escape_filter($this->env, (isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 35
        if ((isset($context["max"]) || array_key_exists("max", $context))) {
            echo " max=\"";
            echo twig_escape_filter($this->env, (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 35, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 36
        if (        $this->hasBlock("attr", $context, $blocks)) {
            echo " ";
            $this->displayBlock("attr", $context, $blocks);
        }
        echo ">";
        // line 37
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 37, $this->source); })()) == "password")) {
            echo "</div>";
        }
        // line 0
        craft\helpers\Template::endProfile("template", "_includes/forms/text");
    }

    public function getTemplateName()
    {
        return "_includes/forms/text";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 0,  165 => 37,  159 => 36,  153 => 35,  147 => 34,  141 => 33,  135 => 32,  129 => 31,  125 => 30,  121 => 29,  117 => 28,  113 => 27,  107 => 26,  103 => 25,  99 => 24,  93 => 23,  87 => 22,  81 => 21,  75 => 20,  69 => 19,  63 => 18,  57 => 17,  53 => 16,  50 => 13,  48 => 12,  46 => 9,  45 => 8,  44 => 7,  43 => 6,  42 => 4,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set type = (type is defined ? type : 'text') %}
{%- set autocomplete = (autocomplete is defined ? autocomplete : false) %}

{%- set class = [
    'text',
    (class is defined and class ? class : null),
    (type == 'password' ? 'password' : null),
    (disabled is defined and disabled ? 'disabled' : null),
    (size is defined and size ? null : 'fullwidth')
]|filter|join(' ') %}

{%- if showCharsLeft is defined and showCharsLeft and maxlength is defined and maxlength %}
    {%- set style = 'padding-'~(craft.app.locale.getOrientation() == 'ltr' ? 'right' : 'left')~': '~(7.2*maxlength|length+14)~'px;' %}
{%- endif %}

{%- if type == 'password' %}<div class=\"passwordwrapper\">{% endif -%}
<input class=\"{{ class }}\" type=\"{{ type }}\"
    {%- if style is defined %} style=\"{{ style }}\"{% endif %}
    {%- if id is defined %} id=\"{{ id }}\"{% endif %}
    {%- if size is defined %} size=\"{{ size }}\"{% endif %}
    {%- if name is defined %} name=\"{{ name }}\"{% endif %}
    {%- if value is defined %} value=\"{{ value }}\"{% endif %}
    {%- if maxlength is defined and maxlength %} maxlength=\"{{ maxlength }}\"{% endif %}
    {%- if showCharsLeft is defined and showCharsLeft %} data-show-chars-left{% endif %}
    {%- if autofocus is defined and autofocus and not craft.app.request.isMobileBrowser(true) %} autofocus{% endif %}
    {%- if autocomplete is not same as(null) %} autocomplete=\"{{ autocomplete is same as(true) ? 'on' : (autocomplete ?: 'off') }}\"{% endif %}
    {%- if not (autocorrect ?? true)  %} autocorrect=\"off\"{% endif %}
    {%- if not (autocapitalize ?? true)  %} autocapitalize=\"off\"{% endif %}
    {%- if disabled is defined and disabled %} disabled {% endif %}
    {%- if readonly is defined and readonly %} readonly {% endif %}
    {%- if title is defined %} title=\"{{ title }}\"{% endif %}
    {%- if placeholder is defined %} placeholder=\"{{ placeholder }}\"{% endif %}
    {%- if step is defined %} step=\"{{ step }}\"{% endif %}
    {%- if min is defined %} min=\"{{ min }}\"{% endif %}
    {%- if max is defined %} max=\"{{ max }}\"{% endif %}
    {%- if block('attr') is defined %} {{ block('attr') }}{% endif %}>
{%- if type == 'password' %}</div>{% endif %}
", "_includes/forms/text", "/var/www/dev.mavenshake.com/vendor/craftcms/cms/src/templates/_includes/forms/text.html");
    }
}
