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

/* settings/general/_images/icon */
class __TwigTemplate_454fafcf2e2e031ce570af6ae536539d1ca18aa163664e4b09855b6baf71ff65 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'changeIconLabel' => [$this, 'block_changeIconLabel'],
            'deleteIconLabel' => [$this, 'block_deleteIconLabel'],
            'uploadIconLabel' => [$this, 'block_uploadIconLabel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "settings/general/_images/image";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("template", "settings/general/_images/icon");
        // line 3
        $context["imageType"] = "icon";
        // line 1
        $this->parent = $this->loadTemplate("settings/general/_images/image", "settings/general/_images/icon", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        // line 0
        craft\helpers\Template::endProfile("template", "settings/general/_images/icon");
    }

    // line 5
    public function block_changeIconLabel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "changeIconLabel");
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Change icon", "app"), "html", null, true);
        echo "
";
        // line 0
        craft\helpers\Template::endProfile("block", "changeIconLabel");
    }

    // line 9
    public function block_deleteIconLabel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "deleteIconLabel");
        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Delete icon", "app"), "html", null, true);
        echo "
";
        // line 0
        craft\helpers\Template::endProfile("block", "deleteIconLabel");
    }

    // line 13
    public function block_uploadIconLabel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "uploadIconLabel");
        // line 14
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Upload icon", "app"), "html", null, true);
        echo "
";
        // line 0
        craft\helpers\Template::endProfile("block", "uploadIconLabel");
    }

    public function getTemplateName()
    {
        return "settings/general/_images/icon";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 0,  91 => 14,  89 => 0,  85 => 13,  81 => 0,  76 => 10,  74 => 0,  70 => 9,  66 => 0,  61 => 6,  59 => 0,  55 => 5,  51 => 0,  48 => 1,  46 => 3,  44 => 0,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"settings/general/_images/image\" %}

{% set imageType = \"icon\" %}

{% block changeIconLabel %}
    {{ 'Change icon'|t('app') }}
{% endblock %}

{% block deleteIconLabel %}
    {{ 'Delete icon'|t('app') }}
{% endblock %}

{% block uploadIconLabel %}
    {{ 'Upload icon'|t('app') }}
{% endblock %}
", "settings/general/_images/icon", "/var/www/dev.mavenshake.com/vendor/craftcms/cms/src/templates/settings/general/_images/icon.html");
    }
}
