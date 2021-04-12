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

/* admin/blog/_delete_form.html.twig */
class __TwigTemplate_002dffe5de5d739bfbfbdb348280b1a28fdc8dc028681e7783c60fd43ca50d19 extends Template
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
        echo twig_include($this->env, $context, "blog/_delete_post_confirmation.html.twig");
        echo "
<form action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_post_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 2)]), "html", null, true);
        echo "\" method=\"post\" data-confirmation=\"true\" id=\"delete-form\">
    <input type=\"hidden\" name=\"token\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete"), "html", null, true);
        echo "\" />
    <button type=\"submit\" class=\"btn btn-lg btn-block btn-danger\">
        <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.delete_post"), "html", null, true);
        echo "
    </button>
</form>
";
    }

    public function getTemplateName()
    {
        return "admin/blog/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 6,  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/blog/_delete_form.html.twig", "C:\\Users\\toan\\workspace\\DeployDemos\\symfony_php_demo\\templates\\admin\\blog\\_delete_form.html.twig");
    }
}
