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

/* blog/_comment_form.html.twig */
class __TwigTemplate_278728e1e72577aadbd6ed70c2d2ac64001d72e0997adf1b49f1b4af79789dbc extends Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_new", ["postSlug" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "slug", [], "any", false, false, false, 9)])]);
        echo "
    ";
        // line 15
        echo "
    <fieldset>
        <legend>
            <i class=\"fa fa-comment\" aria-hidden=\"true\"></i> ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.add_comment"), "html", null, true);
        echo "
        </legend>

        ";
        // line 22
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

        <div class=\"form-group ";
        // line 24
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "content", [], "any", false, false, false, 24), "vars", [], "any", false, false, false, 24), "valid", [], "any", false, false, false, 24)) {
            echo "has-error";
        }
        echo "\">
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "content", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "hidden"], "label" => "label.content"]);
        echo "

            ";
        // line 28
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "content", [], "any", false, false, false, 28), 'errors');
        echo "

            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "content", [], "any", false, false, false, 30), 'widget', ["attr" => ["rows" => 10]]);
        echo "
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "content", [], "any", false, false, false, 31), 'help');
        echo "
        </div>

        <div class=\"form-group\">
            <button class=\"btn btn-primary pull-right\" type=\"submit\">
                <i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i> ";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.publish_comment"), "html", null, true);
        echo "
            </button>
        </div>
    </fieldset>
";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "blog/_comment_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 40,  90 => 36,  82 => 31,  78 => 30,  72 => 28,  67 => 25,  61 => 24,  55 => 22,  49 => 18,  44 => 15,  40 => 9,  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "blog/_comment_form.html.twig", "C:\\Users\\toan\\workspace\\DeployDemos\\symfony_php_demo\\templates\\blog\\_comment_form.html.twig");
    }
}
