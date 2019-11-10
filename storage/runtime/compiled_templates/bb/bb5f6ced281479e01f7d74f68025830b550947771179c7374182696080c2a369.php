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

/* commerce/_components/widgets/Revenue/settings */
class __TwigTemplate_d122693f9b975f832430d8d2697b098f5973d290239eae78ed70d881c2981b94 extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "commerce/_components/widgets/Revenue/settings");
        // line 1
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "commerce/_components/widgets/Revenue/settings", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        echo twig_call_macro($macros["forms"], "macro_selectField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Date Range", "commerce"), "id" => "dateRange", "name" => "dateRange", "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 7
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 7, $this->source); })()), "dateRange", []), "options" =>         // line 8
(isset($context["dateRangeOptions"]) || array_key_exists("dateRangeOptions", $context) ? $context["dateRangeOptions"] : (function () { throw new RuntimeError('Variable "dateRangeOptions" does not exist.', 8, $this->source); })()), "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 9
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 9, $this->source); })()), "getErrors", [0 => "dateRange"], "method")]], 3, $context, $this->getSourceContext());
        // line 10
        echo "
";
        // line 0
        craft\helpers\Template::endProfile("template", "commerce/_components/widgets/Revenue/settings");
    }

    public function getTemplateName()
    {
        return "commerce/_components/widgets/Revenue/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 0,  48 => 10,  46 => 9,  45 => 8,  44 => 7,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"_includes/forms\" as forms %}

{{ forms.selectField({
    label: \"Date Range\"|t('commerce'),
    id: 'dateRange',
    name: 'dateRange',
    value: widget.dateRange,
    options: dateRangeOptions,
    errors: widget.getErrors('dateRange')
}) }}
", "commerce/_components/widgets/Revenue/settings", "/var/www/dev.mavenshake.com/vendor/craftcms/commerce/src/templates/_components/widgets/Revenue/settings.html");
    }
}
