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

/* theme::components.menu_mobile_item */
class __TwigTemplate_47d3989abd6456daaf14400de6d516ef extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "<li class=\"nav-item ";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 2)) {
                echo " dropdown ";
            }
            echo "\">
    <a class=\"nav-link active ";
            // line 3
            if (twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 3)) {
                echo " dropdown-toggle ";
            }
            echo " text-dark\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 3), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 3)) {
                echo " data-toggle=\"dropdown\" ";
            }
            echo ">
        ";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 4), "html", null, true);
            echo "
    </a>

    ";
            // line 7
            if (twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 7)) {
                // line 8
                echo "    <ul class=\"dropdown-menu dropdown-menu-left\">
        ";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 9));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 10
                    echo "        <li>
            <a class=\"dropdown-item text-dark\" href=\"";
                    // line 11
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "link", [], "any", false, false, false, 11), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "label", [], "any", false, false, false, 11), "html", null, true);
                    echo "</a>
        </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "    </ul>
    ";
            }
            // line 16
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
";
    }

    public function getTemplateName()
    {
        return "theme::components.menu_mobile_item";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 18,  94 => 16,  90 => 14,  79 => 11,  76 => 10,  72 => 9,  69 => 8,  67 => 7,  61 => 4,  49 => 3,  42 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "theme::components.menu_mobile_item", "E:\\Laragon\\cms\\modules/../themes/default/views/components/menu_mobile_item.twig");
    }
}
