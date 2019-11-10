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

/* /_includes/nav */
class __TwigTemplate_5d557ad48a3ad0c2dd3dbbd3239df3d5932c0535e5e4e112f55a200306b8e99e extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "/_includes/nav");
        // line 1
        echo "<nav>
    <ul class=\"list-reset\">
        ";
        // line 3
        $context["page"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 3, $this->source); })()), "app", []), "request", []), "getSegment", [0 => 2], "method");
        // line 4
        echo "
        ";
        // line 6
        echo "        ";
        // line 13
        echo "
        ";
        // line 15
        echo "        ";
        // line 20
        echo "
        ";
        // line 21
        if ((isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "            <li class=\"account\">
                <a href=\"#\">";
            // line 23
            echo " Account</a>
                <ul class=\"list-reset\">
                    <li><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("shop/customer"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("My Orders"), "html", null, true);
            echo "</a></li>
                    <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("shop/customer/addresses"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("My Addresses"), "html", null, true);
            echo "</a></li>
                    <li><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("shop/customer/cards"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("My Cards"), "html", null, true);
            echo "</a></li>
                    <li><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["logoutUrl"]) || array_key_exists("logoutUrl", $context) ? $context["logoutUrl"] : (function () { throw new RuntimeError('Variable "logoutUrl" does not exist.', 28, $this->source); })()), "html", null, true);
            echo "\">Logout</a></li>
                </ul>
            </li>
        ";
        } else {
            // line 32
            echo "            ";
            // line 33
            echo "            <li>
                <a href=\"/shop/checkout/register-signin\">Sign in</a>
            </li>
        ";
        }
        // line 37
        echo "
        <li>
          <a class=\"";
        // line 39
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 39, $this->source); })()) == "cart")) {
            echo "active";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("shop/cart"), "html", null, true);
        echo "\">
              <i class=\"fa fa-shopping-cart\"></i> ";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Cart"), "html", null, true);
        echo " <span id=\"badge\" class=\"badge\">";
        (((craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, ($context["craft"] ?? null), "orders", [], "any", false, true), "number", [0 => craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 40, $this->source); })()), "number", [])], "method", false, true), "one", [], "method", false, true), "totalQty", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, ($context["craft"] ?? null), "orders", [], "any", false, true), "number", [0 => craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 40, $this->source); })()), "number", [])], "method", false, true), "one", [], "method", false, true), "totalQty", [])))) ? (print (twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, ($context["craft"] ?? null), "orders", [], "any", false, true), "number", [0 => craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 40, $this->source); })()), "number", [])], "method", false, true), "one", [], "method", false, true), "totalQty", []), "html", null, true))) : (print (0)));
        echo "</span>
          </a>
        </li>
    </ul>
</nav>
";
        // line 0
        craft\helpers\Template::endProfile("template", "/_includes/nav");
    }

    public function getTemplateName()
    {
        return "/_includes/nav";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 0,  111 => 40,  103 => 39,  99 => 37,  93 => 33,  91 => 32,  84 => 28,  78 => 27,  72 => 26,  66 => 25,  62 => 23,  59 => 22,  57 => 21,  54 => 20,  52 => 15,  49 => 13,  47 => 6,  44 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav>
    <ul class=\"list-reset\">
        {% set page = craft.app.request.getSegment(2) %}

        {# SUBSCRIPTIONS #}
        {# {% if craft.commerce.plans.getAllPlans|length %}
            <li>
                <a class=\"{% if page == 'services' %}active{% endif %}\" href=\"{{ url('shop/services') }}\">
                    {{ \"Services\"|t }}
                </a>
            </li>
        {% endif %} #}

        {# PRODUCT LIST PAGE #}
        {# <li>
            <a class=\"{% if page == 'products' %}active{% endif %}\" href=\"{{ url('shop/products') }}\">
                {{ \"Products\"|t }}
            </a>
        </li> #}

        {% if currentUser %}
            <li class=\"account\">
                <a href=\"#\">{# <i class=\"fas fa-user\"></i> #} Account</a>
                <ul class=\"list-reset\">
                    <li><a href=\"{{ url('shop/customer') }}\">{{ \"My Orders\"|t }}</a></li>
                    <li><a href=\"{{ url('shop/customer/addresses') }}\">{{ \"My Addresses\"|t }}</a></li>
                    <li><a href=\"{{ url('shop/customer/cards') }}\">{{ \"My Cards\"|t }}</a></li>
                    <li><a href=\"{{ logoutUrl }}\">Logout</a></li>
                </ul>
            </li>
        {% else %}
            {# <li class=\"not-link\">{{ \"Guest\"|t }}</li> #}
            <li>
                <a href=\"/shop/checkout/register-signin\">Sign in</a>
            </li>
        {% endif %}

        <li>
          <a class=\"{% if page == 'cart' %}active{% endif %}\" href=\"{{ url('shop/cart') }}\">
              <i class=\"fa fa-shopping-cart\"></i> {{ \"Cart\"|t }} <span id=\"badge\" class=\"badge\">{{ craft.orders.number(cart.number).one().totalQty ?? 0}}</span>
          </a>
        </li>
    </ul>
</nav>
", "/_includes/nav", "/var/www/dev.mavenshake.com/templates/_includes/nav.twig");
    }
}
