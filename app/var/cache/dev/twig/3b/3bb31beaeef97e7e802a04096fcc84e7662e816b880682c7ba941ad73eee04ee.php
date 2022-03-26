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

/* Items/show.html.twig */
class __TwigTemplate_e82d09cb7a4b5cd67c23b9c9d7cc8871aabe4beda6ff5b78a109e55ff0956f08 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Items/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Items/show.html.twig"));

        $this->parent = $this->loadTemplate("index.html.twig", "Items/show.html.twig", 1);
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
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"item_image\">
                <div class=\"image\">
                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "img", [], "any", false, false, false, 13), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>
            <div class=\"item_inf\">
                <div class=\"item_name\">
                    <h1>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "</h1>
                </div>
                <div class=\"add_review\">
                    <div class=\"review-button\">
                    <a class=\"review_text\" href=\"#\">Add review</a>
                    </div>
                </div>
                <div class=\"price\">
                    <p>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 26, $this->source); })()), "price", [], "any", false, false, false, 26), "html", null, true);
        echo "\$</p>
                </div>
                <div class=\"buy_now\">
                    <div class=\"buy_now_button\">
                    <a href=\"#\">Buy now</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 40
        echo "
    <style>

        .row{
            display: flex;
            border: dashed black;
        }

        .item_image{
            width: 40%;
        }

        .item_inf{
            width: 60%;
            display: flex;
            flex-direction: column;
        }

        .item_name{
            padding-top: 50px ;
            height: 48%;
            padding-left: 20px;
            font-size:25px

        }
        .add_review{

            border-top: 2px solid #D1D1D1;
            border-bottom: 2px solid #D1D1D1;
            height: 18%;
            margin-top: 25px;
            padding-left:20px;
            font-size: 25px;
        }

        .review-button {
            width:26%;
            text-align: center;
            margin-top:10px;
            margin-bottom: 10px;
            border-radius: 25px;
            background-color: #47B1C9;
            color:white;


        }

        .review_text {
            color: white;
            text-decoration: none;
            font-size: 23px;

        }

        .price{

            height: 18%;
            padding:  0;
            text-align: center;
            font-size: 30px;
        }
        .buy_now{
           
            height: 18%;
            padding: 20px 0;
            text-align: center;
        }
        .buy_now_button{
        }


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
        return "Items/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 40,  141 => 39,  119 => 26,  108 => 18,  100 => 13,  94 => 9,  84 => 8,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'index.html.twig' %}

{% block header %}
    {{ parent() }}

{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"item_image\">
                <div class=\"image\">
                    <img src=\"{{ item.img }}\" alt=\"\">
                </div>
            </div>
            <div class=\"item_inf\">
                <div class=\"item_name\">
                    <h1>{{ item.name }}</h1>
                </div>
                <div class=\"add_review\">
                    <div class=\"review-button\">
                    <a class=\"review_text\" href=\"#\">Add review</a>
                    </div>
                </div>
                <div class=\"price\">
                    <p>{{ item.price }}\$</p>
                </div>
                <div class=\"buy_now\">
                    <div class=\"buy_now_button\">
                    <a href=\"#\">Buy now</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
{% endblock %}

{% block stylesheets %}

    <style>

        .row{
            display: flex;
            border: dashed black;
        }

        .item_image{
            width: 40%;
        }

        .item_inf{
            width: 60%;
            display: flex;
            flex-direction: column;
        }

        .item_name{
            padding-top: 50px ;
            height: 48%;
            padding-left: 20px;
            font-size:25px

        }
        .add_review{

            border-top: 2px solid #D1D1D1;
            border-bottom: 2px solid #D1D1D1;
            height: 18%;
            margin-top: 25px;
            padding-left:20px;
            font-size: 25px;
        }

        .review-button {
            width:26%;
            text-align: center;
            margin-top:10px;
            margin-bottom: 10px;
            border-radius: 25px;
            background-color: #47B1C9;
            color:white;


        }

        .review_text {
            color: white;
            text-decoration: none;
            font-size: 23px;

        }

        .price{

            height: 18%;
            padding:  0;
            text-align: center;
            font-size: 30px;
        }
        .buy_now{
           
            height: 18%;
            padding: 20px 0;
            text-align: center;
        }
        .buy_now_button{
        }


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



{% endblock %}", "Items/show.html.twig", "/var/www/symfony_docker/templates/Items/show.html.twig");
    }
}
