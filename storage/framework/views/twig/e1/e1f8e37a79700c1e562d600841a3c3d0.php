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

/* theme::header */
class __TwigTemplate_f78d0bd91a54e7ea41f4b70d640f277e extends Template
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
        echo "<div class=\"loading-container\">
    <div class=\"h-100 d-flex align-items-center justify-content-center\">
        <ul class=\"list-unstyled\">
            <li>
                <img src=\"";
        // line 5
        echo theme_assets("images/loading.png");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, __("Loading"), "html", null, true);
        echo "\" height=\"100\" />
            </li>

            <li>
                <div class=\"spinner\">
                    <div class=\"rect1\"></div>
                    <div class=\"rect2\"></div>
                    <div class=\"rect3\"></div>
                    <div class=\"rect4\"></div>
                    <div class=\"rect5\"></div>
                </div>
            </li>
            <li>
                <p>";
        // line 18
        echo twig_escape_filter($this->env, __("Loading"), "html", null, true);
        echo "</p>
            </li>
        </ul>
    </div>
</div>
<!-- End loading -->


<!-- header -->
<header class=\"bg-light\">
    <!-- navbar -->
    <!-- Navbar menu  -->
    <div class=\"navigation-wrap navigation-shadow bg-white\">
        <nav class=\"navbar navbar-hover navbar-expand-lg navbar-soft\">
            <div class=\"container\">
                <div class=\"offcanvas-header\">
                    <div data-toggle=\"modal\" data-target=\"#modal_aside_right\" class=\"btn-md\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </div>
                </div>
                <figure class=\"mb-0 mx-auto\">
                    <a href=\"/\">
                        <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, get_logo(), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, get_config("title"), "html", null, true);
        echo "\" class=\"img-fluid logo\">
                    </a>
                </figure>

                <div class=\"collapse navbar-collapse justify-content-between\" id=\"main_nav99\">

                    ";
        // line 46
        echo jw_nav_menu(["container_before" => "<ul class=\"navbar-nav mr-auto\">", "container_after" => "</ul>", "theme_location" => "primary"]);
        // line 50
        echo "

                    <!-- Search bar.// -->
                    <ul class=\"navbar-nav \">
                        <li class=\"nav-item search hidden-xs hidden-sm \">
                            <a class=\"nav-link\" href=\"#\">
                                <i class=\"fa fa-search\"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- Search content bar.// -->
                    <div class=\"top-search navigation-shadow\">
                        <div class=\"container\">
                            <div class=\"input-group \">
                                <form action=\"";
        // line 64
        echo $this->extensions['Juzaweb\CMS\Extension\Url']->url("search");
        echo "\">
                                    <input type=\"hidden\" name=\"type\" value=\"posts\">

                                    <div class=\"row no-gutters mt-3\">
                                        <div class=\"col\">
                                            <input class=\"form-control border-secondary border-right-0 rounded-0\" type=\"search\" value=\"\" placeholder=\"Search \" name=\"q\" id=\"example-search-input4\" autocomplete=\"off\">
                                        </div>

                                        <div class=\"col-auto\">
                                            <button class=\"btn btn-outline-secondary border-left-0 rounded-0 rounded-right\">
                                                <i class=\"fa fa-search\"></i>
                                            </button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
    </div>
    <!-- End Navbar menu  -->

    <!-- Navbar sidebar menu  -->
    <div id=\"modal_aside_right\" class=\"modal fixed-left fade\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog modal-dialog-aside\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <div class=\"widget__form-search-bar  \">
                        <div class=\"row no-gutters\">
                            <div class=\"col\">
                                <input class=\"form-control border-secondary border-right-0 rounded-0\" value=\"\"
                                       placeholder=\"Search\">
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-outline-secondary border-left-0 rounded-0 rounded-right\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <nav class=\"list-group list-group-flush\">

                        ";
        // line 115
        echo jw_nav_menu(["container_before" => "<ul class=\"navbar-nav\">", "container_after" => "</ul>", "theme_location" => "primary", "item_view" => "theme::components.menu_mobile_item"]);
        // line 120
        echo "

                    </nav>
                </div>
            </div>
        </div> <!-- modal-bialog .// -->
    </div> <!-- modal.// -->
    <!-- End Navbar sidebar menu  -->
    <!-- End Navbar  -->
</header>
<!-- end header -->
";
    }

    public function getTemplateName()
    {
        return "theme::header";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 120,  170 => 115,  116 => 64,  100 => 50,  98 => 46,  87 => 40,  62 => 18,  44 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "theme::header", "E:\\Laragon\\cms\\modules/../themes/default/views/header.twig");
    }
}
