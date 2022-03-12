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

/* shop_by_category.html.twig */
class __TwigTemplate_4136443b233ae120cdb8a116b58df95c22c86f9a40243825b538994cdb2bf504 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop_by_category.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 17
        echo "g


";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 65
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
  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Ribeye&family=Righteous&display=swap\" rel=\"stylesheet\">

  <title>Homepage</title>
</head>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "<body>

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

        <h1>Shop by category</h1>
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
        return "shop_by_category.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  98 => 21,  91 => 20,  75 => 9,  66 => 2,  59 => 1,  51 => 65,  49 => 20,  44 => 17,  42 => 1,);
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
  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Ribeye&family=Righteous&display=swap\" rel=\"stylesheet\">

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

        <h1>Shop by category</h1>
      </div>
    </div>

  </div>

</div>

</body>
</html>

{% endblock %}

", "shop_by_category.html.twig", "/var/www/symfony_docker/templates/shop_by_category.html.twig");
    }
}
