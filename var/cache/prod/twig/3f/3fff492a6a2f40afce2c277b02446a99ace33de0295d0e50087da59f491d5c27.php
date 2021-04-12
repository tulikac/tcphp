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

/* debug/source_code.html.twig */
class __TwigTemplate_d41e54458de4de02710fdb214450764729fe27b4fbfa1af4cd6454417f88c4bf extends Template
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
        // line 1
        echo "<div class=\"section source-code\">
    <p>
        ";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("help.show_code");
        echo "
    </p>

    <button type=\"button\" class=\"btn btn-default btn-lg btn-block\" data-toggle=\"modal\" data-target=\"#sourceCodeModal\">
      <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show_code"), "html", null, true);
        echo "
    </button>

    <div class=\"modal fade\" id=\"sourceCodeModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\"><i class=\"fa fa-code\" aria-hidden=\"true\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.source_code"), "html", null, true);
        echo "</h4>
                </div>

                <div class=\"modal-body\">
                    ";
        // line 21
        if (($context["controller"] ?? null)) {
            // line 22
            echo "                        <h3><a href=\"https://symfony.com/doc/current/controller.html\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.controller_code"), "html", null, true);
            echo "</a><small class=\"pull-right\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatFile(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "file_path", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "starting_line", [], "any", false, false, false, 22));
            echo "</small></h3>
                        <pre><code class=\"php\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "source_code", [], "any", false, false, false, 23), "html", null, true);
            echo "</code></pre>
                    ";
        } else {
            // line 25
            echo "                        <h3><a href=\"https://symfony.com/doc/current/controller.html\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.controller_code"), "html", null, true);
            echo "</a></h3>
                        <pre><code>";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("not_available"), "html", null, true);
            echo "</code></pre>
                    ";
        }
        // line 28
        echo "
                    <h3><a href=\"https://symfony.com/doc/current/templates.html\" target=\"_blank\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.twig_template_code"), "html", null, true);
        echo "</a><small class=\"pull-right\">";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatFile(twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "file_path", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "starting_line", [], "any", false, false, false, 29));
        echo "</small></h3>
                    <pre><code class=\"twig\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "source_code", [], "any", false, false, false, 30), "html", null, true);
        echo "</code></pre>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "debug/source_code.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 30,  95 => 29,  92 => 28,  87 => 26,  82 => 25,  77 => 23,  70 => 22,  68 => 21,  61 => 17,  48 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "debug/source_code.html.twig", "C:\\Users\\toan\\workspace\\DeployDemos\\symfony_php_demo\\templates\\debug\\source_code.html.twig");
    }
}
