<?php

/* connected.html.twig */
class __TwigTemplate_e4555b4d89fc4baed678ff691f92689652f8f534a75b20e8df638eaf326a4486 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "connected.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Boob</title>
    <link rel=\"stylesheet\" href=\"css/style.css\" type=\"text/css\">
</head>
<body>
<div id=\"header\">
    <div class=\"section\">
        <div class=\"logo\">
            <a href=\"index.html\">Bob</a>
        </div>
        <ul>
            <li class=\"selected\">
                <a href=\"homepage\">Home</a>
            </li>
            <li>
                <a href=\"newtag\">New tag</a>
            </li>
            <li>
                <a href=\"taglist\">Tag</a>
            </li>
            <li>
                <a href=\"login\">Login</a>
            </li>
            <li>
                <a href=\"register\">Register</a>
            </li>
        </ul>
    </div>
</div>
<div id=\"body\">
    You are connected ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "
</div>
<div id=\"footer\">
    <div>
        <p>
            &copy; copyright 2019 | all rights reserved.
        </p>
    </div>
</div>
</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "connected.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 35,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Boob</title>
    <link rel=\"stylesheet\" href=\"css/style.css\" type=\"text/css\">
</head>
<body>
<div id=\"header\">
    <div class=\"section\">
        <div class=\"logo\">
            <a href=\"index.html\">Bob</a>
        </div>
        <ul>
            <li class=\"selected\">
                <a href=\"homepage\">Home</a>
            </li>
            <li>
                <a href=\"newtag\">New tag</a>
            </li>
            <li>
                <a href=\"taglist\">Tag</a>
            </li>
            <li>
                <a href=\"login\">Login</a>
            </li>
            <li>
                <a href=\"register\">Register</a>
            </li>
        </ul>
    </div>
</div>
<div id=\"body\">
    You are connected {{ user }}
</div>
<div id=\"footer\">
    <div>
        <p>
            &copy; copyright 2019 | all rights reserved.
        </p>
    </div>
</div>
</body>
</html>", "connected.html.twig", "/home/dany/Boob.Bob/Boob.Bob/templates/connected.html.twig");
    }
}
