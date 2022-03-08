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

/* contact.html.twig */
class __TwigTemplate_32c4ba8461f4366cb657be49366abe92e1f42f9c31b16250af906b2049e6bcea extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 14
        echo "g


";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 62
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
  <link rel=\"stylesheet\" href=\"../public/css/styles.css\">
  <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
  <title>Homepage</title>
</head>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
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

        <h1>Contact</h1>
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
        return "contact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  96 => 18,  89 => 17,  77 => 10,  67 => 2,  60 => 1,  51 => 62,  49 => 17,  44 => 14,  42 => 1,);
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
  <link rel=\"stylesheet\" href=\"../public/css/styles.css\">
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

        <h1>Contact</h1>
      </div>
    </div>

  </div>

</div>

</body>
</html>

{% endblock %}


", "contact.html.twig", "/var/www/symfony_docker/templates/contact.html.twig");
    }
}
