<?php

/* taglist.html.twig */
class __TwigTemplate_6c91feb4c0d6247899ef27cfc0ccad5109248b883bd0ce18ad00b2dcdcff576e extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "taglist.html.twig"));

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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new Twig_Error_Runtime('Variable "tags" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 36
            echo "        <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "address", array()), "html", null, true);
            echo " -- Addresse </li>
        <li>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "postalCode", array()), "html", null, true);
            echo " -- Code Postal</li>
        <li>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "city", array()), "html", null, true);
            echo " -- Ville</li>
        <li>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "orientation", array()), "html", null, true);
            echo " -- Orientation</li>
        <li>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "pathPicture", array()), "html", null, true);
            echo " -- Image</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
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

    public function getTemplateName()
    {
        return "taglist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 42,  83 => 40,  79 => 39,  75 => 38,  71 => 37,  66 => 36,  62 => 35,  26 => 1,);
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
    {% for tag in tags %}
        <li>{{ tag.address}} -- Addresse </li>
        <li>{{ tag.postalCode }} -- Code Postal</li>
        <li>{{ tag.city }} -- Ville</li>
        <li>{{ tag.orientation }} -- Orientation</li>
        <li>{{ tag.pathPicture }} -- Image</li>
    {% endfor %}
</div>
<div id=\"footer\">
    <div>
        <p>
            &copy; copyright 2019 | all rights reserved.
        </p>
    </div>
</div>
</body>
</html>", "taglist.html.twig", "/home/dany/Boob.Bob/Boob.Bob/templates/taglist.html.twig");
    }
}
