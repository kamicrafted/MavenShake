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

/* _includes/forms/field */
class __TwigTemplate_ca9e93eba533f6985c954041042c7753aaafefccd13d25df76e3547544606b00 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "_includes/forms/field");
        // line 1
        $context["labelId"] = (((isset($context["labelId"]) || array_key_exists("labelId", $context))) ? ((isset($context["labelId"]) || array_key_exists("labelId", $context) ? $context["labelId"] : (function () { throw new RuntimeError('Variable "labelId" does not exist.', 1, $this->source); })())) : ((((isset($context["id"]) || array_key_exists("id", $context))) ? (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1, $this->source); })()) . "-label")) : (null))));
        // line 2
        $context["fieldId"] = (((isset($context["fieldId"]) || array_key_exists("fieldId", $context))) ? ((isset($context["fieldId"]) || array_key_exists("fieldId", $context) ? $context["fieldId"] : (function () { throw new RuntimeError('Variable "fieldId" does not exist.', 2, $this->source); })())) : ((((isset($context["id"]) || array_key_exists("id", $context))) ? (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 2, $this->source); })()) . "-field")) : (null))));
        // line 3
        $context["label"] = ((((isset($context["label"]) || array_key_exists("label", $context)) && ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 3, $this->source); })()) != "__blank__"))) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 3, $this->source); })())) : (((        $this->hasBlock("label", $context, $blocks)) ? (        $this->renderBlock("label", $context, $blocks)) : (null))));
        // line 4
        $context["siteId"] = (((craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 4, $this->source); })()), "app", []), "getIsMultiSite", [], "method") && (isset($context["siteId"]) || array_key_exists("siteId", $context)))) ? ((isset($context["siteId"]) || array_key_exists("siteId", $context) ? $context["siteId"] : (function () { throw new RuntimeError('Variable "siteId" does not exist.', 4, $this->source); })())) : (null));
        // line 5
        $context["site"] = (((isset($context["siteId"]) || array_key_exists("siteId", $context) ? $context["siteId"] : (function () { throw new RuntimeError('Variable "siteId" does not exist.', 5, $this->source); })())) ? (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 5, $this->source); })()), "app", []), "sites", []), "getSiteById", [0 => (isset($context["siteId"]) || array_key_exists("siteId", $context) ? $context["siteId"] : (function () { throw new RuntimeError('Variable "siteId" does not exist.', 5, $this->source); })())], "method")) : (null));
        // line 6
        $context["instructions"] = (($context["instructions"]) ?? (((        $this->hasBlock("instructions", $context, $blocks)) ? (        $this->renderBlock("instructions", $context, $blocks)) : (null))));
        // line 7
        $context["tip"] = (($context["tip"]) ?? (((        $this->hasBlock("tip", $context, $blocks)) ? (        $this->renderBlock("tip", $context, $blocks)) : (null))));
        // line 8
        $context["warning"] = (($context["warning"]) ?? (((        $this->hasBlock("warning", $context, $blocks)) ? (        $this->renderBlock("warning", $context, $blocks)) : (null))));
        // line 9
        $context["orientation"] = craft\helpers\Template::attribute($this->env, $this->source, (((isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 9, $this->source); })())) ? (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 9, $this->source); })()), "app", []), "i18n", []), "getLocaleById", [0 => craft\helpers\Template::attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 9, $this->source); })()), "language", [])], "method")) : (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 9, $this->source); })()), "app", []), "locale", []))), "getOrientation", [], "method");
        // line 10
        $context["translatable"] = (($context["translatable"]) ?? ( !((isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 10, $this->source); })()) === null)));
        // line 11
        $context["errors"] = (((isset($context["errors"]) || array_key_exists("errors", $context))) ? ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 11, $this->source); })())) : (null));
        // line 12
        $context["fieldClass"] = twig_join_filter($this->extensions['craft\web\twig\Extension']->filterFilter([0 => "field", 1 => (((        // line 14
(isset($context["first"]) || array_key_exists("first", $context)) && (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 14, $this->source); })()))) ? ("first") : (null)), 2 => ((        // line 15
(isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 15, $this->source); })())) ? ("has-errors") : (null)), 3 => (((        // line 16
(isset($context["fieldClass"]) || array_key_exists("fieldClass", $context)) && (isset($context["fieldClass"]) || array_key_exists("fieldClass", $context) ? $context["fieldClass"] : (function () { throw new RuntimeError('Variable "fieldClass" does not exist.', 16, $this->source); })()))) ? ((isset($context["fieldClass"]) || array_key_exists("fieldClass", $context) ? $context["fieldClass"] : (function () { throw new RuntimeError('Variable "fieldClass" does not exist.', 16, $this->source); })())) : (null))]), " ");
        // line 18
        echo "
<div class=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["fieldClass"]) || array_key_exists("fieldClass", $context) ? $context["fieldClass"] : (function () { throw new RuntimeError('Variable "fieldClass" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\"";
        // line 20
        if ((isset($context["fieldId"]) || array_key_exists("fieldId", $context) ? $context["fieldId"] : (function () { throw new RuntimeError('Variable "fieldId" does not exist.', 20, $this->source); })())) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) || array_key_exists("fieldId", $context) ? $context["fieldId"] : (function () { throw new RuntimeError('Variable "fieldId" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 21
        if (        $this->hasBlock("attr", $context, $blocks)) {
            echo " ";
            $this->displayBlock("attr", $context, $blocks);
        }
        echo ">
    ";
        // line 22
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 22, $this->source); })()) || (isset($context["instructions"]) || array_key_exists("instructions", $context) ? $context["instructions"] : (function () { throw new RuntimeError('Variable "instructions" does not exist.', 22, $this->source); })()))) {
            // line 23
            echo "        <div class=\"heading\">
            ";
            // line 24
            if ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 24, $this->source); })())) {
                // line 25
                echo "                <label ";
                if ((isset($context["labelId"]) || array_key_exists("labelId", $context) ? $context["labelId"] : (function () { throw new RuntimeError('Variable "labelId" does not exist.', 25, $this->source); })())) {
                    echo " id=\"";
                    echo twig_escape_filter($this->env, (isset($context["labelId"]) || array_key_exists("labelId", $context) ? $context["labelId"] : (function () { throw new RuntimeError('Variable "labelId" does not exist.', 25, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                if (((isset($context["required"]) || array_key_exists("required", $context)) && (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 25, $this->source); })()))) {
                    echo " class=\"required\"";
                }
                if (((isset($context["id"]) || array_key_exists("id", $context)) && (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 25, $this->source); })()))) {
                    echo " for=\"";
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 25, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo ">";
                // line 26
                echo (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 26, $this->source); })());
                // line 27
                if ((isset($context["translatable"]) || array_key_exists("translatable", $context) ? $context["translatable"] : (function () { throw new RuntimeError('Variable "translatable" does not exist.', 27, $this->source); })())) {
                    echo " <span class=\"extralight\" data-icon=\"language\" title=\"";
                    echo twig_escape_filter($this->env, (($context["translationDescription"]) ?? ($this->extensions['craft\web\twig\Extension']->translateFilter("This field is translatable.", "app"))), "html", null, true);
                    echo "\"></span>";
                }
                // line 28
                echo "</label>
            ";
            }
            // line 30
            echo "            ";
            if ((isset($context["instructions"]) || array_key_exists("instructions", $context) ? $context["instructions"] : (function () { throw new RuntimeError('Variable "instructions" does not exist.', 30, $this->source); })())) {
                // line 31
                echo "                <div class=\"instructions\">";
                echo $this->extensions['craft\web\twig\Extension']->replaceFilter(call_user_func_array($this->env->getFilter('md')->getCallable(), [(isset($context["instructions"]) || array_key_exists("instructions", $context) ? $context["instructions"] : (function () { throw new RuntimeError('Variable "instructions" does not exist.', 31, $this->source); })()), "gfm-comment"]), "/&amp;(\\w+);/", "&\$1;");
                echo "</div>
            ";
            }
            // line 33
            echo "        </div>
    ";
        }
        // line 35
        echo "    <div class=\"input ";
        echo twig_escape_filter($this->env, (isset($context["orientation"]) || array_key_exists("orientation", $context) ? $context["orientation"] : (function () { throw new RuntimeError('Variable "orientation" does not exist.', 35, $this->source); })()), "html", null, true);
        if ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 35, $this->source); })())) {
            echo " errors";
        }
        echo "\">
        ";
        // line 36
        $this->displayBlock('input', $context, $blocks);
        // line 39
        echo "    </div>
    ";
        // line 40
        if ((isset($context["tip"]) || array_key_exists("tip", $context) ? $context["tip"] : (function () { throw new RuntimeError('Variable "tip" does not exist.', 40, $this->source); })())) {
            // line 41
            echo "        <p class=\"notice\">";
            echo $this->extensions['craft\web\twig\Extension']->replaceFilter(call_user_func_array($this->env->getFilter('md')->getCallable(), [(isset($context["tip"]) || array_key_exists("tip", $context) ? $context["tip"] : (function () { throw new RuntimeError('Variable "tip" does not exist.', 41, $this->source); })()), "gfm", true]), "/&amp;(\\w+);/", "&\$1;");
            echo "</p>
    ";
        }
        // line 43
        echo "    ";
        if ((isset($context["warning"]) || array_key_exists("warning", $context) ? $context["warning"] : (function () { throw new RuntimeError('Variable "warning" does not exist.', 43, $this->source); })())) {
            // line 44
            echo "        <p class=\"warning\">";
            echo $this->extensions['craft\web\twig\Extension']->replaceFilter(call_user_func_array($this->env->getFilter('md')->getCallable(), [(isset($context["warning"]) || array_key_exists("warning", $context) ? $context["warning"] : (function () { throw new RuntimeError('Variable "warning" does not exist.', 44, $this->source); })()), "gfm", true]), "/&amp;(\\w+);/", "&\$1;");
            echo "</p>
    ";
        }
        // line 46
        echo "    ";
        $this->loadTemplate("_includes/forms/errorList", "_includes/forms/field", 46)->display(twig_array_merge($context, ["errors" => (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 46, $this->source); })())]));
        // line 47
        echo "</div>
";
        // line 0
        craft\helpers\Template::endProfile("template", "_includes/forms/field");
    }

    // line 36
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "input");
        // line 37
        echo "            ";
        echo (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new RuntimeError('Variable "input" does not exist.', 37, $this->source); })());
        echo "
        ";
        // line 0
        craft\helpers\Template::endProfile("block", "input");
    }

    public function getTemplateName()
    {
        return "_includes/forms/field";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 0,  179 => 37,  177 => 0,  173 => 36,  169 => 0,  166 => 47,  163 => 46,  157 => 44,  154 => 43,  148 => 41,  146 => 40,  143 => 39,  141 => 36,  133 => 35,  129 => 33,  123 => 31,  120 => 30,  116 => 28,  110 => 27,  108 => 26,  92 => 25,  90 => 24,  87 => 23,  85 => 22,  78 => 21,  72 => 20,  69 => 19,  66 => 18,  64 => 16,  63 => 15,  62 => 14,  61 => 12,  59 => 11,  57 => 10,  55 => 9,  53 => 8,  51 => 7,  49 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set labelId = (labelId is defined ? labelId : (id is defined ? id~'-label' : null)) %}
{%- set fieldId = (fieldId is defined ? fieldId : (id is defined ? id~'-field' : null)) %}
{%- set label = label is defined and label != '__blank__' ? label : (block('label') ?? null) %}
{%- set siteId = ((craft.app.getIsMultiSite() and siteId is defined) ? siteId : null) %}
{%- set site = (siteId ? craft.app.sites.getSiteById(siteId) : null) %}
{%- set instructions = instructions ?? block('instructions') ?? null %}
{%- set tip = tip ?? block('tip') ?? null %}
{%- set warning = warning ?? block('warning') ?? null %}
{%- set orientation = (site ? craft.app.i18n.getLocaleById(site.language) : craft.app.locale).getOrientation() %}
{%- set translatable = translatable ?? (site is not same as(null)) %}
{%- set errors = (errors is defined ? errors : null) -%}
{%- set fieldClass = [
    'field',
    (first is defined and first ? 'first' : null),
    (errors ? 'has-errors' : null),
    (fieldClass is defined and fieldClass ? fieldClass : null)
]|filter|join(' ') %}

<div class=\"{{ fieldClass }}\"
        {%- if fieldId %} id=\"{{ fieldId }}\"{% endif %}
        {%- if block('attr') is defined %} {{ block('attr') }}{% endif %}>
    {% if label or instructions %}
        <div class=\"heading\">
            {% if label %}
                <label {% if labelId %} id=\"{{ labelId }}\"{% endif %}{% if required is defined and required %} class=\"required\"{% endif %}{% if id is defined and id %} for=\"{{ id }}\"{% endif %}>
                    {{- label|raw -}}
                    {%- if translatable %} <span class=\"extralight\" data-icon=\"language\" title=\"{{ translationDescription ?? 'This field is translatable.'|t('app') }}\"></span>{% endif -%}
                </label>
            {% endif %}
            {% if instructions %}
                <div class=\"instructions\">{{ instructions|md('gfm-comment')|replace('/&amp;(\\\\w+);/', '&\$1;')|raw }}</div>
            {% endif %}
        </div>
    {% endif %}
    <div class=\"input {{ orientation }}{% if errors %} errors{% endif %}\">
        {% block input %}
            {{ input|raw }}
        {% endblock %}
    </div>
    {% if tip %}
        <p class=\"notice\">{{ tip|md(inlineOnly=true)|replace('/&amp;(\\\\w+);/', '&\$1;')|raw }}</p>
    {% endif %}
    {% if warning %}
        <p class=\"warning\">{{ warning|md(inlineOnly=true)|replace('/&amp;(\\\\w+);/', '&\$1;')|raw }}</p>
    {% endif %}
    {% include \"_includes/forms/errorList\" with { errors: errors } %}
</div>
", "_includes/forms/field", "/var/www/dev.mavenshake.com/vendor/craftcms/cms/src/templates/_includes/forms/field.html");
    }
}
