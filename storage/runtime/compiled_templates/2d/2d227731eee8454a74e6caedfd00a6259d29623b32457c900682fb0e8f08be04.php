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

/* settings/general/_images/image */
class __TwigTemplate_88e5288a37c800c5bcf2102c01e462b286f6a05d2af8f864d999c23e7e9bfcaf extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "settings/general/_images/image");
        // line 1
        if (\Craft::$app->getEdition() < (isset($context["CraftPro"]) || array_key_exists("CraftPro", $context) ? $context["CraftPro"] : (function () { throw new RuntimeError('Variable "CraftPro" does not exist.', 1, $this->source); })()))
        {
            throw new yii\web\NotFoundHttpException;
        }
        // line 2
        echo "
<div class=\"cp-image-";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["imageType"]) || array_key_exists("imageType", $context) ? $context["imageType"] : (function () { throw new RuntimeError('Variable "imageType" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\" data-type=\"";
        echo twig_escape_filter($this->env, (isset($context["imageType"]) || array_key_exists("imageType", $context) ? $context["imageType"] : (function () { throw new RuntimeError('Variable "imageType" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\">
    <div class=\"cp-current-image\"
        ";
        // line 5
        if (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 5, $this->source); })()), "rebrand", []), "isImageUploaded", [0 => (isset($context["imageType"]) || array_key_exists("imageType", $context) ? $context["imageType"] : (function () { throw new RuntimeError('Variable "imageType" does not exist.', 5, $this->source); })())], "method")) {
            // line 6
            $context["image"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 6, $this->source); })()), "rebrand", []), "getImageVariable", [0 => (isset($context["imageType"]) || array_key_exists("imageType", $context) ? $context["imageType"] : (function () { throw new RuntimeError('Variable "imageType" does not exist.', 6, $this->source); })())], "method");
            // line 7
            echo "            ";
            if (((craft\helpers\Template::attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 7, $this->source); })()), "width", []) > 0) && (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 7, $this->source); })()), "height", []) > 0))) {
                // line 8
                echo "                 style=\"background-image: url('";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 8, $this->source); })()), "url", []), "css"), "html", null, true);
                echo "'); width: ";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 8, $this->source); })()), "width", []), "html", null, true);
                echo "px; height: ";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 8, $this->source); })()), "height", []), "html", null, true);
                echo "px;\"
                 data-url=\"";
                // line 9
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 9, $this->source); })()), "url", []), "html", null, true);
                echo "\"
             ";
            }
        }
        // line 11
        echo ">
    </div>

    <div class=\"cp-image-controls\">
        <input type=\"file\" name=\"image\" class=\"hidden\" />
        ";
        // line 16
        if (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 16, $this->source); })()), "rebrand", []), "isImageUploaded", [0 => (isset($context["imageType"]) || array_key_exists("imageType", $context) ? $context["imageType"] : (function () { throw new RuntimeError('Variable "imageType" does not exist.', 16, $this->source); })())], "method")) {
            // line 17
            echo "            <div class=\"btn upload\">";
            if (((isset($context["imageType"]) || array_key_exists("imageType", $context) ? $context["imageType"] : (function () { throw new RuntimeError('Variable "imageType" does not exist.', 17, $this->source); })()) == "logo")) {
                $this->displayBlock("changeLogoLabel", $context, $blocks);
            } else {
                $this->displayBlock("changeIconLabel", $context, $blocks);
            }
            echo "</div>
            <div class=\"btn delete\">";
            // line 18
            if (((isset($context["imageType"]) || array_key_exists("imageType", $context) ? $context["imageType"] : (function () { throw new RuntimeError('Variable "imageType" does not exist.', 18, $this->source); })()) == "logo")) {
                $this->displayBlock("deleteLogoLabel", $context, $blocks);
            } else {
                $this->displayBlock("deleteIconLabel", $context, $blocks);
            }
            echo "</div>
        ";
        } else {
            // line 20
            echo "            <div class=\"btn upload\">";
            if (((isset($context["imageType"]) || array_key_exists("imageType", $context) ? $context["imageType"] : (function () { throw new RuntimeError('Variable "imageType" does not exist.', 20, $this->source); })()) == "logo")) {
                $this->displayBlock("uploadLogoLabel", $context, $blocks);
            } else {
                $this->displayBlock("uploadIconLabel", $context, $blocks);
            }
            echo "</div>
        ";
        }
        // line 22
        echo "    </div>
</div>
";
        // line 0
        craft\helpers\Template::endProfile("template", "settings/general/_images/image");
    }

    public function getTemplateName()
    {
        return "settings/general/_images/image";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 0,  112 => 22,  102 => 20,  93 => 18,  84 => 17,  82 => 16,  75 => 11,  69 => 9,  60 => 8,  57 => 7,  55 => 6,  53 => 5,  46 => 3,  43 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% requireEdition CraftPro %}

<div class=\"cp-image-{{ imageType }}\" data-type=\"{{ imageType }}\">
    <div class=\"cp-current-image\"
        {% if craft.rebrand.isImageUploaded(imageType) -%}
            {% set image = craft.rebrand.getImageVariable(imageType) %}
            {% if image.width > 0 and image.height > 0 %}
                 style=\"background-image: url('{{ image.url|e('css') }}'); width: {{ image.width }}px; height: {{ image.height }}px;\"
                 data-url=\"{{ image.url }}\"
             {% endif %}
        {%- endif %}>
    </div>

    <div class=\"cp-image-controls\">
        <input type=\"file\" name=\"image\" class=\"hidden\" />
        {% if craft.rebrand.isImageUploaded(imageType) %}
            <div class=\"btn upload\">{% if imageType == 'logo' %}{{ block('changeLogoLabel') }}{% else %}{{ block('changeIconLabel') }}{% endif %}</div>
            <div class=\"btn delete\">{% if imageType == 'logo' %}{{ block('deleteLogoLabel') }}{% else %}{{ block('deleteIconLabel') }}{% endif %}</div>
        {% else %}
            <div class=\"btn upload\">{% if imageType == 'logo' %}{{ block('uploadLogoLabel') }}{% else %}{{ block('uploadIconLabel') }}{% endif %}</div>
        {% endif %}
    </div>
</div>
", "settings/general/_images/image", "/var/www/dev.mavenshake.com/vendor/craftcms/cms/src/templates/settings/general/_images/image.html");
    }
}
