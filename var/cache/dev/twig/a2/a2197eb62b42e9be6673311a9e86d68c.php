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

/* main/index.html.twig */
class __TwigTemplate_984cacc611f5af6c2abdc60ca4fc5c9c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">


    ";
        // line 12
        echo "
    <!-- favicon -->
    <link rel=\"icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faviconM.ico"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main/style.css"), "html", null, true);
        echo "\" />
    <title>TicketHive</title>

    <script defer src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main/script.js"), "html", null, true);
        echo "\"></script>
  </head>

  <body>
    <header class=\"header\">
      <!-- Nav Bar -->
      <nav class=\"nav\">
<<<<<<< HEAD
        <img src=\"/assets/images/picc.png\" alt=\"\" class=\"nav__logo\" id=\"logo\" />
        <a class=\"navbar-brand\" href=\"\">TicketHive</a>        <ul class=\"nav__links\">
=======

        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picc.png "), "html", null, true);
        echo "\" alt=\"\" class=\"nav__logo\" id=\"logo\" />
        <a class=\"navbar-brand\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\">TicketHive</a>


        <ul class=\"nav__links\">
>>>>>>> main
          <li class=\"nav__item\">
            <a class=\"nav__link\" href=\"#section--1\">Events</a>
          </li>
          <li class=\"nav__item\">
            <a class=\"nav__link\" href=\"#section--2\">Catalogue</a>
          </li>
          <li class=\"nav__item\">
            <a class=\"nav__link\" href=\"#section--3\">Testimonials</a>
          </li>
          ";
<<<<<<< HEAD
        // line 38
        echo "          ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "session", [], "any", false, false, false, 38), "get", [0 => "username"], "method", false, false, false, 38) == "admin")) {
            // line 39
=======
        // line 42
        echo "          ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "session", [], "any", false, false, false, 42), "get", [0 => "username"], "method", false, false, false, 42) == "admin")) {
            // line 43
>>>>>>> main
            echo "            <div class=\"app-header-actions\">
              <button class=\"user-profile\" id=\"userprofile\">
                <span>
                    ";
<<<<<<< HEAD
            // line 42
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "session", [], "any", false, false, false, 42), "get", [0 => "username"], "method", false, false, false, 42), 0, 1), "html", null, true);
=======
            // line 46
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "session", [], "any", false, false, false, 46), "get", [0 => "username"], "method", false, false, false, 46), 0, 1), "html", null, true);
>>>>>>> main
            echo "
                  </span>
              </button>
            </div>
        </ul>
      </nav>
      <div class=\"header__title\">
        <h1>
          Enjoy Your
          <!-- Green highlight effect -->
          <span class=\"highlight\"> Success </span>
          Via<br />
          Consulting
          <span class=\"highlight\"><a  target=\"_blank\" href=\"";
<<<<<<< HEAD
            // line 55
=======
            // line 59
>>>>>>> main
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\" style=\"color:#00ffdd; text-decoration: none\">Admin Dashboard</a></span>
        </h1>
        <button class=\"btn--text btn--scroll-to\">Learn more &DownArrow;</button>
      </div>
    </header>
          ";
<<<<<<< HEAD
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 60
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "session", [], "any", false, false, false, 60), "get", [0 => "username"], "method", false, false, false, 60)) {
            // line 61
=======
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 64
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "session", [], "any", false, false, false, 64), "get", [0 => "username"], "method", false, false, false, 64)) {
            // line 65
>>>>>>> main
            echo "            <div class=\"app-header-actions\">
              <button class=\"user-profile\">
             <span>
             <i class=\"fa-solid fa-basket-shopping fa-xl\" id=\"open-cart-icon\"></i>
              </span>
              </button>
              <button class=\"user-profile\" id=\"userprofile\">
                <span>";
<<<<<<< HEAD
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "session", [], "any", false, false, false, 68), "get", [0 => "username"], "method", false, false, false, 68), "html", null, true);
            echo "</span>
                <span>
                    ";
            // line 70
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "session", [], "any", false, false, false, 70), "get", [0 => "username"], "method", false, false, false, 70), 0, 1), "html", null, true);
=======
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "session", [], "any", false, false, false, 72), "get", [0 => "username"], "method", false, false, false, 72), "html", null, true);
            echo "</span>
                <span>
                    ";
            // line 74
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "session", [], "any", false, false, false, 74), "get", [0 => "username"], "method", false, false, false, 74), 0, 1), "html", null, true);
>>>>>>> main
            echo "
                  </span>
              </button>
            </div>
          ";
        } else {
<<<<<<< HEAD
            // line 75
            echo "            <a class=\"nav__link nav__link--btn btn--show-modal\" href=\"#\">Log in</a>
          ";
        }
        // line 77
=======
            // line 79
            echo "            <a class=\"nav__link nav__link--btn btn--show-modal\" href=\"#\">Log in</a>
          ";
        }
        // line 81
>>>>>>> main
        echo "          </li>

        </ul>
      </nav>

    ";
<<<<<<< HEAD
        // line 82
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "session", [], "any", false, false, false, 82), "get", [0 => "username"], "method", false, false, false, 82) != "admin")) {
            // line 83
=======
        // line 86
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "session", [], "any", false, false, false, 86), "get", [0 => "username"], "method", false, false, false, 86) != "admin")) {
            // line 87
>>>>>>> main
            echo "      <div class=\"header__title\">
        <h1>
          Experience
          <!-- Green highlight effect -->
          <span class=\"highlight\">Effortless</span>
          Ticket<br />
          Buying for Your
          <span class=\"highlight\">Favorite</span>
          Event
        </h1>
        <button class=\"btn--text btn--scroll-to\">Learn more &DownArrow;</button>
      </div>
    </header>
    ";
        }
<<<<<<< HEAD
        // line 97
        echo "
    ";
        // line 98
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "session", [], "any", false, false, false, 98), "get", [0 => "username"], "method", false, false, false, 98)) {
            // line 99
=======
        // line 101
        echo "
    ";
        // line 102
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "session", [], "any", false, false, false, 102), "get", [0 => "username"], "method", false, false, false, 102)) {
            // line 103
>>>>>>> main
            echo "      <div class=\"dropdown-user\">
      <li id=\"update\">Update</li>
      <li id=\"addevent\">Add Event</li>
      <li id=\"logout\">Logout</li>
    </div>
    ";
        }
<<<<<<< HEAD
        // line 105
=======
        // line 109
>>>>>>> main
        echo "
    <section class=\"section section--hidden\" id=\"section--1\">
      <div class=\"section__title\">
        <h2 class=\"section__description\">Events</h2>
        <h3 class=\"section__header\">Go out and have fun You only live once.</h3>
      </div>

      <div class=\"operations\">
        <div class=\"operations__tab-container\">
          <button
            class=\"btn operations__tab operations__tab--1 operations__tab--active\"
            data-tab=\"1\"
          >
            <span>01</span>Today
          </button>
          <button class=\"btn operations__tab operations__tab--2\" data-tab=\"2\">
            <span>02</span>This Weekend
          </button>
          <button class=\"btn operations__tab operations__tab--3\" data-tab=\"3\">
            <span>03</span>Coming Soon
          </button>
        </div>
         <div class=\"slider1\">
            ";
<<<<<<< HEAD
        // line 128
        if (array_key_exists("eventT", $context)) {
            // line 129
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["eventT"]) || array_key_exists("eventT", $context) ? $context["eventT"] : (function () { throw new RuntimeError('Variable "eventT" does not exist.', 129, $this->source); })()));
=======
        // line 132
        if (array_key_exists("eventT", $context)) {
            // line 133
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["eventT"]) || array_key_exists("eventT", $context) ? $context["eventT"] : (function () { throw new RuntimeError('Variable "eventT" does not exist.', 133, $this->source); })()));
>>>>>>> main
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
<<<<<<< HEAD
                // line 130
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_description", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 130)]), "html", null, true);
                echo "\">
      <img src=\"";
                // line 131
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/uploads/" . twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 131))), "html", null, true);
                echo "\"  id=\"slide";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 131), "html", null, true);
=======
                // line 134
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_description", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 134)]), "html", null, true);
                echo "\">
      <img src=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/uploads/" . twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 135))), "html", null, true);
                echo "\"  id=\"slide";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 135), "html", null, true);
>>>>>>> main
                echo "\">
      </a>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< HEAD
            // line 134
            echo "  ";
        }
        // line 135
        echo "</div>
<div class=\"text\">
  ";
        // line 137
        if (array_key_exists("eventT", $context)) {
            // line 138
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["eventT"]) || array_key_exists("eventT", $context) ? $context["eventT"] : (function () { throw new RuntimeError('Variable "eventT" does not exist.', 138, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 139
                echo "      <p>
        ";
                // line 140
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 140), "html", null, true);
                echo "<br>
        <span class=\"small\"></span>
      </p>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "  ";
        }
        // line 145
        echo "</div> 
         <div class=\"slider2\">
            ";
        // line 147
        if (array_key_exists("eventT", $context)) {
            // line 148
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["eventT"]) || array_key_exists("eventT", $context) ? $context["eventT"] : (function () { throw new RuntimeError('Variable "eventT" does not exist.', 148, $this->source); })()));
=======
            // line 138
            echo "  ";
        }
        // line 139
        echo "</div>
<div class=\"text\">
  ";
        // line 141
        if (array_key_exists("eventT", $context)) {
            // line 142
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["eventT"]) || array_key_exists("eventT", $context) ? $context["eventT"] : (function () { throw new RuntimeError('Variable "eventT" does not exist.', 142, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 143
                echo "      <p>
        ";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 144), "html", null, true);
                echo "<br>
        <span class=\"small\"></span>
      </p>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "  ";
        }
        // line 149
        echo "</div> 
         <div class=\"slider2\">
            ";
        // line 151
        if (array_key_exists("eventT", $context)) {
            // line 152
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["eventT"]) || array_key_exists("eventT", $context) ? $context["eventT"] : (function () { throw new RuntimeError('Variable "eventT" does not exist.', 152, $this->source); })()));
>>>>>>> main
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
<<<<<<< HEAD
                // line 149
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_description", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 149)]), "html", null, true);
                echo "\">
      <img src=\"";
                // line 150
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/uploads/" . twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 150))), "html", null, true);
                echo "\"  id=\"slide";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 150), "html", null, true);
=======
                // line 153
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_description", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 153)]), "html", null, true);
                echo "\">
      <img src=\"";
                // line 154
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/uploads/" . twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 154))), "html", null, true);
                echo "\"  id=\"slide";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 154), "html", null, true);
>>>>>>> main
                echo "\">
      </a>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< HEAD
            // line 153
=======
            // line 157
            echo "  ";
        }
        // line 158
        echo "</div>
<div class=\"text\">
  ";
        // line 160
        if (array_key_exists("eventW", $context)) {
            // line 161
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["eventT"]) || array_key_exists("eventT", $context) ? $context["eventT"] : (function () { throw new RuntimeError('Variable "eventT" does not exist.', 161, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 162
                echo "      <p>
        ";
                // line 163
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 163), "html", null, true);
                echo "<br>
        <span class=\"small\"></span>
      </p>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
>>>>>>> main
            echo "  ";
        }
        // line 168
        echo "</div>
<<<<<<< HEAD
<div class=\"text\">
  ";
        // line 156
        if (array_key_exists("eventT", $context)) {
            // line 157
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["eventT"]) || array_key_exists("eventT", $context) ? $context["eventT"] : (function () { throw new RuntimeError('Variable "eventT" does not exist.', 157, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 158
                echo "      <p>
        ";
                // line 159
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 159), "html", null, true);
                echo "<br>
        <span class=\"small\"></span>
      </p>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "  ";
        }
        // line 164
        echo "</div>
         <div class=\"slider3\">
            ";
        // line 166
        if (array_key_exists("eventT", $context)) {
            // line 167
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["eventT"]) || array_key_exists("eventT", $context) ? $context["eventT"] : (function () { throw new RuntimeError('Variable "eventT" does not exist.', 167, $this->source); })()));
=======
         <div class=\"slider3\">
            ";
        // line 170
        if (array_key_exists("eventT", $context)) {
            // line 171
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["eventT"]) || array_key_exists("eventT", $context) ? $context["eventT"] : (function () { throw new RuntimeError('Variable "eventT" does not exist.', 171, $this->source); })()));
>>>>>>> main
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
<<<<<<< HEAD
                // line 168
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_description", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 168)]), "html", null, true);
                echo "\">
      <img src=\"";
                // line 169
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/uploads/" . twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 169))), "html", null, true);
                echo "\" id=\"slide";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 169), "html", null, true);
=======
                // line 172
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_description", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 172)]), "html", null, true);
                echo "\">
      <img src=\"";
                // line 173
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/uploads/" . twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 173))), "html", null, true);
                echo "\" id=\"slide";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 173), "html", null, true);
>>>>>>> main
                echo "\">
      </a>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< HEAD
            // line 172
            echo "  ";
        }
        // line 173
        echo "</div>
<div class=\"text\">
  ";
        // line 175
        if (array_key_exists("eventT", $context)) {
            // line 176
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["eventT"]) || array_key_exists("eventT", $context) ? $context["eventT"] : (function () { throw new RuntimeError('Variable "eventT" does not exist.', 176, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 177
                echo "      <p>
        ";
                // line 178
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 178), "html", null, true);
=======
            // line 176
            echo "  ";
        }
        // line 177
        echo "</div>
<div class=\"text\">
  ";
        // line 179
        if (array_key_exists("eventU", $context)) {
            // line 180
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["eventT"]) || array_key_exists("eventT", $context) ? $context["eventT"] : (function () { throw new RuntimeError('Variable "eventT" does not exist.', 180, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 181
                echo "      <p>
        ";
                // line 182
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 182), "html", null, true);
>>>>>>> main
                echo "<br>
        <span class=\"small\"></span>
      </p>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< HEAD
            // line 182
            echo "  ";
        }
        // line 183
=======
            // line 186
            echo "  ";
        }
        // line 187
>>>>>>> main
        echo "</div>
               

      </div>
    </section>

    <section class=\"flow section\" id=\"section--2\">
      <h1 class=\"catalogueTitle catalogue-animation \">Our Catalogue</h1>
      <div style=\"font-size: 1.5rem; text-align: center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif\">
        Simply hover over the cards to get a sneak peek of the events,<br>or click on a category to dive deeper into the world of entertainment<br>and purchase your tickets! 🎟️
      </div>
      <div class=\"team\">
        <ul class=\"auto-grid\" role=\"list\">
          <li>
             <a href=\"";
<<<<<<< HEAD
        // line 197
=======
        // line 201
>>>>>>> main
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filterType", ["eventType" => "Festivals"]);
        echo "\" target=\"_blank\" class=\"cardGrid\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/main/catalogue/festivals.jpg"), "html", null, true);
        echo "');\"> 
              <h2 class=\"card__name\">Festivals</h2>
              <p class=\"catP\">Discover the hottest festivals in town and experience the ultimate party scene.</p>
            </a>
          </li>
          <li>
             <a href=\"";
<<<<<<< HEAD
        // line 203
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filterType", ["eventType" => "Sport"]);
=======
        // line 207
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filterType", ["eventType" => "Sports"]);
>>>>>>> main
        echo "\" target=\"_blank\" class=\"cardGrid\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/main/catalogue/sport.jpg"), "html", null, true);
        echo "');\">
              <h2 class=\"card__name\">Sport</h2>
              <p class=\"catP\">Get your adrenaline pumping with our thrilling sports events and buy your tickets now.</p>
            </a>
          </li>
          <li>
             <a href=\"";
<<<<<<< HEAD
        // line 209
=======
        // line 213
>>>>>>> main
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filterType", ["eventType" => "Concerts"]);
        echo "\" target=\"_blank\" class=\"cardGrid\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/main/catalogue/concerts.jpg"), "html", null, true);
        echo "');\"> 
              <h2 class=\"card__name\">Concerts</h2>
              <p class=\"catP\">Immerse yourself in the music and attend the most happening concerts in the city.</p>
            </a>
          </li>
      
          <li>
             <a href=\"";
<<<<<<< HEAD
        // line 216
=======
        // line 220
>>>>>>> main
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filterType", ["eventType" => "theatre"]);
        echo "\" target=\"_blank\" class=\"cardGrid\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/main/catalogue/theatre.jpg"), "html", null, true);
        echo "');\"> 
              <h2 class=\"card__name\">Theatre</h2>
              <p class=\"catP\">Indulge in the world of drama and witness the finest plays and theatre performances.</p>
            </a>
          </li>
          <li>
             <a href=\"";
<<<<<<< HEAD
        // line 222
=======
        // line 226
>>>>>>> main
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filterType", ["eventType" => "Cinema"]);
        echo "\" target=\"_blank\" class=\"cardGrid\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/main/catalogue/cinema.jpg"), "html", null, true);
        echo "');\"> 
              <h2 class=\"card__name\">Cinema</h2>
              <p class=\"catP\">Get your popcorn ready and browse our collection of movies and cinema experiences.</p>
            </a>
          </li>
          <li>
             <a href=\"";
<<<<<<< HEAD
        // line 228
=======
        // line 232
>>>>>>> main
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filterType", ["eventType" => "Other"]);
        echo "\" target=\"_blank\" class=\"cardGrid\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/main/catalogue/other.jpg"), "html", null, true);
        echo "');\"> 
              <h2 class=\"card__name\">Other</h2>
              <p class=\"catP\">Explore a diverse range of unique events that don't fit into the other categories.</p>
            </a>
          </li>
        </ul>
      </div>
    </section>
    

    <section class=\"section section--hidden\" id=\"section--3\">
      <div class=\"section__title section__title--testimonials\">
        <h2 class=\"section__description\">Not sure yet?</h2>
        <h3 class=\"section__header\">
          New lifestyle coming ahead with our events.
        </h3>
      </div>

      <div class=\"slider\">
        <div class=\"slide slide--1\">
          <div class=\"testimonial\">
            <h5 class=\"testimonial__header\">Best Place ever!</h5>
            <blockquote class=\"testimonial__text\">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Accusantium quas quisquam non? Quas voluptate nulla minima
              deleniti optio ullam nesciunt, numquam corporis et asperiores
              laboriosam sunt, praesentium suscipit blanditiis. Necessitatibus
              id alias reiciendis, perferendis facere pariatur dolore veniam
              autem esse non voluptatem saepe provident nihil molestiae.
            </blockquote>
            <!-- <address class=\"testimonial__author\">
              <img src=\"img/user-1.jpg\" alt=\"\" class=\"testimonial__photo\" />
              <h6 class=\"testimonial__name\">Aarav Lynn</h6>
              <p class=\"testimonial__location\">San Francisco, USA</p>
            </address> -->
          </div>
        </div>

        <div class=\"slide slide--2\">
          <div class=\"testimonial\">
            <h5 class=\"testimonial__header\">
              The first step to get above social anxiety!
            </h5>
            <blockquote class=\"testimonial__text\">
              Quisquam itaque deserunt ullam, quia ea repellendus provident,
              ducimus neque ipsam modi voluptatibus doloremque, corrupti
              laborum. Incidunt numquam perferendis veritatis neque repellendus.
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo
              deserunt exercitationem deleniti.
            </blockquote>
            <!-- <address class=\"testimonial__author\">
              <img src=\"img/user-2.jpg\" alt=\"\" class=\"testimonial__photo\" />
              <h6 class=\"testimonial__name\">Miyah Miles</h6>
              <p class=\"testimonial__location\">London, UK</p>
            </address> -->
          </div>
        </div>

        <div class=\"slide slide--3\">
          <div class=\"testimonial\">
            <h5 class=\"testimonial__header\">
              Finally free from old-school ticket booking!
            </h5>
            <blockquote class=\"testimonial__text\">
              Debitis, nihil sit minus suscipit magni aperiam vel tenetur
              incidunt commodi architecto numquam omnis nulla autem,
              necessitatibus blanditiis modi similique quidem. Odio aliquam
              culpa dicta beatae quod maiores ipsa minus consequatur error sunt,
              deleniti saepe aliquid quos inventore sequi. Necessitatibus id
              alias reiciendis, perferendis facere.
            </blockquote>
            <!-- <address class=\"testimonial__author\">
              <img src=\"img/user-3.jpg\" alt=\"\" class=\"testimonial__photo\" />
              <h6 class=\"testimonial__name\">Francisco Gomes</h6>
              <p class=\"testimonial__location\">Lisbon, Portugal</p>
            </address> -->
          </div>
        </div>

        <!-- <div class=\"slide\"><img src=\"img/img-1.jpg\" alt=\"Photo 1\" /></div>
        <div class=\"slide\"><img src=\"img/img-2.jpg\" alt=\"Photo 2\" /></div>
        <div class=\"slide\"><img src=\"img/img-3.jpg\" alt=\"Photo 3\" /></div>
        <div class=\"slide\"><img src=\"img/img-4.jpg\" alt=\"Photo 4\" /></div> -->
        <button class=\"slider__btn slider__btn--left\"> < </button>
        <button class=\"slider__btn slider__btn--right\">></button>
        <div class=\"dots\"></div>
      </div>
    </section>


    <section class=\"section section--feedback section--hidden\">
      <div class=\"section__title\">
        <h2 class=\"section__description\">You have something to say ?</h2>
        <h3 class=\"section__header\">Give us your feedback !</h3>
      </div>

      <div class=\"field-group\">
      <form action=\"index.html\" method=\"post\">
        <textarea name=\"feedback\" id=\"feedback\" cols=\"30\" rows=\"10\" class=\"textarea-field\" placeholder=\"Enter Feedback\"></textarea>
        <!-- <label for=\"feedback\" class=\"textarea-label\">Enter your message</label> -->
        <input type=\"submit\" name=\"fsubmit\" class=\"btn btn--show-modal\">
      </form>
      </div>
    </section>

    <section class=\"section section--sign-up section--hidden\">
      <div class=\"section__title\">
        <h3 class=\"section__header\">
          The best day to join us is TODAY. The second best is now!
        </h3>
      </div>
      <button class=\"btn btn--show-modal\">Open your free account today!</button>
    </section>


    <div class=\"modal hidden\">
      <button class=\"btn--close-modal\">&times;</button>
      <h2 class=\"modal__header\">
        Open your account <br />
        in just <span class=\"highlight\"> 5 minutes</span>
      </h2>
      <div class=\"modal__form form-box login\">
        <form method=\"POST\" action=\"";
<<<<<<< HEAD
        // line 350
=======
        // line 354
>>>>>>> main
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_signin");
        echo "\">
          <div class=\"input-box\">
            <span class=\"icon\"><i class=\"bx bxs-envelope\"></i></span>
            <input type=\"email\" name=\"email\" required />
            <label>Email</label>
          </div>
          <div class=\"input-box\">
            <span class=\"icon\"><i class=\"bx bxs-lock-alt\"></i></span>
            <input type=\"password\" name=\"password\" required />
            <label>Password</label>
          </div>
          <div class=\"remember-forgot\">
            <label
              ><input type=\"checkbox\" name=\"remember\" />Remember me</label
            >
            <a href=\"#\">Forgot password?</a>
          </div>

          <button type=\"submit\" name=\"signin\" class=\"btn\">Sign In</button>
          <div class=\"login-register\">
            <p>
              Don't have an account?
              <a href=\"";
<<<<<<< HEAD
        // line 372
=======
        // line 376
>>>>>>> main
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_signup");
        echo "\" class=\"register-link\">Sign up</a>
            </p>
          </div>
</form>
    </div>
    </div>
    <div class=\"overlay hidden\"></div>


    <!-- CART MODAL WINDOWS -->
    <div class=\" modal modal-container hidden\">
      <button class=\"btn--close-modal close-button\" id=\"close-btn\">&times;</button>
      <h2 class=\"modal__header\">
        Shopping Cart
      </h2>
      <div class=\"cart-items-container\">
        ";
<<<<<<< HEAD
        // line 388
        if (array_key_exists("items", $context)) {
            // line 389
            echo "          <form class=\"modal__form form-box login\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout");
            echo "\" method=\"post\">
            ";
            // line 390
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 390, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 391
                echo "              <div class=\"cart-box\">
                ";
                // line 392
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 392), "image", [], "any", false, false, false, 392)) {
                    // line 393
                    echo "                  <img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 393), "image", [], "any", false, false, false, 393), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 393), "name", [], "any", false, false, false, 393), "html", null, true);
=======
        // line 392
        if ((array_key_exists("items", $context) && (twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 392, $this->source); })())) != 0))) {
            // line 393
            echo "        <form class=\"modal__form form-box login\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_payment");
            echo "\" method=\"post\">
          ";
            // line 394
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 394, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 395
                echo "            <div class=\"cart-box\">
              ";
                // line 396
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 396), "image", [], "any", false, false, false, 396)) {
                    // line 397
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 397), "image", [], "any", false, false, false, 397), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 397), "name", [], "any", false, false, false, 397), "html", null, true);
>>>>>>> main
                    echo "\" class=\"cart-img\">
                ";
                } else {
<<<<<<< HEAD
                    // line 395
                    echo "                  <img src=\"/assets/images/main/catalogue/concerts.jpg\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 395), "name", [], "any", false, false, false, 395), "html", null, true);
=======
                    // line 399
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/main/catalogue/concerts.jpg"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 399), "name", [], "any", false, false, false, 399), "html", null, true);
>>>>>>> main
                    echo "\" class=\"cart-img\">
                ";
                }
<<<<<<< HEAD
                // line 397
                echo "                <div class=\"detail-box\">
                  <div class=\"cart-product-title\">";
                // line 398
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 398), "name", [], "any", false, false, false, 398), "html", null, true);
                echo " </div>
                    ";
                // line 400
                echo "                  <input type=\"number\" name=\"quantity_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 400), "id", [], "any", false, false, false, 400), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 400), "html", null, true);
                echo "\" min=\"1\" data-initial-price=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 400), "price", [], "any", false, false, false, 400), "html", null, true);
                echo "\" max=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 400), "nbPlaces", [], "any", false, false, false, 400), "html", null, true);
                echo "\" class=\"cart-quantity\">


                  <div class=\"cart-price\">";
                // line 403
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 403), "price", [], "any", false, false, false, 403) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 403)), "html", null, true);
=======
                // line 401
                echo "              <div class=\"detail-box\">
                <div class=\"cart-product-title\" >";
                // line 402
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 402), "name", [], "any", false, false, false, 402), "html", null, true);
                echo " </div>
                <input type=\"number\" name=\"quantity\" value=\"";
                // line 403
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 403), "html", null, true);
                echo "\" min=\"1\"  max=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 403), "nbPlaces", [], "any", false, false, false, 403), "html", null, true);
                echo "\" class=\"cart-quantity\">
                <div class=\"cart-price\" data-initial-price=\"";
                // line 404
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 404), "price", [], "any", false, false, false, 404), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 404), "price", [], "any", false, false, false, 404) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 404)), "html", null, true);
>>>>>>> main
                echo "</div>
                </div>

                <!-- Remove Cart -->
                <a href=\"";
                // line 407
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 407), "id", [], "any", false, false, false, 407)]), "html", null, true);
                echo "\" class=\"cart-remove\" data-method=\"delete\"><i class='fas fa-trash-alt'></i></a>
              </div>

<<<<<<< HEAD
            ";
=======
              <!-- Remove Cart -->
              <a href=\"";
                // line 408
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 408), "id", [], "any", false, false, false, 408)]), "html", null, true);
                echo "\" class=\"cart-remove\" data-method=\"delete\"><i class='fas fa-trash-alt'></i></a>
            </div>
          ";
>>>>>>> main
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 411
<<<<<<< HEAD
            echo "            <div class=\"payer\">
              <hr>
              <div>
                <div class=\"remember-forgot\">
                  <div class=\"total-title\">Total : </div>
                  <input class=\"total-price\" type=\"number\" name=\"total\" id=\"total-price\" value=\"";
            // line 416
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 416, $this->source); })()), "html", null, true);
            echo "\" readonly>
                </div>
                ";
            // line 419
            echo "                <input type=\"hidden\" name=\"items\" value=\"";
            echo twig_escape_filter($this->env, json_encode((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 419, $this->source); })())), "html", null, true);
            echo "\">
                <button type=\"submit\" class=\"btn\">Checkout</button>
=======
            echo "          <div class=\"payer\">
            <hr>
            <div>
              <div class=\"remember-forgot\">
                <div class=”total-title”>Total : </div>
                <div class=”total-price” id=\"total-price\">";
            // line 416
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 416, $this->source); })()), "html", null, true);
            echo "</div>
>>>>>>> main
              </div>
            </div>

        ";
        } else {
<<<<<<< HEAD
            // line 425
            echo "          <p>Cart is empty..</p>
          <br>
          <button class=\"btn\"><a href=\"#section--2\" style=\"text-decoration: none\"> Go buy your tickets</a></button>
        ";
        }
        // line 429
        echo "          </form>
=======
            // line 422
            echo "            <p>Cart is empty..</p>
            <br>
            <button class=\"btn\"><a href=\"#section--2\" style=\"text-decoration: none\"> Go buy your tickets</a></button>
          ";
        }
        // line 426
        echo "        </form>
>>>>>>> main
      </div>
    </div>
    <div class=\"overlay hidden\"></div>



";
<<<<<<< HEAD
        // line 437
=======
        // line 434
>>>>>>> main
        echo "    <footer class=\"footer\">
      <ul class=\"footer__nav\">
        <li class=\"footer__item\">
          <a class=\"footer__link\" href=\"#\">About</a>
        </li>
        <li class=\"footer__item\">
          <a class=\"footer__link\" target=\"_blank\" href=\"#\">Pricing</a>
        </li>
        <li class=\"footer__item\">
          <a class=\"footer__link\" href=\"#\">Privacy Policy</a>
        </li>
        <li class=\"footer__item\">
          <a class=\"footer__link\" target=\"_blank\" href=\"contact/index.html.twig\">Contact Us</a>
        </li>
      </ul>
      <img src=\"";
<<<<<<< HEAD
        // line 452
=======
        // line 449
>>>>>>> main
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/faviconP.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"nav__logo\" id=\"logo\" />
    </footer>

  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  805 => 452,  788 => 437,  779 => 429,  773 => 425,  763 => 419,  758 => 416,  751 => 411,  741 => 407,  734 => 403,  721 => 400,  717 => 398,  714 => 397,  708 => 395,  700 => 393,  698 => 392,  695 => 391,  691 => 390,  686 => 389,  684 => 388,  665 => 372,  640 => 350,  513 => 228,  502 => 222,  491 => 216,  479 => 209,  468 => 203,  457 => 197,  441 => 183,  438 => 182,  428 => 178,  425 => 177,  420 => 176,  418 => 175,  414 => 173,  411 => 172,  392 => 169,  387 => 168,  369 => 167,  367 => 166,  363 => 164,  360 => 163,  350 => 159,  347 => 158,  342 => 157,  340 => 156,  336 => 154,  333 => 153,  314 => 150,  309 => 149,  291 => 148,  289 => 147,  285 => 145,  282 => 144,  272 => 140,  269 => 139,  264 => 138,  262 => 137,  258 => 135,  255 => 134,  236 => 131,  231 => 130,  213 => 129,  211 => 128,  186 => 105,  178 => 99,  176 => 98,  173 => 97,  157 => 83,  155 => 82,  148 => 77,  144 => 75,  136 => 70,  131 => 68,  122 => 61,  120 => 60,  112 => 55,  96 => 42,  91 => 39,  88 => 38,  67 => 19,  61 => 16,  56 => 14,  52 => 12,  43 => 1,);
=======
        return array (  805 => 449,  788 => 434,  779 => 426,  773 => 422,  764 => 416,  757 => 411,  748 => 408,  739 => 404,  733 => 403,  729 => 402,  726 => 401,  718 => 399,  710 => 397,  708 => 396,  705 => 395,  701 => 394,  696 => 393,  694 => 392,  675 => 376,  650 => 354,  523 => 232,  512 => 226,  501 => 220,  489 => 213,  478 => 207,  467 => 201,  451 => 187,  448 => 186,  438 => 182,  435 => 181,  430 => 180,  428 => 179,  424 => 177,  421 => 176,  402 => 173,  397 => 172,  379 => 171,  377 => 170,  373 => 168,  370 => 167,  360 => 163,  357 => 162,  352 => 161,  350 => 160,  346 => 158,  343 => 157,  324 => 154,  319 => 153,  301 => 152,  299 => 151,  295 => 149,  292 => 148,  282 => 144,  279 => 143,  274 => 142,  272 => 141,  268 => 139,  265 => 138,  246 => 135,  241 => 134,  223 => 133,  221 => 132,  196 => 109,  188 => 103,  186 => 102,  183 => 101,  167 => 87,  165 => 86,  158 => 81,  154 => 79,  146 => 74,  141 => 72,  132 => 65,  130 => 64,  122 => 59,  106 => 46,  101 => 43,  98 => 42,  82 => 28,  78 => 27,  67 => 19,  61 => 16,  56 => 14,  52 => 12,  43 => 1,);
>>>>>>> main
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">


    {# <link
      href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&display=swap\"
      rel=\"stylesheet\"
    /> #}

    <!-- favicon -->
    <link rel=\"icon\" href=\"{{ asset('assets/images/faviconM.ico') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/main/style.css') }}\" />
    <title>TicketHive</title>

    <script defer src=\"{{ asset('assets/js/main/script.js') }}\"></script>
  </head>

  <body>
    <header class=\"header\">
      <!-- Nav Bar -->
      <nav class=\"nav\">
<<<<<<< HEAD
        <img src=\"/assets/images/picc.png\" alt=\"\" class=\"nav__logo\" id=\"logo\" />
        <a class=\"navbar-brand\" href=\"\">TicketHive</a>        <ul class=\"nav__links\">
=======

        <img src=\"{{ asset('assets/images/picc.png ') }}\" alt=\"\" class=\"nav__logo\" id=\"logo\" />
        <a class=\"navbar-brand\" href=\"{{path ('main')}}\">TicketHive</a>


        <ul class=\"nav__links\">
>>>>>>> main
          <li class=\"nav__item\">
            <a class=\"nav__link\" href=\"#section--1\">Events</a>
          </li>
          <li class=\"nav__item\">
            <a class=\"nav__link\" href=\"#section--2\">Catalogue</a>
          </li>
          <li class=\"nav__item\">
            <a class=\"nav__link\" href=\"#section--3\">Testimonials</a>
          </li>
          {# check if username=admin unique then show the admin button#}
          {% if app.session.get('username') == 'admin'%}
            <div class=\"app-header-actions\">
              <button class=\"user-profile\" id=\"userprofile\">
                <span>
                    {{ app.session.get('username')|slice(0,1) }}
                  </span>
              </button>
            </div>
        </ul>
      </nav>
      <div class=\"header__title\">
        <h1>
          Enjoy Your
          <!-- Green highlight effect -->
          <span class=\"highlight\"> Success </span>
          Via<br />
          Consulting
          <span class=\"highlight\"><a  target=\"_blank\" href=\"{{ path('admin') }}\" style=\"color:#00ffdd; text-decoration: none\">Admin Dashboard</a></span>
        </h1>
        <button class=\"btn--text btn--scroll-to\">Learn more &DownArrow;</button>
      </div>
    </header>
          {% elseif app.session.get('username') %}
            <div class=\"app-header-actions\">
              <button class=\"user-profile\">
             <span>
             <i class=\"fa-solid fa-basket-shopping fa-xl\" id=\"open-cart-icon\"></i>
              </span>
              </button>
              <button class=\"user-profile\" id=\"userprofile\">
                <span>{{ app.session.get('username') }}</span>
                <span>
                    {{ app.session.get('username')|slice(0,1) }}
                  </span>
              </button>
            </div>
          {% else %}
            <a class=\"nav__link nav__link--btn btn--show-modal\" href=\"#\">Log in</a>
          {% endif %}
          </li>

        </ul>
      </nav>

    {% if app.session.get('username') != 'admin'%}
      <div class=\"header__title\">
        <h1>
          Experience
          <!-- Green highlight effect -->
          <span class=\"highlight\">Effortless</span>
          Ticket<br />
          Buying for Your
          <span class=\"highlight\">Favorite</span>
          Event
        </h1>
        <button class=\"btn--text btn--scroll-to\">Learn more &DownArrow;</button>
      </div>
    </header>
    {% endif %}

    {% if app.session.get('username') %}
      <div class=\"dropdown-user\">
      <li id=\"update\">Update</li>
      <li id=\"addevent\">Add Event</li>
      <li id=\"logout\">Logout</li>
    </div>
    {% endif %}

    <section class=\"section section--hidden\" id=\"section--1\">
      <div class=\"section__title\">
        <h2 class=\"section__description\">Events</h2>
        <h3 class=\"section__header\">Go out and have fun You only live once.</h3>
      </div>

      <div class=\"operations\">
        <div class=\"operations__tab-container\">
          <button
            class=\"btn operations__tab operations__tab--1 operations__tab--active\"
            data-tab=\"1\"
          >
            <span>01</span>Today
          </button>
          <button class=\"btn operations__tab operations__tab--2\" data-tab=\"2\">
            <span>02</span>This Weekend
          </button>
          <button class=\"btn operations__tab operations__tab--3\" data-tab=\"3\">
            <span>03</span>Coming Soon
          </button>
        </div>
         <div class=\"slider1\">
            {% if eventT is defined %}
            {% for event in eventT %}
            <a href=\"{{path ('event_description',{'id' : event.id })}}\">
      <img src=\"{{ asset('assets/images/uploads/' ~ event.image) }}\"  id=\"slide{{loop.index}}\">
      </a>
    {% endfor %}
  {% endif %}
</div>
<div class=\"text\">
  {% if eventT is defined %}
    {% for event in eventT %}
      <p>
        {{event.name}}<br>
        <span class=\"small\"></span>
      </p>
    {% endfor %}
  {% endif %}
</div> 
         <div class=\"slider2\">
            {% if eventT is defined %}
            {% for event in eventT %}
            <a href=\"{{path ('event_description',{'id' : event.id })}}\">
      <img src=\"{{ asset('assets/images/uploads/' ~ event.image) }}\"  id=\"slide{{loop.index}}\">
      </a>
    {% endfor %}
  {% endif %}
</div>
<div class=\"text\">
  {% if eventW is defined %}
    {% for event in eventT %}
      <p>
        {{event.name}}<br>
        <span class=\"small\"></span>
      </p>
    {% endfor %}
  {% endif %}
</div>
         <div class=\"slider3\">
            {% if eventT is defined %}
            {% for event in eventT %}
            <a href=\"{{path ('event_description',{'id' : event.id })}}\">
      <img src=\"{{ asset('assets/images/uploads/' ~ event.image) }}\" id=\"slide{{loop.index}}\">
      </a>
    {% endfor %}
  {% endif %}
</div>
<div class=\"text\">
  {% if eventU is defined %}
    {% for event in eventT %}
      <p>
        {{event.name}}<br>
        <span class=\"small\"></span>
      </p>
    {% endfor %}
  {% endif %}
</div>
               

      </div>
    </section>

    <section class=\"flow section\" id=\"section--2\">
      <h1 class=\"catalogueTitle catalogue-animation \">Our Catalogue</h1>
      <div style=\"font-size: 1.5rem; text-align: center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif\">
        Simply hover over the cards to get a sneak peek of the events,<br>or click on a category to dive deeper into the world of entertainment<br>and purchase your tickets! 🎟️
      </div>
      <div class=\"team\">
        <ul class=\"auto-grid\" role=\"list\">
          <li>
             <a href=\"{{ path ('event.filterType',{'eventType': 'Festivals'}) }}\" target=\"_blank\" class=\"cardGrid\" style=\"background-image: url('{{ asset('assets/images/main/catalogue/festivals.jpg') }}');\"> 
              <h2 class=\"card__name\">Festivals</h2>
              <p class=\"catP\">Discover the hottest festivals in town and experience the ultimate party scene.</p>
            </a>
          </li>
          <li>
             <a href=\"{{ path ('event.filterType',{'eventType': 'Sports'}) }}\" target=\"_blank\" class=\"cardGrid\" style=\"background-image: url('{{ asset('assets/images/main/catalogue/sport.jpg') }}');\">
              <h2 class=\"card__name\">Sport</h2>
              <p class=\"catP\">Get your adrenaline pumping with our thrilling sports events and buy your tickets now.</p>
            </a>
          </li>
          <li>
             <a href=\"{{ path ('event.filterType',{'eventType': 'Concerts'}) }}\" target=\"_blank\" class=\"cardGrid\" style=\"background-image: url('{{ asset('assets/images/main/catalogue/concerts.jpg') }}');\"> 
              <h2 class=\"card__name\">Concerts</h2>
              <p class=\"catP\">Immerse yourself in the music and attend the most happening concerts in the city.</p>
            </a>
          </li>
      
          <li>
             <a href=\"{{ path ('event.filterType',{'eventType': 'theatre'}) }}\" target=\"_blank\" class=\"cardGrid\" style=\"background-image: url('{{ asset('assets/images/main/catalogue/theatre.jpg') }}');\"> 
              <h2 class=\"card__name\">Theatre</h2>
              <p class=\"catP\">Indulge in the world of drama and witness the finest plays and theatre performances.</p>
            </a>
          </li>
          <li>
             <a href=\"{{ path ('event.filterType',{'eventType': 'Cinema'}) }}\" target=\"_blank\" class=\"cardGrid\" style=\"background-image: url('{{ asset('assets/images/main/catalogue/cinema.jpg') }}');\"> 
              <h2 class=\"card__name\">Cinema</h2>
              <p class=\"catP\">Get your popcorn ready and browse our collection of movies and cinema experiences.</p>
            </a>
          </li>
          <li>
             <a href=\"{{ path ('event.filterType',{'eventType': 'Other'}) }}\" target=\"_blank\" class=\"cardGrid\" style=\"background-image: url('{{ asset('assets/images/main/catalogue/other.jpg') }}');\"> 
              <h2 class=\"card__name\">Other</h2>
              <p class=\"catP\">Explore a diverse range of unique events that don't fit into the other categories.</p>
            </a>
          </li>
        </ul>
      </div>
    </section>
    

    <section class=\"section section--hidden\" id=\"section--3\">
      <div class=\"section__title section__title--testimonials\">
        <h2 class=\"section__description\">Not sure yet?</h2>
        <h3 class=\"section__header\">
          New lifestyle coming ahead with our events.
        </h3>
      </div>

      <div class=\"slider\">
        <div class=\"slide slide--1\">
          <div class=\"testimonial\">
            <h5 class=\"testimonial__header\">Best Place ever!</h5>
            <blockquote class=\"testimonial__text\">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Accusantium quas quisquam non? Quas voluptate nulla minima
              deleniti optio ullam nesciunt, numquam corporis et asperiores
              laboriosam sunt, praesentium suscipit blanditiis. Necessitatibus
              id alias reiciendis, perferendis facere pariatur dolore veniam
              autem esse non voluptatem saepe provident nihil molestiae.
            </blockquote>
            <!-- <address class=\"testimonial__author\">
              <img src=\"img/user-1.jpg\" alt=\"\" class=\"testimonial__photo\" />
              <h6 class=\"testimonial__name\">Aarav Lynn</h6>
              <p class=\"testimonial__location\">San Francisco, USA</p>
            </address> -->
          </div>
        </div>

        <div class=\"slide slide--2\">
          <div class=\"testimonial\">
            <h5 class=\"testimonial__header\">
              The first step to get above social anxiety!
            </h5>
            <blockquote class=\"testimonial__text\">
              Quisquam itaque deserunt ullam, quia ea repellendus provident,
              ducimus neque ipsam modi voluptatibus doloremque, corrupti
              laborum. Incidunt numquam perferendis veritatis neque repellendus.
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo
              deserunt exercitationem deleniti.
            </blockquote>
            <!-- <address class=\"testimonial__author\">
              <img src=\"img/user-2.jpg\" alt=\"\" class=\"testimonial__photo\" />
              <h6 class=\"testimonial__name\">Miyah Miles</h6>
              <p class=\"testimonial__location\">London, UK</p>
            </address> -->
          </div>
        </div>

        <div class=\"slide slide--3\">
          <div class=\"testimonial\">
            <h5 class=\"testimonial__header\">
              Finally free from old-school ticket booking!
            </h5>
            <blockquote class=\"testimonial__text\">
              Debitis, nihil sit minus suscipit magni aperiam vel tenetur
              incidunt commodi architecto numquam omnis nulla autem,
              necessitatibus blanditiis modi similique quidem. Odio aliquam
              culpa dicta beatae quod maiores ipsa minus consequatur error sunt,
              deleniti saepe aliquid quos inventore sequi. Necessitatibus id
              alias reiciendis, perferendis facere.
            </blockquote>
            <!-- <address class=\"testimonial__author\">
              <img src=\"img/user-3.jpg\" alt=\"\" class=\"testimonial__photo\" />
              <h6 class=\"testimonial__name\">Francisco Gomes</h6>
              <p class=\"testimonial__location\">Lisbon, Portugal</p>
            </address> -->
          </div>
        </div>

        <!-- <div class=\"slide\"><img src=\"img/img-1.jpg\" alt=\"Photo 1\" /></div>
        <div class=\"slide\"><img src=\"img/img-2.jpg\" alt=\"Photo 2\" /></div>
        <div class=\"slide\"><img src=\"img/img-3.jpg\" alt=\"Photo 3\" /></div>
        <div class=\"slide\"><img src=\"img/img-4.jpg\" alt=\"Photo 4\" /></div> -->
        <button class=\"slider__btn slider__btn--left\"> < </button>
        <button class=\"slider__btn slider__btn--right\">></button>
        <div class=\"dots\"></div>
      </div>
    </section>


    <section class=\"section section--feedback section--hidden\">
      <div class=\"section__title\">
        <h2 class=\"section__description\">You have something to say ?</h2>
        <h3 class=\"section__header\">Give us your feedback !</h3>
      </div>

      <div class=\"field-group\">
      <form action=\"index.html\" method=\"post\">
        <textarea name=\"feedback\" id=\"feedback\" cols=\"30\" rows=\"10\" class=\"textarea-field\" placeholder=\"Enter Feedback\"></textarea>
        <!-- <label for=\"feedback\" class=\"textarea-label\">Enter your message</label> -->
        <input type=\"submit\" name=\"fsubmit\" class=\"btn btn--show-modal\">
      </form>
      </div>
    </section>

    <section class=\"section section--sign-up section--hidden\">
      <div class=\"section__title\">
        <h3 class=\"section__header\">
          The best day to join us is TODAY. The second best is now!
        </h3>
      </div>
      <button class=\"btn btn--show-modal\">Open your free account today!</button>
    </section>


    <div class=\"modal hidden\">
      <button class=\"btn--close-modal\">&times;</button>
      <h2 class=\"modal__header\">
        Open your account <br />
        in just <span class=\"highlight\"> 5 minutes</span>
      </h2>
      <div class=\"modal__form form-box login\">
        <form method=\"POST\" action=\"{{path('login_signin')}}\">
          <div class=\"input-box\">
            <span class=\"icon\"><i class=\"bx bxs-envelope\"></i></span>
            <input type=\"email\" name=\"email\" required />
            <label>Email</label>
          </div>
          <div class=\"input-box\">
            <span class=\"icon\"><i class=\"bx bxs-lock-alt\"></i></span>
            <input type=\"password\" name=\"password\" required />
            <label>Password</label>
          </div>
          <div class=\"remember-forgot\">
            <label
              ><input type=\"checkbox\" name=\"remember\" />Remember me</label
            >
            <a href=\"#\">Forgot password?</a>
          </div>

          <button type=\"submit\" name=\"signin\" class=\"btn\">Sign In</button>
          <div class=\"login-register\">
            <p>
              Don't have an account?
              <a href=\"{{ path('login_signup')}}\" class=\"register-link\">Sign up</a>
            </p>
          </div>
</form>
    </div>
    </div>
    <div class=\"overlay hidden\"></div>


    <!-- CART MODAL WINDOWS -->
    <div class=\" modal modal-container hidden\">
      <button class=\"btn--close-modal close-button\" id=\"close-btn\">&times;</button>
      <h2 class=\"modal__header\">
        Shopping Cart
      </h2>
      <div class=\"cart-items-container\">
        {% if items is defined %}
          <form class=\"modal__form form-box login\" action=\"{{ path('checkout') }}\" method=\"post\">
            {% for item in items %}
              <div class=\"cart-box\">
                {% if item.event.image %}
                  <img src=\"{{ item.event.image }}\" alt=\"{{ item.event.name }}\" class=\"cart-img\">
                {% else %}
                  <img src=\"/assets/images/main/catalogue/concerts.jpg\" alt=\"{{ item.event.name }}\" class=\"cart-img\">
                {% endif %}
                <div class=\"detail-box\">
                  <div class=\"cart-product-title\">{{ item.event.name }} </div>
                    {# stocking here the initial price of the event and the quantity in stock#}
                  <input type=\"number\" name=\"quantity_{{ item.event.id }}\" value=\"{{ item.quantity }}\" min=\"1\" data-initial-price=\"{{ item.event.price }}\" max=\"{{ item.event.nbPlaces }}\" class=\"cart-quantity\">


                  <div class=\"cart-price\">{{ item.event.price * item.quantity }}</div>
                </div>

                <!-- Remove Cart -->
                <a href=\"{{ path('cart_remove', {'id': item.event.id}) }}\" class=\"cart-remove\" data-method=\"delete\"><i class='fas fa-trash-alt'></i></a>
              </div>

            {% endfor %}
            <div class=\"payer\">
              <hr>
              <div>
                <div class=\"remember-forgot\">
                  <div class=\"total-title\">Total : </div>
                  <input class=\"total-price\" type=\"number\" name=\"total\" id=\"total-price\" value=\"{{ total }}\" readonly>
                </div>
                {# saving the input values in the form here as hidden#}
                <input type=\"hidden\" name=\"items\" value=\"{{ items|json_encode() }}\">
                <button type=\"submit\" class=\"btn\">Checkout</button>
              </div>
            </div>

        {% else %}
          <p>Cart is empty..</p>
          <br>
          <button class=\"btn\"><a href=\"#section--2\" style=\"text-decoration: none\"> Go buy your tickets</a></button>
        {% endif %}
          </form>
      </div>
    </div>
    <div class=\"overlay hidden\"></div>



{#footer#}
    <footer class=\"footer\">
      <ul class=\"footer__nav\">
        <li class=\"footer__item\">
          <a class=\"footer__link\" href=\"#\">About</a>
        </li>
        <li class=\"footer__item\">
          <a class=\"footer__link\" target=\"_blank\" href=\"#\">Pricing</a>
        </li>
        <li class=\"footer__item\">
          <a class=\"footer__link\" href=\"#\">Privacy Policy</a>
        </li>
        <li class=\"footer__item\">
          <a class=\"footer__link\" target=\"_blank\" href=\"contact/index.html.twig\">Contact Us</a>
        </li>
      </ul>
      <img src=\"{{ asset('/assets/images/faviconP.png') }}\" alt=\"logo\" class=\"nav__logo\" id=\"logo\" />
    </footer>

  </body>
</html>
", "main/index.html.twig", "C:\\Users\\user\\Desktop\\TicketHive\\templates\\main\\index.html.twig");
    }
}
