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

/* _includes/defaulticon.svg */
class __TwigTemplate_0875c566cea8bf4193a1d705c56b65ef0b9d12f85668dd1171a66ce7e5f63661 extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "_includes/defaulticon.svg");
        // line 1
        echo "<svg version=\"1.1\" baseProfile=\"full\" width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
    <circle cx=\"10\" cy=\"10\" r=\"10\" fill=\"#000\" fill-opacity=\"0.35\"/>
    <text x=\"10\" y=\"15\" font-size=\"15\" font-family=\"sans-serif\" font-weight=\"bold\" text-anchor=\"middle\" fill=\"#000\">";
        // line 3
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_slice($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 3, $this->source); })()), 0, 1)), "html", null, true);
        echo "</text>
</svg>
";
        // line 0
        craft\helpers\Template::endProfile("template", "_includes/defaulticon.svg");
    }

    public function getTemplateName()
    {
        return "_includes/defaulticon.svg";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 0,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg version=\"1.1\" baseProfile=\"full\" width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
    <circle cx=\"10\" cy=\"10\" r=\"10\" fill=\"#000\" fill-opacity=\"0.35\"/>
    <text x=\"10\" y=\"15\" font-size=\"15\" font-family=\"sans-serif\" font-weight=\"bold\" text-anchor=\"middle\" fill=\"#000\">{{ label[0:1]|upper }}</text>
</svg>
", "_includes/defaulticon.svg", "/var/www/dev.mavenshake.com/vendor/craftcms/cms/src/templates/_includes/defaulticon.svg");
    }
}
