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

/* index.html.twig */
class __TwigTemplate_dc42c28b5b0934b304ec9959604201f0d4cb2951d991751cc018b04508058bca extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('header', $context, $blocks);
        // line 80
        echo "
  ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 99
        echo "


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 2
        echo "  <!doctype html>
  <html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/root.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>


      <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
      <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
      <link href=\"https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap\" rel=\"stylesheet\">
     <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">

    <title>";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "</title>
  </head>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "    <header class = \"header\">
        <div class=\"container\">
            <div class=\"header_inner\">
              <div class=\"header_logo\">
                <a href=\"/\"><img class = \"logo\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\">
                </a>
              </div>
                <nav class = \"nav\">
                  <div class=\"nav_inner\">
                  <a class = \"nav_link\" href=\"/\"><p class = \"nav_link_text\">Home</p></a>
                  <div class=\"dropdown-category\">
                    <a class = \"nav_link \" href=\"/by-category\"><p class = \"nav_link_text\">By category</p></a>
                    <div class=\"dropdown-category-content\">
                      <a href=\"/by-category/action-figures\">action figures</a>
                      <a href=\"/by-category/baby-and-preschool-toys\">baby and preschool toys</a>
                      <a href=\"/by-category/bikes-and-scooters\">bikes and scooters</a>
                      <a href=\"/by-category/building-sets\">building sets</a>
                      <a href=\"/by-category/dolls-and-stuffed-animals\">dolls and stuffed animals</a>
                      <a href=\"/by-category/games-and-puzzles\">games and puzzles</a>
                      <a href=\"/by-category/arts-and-crafts\">arts and crafts</a>
                      <a href=\"/by-category/learning\">learning</a>
                      <a href=\"/by-category/outdoor-play\">outdoor play</a>
                      <a href=\"/by-category/pretend-play\">pretend play</a>
                      <a href=\"/by-category/steam-toys\">steam toys</a>
                      <a href=\"/by-category/remote-control-toys\">remote control toys</a>
                    </div>
                  </div>
                  <div class=\"dropdown-age\">
                    <a class = \"nav_link \" href=\"/by-age\"><p class = \"nav_link_text\">By age</p></a>
                    <div class=\"dropdown-age-content\">
                      <a href=\"/by-age/0--2-years\">0-24 months</a>
                      <a href=\"/by-age/3--4-years\">3-4 years</a>
                      <a href=\"/by-age/5--7-years\">5-7 years</a>
                      <a href=\"/by-age/8--10-years\">8-10 years</a>
                      <a href=\"/by-age/11-years-and-up\">11+ years</a>
                    </div>
                  </div>

                  <a class = \"nav_link\" href=\"/hot-deals\"><p class = \"nav_link_text\">Hot deals</p></a>


                  <div class=\"reg_nav\">
                    <a class = \"reg_link\" href=\"/register\"><p class = \"nav_link_text\">Sign Up</p></a>
                    <a class = \"reg_link\" href=\"/login\"><p class = \"nav_link_text\">Log In</p></a>

                  </div>
                    <a class = \"nav_link\" href=\"/cart\"><p class = \"nav_link_text icon\">&#xF180</p></a>
                  </div>

                </nav>
            </div>
        </div>
    </header>
      </div>
    </div>
  </header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 82
        echo "  <body>
  <div class = \"intro\">
    <div class = \"container\">

      <div class=\"main\">
        <div class=\"main_inner\" style=\"font-family: bootstrap-icons\">



        <a class = \"main_slogan\" href=\"#\">  &#xF586 Make your child's dream come true</a>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  207 => 82,  197 => 81,  134 => 27,  128 => 23,  118 => 22,  105 => 18,  94 => 10,  90 => 9,  81 => 2,  71 => 1,  58 => 99,  56 => 81,  53 => 80,  51 => 22,  48 => 21,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
  <!doctype html>
  <html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link href=\"{{ asset('css/root.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('css/index.css') }}\" rel=\"stylesheet\"/>


      <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
      <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
      <link href=\"https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap\" rel=\"stylesheet\">
     <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">

    <title>{{ name }}</title>
  </head>
{% endblock %}

{% block header %}
    <header class = \"header\">
        <div class=\"container\">
            <div class=\"header_inner\">
              <div class=\"header_logo\">
                <a href=\"/\"><img class = \"logo\" src=\"{{ asset('images/logo.png') }}\">
                </a>
              </div>
                <nav class = \"nav\">
                  <div class=\"nav_inner\">
                  <a class = \"nav_link\" href=\"/\"><p class = \"nav_link_text\">Home</p></a>
                  <div class=\"dropdown-category\">
                    <a class = \"nav_link \" href=\"/by-category\"><p class = \"nav_link_text\">By category</p></a>
                    <div class=\"dropdown-category-content\">
                      <a href=\"/by-category/action-figures\">action figures</a>
                      <a href=\"/by-category/baby-and-preschool-toys\">baby and preschool toys</a>
                      <a href=\"/by-category/bikes-and-scooters\">bikes and scooters</a>
                      <a href=\"/by-category/building-sets\">building sets</a>
                      <a href=\"/by-category/dolls-and-stuffed-animals\">dolls and stuffed animals</a>
                      <a href=\"/by-category/games-and-puzzles\">games and puzzles</a>
                      <a href=\"/by-category/arts-and-crafts\">arts and crafts</a>
                      <a href=\"/by-category/learning\">learning</a>
                      <a href=\"/by-category/outdoor-play\">outdoor play</a>
                      <a href=\"/by-category/pretend-play\">pretend play</a>
                      <a href=\"/by-category/steam-toys\">steam toys</a>
                      <a href=\"/by-category/remote-control-toys\">remote control toys</a>
                    </div>
                  </div>
                  <div class=\"dropdown-age\">
                    <a class = \"nav_link \" href=\"/by-age\"><p class = \"nav_link_text\">By age</p></a>
                    <div class=\"dropdown-age-content\">
                      <a href=\"/by-age/0--2-years\">0-24 months</a>
                      <a href=\"/by-age/3--4-years\">3-4 years</a>
                      <a href=\"/by-age/5--7-years\">5-7 years</a>
                      <a href=\"/by-age/8--10-years\">8-10 years</a>
                      <a href=\"/by-age/11-years-and-up\">11+ years</a>
                    </div>
                  </div>

                  <a class = \"nav_link\" href=\"/hot-deals\"><p class = \"nav_link_text\">Hot deals</p></a>


                  <div class=\"reg_nav\">
                    <a class = \"reg_link\" href=\"/register\"><p class = \"nav_link_text\">Sign Up</p></a>
                    <a class = \"reg_link\" href=\"/login\"><p class = \"nav_link_text\">Log In</p></a>

                  </div>
                    <a class = \"nav_link\" href=\"/cart\"><p class = \"nav_link_text icon\">&#xF180</p></a>
                  </div>

                </nav>
            </div>
        </div>
    </header>
      </div>
    </div>
  </header>
{% endblock %}

  {% block body %}
  <body>
  <div class = \"intro\">
    <div class = \"container\">

      <div class=\"main\">
        <div class=\"main_inner\" style=\"font-family: bootstrap-icons\">



        <a class = \"main_slogan\" href=\"#\">  &#xF586 Make your child's dream come true</a>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>
{% endblock %}



", "index.html.twig", "/var/www/symfony_docker/templates/index.html.twig");
    }
}
