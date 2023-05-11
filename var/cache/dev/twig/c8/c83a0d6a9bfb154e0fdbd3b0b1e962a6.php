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

/* main/create.html.twig */
class __TwigTemplate_3b4108246f528a919aa100ff1c604d09 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/create.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Addevent</title>
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/addEvent/Add.css"), "html", null, true);
        echo "\">
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ\" crossorigin=\"anonymous\">
</head>
<body>
  <div class=\"container\">
    <header>Event</header>
    <form action=\"#\" class=\"info\">
      <div class=\"input_box\">
        <input type=\"text\" required>
        <label>Event's name</label>
      </div>


      <div class=\"dropdown\">
        <button class=\"btn btn-secondary dropdown-toggle input_box\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
          Type of the event
        </button>
        <ul class=\"dropdown-menu\">
          <li><a class=\"dropdown-item\" href=\"#\">Festival</a></li>
          <li><a class=\"dropdown-item\" href=\"#\">Sport</a></li>
          <li><a class=\"dropdown-item\" href=\"#\">Concert</a></li>
          <li><a class=\"dropdown-item\" href=\"#\">theatre</a></li>
          <li><a class=\"dropdown-item\" href=\"#\">Cinema</a></li>
          <li><a class=\"dropdown-item\" href=\"#\">Other</a></li>
        </ul>
      </div>


      <div class=\"input_box\">
        <input type=\"date\" required>
      </div>
      <textarea placeholder=\"Description\"></textarea>
      <div class=\"location\">Location</div>
      <div class=\"input_box\">
        <input type=\"number\" required>
        <label>Number of places</label>
      </div>
      <div class=\"input_box\">
        <input type=\"number\" required>
        <label>Prive of a ticket</label>
      </div>
      <br>
      <span>Add Image</span>
      <div class=\"image-container\">
        <div class=\"Add_image\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-images\" viewBox=\"0 0 16 16\">
            <path d=\"M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z\"/>
            <path d=\"M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z\"/>
          </svg>
        </div>
        <div class=\"Add_image\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-images\" viewBox=\"0 0 16 16\">
            <path d=\"M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z\"/>
            <path d=\"M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z\"/>
          </svg>
        </div>
        <div class=\"Add_image\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-images\" viewBox=\"0 0 16 16\">
            <path d=\"M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z\"/>
            <path d=\"M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z\"/>
          </svg>
        </div>
      </div>
      <button class=\"bouton\">Post your event</button>
    </form>
  </div>
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe\" crossorigin=\"anonymous\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "main/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Addevent</title>
  <link rel=\"stylesheet\" href=\"{{ asset('assets/css/addEvent/Add.css') }}\">
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ\" crossorigin=\"anonymous\">
</head>
<body>
  <div class=\"container\">
    <header>Event</header>
    <form action=\"#\" class=\"info\">
      <div class=\"input_box\">
        <input type=\"text\" required>
        <label>Event's name</label>
      </div>


      <div class=\"dropdown\">
        <button class=\"btn btn-secondary dropdown-toggle input_box\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
          Type of the event
        </button>
        <ul class=\"dropdown-menu\">
          <li><a class=\"dropdown-item\" href=\"#\">Festival</a></li>
          <li><a class=\"dropdown-item\" href=\"#\">Sport</a></li>
          <li><a class=\"dropdown-item\" href=\"#\">Concert</a></li>
          <li><a class=\"dropdown-item\" href=\"#\">theatre</a></li>
          <li><a class=\"dropdown-item\" href=\"#\">Cinema</a></li>
          <li><a class=\"dropdown-item\" href=\"#\">Other</a></li>
        </ul>
      </div>


      <div class=\"input_box\">
        <input type=\"date\" required>
      </div>
      <textarea placeholder=\"Description\"></textarea>
      <div class=\"location\">Location</div>
      <div class=\"input_box\">
        <input type=\"number\" required>
        <label>Number of places</label>
      </div>
      <div class=\"input_box\">
        <input type=\"number\" required>
        <label>Prive of a ticket</label>
      </div>
      <br>
      <span>Add Image</span>
      <div class=\"image-container\">
        <div class=\"Add_image\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-images\" viewBox=\"0 0 16 16\">
            <path d=\"M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z\"/>
            <path d=\"M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z\"/>
          </svg>
        </div>
        <div class=\"Add_image\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-images\" viewBox=\"0 0 16 16\">
            <path d=\"M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z\"/>
            <path d=\"M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z\"/>
          </svg>
        </div>
        <div class=\"Add_image\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-images\" viewBox=\"0 0 16 16\">
            <path d=\"M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z\"/>
            <path d=\"M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z\"/>
          </svg>
        </div>
      </div>
      <button class=\"bouton\">Post your event</button>
    </form>
  </div>
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe\" crossorigin=\"anonymous\"></script>
</body>
</html>", "main/create.html.twig", "C:\\Users\\Mehdi\\Desktop\\lastone\\TicketHive\\templates\\main\\create.html.twig");
    }
}
