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

/* @Twig/Exception/error404.html.twig */
class __TwigTemplate_3358f482dda4bc9b8db8ae2a6d864bf235813a47675b43a7b3f3e49eb3aad764 extends Template
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
        // line 11
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "@Twig/Exception/error404.html.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "error";
    }

    // line 15
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <h1 class=\"text-danger\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("http_error.name", ["%status_code%" => 404]), "html", null, true);
        echo "</h1>

    <p class=\"lead\">
        ";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("http_error_404.description"), "html", null, true);
        echo "
    </p>
    <p>
        ";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("http_error_404.suggestion", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index")]);
        echo "
    </p>
";
    }

    // line 26
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 29
        echo $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 29,  83 => 27,  79 => 26,  72 => 22,  66 => 19,  59 => 16,  55 => 15,  48 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/error404.html.twig", "C:\\Users\\toan\\workspace\\DeployDemos\\symfony_php_demo\\templates\\bundles\\TwigBundle\\Exception\\error404.html.twig");
    }
}
