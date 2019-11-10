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

/* /_includes/header */
class __TwigTemplate_9fc51a851a491122c0b48165d9bbafdc67e973c2f96f1f532da70a3e10ca2b63 extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "/_includes/header");
        // line 1
        echo "<header id=\"header\" class=\"site-header\">
  ";
        // line 2
        if ((isset($context["showNav"]) || array_key_exists("showNav", $context) ? $context["showNav"] : (function () { throw new RuntimeError('Variable "showNav" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "    <div class=\"menu-button\" @click=\"toggleMenu\">
      <i class=\"icon icon-menu\" data-feather=\"menu\"></i>
    </div>

    <div class=\"site-header__left\" :class=\"{show: showMenu}\">
      <div class=\"close-button\" @click=\"toggleMenu\">
        <i class=\"icon icon-close\" data-feather=\"x-circle\"></i>
      </div>
      
      ";
            // line 12
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 12, $this->source); })()), "olivemenus", []), "getMenuHTML", [0 => "mainNavigation", 1 => ["menu-id" => "main-menu"]], "method"), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 15
        echo "
  <div class=\"site-header__logo\" :class=\"{show: showMenu}\">
    <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("/"), "html", null, true);
        echo "\"><img src=\"/images/logo-mavenshake.svg\" alt=\"MavenShake Logo\"></a>
    ";
        // line 19
        echo "  </div>

  <div class=\"site-header__right\">
    ";
        // line 22
        if ((isset($context["showNav"]) || array_key_exists("showNav", $context) ? $context["showNav"] : (function () { throw new RuntimeError('Variable "showNav" does not exist.', 22, $this->source); })())) {
            // line 23
            echo "      ";
            // line 24
            echo "      ";
            $this->loadTemplate("/_includes/nav", "/_includes/header", 24)->display($context);
            // line 25
            echo "    ";
        }
        // line 26
        echo "
    ";
        // line 27
        if ((isset($context["extraHeader"]) || array_key_exists("extraHeader", $context))) {
            // line 28
            echo "      ";
            echo twig_escape_filter($this->env, (isset($context["extraHeader"]) || array_key_exists("extraHeader", $context) ? $context["extraHeader"] : (function () { throw new RuntimeError('Variable "extraHeader" does not exist.', 28, $this->source); })()), "html", null, true);
            echo "
    ";
        }
        // line 30
        echo "  </div>
</header>

";
        // line 33
        ob_start();
        // line 34
        echo "  new Vue({
    el: '#header',
    delimiters: ['\${', '}'],
    data: {
      showMenu: false
    },
    methods: {
      toggleMenu () {
        this.showMenu = !this.showMenu;
        console.log(this.showMenu);
      }
    }
  })
";
        Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        // line 0
        craft\helpers\Template::endProfile("template", "/_includes/header");
    }

    public function getTemplateName()
    {
        return "/_includes/header";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 0,  101 => 34,  99 => 33,  94 => 30,  88 => 28,  86 => 27,  83 => 26,  80 => 25,  77 => 24,  75 => 23,  73 => 22,  68 => 19,  64 => 17,  60 => 15,  54 => 12,  43 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\" class=\"site-header\">
  {% if showNav %}
    <div class=\"menu-button\" @click=\"toggleMenu\">
      <i class=\"icon icon-menu\" data-feather=\"menu\"></i>
    </div>

    <div class=\"site-header__left\" :class=\"{show: showMenu}\">
      <div class=\"close-button\" @click=\"toggleMenu\">
        <i class=\"icon icon-close\" data-feather=\"x-circle\"></i>
      </div>
      
      {{ craft.olivemenus.getMenuHTML('mainNavigation',{ 'menu-id': 'main-menu' }) }}
    </div>
  {% endif %}

  <div class=\"site-header__logo\" :class=\"{show: showMenu}\">
    <a href=\"{{ url('/') }}\"><img src=\"/images/logo-mavenshake.svg\" alt=\"MavenShake Logo\"></a>
    {# <a href=\"{{ url('shop') }}\" class=\"brand mb-6 md:mb-0 block\">{%- include \"shop/_images/logo\" with {'class': 'logo'} -%}</a> #}
  </div>

  <div class=\"site-header__right\">
    {% if showNav %}
      {# {% include \"shop/_includes/nav\" %} #}
      {% include '/_includes/nav' %}
    {% endif %}

    {% if extraHeader is defined %}
      {{ extraHeader }}
    {% endif %}
  </div>
</header>

{% js %}
  new Vue({
    el: '#header',
    delimiters: ['\${', '}'],
    data: {
      showMenu: false
    },
    methods: {
      toggleMenu () {
        this.showMenu = !this.showMenu;
        console.log(this.showMenu);
      }
    }
  })
{% endjs %}", "/_includes/header", "/var/www/dev.mavenshake.com/templates/_includes/header.twig");
    }
}
