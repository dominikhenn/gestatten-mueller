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

/* partials/page/header.html.twig */
class __TwigTemplate_eb5c548479d3ca9e1e0b7b9120c1d6de25c6bcd65647e9d1907dea9f6edcec27 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'header_navigation' => [$this, 'block_header_navigation'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<section class=\"container\">
    <nav class=\"navbar\">
        <section class=\"navbar-section logo\">
            <a href=\"";
        // line 4
        echo ($context["home_url"] ?? null);
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["media"] ?? null), "theme://images/logo.png", [], "array"), "html", [0 => "", 1 => twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html")], "method");
        echo "</a>
        </section>
        <section class=\"navbar-section desktop-menu\">
            <nav class=\"dropmenu animated\">
                ";
        // line 8
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 11
        echo "            </nav>
        </section>
    </nav>
</section>
";
    }

    // line 8
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 9
        echo "                    ";
        $this->loadTemplate("partials/page/navigation.html.twig", "partials/page/header.html.twig", 9)->display($context);
        // line 10
        echo "                ";
    }

    public function getTemplateName()
    {
        return "partials/page/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  58 => 9,  55 => 8,  47 => 11,  45 => 8,  36 => 4,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"container\">
    <nav class=\"navbar\">
        <section class=\"navbar-section logo\">
            <a href=\"{{ home_url }}\">{{ media['theme://images/logo.png'].html('', site.title|e('html')) }}</a>
        </section>
        <section class=\"navbar-section desktop-menu\">
            <nav class=\"dropmenu animated\">
                {% block header_navigation %}
                    {% include 'partials/page/navigation.html.twig' %}
                {% endblock %}
            </nav>
        </section>
    </nav>
</section>
", "partials/page/header.html.twig", "/srv/grav/user/themes/hypertext/templates/partials/page/header.html.twig");
    }
}
