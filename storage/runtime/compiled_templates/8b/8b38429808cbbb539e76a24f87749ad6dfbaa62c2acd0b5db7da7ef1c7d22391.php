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

/* /_includes/footer */
class __TwigTemplate_7a5466f3902ea190094135c48f337953a1380af242f163a8c1ff0e3e2597ea54 extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "/_includes/footer");
        // line 1
        $context["currentYear"] = craft\helpers\Template::attribute($this->env, $this->source, (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 1, $this->source); })()), "year", []);
        // line 2
        echo "
<footer class=\"footer\">
  <div class=\"container\">
    <div class=\"footer__top\">
      <div class=\"logo\">
        <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("/"), "html", null, true);
        echo "\"><img src=\"/images/logo-mavenshake.svg\" alt=\"MavenShake Logo\"></a>
      </div>

      <div class=\"backtotop\">
        Back to top <i class=\"icon icon-backtotop\" data-feather=\"chevrons-up\"></i>
      </div>
    </div>

    <div class=\"footer__middle\">
      <div class=\"footer__nav footer__nav--main\">
        ";
        // line 17
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 17, $this->source); })()), "olivemenus", []), "getMenuHTML", [0 => "footerNavigation"], "method"), "html", null, true);
        echo "
      </div>

      <div class=\"footer__nav footer__nav--legal\">
        ";
        // line 21
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 21, $this->source); })()), "olivemenus", []), "getMenuHTML", [0 => "legal"], "method"), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"footer__bottom\">
      <p class=\"footer__signoff\">&copy; ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new RuntimeError('Variable "currentYear" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " Maven Wellness, LLC. All rights reserved.</p>

      <div class=\"footer__social\">
        <a href=\"https://www.instagram.com/mavenshake/\" target=\"_blank\"><img src=\"/images/icons/icon-instagram.svg\" alt=\"Mavenshake on Instagram\"></a>
        <a href=\"https://www.facebook.com/Mavenshake/\" target=\"_blank\"><img src=\"/images/icons/icon-facebook.svg\" alt=\"Mavenshake on Facebook\"></a>
      </div>
    </div>
  </div>
</footer>";
        // line 0
        craft\helpers\Template::endProfile("template", "/_includes/footer");
    }

    public function getTemplateName()
    {
        return "/_includes/footer";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 0,  75 => 26,  67 => 21,  60 => 17,  47 => 7,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set currentYear = now.year %}

<footer class=\"footer\">
  <div class=\"container\">
    <div class=\"footer__top\">
      <div class=\"logo\">
        <a href=\"{{ url('/') }}\"><img src=\"/images/logo-mavenshake.svg\" alt=\"MavenShake Logo\"></a>
      </div>

      <div class=\"backtotop\">
        Back to top <i class=\"icon icon-backtotop\" data-feather=\"chevrons-up\"></i>
      </div>
    </div>

    <div class=\"footer__middle\">
      <div class=\"footer__nav footer__nav--main\">
        {{ craft.olivemenus.getMenuHTML('footerNavigation') }}
      </div>

      <div class=\"footer__nav footer__nav--legal\">
        {{ craft.olivemenus.getMenuHTML('legal') }}
      </div>
    </div>

    <div class=\"footer__bottom\">
      <p class=\"footer__signoff\">&copy; {{ currentYear }} Maven Wellness, LLC. All rights reserved.</p>

      <div class=\"footer__social\">
        <a href=\"https://www.instagram.com/mavenshake/\" target=\"_blank\"><img src=\"/images/icons/icon-instagram.svg\" alt=\"Mavenshake on Instagram\"></a>
        <a href=\"https://www.facebook.com/Mavenshake/\" target=\"_blank\"><img src=\"/images/icons/icon-facebook.svg\" alt=\"Mavenshake on Facebook\"></a>
      </div>
    </div>
  </div>
</footer>", "/_includes/footer", "/var/www/dev.mavenshake.com/templates/_includes/footer.twig");
    }
}
