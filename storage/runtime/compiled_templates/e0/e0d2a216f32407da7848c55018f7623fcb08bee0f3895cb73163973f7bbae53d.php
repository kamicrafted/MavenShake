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

/* shop/reset.css */
class __TwigTemplate_99fae1ab67bb8ecf23d1da59d9d2475cfd80046eae028b3777ef1e470aca5c46 extends \Twig\Template
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
        craft\helpers\Template::beginProfile("template", "shop/reset.css");
        // line 1
        echo "html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
\tmargin: 0;
\tpadding: 0;
\tborder: 0;
\tfont-size: 100%;
\tfont: inherit;
\tvertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
\tdisplay: block;
}
body {
\tline-height: 1;
}
ol, ul {
\tlist-style: none;
}
blockquote, q {
\tquotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
\tcontent: '';
\tcontent: none;
}
table {
\tborder-collapse: collapse;
\tborder-spacing: 0;
}";
        // line 0
        craft\helpers\Template::endProfile("template", "shop/reset.css");
    }

    public function getTemplateName()
    {
        return "shop/reset.css";
    }

    public function getDebugInfo()
    {
        return array (  82 => 0,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
\tmargin: 0;
\tpadding: 0;
\tborder: 0;
\tfont-size: 100%;
\tfont: inherit;
\tvertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
\tdisplay: block;
}
body {
\tline-height: 1;
}
ol, ul {
\tlist-style: none;
}
blockquote, q {
\tquotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
\tcontent: '';
\tcontent: none;
}
table {
\tborder-collapse: collapse;
\tborder-spacing: 0;
}", "shop/reset.css", "/var/www/dev.mavenshake.com/templates/shop/reset.css");
    }
}
