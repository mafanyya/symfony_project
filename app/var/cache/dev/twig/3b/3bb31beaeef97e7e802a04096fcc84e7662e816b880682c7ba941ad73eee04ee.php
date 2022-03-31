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
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/root.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/show.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <head>
        <title>Buy ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "</title>
    </head>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <body>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"item_image\">
                <div class=\"image_content\">
                    <img class = \"image\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 19, $this->source); })()), "img", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"item_inf\">
                <div class=\"item_name\">
                    <h1 class = \"item_name_text\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "</h1>
                </div>
                <div class=\"add_review\">
                    <a  class = review_link href=\"#comments\">
                    <div class=\"review_button\">
                    <p class=\"review_text\" >Add review</p>
                    </div>
                    </a>
                    <div class=\"stars\">
";
        // line 34
        echo "                        <img class = \"star\" src=\"https://img.icons8.com/fluency-systems-regular/48/000000/rating.png\"/>
                        <img class = \"star\" src=\"https://img.icons8.com/fluency-systems-regular/48/000000/rating.png\"/>
                        <img class = \"star\" src=\"https://img.icons8.com/fluency-systems-regular/48/000000/rating.png\"/>
                        <img class = \"star\" src=\"https://img.icons8.com/fluency-systems-regular/48/000000/rating.png\"/>
                        <img class = \"star\" src=\"https://img.icons8.com/fluency-systems-regular/48/000000/rating.png\"/>
                    </div>
                </div>
                <div class=\"price\">
                    <p class = \"price_text\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 42, $this->source); })()), "price", [], "any", false, false, false, 42), "html", null, true);
        echo "\$</p>
                </div>
                <div class=\"buy_now\">
                    <div class=\"buy_button\">
                    <a class = \"buy_button_text\" href=\"#\">Buy now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"details_name\">
                <p class = \"details_name_text\">Details</p>
            </div>
            <div class=\"details_description\">
                <p class = \"details_description_text\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 56, $this->source); })()), "description", [], "any", false, false, false, 56), "html", null, true);
        echo "</p>
            </div>
        </div>

            <div class=\"row\">
                <div class=\"comment_form\">
                    <div class=\"form_name\">
                        <p id = \"comments\" class = \"form_name_text\">Add review</p>
                    </div>
                    <form  method=\"post\">
                        <div class=\"comment_form_inner\">
                        <div class=\"form_email\">
                            <label for=\"email\">email</label>
                            <input  class = \"email_input\" id = \"email\" type=\"email\" name=\"email\">
                        </div>
                        <div class=\"form_comment\">
                            <label for=\"comment\">comment</label>
                            <input  class = \"comment_input\" id = \"comment\" type=\"text\" name=\"comment\">
                        </div>
                        <div class=\"form_rating\">
                            <input type=\"radio\" id = \"1\" name = \"rating\" value = \"1\">
                            <label for=\"1\">1</label>
                            <input type=\"radio\" id = \"2\" name = \"rating\" value = \"2\">
                            <label for=\"1\">2</label>
                            <input type=\"radio\" id = \"3\" name = \"rating\" value = \"3\">
                            <label for=\"1\">3</label>
                            <input type=\"radio\" id = \"4\" name = \"rating\" value = \"4\">
                            <label for=\"1\">4</label>
                            <input type=\"radio\" id = \"5\" name = \"rating\" value = \"5\">
                            <label for=\"1\">5</label>

";
        // line 92
        echo "
";
        // line 94
        echo "                        </div>
                        <div class=\"form_button\">
                        <button type=\"submit\">Post Review</button>
                        </div>

                            ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 99));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 100
            echo "                                <div class=\"flash-notice\">
                                    ";
            // line 101
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                        </div>
                    </form>
                </div>
            </div>


        <div class=\"row\">
            <div  class=\"comments\">
                <div class=\"comments_name\">
                    <p>Reviews</p>
                </div>
                ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 115, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 116
            echo "                    <div class=\"comment\">
                        <div class=\"comment_email\">
                            ";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "email", [], "any", false, false, false, 118), "html", null, true);
            echo "
                        </div>
                        <div class=\"comment_content\">
                            ";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 121), "html", null, true);
            echo "
                        </div>
                        <div class=\"rating_content\">
                            <p>
                                rating: ";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "rating", [], "any", false, false, false, 125), "html", null, true);
            echo "
                            </p>

                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "            </div>
        </div>
    </div>
    </body>

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
        return array (  267 => 131,  255 => 125,  248 => 121,  242 => 118,  238 => 116,  234 => 115,  221 => 104,  212 => 101,  209 => 100,  205 => 99,  198 => 94,  195 => 92,  161 => 56,  144 => 42,  134 => 34,  122 => 24,  114 => 19,  107 => 14,  97 => 13,  83 => 8,  78 => 6,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'index.html.twig' %}

{% block header %}
    {{ parent() }}
    <link href=\"{{ asset('css/root.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('css/show.css') }}\" rel=\"stylesheet\"/>
    <head>
        <title>Buy {{ item.name }}</title>
    </head>

{% endblock %}

{% block body %}
    <body>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"item_image\">
                <div class=\"image_content\">
                    <img class = \"image\" src=\"{{ item.img }}\">
                </div>
            </div>
            <div class=\"item_inf\">
                <div class=\"item_name\">
                    <h1 class = \"item_name_text\">{{ item.name }}</h1>
                </div>
                <div class=\"add_review\">
                    <a  class = review_link href=\"#comments\">
                    <div class=\"review_button\">
                    <p class=\"review_text\" >Add review</p>
                    </div>
                    </a>
                    <div class=\"stars\">
{#                        <img src=\"https://img.icons8.com/external-xnimrodx-lineal-xnimrodx/64/000000/external-rating-customer-service-xnimrodx-lineal-xnimrodx.png\"/>#}
                        <img class = \"star\" src=\"https://img.icons8.com/fluency-systems-regular/48/000000/rating.png\"/>
                        <img class = \"star\" src=\"https://img.icons8.com/fluency-systems-regular/48/000000/rating.png\"/>
                        <img class = \"star\" src=\"https://img.icons8.com/fluency-systems-regular/48/000000/rating.png\"/>
                        <img class = \"star\" src=\"https://img.icons8.com/fluency-systems-regular/48/000000/rating.png\"/>
                        <img class = \"star\" src=\"https://img.icons8.com/fluency-systems-regular/48/000000/rating.png\"/>
                    </div>
                </div>
                <div class=\"price\">
                    <p class = \"price_text\">{{ item.price }}\$</p>
                </div>
                <div class=\"buy_now\">
                    <div class=\"buy_button\">
                    <a class = \"buy_button_text\" href=\"#\">Buy now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"details_name\">
                <p class = \"details_name_text\">Details</p>
            </div>
            <div class=\"details_description\">
                <p class = \"details_description_text\">{{ item.description }}</p>
            </div>
        </div>

            <div class=\"row\">
                <div class=\"comment_form\">
                    <div class=\"form_name\">
                        <p id = \"comments\" class = \"form_name_text\">Add review</p>
                    </div>
                    <form  method=\"post\">
                        <div class=\"comment_form_inner\">
                        <div class=\"form_email\">
                            <label for=\"email\">email</label>
                            <input  class = \"email_input\" id = \"email\" type=\"email\" name=\"email\">
                        </div>
                        <div class=\"form_comment\">
                            <label for=\"comment\">comment</label>
                            <input  class = \"comment_input\" id = \"comment\" type=\"text\" name=\"comment\">
                        </div>
                        <div class=\"form_rating\">
                            <input type=\"radio\" id = \"1\" name = \"rating\" value = \"1\">
                            <label for=\"1\">1</label>
                            <input type=\"radio\" id = \"2\" name = \"rating\" value = \"2\">
                            <label for=\"1\">2</label>
                            <input type=\"radio\" id = \"3\" name = \"rating\" value = \"3\">
                            <label for=\"1\">3</label>
                            <input type=\"radio\" id = \"4\" name = \"rating\" value = \"4\">
                            <label for=\"1\">4</label>
                            <input type=\"radio\" id = \"5\" name = \"rating\" value = \"5\">
                            <label for=\"1\">5</label>

{#                            <button type = button name = \"rating\" id = \"rating1\" value = \"1\" >1</button>#}
{#                            <button type = button name = \"rating\" id = \"rating3\" value = \"2\" >2</button>#}
{#                            <button type = button name = \"rating\" id = \"rating4\" value = \"3\" >3</button>#}
{#                            <button type = button name = \"rating\" id = \"rating5\" value = \"4\" >4</button>#}
{#                            <button type = button name = \"rating\" id = \"rating6\" value = \"5\" >5</button>#}

{#                            <input  class = \"rating_input\" id = \"rating\" type=\"int\" name=\"rating\">#}
                        </div>
                        <div class=\"form_button\">
                        <button type=\"submit\">Post Review</button>
                        </div>

                            {% for message in app.flashes('notice') %}
                                <div class=\"flash-notice\">
                                    {{ message }}
                                </div>
                            {% endfor %}
                        </div>
                    </form>
                </div>
            </div>


        <div class=\"row\">
            <div  class=\"comments\">
                <div class=\"comments_name\">
                    <p>Reviews</p>
                </div>
                {% for comment in comments %}
                    <div class=\"comment\">
                        <div class=\"comment_email\">
                            {{ comment.email }}
                        </div>
                        <div class=\"comment_content\">
                            {{ comment.comment }}
                        </div>
                        <div class=\"rating_content\">
                            <p>
                                rating: {{ comment.rating }}
                            </p>

                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
    </body>

{% endblock %}

", "Items/show.html.twig", "/var/www/symfony_docker/templates/Items/show.html.twig");
    }
}
