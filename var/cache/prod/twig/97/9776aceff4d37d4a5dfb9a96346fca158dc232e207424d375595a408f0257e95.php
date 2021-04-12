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

/* security/login.html.twig */
class __TwigTemplate_6d9bb4147480ba7734f00dbbf6eceb9b77e28bee8936eb67ca748e6f26ed35e1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "login";
    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 7
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("login");
        echo "
";
    }

    // line 10
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    ";
        if (($context["error"] ?? null)) {
            // line 12
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 13), "security"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 16
        echo "
    <div class=\"row\">
        <div class=\"col-sm-5\">
            <div class=\"well\">
                <form action=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" method=\"post\">
                    <fieldset>
                        <legend><i class=\"fa fa-lock\" aria-hidden=\"true\"></i> ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.login"), "html", null, true);
        echo "</legend>
                        <div class=\"form-group\">
                            <label for=\"username\">";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.username"), "html", null, true);
        echo "</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" class=\"form-control\"/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.password"), "html", null, true);
        echo "</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
                        </div>
                        <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 31), "get", [0 => "redirect_to"], "method", false, false, false, 31), "html", null, true);
        echo "\"/>
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.sign_in"), "html", null, true);
        echo "
                        </button>
                    </fieldset>
                </form>
            </div>
        </div>

        <div id=\"login-help\" class=\"col-sm-7\">
            <h3>
                <i class=\"hidden-xs fa fa-long-arrow-left\" aria-hidden=\"true\"></i>
                ";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("help.login_users"), "html", null, true);
        echo "
            </h3>

            <table class=\"table table-striped table-bordered table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.username"), "html", null, true);
        echo "</th>
                        <th scope=\"col\">";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.password"), "html", null, true);
        echo "</th>
                        <th scope=\"col\">";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.role"), "html", null, true);
        echo "</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>john_user</td>
                        <td>kitten</td>
                        <td><code>ROLE_USER</code> (";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("help.role_user"), "html", null, true);
        echo ")</td>
                    </tr>
                    <tr>
                        <td>jane_admin</td>
                        <td>kitten</td>
                        <td><code>ROLE_ADMIN</code> (";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("help.role_admin"), "html", null, true);
        echo ")</td>
                    </tr>
                </tbody>
            </table>

            <div id=\"login-users-help\" class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <p>
                        <span class=\"label label-success\">";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("note"), "html", null, true);
        echo "</span>
                        ";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("help.reload_fixtures"), "html", null, true);
        echo "<br/>

                        <code class=\"console\">\$ php bin/console doctrine:fixtures:load</code>
                    </p>

                    <p>
                        <span class=\"label label-success\">";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tip"), "html", null, true);
        echo "</span>
                        ";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("help.add_user"), "html", null, true);
        echo "<br/>

                        <code class=\"console\">\$ php bin/console app:add-user</code>
                    </p>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 90
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 93
        echo $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
        echo "
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 93,  221 => 91,  217 => 90,  204 => 80,  200 => 79,  191 => 73,  187 => 72,  176 => 64,  168 => 59,  158 => 52,  154 => 51,  150 => 50,  141 => 44,  128 => 34,  123 => 32,  119 => 31,  113 => 28,  107 => 25,  103 => 24,  98 => 22,  93 => 20,  87 => 16,  81 => 13,  78 => 12,  75 => 11,  71 => 10,  65 => 7,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "C:\\Users\\toan\\workspace\\DeployDemos\\symfony_php_demo\\templates\\security\\login.html.twig");
    }
}
