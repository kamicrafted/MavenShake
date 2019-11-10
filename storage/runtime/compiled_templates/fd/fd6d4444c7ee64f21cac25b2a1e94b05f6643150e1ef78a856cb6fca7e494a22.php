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

/* commerce/_components/widgets/Orders/body */
class __TwigTemplate_9818935712965c25924b6b410bdc852d830d82129b8ff2ed186d7a116cb2a091 extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "commerce/_components/widgets/Orders/body");
        // line 1
        echo "<div class=\"recentorders-container\">
    ";
        // line 2
        if (twig_length_filter($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 2, $this->source); })()))) {
            // line 3
            echo "        <table class=\"data fullwidth\">
            <thead>
            <tr>
                <th>";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Number", "commerce"), "html", null, true);
            echo "</th>
                ";
            // line 7
            if ((isset($context["showStatuses"]) || array_key_exists("showStatuses", $context) ? $context["showStatuses"] : (function () { throw new RuntimeError('Variable "showStatuses" does not exist.', 7, $this->source); })())) {
                // line 8
                echo "                    <th>";
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Status", "commerce"), "html", null, true);
                echo "</th>";
            }
            // line 9
            echo "                <th>";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Total Paid", "commerce"), "html", null, true);
            echo "</th>
                <th>";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Date Ordered", "commerce"), "html", null, true);
            echo "</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 15
                echo "                <tr>
                    <td>
                        <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["order"], "getCpEditUrl", [], "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["order"], "reference", []), "html", null, true);
                echo "</a>
                    </td>
                    ";
                // line 19
                if ((isset($context["showStatuses"]) || array_key_exists("showStatuses", $context) ? $context["showStatuses"] : (function () { throw new RuntimeError('Variable "showStatuses" does not exist.', 19, $this->source); })())) {
                    // line 20
                    echo "                        <td>
                            ";
                    // line 21
                    if (craft\helpers\Template::attribute($this->env, $this->source, $context["order"], "orderStatus", [])) {
                        // line 22
                        echo "                                ";
                        echo craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, $context["order"], "orderStatus", []), "labelHtml", []);
                        echo "
                            ";
                    }
                    // line 24
                    echo "                        </td>
                    ";
                }
                // line 26
                echo "                    <td>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('currency')->getCallable(), [craft\helpers\Template::attribute($this->env, $this->source, $context["order"], "totalPaid", []), craft\helpers\Template::attribute($this->env, $this->source, $context["order"], "currency", [])]), "html", null, true);
                echo "</td>
                    <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->datetimeFilter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["order"], "dateOrdered", []), "short"), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 33
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("No orders.", "commerce"), "html", null, true);
            echo "</p>
    ";
        }
        // line 35
        echo "</div>
";
        // line 0
        craft\helpers\Template::endProfile("template", "commerce/_components/widgets/Orders/body");
    }

    public function getTemplateName()
    {
        return "commerce/_components/widgets/Orders/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 0,  128 => 35,  122 => 33,  117 => 30,  108 => 27,  103 => 26,  99 => 24,  93 => 22,  91 => 21,  88 => 20,  86 => 19,  79 => 17,  75 => 15,  71 => 14,  64 => 10,  59 => 9,  54 => 8,  52 => 7,  48 => 6,  43 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"recentorders-container\">
    {% if orders|length %}
        <table class=\"data fullwidth\">
            <thead>
            <tr>
                <th>{{ \"Number\"|t('commerce') }}</th>
                {% if showStatuses %}
                    <th>{{ \"Status\"|t('commerce') }}</th>{% endif %}
                <th>{{ \"Total Paid\"|t('commerce') }}</th>
                <th>{{ \"Date Ordered\"|t('commerce') }}</th>
            </tr>
            </thead>
            <tbody>
            {% for order in orders %}
                <tr>
                    <td>
                        <a href=\"{{ order.getCpEditUrl() }}\">{{ order.reference }}</a>
                    </td>
                    {% if showStatuses %}
                        <td>
                            {% if order.orderStatus %}
                                {{ order.orderStatus.labelHtml|raw }}
                            {% endif %}
                        </td>
                    {% endif %}
                    <td>{{ order.totalPaid|currency(order.currency) }}</td>
                    <td>{{ order.dateOrdered|datetime('short') }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% else %}
        <p>{{ \"No orders.\"|t('commerce') }}</p>
    {% endif %}
</div>
", "commerce/_components/widgets/Orders/body", "/var/www/dev.mavenshake.com/vendor/craftcms/commerce/src/templates/_components/widgets/Orders/body.html");
    }
}
