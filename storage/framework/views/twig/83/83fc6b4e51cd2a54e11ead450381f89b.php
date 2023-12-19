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

/* theme::template-parts.single-page */
class __TwigTemplate_2af36a4da264d8782ff3df7487a62e79 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "cms::layouts.frontend";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $context = TwigBridge\Node\EventNode::triggerLaravelEvents($this->getTemplateName(), $context);
        $this->parent = $this->loadTemplate("cms::layouts.frontend", "theme::template-parts.single-page", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <section class=\"pb-80\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- breaddcrumb -->
                    <!-- Breadcrumb -->
                    <ul class=\"breadcrumbs bg-light mb-4\">
                        <li class=\"breadcrumbs__item\">
                            <a href=\"";
        // line 13
        echo $this->extensions['Juzaweb\CMS\Extension\Url']->url("/");
        echo "\" class=\"breadcrumbs__url\">
                                <i class=\"fa fa-home\"></i> ";
        // line 14
        echo twig_escape_filter($this->env, __("Home"), "html", null, true);
        echo "
                            </a>
                        </li>

                        <li class=\"breadcrumbs__item breadcrumbs__item--current\">
                            ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 19), "html", null, true);
        echo "
                        </li>

                    </ul>
                    <!-- end breadcrumb -->
                </div>
                <div class=\"col-md-8\">
                    <!-- content article detail -->
                    <!-- Article Detail -->
                    <div class=\"wrap__article-detail\">
                        <div class=\"wrap__article-detail-title\">
                            <h1>
                                ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 31), "html", null, true);
        echo "
                            </h1>
                        </div>
                        <hr>

                        <div class=\"wrap__article-detail-content\">
                            <div class=\"total-views\">
                                <div class=\"total-views-read\">
                                    ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "views", [], "any", false, false, false, 39), "html", null, true);
        echo "
                                    <span>
                                        ";
        // line 41
        echo twig_escape_filter($this->env, __("views"), "html", null, true);
        echo "
                                    </span>
                                </div>

                                <ul class=\"list-inline\">
                                    <span class=\"share\">";
        // line 46
        echo twig_escape_filter($this->env, __("share on"), "html", null, true);
        echo ":</span>
                                    <li class=\"list-inline-item\">
                                        <a class=\"btn btn-social-o facebook\" href=\"https://www.facebook.com/sharer.php?u=";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Juzaweb\CMS\Extension\Url']->url(), "current", [], "method", false, false, false, 48), "html", null, true);
        echo "\">
                                            <i class=\"fa fa-facebook-f\"></i>
                                            <span>facebook</span>
                                        </a>
                                    </li>

                                    <li class=\"list-inline-item\">
                                        <a class=\"btn btn-social-o twitter\" href=\"https://twitter.com/intent/tweet?url=";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Juzaweb\CMS\Extension\Url']->url(), "current", [], "method", false, false, false, 55), "html", null, true);
        echo "&text=";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\">
                                            <i class=\"fa fa-twitter\"></i>
                                            <span>twitter</span>
                                        </a>
                                    </li>

                                    <li class=\"list-inline-item\">
                                        <a class=\"btn btn-social-o telegram\" href=\"https://t.me/share/url?url=";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Juzaweb\CMS\Extension\Url']->url(), "current", [], "method", false, false, false, 62), "html", null, true);
        echo "&text=";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\">
                                            <i class=\"fa fa-telegram\"></i>
                                            <span>telegram</span>
                                        </a>
                                    </li>

                                    <li class=\"list-inline-item\">
                                        <a class=\"btn btn-linkedin-o linkedin\" href=\"https://www.linkedin.com/sharing/share-offsite/?url=";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Juzaweb\CMS\Extension\Url']->url(), "current", [], "method", false, false, false, 69), "html", null, true);
        echo "\">
                                            <i class=\"fa fa-linkedin\"></i>
                                            <span>linkedin</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                            ";
        // line 78
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, false, 78);
        echo "
                        </div>
                    </div>
                    <!-- end content article detail -->

                </div>

                <div class=\"col-md-4\">
                    <div class=\"sticky-top\">
                        ";
        // line 87
        echo twig_escape_filter($this->env, dynamic_sidebar("sidebar"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
    </section>

";
    }

    public function getTemplateName()
    {
        return "theme::template-parts.single-page";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 87,  164 => 78,  152 => 69,  140 => 62,  128 => 55,  118 => 48,  113 => 46,  105 => 41,  100 => 39,  89 => 31,  74 => 19,  66 => 14,  62 => 13,  51 => 4,  47 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "theme::template-parts.single-page", "E:\\Laragon\\cms\\modules/../themes/default/views/template-parts/single-page.twig");
    }
}
