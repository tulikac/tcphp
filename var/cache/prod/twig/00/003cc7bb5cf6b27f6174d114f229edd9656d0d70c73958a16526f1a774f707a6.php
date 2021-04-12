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

/* admin/blog/index.html.twig */
class __TwigTemplate_bbd5cc12f8d22211b1ea1a487390ef0a78c66eae807f691d8fdea62183e3af7c extends Template
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
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "admin_post_index";
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.post_list"), "html", null, true);
        echo "</h1>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.title"), "html", null, true);
        echo "</th>
                <th scope=\"col\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.published_at"), "html", null, true);
        echo "</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                ";
            // line 23
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "publishedAt", [], "any", false, false, false, 23), "medium", "short", "", "UTC"), "html", null, true);
            echo "</td>
                <td class=\"text-right\">
                    <div class=\"item-actions\">
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_show", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
            echo "
                        </a>

                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> ";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit"), "html", null, true);
            echo "
                        </a>
                    </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "            <tr>
                <td colspan=\"4\" align=\"center\">";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.no_posts_found"), "html", null, true);
            echo "</td>
           </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>
";
    }

    // line 45
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "    <div class=\"section actions\">
        <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_new");
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.create_post"), "html", null, true);
        echo "
        </a>
    </div>

    ";
        // line 52
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 54
        echo $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 54,  163 => 52,  156 => 48,  152 => 47,  149 => 46,  145 => 45,  139 => 41,  130 => 38,  127 => 37,  116 => 31,  112 => 30,  106 => 27,  102 => 26,  95 => 23,  91 => 19,  88 => 18,  83 => 17,  76 => 13,  72 => 12,  68 => 11,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/blog/index.html.twig", "C:\\Users\\toan\\workspace\\DeployDemos\\symfony_php_demo\\templates\\admin\\blog\\index.html.twig");
    }
}
