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

/* admin/blog/_form.html.twig */
class __TwigTemplate_f1a64ebb68c481746c2d07dee7c7bf9eac542ba1d79e802589bad8c6664aace3 extends Template
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
        // line 8
        echo "
";
        // line 9
        if ((((isset($context["show_confirmation"]) || array_key_exists("show_confirmation", $context))) ? (_twig_default_filter(($context["show_confirmation"] ?? null), false)) : (false))) {
            // line 10
            echo "    ";
            $context["attr"] = ["data-confirmation" => "true"];
            // line 11
            echo "    ";
            echo twig_include($this->env, $context, "blog/_delete_post_confirmation.html.twig");
            echo "
";
        }
        // line 13
        echo "
";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => (((isset($context["attr"]) || array_key_exists("attr", $context))) ? (_twig_default_filter(($context["attr"] ?? null), [])) : ([]))]);
        echo "
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

    <button type=\"submit\" class=\"";
        // line 17
        echo twig_escape_filter($this->env, (((isset($context["button_css"]) || array_key_exists("button_css", $context))) ? (_twig_default_filter(($context["button_css"] ?? null), "btn btn-primary")) : ("btn btn-primary")), "html", null, true);
        echo "\">
        <i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
        // line 18
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter(($context["button_label"] ?? null), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.create_post"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.create_post"))), "html", null, true);
        echo "
    </button>

    ";
        // line 21
        if ((((isset($context["include_back_to_home_link"]) || array_key_exists("include_back_to_home_link", $context))) ? (_twig_default_filter(($context["include_back_to_home_link"] ?? null), false)) : (false))) {
            // line 22
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_index");
            echo "\" class=\"btn btn-link\">
            <i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i> ";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.back_to_list"), "html", null, true);
            echo "
        </a>
    ";
        }
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/blog/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 26,  80 => 23,  75 => 22,  73 => 21,  67 => 18,  63 => 17,  58 => 15,  54 => 14,  51 => 13,  45 => 11,  42 => 10,  40 => 9,  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/blog/_form.html.twig", "C:\\Users\\toan\\workspace\\DeployDemos\\symfony_php_demo\\templates\\admin\\blog\\_form.html.twig");
    }
}
