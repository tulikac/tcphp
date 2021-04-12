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

/* blog/index.html.twig */
class __TwigTemplate_d0fdac1bfae2cdd1777c7b9b163b8c9dd4f729299b4b1fd81d494d15224a2908 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "blog_index";
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "results", [], "any", false, false, false, 6));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        <article class=\"post\">
            <h2>
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 9)]), "html", null, true);
            echo "\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 10), "html", null, true);
            echo "
                </a>
            </h2>

            <p class=\"post-metadata\">
                <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> ";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "publishedAt", [], "any", false, false, false, 15), "long", "medium", "", "UTC"), "html", null, true);
            echo "</span>
                <span class=\"metadata\"><i class=\"fa fa-user\"></i> ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 16), "fullName", [], "any", false, false, false, 16), "html", null, true);
            echo "</span>
            </p>

            <p>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>

            ";
            // line 21
            echo twig_include($this->env, $context, "blog/_post_tags.html.twig");
            echo "
        </article>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 24
            echo "        <div class=\"well\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.no_posts_found"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
    ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasToPaginate", [], "any", false, false, false, 27)) {
            // line 28
            echo "        <div class=\"navigation text-center\">
            <ul class=\"pagination\">
                ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [], "any", false, false, false, 30)) {
                // line 31
                echo "                    <li class=\"prev\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index_paginated", ["page" => twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "previousPage", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\" rel=\"previous\"><i class=\"fa fw fa-long-arrow-left\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous"), "html", null, true);
                echo "</a></li>
                ";
            } else {
                // line 33
                echo "                    <li class=\"prev disabled\"><span><i class=\"fa fw fa-arrow-left\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous"), "html", null, true);
                echo "</span></li>
                ";
            }
            // line 35
            echo "
                ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "lastPage", [], "any", false, false, false, 36)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 37
                echo "                    ";
                if (0 === twig_compare($context["i"], twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", [], "any", false, false, false, 37))) {
                    // line 38
                    echo "                        <li class=\"active\"><span>";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo " <span class=\"sr-only\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.current"), "html", null, true);
                    echo "</span></span></li>
                    ";
                } else {
                    // line 40
                    echo "                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index_paginated", ["page" => $context["i"]]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a></li>
                    ";
                }
                // line 42
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "
                ";
            // line 44
            if (twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [], "any", false, false, false, 44)) {
                // line 45
                echo "                    <li class=\"next\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index_paginated", ["page" => twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "nextPage", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\" rel=\"next\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next"), "html", null, true);
                echo " <i class=\"fa fw fa-arrow-right\"></i></a></li>
                ";
            } else {
                // line 47
                echo "                    <li class=\"next disabled\"><span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next"), "html", null, true);
                echo " <i class=\"fa fw fa-arrow-right\"></i></span></li>
                ";
            }
            // line 49
            echo "            </ul>
        </div>
    ";
        }
    }

    // line 54
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 57
        echo $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
        echo "
    ";
        // line 58
        echo twig_include($this->env, $context, "blog/_rss.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 58,  227 => 57,  221 => 55,  217 => 54,  210 => 49,  204 => 47,  196 => 45,  194 => 44,  191 => 43,  185 => 42,  177 => 40,  169 => 38,  166 => 37,  162 => 36,  159 => 35,  153 => 33,  145 => 31,  143 => 30,  139 => 28,  137 => 27,  134 => 26,  125 => 24,  109 => 21,  104 => 19,  98 => 16,  94 => 15,  86 => 10,  82 => 9,  78 => 7,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blog/index.html.twig", "C:\\Users\\toan\\workspace\\DeployDemos\\symfony_php_demo\\templates\\blog\\index.html.twig");
    }
}
