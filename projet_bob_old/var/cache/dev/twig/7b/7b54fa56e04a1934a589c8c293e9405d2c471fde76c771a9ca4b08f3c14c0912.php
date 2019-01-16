<?php

/* login.html.twig */
class __TwigTemplate_1746c5c4d28c96d424e3ac9c779004f65f88cf83d5acb876d335a030b9789042 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

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
    ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "</div>
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

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "        <form method=\"post\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" class=\"home-form\">
            <h2 class=\"form-signin-heading\">Connection</h2>
            <label for=\"inputAddressMail\" class=\"sr-only\">AddressMail</label><input type=\"text\" id=\"inputAddressMail\" name=\"_mail\" class=\"form-control\" placeholder=\"Username\" required autofocus>
            <label for=\"inputPassword\" class=\"sr-only\">Password</label><input type=\"password\" id=\"inputPassword\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" required>
            <input type=\"hidden\" name=\"_target_path\" value=\"dashboard\" /><button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\"> Log In</button></form>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 36,  81 => 35,  65 => 41,  63 => 35,  27 => 1,);
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
    {% block body %}
        <form method=\"post\" action=\"{{path('login')}}\" class=\"home-form\">
            <h2 class=\"form-signin-heading\">Connection</h2>
            <label for=\"inputAddressMail\" class=\"sr-only\">AddressMail</label><input type=\"text\" id=\"inputAddressMail\" name=\"_mail\" class=\"form-control\" placeholder=\"Username\" required autofocus>
            <label for=\"inputPassword\" class=\"sr-only\">Password</label><input type=\"password\" id=\"inputPassword\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" required>
            <input type=\"hidden\" name=\"_target_path\" value=\"dashboard\" /><button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\"> Log In</button></form>
    {% endblock %}</div>
<div id=\"footer\">
    <div>
        <p>
            &copy; copyright 2019 | all rights reserved.
        </p>
    </div>
</div>
</body>
</html>", "login.html.twig", "/home/dany/Boob.Bob/Boob.Bob/templates/login.html.twig");
    }
}
