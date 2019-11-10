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

/* __string_template__d570499beabb80984ed132fa05883f56ef8620348841046e631913dbac66fa5d */
class __TwigTemplate_e47e4f064b58d7e239c805ac1ae7e2f6132c1da6bc6e6ecee98af5508ac38dc1 extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "__string_template__d570499beabb80984ed132fa05883f56ef8620348841046e631913dbac66fa5d");
        // line 1
        echo craft\helpers\Template::attribute($this->env, $this->source, (((craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "product", [], "any", true, true) &&  !(null === craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "product", [])))) ? (craft\helpers\Template::attribute($this->env, $this->source, ($context["_variables"] ?? null), "product", [])) : (craft\helpers\Template::attribute($this->env, $this->source, ($context["object"] ?? null), "product", []))), "title", []);
        // line 0
        craft\helpers\Template::endProfile("template", "__string_template__d570499beabb80984ed132fa05883f56ef8620348841046e631913dbac66fa5d");
    }

    public function getTemplateName()
    {
        return "__string_template__d570499beabb80984ed132fa05883f56ef8620348841046e631913dbac66fa5d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 0,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ (_variables.product ?? object.product).title|raw }}", "__string_template__d570499beabb80984ed132fa05883f56ef8620348841046e631913dbac66fa5d", "");
    }
}
