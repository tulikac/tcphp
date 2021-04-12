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

/* blog/post_show.html.twig */
class __TwigTemplate_c184bf34b379c2cbcfcc1f6572b1890c7190128e0c6448f9698fa9f7e09dc4d0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'main' => [$this, 'block_main'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "blog/post_show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "blog_post_show";
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>

    <p class=\"post-metadata\">
        <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "publishedAt", [], "any", false, false, false, 9), "long", "medium", "", "UTC"), "html", null, true);
        echo "</span>
        <span class=\"metadata\"><i class=\"fa fa-user\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "author", [], "any", false, false, false, 10), "fullName", [], "any", false, false, false, 10), "html", null, true);
        echo "</span>
    </p>

    ";
        // line 13
        echo $this->extensions['HtmlSanitizer\Bundle\Twig\TwigExtension']->sanitize($this->env->getRuntime('Twig\Extra\Markdown\MarkdownRuntime')->convert(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, false, 13)));
        echo "

    ";
        // line 15
        echo twig_include($this->env, $context, "blog/_post_tags.html.twig");
        echo "

    <div id=\"post-add-comment\" class=\"well\">
        ";
        // line 24
        echo "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 25
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\BlogController::commentForm", ["id" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 25)]));
            echo "
        ";
        } else {
            // line 27
            echo "            <p>
                <a class=\"btn btn-success\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login", ["redirect_to" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 28), "pathInfo", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">
                    <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> ";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.sign_in"), "html", null, true);
            echo "
                </a>
                ";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.to_publish_a_comment"), "html", null, true);
            echo "
            </p>
        ";
        }
        // line 34
        echo "    </div>

    <h3>
        <i class=\"fa fa-comments\" aria-hidden=\"true\"></i> ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.num_comments", ["count" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "comments", [], "any", false, false, false, 37))]), "html", null, true);
        echo "
    </h3>

    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "comments", [], "any", false, false, false, 40));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 41
            echo "        <div class=\"row post-comment\">
            <a name=\"comment_";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "\"></a>
            <h4 class=\"col-sm-3\">
                <strong>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 44), "fullName", [], "any", false, false, false, 44), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.commented_on"), "html", null, true);
            echo "
                ";
            // line 48
            echo "                <strong>";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "publishedAt", [], "any", false, false, false, 48), "medium", "short", "", "UTC"), "html", null, true);
            echo "</strong>
            </h4>
            <div class=\"col-sm-9\">
                ";
            // line 51
            echo $this->extensions['HtmlSanitizer\Bundle\Twig\TwigExtension']->sanitize($this->env->getRuntime('Twig\Extra\Markdown\MarkdownRuntime')->convert(twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 51)));
            echo "
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "        <div class=\"post-comment\">
            <p>";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.no_comments"), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 61
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", ($context["post"] ?? null))) {
            // line 63
            echo "        <div class=\"section\">
            <a class=\"btn btn-lg btn-block btn-success\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">
                <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> ";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit_post"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        // line 69
        echo "
    ";
        // line 73
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 75
        echo $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
        echo "
    ";
        // line 76
        echo twig_include($this->env, $context, "blog/_rss.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "blog/post_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 76,  204 => 75,  198 => 73,  195 => 69,  188 => 65,  184 => 64,  181 => 63,  178 => 62,  174 => 61,  163 => 56,  160 => 55,  151 => 51,  144 => 48,  138 => 44,  133 => 42,  130 => 41,  125 => 40,  119 => 37,  114 => 34,  108 => 31,  103 => 29,  99 => 28,  96 => 27,  90 => 25,  87 => 24,  81 => 15,  76 => 13,  70 => 10,  66 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blog/post_show.html.twig", "C:\\Users\\toan\\workspace\\DeployDemos\\symfony_php_demo\\templates\\blog\\post_show.html.twig");
    }
}
