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

/* event/index.html.twig */
class __TwigTemplate_79a409e3bfdbd636574eabc5f8062b68 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'imageContainer' => [$this, 'block_imageContainer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Catalogue</title>
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"img/icon.png\" />
    <link
      href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&display=swap\"
      rel=\"stylesheet\"
    />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main/style.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/eventFilter/style.css"), "html", null, true);
        echo "\">
    <script defer src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main/script.js"), "html", null, true);
        echo "\"></script>
</head>
<body>
  <header class=\"header\">
      <!-- Nav Bar -->
       <nav class=\"nav\">
        <img src=\"public/assets/images/favicon.ico\" alt=\"\" class=\"nav__logo\" id=\"logo\" />
        <a class=\"navbar-brand\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\">TicketHive</a>
        <ul class=\"nav__links\">
          <li class=\"nav__item\">
            <a class=\"nav__link\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event");
        echo "\">Events</a>
            </li>
          <li class=\"nav__item\">
          ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "session", [], "any", false, false, false, 29), "get", [0 => "username"], "method", false, false, false, 29)) {
            // line 30
            echo "            <div class=\"app-header-actions\">
              <button class=\"user-profile\" id=\"userprofile\">
                <span>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "session", [], "any", false, false, false, 32), "get", [0 => "username"], "method", false, false, false, 32), "html", null, true);
            echo "</span>
                <span>
                  <!-- <img src=\"https://assets.codepen.io/285131/almeria-avatar.jpeg\" /> -->
                  ";
            // line 35
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "session", [], "any", false, false, false, 35), "get", [0 => "username"], "method", false, false, false, 35), 0, 1), "html", null, true);
            echo "
                </span>
              </button>
            </div>
            ";
        } else {
            // line 40
            echo "              <a class=\"btn\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_signup");
            echo "\">Log in</a>
          ";
        }
        // line 42
        echo "            
          </li> 
              ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "session", [], "any", false, false, false, 44), "get", [0 => "username"], "method", false, false, false, 44)) {
            // line 45
            echo "      <div class=\"dropdown-user\">
      <li id=\"update\">Update</li>
      <li id=\"addevent\">Add Event</li>
      <li id=\"logout\">Logout</li>
    </div>
    ";
        }
        // line 51
        echo "
        </ul>
      </nav>
  </header>
<div class=\"navContainer\">
    <nav class=\"navbar bg-body-tertiary\">
        <form class=\"container-fluid\">
          <div class=\"d-flex align-items-center\">
            <div class=\"input-group\">
              <span class=\"input-group-text\" id=\"basic-addon1\">
                <div class=\"dropdown\">
                  <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    Genre
                  </button>
                  <ul class=\"dropdown-menu\">
                    <li><a class=\"dropdown-item\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filterType", ["eventType" => "Sports"]);
        echo " \">Sports</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filterType", ["eventType" => "Festivals"]);
        echo " \">Festivals</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filterType", ["eventType" => "Theatre"]);
        echo " \">Theatre</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filterType", ["eventType" => "Concerts"]);
        echo " \">Concerts</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filterType", ["eventType" => "Cinema"]);
        echo " \">Cinema</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filterType", ["eventType" => "Others"]);
        echo " \">Others</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event");
        echo "\">All</a></li>
                  </ul> 
                </div>
              </span>
            </div>
            <div class=\"input-group\">
              <span class=\"input-group-text\" id=\"basic-addon1\">
                <div class=\"dropdown\">
                  <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    Filter by
                  </button>
                  <ul class=\"dropdown-menu\">
                    <li><a class=\"dropdown-item\" href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filter", ["type" => "PriceAsc"]);
        echo " \">Price Ascending</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filter", ["type" => "PriceDesc"]);
        echo " \">Price Descending</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filter", ["type" => "DateAsc"]);
        echo " \">Date Ascending</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filter", ["type" => "DateDesc"]);
        echo " \">Date Descending</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filter", ["type" => "Runningout"]);
        echo " \">Running Out Soon</a></li>
                  </ul> 
                </div>
              </span>
            </div>
            <div class=\"input-group\">
              <input type=\"text\" class=\"form-control\" id=\"inputField\" placeholder=\"Write your preferences \" aria-label=\"Username\" aria-describedby=\"basic-addon1\">
            </div>
          </div>
        </form>
    </nav>
</div>
  ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "flashes", [], "any", false, false, false, 100));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 101
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 102
                echo "          <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\" style=\"text-align: center;color:white;background-color: rgba(0, 98, 149, 0.4);width: 1000px;margin : 0 auto;\">
              ";
                // line 103
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
          </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "      <div class=\"imageContainerContainer\">
      <div class=\"imageContainer\">
      ";
        // line 109
        $this->displayBlock('imageContainer', $context, $blocks);
        // line 144
        echo "        </div>

      </div>
    </div>
    <footer class=\"footer\">
      <ul class=\"footer__nav\">
        <li class=\"footer__item\">
          <a class=\"footer__link\" href=\"#\">About</a>
        </li>
        <li class=\"footer__item\">
          <a class=\"footer__link\" href=\"#\">Pricing</a>
        </li>
        <li class=\"footer__item\">
          <a class=\"footer__link\" href=\"#\">Terms of Use</a>
        </li>
        <li class=\"footer__item\">
          <a class=\"footer__link\" href=\"#\">Privacy Policy</a>
        </li>
        <li class=\"footer__item\">
          <a class=\"footer__link\" href=\"#\">Careers</a>
        </li>
        <li class=\"footer__item\">
          <a class=\"footer__link\" href=\"#\">Blog</a>
        </li>
        <li class=\"footer__item\">
          <a class=\"footer__link\" href=\"#\">Contact Us</a>
        </li>
      </ul>
      <img src=\"icon.png\" alt=\"Logo\" class=\"footer__logo\" />
    </footer>
      <script src = \"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/eventFilter/script.js"), "html", null, true);
        echo "\"></script>
      <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe\" crossorigin=\"anonymous\"></script>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 109
    public function block_imageContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "imageContainer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "imageContainer"));

        // line 110
        echo "         ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 110, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 111
            echo "      <div class=\"image\" >
          <a href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_description", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 112)]), "html", null, true);
            echo "\" >
          ";
            // line 113
            if (twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 113)) {
                // line 114
                echo "                <img src = \"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/uploads/" . twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 114))), "html", null, true);
                echo "\" onmouseover=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/uploads/" . twig_get_attribute($this->env, $this->source, $context["event"], "gif", [], "any", false, false, false, 114))), "html", null, true);
                echo "\" onmouseout=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/uploads/" . twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 114))), "html", null, true);
                echo "\">
              ";
            } else {
                // line 116
                echo "                <img src = \"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Default.jpg"), "html", null, true);
                echo "\" onmouseover=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Default.jpg"), "html", null, true);
                echo "\" onmouseout=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Default.jpg"), "html", null, true);
                echo "\">
          ";
            }
            // line 118
            echo "          <div class=\"textOver\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 118), "html", null, true);
            echo "</div>
          </a>
      </div>
        ";
            // line 142
            echo "           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "event/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 143,  349 => 142,  342 => 118,  332 => 116,  322 => 114,  320 => 113,  316 => 112,  313 => 111,  308 => 110,  298 => 109,  283 => 174,  251 => 144,  249 => 109,  245 => 107,  239 => 106,  230 => 103,  225 => 102,  220 => 101,  216 => 100,  201 => 88,  197 => 87,  193 => 86,  189 => 85,  185 => 84,  170 => 72,  166 => 71,  162 => 70,  158 => 69,  154 => 68,  150 => 67,  146 => 66,  129 => 51,  121 => 45,  119 => 44,  115 => 42,  109 => 40,  101 => 35,  95 => 32,  91 => 30,  89 => 29,  83 => 26,  77 => 23,  67 => 16,  63 => 15,  59 => 14,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Catalogue</title>
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"img/icon.png\" />
    <link
      href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&display=swap\"
      rel=\"stylesheet\"
    />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/main/style.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/eventFilter/style.css') }}\">
    <script defer src=\"{{ asset('assets/js/main/script.js') }}\"></script>
</head>
<body>
  <header class=\"header\">
      <!-- Nav Bar -->
       <nav class=\"nav\">
        <img src=\"public/assets/images/favicon.ico\" alt=\"\" class=\"nav__logo\" id=\"logo\" />
        <a class=\"navbar-brand\" href=\"{{path ('main')}}\">TicketHive</a>
        <ul class=\"nav__links\">
          <li class=\"nav__item\">
            <a class=\"nav__link\" href=\"{{path ('event')}}\">Events</a>
            </li>
          <li class=\"nav__item\">
          {% if app.session.get('username') %}
            <div class=\"app-header-actions\">
              <button class=\"user-profile\" id=\"userprofile\">
                <span>{{app.session.get('username')}}</span>
                <span>
                  <!-- <img src=\"https://assets.codepen.io/285131/almeria-avatar.jpeg\" /> -->
                  {{app.session.get('username')|slice(0,1)}}
                </span>
              </button>
            </div>
            {% else %}
              <a class=\"btn\" href=\"{{ path('login_signup')}}\">Log in</a>
          {% endif %}
            
          </li> 
              {% if app.session.get('username') %}
      <div class=\"dropdown-user\">
      <li id=\"update\">Update</li>
      <li id=\"addevent\">Add Event</li>
      <li id=\"logout\">Logout</li>
    </div>
    {% endif %}

        </ul>
      </nav>
  </header>
<div class=\"navContainer\">
    <nav class=\"navbar bg-body-tertiary\">
        <form class=\"container-fluid\">
          <div class=\"d-flex align-items-center\">
            <div class=\"input-group\">
              <span class=\"input-group-text\" id=\"basic-addon1\">
                <div class=\"dropdown\">
                  <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    Genre
                  </button>
                  <ul class=\"dropdown-menu\">
                    <li><a class=\"dropdown-item\" href=\"{{ path ('event.filterType',{'eventType': 'Sports'}) }} \">Sports</a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path ('event.filterType',{'eventType': 'Festivals'}) }} \">Festivals</a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path ('event.filterType',{'eventType': 'Theatre'}) }} \">Theatre</a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path ('event.filterType',{'eventType': 'Concerts'}) }} \">Concerts</a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path ('event.filterType',{'eventType': 'Cinema'}) }} \">Cinema</a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path ('event.filterType',{'eventType': 'Others'}) }} \">Others</a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path ('event')}}\">All</a></li>
                  </ul> 
                </div>
              </span>
            </div>
            <div class=\"input-group\">
              <span class=\"input-group-text\" id=\"basic-addon1\">
                <div class=\"dropdown\">
                  <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    Filter by
                  </button>
                  <ul class=\"dropdown-menu\">
                    <li><a class=\"dropdown-item\" href=\"{{ path ('event.filter',{'type':'PriceAsc'}) }} \">Price Ascending</a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path ('event.filter',{'type':'PriceDesc'}) }} \">Price Descending</a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path ('event.filter',{'type':'DateAsc'}) }} \">Date Ascending</a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path ('event.filter',{'type':'DateDesc'}) }} \">Date Descending</a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path ('event.filter',{'type': 'Runningout'}) }} \">Running Out Soon</a></li>
                  </ul> 
                </div>
              </span>
            </div>
            <div class=\"input-group\">
              <input type=\"text\" class=\"form-control\" id=\"inputField\" placeholder=\"Write your preferences \" aria-label=\"Username\" aria-describedby=\"basic-addon1\">
            </div>
          </div>
        </form>
    </nav>
</div>
  {% for type, messages in app.flashes %}
      {% for message in messages %}
          <div class=\"alert alert-{{ type }}\" style=\"text-align: center;color:white;background-color: rgba(0, 98, 149, 0.4);width: 1000px;margin : 0 auto;\">
              {{ message }}
          </div>
      {% endfor %}
  {% endfor %}
      <div class=\"imageContainerContainer\">
      <div class=\"imageContainer\">
      {% block imageContainer %}
         {% for event in events %}
      <div class=\"image\" >
          <a href=\"{{path ('event_description',{'id' : event.id })}}\" >
          {% if event.image  %}
                <img src = \"{{ asset('assets/images/uploads/' ~ event.image) }}\" onmouseover=\"{{ asset('assets/images/uploads/' ~ event.gif) }}\" onmouseout=\"{{ asset('assets/images/uploads/' ~ event.image) }}\">
              {% else %}
                <img src = \"{{ asset('assets/images/Default.jpg')}}\" onmouseover=\"{{ asset('assets/images/Default.jpg')}}\" onmouseout=\"{{ asset('assets/images/Default.jpg')}}\">
          {% endif %}
          <div class=\"textOver\">{{event.name}}</div>
          </a>
      </div>
        {# <!--textOver is the title of the event that would be displayed-->
        <div class=\"image\">
          <!--trying gif playing when hovering-->
            <img src=\"{{ asset('assets/images/eventFilter/ucl.png') }}\" onmouseover=\"this.src='{{ asset('assets/images/eventFilter/haaland.gif') }}'\" onmouseout=\"this.src='{{ asset('assets/images/eventFilter/ucl.png') }}'\">
            <div class=\"textOver\">Man City vs Bayern</div>
        </div>
        <div class=\"image\">
          <img src = \"{{ asset('assets/images/eventFilter/othersDefault.jpg') }}\" >
          <div class=\"textOver\">Other Events</div>
        </div>
        <div class=\"image\">
          <img src = \"{{ asset('assets/images/eventFilter/theatreDefault.webp') }}\" >
          <div class=\"textOver\">Theatre</div>
        </div>
        <div class=\"image\">
          <img src = \"{{ asset('assets/images/eventFilter/festivalsDefault.jpg') }}\" >
          <div class=\"textOver\">Festival</div>
        </div>
        <div class=\"image\">
          <img src = \"{{ asset('assets/images/eventFilter/sportDefault.png') }}\" >
          <div class=\"textOver\">Sports</div>--> #}
           {% endfor %}
          {% endblock %}
        </div>

      </div>
    </div>
    <footer class=\"footer\">
      <ul class=\"footer__nav\">
        <li class=\"footer__item\">
          <a class=\"footer__link\" href=\"#\">About</a>
        </li>
        <li class=\"footer__item\">
          <a class=\"footer__link\" href=\"#\">Pricing</a>
        </li>
        <li class=\"footer__item\">
          <a class=\"footer__link\" href=\"#\">Terms of Use</a>
        </li>
        <li class=\"footer__item\">
          <a class=\"footer__link\" href=\"#\">Privacy Policy</a>
        </li>
        <li class=\"footer__item\">
          <a class=\"footer__link\" href=\"#\">Careers</a>
        </li>
        <li class=\"footer__item\">
          <a class=\"footer__link\" href=\"#\">Blog</a>
        </li>
        <li class=\"footer__item\">
          <a class=\"footer__link\" href=\"#\">Contact Us</a>
        </li>
      </ul>
      <img src=\"icon.png\" alt=\"Logo\" class=\"footer__logo\" />
    </footer>
      <script src = \"{{ asset('assets/js/eventFilter/script.js') }}\"></script>
      <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe\" crossorigin=\"anonymous\"></script>

</body>
</html>", "event/index.html.twig", "C:\\Users\\ghrib\\OneDrive\\Desktop\\4thpull\\TicketHive\\templates\\event\\index.html.twig");
    }
}
