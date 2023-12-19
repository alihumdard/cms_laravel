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

/* cms::layouts.frontend */
class __TwigTemplate_97db8a73632bbae08d7eb05e6d9b176e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $context = TwigBridge\Node\EventNode::triggerLaravelEvents($this->getTemplateName(), $context);
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, get_locale(), "html", null, true);
        echo "\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "\">
    <meta name=\"turbolinks-cache-control\" content=\"no-cache\">
    <meta name=\"csrf-token\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, csrf_token(), "html", null, true);
        echo "\">
    <meta property=\"og:title\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Juzaweb\CMS\Extension\Url']->url(), "current", [], "method", false, false, false, 12), "html", null, true);
        echo "\">
    <meta property=\"og:description\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "\">
    <meta name=\"twitter:card\" content=\"summary\">
    <meta property=\"twitter:title\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\">
    <meta property=\"twitter:description\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "\">

    <link href=\"//fonts.googleapis.com\" rel=\"dns-prefetch\"/>
    <link href=\"//www.gstatic.com\" rel=\"dns-prefetch\"/>
    <link href=\"//www.googletagmanager.com\" rel=\"dns-prefetch\"/>

    ";
        // line 22
        $context["sitename"] = get_config("sitename");
        // line 23
        echo "    ";
        $context["icon"] = get_config("icon");
        // line 24
        echo "    ";
        $context["fbAppId"] = get_config("fb_app_id");
        // line 25
        echo "
    ";
        // line 26
        if (($context["image"] ?? null)) {
            // line 27
            echo "    <meta property=\"og:image\" content=\"";
            echo twig_escape_filter($this->env, upload_url(($context["image"] ?? null)), "html", null, true);
            echo "\" />
    ";
        }
        // line 29
        echo "    ";
        if (($context["sitename"] ?? null)) {
            // line 30
            echo "    <meta property=\"og:site_name\" content=\"";
            echo twig_escape_filter($this->env, ($context["sitename"] ?? null), "html", null, true);
            echo "\"/>
    ";
        }
        // line 32
        echo "    ";
        if (($context["fbAppId"] ?? null)) {
            // line 33
            echo "    <meta property=\"fb:app_id\" content=\"";
            echo twig_escape_filter($this->env, ($context["fbAppId"] ?? null), "html", null, true);
            echo "\"/>
    ";
        }
        // line 35
        echo "    <link rel=\"canonical\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Juzaweb\CMS\Extension\Url']->url(), "current", [], "method", false, false, false, 35), "html", null, true);
        echo "\" />
    ";
        // line 36
        if (get_config("jw_enable_post_feed", 1)) {
            // line 37
            echo "    <link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
            echo twig_escape_filter($this->env, get_config("title"), "html", null, true);
            echo " &raquo; Feed\" href=\"";
            echo $this->extensions['Juzaweb\CMS\Extension\Url']->url("feed");
            echo "\">
    ";
        }
        // line 39
        echo "    ";
        if ((($context["taxonomy"] ?? null) && get_config("jw_enable_taxonomy_feed", 1))) {
            // line 40
            echo "    <link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo " &raquo; Feed\" href=\"";
            echo $this->extensions['Juzaweb\CMS\Extension\Url']->url((("taxonomy/" . twig_get_attribute($this->env, $this->source, ($context["taxonomy"] ?? null), "slug", [], "any", false, false, false, 40)) . "/feed"));
            echo "\">
    ";
        }
        // line 42
        echo "    ";
        if (($context["icon"] ?? null)) {
            // line 43
            echo "    <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, upload_url(($context["icon"] ?? null)), "html", null, true);
            echo "\" />
    ";
        }
        // line 45
        echo "    <title>";
        echo twig_escape_filter($this->env, apply_filters("frontend.head.title", ($context["title"] ?? null)), "html", null, true);
        if (($context["sitename"] ?? null)) {
            echo " | ";
            echo twig_escape_filter($this->env, ($context["sitename"] ?? null), "html", null, true);
        }
        echo "</title>

    ";
        // line 47
        echo twig_escape_filter($this->env, theme_header(), "html", null, true);
        echo "

    ";
        // line 49
        $this->displayBlock('header', $context, $blocks);
        // line 50
        echo "</head>

<body class=\"";
        // line 52
        echo twig_escape_filter($this->env, body_class(((($context["post"] ?? null)) ? (("single-post single-post-" . twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "type", [], "any", false, false, false, 52))) : (""))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((array_key_exists("bodyClass", $context)) ? (_twig_default_filter(($context["bodyClass"] ?? null), "")) : ("")), "html", null, true);
        echo "\">
    ";
        // line 53
        echo twig_escape_filter($this->env, theme_after_body(), "html", null, true);
        echo "

    ";
        // line 55
        $this->loadTemplate("theme::header", "cms::layouts.frontend", 55)->display($context);
        // line 56
        echo "
    ";
        // line 57
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "
    ";
        // line 59
        $this->loadTemplate("theme::footer", "cms::layouts.frontend", 59)->display($context);
        // line 60
        echo "
    ";
        // line 61
        echo twig_escape_filter($this->env, theme_footer(), "html", null, true);
        echo "

    ";
        // line 63
        $this->displayBlock('footer', $context, $blocks);
        // line 64
        echo "
    ";
        // line 65
        if (($context["auth"] ?? null)) {
            // line 66
            echo "    <form action=\"";
            echo $this->extensions['Juzaweb\CMS\Extension\Url']->url("logout");
            echo "\"
          method=\"post\"
          style=\"display: none\"
          class=\"form-logout\"
    >
        ";
            // line 71
            echo twig_escape_filter($this->env, csrf_field(), "html", null, true);
            echo "
    </form>
    ";
        }
        // line 74
        echo "</body>
</html>
";
    }

    // line 49
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 57
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 63
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "cms::layouts.frontend";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 63,  246 => 57,  240 => 49,  234 => 74,  228 => 71,  219 => 66,  217 => 65,  214 => 64,  212 => 63,  207 => 61,  204 => 60,  202 => 59,  199 => 58,  197 => 57,  194 => 56,  192 => 55,  187 => 53,  181 => 52,  177 => 50,  175 => 49,  170 => 47,  160 => 45,  154 => 43,  151 => 42,  143 => 40,  140 => 39,  132 => 37,  130 => 36,  125 => 35,  119 => 33,  116 => 32,  110 => 30,  107 => 29,  101 => 27,  99 => 26,  96 => 25,  93 => 24,  90 => 23,  88 => 22,  79 => 16,  75 => 15,  70 => 13,  66 => 12,  61 => 10,  57 => 9,  52 => 7,  44 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cms::layouts.frontend", "E:\\Laragon\\cms\\modules\\Frontend\\Providers/../resources/views/layouts/frontend.twig");
    }
}
