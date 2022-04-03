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
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 83
        echo "
  ";
        // line 84
        $this->displayBlock('body', $context, $blocks);
        // line 105
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

    <title>";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "</title>
  </head>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "  <header class = \"header\">

    <div class = \"container\">

      <div class=\"header_inner\">


        <div class=\"header_logo\">
          <a href=\"/\"><svg width=\"147\" height=\"75\" viewBox=\"0 0 147 75\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
              <path d=\"M14.0346 6.98567C14.0346 7.95803 13.8434 8.86643 13.461 9.71085C13.1041 10.5553 12.6069 11.2973 11.9696 11.9371C11.3322 12.5512 10.5801 13.0502 9.71332 13.434C8.87201 13.7922 7.96696 13.9713 6.99818 13.9713C6.0294 13.9713 5.1116 13.7922 4.2448 13.434C3.40349 13.0502 2.66415 12.5512 2.02679 11.9371C1.41493 11.2973 0.917794 10.5553 0.53538 9.71085C0.17846 8.86643 0 7.95803 0 6.98567C0 6.03889 0.17846 5.1433 0.53538 4.29887C0.917794 3.42886 1.41493 2.6868 2.02679 2.07267C2.66415 1.43296 3.40349 0.933982 4.2448 0.575742C5.1116 0.191914 6.0294 0 6.99818 0C7.96696 0 8.87201 0.191914 9.71332 0.575742C10.5801 0.933982 11.3322 1.43296 11.9696 2.07267C12.6069 2.6868 13.1041 3.42886 13.461 4.29887C13.8434 5.1433 14.0346 6.03889 14.0346 6.98567ZM12.2373 59.2631H1.72086V18.1551H12.2373V59.2631Z\" fill=\"#39C59B\"/>
              <path d=\"M44.36 59.2631H33.423V15.238H16.9409V4.22211H60.8038V15.238H44.36V59.2631Z\" fill=\"#E2BD37\"/>
              <path d=\"M105.087 38.3444C105.087 41.415 104.539 44.281 103.443 46.9422C102.347 49.5778 100.855 51.868 98.9688 53.8127C97.0822 55.7318 94.8642 57.2544 92.3148 58.3802C89.7908 59.4806 87.0757 60.0307 84.1694 60.0307C81.2885 60.0307 78.5734 59.4806 76.0239 58.3802C73.5 57.2544 71.282 55.7318 69.3699 53.8127C67.4834 51.868 65.9919 49.5778 64.8957 46.9422C63.7994 44.281 63.0898 41.415 63.0898 38.3444C63.0898 35.2226 63.7994 32.3311 64.8957 29.6699C65.9919 27.0087 60.5404 17.7499 62.427 15.8308C64.3391 13.886 73.5 19.3321 76.0239 18.2318C78.5734 17.1315 81.2885 16.3767 84.1694 16.3767C87.0757 16.3767 89.7908 17.1059 92.3148 18.1551C94.8642 19.1786 103.796 13.9116 105.682 15.8308C107.569 17.7243 102.347 26.7528 103.443 29.4396C104.539 32.1008 105.087 35.0691 105.087 38.3444ZM94.571 38.3444C94.571 36.6556 94.2906 35.1331 93.7297 33.7769C93.1943 32.3951 92.455 31.218 91.5117 30.2457C90.5684 29.2477 89.4594 28.4928 88.1847 27.9811C86.9355 27.4437 85.597 27.175 84.1694 27.175C82.7417 27.175 81.3905 27.4437 80.1158 27.9811C78.8665 28.4928 77.7703 29.2477 76.827 30.2457C75.9092 31.218 75.1826 32.3951 74.6472 33.7769C74.1119 35.1331 73.8442 36.6556 73.8442 38.3444C73.8442 39.9309 74.1119 41.4023 74.6472 42.7584C75.1826 44.1146 75.9092 45.2917 76.827 46.2897C77.7703 47.2876 78.8665 48.0809 80.1158 48.6694C81.3905 49.2323 82.7417 49.5138 84.1694 49.5138C85.597 49.5138 86.9355 49.2451 88.1847 48.7078C89.4594 48.1704 90.5684 47.4156 91.5117 46.4432C92.455 45.4708 93.1943 44.2938 93.7297 42.912C94.2906 41.5302 94.571 40.0077 94.571 38.3444Z\" fill=\"#4E30A6\"/>
              <path d=\"M120.728 74.9232V64.368L126.541 64.4447C127.561 64.4447 128.542 64.2784 129.485 63.9458C130.429 63.6131 131.296 63.1525 132.086 62.564C132.902 61.9754 133.616 61.2718 134.227 60.4529C134.839 59.6597 135.336 58.7897 135.719 57.8429C134.572 58.3291 133.399 58.8153 132.201 59.3014C131.028 59.7876 129.842 60.0307 128.644 60.0307C126.12 60.0307 123.749 59.5829 121.531 58.6873C119.313 57.7917 117.363 56.5251 115.68 54.8874C114.023 53.2242 112.71 51.2155 111.741 48.8613C110.798 46.4816 110.326 43.8204 110.326 40.8777V18.1551H120.728V40.8777C120.728 42.3362 120.932 43.6157 121.34 44.716C121.773 45.7907 122.347 46.6991 123.061 47.4411C123.775 48.1576 124.603 48.695 125.547 49.0532C126.515 49.4115 127.548 49.5906 128.644 49.5906C129.715 49.5906 130.722 49.3475 131.665 48.8613C132.634 48.3495 133.475 47.6842 134.189 46.8654C134.903 46.0466 135.464 45.1254 135.872 44.1018C136.28 43.0527 136.484 41.978 136.484 40.8777V18.1551H147V54.0814C146.975 56.9729 146.414 59.6853 145.317 62.2185C144.221 64.7518 142.717 66.9652 140.805 68.8588C138.918 70.7523 136.713 72.2492 134.189 73.3495C131.665 74.4498 128.963 75 126.082 75L120.728 74.9232Z\" fill=\"#47B1C9\"/>
            </svg>
          </a>
        </div>


        <nav class = \"nav\">
          <a class = \"nav_link\" href=\"/\">Home</a>
          <div class=\"dropdown-category\">
          <a class = \"nav_link \" href=\"/by-category\">By category</a>
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
              <a class = \"nav_link \" href=\"/by-age\">By age</a>
                <div class=\"dropdown-age-content\">
                  <a href=\"/by-age/0--2-years\">0-24 months</a>
                  <a href=\"/by-age/3--4-years\">3-4 years</a>
                  <a href=\"/by-age/5--7-years\">5-7 years</a>
                  <a href=\"/by-age/8--10-years\">8-10 years</a>
                  <a href=\"/by-age/11-years-and-up\">11+ years</a>
                </div>
              </div>
          <a class = \"nav_link\" href=\"/hot-deals\">Hot deals</a>
            <a class = \"nav_link\" href=\"/register\">Sign Up</a>

                <a class = \"nav_link\" href=\"/login\">Log In</a>

            <a class = \"nav_link\" href=\"/cart\">My cart</a>

        </nav>


      </div>
    </div>
  </header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 85
        echo "  <body>

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

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  207 => 85,  197 => 84,  127 => 22,  117 => 21,  104 => 17,  94 => 10,  90 => 9,  81 => 2,  71 => 1,  58 => 105,  56 => 84,  53 => 83,  51 => 21,  48 => 20,  46 => 1,);
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

    <title>{{ name }}</title>
  </head>
{% endblock %}

{% block header %}
  <header class = \"header\">

    <div class = \"container\">

      <div class=\"header_inner\">


        <div class=\"header_logo\">
          <a href=\"/\"><svg width=\"147\" height=\"75\" viewBox=\"0 0 147 75\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
              <path d=\"M14.0346 6.98567C14.0346 7.95803 13.8434 8.86643 13.461 9.71085C13.1041 10.5553 12.6069 11.2973 11.9696 11.9371C11.3322 12.5512 10.5801 13.0502 9.71332 13.434C8.87201 13.7922 7.96696 13.9713 6.99818 13.9713C6.0294 13.9713 5.1116 13.7922 4.2448 13.434C3.40349 13.0502 2.66415 12.5512 2.02679 11.9371C1.41493 11.2973 0.917794 10.5553 0.53538 9.71085C0.17846 8.86643 0 7.95803 0 6.98567C0 6.03889 0.17846 5.1433 0.53538 4.29887C0.917794 3.42886 1.41493 2.6868 2.02679 2.07267C2.66415 1.43296 3.40349 0.933982 4.2448 0.575742C5.1116 0.191914 6.0294 0 6.99818 0C7.96696 0 8.87201 0.191914 9.71332 0.575742C10.5801 0.933982 11.3322 1.43296 11.9696 2.07267C12.6069 2.6868 13.1041 3.42886 13.461 4.29887C13.8434 5.1433 14.0346 6.03889 14.0346 6.98567ZM12.2373 59.2631H1.72086V18.1551H12.2373V59.2631Z\" fill=\"#39C59B\"/>
              <path d=\"M44.36 59.2631H33.423V15.238H16.9409V4.22211H60.8038V15.238H44.36V59.2631Z\" fill=\"#E2BD37\"/>
              <path d=\"M105.087 38.3444C105.087 41.415 104.539 44.281 103.443 46.9422C102.347 49.5778 100.855 51.868 98.9688 53.8127C97.0822 55.7318 94.8642 57.2544 92.3148 58.3802C89.7908 59.4806 87.0757 60.0307 84.1694 60.0307C81.2885 60.0307 78.5734 59.4806 76.0239 58.3802C73.5 57.2544 71.282 55.7318 69.3699 53.8127C67.4834 51.868 65.9919 49.5778 64.8957 46.9422C63.7994 44.281 63.0898 41.415 63.0898 38.3444C63.0898 35.2226 63.7994 32.3311 64.8957 29.6699C65.9919 27.0087 60.5404 17.7499 62.427 15.8308C64.3391 13.886 73.5 19.3321 76.0239 18.2318C78.5734 17.1315 81.2885 16.3767 84.1694 16.3767C87.0757 16.3767 89.7908 17.1059 92.3148 18.1551C94.8642 19.1786 103.796 13.9116 105.682 15.8308C107.569 17.7243 102.347 26.7528 103.443 29.4396C104.539 32.1008 105.087 35.0691 105.087 38.3444ZM94.571 38.3444C94.571 36.6556 94.2906 35.1331 93.7297 33.7769C93.1943 32.3951 92.455 31.218 91.5117 30.2457C90.5684 29.2477 89.4594 28.4928 88.1847 27.9811C86.9355 27.4437 85.597 27.175 84.1694 27.175C82.7417 27.175 81.3905 27.4437 80.1158 27.9811C78.8665 28.4928 77.7703 29.2477 76.827 30.2457C75.9092 31.218 75.1826 32.3951 74.6472 33.7769C74.1119 35.1331 73.8442 36.6556 73.8442 38.3444C73.8442 39.9309 74.1119 41.4023 74.6472 42.7584C75.1826 44.1146 75.9092 45.2917 76.827 46.2897C77.7703 47.2876 78.8665 48.0809 80.1158 48.6694C81.3905 49.2323 82.7417 49.5138 84.1694 49.5138C85.597 49.5138 86.9355 49.2451 88.1847 48.7078C89.4594 48.1704 90.5684 47.4156 91.5117 46.4432C92.455 45.4708 93.1943 44.2938 93.7297 42.912C94.2906 41.5302 94.571 40.0077 94.571 38.3444Z\" fill=\"#4E30A6\"/>
              <path d=\"M120.728 74.9232V64.368L126.541 64.4447C127.561 64.4447 128.542 64.2784 129.485 63.9458C130.429 63.6131 131.296 63.1525 132.086 62.564C132.902 61.9754 133.616 61.2718 134.227 60.4529C134.839 59.6597 135.336 58.7897 135.719 57.8429C134.572 58.3291 133.399 58.8153 132.201 59.3014C131.028 59.7876 129.842 60.0307 128.644 60.0307C126.12 60.0307 123.749 59.5829 121.531 58.6873C119.313 57.7917 117.363 56.5251 115.68 54.8874C114.023 53.2242 112.71 51.2155 111.741 48.8613C110.798 46.4816 110.326 43.8204 110.326 40.8777V18.1551H120.728V40.8777C120.728 42.3362 120.932 43.6157 121.34 44.716C121.773 45.7907 122.347 46.6991 123.061 47.4411C123.775 48.1576 124.603 48.695 125.547 49.0532C126.515 49.4115 127.548 49.5906 128.644 49.5906C129.715 49.5906 130.722 49.3475 131.665 48.8613C132.634 48.3495 133.475 47.6842 134.189 46.8654C134.903 46.0466 135.464 45.1254 135.872 44.1018C136.28 43.0527 136.484 41.978 136.484 40.8777V18.1551H147V54.0814C146.975 56.9729 146.414 59.6853 145.317 62.2185C144.221 64.7518 142.717 66.9652 140.805 68.8588C138.918 70.7523 136.713 72.2492 134.189 73.3495C131.665 74.4498 128.963 75 126.082 75L120.728 74.9232Z\" fill=\"#47B1C9\"/>
            </svg>
          </a>
        </div>


        <nav class = \"nav\">
          <a class = \"nav_link\" href=\"/\">Home</a>
          <div class=\"dropdown-category\">
          <a class = \"nav_link \" href=\"/by-category\">By category</a>
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
              <a class = \"nav_link \" href=\"/by-age\">By age</a>
                <div class=\"dropdown-age-content\">
                  <a href=\"/by-age/0--2-years\">0-24 months</a>
                  <a href=\"/by-age/3--4-years\">3-4 years</a>
                  <a href=\"/by-age/5--7-years\">5-7 years</a>
                  <a href=\"/by-age/8--10-years\">8-10 years</a>
                  <a href=\"/by-age/11-years-and-up\">11+ years</a>
                </div>
              </div>
          <a class = \"nav_link\" href=\"/hot-deals\">Hot deals</a>
            <a class = \"nav_link\" href=\"/register\">Sign Up</a>

                <a class = \"nav_link\" href=\"/login\">Log In</a>

            <a class = \"nav_link\" href=\"/cart\">My cart</a>

        </nav>


      </div>
    </div>
  </header>
{% endblock %}

  {% block body %}
  <body>

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



", "index.html.twig", "/var/www/symfony_docker/templates/index.html.twig");
    }
}
