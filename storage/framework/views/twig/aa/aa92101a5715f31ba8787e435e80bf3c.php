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

/* theme::template-parts.content */
class __TwigTemplate_adb67753689fee8a1eab01f7568be101 extends Template
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
        $context = TwigBridge\Node\EventNode::triggerLaravelEvents($this->getTemplateName(), $context);
        // line 1
        echo "<div class=\"article__entry\">
    ";
        // line 2
        $context["categories"] = get_post_taxonomies(($context["post"] ?? null), "categories", ["limit" => 1]);
        // line 3
        echo "
    <div class=\"article__image\">
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "url", [], "any", false, false, false, 5), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
            <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "thumbnail", [], "any", false, false, false, 6), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "\" class=\"img-fluid\">
        </a>
    </div>

    <div class=\"article__content\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 12
            echo "        <div class=\"article__category\">
            ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
        <ul class=\"list-inline\">
            <li class=\"list-inline-item\">
                <span class=\"text-primary\">
                    ";
        // line 20
        echo twig_escape_filter($this->env, __("by"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "author", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "
                </span>
            </li>

            <li class=\"list-inline-item\">
                <span class=\"text-dark text-capitalize\">
                    ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "created_at", [], "any", false, false, false, 26), "html", null, true);
        echo "
                </span>
            </li>
        </ul>

        <h5>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "url", [], "any", false, false, false, 32), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 32), "html", null, true);
        echo "\">
                ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 33), "html", null, true);
        echo "
            </a>
        </h5>

        <p>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "description", [], "any", false, false, false, 37), "html", null, true);
        echo "</p>

        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "url", [], "any", false, false, false, 39), "html", null, true);
        echo "\" class=\"btn btn-outline-primary mb-4 text-capitalize\"> ";
        echo twig_escape_filter($this->env, __("read more"), "html", null, true);
        echo "</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "theme::template-parts.content";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 39,  118 => 37,  111 => 33,  105 => 32,  96 => 26,  85 => 20,  79 => 16,  70 => 13,  67 => 12,  63 => 11,  53 => 6,  47 => 5,  43 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "theme::template-parts.content", "E:\\Laragon\\cms\\modules/../themes/default/views/template-parts/content.twig");
    }
}
