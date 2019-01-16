<?php

/* tagpage.html.twig */
class __TwigTemplate_ca4bb98a15dfc5844d00033237e8e52348e2a6e68e55a0fd6b07f5101a832e47 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tagpage.html.twig"));

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
    Information sur le client :
    <li>Prénom -- ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new Twig_Error_Runtime('Variable "tag" does not exist.', 36, $this->source); })()), "firstName", array()), "html", null, true);
        echo " </li>
    <li>Nom -- ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new Twig_Error_Runtime('Variable "tag" does not exist.', 37, $this->source); })()), "lastName", array()), "html", null, true);
        echo " </li>
    <li>Mail -- ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new Twig_Error_Runtime('Variable "tag" does not exist.', 38, $this->source); })()), "email", array()), "html", null, true);
        echo " </li>
    <li>Téléphone -- ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new Twig_Error_Runtime('Variable "tag" does not exist.', 39, $this->source); })()), "phoneNumber", array()), "html", null, true);
        echo "</li>
    Information sur le lieu de l'intervention :
    <li>Addresse -- ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new Twig_Error_Runtime('Variable "tag" does not exist.', 41, $this->source); })()), "address", array()), "html", null, true);
        echo "</li>
    <li>Code Postal -- ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new Twig_Error_Runtime('Variable "tag" does not exist.', 42, $this->source); })()), "postalCode", array()), "html", null, true);
        echo "</li>
    <li>Ville -- ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new Twig_Error_Runtime('Variable "tag" does not exist.', 43, $this->source); })()), "city", array()), "html", null, true);
        echo "</li>
    <li>Orientation -- ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new Twig_Error_Runtime('Variable "tag" does not exist.', 44, $this->source); })()), "orientation", array()), "html", null, true);
        echo "</li>
    <li>Image -- ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new Twig_Error_Runtime('Variable "tag" does not exist.', 45, $this->source); })()), "pathPicture", array()), "html", null, true);
        echo "</li>
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
        return "tagpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 45,  92 => 44,  88 => 43,  84 => 42,  80 => 41,  75 => 39,  71 => 38,  67 => 37,  63 => 36,  26 => 1,);
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
    Information sur le client :
    <li>Prénom -- {{ tag.firstName }} </li>
    <li>Nom -- {{ tag.lastName }} </li>
    <li>Mail -- {{ tag.email }} </li>
    <li>Téléphone -- {{ tag.phoneNumber }}</li>
    Information sur le lieu de l'intervention :
    <li>Addresse -- {{ tag.address}}</li>
    <li>Code Postal -- {{ tag.postalCode }}</li>
    <li>Ville -- {{ tag.city }}</li>
    <li>Orientation -- {{ tag.orientation }}</li>
    <li>Image -- {{ tag.pathPicture }}</li>
</div>
<div id=\"footer\">
    <div>
        <p>
            &copy; copyright 2019 | all rights reserved.
        </p>
    </div>
</div>
</body>
</html>", "tagpage.html.twig", "/home/dany/Boob.Bob/Boob.Bob/templates/tagpage.html.twig");
    }
}
