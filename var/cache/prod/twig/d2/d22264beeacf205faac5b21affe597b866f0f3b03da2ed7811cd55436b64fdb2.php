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

/* form/fields.html.twig */
class __TwigTemplate_3a6990fe732c08bc96ba21e54ae5149ef7c31b1181e7cc4a76cca580b3907247 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'date_time_picker_widget' => [$this, 'block_date_time_picker_widget'],
            'tags_input_widget' => [$this, 'block_tags_input_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('tags_input_widget', $context, $blocks);
    }

    // line 10
    public function block_date_time_picker_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    <div class=\"input-group date\" data-toggle=\"datetimepicker\">
        ";
        // line 12
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
        <span class=\"input-group-addon\">
            <span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>
        </span>
    </div>
";
    }

    // line 19
    public function block_tags_input_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    <div class=\"input-group\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ["data-toggle" => "tagsinput", "data-tags" => json_encode(($context["tags"] ?? null))]]);
        echo "
        <span class=\"input-group-addon\">
            <span class=\"fa fa-tags\" aria-hidden=\"true\"></span>
        </span>
    </div>
";
    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 21,  72 => 20,  68 => 19,  58 => 12,  55 => 11,  51 => 10,  47 => 19,  44 => 18,  42 => 10,  39 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "form/fields.html.twig", "C:\\Users\\toan\\workspace\\DeployDemos\\symfony_php_demo\\templates\\form\\fields.html.twig");
    }
}
