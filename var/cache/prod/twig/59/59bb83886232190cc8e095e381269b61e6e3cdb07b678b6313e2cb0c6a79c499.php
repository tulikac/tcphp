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

/* @Twig/Exception/error500.html.twig */
class __TwigTemplate_d7f366045b38564846f9fb7c46ab147fd9376473e473a3959860a1fa8018aec9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body_id' => [$this, 'block_body_id'],
            'main' => [$this, 'block_main'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "@Twig/Exception/error500.html.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"/build/css/app.4aa95248.css\">
";
    }

    // line 18
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "error";
    }

    // line 20
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <h1 class=\"text-danger\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("http_error.name", ["%status_code%" => 500]), "html", null, true);
        echo "</h1>

    <p class=\"lead\">
        ";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("http_error_500.description"), "html", null, true);
        echo "
    </p>
    <p>
        ";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("http_error_500.suggestion", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index")]);
        echo "
    </p>
";
    }

    // line 31
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 34
        echo $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 34,  96 => 32,  92 => 31,  85 => 27,  79 => 24,  72 => 21,  68 => 20,  61 => 18,  53 => 14,  49 => 13,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/error500.html.twig", "C:\\Users\\toan\\workspace\\DeployDemos\\symfony_php_demo\\templates\\bundles\\TwigBundle\\Exception\\error500.html.twig");
    }
}
