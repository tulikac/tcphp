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

/* base.html.twig */
class __TwigTemplate_33658b22599fe3740be964192919f9dd33625b27e57aa5fc6d71ca25197c2e53 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body_id' => [$this, 'block_body_id'],
            'header' => [$this, 'block_header'],
            'header_navigation_links' => [$this, 'block_header_navigation_links'],
            'body' => [$this, 'block_body'],
            'main' => [$this, 'block_main'],
            'sidebar' => [$this, 'block_sidebar'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 7), "locale", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("rss.title"), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_rss");
        echo "\">
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body id=\"";
        // line 20
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

        ";
        // line 22
        $this->displayBlock('header', $context, $blocks);
        // line 104
        echo "
        <div class=\"container body-container\">
            ";
        // line 106
        $this->displayBlock('body', $context, $blocks);
        // line 125
        echo "        </div>

        ";
        // line 127
        $this->displayBlock('footer', $context, $blocks);
        // line 152
        echo "
        ";
        // line 153
        $this->displayBlock('javascripts', $context, $blocks);
        // line 156
        echo "
        ";
        // line 160
        echo "        <!-- Page rendered on ";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, "now", "long", "long", "", "UTC"), "html", null, true);
        echo " -->
    </body>
</html>
";
    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Symfony Demo application";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
    }

    // line 20
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 22
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header col-md-3 col-lg-2\">
                            <a class=\"navbar-brand\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">
                                Symfony Demo
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.toggle_nav"), "html", null, true);
        echo "</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">

                                ";
        // line 43
        $this->displayBlock('header_navigation_links', $context, $blocks);
        // line 58
        echo "
                                <li>
                                    <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_search");
        echo "\"> <i class=\"fa fa-search\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.search"), "html", null, true);
        echo "</a>
                                </li>

                                ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 63)) {
            // line 64
            echo "                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" id=\"user\">
                                            <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                            <span class=\"caret\"></span>
                                            <span class=\"sr-only\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 68), "fullname", [], "any", false, false, false, 68), "html", null, true);
            echo "</span>
                                        </a>
                                        <ul class=\"dropdown-menu user\" role=\"menu\" aria-labelledby=\"user\">
                                            <li>
                                                <a href=\"";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit");
            echo "\">
                                                    <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> ";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.user"), "html", null, true);
            echo "
                                                </a>
                                            </li>
                                            <li class=\"divider\"></li>
                                            <li>
                                                <a href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">
                                                    <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> ";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.logout"), "html", null, true);
            echo "
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                ";
        }
        // line 85
        echo "
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" id=\"locales\">
                                        <i class=\"fa fa-globe\" aria-hidden=\"true\"></i>
                                        <span class=\"caret\"></span>
                                        <span class=\"sr-only\">";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.choose_language"), "html", null, true);
        echo "</span>
                                    </a>
                                    <ul class=\"dropdown-menu locales\" role=\"menu\" aria-labelledby=\"locales\">
                                        ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['App\Twig\AppExtension']->getLocales());
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 94
            echo "                                            <li ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 94), "locale", [], "any", false, false, false, 94), twig_get_attribute($this->env, $this->source, $context["locale"], "code", [], "any", false, false, false, 94))) {
                echo "aria-checked=\"true\" class=\"active\"";
            } else {
                echo "aria-checked=\"false\"";
            }
            echo " role=\"menuitem\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 94), "get", [0 => "_route", 1 => "blog_index"], "method", false, false, false, 94), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 94), "get", [0 => "_route_params", 1 => []], "method", false, false, false, 94), ["_locale" => twig_get_attribute($this->env, $this->source, $context["locale"], "code", [], "any", false, false, false, 94)])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 94)), "html", null, true);
            echo " <small>";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "code", [], "any", false, false, false, 94), 0, 2), "html", null, true);
            echo "</small></a></li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        ";
    }

    // line 43
    public function block_header_navigation_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "                                    <li>
                                        <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index");
        echo "\">
                                            <i class=\"fa fa-home\" aria-hidden=\"true\"></i> ";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.homepage"), "html", null, true);
        echo "
                                        </a>
                                    </li>

                                    ";
        // line 50
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 51
            echo "                                        <li>
                                            <a href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_index");
            echo "\">
                                                <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> ";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.admin"), "html", null, true);
            echo "
                                            </a>
                                        </li>
                                    ";
        }
        // line 57
        echo "                                ";
    }

    // line 106
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        ";
        // line 109
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "

                        ";
        // line 111
        $this->displayBlock('main', $context, $blocks);
        // line 112
        echo "                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        ";
        // line 115
        $this->displayBlock('sidebar', $context, $blocks);
        // line 122
        echo "                    </div>
                </div>
            ";
    }

    // line 111
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 115
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("esi", Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction", ["template" => "blog/about.html.twig", "sharedAge" => 600, "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 119
($context["app"] ?? null), "request", [], "any", false, false, false, 119), "locale", [], "any", false, false, false, 119)]));
        // line 120
        echo "
                        ";
    }

    // line 127
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 128
        echo "            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; ";
        // line 132
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - The Symfony Project</p>
                            <p>";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mit_license"), "html", null, true);
        echo "</p>
                        </div>
                        <div id=\"footer-resources\" class=\"col-md-6\">
                            <p>
                                <a href=\"https://twitter.com/symfony\" title=\"Symfony Twitter\">
                                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://www.facebook.com/SensioLabs\" title=\"SensioLabs Facebook\">
                                    <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://symfony.com/blog/\" title=\"Symfony Blog\">
                                    <i class=\"fa fa-rss\" aria-hidden=\"true\"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        ";
    }

    // line 153
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 154
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 154,  393 => 153,  370 => 133,  366 => 132,  360 => 128,  356 => 127,  351 => 120,  349 => 119,  347 => 116,  343 => 115,  337 => 111,  331 => 122,  329 => 115,  324 => 112,  322 => 111,  317 => 109,  313 => 107,  309 => 106,  305 => 57,  298 => 53,  294 => 52,  291 => 51,  289 => 50,  282 => 46,  278 => 45,  275 => 44,  271 => 43,  260 => 96,  241 => 94,  237 => 93,  231 => 90,  224 => 85,  215 => 79,  211 => 78,  203 => 73,  199 => 72,  192 => 68,  186 => 64,  184 => 63,  176 => 60,  172 => 58,  170 => 43,  158 => 34,  148 => 27,  142 => 23,  138 => 22,  132 => 20,  125 => 14,  121 => 13,  114 => 11,  105 => 160,  102 => 156,  100 => 153,  97 => 152,  95 => 127,  91 => 125,  89 => 106,  85 => 104,  83 => 22,  78 => 20,  72 => 17,  69 => 16,  67 => 13,  61 => 12,  57 => 11,  50 => 7,  47 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\Users\\toan\\workspace\\DeployDemos\\symfony_php_demo\\templates\\base.html.twig");
    }
}
