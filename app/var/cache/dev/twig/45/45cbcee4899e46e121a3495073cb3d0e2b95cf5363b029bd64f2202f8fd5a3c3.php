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

/* Items/items.html.twig */
class __TwigTemplate_54e5183d895563b14b4d57d4fbad72fb75cd049813343ab8f66f89f8410d4481 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Items/items.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Items/items.html.twig"));

        $this->parent = $this->loadTemplate("index.html.twig", "Items/items.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/root.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/item.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
";
        // line 6
        $this->displayParentBlock("header", $context, $blocks);
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <body>
  <div class=\"container\">
    <div class=\"content_header\">
        <div class=\"content_name\">

            <p class = \"content_name_text\"> ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["category_name"]) || array_key_exists("category_name", $context) ? $context["category_name"] : (function () { throw new RuntimeError('Variable "category_name" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " </p>


        </div>
    </div>

    <div class=\"items_wrapper\">
      <div class=\"content_sorting\">
          <div class=\"list_name\">
          <p class = \"list_name_text\">";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "</p>
          </div>
          ";
        // line 29
        if (((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 29, $this->source); })()) == "By category")) {
            // line 30
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 31
                echo "              <div class=\"category_name_list\">
                  <div class=\"list_mark\">
                  <img class = \"list_mark\" src=\"https://img.icons8.com/material-rounded/24/000000/sort-right.png\"/>
                  </div>
              <li class = \"category_name\"> <a class = \"category_name\" href=\"";
                // line 35
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 35));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 35), "html", null, true);
                echo "</a></li>

              </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "          ";
        } else {
            // line 40
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ages"]) || array_key_exists("ages", $context) ? $context["ages"] : (function () { throw new RuntimeError('Variable "ages" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["age"]) {
                // line 41
                echo "                  <div class=\"category_name_list\">
                      <div class=\"list_mark\">
                          <img class = \"list_mark\" src=\"https://img.icons8.com/material-rounded/24/000000/sort-right.png\"/>
                      </div>
                      <li class = \"category_name\"> <a class = \"category_name\" href=\"";
                // line 45
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["age"], "name", [], "any", false, false, false, 45));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["age"], "name", [], "any", false, false, false, 45), "html", null, true);
                echo "</a></li>

                  </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['age'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "

          ";
        }
        // line 52
        echo "      </div>

        <div class=\"content_items\">
            ";
        // line 55
        if ((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 55, $this->source); })())) {
            // line 56
            echo "
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 57, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 58
                echo "                <div class=\"item\">
                    <a class = \"item_content\" href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show-one", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                echo "\">
                        <div class=\"item_image\">
                            <img class = \"item_image_content\"src=\"";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "img", [], "any", false, false, false, 61), "html", null, true);
                echo "\" alt=\"\">
                        </div>
                        <div class=\"item_name\">
                            <p class = \"item_name_text\">";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 64), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"item_price\">
                            <p class = \"item_price_text\">";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 67), "html", null, true);
                echo "</p>
                        </div>
                    </a>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                ";
        } else {
            // line 73
            echo "                <p>No items</p>
            ";
        }
        // line 75
        echo "
        </div>
      </div>
    </div>
  
  </div>
  </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Items/items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 75,  230 => 73,  227 => 72,  216 => 67,  210 => 64,  204 => 61,  199 => 59,  196 => 58,  192 => 57,  189 => 56,  187 => 55,  182 => 52,  177 => 49,  165 => 45,  159 => 41,  154 => 40,  151 => 39,  139 => 35,  133 => 31,  128 => 30,  126 => 29,  121 => 27,  109 => 18,  102 => 13,  92 => 12,  78 => 6,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'index.html.twig' %}

{% block header %}
    <link href=\"{{ asset('css/root.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('css/item.css') }}\" rel=\"stylesheet\"/>
{{ parent() }}


{% endblock %}


{% block body %}
  <body>
  <div class=\"container\">
    <div class=\"content_header\">
        <div class=\"content_name\">

            <p class = \"content_name_text\"> {{ category_name }} </p>


        </div>
    </div>

    <div class=\"items_wrapper\">
      <div class=\"content_sorting\">
          <div class=\"list_name\">
          <p class = \"list_name_text\">{{ name }}</p>
          </div>
          {% if name == 'By category' %}
          {% for category in categories %}
              <div class=\"category_name_list\">
                  <div class=\"list_mark\">
                  <img class = \"list_mark\" src=\"https://img.icons8.com/material-rounded/24/000000/sort-right.png\"/>
                  </div>
              <li class = \"category_name\"> <a class = \"category_name\" href=\"{{ path(category.name) }}\">{{ category.name }}</a></li>

              </div>
          {% endfor %}
          {% else %}
              {% for age in ages %}
                  <div class=\"category_name_list\">
                      <div class=\"list_mark\">
                          <img class = \"list_mark\" src=\"https://img.icons8.com/material-rounded/24/000000/sort-right.png\"/>
                      </div>
                      <li class = \"category_name\"> <a class = \"category_name\" href=\"{{ path(age.name) }}\">{{ age.name }}</a></li>

                  </div>
              {% endfor %}


          {% endif %}
      </div>

        <div class=\"content_items\">
            {% if items %}

            {% for item in items %}
                <div class=\"item\">
                    <a class = \"item_content\" href=\"{{ path('show-one', {'id':item.id}) }}\">
                        <div class=\"item_image\">
                            <img class = \"item_image_content\"src=\"{{ item.img }}\" alt=\"\">
                        </div>
                        <div class=\"item_name\">
                            <p class = \"item_name_text\">{{ item.name }}</p>
                        </div>
                        <div class=\"item_price\">
                            <p class = \"item_price_text\">{{ item.price }}</p>
                        </div>
                    </a>
                </div>
            {% endfor %}
                {% else %}
                <p>No items</p>
            {% endif %}

        </div>
      </div>
    </div>
  
  </div>
  </body>
{% endblock %}







", "Items/items.html.twig", "/var/www/symfony_docker/templates/Items/items.html.twig");
    }
}
