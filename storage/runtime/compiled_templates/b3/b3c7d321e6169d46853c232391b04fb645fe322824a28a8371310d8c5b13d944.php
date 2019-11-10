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

/* settings/general/_index */
class __TwigTemplate_b360a374465e83c2f5d5810f18bcd62a555e480309b30b3d3adcbdb3678cd371 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("template", "settings/general/_index");
        // line 2
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "settings/general/_index", 2)->unwrap();
        // line 3
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("General Settings", "app");
        // line 4
        $context["fullPageForm"] = true;
        // line 6
        $context["crumbs"] = [0 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Settings", "app"), "url" => craft\helpers\UrlHelper::url("settings")]];
        // line 17
        $macros["__internal_99eab1974b9c19871de33bad17939a3912ea9164bf70a24e3308edfd756c489d"] = $this->macros["__internal_99eab1974b9c19871de33bad17939a3912ea9164bf70a24e3308edfd756c489d"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/general/_index", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        // line 0
        craft\helpers\Template::endProfile("template", "settings/general/_index");
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "content");
        // line 21
        echo "    ";
        echo craft\helpers\Html::actionInput("system-settings/save-general-settings");
        echo "
    ";
        // line 22
        echo craft\helpers\Html::redirectInput("settings");
        echo "

    ";
        // line 24
        echo twig_call_macro($macros["forms"], "macro_autosuggestField", [["first" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("System Name", "app"), "id" => "name", "suggestEnvVars" => true, "name" => "name", "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 30
(isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 30, $this->source); })()), "name", [])]], 24, $context, $this->getSourceContext());
        // line 31
        echo "

    ";
        // line 33
        echo twig_call_macro($macros["forms"], "macro_lightswitchField", [["first" => true, "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("System Status", "app"), "warning" => ((((craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source,         // line 36
(isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 36, $this->source); })()), "app", []), "config", []), "general", []), "isSystemLive", []) === true) || (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 36, $this->source); })()), "app", []), "config", []), "general", []), "isSystemLive", []) === false))) ? (twig_call_macro($macros["__internal_99eab1974b9c19871de33bad17939a3912ea9164bf70a24e3308edfd756c489d"], "macro_configWarning", ["isSystemLive"], 36, $context, $this->getSourceContext())) : ("")), "id" => "live", "name" => "live", "on" => craft\helpers\Template::attribute($this->env, $this->source,         // line 39
(isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 39, $this->source); })()), "live", [])]], 33, $context, $this->getSourceContext());
        // line 40
        echo "

    ";
        // line 42
        echo twig_call_macro($macros["forms"], "macro_selectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Time Zone", "app"), "warning" => ((craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source,         // line 44
(isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 44, $this->source); })()), "app", []), "config", []), "general", []), "timezone", [])) ? (twig_call_macro($macros["__internal_99eab1974b9c19871de33bad17939a3912ea9164bf70a24e3308edfd756c489d"], "macro_configWarning", ["timezone"], 44, $context, $this->getSourceContext())) : ("")), "id" => "time-zone", "name" => "timeZone", "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 47
(isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 47, $this->source); })()), "timeZone", []), "options" =>         // line 48
(isset($context["timezoneOptions"]) || array_key_exists("timezoneOptions", $context) ? $context["timezoneOptions"] : (function () { throw new RuntimeError('Variable "timezoneOptions" does not exist.', 48, $this->source); })())]], 42, $context, $this->getSourceContext());
        // line 49
        echo "

    ";
        // line 51
        if (((isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new RuntimeError('Variable "CraftEdition" does not exist.', 51, $this->source); })()) == (isset($context["CraftPro"]) || array_key_exists("CraftPro", $context) ? $context["CraftPro"] : (function () { throw new RuntimeError('Variable "CraftPro" does not exist.', 51, $this->source); })()))) {
            // line 52
            echo "        <hr>

        ";
            // line 54
            craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 54, $this->source); })()), "registerTranslations", [0 => "app", 1 => [0 => "Are you sure you want to delete the logo?"]], "method");
            // line 57
            echo "
        ";
            // line 58
            craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 58, $this->source); })()), "registerAssetBundle", [0 => "craft\\web\\assets\\fileupload\\FileUploadAsset"], "method");
            // line 59
            echo "
        ";
            // line 60
            echo twig_call_macro($macros["forms"], "macro_field", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Login Page Logo", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("SVG file recommended. The logo will be displayed at {size} wide.", "app", ["size" => "300px"])], twig_include($this->env, $context, "settings/general/_images/logo")], 60, $context, $this->getSourceContext());
            // line 63
            echo "

        ";
            // line 65
            echo twig_call_macro($macros["forms"], "macro_field", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Site Icon", "app"), "instructions" => $this->extensions['craft\web\twig\Extension']->translateFilter("Square SVG file recommended. The logo will be displayed at {size} by {size}.", "app", ["size" => "32px"])], twig_include($this->env, $context, "settings/general/_images/icon")], 65, $context, $this->getSourceContext());
            // line 68
            echo "

        <div class=\"clear\"></div>
    ";
        }
        // line 0
        craft\helpers\Template::endProfile("block", "content");
    }

    // line 11
    public function macro_configWarning($__setting__ = null, $__file__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "setting" => $__setting__,
            "file" => $__file__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 0
            craft\helpers\Template::beginProfile("macro", "configWarning");
            // line 12
            echo $this->extensions['craft\web\twig\Extension']->translateFilter("This is being overridden by the {setting} config setting.", "app", ["setting" => (((("<a href=\"https://docs.craftcms.com/api/v3/craft-config-generalconfig.html#property-" . twig_lower_filter($this->env,             // line 13
(isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 13, $this->source); })()))) . "\" rel=\"noopener\" target=\"_blank\">") . (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 13, $this->source); })())) . "</a>")]);
            // line 0
            craft\helpers\Template::endProfile("macro", "configWarning");

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "settings/general/_index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 0,  152 => 13,  151 => 12,  149 => 0,  135 => 11,  131 => 0,  125 => 68,  123 => 65,  119 => 63,  117 => 60,  114 => 59,  112 => 58,  109 => 57,  107 => 54,  103 => 52,  101 => 51,  97 => 49,  95 => 48,  94 => 47,  93 => 44,  92 => 42,  88 => 40,  86 => 39,  85 => 36,  84 => 33,  80 => 31,  78 => 30,  77 => 24,  72 => 22,  67 => 21,  65 => 0,  61 => 20,  57 => 0,  54 => 1,  52 => 17,  50 => 6,  48 => 4,  46 => 3,  44 => 2,  42 => 0,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_layouts/cp\" %}
{% import \"_includes/forms\" as forms %}
{% set title = \"General Settings\"|t('app') %}
{% set fullPageForm = true %}

{% set crumbs = [
    { label: \"Settings\"|t('app'), url: url('settings') }
] %}


{% macro configWarning(setting, file) -%}
    {{ \"This is being overridden by the {setting} config setting.\"|t('app', {
        setting: '<a href=\"https://docs.craftcms.com/api/v3/craft-config-generalconfig.html#property-'~setting|lower~'\" rel=\"noopener\" target=\"_blank\">'~setting~'</a>'
    })|raw }}
{%- endmacro %}

{% from _self import configWarning %}


{% block content %}
    {{ actionInput('system-settings/save-general-settings') }}
    {{ redirectInput('settings') }}

    {{ forms.autosuggestField({
        first: true,
        label: \"System Name\"|t('app'),
        id: 'name',
        suggestEnvVars: true,
        name: 'name',
        value: system.name
    }) }}

    {{ forms.lightswitchField({
        first: true,
        label: \"System Status\"|t('app'),
        warning: (craft.app.config.general.isSystemLive is same as(true) or craft.app.config.general.isSystemLive is same as(false) ? configWarning('isSystemLive')),
        id: 'live',
        name: 'live',
        on: system.live
    }) }}

    {{ forms.selectField({
        label: \"Time Zone\"|t('app'),
        warning: (craft.app.config.general.timezone ? configWarning('timezone')),
        id: 'time-zone',
        name: 'timeZone',
        value: system.timeZone,
        options: timezoneOptions
    }) }}

    {% if CraftEdition == CraftPro %}
        <hr>

        {% do view.registerTranslations('app', [
            \"Are you sure you want to delete the logo?\",
        ]) %}

        {% do view.registerAssetBundle(\"craft\\\\web\\\\assets\\\\fileupload\\\\FileUploadAsset\") %}

        {{ forms.field({
            label: \"Login Page Logo\"|t('app'),
            instructions: \"SVG file recommended. The logo will be displayed at {size} wide.\"|t('app', { size: '300px' })
        }, include('settings/general/_images/logo')) }}

        {{ forms.field({
            label: \"Site Icon\"|t('app'),
            instructions: \"Square SVG file recommended. The logo will be displayed at {size} by {size}.\"|t('app', { size: '32px' })
        }, include('settings/general/_images/icon')) }}

        <div class=\"clear\"></div>
    {% endif %}
{% endblock %}
", "settings/general/_index", "/var/www/dev.mavenshake.com/vendor/craftcms/cms/src/templates/settings/general/_index.html");
    }
}
