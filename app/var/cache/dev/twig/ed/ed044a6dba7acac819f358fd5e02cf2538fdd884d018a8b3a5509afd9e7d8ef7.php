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

/* test.html.twig */
class __TwigTemplate_42f1c5a3504692823fe9feb2d8fab019f26763bf6844a57a5c9a57bac1583ba1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <title>Document</title>
</head>
<body>

<div class=\"container\">
    <div class=\"row\">
    <div class=\"item_image\"></div>
    <div class=\"item_inf\">
        <div class=\"image_name\">
            <h1>Name</h1>
        </div>
        <div class=\"add_review\">
            <a href=\"#\">Add review</a>
        </div>
        <div class=\"price\">
            <p>123.45\$</p>
        </div>
        <div class=\"buy_now_button\">
            <a href=\"#\">Buy now</a>
        </div>
    </div>
    </div>

</div>

</body>

<style>


    body{
        margin:0;
        font-size:20px;
        line-height:1.6;
        color:#333;
        font-family: 'Righteous', cursive;
    }
    :before,
    :after{
        box-sizing:border-box;
    }
    h1,h2,h3,h4.h5,h6{
        margin: 0;
    }

    .container{
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        height: auto;
        border: solid black;
    }
    .row{
        display: flex;
        border:solid red;
    }
    .item_image{
        width: 40%;
        border: solid green;
        height: 500px;
    }
    .item_inf{
        width: 60%;
        border: solid yellow;
        height:500px;
        display: flex;
        flex-direction: column;
    }
    .image_name{
        padding-top: 100px;
        border: solid teal;
        height: 48%;
    }
    .add_review{
        border: solid greenyellow;
        height: 18%;
    }
    .price{
        border: solid darkmagenta;
        height: 18%;
    }
    .buy_now_button{
        border: solid indigo;
        height: 18%;
    }


</style>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <title>Document</title>
</head>
<body>

<div class=\"container\">
    <div class=\"row\">
    <div class=\"item_image\"></div>
    <div class=\"item_inf\">
        <div class=\"image_name\">
            <h1>Name</h1>
        </div>
        <div class=\"add_review\">
            <a href=\"#\">Add review</a>
        </div>
        <div class=\"price\">
            <p>123.45\$</p>
        </div>
        <div class=\"buy_now_button\">
            <a href=\"#\">Buy now</a>
        </div>
    </div>
    </div>

</div>

</body>

<style>


    body{
        margin:0;
        font-size:20px;
        line-height:1.6;
        color:#333;
        font-family: 'Righteous', cursive;
    }
    :before,
    :after{
        box-sizing:border-box;
    }
    h1,h2,h3,h4.h5,h6{
        margin: 0;
    }

    .container{
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        height: auto;
        border: solid black;
    }
    .row{
        display: flex;
        border:solid red;
    }
    .item_image{
        width: 40%;
        border: solid green;
        height: 500px;
    }
    .item_inf{
        width: 60%;
        border: solid yellow;
        height:500px;
        display: flex;
        flex-direction: column;
    }
    .image_name{
        padding-top: 100px;
        border: solid teal;
        height: 48%;
    }
    .add_review{
        border: solid greenyellow;
        height: 18%;
    }
    .price{
        border: solid darkmagenta;
        height: 18%;
    }
    .buy_now_button{
        border: solid indigo;
        height: 18%;
    }


</style>
</html>", "test.html.twig", "/var/www/symfony_docker/templates/test.html.twig");
    }
}
