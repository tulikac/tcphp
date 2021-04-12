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

/* blog/index.xml.twig */
class __TwigTemplate_6a5117589183a9686dca172123c14bedbad8ad3251ff13452ec83e3a31474e67 extends Template
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
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<rss version=\"2.0\">
    <channel>
        <title>";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("rss.title"), "html", null, true);
        echo "</title>
        <description>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("rss.description"), "html", null, true);
        echo "</description>
        <pubDate>";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "r", "GMT"), "html", null, true);
        echo "</pubDate>
        <lastBuildDate>";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "results", [], "any", false, false, false, 7)), "publishedAt", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "results", [], "any", false, false, false, 7)), "publishedAt", [], "any", false, false, false, 7), "now")) : ("now")), "r", "GMT"), "html", null, true);
        echo "</lastBuildDate>
        <link>";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("blog_index");
        echo "</link>
        <language>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 9), "locale", [], "any", false, false, false, 9), "html", null, true);
        echo "</language>

        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "results", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 12
            echo "            <item>
                <title>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 13), "html", null, true);
            echo "</title>
                <description>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 14), "html", null, true);
            echo "</description>
                <link>";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("blog_post", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 15)]), "html", null, true);
            echo "</link>
                <guid>";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("blog_post", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 16)]), "html", null, true);
            echo "</guid>
                <pubDate>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "publishedAt", [], "any", false, false, false, 17), "r", "GMT"), "html", null, true);
            echo "</pubDate>
                <author>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 18), "email", [], "any", false, false, false, 18), "html", null, true);
            echo "</author>
                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "tags", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 20
                echo "                    <category>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 20), "html", null, true);
                echo "</category>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "            </item>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </channel>
</rss>
";
    }

    public function getTemplateName()
    {
        return "blog/index.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 24,  111 => 22,  102 => 20,  98 => 19,  94 => 18,  90 => 17,  86 => 16,  82 => 15,  78 => 14,  74 => 13,  71 => 12,  67 => 11,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blog/index.xml.twig", "C:\\Users\\toan\\workspace\\DeployDemos\\symfony_php_demo\\templates\\blog\\index.xml.twig");
    }
}
