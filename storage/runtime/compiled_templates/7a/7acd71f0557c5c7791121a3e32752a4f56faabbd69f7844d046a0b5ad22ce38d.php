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
class __TwigTemplate_9dec4b960e40d98db6d730294b8dcbbdea7e674e8886cdd9145920061e421422 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
            'foot' => [$this, 'block_foot'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "_layouts/base");
        // line 1
        $context["systemName"] = $this->extensions['craft\web\twig\Extension']->translateFilter(craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 1, $this->source); })()), "app", []), "getSystemName", [], "method"), "site");
        // line 2
        $context["docTitle"] = (((isset($context["docTitle"]) || array_key_exists("docTitle", $context))) ? ((isset($context["docTitle"]) || array_key_exists("docTitle", $context) ? $context["docTitle"] : (function () { throw new RuntimeError('Variable "docTitle" does not exist.', 2, $this->source); })())) : (strip_tags((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 2, $this->source); })()))));
        // line 3
        $context["bodyClass"] = ((((isset($context["bodyClass"]) || array_key_exists("bodyClass", $context))) ? (((isset($context["bodyClass"]) || array_key_exists("bodyClass", $context) ? $context["bodyClass"] : (function () { throw new RuntimeError('Variable "bodyClass" does not exist.', 3, $this->source); })()) . " ")) : ("")) . craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 3, $this->source); })()), "app", []), "locale", []), "getOrientation", [], "method"));
        // line 5
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 5, $this->source); })()), "registerAssetBundle", [0 => "craft\\web\\assets\\cp\\CpAsset"], "method");
        // line 6
        $context["cpAssetUrl"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 6, $this->source); })()), "getAssetManager", [], "method"), "getPublishedUrl", [0 => "@app/web/assets/cp/dist", 1 => true], "method");
        // line 8
        echo \Craft::$app->getView()->invokeHook("cp.layouts.base", $context);

        // line 10
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"";
        // line 11
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 11, $this->source); })()), "app", []), "language", []), "html", null, true);
        echo "\">
<head>
    ";
        // line 13
        $this->displayBlock('head', $context, $blocks);
        // line 32
        echo "</head>
<body class=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["bodyClass"]) || array_key_exists("bodyClass", $context) ? $context["bodyClass"] : (function () { throw new RuntimeError('Variable "bodyClass" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 34
        call_user_func_array($this->env->getFunction('beginBody')->getCallable(), []);
        echo "
    ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "    ";
        $this->displayBlock('foot', $context, $blocks);
        // line 37
        echo "    ";
        call_user_func_array($this->env->getFunction('endBody')->getCallable(), []);
        echo "
</body>
</html>
";
        // line 0
        craft\helpers\Template::endProfile("template", "_layouts/base");
    }

    // line 13
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "head");
        // line 14
        echo "    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"utf-8\">
    <title>";
        // line 16
        echo twig_escape_filter($this->env, (((isset($context["docTitle"]) || array_key_exists("docTitle", $context) ? $context["docTitle"] : (function () { throw new RuntimeError('Variable "docTitle" does not exist.', 16, $this->source); })()) . (((twig_length_filter($this->env, (isset($context["docTitle"]) || array_key_exists("docTitle", $context) ? $context["docTitle"] : (function () { throw new RuntimeError('Variable "docTitle" does not exist.', 16, $this->source); })())) && twig_length_filter($this->env, (isset($context["systemName"]) || array_key_exists("systemName", $context) ? $context["systemName"] : (function () { throw new RuntimeError('Variable "systemName" does not exist.', 16, $this->source); })())))) ? (" - ") : (""))) . (isset($context["systemName"]) || array_key_exists("systemName", $context) ? $context["systemName"] : (function () { throw new RuntimeError('Variable "systemName" does not exist.', 16, $this->source); })())), "html", null, true);
        echo "</title>
    ";
        // line 17
        call_user_func_array($this->env->getFunction('head')->getCallable(), []);
        echo "
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <meta name=\"referrer\" content=\"origin-when-cross-origin\">

    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["cpAssetUrl"]) || array_key_exists("cpAssetUrl", $context) ? $context["cpAssetUrl"] : (function () { throw new RuntimeError('Variable "cpAssetUrl" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "/images/touch-icons/ipad_1x.png\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["cpAssetUrl"]) || array_key_exists("cpAssetUrl", $context) ? $context["cpAssetUrl"] : (function () { throw new RuntimeError('Variable "cpAssetUrl" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "/images/touch-icons/iphone_2x.png\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["cpAssetUrl"]) || array_key_exists("cpAssetUrl", $context) ? $context["cpAssetUrl"] : (function () { throw new RuntimeError('Variable "cpAssetUrl" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "/images/touch-icons/ipad_2x.png\">
    <link rel=\"apple-touch-icon\" sizes=\"167x167\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["cpAssetUrl"]) || array_key_exists("cpAssetUrl", $context) ? $context["cpAssetUrl"] : (function () { throw new RuntimeError('Variable "cpAssetUrl" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "/images/touch-icons/ipad-pro_2x.png\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["cpAssetUrl"]) || array_key_exists("cpAssetUrl", $context) ? $context["cpAssetUrl"] : (function () { throw new RuntimeError('Variable "cpAssetUrl" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "/images/touch-icons/iphone_3x.png\">

    <script type=\"text/javascript\">
        // Fix for Firefox autofocus CSS bug
        // See: http://stackoverflow.com/questions/18943276/html-5-autofocus-messes-up-css-loading/18945951#18945951
    </script>
    ";
        // line 0
        craft\helpers\Template::endProfile("block", "head");
    }

    // line 35
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "body");
        craft\helpers\Template::endProfile("block", "body");
    }

    // line 36
    public function block_foot($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "foot");
        craft\helpers\Template::endProfile("block", "foot");
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
        return array (  154 => 0,  150 => 36,  145 => 0,  141 => 35,  137 => 0,  128 => 25,  124 => 24,  120 => 23,  116 => 22,  112 => 21,  105 => 17,  101 => 16,  97 => 14,  95 => 0,  91 => 13,  87 => 0,  80 => 37,  77 => 36,  75 => 35,  71 => 34,  67 => 33,  64 => 32,  62 => 13,  57 => 11,  54 => 10,  51 => 8,  49 => 6,  47 => 5,  45 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set systemName = craft.app.getSystemName()|t('site') -%}
{% set docTitle = docTitle is defined ? docTitle : title|striptags -%}
{% set bodyClass = (bodyClass is defined ? bodyClass~' ' : '') ~ craft.app.locale.getOrientation() -%}

{% do view.registerAssetBundle('craft\\\\web\\\\assets\\\\cp\\\\CpAsset') -%}
{% set cpAssetUrl = view.getAssetManager().getPublishedUrl('@app/web/assets/cp/dist', true) -%}

{% hook \"cp.layouts.base\" -%}

<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"{{ craft.app.language }}\">
<head>
    {% block head %}
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"utf-8\">
    <title>{{ docTitle ~ (docTitle|length and systemName|length ? ' - ') ~ systemName }}</title>
    {{ head() }}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <meta name=\"referrer\" content=\"origin-when-cross-origin\">

    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ cpAssetUrl }}/images/touch-icons/ipad_1x.png\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"{{ cpAssetUrl }}/images/touch-icons/iphone_2x.png\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"{{ cpAssetUrl }}/images/touch-icons/ipad_2x.png\">
    <link rel=\"apple-touch-icon\" sizes=\"167x167\" href=\"{{ cpAssetUrl }}/images/touch-icons/ipad-pro_2x.png\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ cpAssetUrl }}/images/touch-icons/iphone_3x.png\">

    <script type=\"text/javascript\">
        // Fix for Firefox autofocus CSS bug
        // See: http://stackoverflow.com/questions/18943276/html-5-autofocus-messes-up-css-loading/18945951#18945951
    </script>
    {% endblock %}
</head>
<body class=\"{{ bodyClass }}\">
    {{ beginBody() }}
    {% block body %}{% endblock %}
    {% block foot %}{% endblock %}
    {{ endBody() }}
</body>
</html>
", "_layouts/base", "/var/www/dev.mavenshake.com/vendor/craftcms/cms/src/templates/_layouts/base.html");
    }
}
