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

/* _layouts/base */
class __TwigTemplate_11d87cdc7f7103e9329101e24af0c1fac0840f5d40c14b453f732aaae8c4c31c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'sitemeta' => [$this, 'block_sitemeta'],
            'styles' => [$this, 'block_styles'],
            'scripts' => [$this, 'block_scripts'],
            'body_class' => [$this, 'block_body_class'],
            'siteHeader' => [$this, 'block_siteHeader'],
            'body' => [$this, 'block_body'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
            'vue' => [$this, 'block_vue'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "_layouts/base");
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    ";
        // line 7
        $this->displayBlock('sitemeta', $context, $blocks);
        // line 11
        echo "

    ";
        // line 13
        $this->displayBlock('styles', $context, $blocks);
        // line 20
        echo "
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

    ";
        // line 23
        if ((isset($context["extraHead"]) || array_key_exists("extraHead", $context))) {
            // line 24
            echo "      ";
            echo twig_escape_filter($this->env, (isset($context["extraHead"]) || array_key_exists("extraHead", $context) ? $context["extraHead"] : (function () { throw new RuntimeError('Variable "extraHead" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "
    ";
        }
        // line 26
        echo "
    ";
        // line 27
        $this->displayBlock('scripts', $context, $blocks);
        // line 32
        echo "  ";
        call_user_func_array($this->env->getFunction('head')->getCallable(), []);
        echo "</head>

  <body class=\"";
        // line 34
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">";
        call_user_func_array($this->env->getFunction('beginBody')->getCallable(), []);
        echo "
    <!--[if lt IE 8]>
        <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    ";
        // line 39
        if ( !(isset($context["cart"]) || array_key_exists("cart", $context))) {
            // line 40
            echo "      ";
            $context["cart"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 40, $this->source); })()), "commerce", []), "carts", []), "cart", []);
            // line 41
            echo "    ";
        }
        // line 42
        echo "

    ";
        // line 44
        if ( !(isset($context["showNav"]) || array_key_exists("showNav", $context))) {
            // line 45
            echo "      ";
            $context["showNav"] = true;
            // line 46
            echo "    ";
        }
        // line 47
        echo "
    ";
        // line 48
        $this->displayBlock('siteHeader', $context, $blocks);
        // line 51
        echo "
    ";
        // line 52
        $context["flashNotice"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 52, $this->source); })()), "app", []), "session", []), "getFlash", [0 => "notice"], "method");
        // line 53
        echo "
    ";
        // line 54
        if ((isset($context["flashNotice"]) || array_key_exists("flashNotice", $context) ? $context["flashNotice"] : (function () { throw new RuntimeError('Variable "flashNotice" does not exist.', 54, $this->source); })())) {
            // line 55
            echo "      <div class=\"bg-blue text-white\">
        <div class=\"container mx-auto px-6 py-4\">
          ";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["flashNotice"]) || array_key_exists("flashNotice", $context) ? $context["flashNotice"] : (function () { throw new RuntimeError('Variable "flashNotice" does not exist.', 57, $this->source); })()), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 61
        echo "
    ";
        // line 62
        $context["flashError"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 62, $this->source); })()), "app", []), "session", []), "getFlash", [0 => "error"], "method");
        // line 63
        echo "
    ";
        // line 64
        if ((isset($context["flashError"]) || array_key_exists("flashError", $context) ? $context["flashError"] : (function () { throw new RuntimeError('Variable "flashError" does not exist.', 64, $this->source); })())) {
            // line 65
            echo "      <div class=\"bg-red text-white\">
        <div class=\"container mx-auto px-6 py-4\">
          ";
            // line 67
            echo twig_escape_filter($this->env, (isset($context["flashError"]) || array_key_exists("flashError", $context) ? $context["flashError"] : (function () { throw new RuntimeError('Variable "flashError" does not exist.', 67, $this->source); })()), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 71
        echo "
    ";
        // line 72
        if (twig_length_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 72, $this->source); })()), "errors", []))) {
            // line 73
            echo "      <div class=\"bg-red text-white\">
        <div class=\"container mx-auto px-6 py-4\">
          ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 75, $this->source); })()), "errors", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["attribute"] => $context["errors"]) {
                // line 76
                echo "            ";
                if (craft\helpers\Template::attribute($this->env, $this->source, $context["loop"], "first", [])) {
                    // line 77
                    echo "              <ul>
              ";
                }
                // line 79
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["errors"]);
                foreach ($context['_seq'] as $context["key"] => $context["error"]) {
                    // line 80
                    echo "                <li>";
                    echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                    echo ":
                  ";
                    // line 81
                    echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                    echo "</li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "              ";
                if (craft\helpers\Template::attribute($this->env, $this->source, $context["loop"], "last", [])) {
                    // line 84
                    echo "              </ul>
            ";
                }
                // line 86
                echo "          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['errors'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "        </div>
      </div>
    ";
        }
        // line 90
        echo "
    ";
        // line 91
        $this->displayBlock('body', $context, $blocks);
        // line 99
        echo "

    ";
        // line 101
        $this->displayBlock('footer', $context, $blocks);
        // line 104
        echo "
    ";
        // line 108
        echo "    ";
        if (craft\helpers\Template::attribute($this->env, $this->source, ($context["currentUser"] ?? null), "isInGroup", [0 => "superUser"], "method", true, true)) {
            // line 109
            echo "      ";
            $this->loadTemplate("/_includes/debug", "_layouts/base", 109)->display($context);
            // line 110
            echo "    ";
        }
        // line 111
        echo "
    ";
        // line 117
        echo "    ";
        ob_start();
        // line 118
        echo "    feather.replace();

    function doPoll(){
      console.log('Commerce example templates : Polling to see if the order changed on another tab or session');
      \$.ajax({
          url: '',
          data: {
              // '";
        // line 125
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 125, $this->source); })()), "config", []), "csrfTokenName", []), "js"), "html", null, true);
        echo "': '";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 125, $this->source); })()), "request", []), "csrfToken", []), "js"), "html", null, true);
        echo "',
              '";
        // line 126
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 126, $this->source); })()), "app", []), "config", []), "general", []), "csrfTokenName", []), "js"), "html", null, true);
        echo "': '";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 126, $this->source); })()), "app", []), "request", []), "csrfToken", []), "js"), "html", null, true);
        echo "',
              'action': 'commerce/cart/get-cart'
          },
          success: function(data) {
              var orderNumberChanged = (data.cart.number != '";
        // line 130
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 130, $this->source); })()), "number", []), "html", null, true);
        echo "');
              var orderTotalChanged = (data.cart.totalQty != '";
        // line 131
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 131, $this->source); })()), "totalQty", []), "html", null, true);
        echo "');
              var orderTotalPriceChanged = (data.cart.totalPrice != '";
        // line 132
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 132, $this->source); })()), "totalPrice", []), "html", null, true);
        echo "');
              if(orderNumberChanged || orderTotalChanged || orderTotalPriceChanged){
                  console.log({'orderNumberChanged' : orderNumberChanged, 'orderTotalChanged' : orderTotalChanged, 'orderTotalPriceChanged': orderTotalPriceChanged});
                  console.log('Order changed.');
                  var r = confirm(\"Your cart has been updated elsewhere, reload the page?\");
                  if (r == true) {
                    location.reload(true);
                  }
              }else{
                  console.log('Commerce example templates : Nothing changed, checking again in 30 seconds.');
              }
              setTimeout(doPoll,30000);
          },
          dataType: 'json'
      });
    }
          
    doPoll();
    ";
        Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        // line 151
        echo "
    ";
        // line 152
        $this->displayBlock('vue', $context, $blocks);
        // line 154
        echo "  ";
        call_user_func_array($this->env->getFunction('endBody')->getCallable(), []);
        echo "</body>
</html>
";
        // line 0
        craft\helpers\Template::endProfile("template", "_layouts/base");
    }

    // line 7
    public function block_sitemeta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "sitemeta");
        // line 8
        echo "      <title>";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("MavenShake"), "html", null, true);
        echo "</title>
      <meta name=\"description\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Welcome to Mavenshake"), "html", null, true);
        echo "\">
    ";
        // line 0
        craft\helpers\Template::endProfile("block", "sitemeta");
    }

    // line 13
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "styles");
        // line 14
        echo "      <style>";
        $this->loadTemplate("shop/reset.css", "_layouts/base", 14)->display($context);
        echo "</style>
      <style>";
        // line 15
        $this->loadTemplate("shop/tailwind.css", "_layouts/base", 15)->display($context);
        echo "</style>
      <style>";
        // line 16
        $this->loadTemplate("shop/style.css", "_layouts/base", 16)->display($context);
        echo "</style>
      <link rel=\"stylesheet\" type=\"text/css\" href=\"/styles/app.css?v=";
        // line 17
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, twig_date_converter($this->env), "timestamp", []), "html", null, true);
        echo "\"/>
      <link rel=\"stylesheet\" href=\"https://use.typekit.net/odp6nvd.css\">
    ";
        // line 0
        craft\helpers\Template::endProfile("block", "styles");
    }

    // line 27
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "scripts");
        // line 28
        echo "      <script src=\"https://cdn.jsdelivr.net/npm/vue@2.6.0\"></script>
      <script type=\"application/javascript\">";
        // line 29
        $this->loadTemplate("shop/jquery.js", "_layouts/base", 29)->display($context);
        echo "</script>
      <script src=\"https://unpkg.com/feather-icons\"></script>
    ";
        // line 0
        craft\helpers\Template::endProfile("block", "scripts");
    }

    // line 34
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "body_class");
        // line 34
        echo "view-base";
        // line 0
        craft\helpers\Template::endProfile("block", "body_class");
    }

    // line 48
    public function block_siteHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "siteHeader");
        // line 49
        echo "      ";
        $this->loadTemplate("/_includes/header", "_layouts/base", 49)->display($context);
        // line 50
        echo "    ";
        // line 0
        craft\helpers\Template::endProfile("block", "siteHeader");
    }

    // line 91
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "body");
        // line 92
        echo "      <div id=\"main\" class=\"container mx-auto p-6\">
        ";
        // line 93
        $this->displayBlock('main', $context, $blocks);
        // line 97
        echo "      </div>
    ";
        // line 0
        craft\helpers\Template::endProfile("block", "body");
    }

    // line 93
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "main");
        // line 94
        echo "          <h1>Default Content</h1>
          <p>You should not see this.</p>
        ";
        // line 0
        craft\helpers\Template::endProfile("block", "main");
    }

    // line 101
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "footer");
        // line 102
        echo "      ";
        $this->loadTemplate("/_includes/footer", "_layouts/base", 102)->display($context);
        // line 103
        echo "    ";
        // line 0
        craft\helpers\Template::endProfile("block", "footer");
    }

    // line 152
    public function block_vue($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "vue");
        // line 153
        echo "    ";
        // line 0
        craft\helpers\Template::endProfile("block", "vue");
    }

    public function getTemplateName()
    {
        return "_layouts/base";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 0,  484 => 153,  482 => 0,  478 => 152,  474 => 0,  472 => 103,  469 => 102,  467 => 0,  463 => 101,  459 => 0,  455 => 94,  453 => 0,  449 => 93,  445 => 0,  442 => 97,  440 => 93,  437 => 92,  435 => 0,  431 => 91,  427 => 0,  425 => 50,  422 => 49,  420 => 0,  416 => 48,  412 => 0,  410 => 34,  408 => 0,  404 => 34,  400 => 0,  395 => 29,  392 => 28,  390 => 0,  386 => 27,  382 => 0,  377 => 17,  373 => 16,  369 => 15,  364 => 14,  362 => 0,  358 => 13,  354 => 0,  350 => 9,  345 => 8,  343 => 0,  339 => 7,  335 => 0,  329 => 154,  327 => 152,  324 => 151,  302 => 132,  298 => 131,  294 => 130,  285 => 126,  279 => 125,  270 => 118,  267 => 117,  264 => 111,  261 => 110,  258 => 109,  255 => 108,  252 => 104,  250 => 101,  246 => 99,  244 => 91,  241 => 90,  236 => 87,  222 => 86,  218 => 84,  215 => 83,  207 => 81,  202 => 80,  197 => 79,  193 => 77,  190 => 76,  173 => 75,  169 => 73,  167 => 72,  164 => 71,  157 => 67,  153 => 65,  151 => 64,  148 => 63,  146 => 62,  143 => 61,  136 => 57,  132 => 55,  130 => 54,  127 => 53,  125 => 52,  122 => 51,  120 => 48,  117 => 47,  114 => 46,  111 => 45,  109 => 44,  105 => 42,  102 => 41,  99 => 40,  97 => 39,  87 => 34,  81 => 32,  79 => 27,  76 => 26,  70 => 24,  68 => 23,  63 => 20,  61 => 13,  57 => 11,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    {% block sitemeta %}
      <title>{{ \"MavenShake\"|t }}</title>
      <meta name=\"description\" content=\"{{ \"Welcome to Mavenshake\"|t }}\">
    {% endblock %}


    {% block styles %}
      <style>{% include 'shop/reset.css' %}</style>
      <style>{% include 'shop/tailwind.css' %}</style>
      <style>{% include 'shop/style.css' %}</style>
      <link rel=\"stylesheet\" type=\"text/css\" href=\"/styles/app.css?v={{ date().timestamp }}\"/>
      <link rel=\"stylesheet\" href=\"https://use.typekit.net/odp6nvd.css\">
    {% endblock %}

    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

    {% if extraHead is defined %}
      {{ extraHead }}
    {% endif %}

    {% block scripts %}
      <script src=\"https://cdn.jsdelivr.net/npm/vue@2.6.0\"></script>
      <script type=\"application/javascript\">{% include 'shop/jquery.js' %}</script>
      <script src=\"https://unpkg.com/feather-icons\"></script>
    {% endblock %}
  </head>

  <body class=\"{% block body_class %}view-base{% endblock %}\">
    <!--[if lt IE 8]>
        <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    {% if cart is not defined %}
      {% set cart = craft.commerce.carts.cart %}
    {% endif %}


    {% if showNav is not defined %}
      {% set showNav = true %}
    {% endif %}

    {% block siteHeader %}
      {% include '/_includes/header' %}
    {% endblock %}

    {% set flashNotice = craft.app.session.getFlash('notice') %}

    {% if flashNotice %}
      <div class=\"bg-blue text-white\">
        <div class=\"container mx-auto px-6 py-4\">
          {{ flashNotice }}
        </div>
      </div>
    {% endif %}

    {% set flashError = craft.app.session.getFlash('error') %}

    {% if flashError %}
      <div class=\"bg-red text-white\">
        <div class=\"container mx-auto px-6 py-4\">
          {{ flashError }}
        </div>
      </div>
    {% endif %}

    {% if cart.errors|length %}
      <div class=\"bg-red text-white\">
        <div class=\"container mx-auto px-6 py-4\">
          {% for attribute, errors in cart.errors %}
            {% if loop.first %}
              <ul>
              {% endif %}
              {% for key, error in errors %}
                <li>{{ attribute }}:
                  {{ error }}</li>
              {% endfor %}
              {% if loop.last %}
              </ul>
            {% endif %}
          {% endfor %}
        </div>
      </div>
    {% endif %}

    {% block body %}
      <div id=\"main\" class=\"container mx-auto p-6\">
        {% block main %}
          <h1>Default Content</h1>
          <p>You should not see this.</p>
        {% endblock %}
      </div>
    {% endblock %}


    {% block footer %}
      {% include '/_includes/footer' %}
    {% endblock %}

    {#
      Show debug info for users that are in superUser group
    #}
    {% if currentUser.isInGroup('superUser') is defined %}
      {% include '/_includes/debug' %}
    {% endif %}

    {#
      The following javascript polls the server every 10 seconds and sees if the cart has changed on another session or browser tab
      and will refresh the page if the current page is out of date. This prevents the customer from changing the cart on another tab,
      then submitting an update cart form action that might overwrite the changes on the other page.
    #}
    {% js %}
    feather.replace();

    function doPoll(){
      console.log('Commerce example templates : Polling to see if the order changed on another tab or session');
      \$.ajax({
          url: '',
          data: {
              // '{{ craft.config.csrfTokenName|e('js') }}': '{{ craft.request.csrfToken|e('js') }}',
              '{{ craft.app.config.general.csrfTokenName|e('js') }}': '{{ craft.app.request.csrfToken|e('js') }}',
              'action': 'commerce/cart/get-cart'
          },
          success: function(data) {
              var orderNumberChanged = (data.cart.number != '{{ cart.number }}');
              var orderTotalChanged = (data.cart.totalQty != '{{ cart.totalQty }}');
              var orderTotalPriceChanged = (data.cart.totalPrice != '{{ cart.totalPrice }}');
              if(orderNumberChanged || orderTotalChanged || orderTotalPriceChanged){
                  console.log({'orderNumberChanged' : orderNumberChanged, 'orderTotalChanged' : orderTotalChanged, 'orderTotalPriceChanged': orderTotalPriceChanged});
                  console.log('Order changed.');
                  var r = confirm(\"Your cart has been updated elsewhere, reload the page?\");
                  if (r == true) {
                    location.reload(true);
                  }
              }else{
                  console.log('Commerce example templates : Nothing changed, checking again in 30 seconds.');
              }
              setTimeout(doPoll,30000);
          },
          dataType: 'json'
      });
    }
          
    doPoll();
    {% endjs %}

    {% block vue %}
    {% endblock %}
  </body>
</html>
", "_layouts/base", "/var/www/dev.mavenshake.com/templates/_layouts/base.twig");
    }
}
