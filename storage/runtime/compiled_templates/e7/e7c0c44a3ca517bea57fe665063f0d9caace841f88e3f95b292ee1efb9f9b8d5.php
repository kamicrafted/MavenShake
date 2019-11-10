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

/* login */
class __TwigTemplate_8b85a5a5be7d52a87f97a62a1009378abc0019d0456efac01df6ab398e0b16db extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_layouts/basecp";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("template", "login");
        // line 2
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("_includes/forms", "login", 2)->unwrap();
        // line 3
        $context["title"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Login", "app");
        // line 4
        $context["bodyClass"] = "login";
        // line 5
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 5, $this->source); })()), "registerAssetBundle", [0 => "craft\\web\\assets\\login\\LoginAsset"], "method");
        // line 6
        craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 6, $this->source); })()), "registerTranslations", [0 => "app", 1 => [0 => "Reset Password", 1 => "Check your email for instructions to reset your password."]], "method");
        // line 11
        $context["username"] = ((craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 11, $this->source); })()), "app", []), "config", []), "general", []), "rememberUsernameDuration", [])) ? (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 11, $this->source); })()), "app", []), "user", []), "getRememberedUsername", [], "method")) : (""));
        // line 13
        if (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 13, $this->source); })()), "app", []), "config", []), "general", []), "useEmailAsUsername", [])) {
            // line 14
            $context["usernamePlaceholder"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Email", "app");
            // line 15
            $context["usernameType"] = "email";
        } else {
            // line 17
            $context["usernamePlaceholder"] = $this->extensions['craft\web\twig\Extension']->translateFilter("Username or Email", "app");
            // line 18
            $context["usernameType"] = "text";
        }
        // line 21
        $context["cpAssetUrl"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 21, $this->source); })()), "getAssetManager", [], "method"), "getPublishedUrl", [0 => "@app/web/assets/cp/dist", 1 => true], "method");
        // line 1
        $this->parent = $this->loadTemplate("_layouts/basecp", "login", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        // line 0
        craft\helpers\Template::endProfile("template", "login");
    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "body");
        // line 24
        echo "    <script type=\"text/javascript\">
        var cookieTest = 'CraftCookieTest='+Math.floor(Math.random() * 1000000);
        document.cookie = cookieTest;
        var cookiesEnabled = document.cookie.search(cookieTest) != -1;
        if (cookiesEnabled)
        {
            document.cookie = cookieTest + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';

            document.write(
                    '";
        // line 33
        $context["hasLogo"] = (((((isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new RuntimeError('Variable "CraftEdition" does not exist.', 33, $this->source); })()) == (isset($context["CraftPro"]) || array_key_exists("CraftPro", $context) ? $context["CraftPro"] : (function () { throw new RuntimeError('Variable "CraftPro" does not exist.', 33, $this->source); })())) && craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 33, $this->source); })()), "rebrand", []), "isLogoUploaded", []))) ? (true) : (false));
        echo "'+
                    '<form id=\"login-form\" method=\"post\" accept-charset=\"UTF-8\" ";
        // line 34
        if ((isset($context["hasLogo"]) || array_key_exists("hasLogo", $context) ? $context["hasLogo"] : (function () { throw new RuntimeError('Variable "hasLogo" does not exist.', 34, $this->source); })())) {
            // line 35
            $context["logo"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 35, $this->source); })()), "rebrand", []), "logo", []);
            // line 36
            $context["padding"] = (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 36, $this->source); })()), "height", []) + 30);
            // line 37
            echo "class=\"has-logo\" style=\"background-image: url(\\'";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 37, $this->source); })()), "url", []), "css"), "js"), "html", null, true);
            echo "\\'); background-size: ";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 37, $this->source); })()), "width", []), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 37, $this->source); })()), "height", []), "html", null, true);
            echo "px; padding-top: ";
            echo twig_escape_filter($this->env, (isset($context["padding"]) || array_key_exists("padding", $context) ? $context["padding"] : (function () { throw new RuntimeError('Variable "padding" does not exist.', 37, $this->source); })()), "html", null, true);
            echo "px; margin-top: -";
            echo twig_escape_filter($this->env, twig_round(((353 + (isset($context["padding"]) || array_key_exists("padding", $context) ? $context["padding"] : (function () { throw new RuntimeError('Variable "padding" does not exist.', 37, $this->source); })())) / 2)), "html", null, true);
            echo "px\"";
        }
        // line 38
        echo ">' +
            '";
        // line 39
        if ( !(isset($context["hasLogo"]) || array_key_exists("hasLogo", $context) ? $context["hasLogo"] : (function () { throw new RuntimeError('Variable "hasLogo" does not exist.', 39, $this->source); })())) {
            echo "<h1>";
            echo twig_escape_filter($this->env, (isset($context["systemName"]) || array_key_exists("systemName", $context) ? $context["systemName"] : (function () { throw new RuntimeError('Variable "systemName" does not exist.', 39, $this->source); })()), "html", null, true);
            echo "</h1>";
        }
        echo "'+
            \"";
        // line 40
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_call_macro($macros["forms"], "macro_textField", [["id" => "loginName", "name" => "username", "placeholder" => (isset($context["usernamePlaceholder"]) || array_key_exists("usernamePlaceholder", $context) ? $context["usernamePlaceholder"] : (function () { throw new RuntimeError('Variable "usernamePlaceholder" does not exist.', 40, $this->source); })()), "value" => (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 40, $this->source); })()), "autocomplete" => "username", "type" => (isset($context["usernameType"]) || array_key_exists("usernameType", $context) ? $context["usernameType"] : (function () { throw new RuntimeError('Variable "usernameType" does not exist.', 40, $this->source); })())]], 40, $context, $this->getSourceContext()), "js"), "html", null, true);
        echo "\" +

            '<div id=\"login-fields\" class=\"nested-fields\">' +
            \"";
        // line 43
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_call_macro($macros["forms"], "macro_passwordField", [["id" => "password", "name" => "password", "placeholder" => $this->extensions['craft\web\twig\Extension']->translateFilter("Password", "app"), "autocomplete" => "current-password"]], 43, $context, $this->getSourceContext()), "js"), "html", null, true);
        echo "\" +
            '<a id=\"forgot-password\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Forgot your password?", "app"), "html", null, true);
        echo "</a>' +
            ";
        // line 45
        if (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 45, $this->source); })()), "app", []), "config", []), "general", []), "rememberedUserSessionDuration", [])) {
            // line 46
            echo "            '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_call_macro($macros["forms"], "macro_checkboxField", [["id" => "rememberMe", "label" => $this->extensions['craft\web\twig\Extension']->translateFilter("Keep me logged in", "app")]], 46, $context, $this->getSourceContext()), "js"), "html", null, true);
            echo "' +
            ";
        }
        // line 48
        echo "            '</div>' +

            '<div class=\"buttons\">' +
            '";
        // line 51
        echo "' +
            '<input id=\"submit\" class=\"btn submit disabled\" type=\"submit\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Login", "app"), "html", null, true);
        echo "\">' +
            '<div id=\"spinner\" class=\"spinner hidden\"></div>' +
            '</div>' +
            '<a id=\"poweredby\" href=\"http://craftcms.com/\" title=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Powered by Craft CMS", "app"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["cpAssetUrl"]) || array_key_exists("cpAssetUrl", $context) ? $context["cpAssetUrl"] : (function () { throw new RuntimeError('Variable "cpAssetUrl" does not exist.', 55, $this->source); })()), "html", null, true);
        echo "/images/craftcms.svg\" /></a>'+
            '</form>'
        );

            ";
        // line 59
        if ( !craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 59, $this->source); })()), "app", []), "request", []), "isMobileBrowser", [0 => true], "method")) {
            // line 60
            echo "            document.getElementById(\"";
            echo (((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 60, $this->source); })())) ? ("password") : ("loginName"));
            echo "\").focus();
            ";
        }
        // line 62
        echo "        }
        else
        {
            document.write(
                '<div class=\"message-container no-access\">' +
                    '<div class=\"pane notice\">' +
                        '<p>";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Cookies must be enabled to access the Craft CMS Control Panel.", "app"), "html", null, true);
        echo "</p>' +
                    '</div>' +
                '</div>'
            );
        }
    </script>
";
        // line 0
        craft\helpers\Template::endProfile("block", "body");
    }

    public function getTemplateName()
    {
        return "login";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 0,  189 => 68,  181 => 62,  175 => 60,  173 => 59,  164 => 55,  158 => 52,  155 => 51,  150 => 48,  144 => 46,  142 => 45,  138 => 44,  134 => 43,  128 => 40,  120 => 39,  117 => 38,  104 => 37,  102 => 36,  100 => 35,  98 => 34,  94 => 33,  83 => 24,  81 => 0,  77 => 23,  73 => 0,  70 => 1,  68 => 21,  65 => 18,  63 => 17,  60 => 15,  58 => 14,  56 => 13,  54 => 11,  52 => 6,  50 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 0,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"_layouts/basecp\" %}
{% import \"_includes/forms\" as forms %}
{% set title = \"Login\"|t('app') %}
{% set bodyClass = 'login' %}
{% do view.registerAssetBundle(\"craft\\\\web\\\\assets\\\\login\\\\LoginAsset\") %}
{% do view.registerTranslations('app', [
    \"Reset Password\",
    \"Check your email for instructions to reset your password.\",
]) %}

{% set username = (craft.app.config.general.rememberUsernameDuration ? craft.app.user.getRememberedUsername(): '') %}

{% if craft.app.config.general.useEmailAsUsername %}
    {% set usernamePlaceholder = 'Email'|t('app') %}
    {% set usernameType = 'email' %}
{% else %}
    {% set usernamePlaceholder = 'Username or Email'|t('app') %}
    {% set usernameType = 'text' %}
{% endif %}

{% set cpAssetUrl = view.getAssetManager().getPublishedUrl('@app/web/assets/cp/dist', true) %}

{% block body %}
    <script type=\"text/javascript\">
        var cookieTest = 'CraftCookieTest='+Math.floor(Math.random() * 1000000);
        document.cookie = cookieTest;
        var cookiesEnabled = document.cookie.search(cookieTest) != -1;
        if (cookiesEnabled)
        {
            document.cookie = cookieTest + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';

            document.write(
                    '{%- set hasLogo = (CraftEdition == CraftPro and craft.rebrand.isLogoUploaded ? true : false) -%}'+
                    '<form id=\"login-form\" method=\"post\" accept-charset=\"UTF-8\" {% if hasLogo -%}
            {%- set logo = craft.rebrand.logo -%}
            {%- set padding = logo.height + 30 -%}
        class=\"has-logo\" style=\"background-image: url(\\'{{ logo.url|e('css')|e('js') }}\\'); background-size: {{ logo.width }}px {{ logo.height }}px; padding-top: {{ padding }}px; margin-top: -{{ ((353+padding)/2)|round }}px\"
                {%- endif %}>' +
            '{% if not hasLogo -%}<h1>{{ systemName }}</h1>{%- endif %}'+
            \"{{ forms.textField({ id: 'loginName', name: 'username', placeholder: usernamePlaceholder, value: username, autocomplete: 'username', type: usernameType })|e('js') }}\" +

            '<div id=\"login-fields\" class=\"nested-fields\">' +
            \"{{ forms.passwordField({ id: 'password', name: 'password', placeholder: 'Password'|t('app'), autocomplete: 'current-password' })|e('js') }}\" +
            '<a id=\"forgot-password\">{{ \"Forgot your password?\"|t('app') }}</a>' +
            {% if craft.app.config.general.rememberedUserSessionDuration %}
            '{{ forms.checkboxField({ id: \"rememberMe\", label: \"Keep me logged in\"|t('app') })|e(\"js\") }}' +
            {% endif %}
            '</div>' +

            '<div class=\"buttons\">' +
            '{# <div id=\"ssl-icon\" class=\"disabled\"><div class=\"{{ craft.app.request.getIsSecureConnection() ? \"secure\" : \"insecure\" }} icon\"></div></div>#}' +
            '<input id=\"submit\" class=\"btn submit disabled\" type=\"submit\" value=\"{{ \"Login\"|t('app') }}\">' +
            '<div id=\"spinner\" class=\"spinner hidden\"></div>' +
            '</div>' +
            '<a id=\"poweredby\" href=\"http://craftcms.com/\" title=\"{{ \"Powered by Craft CMS\"|t('app') }}\"><img src=\"{{ cpAssetUrl }}/images/craftcms.svg\" /></a>'+
            '</form>'
        );

            {% if not craft.app.request.isMobileBrowser(true) %}
            document.getElementById(\"{{ (username ? 'password' : 'loginName') }}\").focus();
            {% endif %}
        }
        else
        {
            document.write(
                '<div class=\"message-container no-access\">' +
                    '<div class=\"pane notice\">' +
                        '<p>{{ \"Cookies must be enabled to access the Craft CMS Control Panel.\"|t('app') }}</p>' +
                    '</div>' +
                '</div>'
            );
        }
    </script>
{% endblock %}
", "login", "/var/www/dev.mavenshake.com/vendor/craftcms/cms/src/templates/login.html");
    }
}
