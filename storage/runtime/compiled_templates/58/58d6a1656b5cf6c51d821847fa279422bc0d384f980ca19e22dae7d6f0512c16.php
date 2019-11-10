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

/* commerce/_components/widgets/Orders/settings */
class __TwigTemplate_b6851f737b4728bef1c104ec1200fc293044913cf93ec5ea7aa026521e448fa2 extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "commerce/_components/widgets/Orders/settings");
        // line 1
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "commerce/_components/widgets/Orders/settings", 1)->unwrap();
        // line 2
        echo "
<div id=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\">

    <div class=\"field\">
        <div class=\"heading\">
            <label>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Order Status", "commerce"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"input ltr\">

            <input type=\"hidden\" class=\"status-input\" name=\"orderStatusId\"
                   value=\"";
        // line 12
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 12, $this->source); })()), "orderStatusId", []), "html", null, true);
        echo "\"/>

            <a class=\"btn menubtn\"><span
                        class=\"status\"></span> ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("All", "commerce"), "html", null, true);
        echo "
            </a>

            <div class=\"menu\">
                <ul class=\"padded\">
                    <li><a><span class=\"commerceStatusLabel\"><span
                                        class=\"status\"></span> ";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("All", "commerce"), "html", null, true);
        echo "</span></a>
                    </li>

                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orderStatuses"]) || array_key_exists("orderStatuses", $context) ? $context["orderStatuses"] : (function () { throw new RuntimeError('Variable "orderStatuses" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 25
            echo "                        <li>
                            <a data-id=\"";
            // line 26
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["status"], "id", []), "html", null, true);
            echo "\">";
            echo craft\helpers\Template::attribute($this->env, $this->source, $context["status"], "labelHtml", []);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                </ul>
            </div>

        </div>
    </div>

    ";
        // line 35
        echo twig_call_macro($macros["forms"], "macro_textField", [["label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Limit", "commerce"), "name" => "limit", "value" => craft\helpers\Template::attribute($this->env, $this->source,         // line 38
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 38, $this->source); })()), "limit", []), "size" => 2, "errors" => craft\helpers\Template::attribute($this->env, $this->source,         // line 40
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 40, $this->source); })()), "getErrors", [0 => "limit"], "method")]], 35, $context, $this->getSourceContext());
        // line 41
        echo "

</div>
";
        // line 0
        craft\helpers\Template::endProfile("template", "commerce/_components/widgets/Orders/settings");
    }

    public function getTemplateName()
    {
        return "commerce/_components/widgets/Orders/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 0,  109 => 41,  107 => 40,  106 => 38,  105 => 35,  97 => 29,  86 => 26,  83 => 25,  79 => 24,  73 => 21,  64 => 15,  58 => 12,  50 => 7,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"_includes/forms\" as forms %}

<div id=\"{{ id }}\">

    <div class=\"field\">
        <div class=\"heading\">
            <label>{{ \"Order Status\"|t('commerce') }}</label>
        </div>
        <div class=\"input ltr\">

            <input type=\"hidden\" class=\"status-input\" name=\"orderStatusId\"
                   value=\"{{ widget.orderStatusId }}\"/>

            <a class=\"btn menubtn\"><span
                        class=\"status\"></span> {{ \"All\"|t('commerce') }}
            </a>

            <div class=\"menu\">
                <ul class=\"padded\">
                    <li><a><span class=\"commerceStatusLabel\"><span
                                        class=\"status\"></span> {{ \"All\"|t('commerce') }}</span></a>
                    </li>

                    {% for status in orderStatuses %}
                        <li>
                            <a data-id=\"{{ status.id }}\">{{ status.labelHtml|raw }}</a>
                        </li>
                    {% endfor %}
                </ul>
            </div>

        </div>
    </div>

    {{ forms.textField({
        label: \"Limit\"|t('commerce'),
        name: 'limit',
        value: widget.limit,
        size: 2,
        errors: widget.getErrors('limit')
    }) }}

</div>
", "commerce/_components/widgets/Orders/settings", "/var/www/dev.mavenshake.com/vendor/craftcms/commerce/src/templates/_components/widgets/Orders/settings.html");
    }
}
