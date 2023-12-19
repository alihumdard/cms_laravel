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

/* theme::index */
class __TwigTemplate_b3fb411cb2a08113163dca5c6428144f extends Template
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
        $this->parent = $this->loadTemplate("cms::layouts.frontend", "theme::index", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <aside class=\"wrapper__list__article \">
                        <h4 class=\"border_section\">";
        // line 9
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h4>

                        <div class=\"row\">
                        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "data", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 13
            echo "                            <div class=\"col-md-6\">
                                ";
            // line 14
            echo twig_escape_filter($this->env, get_template_part($context["post"], "content"), "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                        </div>
                    </aside>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"sidebar-sticky\">
                        ";
        // line 23
        echo twig_escape_filter($this->env, dynamic_sidebar("sidebar"), "html", null, true);
        echo "
                    </div>
                </div>

                <div class=\"clearfix\"></div>
            </div>
            <!-- Pagination -->
            <div class=\"pagination-area\">
                <div class=\"pagination wow fadeIn animated\" data-wow-duration=\"2s\" data-wow-delay=\"0.5s\" style=\"visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;\">
                    ";
        // line 32
        echo twig_escape_filter($this->env, paginate_links(($context["page"] ?? null), "theme::components.pagination"), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "theme::index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 32,  88 => 23,  80 => 17,  71 => 14,  68 => 13,  64 => 12,  58 => 9,  51 => 4,  47 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "theme::index", "E:\\Laragon\\cms\\modules/../themes/default/views/index.twig");
    }
}
