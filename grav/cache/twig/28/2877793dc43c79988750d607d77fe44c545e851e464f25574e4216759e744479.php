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

/* partials/page/footer.html.twig */
class __TwigTemplate_3d59d467103182d2b93e20f891c19772ffc6c215a0925d7ce959eda998504e7f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<p>&copy; ";
        echo twig_date_format_filter($this->env, "now", "Y");
        echo ", ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_HYPERTEXT.FOOTER.BY_LINE");
        echo "</p>

";
        // line 3
        $this->displayBlock('bottom', $context, $blocks);
    }

    public function block_bottom($context, array $blocks = [])
    {
        // line 4
        if (($context["allowJS"] ?? null)) {
            // line 5
            echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
            echo "
";
        }
        // line 7
        echo "
";
        // line 8
        if (($context["allowCSS"] ?? null)) {
            // line 9
            echo $this->getAttribute(($context["assets"] ?? null), "css", [0 => "bottom"], "method");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "partials/page/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  55 => 8,  52 => 7,  47 => 5,  45 => 4,  39 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<p>&copy; {{ \"now\"|date('Y') }}, {{ 'THEME_HYPERTEXT.FOOTER.BY_LINE'|t }}</p>

{% block bottom %}
{% if allowJS %}
{{ assets.js('bottom')|raw }}
{% endif %}

{% if allowCSS %}
{{ assets.css('bottom')|raw }}
{% endif %}
{% endblock %}
", "partials/page/footer.html.twig", "/srv/grav/user/themes/hypertext/templates/partials/page/footer.html.twig");
    }
}
