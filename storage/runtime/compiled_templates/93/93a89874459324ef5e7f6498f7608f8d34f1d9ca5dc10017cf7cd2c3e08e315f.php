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
class __TwigTemplate_fe6474a2662819ec57970123c41bebad33ae767c9b63a21bbabdfb8b6ff6a14b extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "index");
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta charset=\"utf-8\" />
    <title>Welcome to Craft CMS</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover\" />
    <meta name=\"referrer\" content=\"origin-when-cross-origin\" />
    <style>
        html,
        body {
            font-size: 16px;
            -webkit-text-size-adjust: 100%;
            height: 100%;
            font-family: system-ui, BlinkMacSystemFont, -apple-system, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: hsl(212, 10%, 93%);
            color: hsl(212, 20%, 20%);
            display: flex;
        }

        h1 {
            margin-top: 0;
        }

        h2 {
            margin-top: 24px;
            font-size: 1em;
        }

        h2:first-child {
            margin-top: 0;
        }

        p {
            line-height: 1.4em;
            margin-bottom: 1.4em;
        }

        ul {
            line-height: 1.3em;
            padding-left: 20px;
            margin-bottom: 0;
        }

        ul li {
            margin-bottom: 0.35em;
        }

        a {
            color: #0d78f2;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .go {
            color: #0d78f2;
        }

        .go:after {
            padding-left: 4px;
            content: '→';
            text-decoration: none !important;
        }

        small {
            color: #777;
        }

        code {
            display: inline-block;
            color: #da513d;
            padding: 0 2px;
            background: hsl(212, 10%, 96%);
            border-radius: 3px;
            line-height: 1.3;
            font-family: \"SFMono-Regular\", Consolas, \"Liberation Mono\", Menlo, Courier, monospace;
            font-size: 0.9em;
        }

        #container {
            flex-grow: 1;
        }

        #modal {
            background: #fff;
        }

        #aside {
            background: hsl(212, 10%, 93%);
        }

        .content {
            padding: 35px;
            padding-left: calc(35px + env(safe-area-inset-left));
            padding-right: calc(35px + env(safe-area-inset-right));
        }

        @media (min-width:480px) {
            body {
                background-image: url(\"";
        // line 108
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 108, $this->source); })()), "getAssetManager", [], "method"), "getPublishedUrl", [0 => "@app/web/assets/installer/dist", 1 => true, 2 => "images/install-bg-1920.png"], "method"), "html", null, true);
        echo "\");
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
            }

            #container {
                display: flex;
                align-items: normal;
                justify-content: normal;
            }
        }

        @media (min-width:480px) and (min-height: 376px) {
            #container {
                padding: 24px;
                align-items: center;
                justify-content: center;
            }

            #modal {
                height: 100%;
                max-width: 770px;
                max-height: 510px;
                border-radius: 4px;
                overflow: auto;
                box-shadow: 0 25px 100px rgba(0, 0, 0, 0.5);
            }

            #aside {
                background: #f9f9f9;
                overflow: auto;
            }
        }

        @media (min-width:768px) {
            #modal {
                display: flex;
            }

            #main {
                width: 50%;
                overflow: auto;
            }

            #aside {
                width: 50%;
                overflow: auto;
            }
        }

        @media only screen and (min-width: 1921px) {
            body {
                background-image: url(\"";
        // line 161
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 161, $this->source); })()), "getAssetManager", [], "method"), "getPublishedUrl", [0 => "@app/web/assets/installer/dist", 1 => true, 2 => "images/install-bg-5120.png"], "method"), "html", null, true);
        echo "\");
            }
        }

        @media only screen and (-webkit-min-device-pixel-ratio: 1.5) and (min-width: 961px),
        only screen and (-moz-min-device-pixel-ratio: 1.5) and (min-width: 961px),
        only screen and (-o-min-device-pixel-ratio: 3/2) and (min-width: 961px),
        only screen and (min-device-pixel-ratio: 1.5) and (min-width: 961px),
        only screen and (min-resolution: 1.5dppx) and (min-width: 961px) {
            body {
                background-image: url(\"";
        // line 171
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 171, $this->source); })()), "getAssetManager", [], "method"), "getPublishedUrl", [0 => "@app/web/assets/installer/dist", 1 => true, 2 => "images/install-bg-5120.png"], "method"), "html", null, true);
        echo "\");
            }
        }
    </style>
";
        // line 175
        call_user_func_array($this->env->getFunction('head')->getCallable(), []);
        echo "</head>
<body class=\"ltr\">";
        // line 176
        call_user_func_array($this->env->getFunction('beginBody')->getCallable(), []);
        echo "
<div id=\"container\">
    <div id=\"modal\">
        <div id=\"main\">
            <div class=\"content\">
                <h1>Welcome</h1>
                <p>Thanks for installing Craft CMS!</p>
                <p>You’re looking at the <code>index.html</code> template file located in your
                    <code>templates/</code> folder. Once you’re ready to start building out your site’s
                    front end, you can replace this with something custom.</p>
                <p>If you’re new to Craft CMS, take some time to check out the resources on the right
                    when you get a chance&mdash;especially
                    <a href=\"https://craftcms.com/discord\" target=\"_blank\">Discord</a>
                    and <a href=\"http://craftcms.stackexchange.com/\" target=\"_blank\">Stack Exchange</a>.
                    The Craft community is full of smart, friendly, and helpful people!</p>
                <p><span class=\"go\"><a href=\"";
        // line 191
        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::cpUrl(""), "html", null, true);
        echo "\">Go to your Control Panel</a></span></p>
            </div>
        </div>
        <div id=\"aside\">
            <div class=\"content\">
                <h2>Popular Resources</h2>
                <ul>
                    <li><a href=\"http://docs.craftcms.com/v3/\" target=\"_blank\">Documentation</a><br><small>Read the official docs.</small></li>
                    <li><a href=\"https://craftcms.com/guides\" target=\"_blank\">Guides</a><br><small>Follow along with the official guides.</small></li>
                    <li><a href=\"https://twitter.com/hashtag/craftcms\" target=\"_blank\">#craftcms</a><br><small>See the latest tweets about Craft.</small></li>
                    <li><a href=\"https://craftcms.com/discord\" target=\"_blank\">Discord</a><br><small>Meet the community.</small></li>
                    <li><a href=\"http://craftcms.stackexchange.com/\" target=\"_blank\">Stack Exchange</a><br><small>Get help and help others.</small></li>
                    <li><a href=\"https://craftquest.io/\" target=\"_blank\">CraftQuest</a><br><small>Watch unlimited video lessons and courses.</small></li>
                    <li><a href=\"http://craftlinklist.com/\" target=\"_blank\">Craft Link List</a><br><small>Stay in-the-know.</small></li>
                    <li><a href=\"https://nystudio107.com/blog\" target=\"_blank\">nystudio107 Blog</a><br><small>Learn Craft and modern web development.</small></li>
                </ul>
            </div>
        </div>
    </div>
</div>
";
        // line 211
        call_user_func_array($this->env->getFunction('endBody')->getCallable(), []);
        echo "</body>
</html>
";
        // line 0
        craft\helpers\Template::endProfile("template", "index");
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
        return array (  273 => 0,  268 => 211,  245 => 191,  227 => 176,  223 => 175,  216 => 171,  203 => 161,  147 => 108,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta charset=\"utf-8\" />
    <title>Welcome to Craft CMS</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover\" />
    <meta name=\"referrer\" content=\"origin-when-cross-origin\" />
    <style>
        html,
        body {
            font-size: 16px;
            -webkit-text-size-adjust: 100%;
            height: 100%;
            font-family: system-ui, BlinkMacSystemFont, -apple-system, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: hsl(212, 10%, 93%);
            color: hsl(212, 20%, 20%);
            display: flex;
        }

        h1 {
            margin-top: 0;
        }

        h2 {
            margin-top: 24px;
            font-size: 1em;
        }

        h2:first-child {
            margin-top: 0;
        }

        p {
            line-height: 1.4em;
            margin-bottom: 1.4em;
        }

        ul {
            line-height: 1.3em;
            padding-left: 20px;
            margin-bottom: 0;
        }

        ul li {
            margin-bottom: 0.35em;
        }

        a {
            color: #0d78f2;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .go {
            color: #0d78f2;
        }

        .go:after {
            padding-left: 4px;
            content: '→';
            text-decoration: none !important;
        }

        small {
            color: #777;
        }

        code {
            display: inline-block;
            color: #da513d;
            padding: 0 2px;
            background: hsl(212, 10%, 96%);
            border-radius: 3px;
            line-height: 1.3;
            font-family: \"SFMono-Regular\", Consolas, \"Liberation Mono\", Menlo, Courier, monospace;
            font-size: 0.9em;
        }

        #container {
            flex-grow: 1;
        }

        #modal {
            background: #fff;
        }

        #aside {
            background: hsl(212, 10%, 93%);
        }

        .content {
            padding: 35px;
            padding-left: calc(35px + env(safe-area-inset-left));
            padding-right: calc(35px + env(safe-area-inset-right));
        }

        @media (min-width:480px) {
            body {
                background-image: url(\"{{ view.getAssetManager().getPublishedUrl('@app/web/assets/installer/dist', true, 'images/install-bg-1920.png') }}\");
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
            }

            #container {
                display: flex;
                align-items: normal;
                justify-content: normal;
            }
        }

        @media (min-width:480px) and (min-height: 376px) {
            #container {
                padding: 24px;
                align-items: center;
                justify-content: center;
            }

            #modal {
                height: 100%;
                max-width: 770px;
                max-height: 510px;
                border-radius: 4px;
                overflow: auto;
                box-shadow: 0 25px 100px rgba(0, 0, 0, 0.5);
            }

            #aside {
                background: #f9f9f9;
                overflow: auto;
            }
        }

        @media (min-width:768px) {
            #modal {
                display: flex;
            }

            #main {
                width: 50%;
                overflow: auto;
            }

            #aside {
                width: 50%;
                overflow: auto;
            }
        }

        @media only screen and (min-width: 1921px) {
            body {
                background-image: url(\"{{ view.getAssetManager().getPublishedUrl('@app/web/assets/installer/dist', true, 'images/install-bg-5120.png') }}\");
            }
        }

        @media only screen and (-webkit-min-device-pixel-ratio: 1.5) and (min-width: 961px),
        only screen and (-moz-min-device-pixel-ratio: 1.5) and (min-width: 961px),
        only screen and (-o-min-device-pixel-ratio: 3/2) and (min-width: 961px),
        only screen and (min-device-pixel-ratio: 1.5) and (min-width: 961px),
        only screen and (min-resolution: 1.5dppx) and (min-width: 961px) {
            body {
                background-image: url(\"{{ view.getAssetManager().getPublishedUrl('@app/web/assets/installer/dist', true, 'images/install-bg-5120.png') }}\");
            }
        }
    </style>
</head>
<body class=\"ltr\">
<div id=\"container\">
    <div id=\"modal\">
        <div id=\"main\">
            <div class=\"content\">
                <h1>Welcome</h1>
                <p>Thanks for installing Craft CMS!</p>
                <p>You’re looking at the <code>index.html</code> template file located in your
                    <code>templates/</code> folder. Once you’re ready to start building out your site’s
                    front end, you can replace this with something custom.</p>
                <p>If you’re new to Craft CMS, take some time to check out the resources on the right
                    when you get a chance&mdash;especially
                    <a href=\"https://craftcms.com/discord\" target=\"_blank\">Discord</a>
                    and <a href=\"http://craftcms.stackexchange.com/\" target=\"_blank\">Stack Exchange</a>.
                    The Craft community is full of smart, friendly, and helpful people!</p>
                <p><span class=\"go\"><a href=\"{{ cpUrl('') }}\">Go to your Control Panel</a></span></p>
            </div>
        </div>
        <div id=\"aside\">
            <div class=\"content\">
                <h2>Popular Resources</h2>
                <ul>
                    <li><a href=\"http://docs.craftcms.com/v3/\" target=\"_blank\">Documentation</a><br><small>Read the official docs.</small></li>
                    <li><a href=\"https://craftcms.com/guides\" target=\"_blank\">Guides</a><br><small>Follow along with the official guides.</small></li>
                    <li><a href=\"https://twitter.com/hashtag/craftcms\" target=\"_blank\">#craftcms</a><br><small>See the latest tweets about Craft.</small></li>
                    <li><a href=\"https://craftcms.com/discord\" target=\"_blank\">Discord</a><br><small>Meet the community.</small></li>
                    <li><a href=\"http://craftcms.stackexchange.com/\" target=\"_blank\">Stack Exchange</a><br><small>Get help and help others.</small></li>
                    <li><a href=\"https://craftquest.io/\" target=\"_blank\">CraftQuest</a><br><small>Watch unlimited video lessons and courses.</small></li>
                    <li><a href=\"http://craftlinklist.com/\" target=\"_blank\">Craft Link List</a><br><small>Stay in-the-know.</small></li>
                    <li><a href=\"https://nystudio107.com/blog\" target=\"_blank\">nystudio107 Blog</a><br><small>Learn Craft and modern web development.</small></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>
", "index", "/var/www/dev.mavenshake.com/templates/index.html");
    }
}
