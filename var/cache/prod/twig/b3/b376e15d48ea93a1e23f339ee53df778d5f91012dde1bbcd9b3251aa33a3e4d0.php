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

/* admin/layout.html.twig */
class __TwigTemplate_9dccca22fc0cbca22c9d4265ee378581d1d2ac6377dcf0bdc58a5047122e6941 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'header_navigation_links' => [$this, 'block_header_navigation_links'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "admin/layout.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 12
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("admin");
        echo "
";
    }

    // line 15
    public function block_header_navigation_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <li>
        <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_index");
        echo "\">
            <i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i> ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.post_list"), "html", null, true);
        echo "
        </a>
    </li>
    <li>
        <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index");
        echo "\">
            <i class=\"fa fa-home\" aria-hidden=\"true\"></i> ";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.back_to_blog"), "html", null, true);
        echo "
        </a>
    </li>
";
    }

    // line 28
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 30
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("admin");
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 30,  97 => 29,  93 => 28,  85 => 23,  81 => 22,  74 => 18,  70 => 17,  67 => 16,  63 => 15,  57 => 12,  52 => 11,  48 => 10,  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/layout.html.twig", "C:\\Users\\toan\\workspace\\DeployDemos\\symfony_php_demo\\templates\\admin\\layout.html.twig");
    }
}
