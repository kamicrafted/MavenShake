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

/* index */
class __TwigTemplate_e1c91e9f4eff5980a7c096c9a413c24e8eb16854e98d21783f1119758d41eb8e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_class' => [$this, 'block_body_class'],
            'sitemeta' => [$this, 'block_sitemeta'],
            'body' => [$this, 'block_body'],
            'vue' => [$this, 'block_vue'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_layouts/base";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("template", "index");
        // line 1
        $this->parent = $this->loadTemplate("_layouts/base", "index", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        // line 0
        craft\helpers\Template::endProfile("template", "index");
    }

    // line 2
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "body_class");
        // line 2
        echo "view-home";
        // line 0
        craft\helpers\Template::endProfile("block", "body_class");
    }

    // line 4
    public function block_sitemeta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "sitemeta");
        // line 5
        echo "<title>";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("MavenShake - No-nonsense Nutrition"), "html", null, true);
        echo "</title>
<meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("The example templates for Craft Commerce"), "html", null, true);
        echo "\">
";
        // line 0
        craft\helpers\Template::endProfile("block", "sitemeta");
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "body");
        // line 10
        echo "<div id=\"main\" class=\"container mx-auto p-6\">
  <div class=\"message-main\">
    <h1 class=\"headline\">";
        // line 12
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 12, $this->source); })()), "headline", []), "html", null, true);
        echo "</h1>
    <p class=\"subhead\">
      ";
        // line 14
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 14, $this->source); })()), "subhead", []), "html", null, true);
        echo "
    </p>

    <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 17, $this->source); })()), "ctaUrl", []), "html", null, true);
        echo "\" class=\"button button--primary\">";
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 17, $this->source); })()), "cta", []), "html", null, true);
        echo "</a>

    <p>
      ";
        // line 20
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 20, $this->source); })()), "richtext", []), "html", null, true);
        echo "
    </p>
  </div>

  <div class=\"product-info\">
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 25, $this->source); })()), "keyart", []));
        foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
            // line 26
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["asset"], "getUrl", [0 => "keyart"], "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["asset"], "title", []), "html", null, true);
            echo "\">                               
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        // line 29
        echo "  </div>
</div>

<div class=\"section section--badges\">
  <h4 class=\"hashtag\">#MAVENSHAKE</h4>

  <div class=\"badges\">
    <img class=\"badges__item\" src=\"/images/icons/badge-vegan.svg\" alt=\"\">
    <img class=\"badges__item\" src=\"/images/icons/badge-gluten.svg\" alt=\"\">
    <img class=\"badges__item\" src=\"/images/icons/badge-dairy.svg\" alt=\"\">
    <img class=\"badges__item\" src=\"/images/icons/badge-sugar.svg\" alt=\"\">
  </div>
</div>

";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 43, $this->source); })()), "highlights", []), "all", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 44
            echo "  ";
            if ((craft\helpers\Template::attribute($this->env, $this->source, $context["block"], "type", []) == "contentSection")) {
                // line 45
                echo "    <div class=\"section section--";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["block"], "layout", []), "html", null, true);
                echo "\" style=\"background-color: ";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["block"], "bgColor", []), "html", null, true);
                echo "\">
      <div class=\"container\">
        <div class=\"section__message\">
          <h2 class=\"section__title\">";
                // line 48
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["block"], "headline", []), "html", null, true);
                echo "</h2>
          <p class=\"section__description\">";
                // line 49
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["block"], "subhead", []), "html", null, true);
                echo "</p>
          <p class=\"section__link\">";
                // line 50
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["block"], "sectionLink", []), "html", null, true);
                echo "</p>
        </div>
        ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, $context["block"], "sectionImage", []));
                foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
                    // line 53
                    echo "          <img class=\"section__image\" src=\"";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["asset"], "getUrl", [0 => "w600"], "method"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["asset"], "title", []), "html", null, true);
                    echo "\">                               
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "      </div>
    </div>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 0
        craft\helpers\Template::endProfile("block", "body");
    }

    // line 61
    public function block_vue($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "vue");
        craft\helpers\Template::endProfile("block", "vue");
    }

    public function getTemplateName()
    {
        return "index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 0,  212 => 61,  208 => 0,  199 => 55,  188 => 53,  184 => 52,  179 => 50,  175 => 49,  171 => 48,  162 => 45,  159 => 44,  155 => 43,  139 => 29,  137 => 28,  126 => 26,  122 => 25,  114 => 20,  106 => 17,  100 => 14,  95 => 12,  91 => 10,  89 => 0,  85 => 9,  81 => 0,  77 => 6,  72 => 5,  70 => 0,  66 => 4,  62 => 0,  60 => 2,  58 => 0,  54 => 2,  50 => 0,  47 => 1,  45 => 0,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_layouts/base\" %}
{% block body_class %}view-home{% endblock %}

{% block sitemeta %}
<title>{{ \"MavenShake - No-nonsense Nutrition\"|t }}</title>
<meta name=\"description\" content=\"{{ \"The example templates for Craft Commerce\"|t }}\">
{% endblock %}

{% block body %}
<div id=\"main\" class=\"container mx-auto p-6\">
  <div class=\"message-main\">
    <h1 class=\"headline\">{{ entry.headline }}</h1>
    <p class=\"subhead\">
      {{ entry.subhead }}
    </p>

    <a href=\"{{ entry.ctaUrl }}\" class=\"button button--primary\">{{ entry.cta }}</a>

    <p>
      {{ entry.richtext }}
    </p>
  </div>

  <div class=\"product-info\">
    {% for asset in entry.keyart %}
      <img src=\"{{ asset.getUrl('keyart') }}\" alt=\"{{ asset.title }}\">                               
    {% endfor %}
    {# <img src=\"images/homepage-product.png\" alt=\"\"> #}
  </div>
</div>

<div class=\"section section--badges\">
  <h4 class=\"hashtag\">#MAVENSHAKE</h4>

  <div class=\"badges\">
    <img class=\"badges__item\" src=\"/images/icons/badge-vegan.svg\" alt=\"\">
    <img class=\"badges__item\" src=\"/images/icons/badge-gluten.svg\" alt=\"\">
    <img class=\"badges__item\" src=\"/images/icons/badge-dairy.svg\" alt=\"\">
    <img class=\"badges__item\" src=\"/images/icons/badge-sugar.svg\" alt=\"\">
  </div>
</div>

{% for block in entry.highlights.all() %}
  {% if block.type == \"contentSection\" %}
    <div class=\"section section--{{ block.layout }}\" style=\"background-color: {{ block.bgColor }}\">
      <div class=\"container\">
        <div class=\"section__message\">
          <h2 class=\"section__title\">{{ block.headline }}</h2>
          <p class=\"section__description\">{{ block.subhead }}</p>
          <p class=\"section__link\">{{ block.sectionLink }}</p>
        </div>
        {% for asset in block.sectionImage %}
          <img class=\"section__image\" src=\"{{ asset.getUrl('w600') }}\" alt=\"{{ asset.title }}\">                               
        {% endfor %}
      </div>
    </div>
  {% endif %}
{% endfor %}
{% endblock %}

{% block vue %}
{# {% js %}
  new Vue({
    el: '#main',
    delimiters: ['\${', '}'],
    data: {
      test: \"sdfsdfsd\"
    }
  })
{% endjs %} #}
{% endblock %}", "index", "/var/www/dev.mavenshake.com/templates/index.twig");
    }
}
