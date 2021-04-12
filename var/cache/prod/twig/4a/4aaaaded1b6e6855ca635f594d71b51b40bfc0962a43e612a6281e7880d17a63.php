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

/* admin/blog/show.html.twig */
class __TwigTemplate_ce1c7578e8835ffc7ee7a21f1aa3e77838221edcebaa0f4bb6fa742573235318 extends Template
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
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "admin_post_show";
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

    <div class=\"well\">
        <p class=\"m-b-0\"><strong>";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.summary"), "html", null, true);
        echo "</strong>: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "summary", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
    </div>

    ";
        // line 17
        echo $this->extensions['HtmlSanitizer\Bundle\Twig\TwigExtension']->sanitize($this->env->getRuntime('Twig\Extra\Markdown\MarkdownRuntime')->convert(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, false, 17)));
        echo "

    ";
        // line 19
        echo twig_include($this->env, $context, "blog/_post_tags.html.twig");
        echo "
";
    }

    // line 22
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <div class=\"section\">
        <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 24)]), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit_contents"), "html", null, true);
        echo "
        </a>
    </div>

    <div class=\"section\">
        ";
        // line 30
        echo twig_include($this->env, $context, "admin/blog/_delete_form.html.twig", ["post" => ($context["post"] ?? null)], false);
        echo "
    </div>

    ";
        // line 33
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 35
        echo $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/blog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 35,  121 => 33,  115 => 30,  107 => 25,  103 => 24,  100 => 23,  96 => 22,  90 => 19,  85 => 17,  77 => 14,  70 => 10,  66 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/blog/show.html.twig", "C:\\Users\\toan\\workspace\\DeployDemos\\symfony_php_demo\\templates\\admin\\blog\\show.html.twig");
    }
}
