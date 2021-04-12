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

/* blog/_post_tags.html.twig */
class __TwigTemplate_8084c6429fe2894fed15ba8458d7c4284b26e940e6aa4c3a638d2342bd40d86d extends Template
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
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "tags", [], "any", false, false, false, 1), "empty", [], "any", false, false, false, 1)) {
            // line 2
            echo "    <p class=\"post-tags\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "tags", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 4
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index", ["tag" => ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 4), "query", [], "any", false, false, false, 4), "get", [0 => "tag"], "method", false, false, false, 4))) ? (null) : (twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 4)))]), "html", null, true);
                echo "\"
               class=\"label label-";
                // line 5
                echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 5), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 5), "query", [], "any", false, false, false, 5), "get", [0 => "tag"], "method", false, false, false, 5))) ? ("success") : ("default"));
                echo "\"
            >
                <i class=\"fa fa-tag\"></i> ";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 7), "html", null, true);
                echo "
            </a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    </p>
";
        }
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "blog/_post_tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 12,  65 => 10,  56 => 7,  51 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blog/_post_tags.html.twig", "C:\\Users\\toan\\workspace\\DeployDemos\\symfony_php_demo\\templates\\blog\\_post_tags.html.twig");
    }
}
