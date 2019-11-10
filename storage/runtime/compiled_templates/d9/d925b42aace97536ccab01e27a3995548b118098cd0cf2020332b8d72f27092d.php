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

/* settings/general/_images/logo */
class __TwigTemplate_8ce582091e02ec40ab800833c3846654d437025e707c78e5ad3be7d173db4f9b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'changeLogoLabel' => [$this, 'block_changeLogoLabel'],
            'deleteLogoLabel' => [$this, 'block_deleteLogoLabel'],
            'uploadLogoLabel' => [$this, 'block_uploadLogoLabel'],
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
        craft\helpers\Template::beginProfile("template", "settings/general/_images/logo");
        // line 3
        $context["imageType"] = "logo";
        // line 1
        $this->parent = $this->loadTemplate("settings/general/_images/image", "settings/general/_images/logo", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        // line 0
        craft\helpers\Template::endProfile("template", "settings/general/_images/logo");
    }

    // line 5
    public function block_changeLogoLabel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "changeLogoLabel");
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Change logo", "app"), "html", null, true);
        echo "
";
        // line 0
        craft\helpers\Template::endProfile("block", "changeLogoLabel");
    }

    // line 9
    public function block_deleteLogoLabel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "deleteLogoLabel");
        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Delete logo", "app"), "html", null, true);
        echo "
";
        // line 0
        craft\helpers\Template::endProfile("block", "deleteLogoLabel");
    }

    // line 13
    public function block_uploadLogoLabel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "uploadLogoLabel");
        // line 14
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Upload logo", "app"), "html", null, true);
        echo "
";
        // line 0
        craft\helpers\Template::endProfile("block", "uploadLogoLabel");
    }

    public function getTemplateName()
    {
        return "settings/general/_images/logo";
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

{% set imageType = \"logo\" %}

{% block changeLogoLabel %}
    {{ 'Change logo'|t('app') }}
{% endblock %}

{% block deleteLogoLabel %}
    {{ 'Delete logo'|t('app') }}
{% endblock %}

{% block uploadLogoLabel %}
    {{ 'Upload logo'|t('app') }}
{% endblock %}
", "settings/general/_images/logo", "/var/www/dev.mavenshake.com/vendor/craftcms/cms/src/templates/settings/general/_images/logo.html");
    }
}
