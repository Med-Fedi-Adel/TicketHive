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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/eventFilter/style.css"), "html", null, true);
        echo "\">
</head>
<body>
  <header class=\"header\">
    <!-- Nav Bar -->
    <nav class=\"nav\">
      <img src=\"icon.png\" alt=\"*logo\" class=\"nav__logo\" id=\"logo\" />
      <a class=\"navbar-brand\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\">TicketHive</a>
      <ul class=\"nav__links\">
        <li class=\"nav__item\">
          <a class=\"nav__link\" href=\"#section--1\">Events</a>
        </li>
        <li class=\"nav__item\">
          <a class=\"nav__link\" href=\"#section--3\">Testimonials</a>
        </li>
      </ul>
    </nav>
  </header>

    <div class=\"navContainer\">
    <nav class=\"navbar bg-body-tertiary\">
        <form class=\"container-fluid\">
          <div class=\"input-group\">
            <span class=\"input-group-text\" id=\"basic-addon1\"><div class=\"dropdown\">
                <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  Genre
                </button>
                <ul class=\"dropdown-menu\">
                  <li><a class=\"dropdown-item\" href=\"#\">Sports</a></li>
                  <li><a class=\"dropdown-item\" href=\"#\">Festivals</a></li>
                  <li><a class=\"dropdown-item\" href=\"#\">Theatre</a></li>
                  <li><a class=\"dropdown-item\" href=\"#\">Others</a></li>
                  <li><a class=\"dropdown-item\" href=\"#\">All</a></li>
                </ul>
              </div></span>
            <input type=\"text\" class=\"form-control\" placeholder=\"Write your prefrences \" aria-label=\"Username\" aria-describedby=\"basic-addon1\">
          </div>
        </form>
      </nav> </div>
      <div class=\"imageContainerContainer\">
      <div class=\"imageContainer\">
        <!--textOver is the title of the event that would be displayed-->
        <div class=\"image\">
          <!--trying gif playing when hovering-->
            <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/eventFilter/ucl.png"), "html", null, true);
        echo "\" onmouseover=\"this.src='";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/eventFilter/haaland.gif"), "html", null, true);
        echo "'\" onmouseout=\"this.src='";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/eventFilter/ucl.png"), "html", null, true);
        echo "'\">
            <div class=\"textOver\">Man City vs Bayern</div>
        </div>
        <div class=\"image\">
          <img src = \"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/eventFilter/othersDefault.jpg"), "html", null, true);
        echo "\" >
          <div class=\"textOver\">Other Events</div>
        </div>
        <div class=\"image\">
          <img src = \"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/eventFilter/theatreDefault.webp"), "html", null, true);
        echo "\" >
          <div class=\"textOver\">Theatre</div>
        </div>
        <div class=\"image\">
          <img src = \"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/eventFilter/festivalsDefault.jpg"), "html", null, true);
        echo "\" >
          <div class=\"textOver\">Festival</div>
        </div>
        <div class=\"image\">
          <img src = \"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/eventFilter/sportDefault.png"), "html", null, true);
        echo "\" >
          <div class=\"textOver\">Sports</div>
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
      <script src = \"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/eventFilter/script.js"), "html", null, true);
        echo "\"></script>
      <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe\" crossorigin=\"anonymous\"></script>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  174 => 105,  140 => 74,  133 => 70,  126 => 66,  119 => 62,  108 => 58,  68 => 21,  58 => 14,  43 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/eventFilter/style.css') }}\">
</head>
<body>
  <header class=\"header\">
    <!-- Nav Bar -->
    <nav class=\"nav\">
      <img src=\"icon.png\" alt=\"*logo\" class=\"nav__logo\" id=\"logo\" />
      <a class=\"navbar-brand\" href=\"{{ path('main')}}\">TicketHive</a>
      <ul class=\"nav__links\">
        <li class=\"nav__item\">
          <a class=\"nav__link\" href=\"#section--1\">Events</a>
        </li>
        <li class=\"nav__item\">
          <a class=\"nav__link\" href=\"#section--3\">Testimonials</a>
        </li>
      </ul>
    </nav>
  </header>

    <div class=\"navContainer\">
    <nav class=\"navbar bg-body-tertiary\">
        <form class=\"container-fluid\">
          <div class=\"input-group\">
            <span class=\"input-group-text\" id=\"basic-addon1\"><div class=\"dropdown\">
                <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  Genre
                </button>
                <ul class=\"dropdown-menu\">
                  <li><a class=\"dropdown-item\" href=\"#\">Sports</a></li>
                  <li><a class=\"dropdown-item\" href=\"#\">Festivals</a></li>
                  <li><a class=\"dropdown-item\" href=\"#\">Theatre</a></li>
                  <li><a class=\"dropdown-item\" href=\"#\">Others</a></li>
                  <li><a class=\"dropdown-item\" href=\"#\">All</a></li>
                </ul>
              </div></span>
            <input type=\"text\" class=\"form-control\" placeholder=\"Write your prefrences \" aria-label=\"Username\" aria-describedby=\"basic-addon1\">
          </div>
        </form>
      </nav> </div>
      <div class=\"imageContainerContainer\">
      <div class=\"imageContainer\">
        <!--textOver is the title of the event that would be displayed-->
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
          <div class=\"textOver\">Sports</div>
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
</html>", "event/index.html.twig", "C:\\Users\\user\\Desktop\\TicketHive\\templates\\event\\index.html.twig");
    }
}
