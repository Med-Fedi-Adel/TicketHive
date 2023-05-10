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

/* base.html.twig */
class __TwigTemplate_b9d5eee1d542469374b3e8782f7c07a8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<title>
";
        // line 2
        $this->displayBlock('title', $context, $blocks);
        // line 3
        echo "</title>
";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "


";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 18
        echo "

";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 73
        echo "
<<<<<<< HEAD
";
        // line 74
=======

";
        // line 75
>>>>>>> main
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 2, $this->source); })()), "name", [], "any", false, false, false, 2), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" />
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&display=swap\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/ticket/ticket.css"), "html", null, true);
        echo "\"/>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 14
        echo "<meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    <div class=\"ticket\">
        <div class=\"left\">
            <div class=\"image\"
                style=\"background-image:url('";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 24, $this->source); })()), "image", [], "any", false, false, false, 24))), "html", null, true);
        echo "')\"
            >
                <p class=\"admit-one\">
                    <span>ADMIT ONE</span>
                    <span>ADMIT ONE</span>
                    <span>ADMIT ONE</span>
                </p>
                ";
        // line 32
        echo "            </div>
            <div class=\"ticket-info\">
                <p class=\"date\">
                    <span>";
        // line 35
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 35, $this->source); })()), "date", [], "any", false, false, false, 35), "l")), "html", null, true);
        echo "</span>
                    <span class=\"june-29\">";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 36, $this->source); })()), "date", [], "any", false, false, false, 36), "F jS"), "html", null, true);
        echo "</span>
                    <span>";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 37, $this->source); })()), "date", [], "any", false, false, false, 37), "Y"), "html", null, true);
        echo "</span>
                </p>
                <div class=\"show-name\">
                    <h1>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 40, $this->source); })()), "name", [], "any", false, false, false, 40), "html", null, true);
        echo "</h1>
                    <h2>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 41, $this->source); })()), "clientid", [], "any", false, false, false, 41), "username", [], "any", false, false, false, 41), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"time\">
                    <p>";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 44, $this->source); })()), "date", [], "any", false, false, false, 44), "g:i A"), "html", null, true);
        echo " <span>TO</span> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 44, $this->source); })()), "date", [], "any", false, false, false, 44), "+3 hours"), "g:i A"), "html", null, true);
        echo "</p>
                    <p>DOORS <span>@</span> ";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 45, $this->source); })()), "date", [], "any", false, false, false, 45), "-1 hour"), "g:i A"), "html", null, true);
        echo "</p>
                </div>
                <p class=\"location\">
                    ";
        // line 49
        echo "                </p>
            </div>
        </div>
        <div class=\"right\">
            <p class=\"admit-one\">
                <span>ADMIT ONE</span>
                <span>ADMIT ONE</span>
                <span>ADMIT ONE</span>
            </p>
            <div class=\"right-info-container\">
                <div class=\"time\">
                    <p>";
        // line 60
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 60, $this->source); })()), "date", [], "any", false, false, false, 60), "g:i A"), "html", null, true);
        echo " <span>TO</span> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 60, $this->source); })()), "date", [], "any", false, false, false, 60), "+3 hours"), "g:i A"), "html", null, true);
        echo "</p>
                </div>
                <div class=\"barcode\">
                    <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/events/" . twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 63, $this->source); })()), "image", [], "any", false, false, false, 63))), "html", null, true);
        echo "\" alt=\"QR code\">
                </div>
                <p class=\"ticket-number\">
                    #";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66), "html", null, true);
        echo "
                </p>
            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

<<<<<<< HEAD
    // line 74
=======
    // line 75
>>>>>>> main
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  263 => 74,  246 => 66,  240 => 63,  232 => 60,  219 => 49,  213 => 45,  207 => 44,  201 => 41,  197 => 40,  191 => 37,  187 => 36,  183 => 35,  178 => 32,  168 => 24,  163 => 21,  153 => 20,  140 => 14,  130 => 13,  117 => 7,  113 => 5,  103 => 4,  84 => 2,  74 => 74,  71 => 73,  69 => 20,  65 => 18,  63 => 13,  58 => 10,  56 => 4,  53 => 3,  51 => 2,  48 => 1,);
=======
        return array (  264 => 75,  247 => 66,  241 => 63,  233 => 60,  220 => 49,  214 => 45,  208 => 44,  202 => 41,  198 => 40,  192 => 37,  188 => 36,  184 => 35,  179 => 32,  169 => 24,  164 => 21,  154 => 20,  141 => 14,  131 => 13,  118 => 7,  114 => 5,  104 => 4,  85 => 2,  75 => 75,  71 => 73,  69 => 20,  65 => 18,  63 => 13,  58 => 10,  56 => 4,  53 => 3,  51 => 2,  48 => 1,);
>>>>>>> main
    }

    public function getSourceContext()
    {
        return new Source("<title>
{% block title %}{{ event.name }}{% endblock %}
</title>
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" />
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&display=swap\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/ticket/ticket.css')}}\"/>

{% endblock %}



{% block header %}
<meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
{% endblock %}


{% block body %}
    <div class=\"ticket\">
        <div class=\"left\">
            <div class=\"image\"
                style=\"background-image:url('{{ asset('uploads/' ~ event.image) }}')\"
            >
                <p class=\"admit-one\">
                    <span>ADMIT ONE</span>
                    <span>ADMIT ONE</span>
                    <span>ADMIT ONE</span>
                </p>
                {# <img src=\"{{ asset('uploads/' ~ event.image) }}\" width=\"275\" height=\"320\"> #}
            </div>
            <div class=\"ticket-info\">
                <p class=\"date\">
                    <span>{{ event.date|date('l')|upper }}</span>
                    <span class=\"june-29\">{{ event.date|date('F jS') }}</span>
                    <span>{{ event.date|date('Y') }}</span>
                </p>
                <div class=\"show-name\">
                    <h1>{{ event.name }}</h1>
                    <h2>{{ event.clientid.username }}</h2>
                </div>
                <div class=\"time\">
                    <p>{{ event.date|date('g:i A') }} <span>TO</span> {{ event.date|date_modify('+3 hours')|date('g:i A') }}</p>
                    <p>DOORS <span>@</span> {{ event.date|date_modify('-1 hour')|date('g:i A') }}</p>
                </div>
                <p class=\"location\">
                    {# <span class=\"separator\"><i class=\"far fa-smile\"></i></span><span>{{ event.location }}</span> #}
                </p>
            </div>
        </div>
        <div class=\"right\">
            <p class=\"admit-one\">
                <span>ADMIT ONE</span>
                <span>ADMIT ONE</span>
                <span>ADMIT ONE</span>
            </p>
            <div class=\"right-info-container\">
                <div class=\"time\">
                    <p>{{ event.date|date('g:i A') }} <span>TO</span> {{ event.date|date_modify('+3 hours')|date('g:i A') }}</p>
                </div>
                <div class=\"barcode\">
                    <img src=\"{{ asset('uploads/events/' ~ event.image) }}\" alt=\"QR code\">
                </div>
                <p class=\"ticket-number\">
                    #{{ event.id }}
                </p>
            </div>
        </div>
    </div>

{% endblock %}

<<<<<<< HEAD
{% block javascripts %}
{% endblock %}", "base.html.twig", "C:\\Users\\msi\\PhpstormProjects\\ppp\\TicketHive\\templates\\base.html.twig");
=======

{% block javascripts %}
{% endblock %}", "base.html.twig", "C:\\Users\\ghrib\\OneDrive\\Desktop\\4thpull\\TicketHive\\templates\\base.html.twig");
>>>>>>> main
    }
}
