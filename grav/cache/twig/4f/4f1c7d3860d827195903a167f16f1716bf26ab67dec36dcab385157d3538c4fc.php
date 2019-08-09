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

/* partials/base.html.twig */
class __TwigTemplate_4b83770bfd8324808d3caecc2ac44c1f3a302d3aed41e18c107fe6611ead0f38 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'header' => [$this, 'block_header'],
            'item_head' => [$this, 'block_item_head'],
            'content' => [$this, 'block_content'],
            'children' => [$this, 'block_children'],
            'item_footer' => [$this, 'block_item_footer'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["structure"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "hypertext", []), "structure", []);
        // line 2
        $context["style"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "hypertext", []), "style", []);
        // line 3
        $context["menu"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "hypertext", []), "menu", []);
        // line 4
        $context["html5"] = ((($this->getAttribute(($context["structure"] ?? null), "html_mode", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["structure"] ?? null), "html_mode", []), "default")) : ("default")) == "default");
        // line 5
        echo "
";
        // line 6
        $context["allowCSS"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "allowCSS", []) == "enabled") || (((($this->getAttribute($this->getAttribute(        // line 7
($context["page"] ?? null), "header", [], "any", false, true), "allowCSS", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "allowCSS", []), "default")) : ("default")) == "default") && ($this->getAttribute(        // line 8
($context["style"] ?? null), "allowCSS", []) == "1")));
        // line 9
        $context["allowJS"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "allowJS", []) == "enabled") || (((($this->getAttribute($this->getAttribute(        // line 10
($context["page"] ?? null), "header", [], "any", false, true), "allowJS", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "allowJS", []), "default")) : ("default")) == "default") && ($this->getAttribute(        // line 11
($context["style"] ?? null), "allowJS", []) == "1")));
        // line 12
        echo "
";
        // line 14
        echo "
<!DOCTYPE html>


";
        // line 19
        if ($this->getAttribute(($context["uri"] ?? null), "query", [0 => "headless"], "method")) {
            // line 20
            echo "<html>
  <head>
    <title>";
            // line 22
            if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
                echo " | ";
            }
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
            echo "</title>
  </head>
  <body>
  ";
            // line 25
            $this->displayBlock("content", $context, $blocks);
            echo "
  </body>
</html>


";
        } else {
            // line 32
            echo "<html lang=\"";
            echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
            echo "\">
<head>
";
            // line 34
            $this->displayBlock('head', $context, $blocks);
            // line 52
            echo "</head>


<body class=\"";
            // line 55
            echo $this->getAttribute(($context["page"] ?? null), "template", []);
            echo (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "bodyClasses", [])) ? (" {{ page.header.bodyClasses }}") : (""));
            echo "\">
  ";
            // line 57
            echo "  ";
            echo ((($context["html5"] ?? null)) ? ("<header id=\"header\">") : ("<div id=\"header\" class=\"header\">"));
            echo "
  ";
            // line 58
            $this->displayBlock('header', $context, $blocks);
            // line 61
            echo "  ";
            echo ((($context["html5"] ?? null)) ? ("</header>") : ("</div>"));
            echo "
  
  ";
            // line 64
            echo "  ";
            echo ((($context["html5"] ?? null)) ? ("<main>") : ("<div class=\"main\">"));
            echo "
    ";
            // line 65
            if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "messages", []), "all", [])) {
                // line 66
                echo "      ";
                $this->loadTemplate("partials/page/messages.html.twig", "partials/base.html.twig", 66)->display($context);
                // line 67
                echo "    ";
            }
            // line 68
            echo "
    ";
            // line 69
            echo ((($context["html5"] ?? null)) ? ("<article>") : ("<div class=\"item\">"));
            echo "

    ";
            // line 72
            echo "    ";
            $this->displayBlock('item_head', $context, $blocks);
            // line 75
            echo "
    ";
            // line 77
            echo "    ";
            $this->displayBlock('content', $context, $blocks);
            // line 80
            echo "
    ";
            // line 82
            echo "    ";
            $this->displayBlock('children', $context, $blocks);
            // line 85
            echo "
    ";
            // line 87
            echo "    ";
            $this->displayBlock('item_footer', $context, $blocks);
            // line 90
            echo "
    ";
            // line 91
            echo ((($context["html5"] ?? null)) ? ("</article>") : ("</div>"));
            echo "
  ";
            // line 92
            echo ((($context["html5"] ?? null)) ? ("</main>") : ("</div>"));
            echo "

  ";
            // line 95
            echo "  ";
            echo ((($context["html5"] ?? null)) ? ("<footer>") : ("<div class=\"footer\">"));
            echo "
  ";
            // line 96
            $this->displayBlock('footer', $context, $blocks);
            // line 99
            echo "  ";
            echo ((($context["html5"] ?? null)) ? ("</footer>") : ("</div>"));
            echo "

</body>
";
        }
        // line 103
        echo "</html>
";
    }

    // line 34
    public function block_head($context, array $blocks = [])
    {
        // line 35
        echo "  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
  <link rel=\"canonical\" href=\"";
        // line 38
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />

  ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "metadata", []));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 41
            echo "    <meta ";
            if ($this->getAttribute($context["meta"], "name", [])) {
                echo "name=\"";
                echo $this->getAttribute($context["meta"], "name", []);
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "http_equiv", [])) {
                echo "http-equiv=\"";
                echo $this->getAttribute($context["meta"], "http_equiv", []);
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "charset", [])) {
                echo "charset=\"";
                echo $this->getAttribute($context["meta"], "charset", []);
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "property", [])) {
                echo "property=\"";
                echo $this->getAttribute($context["meta"], "property", []);
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "content", [])) {
                echo "content=\"";
                echo $this->getAttribute($context["meta"], "content", []);
                echo "\" ";
            }
            echo "/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
  <title>";
        // line 44
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

  ";
        // line 46
        if ($this->getAttribute(($context["structure"] ?? null), "use_favicon", [])) {
            // line 47
            echo "  <link rel=\"icon\" type=\"image/png\" href=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
            echo "\" />
  ";
        }
        // line 49
        echo "
  ";
        // line 50
        $this->loadTemplate("partials/page/js-css.html.twig", "partials/base.html.twig", 50)->display($context);
    }

    // line 58
    public function block_header($context, array $blocks = [])
    {
        // line 59
        echo "    ";
        $this->loadTemplate("partials/page/header.html.twig", "partials/base.html.twig", 59)->display($context);
        // line 60
        echo "  ";
    }

    // line 72
    public function block_item_head($context, array $blocks = [])
    {
        // line 73
        echo "    ";
        $this->loadTemplate("partials/item/header.html.twig", "partials/base.html.twig", 73)->display($context);
        // line 74
        echo "    ";
    }

    // line 77
    public function block_content($context, array $blocks = [])
    {
        // line 78
        echo "    ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    ";
    }

    // line 82
    public function block_children($context, array $blocks = [])
    {
        // line 83
        echo "    ";
        $this->loadTemplate("partials/item/children.html.twig", "partials/base.html.twig", 83)->display($context);
        // line 84
        echo "    ";
    }

    // line 87
    public function block_item_footer($context, array $blocks = [])
    {
        // line 88
        echo "    ";
        $this->loadTemplate("partials/item/footer.html.twig", "partials/base.html.twig", 88)->display($context);
        // line 89
        echo "    ";
    }

    // line 96
    public function block_footer($context, array $blocks = [])
    {
        // line 97
        echo "    ";
        $this->loadTemplate("partials/page/footer.html.twig", "partials/base.html.twig", 97)->display($context);
        // line 98
        echo "  ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 98,  325 => 97,  322 => 96,  318 => 89,  315 => 88,  312 => 87,  308 => 84,  305 => 83,  302 => 82,  295 => 78,  292 => 77,  288 => 74,  285 => 73,  282 => 72,  278 => 60,  275 => 59,  272 => 58,  268 => 50,  265 => 49,  259 => 47,  257 => 46,  248 => 44,  245 => 43,  212 => 41,  208 => 40,  203 => 38,  198 => 35,  195 => 34,  190 => 103,  182 => 99,  180 => 96,  175 => 95,  170 => 92,  166 => 91,  163 => 90,  160 => 87,  157 => 85,  154 => 82,  151 => 80,  148 => 77,  145 => 75,  142 => 72,  137 => 69,  134 => 68,  131 => 67,  128 => 66,  126 => 65,  121 => 64,  115 => 61,  113 => 58,  108 => 57,  103 => 55,  98 => 52,  96 => 34,  90 => 32,  81 => 25,  71 => 22,  67 => 20,  65 => 19,  59 => 14,  56 => 12,  54 => 11,  53 => 10,  52 => 9,  50 => 8,  49 => 7,  48 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set structure = config.themes.hypertext.structure %}
{% set style = config.themes.hypertext.style %}
{% set menu = config.themes.hypertext.menu %}
{% set html5 = structure.html_mode|default('default') == 'default' %}

{% set allowCSS = page.header.allowCSS == 'enabled' or
                    (page.header.allowCSS|default('default') == 'default' and 
                     style.allowCSS == '1') %}
{% set allowJS  = page.header.allowJS  == 'enabled' or
                    (page.header.allowJS|default('default') == 'default' and 
                     style.allowJS == '1') %}

{# ------------------------------------------------------------------------ #}

<!DOCTYPE html>


{# ## HEADLES RENDERING ## #}
{% if uri.query('headless') %}
<html>
  <head>
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
  </head>
  <body>
  {{ block('content') }}
  </body>
</html>


{% else %}
{# ## ORDINARY RENDER ## #}
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head %}
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
  <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

  {% for meta in page.metadata %}
    <meta {% if meta.name %}name=\"{{ meta.name }}\" {% endif %}{% if meta.http_equiv %}http-equiv=\"{{ meta.http_equiv }}\" {% endif %}{% if meta.charset %}charset=\"{{ meta.charset }}\" {% endif %}{% if meta.property %}property=\"{{ meta.property }}\" {% endif %}{% if meta.content %}content=\"{{ meta.content }}\" {% endif %}/>
  {% endfor %}

  <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

  {% if structure.use_favicon %}
  <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
  {% endif %}

  {% include 'partials/page/js-css.html.twig' %}
{% endblock head %}
</head>


<body class=\"{{ page.template }}{{ page.header.bodyClasses ? ' {{ page.header.bodyClasses }}' : ''}}\">
  {# ## HEADER ## #}
  {{ html5 ? '<header id=\"header\">' : '<div id=\"header\" class=\"header\">' }}
  {% block header %}
    {% include 'partials/page/header.html.twig' %}
  {% endblock %}
  {{ html5 ? '</header>' : '</div>' }}
  
  {# ## BODY ## #}
  {{ html5 ? '<main>' : '<div class=\"main\">' }}
    {% if grav.messages.all %}
      {% include 'partials/page/messages.html.twig' %}
    {% endif %}

    {{ html5 ? '<article>' : '<div class=\"item\">'}}

    {# ARTICLE HEAD #}
    {% block item_head %}
    {% include 'partials/item/header.html.twig' %}
    {% endblock %}

    {# ARTICLE BODY #}
    {% block content %}
    {{ page.content|raw }}
    {% endblock %}

    {# CHILD PAGES #}
    {% block children %}
    {% include 'partials/item/children.html.twig' %}
    {% endblock %}

    {# ARTICLE FOOTER #}
    {% block item_footer %}
    {% include 'partials/item/footer.html.twig' %}
    {% endblock %}

    {{ html5 ? '</article>' : '</div>'}}
  {{ html5 ? '</main>' : '</div>' }}

  {# ## FOOTER ## #}
  {{ html5 ? '<footer>' : '<div class=\"footer\">' }}
  {% block footer %}
    {% include 'partials/page/footer.html.twig' %}
  {% endblock %}
  {{ html5 ? '</footer>' : '</div>' }}

</body>
{% endif %}
</html>
", "partials/base.html.twig", "/srv/grav/user/themes/hypertext/templates/partials/base.html.twig");
    }
}
