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
          <li class=\"nav__item\">
          ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "session", [], "any", false, false, false, 28), "get", [0 => "username"], "method", false, false, false, 28)) {
            // line 29
            echo "            <div class=\"app-header-actions\">
              <button class=\"user-profile\" id=\"userprofile\">
                <span>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "session", [], "any", false, false, false, 31), "get", [0 => "username"], "method", false, false, false, 31), "html", null, true);
            echo "</span>
                <span>
                  <!-- <img src=\"https://assets.codepen.io/285131/almeria-avatar.jpeg\" /> -->
                  ";
            // line 34
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "session", [], "any", false, false, false, 34), "get", [0 => "username"], "method", false, false, false, 34), 0, 1), "html", null, true);
            echo "
                </span>
              </button>
            </div>
            ";
        } else {
            // line 39
            echo "              <a class=\"nav__link nav__link--btn btn--show-modal\" href=\"#\">Log in</a>
          ";
        }
        // line 41
        echo "            
          </li>

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
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filterType", ["eventType" => "Sport"]);
        echo " \">Sports</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filterType", ["eventType" => "Festivals"]);
        echo " \">Festivals</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filterType", ["eventType" => "Theatre"]);
        echo " \">Theatre</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filterType", ["eventType" => "Concerts"]);
        echo " \">Concerts</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filterType", ["eventType" => "Cineam"]);
        echo " \">Cinema</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filterType", ["eventType" => "Others"]);
        echo " \">Others</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 64
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
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filter", ["type" => "PriceAsc"]);
        echo " \">Price Ascending</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filter", ["type" => "PriceDesc"]);
        echo " \">Price Descending</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filter", ["type" => "DateAsc"]);
        echo " \">Date Ascending</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event.filter", ["type" => "DateDesc"]);
        echo " \">Date Descending</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 80
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
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "flashes", [], "any", false, false, false, 92));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 93
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 94
                echo "          <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\" style=\"text-align: center;color:white;background-color: rgba(0, 98, 149, 0.4);width: 1000px;float:center\">
              ";
                // line 95
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
          </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "      <div class=\"imageContainerContainer\">
      <div class=\"imageContainer\">
      ";
        // line 101
        $this->displayBlock('imageContainer', $context, $blocks);
        // line 132
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
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/eventFilter/script.js"), "html", null, true);
        echo "\"></script>
      <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe\" crossorigin=\"anonymous\"></script>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 101
    public function block_imageContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "imageContainer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "imageContainer"));

        // line 102
        echo "         ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 102, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 103
            echo "      <div class=\"image\" >
          <a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_description", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 104)]), "html", null, true);
            echo "\" >
          <img src = ";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 105), "html", null, true);
            echo " onmouseover=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "gif", [], "any", false, false, false, 105), "html", null, true);
            echo " onmouseout=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 105), "html", null, true);
            echo " >
          <div class=\"textOver\">";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 106), "html", null, true);
            echo "</div>
          </a>
      </div>
        ";
            // line 130
            echo "           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
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
        return array (  325 => 131,  319 => 130,  313 => 106,  305 => 105,  301 => 104,  298 => 103,  293 => 102,  283 => 101,  268 => 162,  236 => 132,  234 => 101,  230 => 99,  224 => 98,  215 => 95,  210 => 94,  205 => 93,  201 => 92,  186 => 80,  182 => 79,  178 => 78,  174 => 77,  170 => 76,  155 => 64,  151 => 63,  147 => 62,  143 => 61,  139 => 60,  135 => 59,  131 => 58,  112 => 41,  108 => 39,  100 => 34,  94 => 31,  90 => 29,  88 => 28,  83 => 26,  77 => 23,  67 => 16,  63 => 15,  59 => 14,  44 => 1,);
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
              <a class=\"nav__link nav__link--btn btn--show-modal\" href=\"#\">Log in</a>
          {% endif %}
            
          </li>

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
                    <li><a class=\"dropdown-item\" href=\"{{ path ('event.filterType',{'eventType': 'Sport'}) }} \">Sports</a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path ('event.filterType',{'eventType': 'Festivals'}) }} \">Festivals</a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path ('event.filterType',{'eventType': 'Theatre'}) }} \">Theatre</a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path ('event.filterType',{'eventType': 'Concerts'}) }} \">Concerts</a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path ('event.filterType',{'eventType': 'Cineam'}) }} \">Cinema</a></li>
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
          <div class=\"alert alert-{{ type }}\" style=\"text-align: center;color:white;background-color: rgba(0, 98, 149, 0.4);width: 1000px;float:center\">
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
          <img src = {{event.image}} onmouseover={{event.gif}} onmouseout={{event.image}} >
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
</html>", "event/index.html.twig", "C:\\Users\\msi\\PhpstormProjects\\ppp\\TicketHive\\templates\\event\\index.html.twig");
    }
}
