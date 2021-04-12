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

/* blog/about.html.twig */
class __TwigTemplate_5e9d43be0b181ff9c73671c1d103bff6c2fb63750c3f15879d5dd0bbe697f125 extends Template
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
        echo "<div class=\"section about\">
    <div class=\"well well-lg\">
        <p>
            ";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("help.app_description");
        echo "
        </p>
        <p>
            ";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("help.more_information");
        echo "
        </p>
    </div>
</div>

";
        // line 15
        echo "<!-- Fragment rendered on ";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, "now", "long", "long", "", "UTC"), "html", null, true);
        echo " -->
";
    }

    public function getTemplateName()
    {
        return "blog/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blog/about.html.twig", "C:\\Users\\toan\\workspace\\DeployDemos\\symfony_php_demo\\templates\\blog\\about.html.twig");
    }
}
