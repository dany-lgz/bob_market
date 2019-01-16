<?php

/* HomePage.html.twig */
class __TwigTemplate_144e929504d99124b0405180f8a945922f48f4c6ca3588c87adb955c7de2bfbc extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HomePage.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Boob</title>
    <link rel=\"stylesheet\" href=\"css/style.css\" type=\"text/css\">

    <link href='https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.min.css' rel='stylesheet' />
    <link href='.https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <script src='https://fullcalendar.io/releases/fullcalendar/3.9.0/lib/moment.min.js'></script>
    <script src='https://fullcalendar.io/releases/fullcalendar/3.9.0/lib/jquery.min.js'></script>
    <script src='https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.min.js'></script>
</head>
<script>
    \$(function(){
        \$(document).ready(function() {
            \$('#calendar').fullCalendar(
                {
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay,listWeek'
                    },
                    defaultDate: '2018-12-06',
                    navLinks: true, // can click day/week names to navigate views
                    editable: false,
                    eventLimit: true, // allow \"more\" link when too many events
                    events: []
                });
        });
    });

</script>
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
    WELCOME to Bob's Site !
    <div class=\"container-fluid\">
        <div class=\"col-xs-4 col-sm-4\">
            <br>
        </div>
        <div class=\"col-xs-8 col-sm-8\">
            <br>
            <div id=\"calendar\"></div>
        </div>
    </div>

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
        return "HomePage.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
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

    <link href='https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.min.css' rel='stylesheet' />
    <link href='.https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <script src='https://fullcalendar.io/releases/fullcalendar/3.9.0/lib/moment.min.js'></script>
    <script src='https://fullcalendar.io/releases/fullcalendar/3.9.0/lib/jquery.min.js'></script>
    <script src='https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.min.js'></script>
</head>
<script>
    \$(function(){
        \$(document).ready(function() {
            \$('#calendar').fullCalendar(
                {
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay,listWeek'
                    },
                    defaultDate: '2018-12-06',
                    navLinks: true, // can click day/week names to navigate views
                    editable: false,
                    eventLimit: true, // allow \"more\" link when too many events
                    events: []
                });
        });
    });

</script>
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
    WELCOME to Bob's Site !
    <div class=\"container-fluid\">
        <div class=\"col-xs-4 col-sm-4\">
            <br>
        </div>
        <div class=\"col-xs-8 col-sm-8\">
            <br>
            <div id=\"calendar\"></div>
        </div>
    </div>

</div>
<div id=\"footer\">
    <div>
        <p>
            &copy; copyright 2019 | all rights reserved.
        </p>
    </div>
</div>
</body>
</html>", "HomePage.html.twig", "/home/dany/Boob.Bob/Boob.Bob/templates/HomePage.html.twig");
    }
}
