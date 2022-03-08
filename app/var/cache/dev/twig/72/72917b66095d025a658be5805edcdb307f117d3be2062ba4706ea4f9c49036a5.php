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
class __TwigTemplate_147a6cd482d655576b18e0b900536494f25bc1a3b8125fb396282d1c145d8de6 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 13
        echo "g


";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "
";
        // line 70
        echo "
";
        // line 78
        echo "
";
        // line 83
        echo "
";
        // line 85
        echo "
";
        // line 90
        echo "
";
        // line 93
        echo "
";
        // line 99
        echo "
";
        // line 101
        echo "
";
        // line 105
        echo "
";
        // line 113
        echo "
";
        // line 115
        echo "
";
        // line 134
        echo "
";
        // line 136
        echo "
";
        // line 164
        echo "
";
        // line 169
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <title>Homepage</title>
  </head>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "  <body>

  <header class = \"header\">

    <div class = \"container\">
      <div class=\"header_inner\">
        <div class=\"header_logo\">
          <a href=\"/\"><img class=\"header_logo_image\" src=\"https://cdn-icons-png.flaticon.com/512/3819/3819362.png\"></a>
        <div class=\"header_logo\">Peter Pan</div>
        </div>

        <nav class = \"nav\">
          <a class = \"nav_link\" href=\"/\">Home</a>
          <a class = \"nav_link\" href=\"/shop_by_age\">Shop by age</a>
          <a class = \"nav_link\" href=\"/shop_by_category\">Shop by category</a>
          <a class = \"nav_link\" href=\"/contact\">Contact</a>
          <a class = \"nav_link\" href=\"/registration\">Registration</a>


        </nav>
      </div>
    </div>


  </header>

  <div class = \"intro\">
    <div class = \"container\">

      <div class=\"main\">
        <div class=\"main_inner\">

        <a class = \"main_slogan\" href=\"#\">Make your child's dream come true</a>
        </div>
      </div>

    </div>

  </div>

  </body>
</html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  139 => 17,  132 => 16,  120 => 9,  111 => 2,  104 => 1,  96 => 169,  93 => 164,  90 => 136,  87 => 134,  84 => 115,  81 => 113,  78 => 105,  75 => 101,  72 => 99,  69 => 93,  66 => 90,  63 => 85,  60 => 83,  57 => 78,  54 => 70,  51 => 61,  49 => 16,  44 => 13,  42 => 1,);
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
    <link href=\"{{ asset('css/styles.css') }}\" rel=\"stylesheet\"/>
    <title>Homepage</title>
  </head>

{% endblock %}g


{% block body %}
  <body>

  <header class = \"header\">

    <div class = \"container\">
      <div class=\"header_inner\">
        <div class=\"header_logo\">
          <a href=\"/\"><img class=\"header_logo_image\" src=\"https://cdn-icons-png.flaticon.com/512/3819/3819362.png\"></a>
        <div class=\"header_logo\">Peter Pan</div>
        </div>

        <nav class = \"nav\">
          <a class = \"nav_link\" href=\"/\">Home</a>
          <a class = \"nav_link\" href=\"/shop_by_age\">Shop by age</a>
          <a class = \"nav_link\" href=\"/shop_by_category\">Shop by category</a>
          <a class = \"nav_link\" href=\"/contact\">Contact</a>
          <a class = \"nav_link\" href=\"/registration\">Registration</a>


        </nav>
      </div>
    </div>


  </header>

  <div class = \"intro\">
    <div class = \"container\">

      <div class=\"main\">
        <div class=\"main_inner\">

        <a class = \"main_slogan\" href=\"#\">Make your child's dream come true</a>
        </div>
      </div>

    </div>

  </div>

  </body>
</html>

{% endblock %}

{#{% block stylesheets %}#}
{#  <style>#}
{#    body{#}
{#      margin:0;#}
{#      font-size:15px;#}
{#      line-height:1.6;#}
{#      color:#333;#}
{#    }#}

{#    :before,#}
{#    :after{#}
{#      box-sizing:border-box;#}
{#    }#}
{#    h1,h2,h3,h4.h5,h6{#}
{#      margin: 0;#}
{#    }#}

{#    .container{#}
{#      width: 100%;#}
{#      max-width: 1200px;#}
{#      margin: 0 auto;#}

{#    }#}

{#    .intro{#}
{#      display: flex;#}
{#      flex-direction: column;#}
{#      justify-content: center;#}

{#      width: 100%;#}
{#      height: 100vh;#}

{#      background:#}
{#    /*  url(\"https://images.pexels.com/photos/255514/pexels-photo-255514.jpeg?cs=srgb&dl=pexels-pixabay-255514.jpg&fm=jpg\")*/#}
{#    /*center no-repeat;*/#}
{#      -webkit-background-size: cover;#}
{#      background-size:cover;#}

{#    }#}

{#    .main_inner{#}
{#      width: 100%;#}
{#      max-width: 880px;#}

{#    }#}
{#    .main_slogan{#}
{#      color:#2c3e50;#}
{#      text-decoration: none;#}
{#      font-size: 55px;#}
{#      font-weight: 700;#}
{#      text-transform: uppercase;#}

{#    }#}

{#    .header{#}
{#      position:absolute;#}
{#      top:0;#}
{#      left:0;#}
{#      right:0;#}
{#      z-index: 1000;#}
{#    }#}
{#    .header_inner{#}
{#      display:flex;#}
{#      justify-content: space-between;#}
{#      align-items: center;#}
{#    }#}
{#    .header_logo{#}
{#      display: inline-block;#}
{#      vertical-align: center;#}
{#      font-size:30px;#}
{#      font-weight:700;#}
{#      color:#2c3e50;#}

{#    }#}

{#    .header_logo_image{#}
{#      vertical-align: center;#}
{#      width: 100px;#}
{#    }#}
{#    .nav{#}
{#      font-size:14px;#}
{#      text-transform: uppercase;#}
{#      transition: color .2s linear;#}
{#    }#}
{#    .nav_link{#}
{#      display: inline-block;#}
{#      vertical-align: top;#}
{#      margin: 0 15px;#}
{#      color:#2c3e50;#}
{#      text-decoration: none;#}
{#      position: relative;#}
{#    }#}
{#    .nav_link:after{#}
{#      content: \"\";#}
{#      display: block;#}
{#      width:100%;#}
{#      height: 3px;#}
{#      position: absolute;#}
{#      top: 100%;#}
{#      left: 0;#}
{#      z-index: 1;#}
{#      background-color: #2c3e50;#}

{#    }#}
{#    .nav_link:hover{#}
{#      color: #2980b9;#}
{#    }#}

{#  </style>#}
{#{% endblock %}#}
", "index.html.twig", "/var/www/symfony_docker/templates/index.html.twig");
    }
}
