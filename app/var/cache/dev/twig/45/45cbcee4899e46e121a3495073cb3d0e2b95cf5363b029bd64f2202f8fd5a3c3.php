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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
";
        // line 5
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "  <body>
  <div class=\"contentWrapper\">
    <div class=\"contentHeader\">
          <p> ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " </p>
    </div>

    <div class=\"itemsWrapper\">
      <div class=\"contentSorting\">
        <li>opcja</li>
        <li>opcja</li>
        <li>opcja</li>
        <li>opcja</li>
        <li>opcja</li>
        <li>opcja</li>
        <li>opcja</li>
      </div>

      <div class=\"contentItems\">

        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 30
            echo "
          <div class=\"item\">
              <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show-one", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">
              <div class=\"itemHeader\">

                   <img class=\"itemHero\" src=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "img", [], "any", false, false, false, 35), "html", null, true);
            echo "\">
                   ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 36), "html", null, true);
            echo "
                  <p>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 37), "html", null, true);
            echo "</p>
              </div>
              </a>
              <div class=\"itemButton\">
                  <button>
                     Kup teraz
                  </button>
              </div>
          </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
      </div>
    </div>
  </div>
  </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 58
        echo "
<style>
  .contentWrapper {
    border: 2px solid red;
    width: 70%;
    height: 3500px;
    margin: 0 auto;
  }
  .contentHeader {
    text-align: center;
    background-color: #218BC3;
    height: 300px;
  }
  .itemsWrapper{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
  }
  .contentSorting {
    border: 2px solid yellow;
    width: 20%;
    height: 500px;
  }
  .contentItems {
    margin-left: 20px;
    flex-wrap: wrap;
    display: flex;
    flex-direction: row;
    border: 2px solid green;
    width: 77.33%;
    height: 500px;
    gap: 20px;
  }
  .item {
      width: 200px;
      height: 400px;
      border: 2px solid black;
      border-style: dotted;
      font-size: 16px;
      cursor: pointer;
  }

  .itemHero {
      width:100%;
  }



  /*<<<<<<NAVIGATION>>>>>>*/

  .nav{
    display:flex;
    font-size:14px;
    text-transform: uppercase;
    transition: color .2s linear;
  }
  .nav_link{
    display: inline-block;
    vertical-align: top;
    margin: 0 15px;
    color:#2c3e50;
    text-decoration: none;
    position: relative;
  }
  .nav_link:after{
    content: \"\";
    display: block;
    width:100%;
    height: 3px;
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1;
    background-color: #2c3e50;

  }
  .nav_link:hover{
    color: #2980b9;
  }

  .dropdown-category-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-category-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }

  .dropdown-category-content a:hover {
    background-color: #ddd;
  }


  .dropdown-category:hover .dropdown-category-content {
    display: block;
    min-height: 200px;}



  .dropdown-age-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-age-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }

  .dropdown-age-content a:hover {
    background-color: #ddd;
  }


  .dropdown-age:hover .dropdown-age-content {
    display: block;
    min-height: 200px;}


</style>



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
        return array (  185 => 58,  175 => 57,  160 => 48,  143 => 37,  139 => 36,  135 => 35,  129 => 32,  125 => 30,  121 => 29,  102 => 13,  97 => 10,  87 => 9,  75 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'index.html.twig' %}

{% block header %}
    <link href=\"{{ asset('css/styles.css') }}\" rel=\"stylesheet\"/>
{{ parent() }}
{% endblock %}


{% block body %}
  <body>
  <div class=\"contentWrapper\">
    <div class=\"contentHeader\">
          <p> {{ name }} </p>
    </div>

    <div class=\"itemsWrapper\">
      <div class=\"contentSorting\">
        <li>opcja</li>
        <li>opcja</li>
        <li>opcja</li>
        <li>opcja</li>
        <li>opcja</li>
        <li>opcja</li>
        <li>opcja</li>
      </div>

      <div class=\"contentItems\">

        {% for item in items %}

          <div class=\"item\">
              <a href=\"{{ path('show-one', {'id':item.id}) }}\">
              <div class=\"itemHeader\">

                   <img class=\"itemHero\" src=\"{{ item.img }}\">
                   {{ item.name }}
                  <p>{{ item.price }}</p>
              </div>
              </a>
              <div class=\"itemButton\">
                  <button>
                     Kup teraz
                  </button>
              </div>
          </div>

        {% endfor %}

      </div>
    </div>
  </div>
  </body>
{% endblock %}



{% block stylesheets %}

<style>
  .contentWrapper {
    border: 2px solid red;
    width: 70%;
    height: 3500px;
    margin: 0 auto;
  }
  .contentHeader {
    text-align: center;
    background-color: #218BC3;
    height: 300px;
  }
  .itemsWrapper{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
  }
  .contentSorting {
    border: 2px solid yellow;
    width: 20%;
    height: 500px;
  }
  .contentItems {
    margin-left: 20px;
    flex-wrap: wrap;
    display: flex;
    flex-direction: row;
    border: 2px solid green;
    width: 77.33%;
    height: 500px;
    gap: 20px;
  }
  .item {
      width: 200px;
      height: 400px;
      border: 2px solid black;
      border-style: dotted;
      font-size: 16px;
      cursor: pointer;
  }

  .itemHero {
      width:100%;
  }



  /*<<<<<<NAVIGATION>>>>>>*/

  .nav{
    display:flex;
    font-size:14px;
    text-transform: uppercase;
    transition: color .2s linear;
  }
  .nav_link{
    display: inline-block;
    vertical-align: top;
    margin: 0 15px;
    color:#2c3e50;
    text-decoration: none;
    position: relative;
  }
  .nav_link:after{
    content: \"\";
    display: block;
    width:100%;
    height: 3px;
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1;
    background-color: #2c3e50;

  }
  .nav_link:hover{
    color: #2980b9;
  }

  .dropdown-category-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-category-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }

  .dropdown-category-content a:hover {
    background-color: #ddd;
  }


  .dropdown-category:hover .dropdown-category-content {
    display: block;
    min-height: 200px;}



  .dropdown-age-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-age-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }

  .dropdown-age-content a:hover {
    background-color: #ddd;
  }


  .dropdown-age:hover .dropdown-age-content {
    display: block;
    min-height: 200px;}


</style>



{% endblock %}





", "Items/items.html.twig", "/var/www/symfony_docker/templates/Items/items.html.twig");
    }
}
