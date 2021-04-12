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

/* default/homepage.html.twig */
class __TwigTemplate_53bfbfdb7b3a831e9068471f97a6899ac51312329f64fa1f0a118db6e07921f0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'header' => [$this, 'block_header'],
            'footer' => [$this, 'block_footer'],
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "default/homepage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "homepage";
    }

    // line 9
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 10
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    <div class=\"page-header\">
        <h1>";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.homepage");
        echo "</h1>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("help.browse_app");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index");
        echo "\">
                        <i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.browse_app"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>

        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("help.browse_admin");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        echo "\">
                        <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.browse_admin"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "default/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 38,  113 => 37,  107 => 34,  95 => 25,  91 => 24,  85 => 21,  75 => 14,  72 => 13,  68 => 12,  62 => 10,  56 => 9,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/homepage.html.twig", "C:\\Users\\toan\\workspace\\DeployDemos\\symfony_php_demo\\templates\\default\\homepage.html.twig");
    }
}
