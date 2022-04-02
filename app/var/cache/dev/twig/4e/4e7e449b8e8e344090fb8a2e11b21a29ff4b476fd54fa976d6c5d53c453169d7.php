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

/* Items/cart.html.twig */
class __TwigTemplate_c2a96f1c1b24fba9b3a3e2293cfc5fa2c1e6a44937f4512b90840ebe69edae3e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Items/cart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Items/cart.html.twig"));

        $this->parent = $this->loadTemplate("index.html.twig", "Items/cart.html.twig", 1);
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
";
        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/cart.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    ";
        // line 7
        $this->displayParentBlock("header", $context, $blocks);
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <body>
    <div class=\"container\">
        <div class=\"items_wrapper\">
            <div class=\"content_items\">

                    ";
        // line 17
        if ((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 19
                echo "                            <div class=\"item\">
                                <a class = \"item_content\" href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show-one", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 20)]), "html", null, true);
                echo "\">
                                    <div class=\"item_image\">
                                        <img class = \"item_image_content\"src=\"";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "img", [], "any", false, false, false, 22), "html", null, true);
                echo "\" alt=\"\">
                                    </div>

                                    <div class=\"item_information\">
                                    <div class=\"item_name\">
                                        <p class = \"item_name_text\">";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 27), "html", null, true);
                echo "</p>
                                    </div>
                                        <form  class = \"remove_button\" method=\"post\" >
                                            <input type = \"hidden\" name = \"item_id\" value = \"";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 30), "html", null, true);
                echo "\">
                                            <button onclick = \"removeItem()\" type = \"submit\" name = \"action\" value=\"remove_from_cart\">Remove</button>
                                        </form>
                                    </div>

                                    <div class=\"item_price\">
                                        <p class = \"item_price_text\">";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 36), "html", null, true);
                echo "\$</p>
                                    </div>




                                </a>

                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "
                        <span class=\"total\">
                                        <p>Total: ";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 48, $this->source); })()), "html", null, true);
            echo "\$</p>
                                    </span>
                    ";
        } else {
            // line 51
            echo "                        <p>No items in cart</p>
                    ";
        }
        // line 53
        echo "
            </div>
        </div>


    </div>
    <script>
        function removeItem()
        {
            alert('Removed from list');
        }
    </script>
    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Items/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 53,  173 => 51,  167 => 48,  163 => 46,  147 => 36,  138 => 30,  132 => 27,  124 => 22,  119 => 20,  116 => 19,  111 => 18,  109 => 17,  102 => 12,  92 => 11,  79 => 7,  74 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'index.html.twig' %}

{% block header %}
    <link href=\"{{ asset('css/root.css') }}\" rel=\"stylesheet\"/>
{#    <link href=\"{{ asset('css/item.css') }}\" rel=\"stylesheet\"/>#}
    <link href=\"{{ asset('css/cart.css') }}\" rel=\"stylesheet\"/>
    {{ parent() }}

{% endblock %}

{% block body %}
    <body>
    <div class=\"container\">
        <div class=\"items_wrapper\">
            <div class=\"content_items\">

                    {% if items  %}
                        {% for item in items %}
                            <div class=\"item\">
                                <a class = \"item_content\" href=\"{{ path('show-one', {'id':item.id}) }}\">
                                    <div class=\"item_image\">
                                        <img class = \"item_image_content\"src=\"{{ item.img }}\" alt=\"\">
                                    </div>

                                    <div class=\"item_information\">
                                    <div class=\"item_name\">
                                        <p class = \"item_name_text\">{{ item.name }}</p>
                                    </div>
                                        <form  class = \"remove_button\" method=\"post\" >
                                            <input type = \"hidden\" name = \"item_id\" value = \"{{ item.id }}\">
                                            <button onclick = \"removeItem()\" type = \"submit\" name = \"action\" value=\"remove_from_cart\">Remove</button>
                                        </form>
                                    </div>

                                    <div class=\"item_price\">
                                        <p class = \"item_price_text\">{{ item.price }}\$</p>
                                    </div>




                                </a>

                            </div>
                        {% endfor %}

                        <span class=\"total\">
                                        <p>Total: {{ total }}\$</p>
                                    </span>
                    {% else %}
                        <p>No items in cart</p>
                    {% endif %}

            </div>
        </div>


    </div>
    <script>
        function removeItem()
        {
            alert('Removed from list');
        }
    </script>
    </body>
{% endblock %}



", "Items/cart.html.twig", "/var/www/symfony_docker/templates/Items/cart.html.twig");
    }
}
