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

        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/picc.png "), "html", null, true);
        echo "\" alt=\"\" class=\"nav__logo\" id=\"logo\" />
        <a class=\"navbar-brand\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\">TicketHive</a>


        <ul class=\"nav__links\">
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
        // line 42
        echo "          ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "session", [], "any", false, false, false, 42), "get", [0 => "username"], "method", false, false, false, 42) == "admin")) {
            // line 43
            echo "            <div class=\"app-header-actions\">
              <button class=\"user-profile\" id=\"userprofile\">
                <span>
                    ";
            // line 46
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "session", [], "any", false, false, false, 46), "get", [0 => "username"], "method", false, false, false, 46), 0, 1), "html", null, true);
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
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\" style=\"color:#00ffdd; text-decoration: none\">Admin Dashboard</a></span>
        </h1>
        <button class=\"btn--text btn--scroll-to\">Learn more &DownArrow;</button>
      </div>
    </header>
          ";
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 64
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "session", [], "any", false, false, false, 64), "get", [0 => "username"], "method", false, false, false, 64)) {
            // line 65
            echo "            <div class=\"app-header-actions\">
              <button class=\"user-profile\">
             <span>
             <i class=\"fa-solid fa-basket-shopping fa-xl\" id=\"open-cart-icon\"></i>
              </span>
              </button>
              <button class=\"user-profile\" id=\"userprofile\">
                <span>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "session", [], "any", false, false, false, 72), "get", [0 => "username"], "method", false, false, false, 72), "html", null, true);
            echo "</span>
                <span>
                    ";
            // line 74
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "session", [], "any", false, false, false, 74), "get", [0 => "username"], "method", false, false, false, 74), 0, 1), "html", null, true);
            echo "
                  </span>
              </button>
            </div>
          ";
        } else {
            // line 79
            echo "            <a class=\"nav__link nav__link--btn btn--show-modal\" href=\"#\">Log in</a>
          ";
        }
        // line 81
        echo "  

        </ul>
      </nav>

    ";
        // line 86
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "session", [], "any", false, false, false, 86), "get", [0 => "username"], "method", false, false, false, 86) != "admin")) {
            // line 87
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
        // line 101
        echo "
    ";
        // line 102
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "session", [], "any", false, false, false, 102), "get", [0 => "username"], "method", false, false, false, 102)) {
            // line 103
            echo "      <div class=\"dropdown-user\">
      <li id=\"update\">Update</li>
      <li id=\"addevent\">Add Event</li>
      <li id=\"logout\">Logout</li>
    </div>
    ";
        }
        // line 109
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
        <div
          class=\"operations__content operations__content--1 operations__content--active\"
        >
         <div class=\"slider1\">
            ";
        // line 135
        if (array_key_exists("eventT", $context)) {
            // line 136
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["eventT"]) || array_key_exists("eventT", $context) ? $context["eventT"] : (function () { throw new RuntimeError('Variable "eventT" does not exist.', 136, $this->source); })()));
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
                // line 137
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_description", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 137)]), "html", null, true);
                echo "\">
      ";
                // line 138
                if (twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 138)) {
                    // line 139
                    echo "                <img src = \"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/uploads/" . twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 139))), "html", null, true);
                    echo "\" id=\"slide";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 139), "html", null, true);
                    echo "\" >
              ";
                } else {
                    // line 141
                    echo "                <img src = \"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Default.jpg"), "html", null, true);
                    echo "\" id=\"slide";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 141), "html", null, true);
                    echo "\">
          ";
                }
                // line 143
                echo "          <div class=\"text\" style = \"color : #231955 ;\">
          <p>
        ";
                // line 145
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 145), "html", null, true);
                echo "
        <span class=\"small\">";
                // line 146
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 146), "Y-m-d"), "html", null, true);
                echo "</span>
      </p>
      </div> 
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
            // line 151
            echo "  ";
        }
        // line 152
        echo "</div>
<div class=\"slider1-nav\">
";
        // line 154
        if (array_key_exists("eventT", $context)) {
            // line 155
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["eventT"]) || array_key_exists("eventT", $context) ? $context["eventT"] : (function () { throw new RuntimeError('Variable "eventT" does not exist.', 155, $this->source); })()));
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
                // line 156
                echo "        <a href=\"#slide";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 156), "html", null, true);
                echo "\">
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
            // line 158
            echo "  ";
        }
        // line 159
        echo "  </div>
";
        // line 169
        echo " 
</div>

<div class=\"operations__content operations__content--2\">
         <div class=\"slider2\">
            ";
        // line 174
        if (array_key_exists("eventW", $context)) {
            // line 175
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["eventW"]) || array_key_exists("eventW", $context) ? $context["eventW"] : (function () { throw new RuntimeError('Variable "eventW" does not exist.', 175, $this->source); })()));
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
                // line 176
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_description", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 176)]), "html", null, true);
                echo "\">
            ";
                // line 177
                if (twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 177)) {
                    // line 178
                    echo "                <img src = \"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/uploads/" . twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 178))), "html", null, true);
                    echo "\" id=\"slide";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 178), "html", null, true);
                    echo "\" >
              ";
                } else {
                    // line 180
                    echo "                <img src = \"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Default.jpg"), "html", null, true);
                    echo "\" id=\"slide";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 180), "html", null, true);
                    echo "\">
          ";
                }
                // line 182
                echo "          <div class=\"text\" style = \"color : #231955 ;\">
          <p>
        ";
                // line 184
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 184), "html", null, true);
                echo "
        <span class=\"small\">";
                // line 185
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 185), "Y-m-d"), "html", null, true);
                echo "</span>
      </p>
      </div> 
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
            // line 190
            echo "  ";
        }
        // line 191
        echo "</div>
";
        // line 201
        echo "  <div class=\"slider2-nav\">
";
        // line 202
        if (array_key_exists("eventT", $context)) {
            // line 203
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["eventT"]) || array_key_exists("eventT", $context) ? $context["eventT"] : (function () { throw new RuntimeError('Variable "eventT" does not exist.', 203, $this->source); })()));
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
                // line 204
                echo "        <a href=\"#slide";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 204), "html", null, true);
                echo "\">
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
            // line 206
            echo "  ";
        }
        // line 207
        echo "  </div>
</div>
<div class=\"operations__content operations__content--3\">
         <div class=\"slider3\">
            ";
        // line 211
        if (array_key_exists("eventU", $context)) {
            // line 212
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["eventU"]) || array_key_exists("eventU", $context) ? $context["eventU"] : (function () { throw new RuntimeError('Variable "eventU" does not exist.', 212, $this->source); })()));
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
                // line 213
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_description", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 213)]), "html", null, true);
                echo "\">
            ";
                // line 214
                if (twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 214)) {
                    // line 215
                    echo "                <img src = \"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/uploads/" . twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 215))), "html", null, true);
                    echo "\" id=\"slide";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 215), "html", null, true);
                    echo "\" >
              ";
                } else {
                    // line 217
                    echo "                <img src = \"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Default.jpg"), "html", null, true);
                    echo "\" id=\"slide";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 217), "html", null, true);
                    echo "\">
          ";
                }
                // line 219
                echo "          <div class=\"text\" style = \"color : #231955 ;\">
          <p>
        ";
                // line 221
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 221), "html", null, true);
                echo "
        <span class=\"small\">";
                // line 222
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 222), "Y-m-d"), "html", null, true);
                echo "</span>
      </p>
      </div> 
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
            // line 227
            echo "  ";
        }
        // line 228
        echo "</div>


";
        // line 240
        echo "  <div class=\"slider3-nav\">
";
        // line 241
        if (array_key_exists("eventT", $context)) {
            // line 242
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["eventT"]) || array_key_exists("eventT", $context) ? $context["eventT"] : (function () { throw new RuntimeError('Variable "eventT" does not exist.', 242, $this->source); })()));
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
                // line 243
                echo "        <a href=\"#slide";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 243), "html", null, true);
                echo "\">
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
            // line 245
            echo "  ";
        }
        // line 246
        echo "  </div>
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
             <a href=\"";
        // line 261
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
        // line 267
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filterType", ["eventType" => "Sports"]);
        echo "\" target=\"_blank\" class=\"cardGrid\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/main/catalogue/sport.jpg"), "html", null, true);
        echo "');\">
              <h2 class=\"card__name\">Sport</h2>
              <p class=\"catP\">Get your adrenaline pumping with our thrilling sports events and buy your tickets now.</p>
            </a>
          </li>
          <li>
             <a href=\"";
        // line 273
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
        // line 280
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
        // line 286
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
        // line 292
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
        // line 414
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
        // line 436
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
        // line 452
        if ((array_key_exists("items", $context) && (twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 452, $this->source); })())) != 0))) {
            // line 453
            echo "        <form class=\"modal__form form-box login\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_payment");
            echo "\" method=\"post\">
          ";
            // line 454
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 454, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 455
                echo "            <div class=\"cart-box\">
              ";
                // line 456
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 456), "image", [], "any", false, false, false, 456)) {
                    // line 457
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 457), "image", [], "any", false, false, false, 457), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 457), "name", [], "any", false, false, false, 457), "html", null, true);
                    echo "\" class=\"cart-img\">
              ";
                } else {
                    // line 459
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/main/catalogue/concerts.jpg"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 459), "name", [], "any", false, false, false, 459), "html", null, true);
                    echo "\" class=\"cart-img\">
              ";
                }
                // line 461
                echo "              <div class=\"detail-box\">
                <div class=\"cart-product-title\" >";
                // line 462
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 462), "name", [], "any", false, false, false, 462), "html", null, true);
                echo " </div>
                <input type=\"number\" name=\"quantity\" value=\"";
                // line 463
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 463), "html", null, true);
                echo "\" min=\"1\"  max=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 463), "nbPlaces", [], "any", false, false, false, 463), "html", null, true);
                echo "\" class=\"cart-quantity\">
                <div class=\"cart-price\" data-initial-price=\"";
                // line 464
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 464), "price", [], "any", false, false, false, 464), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 464), "price", [], "any", false, false, false, 464) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 464)), "html", null, true);
                echo "</div>
              </div>

              <!-- Remove Cart -->
              <a href=\"";
                // line 468
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 468), "id", [], "any", false, false, false, 468)]), "html", null, true);
                echo "\" class=\"cart-remove\" data-method=\"delete\"><i class='fas fa-trash-alt'></i></a>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 471
            echo "          <div class=\"payer\">
            <hr>
            <div>
              <div class=\"remember-forgot\">
                <div class=”total-title”>Total : </div>
                <div class=”total-price” id=\"total-price\">";
            // line 476
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 476, $this->source); })()), "html", null, true);
            echo "</div>
              </div>
              <button class=\"btn\">Checkout</button>
            </div>
          </div>
          ";
        } else {
            // line 482
            echo "            <p>Cart is empty..</p>
            <br>
            <button class=\"btn\"><a href=\"#section--2\" style=\"text-decoration: none\"> Go buy your tickets</a></button>
          ";
        }
        // line 486
        echo "        </form>
      </div>
    </div>
    <div class=\"overlay hidden\"></div>



";
        // line 494
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
        // line 509
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
        return array (  952 => 509,  935 => 494,  926 => 486,  920 => 482,  911 => 476,  904 => 471,  895 => 468,  886 => 464,  880 => 463,  876 => 462,  873 => 461,  865 => 459,  857 => 457,  855 => 456,  852 => 455,  848 => 454,  843 => 453,  841 => 452,  822 => 436,  797 => 414,  670 => 292,  659 => 286,  648 => 280,  636 => 273,  625 => 267,  614 => 261,  597 => 246,  594 => 245,  577 => 243,  559 => 242,  557 => 241,  554 => 240,  549 => 228,  546 => 227,  527 => 222,  523 => 221,  519 => 219,  511 => 217,  503 => 215,  501 => 214,  496 => 213,  478 => 212,  476 => 211,  470 => 207,  467 => 206,  450 => 204,  432 => 203,  430 => 202,  427 => 201,  424 => 191,  421 => 190,  402 => 185,  398 => 184,  394 => 182,  386 => 180,  378 => 178,  376 => 177,  371 => 176,  353 => 175,  351 => 174,  344 => 169,  341 => 159,  338 => 158,  321 => 156,  303 => 155,  301 => 154,  297 => 152,  294 => 151,  275 => 146,  271 => 145,  267 => 143,  259 => 141,  251 => 139,  249 => 138,  244 => 137,  226 => 136,  224 => 135,  196 => 109,  188 => 103,  186 => 102,  183 => 101,  167 => 87,  165 => 86,  158 => 81,  154 => 79,  146 => 74,  141 => 72,  132 => 65,  130 => 64,  122 => 59,  106 => 46,  101 => 43,  98 => 42,  82 => 28,  78 => 27,  67 => 19,  61 => 16,  56 => 14,  52 => 12,  43 => 1,);
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

        <img src=\"{{ asset('assets/images/picc.png ') }}\" alt=\"\" class=\"nav__logo\" id=\"logo\" />
        <a class=\"navbar-brand\" href=\"{{path ('main')}}\">TicketHive</a>


        <ul class=\"nav__links\">
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
        <div
          class=\"operations__content operations__content--1 operations__content--active\"
        >
         <div class=\"slider1\">
            {% if eventT is defined %}
            {% for event in eventT %}
            <a href=\"{{path ('event_description',{'id' : event.id })}}\">
      {% if event.image  %}
                <img src = \"{{ asset('assets/images/uploads/' ~ event.image) }}\" id=\"slide{{loop.index}}\" >
              {% else %}
                <img src = \"{{ asset('assets/images/Default.jpg')}}\" id=\"slide{{loop.index}}\">
          {% endif %}
          <div class=\"text\" style = \"color : #231955 ;\">
          <p>
        {{event.name}}
        <span class=\"small\">{{ event.date|date('Y-m-d') }}</span>
      </p>
      </div> 
      </a>
    {% endfor %}
  {% endif %}
</div>
<div class=\"slider1-nav\">
{% if eventT is defined %}
        {% for event in eventT %}
        <a href=\"#slide{{loop.index}}\">
        {% endfor %}
  {% endif %}
  </div>
{# <div class=\"text\" style = \"color : #231955 ;\">
  {% if eventT is defined %}
    {% for event in eventT %}
      <p>
        {{event.name}}
        <span class=\"small\">{{ event.date|date('Y-m-d') }}</span>
      </p>
    {% endfor %}
  {% endif %}
</div>  #} 
</div>

<div class=\"operations__content operations__content--2\">
         <div class=\"slider2\">
            {% if eventW is defined %}
            {% for event in eventW %}
            <a href=\"{{path ('event_description',{'id' : event.id })}}\">
            {% if event.image  %}
                <img src = \"{{ asset('assets/images/uploads/' ~ event.image) }}\" id=\"slide{{loop.index}}\" >
              {% else %}
                <img src = \"{{ asset('assets/images/Default.jpg')}}\" id=\"slide{{loop.index}}\">
          {% endif %}
          <div class=\"text\" style = \"color : #231955 ;\">
          <p>
        {{event.name}}
        <span class=\"small\">{{ event.date|date('Y-m-d') }}</span>
      </p>
      </div> 
      </a>
    {% endfor %}
  {% endif %}
</div>
{# <div class=\"text\" style = \"color : #231955 ;\">
  {% if eventW is defined %}
    {% for event in eventW %}
      <p>
        {{event.name}}
        <span class=\"small\">{{ event.date|date('Y-m-d') }}</span>
      </p>
    {% endfor %}
  {% endif %}#}
  <div class=\"slider2-nav\">
{% if eventT is defined %}
        {% for event in eventT %}
        <a href=\"#slide{{loop.index}}\">
        {% endfor %}
  {% endif %}
  </div>
</div>
<div class=\"operations__content operations__content--3\">
         <div class=\"slider3\">
            {% if eventU is defined %}
            {% for event in eventU %}
            <a href=\"{{path ('event_description',{'id' : event.id })}}\">
            {% if event.image  %}
                <img src = \"{{ asset('assets/images/uploads/' ~ event.image) }}\" id=\"slide{{loop.index}}\" >
              {% else %}
                <img src = \"{{ asset('assets/images/Default.jpg')}}\" id=\"slide{{loop.index}}\">
          {% endif %}
          <div class=\"text\" style = \"color : #231955 ;\">
          <p>
        {{event.name}}
        <span class=\"small\">{{ event.date|date('Y-m-d') }}</span>
      </p>
      </div> 
      </a>
    {% endfor %}
  {% endif %}
</div>


{# <div class=\"text\" style = \"color : #231955 ;\">
  {% if eventU is defined %}
    {% for event in eventU %}
      <p>
        {{event.name}}
        <span class=\"small\">{{ event.date|date('Y-m-d') }}</span>
      </p>
    {% endfor %}
  {% endif %}#}
  <div class=\"slider3-nav\">
{% if eventT is defined %}
        {% for event in eventT %}
        <a href=\"#slide{{loop.index}}\">
        {% endfor %}
  {% endif %}
  </div>
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
        {% if items is defined and items|length != 0 %}
        <form class=\"modal__form form-box login\" action=\"{{ path('cart_payment') }}\" method=\"post\">
          {% for item in items %}
            <div class=\"cart-box\">
              {% if item.event.image %}
                <img src=\"{{ item.event.image }}\" alt=\"{{ item.event.name }}\" class=\"cart-img\">
              {% else %}
                <img src=\"{{ asset('/assets/images/main/catalogue/concerts.jpg') }}\" alt=\"{{ item.event.name }}\" class=\"cart-img\">
              {% endif %}
              <div class=\"detail-box\">
                <div class=\"cart-product-title\" >{{ item.event.name }} </div>
                <input type=\"number\" name=\"quantity\" value=\"{{ item.quantity }}\" min=\"1\"  max=\"{{ item.event.nbPlaces }}\" class=\"cart-quantity\">
                <div class=\"cart-price\" data-initial-price=\"{{ item.event.price }}\">{{ item.event.price * item.quantity }}</div>
              </div>

              <!-- Remove Cart -->
              <a href=\"{{ path('cart_remove', {'id': item.event.id}) }}\" class=\"cart-remove\" data-method=\"delete\"><i class='fas fa-trash-alt'></i></a>
            </div>
          {% endfor %}
          <div class=\"payer\">
            <hr>
            <div>
              <div class=\"remember-forgot\">
                <div class=”total-title”>Total : </div>
                <div class=”total-price” id=\"total-price\">{{ total }}</div>
              </div>
              <button class=\"btn\">Checkout</button>
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
", "main/index.html.twig", "C:\\Users\\ghrib\\OneDrive\\Desktop\\4thpull\\TicketHive\\templates\\main\\index.html.twig");
    }
}
