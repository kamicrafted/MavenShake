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

/* _layouts/cp */
class __TwigTemplate_8f1e166e336bbbfb3b59c1ddf6067c979f04eedd44a1e9729fed39f509f1d7d9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'mainFormAttributes' => [$this, 'block_mainFormAttributes'],
            'header' => [$this, 'block_header'],
            'pageTitle' => [$this, 'block_pageTitle'],
            'contextMenu' => [$this, 'block_contextMenu'],
            'actionButton' => [$this, 'block_actionButton'],
            'main' => [$this, 'block_main'],
            'tabs' => [$this, 'block_tabs'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 44
        return "_layouts/basecp";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("template", "_layouts/cp");
        // line 47
        $context["queue"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 47, $this->source); })()), "app", []), "queue", []);
        // line 48
        ob_start();
        // line 49
        echo "    ";
        if (call_user_func_array($this->env->getTest('instance of')->getCallable(), [(isset($context["queue"]) || array_key_exists("queue", $context) ? $context["queue"] : (function () { throw new RuntimeError('Variable "queue" does not exist.', 49, $this->source); })()), "craft\\queue\\QueueInterface"])) {
            // line 50
            echo "        Craft.cp.setJobInfo(";
            echo $this->extensions['craft\web\twig\Extension']->jsonEncodeFilter(craft\helpers\Template::attribute($this->env, $this->source, (isset($context["queue"]) || array_key_exists("queue", $context) ? $context["queue"] : (function () { throw new RuntimeError('Variable "queue" does not exist.', 50, $this->source); })()), "getJobInfo", [0 => 100], "method"));
            echo ", false);
        ";
            // line 51
            if (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["queue"]) || array_key_exists("queue", $context) ? $context["queue"] : (function () { throw new RuntimeError('Variable "queue" does not exist.', 51, $this->source); })()), "getHasReservedJobs", [], "method")) {
                // line 52
                echo "            Craft.cp.trackJobProgress(true);
        ";
            } elseif (craft\helpers\Template::attribute($this->env, $this->source,             // line 53
(isset($context["queue"]) || array_key_exists("queue", $context) ? $context["queue"] : (function () { throw new RuntimeError('Variable "queue" does not exist.', 53, $this->source); })()), "getHasWaitingJobs", [], "method")) {
                // line 54
                echo "            Craft.cp.runQueue();
        ";
            }
            // line 56
            echo "    ";
        } else {
            // line 57
            echo "        Craft.cp.enableQueue = false;
    ";
        }
        Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        // line 61
        $context["hasSystemIcon"] = (((isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new RuntimeError('Variable "CraftEdition" does not exist.', 61, $this->source); })()) == (isset($context["CraftPro"]) || array_key_exists("CraftPro", $context) ? $context["CraftPro"] : (function () { throw new RuntimeError('Variable "CraftPro" does not exist.', 61, $this->source); })())) && craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 61, $this->source); })()), "rebrand", []), "isIconUploaded", []));
        // line 62
        $context["fullPageForm"] = ((isset($context["fullPageForm"]) || array_key_exists("fullPageForm", $context)) && (isset($context["fullPageForm"]) || array_key_exists("fullPageForm", $context) ? $context["fullPageForm"] : (function () { throw new RuntimeError('Variable "fullPageForm" does not exist.', 62, $this->source); })()));
        // line 64
        $context["canUpgradeEdition"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 64, $this->source); })()), "app", []), "getCanUpgradeEdition", [], "method");
        // line 65
        $context["licensedEdition"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 65, $this->source); })()), "app", []), "getLicensedEdition", [], "method");
        // line 66
        $context["isTrial"] = ( !((isset($context["licensedEdition"]) || array_key_exists("licensedEdition", $context) ? $context["licensedEdition"] : (function () { throw new RuntimeError('Variable "licensedEdition" does not exist.', 66, $this->source); })()) === null) &&  !((isset($context["licensedEdition"]) || array_key_exists("licensedEdition", $context) ? $context["licensedEdition"] : (function () { throw new RuntimeError('Variable "licensedEdition" does not exist.', 66, $this->source); })()) === (isset($context["CraftEdition"]) || array_key_exists("CraftEdition", $context) ? $context["CraftEdition"] : (function () { throw new RuntimeError('Variable "CraftEdition" does not exist.', 66, $this->source); })())));
        // line 68
        $context["sidebar"] = call_user_func_array($this->env->getFilter('trim')->getCallable(), [(($context["sidebar"]) ?? (((        $this->hasBlock("sidebar", $context, $blocks)) ? (        $this->renderBlock("sidebar", $context, $blocks)) : (""))))]);
        // line 69
        $context["details"] = call_user_func_array($this->env->getFilter('trim')->getCallable(), [(($context["details"]) ?? (((        $this->hasBlock("details", $context, $blocks)) ? (        $this->renderBlock("details", $context, $blocks)) : (""))))]);
        // line 70
        $context["footer"] = call_user_func_array($this->env->getFilter('trim')->getCallable(), [(($context["footer"]) ?? (((        $this->hasBlock("footer", $context, $blocks)) ? (        $this->renderBlock("footer", $context, $blocks)) : (""))))]);
        // line 71
        $context["crumbs"] = (($context["crumbs"]) ?? (null));
        // line 73
        $context["showHeader"] = (($context["showHeader"]) ?? (true));
        // line 74
        if ( !(isset($context["showHeader"]) || array_key_exists("showHeader", $context) ? $context["showHeader"] : (function () { throw new RuntimeError('Variable "showHeader" does not exist.', 74, $this->source); })())) {
            // line 75
            $context["bodyClass"] = ((((isset($context["bodyClass"]) || array_key_exists("bodyClass", $context))) ? (((isset($context["bodyClass"]) || array_key_exists("bodyClass", $context) ? $context["bodyClass"] : (function () { throw new RuntimeError('Variable "bodyClass" does not exist.', 75, $this->source); })()) . " ")) : ("")) . "no-header");
        }
        // line 305
        if ((craft\helpers\Template::attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 305, $this->source); })()), "can", [0 => "performUpdates"], "method") &&  !craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 305, $this->source); })()), "app", []), "updates", []), "getIsUpdateInfoCached", [], "method"))) {
            // line 306
            ob_start();
            // line 307
            echo "        Craft.cp.checkForUpdates();
    ";
            Craft::$app->getView()->registerJs(ob_get_clean(), 3);
        }
        // line 44
        $this->parent = $this->loadTemplate("_layouts/basecp", "_layouts/cp", 44);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        // line 0
        craft\helpers\Template::endProfile("template", "_layouts/cp");
    }

    // line 78
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "body");
        // line 79
        echo "    <div id=\"global-container\">
        <header id=\"global-sidebar\" class=\"sidebar\">
            ";
        // line 81
        if ((craft\helpers\Template::attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 81, $this->source); })()), "admin", []) && (isset($context["devMode"]) || array_key_exists("devMode", $context) ? $context["devMode"] : (function () { throw new RuntimeError('Variable "devMode" does not exist.', 81, $this->source); })()))) {
            // line 82
            echo "                <div id=\"devmode\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Craft CMS is running in Dev Mode.", "app"), "html", null, true);
            echo "\"></div>
            ";
        }
        // line 84
        echo "
            <a id=\"system-info\" class=\"menubtn\" role=\"button\" data-menu-anchor=\"#user-info\">
                <div id=\"site-icon\">
                    ";
        // line 87
        if ((isset($context["hasSystemIcon"]) || array_key_exists("hasSystemIcon", $context) ? $context["hasSystemIcon"] : (function () { throw new RuntimeError('Variable "hasSystemIcon" does not exist.', 87, $this->source); })())) {
            // line 88
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 88, $this->source); })()), "rebrand", []), "icon", []), "url", []), "html", null, true);
            echo "\" alt=\"\">
                    ";
        } else {
            // line 90
            echo "                        ";
            echo $this->extensions['craft\web\twig\Extension']->svgFunction("@app/icons/circle-c-outline.svg", null, true);
            echo "
                    ";
        }
        // line 92
        echo "                </div>
                <div id=\"system-name\">
                    <h2>";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["systemName"]) || array_key_exists("systemName", $context) ? $context["systemName"] : (function () { throw new RuntimeError('Variable "systemName" does not exist.', 94, $this->source); })()), "html", null, true);
        echo "&nbsp;<span data-icon=\"downangle\"></span></h2>
                    <div id=\"user-info\">
                        ";
        // line 96
        if (craft\helpers\Template::attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 96, $this->source); })()), "photoId", [])) {
            // line 97
            echo "                            <div id=\"user-photo\">
                                <img width=\"14\" sizes=\"14px\" srcset=\"";
            // line 98
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 98, $this->source); })()), "getThumbUrl", [0 => 14], "method"), "html", null, true);
            echo " 14w, ";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 98, $this->source); })()), "getThumbUrl", [0 => 28], "method"), "html", null, true);
            echo " 28w\" alt=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 98, $this->source); })()), "getName", [], "method"), "html", null, true);
            echo "\">
                            </div>
                        ";
        }
        // line 101
        echo "                        <div>";
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 101, $this->source); })()), "friendlyName", []), "html", null, true);
        echo "</div>
                    </div>
                </div>
            </a>

            <div class=\"menu\" data-align=\"left\">
                <ul>
                    <li><a href=\"";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) || array_key_exists("siteUrl", $context) ? $context["siteUrl"] : (function () { throw new RuntimeError('Variable "siteUrl" does not exist.', 108, $this->source); })()), "html", null, true);
        echo "\" rel=\"noopener\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("View site", "app"), "html", null, true);
        echo "</a></li>
                </ul>
                <hr>
                <ul>
                    <li><a href=\"";
        // line 112
        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("myaccount"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("My Account", "app"), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 113
        echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url("logout"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Sign out", "app"), "html", null, true);
        echo "</a></li>
                </ul>
            </div>

            <nav id=\"nav\">
                <ul>
                    ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 119, $this->source); })()), "cp", []), "nav", [], "method"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 120
            echo "                        ";
            $context["hasSubnav"] = (craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "subnav", [], "any", true, true) && craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "subnav", []));
            // line 121
            echo "                        <li id=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "id", []), "html", null, true);
            echo "\" ";
            if ((craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "sel", []) && (isset($context["hasSubnav"]) || array_key_exists("hasSubnav", $context) ? $context["hasSubnav"] : (function () { throw new RuntimeError('Variable "hasSubnav" does not exist.', 121, $this->source); })()))) {
                echo " class=\"has-subnav\"";
            }
            echo ">
                            <a";
            // line 122
            if (craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "sel", [])) {
                echo " class=\"sel\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "url", []), "html", null, true);
            echo "\">
                                <span class=\"icon icon-mask\">";
            // line 124
            if (craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "icon", [], "any", true, true)) {
                // line 125
                echo $this->extensions['craft\web\twig\Extension']->svgFunction(craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "icon", []), true, true);
            } elseif (craft\helpers\Template::attribute($this->env, $this->source,             // line 126
$context["item"], "fontIcon", [], "any", true, true)) {
                // line 127
                echo "<span data-icon=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "fontIcon", []), "html", null, true);
                echo "\"></span>";
            } else {
                // line 129
                $this->loadTemplate("_includes/defaulticon.svg", "_layouts/cp", 129)->display(twig_array_merge($context, ["label" => craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "label", [])]));
            }
            // line 131
            echo "</span>

                                <span class=\"label\">";
            // line 134
            echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "label", []), "html", null, true);
            // line 135
            echo "</span>";
            // line 137
            if (( !craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "sel", []) && craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "badgeCount", []))) {
                // line 138
                echo "<span class=\"badge\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('number')->getCallable(), [craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "badgeCount", []), 0]), "html", null, true);
                echo "</span>";
            }
            // line 140
            echo "</a>
                            ";
            // line 141
            if ((craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "sel", []) && (isset($context["hasSubnav"]) || array_key_exists("hasSubnav", $context) ? $context["hasSubnav"] : (function () { throw new RuntimeError('Variable "hasSubnav" does not exist.', 141, $this->source); })()))) {
                // line 142
                echo "                                <ul class=\"subnav\">
                                    ";
                // line 143
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "subnav", []));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["itemId"] => $context["item"]) {
                    // line 144
                    echo "                                        ";
                    $context["itemIsSelected"] = ((                    // line 145
(isset($context["selectedSubnavItem"]) || array_key_exists("selectedSubnavItem", $context)) && ((isset($context["selectedSubnavItem"]) || array_key_exists("selectedSubnavItem", $context) ? $context["selectedSubnavItem"] : (function () { throw new RuntimeError('Variable "selectedSubnavItem" does not exist.', 145, $this->source); })()) == $context["itemId"])) || ( !                    // line 146
(isset($context["selectedSubnavItem"]) || array_key_exists("selectedSubnavItem", $context)) && craft\helpers\Template::attribute($this->env, $this->source, $context["loop"], "first", [])));
                    // line 149
                    echo "<li>
                                            <a href=\"";
                    // line 150
                    echo twig_escape_filter($this->env, craft\helpers\UrlHelper::url(craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "url", [])), "html", null, true);
                    echo "\"";
                    if ((isset($context["itemIsSelected"]) || array_key_exists("itemIsSelected", $context) ? $context["itemIsSelected"] : (function () { throw new RuntimeError('Variable "itemIsSelected" does not exist.', 150, $this->source); })())) {
                        echo " class=\"sel\"";
                    }
                    echo ">
                                                ";
                    // line 151
                    echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "label", []), "html", null, true);
                    // line 153
                    if (( !(isset($context["itemIsSelected"]) || array_key_exists("itemIsSelected", $context) ? $context["itemIsSelected"] : (function () { throw new RuntimeError('Variable "itemIsSelected" does not exist.', 153, $this->source); })()) && craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "badgeCount", [], "any", true, true))) {
                        // line 154
                        echo "<span class=\"badge\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('number')->getCallable(), [craft\helpers\Template::attribute($this->env, $this->source, $context["item"], "badgeCount", []), 0]), "html", null, true);
                        echo "</span>";
                    }
                    // line 156
                    echo "</a>
                                        </li>
                                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['itemId'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo "                                </ul>
                            ";
            }
            // line 161
            echo "                        </li>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                </ul>
            </nav>

            <div id=\"app-info\">
                <div id=\"edition\" ";
        // line 167
        if ((isset($context["canUpgradeEdition"]) || array_key_exists("canUpgradeEdition", $context) ? $context["canUpgradeEdition"] : (function () { throw new RuntimeError('Variable "canUpgradeEdition" does not exist.', 167, $this->source); })())) {
            echo "class=\"hot\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Manage your Craft CMS edition", "app"), "html", null, true);
            echo "\"";
        } else {
            echo "class=\"edition\"";
        }
        echo ">
                    <div id=\"edition-logo\">
                        <div class=\"edition-name\">";
        // line 169
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 169, $this->source); })()), "app", []), "getEditionName", [], "method"), "html", null, true);
        echo "</div>
                        ";
        // line 170
        if ((isset($context["isTrial"]) || array_key_exists("isTrial", $context) ? $context["isTrial"] : (function () { throw new RuntimeError('Variable "isTrial" does not exist.', 170, $this->source); })())) {
            // line 171
            echo "                            <div class=\"edition-trial\">";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Trial", "app"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 173
        echo "                    </div>
                </div>
                <div id=\"version\">Craft CMS ";
        // line 175
        echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 175, $this->source); })()), "app", []), "version", []), "html", null, true);
        echo "</div>
            </div>
        </header><!-- #global-sidebar -->

        <div id=\"main-container\">

            ";
        // line 182
        echo "            ";
        if (craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 182, $this->source); })()), "cp", []), "areAlertsCached", [], "method")) {
            // line 183
            echo "                ";
            $context["alerts"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 183, $this->source); })()), "cp", []), "getAlerts", [], "method");
            // line 184
            echo "                ";
            if ((isset($context["alerts"]) || array_key_exists("alerts", $context) ? $context["alerts"] : (function () { throw new RuntimeError('Variable "alerts" does not exist.', 184, $this->source); })())) {
                // line 185
                echo "                    <ul id=\"alerts\">
                        ";
                // line 186
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 186, $this->source); })()), "cp", []), "getAlerts", [], "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
                    // line 187
                    echo "                            <li>";
                    echo $context["alert"];
                    echo "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 189
                echo "                    </ul>
                ";
            }
            // line 191
            echo "            ";
        } else {
            // line 192
            echo "                ";
            ob_start();
            // line 193
            echo "                Craft.cp.fetchAlerts();
                ";
            Craft::$app->getView()->registerJs(ob_get_clean(), 3);
            // line 195
            echo "            ";
        }
        // line 196
        echo "
            ";
        // line 198
        echo "            <div id=\"notifications-wrapper\">
                <div id=\"notifications\">
                    ";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "notice", 1 => "error"]);
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 201
            echo "                        ";
            $context["message"] = craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, craft\helpers\Template::attribute($this->env, $this->source, (isset($context["craft"]) || array_key_exists("craft", $context) ? $context["craft"] : (function () { throw new RuntimeError('Variable "craft" does not exist.', 201, $this->source); })()), "app", []), "session", []), "getFlash", [0 => $context["type"]], "method");
            // line 202
            echo "                        ";
            if ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 202, $this->source); })())) {
                // line 203
                echo "                            <div class=\"notification ";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 203, $this->source); })()), "html", null, true);
                echo "</div>
                        ";
            }
            // line 205
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "                </div>
            </div>

            ";
        // line 210
        echo "            <div id=\"crumbs\"";
        if ( !(isset($context["crumbs"]) || array_key_exists("crumbs", $context) ? $context["crumbs"] : (function () { throw new RuntimeError('Variable "crumbs" does not exist.', 210, $this->source); })())) {
            echo " class=\"empty\"";
        }
        echo ">
                <a id=\"nav-toggle\" title=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Show nav", "app"), "html", null, true);
        echo "\"></a>
                ";
        // line 212
        if ((isset($context["crumbs"]) || array_key_exists("crumbs", $context) ? $context["crumbs"] : (function () { throw new RuntimeError('Variable "crumbs" does not exist.', 212, $this->source); })())) {
            // line 213
            echo "                    <nav>
                        <ul>
                            ";
            // line 215
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["crumbs"]) || array_key_exists("crumbs", $context) ? $context["crumbs"] : (function () { throw new RuntimeError('Variable "crumbs" does not exist.', 215, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 216
                echo "                                <li><a href=\"";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["crumb"], "url", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, craft\helpers\Template::attribute($this->env, $this->source, $context["crumb"], "label", []), "html", null, true);
                echo "</a></li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            echo "                        </ul>
                    </nav>
                ";
        }
        // line 221
        echo "            </div>

            ";
        // line 224
        echo "            <main id=\"main\" role=\"main\">

                ";
        // line 226
        if ((isset($context["fullPageForm"]) || array_key_exists("fullPageForm", $context) ? $context["fullPageForm"] : (function () { throw new RuntimeError('Variable "fullPageForm" does not exist.', 226, $this->source); })())) {
            // line 227
            echo "<form ";
            $this->displayBlock('mainFormAttributes', $context, $blocks);
            echo ">";
            // line 228
            echo craft\helpers\Html::csrfInput();
        }
        // line 230
        echo "
                ";
        // line 232
        echo "                ";
        if ((isset($context["showHeader"]) || array_key_exists("showHeader", $context) ? $context["showHeader"] : (function () { throw new RuntimeError('Variable "showHeader" does not exist.', 232, $this->source); })())) {
            // line 233
            echo "                    <header id=\"header\">
                        ";
            // line 234
            $this->displayBlock('header', $context, $blocks);
            // line 251
            echo "                    </header>
                ";
        }
        // line 253
        echo "
                ";
        // line 255
        echo "                <div id=\"main-content\" class=\"";
        if ((isset($context["sidebar"]) || array_key_exists("sidebar", $context) ? $context["sidebar"] : (function () { throw new RuntimeError('Variable "sidebar" does not exist.', 255, $this->source); })())) {
            echo "has-sidebar";
        }
        echo " ";
        if ((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 255, $this->source); })())) {
            echo "has-details";
        }
        echo "\">
                    ";
        // line 256
        $this->displayBlock('main', $context, $blocks);
        // line 294
        echo "                </div>

                ";
        // line 296
        if ((isset($context["fullPageForm"]) || array_key_exists("fullPageForm", $context) ? $context["fullPageForm"] : (function () { throw new RuntimeError('Variable "fullPageForm" does not exist.', 296, $this->source); })())) {
            // line 297
            echo "</form><!-- #main-form -->";
        }
        // line 299
        echo "            </main><!-- #main -->
        </div><!-- #main-container -->
    </div><!-- #global-container -->
";
        // line 0
        craft\helpers\Template::endProfile("block", "body");
    }

    // line 227
    public function block_mainFormAttributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "mainFormAttributes");
        // line 227
        echo "id=\"main-form\" method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut";
        if ((isset($context["saveShortcutRedirect"]) || array_key_exists("saveShortcutRedirect", $context))) {
            echo " data-saveshortcut-redirect=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('hash')->getCallable(), [(isset($context["saveShortcutRedirect"]) || array_key_exists("saveShortcutRedirect", $context) ? $context["saveShortcutRedirect"] : (function () { throw new RuntimeError('Variable "saveShortcutRedirect" does not exist.', 227, $this->source); })())]), "html", null, true);
            echo "\"";
        }
        echo " data-confirm-unload novalidate";
        // line 0
        craft\helpers\Template::endProfile("block", "mainFormAttributes");
    }

    // line 234
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "header");
        // line 235
        echo "                            <div class=\"flex flex-nowrap\">
                                ";
        // line 236
        $this->displayBlock('pageTitle', $context, $blocks);
        // line 241
        echo "                                ";
        $this->displayBlock('contextMenu', $context, $blocks);
        // line 242
        echo "                            </div>
                            <div class=\"flex\">
                                ";
        // line 244
        $this->displayBlock('actionButton', $context, $blocks);
        // line 249
        echo "                            </div>
                        ";
        // line 0
        craft\helpers\Template::endProfile("block", "header");
    }

    // line 236
    public function block_pageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "pageTitle");
        // line 237
        echo "                                    ";
        if (((isset($context["title"]) || array_key_exists("title", $context)) && twig_length_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 237, $this->source); })())))) {
            // line 238
            echo "                                        <h1 title=\"";
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 238, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 238, $this->source); })()), "html", null, true);
            echo "</h1>
                                    ";
        }
        // line 240
        echo "                                ";
        // line 0
        craft\helpers\Template::endProfile("block", "pageTitle");
    }

    // line 241
    public function block_contextMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "contextMenu");
        craft\helpers\Template::endProfile("block", "contextMenu");
    }

    // line 244
    public function block_actionButton($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "actionButton");
        // line 245
        echo "                                    ";
        if ((isset($context["fullPageForm"]) || array_key_exists("fullPageForm", $context) ? $context["fullPageForm"] : (function () { throw new RuntimeError('Variable "fullPageForm" does not exist.', 245, $this->source); })())) {
            // line 246
            echo "                                        <input type=\"submit\" class=\"btn submit\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['craft\web\twig\Extension']->translateFilter("Save", "app"), "html", null, true);
            echo "\">
                                    ";
        }
        // line 248
        echo "                                ";
        // line 0
        craft\helpers\Template::endProfile("block", "actionButton");
    }

    // line 256
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "main");
        // line 257
        echo "                        ";
        // line 258
        echo "                        ";
        if ( !twig_test_empty((isset($context["sidebar"]) || array_key_exists("sidebar", $context) ? $context["sidebar"] : (function () { throw new RuntimeError('Variable "sidebar" does not exist.', 258, $this->source); })()))) {
            // line 259
            echo "                            <a id=\"sidebar-toggle\"><span id=\"selected-sidebar-item-label\"></span>&nbsp;<span data-icon=\"downangle\"></span></a>
                            <div id=\"sidebar\" class=\"sidebar\">
                                ";
            // line 261
            echo (isset($context["sidebar"]) || array_key_exists("sidebar", $context) ? $context["sidebar"] : (function () { throw new RuntimeError('Variable "sidebar" does not exist.', 261, $this->source); })());
            echo "
                            </div>
                        ";
        }
        // line 264
        echo "
                        ";
        // line 266
        echo "                        <div id=\"content-container\">
                            ";
        // line 267
        $this->displayBlock('tabs', $context, $blocks);
        // line 272
        echo "
                            <div id=\"content\">
                                ";
        // line 274
        $this->displayBlock('content', $context, $blocks);
        // line 277
        echo "                            </div>

                            ";
        // line 280
        echo "                            ";
        if ( !twig_test_empty((isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 280, $this->source); })()))) {
            // line 281
            echo "                                <div id=\"footer\" class=\"flex\">
                                    ";
            // line 282
            echo (isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 282, $this->source); })());
            echo "
                                </div>
                            ";
        }
        // line 285
        echo "                        </div>

                        ";
        // line 288
        echo "                        ";
        if ( !twig_test_empty((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 288, $this->source); })()))) {
            // line 289
            echo "                            <div id=\"details\">
                                ";
            // line 290
            echo (isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 290, $this->source); })());
            echo "
                            </div>
                        ";
        }
        // line 293
        echo "                    ";
        // line 0
        craft\helpers\Template::endProfile("block", "main");
    }

    // line 267
    public function block_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "tabs");
        // line 268
        echo "                                ";
        if (((isset($context["tabs"]) || array_key_exists("tabs", $context)) && (isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 268, $this->source); })()))) {
            // line 269
            echo "                                    ";
            $this->loadTemplate("_includes/tabs", "_layouts/cp", 269)->display($context);
            // line 270
            echo "                                ";
        }
        // line 271
        echo "                            ";
        // line 0
        craft\helpers\Template::endProfile("block", "tabs");
    }

    // line 274
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 0
        craft\helpers\Template::beginProfile("block", "content");
        // line 275
        echo "                                    ";
        (((isset($context["content"]) || array_key_exists("content", $context))) ? (print (twig_escape_filter($this->env, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 275, $this->source); })()), "html", null, true))) : (print ("")));
        echo "
                                ";
        // line 0
        craft\helpers\Template::endProfile("block", "content");
    }

    public function getTemplateName()
    {
        return "_layouts/cp";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  799 => 0,  794 => 275,  792 => 0,  788 => 274,  784 => 0,  782 => 271,  779 => 270,  776 => 269,  773 => 268,  771 => 0,  767 => 267,  763 => 0,  761 => 293,  755 => 290,  752 => 289,  749 => 288,  745 => 285,  739 => 282,  736 => 281,  733 => 280,  729 => 277,  727 => 274,  723 => 272,  721 => 267,  718 => 266,  715 => 264,  709 => 261,  705 => 259,  702 => 258,  700 => 257,  698 => 0,  694 => 256,  690 => 0,  688 => 248,  682 => 246,  679 => 245,  677 => 0,  673 => 244,  668 => 0,  664 => 241,  660 => 0,  658 => 240,  650 => 238,  647 => 237,  645 => 0,  641 => 236,  637 => 0,  634 => 249,  632 => 244,  628 => 242,  625 => 241,  623 => 236,  620 => 235,  618 => 0,  614 => 234,  610 => 0,  602 => 227,  600 => 0,  596 => 227,  592 => 0,  587 => 299,  584 => 297,  582 => 296,  578 => 294,  576 => 256,  565 => 255,  562 => 253,  558 => 251,  556 => 234,  553 => 233,  550 => 232,  547 => 230,  544 => 228,  540 => 227,  538 => 226,  534 => 224,  530 => 221,  525 => 218,  514 => 216,  510 => 215,  506 => 213,  504 => 212,  500 => 211,  493 => 210,  488 => 206,  482 => 205,  474 => 203,  471 => 202,  468 => 201,  464 => 200,  460 => 198,  457 => 196,  454 => 195,  450 => 193,  447 => 192,  444 => 191,  440 => 189,  431 => 187,  427 => 186,  424 => 185,  421 => 184,  418 => 183,  415 => 182,  406 => 175,  402 => 173,  396 => 171,  394 => 170,  390 => 169,  379 => 167,  373 => 163,  358 => 161,  354 => 159,  338 => 156,  333 => 154,  331 => 153,  329 => 151,  321 => 150,  318 => 149,  316 => 146,  315 => 145,  313 => 144,  296 => 143,  293 => 142,  291 => 141,  288 => 140,  283 => 138,  281 => 137,  279 => 135,  277 => 134,  273 => 131,  270 => 129,  265 => 127,  263 => 126,  261 => 125,  259 => 124,  251 => 122,  242 => 121,  239 => 120,  222 => 119,  211 => 113,  205 => 112,  196 => 108,  185 => 101,  175 => 98,  172 => 97,  170 => 96,  165 => 94,  161 => 92,  155 => 90,  149 => 88,  147 => 87,  142 => 84,  136 => 82,  134 => 81,  130 => 79,  128 => 0,  124 => 78,  120 => 0,  117 => 44,  112 => 307,  110 => 306,  108 => 305,  105 => 75,  103 => 74,  101 => 73,  99 => 71,  97 => 70,  95 => 69,  93 => 68,  91 => 66,  89 => 65,  87 => 64,  85 => 62,  83 => 61,  78 => 57,  75 => 56,  71 => 54,  69 => 53,  66 => 52,  64 => 51,  59 => 50,  56 => 49,  54 => 48,  52 => 47,  50 => 0,  43 => 44,);
    }

    public function getSourceContext()
    {
        return new Source("{#
┌───────────────────────────────────────────────────────────────────────────┐
│                            #global-container                              │
│ ┌────────┐ ┌────────────────────────────────────────────────────────────┐ │
│ │        │ │                      #main-container                       │ │
│ │        │ │ ┌────────────────────────────────────────────────────────┐ │ │
│ │        │ │ │                        #alerts                         │ │ │
│ │        │ │ └────────────────────────────────────────────────────────┘ │ │
│ │        │ │ ┌────────────────────────────────────────────────────────┐ │ │
│ │        │ │ │                        #crumbs                         │ │ │
│ │        │ │ └────────────────────────────────────────────────────────┘ │ │
│ │        │ │ ┌────────────────────────────────────────────────────────┐ │ │
│ │        │ │ │                         #main                          │ │ │
│ │        │ │ │ ┌────────────────────────────────────────────────────┐ │ │ │
│ │        │ │ │ │                   #main-form (?)                   │ │ │ │
│ │        │ │ │ │ ┌────────────────────────────────────────────────┐ │ │ │ │
│ │        │ │ │ │ │                    #header                     │ │ │ │ │
│ │        │ │ │ │ └────────────────────────────────────────────────┘ │ │ │ │
│ │        │ │ │ │ ┌────────────────────────────────────────────────┐ │ │ │ │
│ │        │ │ │ │ │                 #main-content                  │ │ │ │ │
│ │#global-│ │ │ │ │ ┌────────┐ ┌──────────────────────┐ ┌────────┐ │ │ │ │ │
│ │sidebar │ │ │ │ │ │        │ │  #content-container  │ │        │ │ │ │ │ │
│ │        │ │ │ │ │ │        │ │ ┌──────────────────┐ │ │        │ │ │ │ │ │
│ │        │ │ │ │ │ │        │ │ │    #tabs (?)     │ │ │        │ │ │ │ │ │
│ │        │ │ │ │ │ │        │ │ └──────────────────┘ │ │        │ │ │ │ │ │
│ │        │ │ │ │ │ │        │ │ ┌──────────────────┐ │ │        │ │ │ │ │ │
│ │        │ │ │ │ │ │        │ │ │                  │ │ │        │ │ │ │ │ │
│ │        │ │ │ │ │ │#sidebar│ │ │                  │ │ │#details│ │ │ │ │ │
│ │        │ │ │ │ │ │  (?)   │ │ │     #content     │ │ │  (?)   │ │ │ │ │ │
│ │        │ │ │ │ │ │        │ │ │                  │ │ │        │ │ │ │ │ │
│ │        │ │ │ │ │ │        │ │ │                  │ │ │        │ │ │ │ │ │
│ │        │ │ │ │ │ │        │ │ └──────────────────┘ │ │        │ │ │ │ │ │
│ │        │ │ │ │ │ │        │ │ ┌──────────────────┐ │ │        │ │ │ │ │ │
│ │        │ │ │ │ │ │        │ │ │   #footer (?)    │ │ │        │ │ │ │ │ │
│ │        │ │ │ │ │ │        │ │ └──────────────────┘ │ │        │ │ │ │ │ │
│ │        │ │ │ │ │ └────────┘ └──────────────────────┘ └────────┘ │ │ │ │ │
│ │        │ │ │ │ └────────────────────────────────────────────────┘ │ │ │ │
│ │        │ │ │ └────────────────────────────────────────────────────┘ │ │ │
│ │        │ │ └────────────────────────────────────────────────────────┘ │ │
│ └────────┘ └────────────────────────────────────────────────────────────┘ │
└───────────────────────────────────────────────────────────────────────────┘
#}

{% extends \"_layouts/basecp\" %}

{# The CP only supports queue components that implement QueueInterface #}
{% set queue = craft.app.queue %}
{% js %}
    {% if queue is instance of(\"craft\\\\queue\\\\QueueInterface\") %}
        Craft.cp.setJobInfo({{ queue.getJobInfo(100)|json_encode|raw }}, false);
        {% if queue.getHasReservedJobs() %}
            Craft.cp.trackJobProgress(true);
        {% elseif queue.getHasWaitingJobs() %}
            Craft.cp.runQueue();
        {% endif %}
    {% else %}
        Craft.cp.enableQueue = false;
    {% endif %}
{% endjs %}

{% set hasSystemIcon = CraftEdition == CraftPro and craft.rebrand.isIconUploaded %}
{% set fullPageForm = (fullPageForm is defined and fullPageForm) %}

{% set canUpgradeEdition = craft.app.getCanUpgradeEdition() %}
{% set licensedEdition = craft.app.getLicensedEdition() %}
{% set isTrial = licensedEdition is not same as(null) and licensedEdition is not same as(CraftEdition) %}

{% set sidebar = (sidebar ?? block('sidebar') ?? '')|trim %}
{% set details = (details ?? block('details') ?? '')|trim %}
{% set footer = (footer ?? block('footer') ?? '')|trim %}
{% set crumbs = crumbs ?? null %}

{% set showHeader = showHeader ?? true %}
{% if not showHeader %}
    {% set bodyClass = (bodyClass is defined ? bodyClass~' ' : '') ~ 'no-header' -%}
{% endif %}

{% block body %}
    <div id=\"global-container\">
        <header id=\"global-sidebar\" class=\"sidebar\">
            {% if currentUser.admin and devMode %}
                <div id=\"devmode\" title=\"{{ 'Craft CMS is running in Dev Mode.'|t('app') }}\"></div>
            {% endif %}

            <a id=\"system-info\" class=\"menubtn\" role=\"button\" data-menu-anchor=\"#user-info\">
                <div id=\"site-icon\">
                    {% if hasSystemIcon %}
                        <img src=\"{{ craft.rebrand.icon.url }}\" alt=\"\">
                    {% else %}
                        {{ svg('@app/icons/circle-c-outline.svg', namespace=true) }}
                    {% endif %}
                </div>
                <div id=\"system-name\">
                    <h2>{{ systemName }}&nbsp;<span data-icon=\"downangle\"></span></h2>
                    <div id=\"user-info\">
                        {% if currentUser.photoId %}
                            <div id=\"user-photo\">
                                <img width=\"14\" sizes=\"14px\" srcset=\"{{ currentUser.getThumbUrl(14) }} 14w, {{ currentUser.getThumbUrl(28) }} 28w\" alt=\"{{ currentUser.getName() }}\">
                            </div>
                        {% endif %}
                        <div>{{ currentUser.friendlyName }}</div>
                    </div>
                </div>
            </a>

            <div class=\"menu\" data-align=\"left\">
                <ul>
                    <li><a href=\"{{ siteUrl }}\" rel=\"noopener\" target=\"_blank\">{{ 'View site'|t('app') }}</a></li>
                </ul>
                <hr>
                <ul>
                    <li><a href=\"{{ url('myaccount') }}\">{{ 'My Account'|t('app') }}</a></li>
                    <li><a href=\"{{ url('logout') }}\">{{ \"Sign out\"|t('app') }}</a></li>
                </ul>
            </div>

            <nav id=\"nav\">
                <ul>
                    {% for item in craft.cp.nav() %}
                        {% set hasSubnav = (item.subnav is defined and item.subnav) %}
                        <li id=\"{{ item.id }}\" {% if item.sel and hasSubnav %} class=\"has-subnav\"{% endif %}>
                            <a{% if item.sel %} class=\"sel\"{% endif %} href=\"{{ item.url }}\">
                                <span class=\"icon icon-mask\">
                                    {%- if item.icon is defined -%}
                                        {{ svg(item.icon, sanitize=true, namespace=true) }}
                                    {%- elseif item.fontIcon is defined -%}
                                        <span data-icon=\"{{ item.fontIcon }}\"></span>
                                    {%- else -%}
                                        {% include \"_includes/defaulticon.svg\" with { label: item.label } %}
                                    {%- endif -%}
                                </span>

                                <span class=\"label\">
                                    {{- item.label -}}
                                </span>

                                {%- if not item.sel and item.badgeCount -%}
                                    <span class=\"badge\">{{ item.badgeCount|number(decimals=0) }}</span>
                                {%- endif -%}
                            </a>
                            {% if item.sel and hasSubnav %}
                                <ul class=\"subnav\">
                                    {% for itemId, item in item.subnav %}
                                        {% set itemIsSelected = (
                                            (selectedSubnavItem is defined and selectedSubnavItem == itemId) or
                                            (selectedSubnavItem is not defined and loop.first)
                                        ) -%}

                                        <li>
                                            <a href=\"{{ url(item.url) }}\"{% if itemIsSelected %} class=\"sel\"{% endif %}>
                                                {{ item.label }}

                                                {%- if not itemIsSelected and item.badgeCount is defined -%}
                                                    <span class=\"badge\">{{ item.badgeCount|number(decimals=0) }}</span>
                                                {%- endif -%}
                                            </a>
                                        </li>
                                    {% endfor %}
                                </ul>
                            {% endif %}
                        </li>
                    {% endfor %}
                </ul>
            </nav>

            <div id=\"app-info\">
                <div id=\"edition\" {% if canUpgradeEdition %}class=\"hot\" title=\"{{ 'Manage your Craft CMS edition'|t('app') }}\"{% else %}class=\"edition\"{% endif %}>
                    <div id=\"edition-logo\">
                        <div class=\"edition-name\">{{ craft.app.getEditionName() }}</div>
                        {% if isTrial %}
                            <div class=\"edition-trial\">{{ \"Trial\"|t('app') }}</div>
                        {% endif %}
                    </div>
                </div>
                <div id=\"version\">Craft CMS {{ craft.app.version }}</div>
            </div>
        </header><!-- #global-sidebar -->

        <div id=\"main-container\">

            {# alerts #}
            {% if craft.cp.areAlertsCached() %}
                {% set alerts = craft.cp.getAlerts() %}
                {% if alerts %}
                    <ul id=\"alerts\">
                        {% for alert in craft.cp.getAlerts() %}
                            <li>{{ alert|raw }}</li>
                        {% endfor %}
                    </ul>
                {% endif %}
            {% else %}
                {% js %}
                Craft.cp.fetchAlerts();
                {% endjs %}
            {% endif %}

            {# notifications #}
            <div id=\"notifications-wrapper\">
                <div id=\"notifications\">
                    {% for type in ['notice', 'error'] %}
                        {% set message = craft.app.session.getFlash(type) %}
                        {% if message %}
                            <div class=\"notification {{ type }}\">{{ message }}</div>
                        {% endif %}
                    {% endfor %}
                </div>
            </div>

            {# crumbs #}
            <div id=\"crumbs\"{% if not crumbs %} class=\"empty\"{% endif %}>
                <a id=\"nav-toggle\" title=\"{{ 'Show nav'|t('app') }}\"></a>
                {% if crumbs %}
                    <nav>
                        <ul>
                            {% for crumb in crumbs %}
                                <li><a href=\"{{ crumb.url }}\">{{ crumb.label }}</a></li>
                            {% endfor %}
                        </ul>
                    </nav>
                {% endif %}
            </div>

            {# main #}
            <main id=\"main\" role=\"main\">

                {% if fullPageForm -%}
                    <form {% block mainFormAttributes %}id=\"main-form\" method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut{% if saveShortcutRedirect is defined %} data-saveshortcut-redirect=\"{{ saveShortcutRedirect|hash }}\"{% endif %} data-confirm-unload novalidate{% endblock %}>
                        {{- csrfInput() }}
                {%- endif %}

                {# header #}
                {% if showHeader %}
                    <header id=\"header\">
                        {% block header %}
                            <div class=\"flex flex-nowrap\">
                                {% block pageTitle %}
                                    {% if title is defined and title|length %}
                                        <h1 title=\"{{ title }}\">{{ title }}</h1>
                                    {% endif %}
                                {% endblock %}
                                {% block contextMenu %}{% endblock %}
                            </div>
                            <div class=\"flex\">
                                {% block actionButton %}
                                    {% if fullPageForm %}
                                        <input type=\"submit\" class=\"btn submit\" value=\"{{ 'Save'|t('app') }}\">
                                    {% endif %}
                                {% endblock %}
                            </div>
                        {% endblock %}
                    </header>
                {% endif %}

                {# main-content #}
                <div id=\"main-content\" class=\"{% if sidebar %}has-sidebar{% endif %} {% if details %}has-details{% endif %}\">
                    {% block main %}
                        {# sidebar #}
                        {% if sidebar is not empty %}
                            <a id=\"sidebar-toggle\"><span id=\"selected-sidebar-item-label\"></span>&nbsp;<span data-icon=\"downangle\"></span></a>
                            <div id=\"sidebar\" class=\"sidebar\">
                                {{ sidebar|raw }}
                            </div>
                        {% endif %}

                        {# content-container #}
                        <div id=\"content-container\">
                            {% block tabs %}
                                {% if tabs is defined and tabs %}
                                    {% include \"_includes/tabs\" %}
                                {% endif %}
                            {% endblock %}

                            <div id=\"content\">
                                {% block content %}
                                    {{ content is defined ? content }}
                                {% endblock %}
                            </div>

                            {# footer #}
                            {% if footer is not empty %}
                                <div id=\"footer\" class=\"flex\">
                                    {{ footer|raw }}
                                </div>
                            {% endif %}
                        </div>

                        {# details #}
                        {% if details is not empty %}
                            <div id=\"details\">
                                {{ details|raw }}
                            </div>
                        {% endif %}
                    {% endblock %}
                </div>

                {% if fullPageForm -%}
                    </form><!-- #main-form -->
                {%- endif %}
            </main><!-- #main -->
        </div><!-- #main-container -->
    </div><!-- #global-container -->
{% endblock %}


{% if currentUser.can('performUpdates') and not craft.app.updates.getIsUpdateInfoCached() %}
    {% js %}
        Craft.cp.checkForUpdates();
    {% endjs %}
{% endif %}
", "_layouts/cp", "/var/www/dev.mavenshake.com/vendor/craftcms/cms/src/templates/_layouts/cp.html");
    }
}
