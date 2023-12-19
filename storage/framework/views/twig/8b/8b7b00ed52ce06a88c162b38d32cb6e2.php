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

/* theme::footer */
class __TwigTemplate_31c29b300796ba2ea2ee0af8101621e3 extends Template
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
        echo "<section class=\"wrapper__section p-0\">
    <div class=\"wrapper__section__components\">
        <footer>
            <div class=\"wrapper__footer bg__footer-dark pb-0\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            ";
        // line 8
        echo twig_escape_filter($this->env, dynamic_sidebar("footer_column_1"), "html", null, true);
        echo "
                        </div>

                        <div class=\"col-md-3\">
                            ";
        // line 12
        echo twig_escape_filter($this->env, dynamic_sidebar("footer_column_2"), "html", null, true);
        echo "
                        </div>

                        <div class=\"col-md-3\">
                            ";
        // line 16
        echo twig_escape_filter($this->env, dynamic_sidebar("footer_column_3"), "html", null, true);
        echo "
                        </div>

                        <div class=\"col-md-3\">
                            ";
        // line 20
        echo twig_escape_filter($this->env, dynamic_sidebar("footer_column_4"), "html", null, true);
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"mt-4\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <figure class=\"image-logo\">
                                    <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, get_logo(), "html", null, true);
        echo "\" alt=\"\" class=\"logo-footer\">
                                </figure>
                            </div>

                            <div class=\"col-md-8 my-auto \">
                                <div class=\"social__media\">
                                    <ul class=\"list-inline\">
                                        <li class=\"list-inline-item\">
                                            <a href=\"#\" class=\"btn btn-social rounded text-white facebook\">
                                                <i class=\"fa fa-facebook\"></i>
                                            </a>
                                        </li>
                                        <li class=\"list-inline-item\">
                                            <a href=\"#\" class=\"btn btn-social rounded text-white twitter\">
                                                <i class=\"fa fa-twitter\"></i>
                                            </a>
                                        </li>
                                        <li class=\"list-inline-item\">
                                            <a href=\"#\" class=\"btn btn-social rounded text-white whatsapp\">
                                                <i class=\"fa fa-whatsapp\"></i>
                                            </a>
                                        </li>
                                        <li class=\"list-inline-item\">
                                            <a href=\"#\" class=\"btn btn-social rounded text-white telegram\">
                                                <i class=\"fa fa-telegram\"></i>
                                            </a>
                                        </li>
                                        <li class=\"list-inline-item\">
                                            <a href=\"#\" class=\"btn btn-social rounded text-white linkedin\">
                                                <i class=\"fa fa-linkedin\"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer bottom -->
            <div class=\"wrapper__footer-bottom bg__footer-dark\">
                <div class=\"container \">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"border-top-1 bg__footer-bottom-section\">

                                <ul class=\"list-inline\">
                                    <li class=\"list-inline-item\">
                                        <span>
                                            Copyright © 2021
                                            <a href=\"#\">";
        // line 80
        echo twig_escape_filter($this->env, get_config("title"), "html", null, true);
        echo "</a>
                                        </span>
                                    </li>
                                </ul>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </footer>
    </div>
</section>

<a href=\"javascript:\" id=\"return-to-top\">
    <i class=\"fa fa-chevron-up\"></i>
</a>

";
    }

    public function getTemplateName()
    {
        return "theme::footer";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 80,  80 => 29,  68 => 20,  61 => 16,  54 => 12,  47 => 8,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "theme::footer", "E:\\Laragon\\cms\\modules/../themes/default/views/footer.twig");
    }
}
