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
class __TwigTemplate_8f35fad39974a978b8ca17be9ac01b707ac42617bf879b1faf62c33d8b93cd7c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Items/items.html.twig"));

        $this->parent = $this->loadTemplate("index.html.twig", "Items/items.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <div class = \"intro_items\">
    <div class=\"container\">
      <div class=\"items_inner\">
        <div class=\"intro_bar\">

          <h1>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</h1>

        </div>
        <div class=\"sorting_bar\"></div>

        <div class=\"items_bar\">

          ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "img", [], "any", false, false, false, 18), "html", null, true);
            echo "\">
            <p> ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "


         ";
        // line 28
        echo "        </div>


      </div>



    </div>
  </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  99 => 28,  94 => 21,  86 => 19,  81 => 18,  77 => 17,  67 => 10,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'index.html.twig' %}

{% block body %}

  <div class = \"intro_items\">
    <div class=\"container\">
      <div class=\"items_inner\">
        <div class=\"intro_bar\">

          <h1>{{ name }}</h1>

        </div>
        <div class=\"sorting_bar\"></div>

        <div class=\"items_bar\">

          {% for item in items %}
            <img src=\"{{ item.img }}\">
            <p> {{ item.name }}</p>
          {% endfor %}



         {#  {% for legoItem in legoItems %}
            <img src=\"{{ legoItem.img }}\">
            <p> {{ legoItem.name }}</p>
          {% endfor %}#}
        </div>


      </div>



    </div>
  </div>

{% endblock %}


{#<h1>Items</h1>
      {% if type is defined  %}

        {% if type == 'shoptoys' %}
          <h1>Shop Toys</h1>
        {% elseif type == 'byage'%}
          <h1>By Age</h1>
        {% elseif type == 'bybrand'%}
          <h1>By brand</h1>
        {% else %}
          <h1>Page not found!</h1>
        {% endif %}
      {% else %}
        <h1>Page not found!</h1>
      {% endif %}#}


{#1 - intro_bar
  2 - sorting_bar
  3 - items_bar#}






", "Items/items.html.twig", "/var/www/symfony_docker/templates/Items/items.html.twig");
    }
}
