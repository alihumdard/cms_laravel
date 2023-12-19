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

/* theme::templates.contact */
class __TwigTemplate_414fd8936dbd32b9431f2f7be1eaec1c extends Template
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
        $this->parent = $this->loadTemplate("cms::layouts.frontend", "theme::templates.contact", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <!-- Breadcrumb  -->
    <section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- Breadcrumb -->
                    <ul class=\"breadcrumbs bg-light mb-4\">
                        <li class=\"breadcrumbs__item\">
                            <a href=\"/\" class=\"breadcrumbs__url\">
                                <i class=\"fa fa-home\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, __("Home"), "html", null, true);
        echo "
                            </a>
                        </li>

                        <li class=\"breadcrumbs__item breadcrumbs__item--current\">
                            ";
        // line 18
        echo twig_escape_filter($this->env, __("Contact"), "html", null, true);
        echo "
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb  -->

    <!-- Form contact -->
    <section class=\"wrap__contact-form\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <h5>";
        // line 32
        echo twig_escape_filter($this->env, __("contact us"), "html", null, true);
        echo "</h5>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group form-group-name\">
                                <label>";
        // line 36
        echo twig_escape_filter($this->env, __("Your name"), "html", null, true);
        echo " <span class=\"required\"></span></label>
                                <input type=\"text\" class=\"form-control\" name=\"name\" required=\"\">

                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group form-group-name\">
                                <label>";
        // line 43
        echo twig_escape_filter($this->env, __("Your email"), "html", null, true);
        echo " <span class=\"required\"></span></label>
                                <input type=\"email\" class=\"form-control\" name=\"email\" required=\"\">

                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group form-group-name\">
                                <label>";
        // line 51
        echo twig_escape_filter($this->env, __("Website"), "html", null, true);
        echo " <span class=\"required\"></span></label>
                                <input type=\"text\" class=\"form-control\" name=\"website\" required=\"\">

                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group form-group-name\">
                                <label>";
        // line 58
        echo twig_escape_filter($this->env, __("Subject"), "html", null, true);
        echo " <span class=\"required\"></span></label>
                                <input type=\"text\" class=\"form-control\" name=\"subject\" required=\"\">

                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label>";
        // line 65
        echo twig_escape_filter($this->env, __("Your message"), "html", null, true);
        echo " </label>
                                <textarea class=\"form-control\" rows=\"8\" name=\"message\"></textarea>
                            </div>
                            <div class=\"form-group float-right mb-4\">
                                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 69
        echo twig_escape_filter($this->env, __("Submit"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <h5>Info location</h5>
                    <div class=\"wrap__contact-form-office\">
                        <ul class=\"list-unstyled\">
                            <li>
                                <span>
                                    <i class=\"fa fa-home\"></i>
                                </span>

                                PO Box 16122 Collins Street West Victoria
                                8007 Australia
                            </li>
                            <li>
                                <span>
                                    <i class=\"fa fa-phone\"></i>
                                    <a href=\"tel:\">(+12) 34567 890 123</a>
                                </span>

                            </li>
                            <li>
                                <span>
                                    <i class=\"fa fa-envelope\"></i>
                                    <a href=\"mailto:\">mail@example.com</a>
                                </span>

                            </li>
                            <li>
                                <span>
                                    <i class=\"fa fa-globe\"></i>
                                    <a href=\"#\" target=\"_blank\"> www.yourdomain.com</a>
                                </span>
                            </li>
                        </ul>

                        <div class=\"social__media\">
                            <h5>find us</h5>
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
    </section>
    <!-- End Form contact  -->

";
    }

    public function getTemplateName()
    {
        return "theme::templates.contact";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 69,  135 => 65,  125 => 58,  115 => 51,  104 => 43,  94 => 36,  87 => 32,  70 => 18,  62 => 13,  51 => 4,  47 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "theme::templates.contact", "E:\\Laragon\\cms\\modules/../themes/default/views/templates/contact.twig");
    }
}
