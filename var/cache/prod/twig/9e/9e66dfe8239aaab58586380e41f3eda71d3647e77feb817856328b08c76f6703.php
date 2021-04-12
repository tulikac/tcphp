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

/* default/_flash_messages.html.twig */
class __TwigTemplate_f8b3bd589d2ebf02c6dc1af3a0ed944ffbe4373ee3140f0b3a7afa5161f1e8d1 extends Template
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
        // line 9
        echo "
";
        // line 17
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 17), "hasPreviousSession", [], "any", false, false, false, 17)) {
            // line 18
            echo "    <div class=\"messages\">
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 20
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 21
                    echo "                ";
                    // line 22
                    echo "                <div class=\"alert alert-dismissible alert-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo " fade in\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>

                    ";
                    // line 27
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/_flash_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 31,  74 => 30,  65 => 27,  56 => 22,  54 => 21,  49 => 20,  45 => 19,  42 => 18,  40 => 17,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/_flash_messages.html.twig", "C:\\Users\\toan\\workspace\\DeployDemos\\symfony_php_demo\\templates\\default\\_flash_messages.html.twig");
    }
}
