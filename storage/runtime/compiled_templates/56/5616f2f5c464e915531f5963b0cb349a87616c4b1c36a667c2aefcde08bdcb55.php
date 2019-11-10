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

/* _components/widgets/NewUsers/settings */
class __TwigTemplate_635acaef94c9a75937d2119edf2ef0aaef82d2326ae3d316c44a8c50474395d0 extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "_components/widgets/NewUsers/settings");
        // line 1
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "_components/widgets/NewUsers/settings", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        echo twig_call_macro($macros["forms"], "macro_selectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Date Range", "app"), "id" => "dateRange", "name" => "dateRange", "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 7
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 7, $this->source); })()), "dateRange", []), "options" => [0 => ["label" => "Last 7 days", "value" => "d7"], 1 => ["label" => "Last 30 days", "value" => "d30"], 2 => ["label" => "Last Week", "value" => "lastweek"], 3 => ["label" => "Last Month", "value" => "lastmonth"]], "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 26
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 26, $this->source); })()), "getErrors", [0 => "dateRange"], "method")]], 3, $context, $this->getSourceContext());
        // line 27
        echo "


";
        // line 30
        $context["userGroups"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 30, $this->source); })()), "app", []), "userGroups", []), "getAllGroups", [], "method");
        // line 31
        echo "
";
        // line 32
        if ((twig_length_filter($this->env, (isset($context["userGroups"]) || array_key_exists("userGroups", $context) ? $context["userGroups"] : (function () { throw new RuntimeError('Variable "userGroups" does not exist.', 32, $this->source); })())) > 0)) {
            // line 33
            echo "
    ";
            // line 34
            $context["userGroupsOptions"] = [0 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("All", "app"), "value" => ""]];
            // line 35
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userGroups"]) || array_key_exists("userGroups", $context) ? $context["userGroups"] : (function () { throw new RuntimeError('Variable "userGroups" does not exist.', 35, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["userGroup"]) {
                // line 36
                echo "        ";
                $context["userGroupsOptions"] = twig_array_merge((isset($context["userGroupsOptions"]) || array_key_exists("userGroupsOptions", $context) ? $context["userGroupsOptions"] : (function () { throw new RuntimeError('Variable "userGroupsOptions" does not exist.', 36, $this->source); })()), [0 => ["label" => $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source, $context["userGroup"], "name", []), "site"), "value" => craft\helpers\Template::attribute($this->env, $this->source, $context["userGroup"], "id", [])]]);
                // line 37
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userGroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "
    ";
            // line 39
            echo twig_call_macro($macros["forms"], "macro_selectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("User Group", "app"), "id" => "userGroupId", "name" => "userGroupId", "value" => craft\helpers\Template::attribute($this->env, $this->source,             // line 43
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 43, $this->source); })()), "userGroupId", []), "options" =>             // line 44
(isset($context["userGroupsOptions"]) || array_key_exists("userGroupsOptions", $context) ? $context["userGroupsOptions"] : (function () { throw new RuntimeError('Variable "userGroupsOptions" does not exist.', 44, $this->source); })()), "errors" => craft\helpers\Template::attribute($this->env, $this->source,             // line 45
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 45, $this->source); })()), "getErrors", [0 => "userGroupId"], "method")]], 39, $context, $this->getSourceContext());
            // line 46
            echo "

";
        }
        // line 0
        craft\helpers\Template::endProfile("template", "_components/widgets/NewUsers/settings");
    }

    public function getTemplateName()
    {
        return "_components/widgets/NewUsers/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 0,  86 => 46,  84 => 45,  83 => 44,  82 => 43,  81 => 39,  78 => 38,  72 => 37,  69 => 36,  64 => 35,  62 => 34,  59 => 33,  57 => 32,  54 => 31,  52 => 30,  47 => 27,  45 => 26,  44 => 7,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"_includes/forms\" as forms %}

{{ forms.selectField({
    label: \"Date Range\"|t('app'),
    id: 'dateRange',
    name: 'dateRange',
    value: widget.dateRange,
    options: [
    {
        label: 'Last 7 days',
        value: 'd7'
    },
    {
        label: 'Last 30 days',
        value: 'd30'
    },
    {
        label: 'Last Week',
        value: 'lastweek',
    },
    {
        label: 'Last Month',
        value: 'lastmonth',
    },
    ],
    errors: widget.getErrors('dateRange')
}) }}


{% set userGroups = craft.app.userGroups.getAllGroups() %}

{% if userGroups|length > 0 %}

    {% set userGroupsOptions = [{ label: 'All'|t('app'), value: '' }] %}
    {% for userGroup in userGroups %}
        {% set userGroupsOptions = userGroupsOptions|merge([{ label: userGroup.name|t('site'), value: userGroup.id }]) %}
    {% endfor %}

    {{ forms.selectField({
        label: \"User Group\"|t('app'),
        id: 'userGroupId',
        name: 'userGroupId',
        value: widget.userGroupId,
        options: userGroupsOptions,
        errors: widget.getErrors('userGroupId')
    }) }}

{% endif %}
", "_components/widgets/NewUsers/settings", "/var/www/dev.mavenshake.com/vendor/craftcms/cms/src/templates/_components/widgets/NewUsers/settings.html");
    }
}
