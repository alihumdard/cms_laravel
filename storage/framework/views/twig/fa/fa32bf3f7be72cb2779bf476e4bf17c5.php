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

/* theme::components.menu_item */
class __TwigTemplate_1f784c583c75a1c5121727e874f38e5e extends Template
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
            // line 2
            echo "    <li class=\"nav-item ";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 2)) {
                echo " dropdown has-submenu menu-large hidden-md-down hidden-sm-down hidden-xs-down ";
            }
            echo "\">
        <a class=\"nav-link ";
            // line 3
            if (twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 3)) {
                echo " dropdown-toggle ";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 3), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 3)) {
                echo " id=\"dropdown-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 3), "html", null, true);
                echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 3), "html", null, true);
            echo "</a>

        ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 5)) {
                // line 6
                echo "            <ul class=\"dropdown-menu megamenu\" aria-labelledby=\"dropdown-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 6), "html", null, true);
                echo "\">
                ";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 7));
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
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 8
                    echo "                    ";
                    $this->loadTemplate("theme::components.menu_item", "theme::components.menu_item", 8)->display(twig_array_merge($context, ["items" => twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 8)]));
                    // line 9
                    echo "                ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 10
                echo "            </ul>
        ";
            }
            // line 12
            echo "    </li>
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
    }

    public function getTemplateName()
    {
        return "theme::components.menu_item";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 12,  120 => 10,  106 => 9,  103 => 8,  86 => 7,  81 => 6,  79 => 5,  62 => 3,  55 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "theme::components.menu_item", "E:\\Laragon\\cms\\modules/../themes/default/views/components/menu_item.twig");
    }
}
