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

/* blog/search.html.twig */
class __TwigTemplate_c1b4c09aa76c0795e5337311240693dbd8e3bc010558c7de4e6cf7eeb3387d7f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "blog/search.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 5
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("search");
        echo "
";
    }

    // line 8
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "blog_search";
    }

    // line 10
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_search");
        echo "\" method=\"get\">
        <div class=\"form-group\">
            <input name=\"q\"
                   class=\"form-control search-field\"
                   placeholder=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.search_for"), "html", null, true);
        echo "\"
                   autocomplete=\"off\"
                   autofocus
                   data-no-results-message=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.search_no_results"), "html", null, true);
        echo "\"
            >
        </div>
    </form>

    <div id=\"results\">
    </div>
";
    }

    // line 27
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 30
        echo $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
        echo "
";
    }

    public function getTemplateName()
    {
        return "blog/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 30,  105 => 28,  101 => 27,  89 => 18,  83 => 15,  75 => 11,  71 => 10,  64 => 8,  58 => 5,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blog/search.html.twig", "C:\\Users\\toan\\workspace\\DeployDemos\\symfony_php_demo\\templates\\blog\\search.html.twig");
    }
}
