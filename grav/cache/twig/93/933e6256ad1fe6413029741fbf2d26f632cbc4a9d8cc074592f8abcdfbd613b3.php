<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/page/js-css.html.twig */
class __TwigTemplate_db1c0ba5e31f9e0805aa6acc9c18611bd0a5db09853c59797b11dde49c7e6f39 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylehseets' => [$this, 'block_stylehseets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('stylehseets', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('javascripts', $context, $blocks);
        // line 9
        echo "
";
        // line 11
        $this->displayBlock('assets', $context, $blocks);
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 1
    public function block_stylehseets($context, array $blocks = [])
    {
        // line 2
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/layout.min.css"], "method");
    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        // line 6
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 7
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 11
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 12
        echo "  ";
        if (($context["allowCSS"] ?? null)) {
            echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        }
        // line 13
        echo "  ";
        if (($context["allowJS"] ?? null)) {
            echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        }
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    public function getTemplateName()
    {
        return "partials/page/js-css.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  80 => 13,  75 => 12,  72 => 11,  62 => 7,  59 => 6,  56 => 5,  51 => 2,  48 => 1,  43 => 11,  40 => 9,  38 => 5,  35 => 4,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block stylehseets %}
  {% do assets.addCss('theme://css/layout.min.css') %}
{% endblock %}

{% block javascripts %}
  {% do assets.addJs('jquery', 101) %}
  {% do assets.addJs('theme://js/site.js', {group:'bottom'}) %}
{% endblock %}

{# Regular CSS/JS includes #}
{% block assets deferred %}
  {% if allowCSS %}{{ assets.css()|raw }}{% endif %}
  {% if allowJS %}{{ assets.js()|raw }}{% endif %}
{% endblock %}
", "partials/page/js-css.html.twig", "/srv/grav/user/themes/hypertext/templates/partials/page/js-css.html.twig");
    }
}
