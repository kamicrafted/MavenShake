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

/* /_includes/debug */
class __TwigTemplate_81f5400f012bc5a4c5d82d46c1667a51f503765c9aefa491dc388063512e851a extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "/_includes/debug");
        // line 1
        echo "<div id=\"debug\" class=\"debug\" :class=\"{show: showDebug}\">
  <div class=\"container\">
    <div class=\"debug__button\" @click=\"togglePanel\">
      Commerce Cart Debug Info <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::actionUrl("/db-dump", ["key" => "1234567890"]), "html", null, true);
        echo "\">Backup Now</a>
    </div>
    <div class=\"debug__info\">
      <ul class=\"debug-group\">
        <li class=\"debug-group__title\">User info</li>
        <li><strong>Username</strong> ";
        // line 9
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 9, $this->source); })()), "user", []), "html", null, true);
        echo "</li>
        <li><strong>Email</strong> ";
        // line 10
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 10, $this->source); })()), "email", []), "html", null, true);
        echo "</li>
        <li><strong>Customer ID</strong> ";
        // line 11
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 11, $this->source); })()), "customerId", []), "html", null, true);
        echo "</li>
        <li><strong>Shipping Address ID</strong> ";
        // line 12
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 12, $this->source); })()), "shippingAddressId", []), "html", null, true);
        echo "</li>
        <li><strong>Billing Address ID</strong> ";
        // line 13
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 13, $this->source); })()), "billingAddressId", []), "html", null, true);
        echo "</li>
        <li><strong>Last IP</strong> ";
        // line 14
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 14, $this->source); })()), "lastIp", []), "html", null, true);
        echo "</li>
      </ul>

      <ul class=\"debug-group\">
        <li class=\"debug-group__title\">Cart info</li>
        <li><strong>Cart ID</strong> ";
        // line 19
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 19, $this->source); })()), "id", []), "html", null, true);
        echo "</li>
        <li><strong>Cart Number</strong> ";
        // line 20
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 20, $this->source); })()), "number", []), "html", null, true);
        echo "</li>
        <li><strong>Cart Short Number</strong> ";
        // line 21
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 21, $this->source); })()), "shortNumber", []), "html", null, true);
        echo "</li>
        <li>
          <strong>Coupon</strong>
          ";
        // line 24
        if (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 24, $this->source); })()), "couponCode", [])) {
            // line 25
            echo "            ";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 25, $this->source); })()), "couponCode", []), "html", null, true);
            echo "
          ";
        } else {
            // line 27
            echo "            None
          ";
        }
        // line 29
        echo "        </li>
        <li><strong>Currency</strong> ";
        // line 30
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 30, $this->source); })()), "currency", []), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 30, $this->source); })()), "paymentCurrency", []), "html", null, true);
        echo " (Payment Currency)</li>
      </ul>

      <ul class=\"debug-group\">
        <li class=\"debug-group__title\">Other info</li>
        <li><strong>Gateway ID</strong> ";
        // line 35
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 35, $this->source); })()), "gatewayId", []), "html", null, true);
        echo "</li>
        <li><strong>Shipping Method Handle</strong> ";
        // line 36
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 36, $this->source); })()), "shippingMethodHandle", []), "html", null, true);
        echo "</li>
        <li>
          <strong>Payment Source ID</strong>
          ";
        // line 39
        if (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 39, $this->source); })()), "paymentSourceId", [])) {
            // line 40
            echo "            ";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 40, $this->source); })()), "paymentSourceId", []), "html", null, true);
            echo "
          ";
        } else {
            // line 42
            echo "            None
          ";
        }
        // line 44
        echo "        </li>
        <li>
          <strong>Payment Return URL</strong>
          ";
        // line 47
        if (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 47, $this->source); })()), "returnUrl", [])) {
            // line 48
            echo "            ";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 48, $this->source); })()), "returnUrl", []), "html", null, true);
            echo "
          ";
        } else {
            // line 50
            echo "            None
          ";
        }
        // line 52
        echo "        </li>
        <li>
          <strong>Payment Cancel URL</strong>
          ";
        // line 55
        if (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 55, $this->source); })()), "cancelUrl", [])) {
            // line 56
            echo "            ";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 56, $this->source); })()), "cancelUrl", []), "html", null, true);
            echo "
          ";
        } else {
            // line 58
            echo "            None
          ";
        }
        // line 60
        echo "        </li>
        <li><strong>Language</strong> ";
        // line 61
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 61, $this->source); })()), "orderLanguage", []), "html", null, true);
        echo "</li>
      </ul>
    </div>
  </div>
</div>

";
        // line 67
        ob_start();
        // line 68
        echo "  new Vue({
    el: '#debug',
    delimiters: ['\${', '}'],
    data: {
      showDebug: false
    },
    methods: {
      togglePanel () {
        this.showDebug = !this.showDebug;
        console.log(this.showDebug);
      }
    }
  })
";
        Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        // line 0
        craft\helpers\Template::endProfile("template", "/_includes/debug");
    }

    public function getTemplateName()
    {
        return "/_includes/debug";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 0,  188 => 68,  186 => 67,  177 => 61,  174 => 60,  170 => 58,  164 => 56,  162 => 55,  157 => 52,  153 => 50,  147 => 48,  145 => 47,  140 => 44,  136 => 42,  130 => 40,  128 => 39,  122 => 36,  118 => 35,  108 => 30,  105 => 29,  101 => 27,  95 => 25,  93 => 24,  87 => 21,  83 => 20,  79 => 19,  71 => 14,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"debug\" class=\"debug\" :class=\"{show: showDebug}\">
  <div class=\"container\">
    <div class=\"debug__button\" @click=\"togglePanel\">
      Commerce Cart Debug Info <a href=\"{{ actionUrl('/db-dump', { key: '1234567890' }) }}\">Backup Now</a>
    </div>
    <div class=\"debug__info\">
      <ul class=\"debug-group\">
        <li class=\"debug-group__title\">User info</li>
        <li><strong>Username</strong> {{ cart.user }}</li>
        <li><strong>Email</strong> {{ cart.email }}</li>
        <li><strong>Customer ID</strong> {{ cart.customerId }}</li>
        <li><strong>Shipping Address ID</strong> {{ cart.shippingAddressId }}</li>
        <li><strong>Billing Address ID</strong> {{ cart.billingAddressId }}</li>
        <li><strong>Last IP</strong> {{ cart.lastIp }}</li>
      </ul>

      <ul class=\"debug-group\">
        <li class=\"debug-group__title\">Cart info</li>
        <li><strong>Cart ID</strong> {{ cart.id }}</li>
        <li><strong>Cart Number</strong> {{ cart.number }}</li>
        <li><strong>Cart Short Number</strong> {{ cart.shortNumber }}</li>
        <li>
          <strong>Coupon</strong>
          {% if cart.couponCode %}
            {{ cart.couponCode }}
          {% else %}
            None
          {% endif %}
        </li>
        <li><strong>Currency</strong> {{ cart.currency }} / {{ cart.paymentCurrency }} (Payment Currency)</li>
      </ul>

      <ul class=\"debug-group\">
        <li class=\"debug-group__title\">Other info</li>
        <li><strong>Gateway ID</strong> {{ cart.gatewayId }}</li>
        <li><strong>Shipping Method Handle</strong> {{ cart.shippingMethodHandle }}</li>
        <li>
          <strong>Payment Source ID</strong>
          {% if cart.paymentSourceId %}
            {{ cart.paymentSourceId }}
          {% else %}
            None
          {% endif %}
        </li>
        <li>
          <strong>Payment Return URL</strong>
          {% if cart.returnUrl %}
            {{ cart.returnUrl }}
          {% else %}
            None
          {% endif %}
        </li>
        <li>
          <strong>Payment Cancel URL</strong>
          {% if cart.cancelUrl %}
            {{ cart.cancelUrl }}
          {% else %}
            None
          {% endif %}
        </li>
        <li><strong>Language</strong> {{ cart.orderLanguage }}</li>
      </ul>
    </div>
  </div>
</div>

{% js %}
  new Vue({
    el: '#debug',
    delimiters: ['\${', '}'],
    data: {
      showDebug: false
    },
    methods: {
      togglePanel () {
        this.showDebug = !this.showDebug;
        console.log(this.showDebug);
      }
    }
  })
{% endjs %}
", "/_includes/debug", "/var/www/dev.mavenshake.com/templates/_includes/debug.twig");
    }
}
