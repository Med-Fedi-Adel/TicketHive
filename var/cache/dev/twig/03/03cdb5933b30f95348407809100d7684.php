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

/* login_signup/index.html.twig */
class __TwigTemplate_30b71f8678e2d4c660d3e639196fb897 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login_signup/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login_signup/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

    <link
      href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&display=swap\"
      rel=\"stylesheet\"
    />
    <link
      href=\"https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css\"
      rel=\"stylesheet\"
    />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/login_signup/style.css"), "html", null, true);
        echo "\" />

    ";
        // line 18
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 46
        echo "
    <!-- <script
      defer
      src=\"https://unpkg.com/boxicons@2.1.4/dist/boxicons.js\"
    ></script> -->
    <script defer src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/login_signup/script.js"), "html", null, true);
        echo "\"></script>
    <title>TicketHive</title>
  </head>
  <body>
    <div class=\"background\"></div>

    <div class=\"container\">
      <!-- content container -->

      <div class=\"content\">
        <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\"> <h2 class=\"logo\">TicketHive</h2></a>
        <div class=\"text-sci\">
          <h2>Welcome! <br /><span>To Our Website.</span></h2>
          <p>
            five highly enthusiastic individuals, happy to make their work
            beneficial.
          </p>

          <div class=\"social-icons\">
            <a href=\"#\"><i class=\"bx bxl-linkedin\"></i></a>
            <a href=\"#\"><i class=\"bx bxl-facebook\"></i></a>
            <a href=\"#\"><i class=\"bx bxl-instagram\"></i></a>
            <a href=\"#\"><i class=\"bx bxl-twitter\"></i></a>
          </div>
        </div>
      </div>

      <div class=\"logreg-box\">
        <!-- Login container -->

        <div class=\"form-box login\">
          <form method=\"POST\" action=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_signin");
        echo "\">
            <h2>Sign In</h2>
            <div class=\"input-box\">
              <span class=\"icon\"><i class=\"bx bxs-envelope\"></i></span>
              <input type=\"email\" 
              
              ";
        // line 88
        if ((array_key_exists("emailnon", $context) &&  !twig_test_empty((isset($context["emailnon"]) || array_key_exists("emailnon", $context) ? $context["emailnon"] : (function () { throw new RuntimeError('Variable "emailnon" does not exist.', 88, $this->source); })())))) {
            // line 89
            echo "                style=\"border:1px solid red;\"
              ";
        }
        // line 91
        echo "
              name=\"email\" required />
              <label>Email</label>
            </div>
            <div class=\"input-box\">
              <span class=\"icon\"><i class=\"bx bxs-lock-alt\"></i></span>
              <input type=\"password\"
              name=\"password\" 
              ";
        // line 99
        if ((array_key_exists("passwordnon", $context) &&  !twig_test_empty((isset($context["passwordnon"]) || array_key_exists("passwordnon", $context) ? $context["passwordnon"] : (function () { throw new RuntimeError('Variable "passwordnon" does not exist.', 99, $this->source); })())))) {
            // line 100
            echo "                style=\"border:1px solid red;\"
              ";
        }
        // line 102
        echo "              required />
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
                <a href=\"#\" class=\"register-link\">Sign up</a>
              </p>
            </div>
          </form>
        </div>

        <!-- Register container -->

        <div class=\"form-box register\">
          <form method=\"POST\" action=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_signup");
        echo "\">
            <h2>Sign Up</h2>
            <div class=\"input-box\">
              <span class=\"icon\"><i class=\"bx bxs-user\"></i></span>
              <input type=\"text\" name=\"username\" required />
              <label>Username</label>
            </div>
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
                ><input type=\"checkbox\" name=\"remember\" /> I Agree to
                Terms&Policy</label
              >
              <!-- <a href=\"#\">Forgot password?</a> -->
            </div>

            <button type=\"submit\" name=\"signup\" class=\"btn\">Sign Up</button>

            <div class=\"login-register\">
              <p>
                Already have an account?
                <a href=\"#\" class=\"login-link\">Sign in</a>
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 18
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 19
        echo "        <style> 
            .background {
            width: 100%;
            height: 100vh;
            background: url(\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/login_signup/background.jpg"), "html", null, true);
        echo "\") no-repeat;
            background-size: cover;
            background-position: center;
            filter: blur(10px);
            }

            /*LOGIN PAGE CONTAINER*/
            .container {
            position: absolute;
            width: 75%;
            top: 10%;
            left: 12%;
            transform: translate(-50, -50);
            height: 550px;
            background: url(\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/login_signup/background.jpg"), "html", null, true);
        echo "\") no-repeat;
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            margin-top: 20px;
            }

        </style>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "login_signup/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 37,  234 => 23,  228 => 19,  218 => 18,  169 => 126,  143 => 102,  139 => 100,  137 => 99,  127 => 91,  123 => 89,  121 => 88,  112 => 82,  88 => 61,  75 => 51,  68 => 46,  66 => 18,  61 => 16,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

    <link
      href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&display=swap\"
      rel=\"stylesheet\"
    />
    <link
      href=\"https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css\"
      rel=\"stylesheet\"
    />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/login_signup/style.css') }}\" />

    {% block stylesheet %}
        <style> 
            .background {
            width: 100%;
            height: 100vh;
            background: url(\"{{ asset('assets/images/login_signup/background.jpg') }}\") no-repeat;
            background-size: cover;
            background-position: center;
            filter: blur(10px);
            }

            /*LOGIN PAGE CONTAINER*/
            .container {
            position: absolute;
            width: 75%;
            top: 10%;
            left: 12%;
            transform: translate(-50, -50);
            height: 550px;
            background: url(\"{{ asset('assets/images/login_signup/background.jpg') }}\") no-repeat;
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            margin-top: 20px;
            }

        </style>
    {% endblock %}

    <!-- <script
      defer
      src=\"https://unpkg.com/boxicons@2.1.4/dist/boxicons.js\"
    ></script> -->
    <script defer src=\"{{ asset('assets/js/login_signup/script.js') }}\"></script>
    <title>TicketHive</title>
  </head>
  <body>
    <div class=\"background\"></div>

    <div class=\"container\">
      <!-- content container -->

      <div class=\"content\">
        <a href=\"{{ path('main')}}\"> <h2 class=\"logo\">TicketHive</h2></a>
        <div class=\"text-sci\">
          <h2>Welcome! <br /><span>To Our Website.</span></h2>
          <p>
            five highly enthusiastic individuals, happy to make their work
            beneficial.
          </p>

          <div class=\"social-icons\">
            <a href=\"#\"><i class=\"bx bxl-linkedin\"></i></a>
            <a href=\"#\"><i class=\"bx bxl-facebook\"></i></a>
            <a href=\"#\"><i class=\"bx bxl-instagram\"></i></a>
            <a href=\"#\"><i class=\"bx bxl-twitter\"></i></a>
          </div>
        </div>
      </div>

      <div class=\"logreg-box\">
        <!-- Login container -->

        <div class=\"form-box login\">
          <form method=\"POST\" action=\"{{path('login_signin')}}\">
            <h2>Sign In</h2>
            <div class=\"input-box\">
              <span class=\"icon\"><i class=\"bx bxs-envelope\"></i></span>
              <input type=\"email\" 
              
              {% if emailnon is defined and emailnon is not empty %}
                style=\"border:1px solid red;\"
              {% endif %}

              name=\"email\" required />
              <label>Email</label>
            </div>
            <div class=\"input-box\">
              <span class=\"icon\"><i class=\"bx bxs-lock-alt\"></i></span>
              <input type=\"password\"
              name=\"password\" 
              {% if passwordnon is defined and passwordnon is not empty%}
                style=\"border:1px solid red;\"
              {% endif %}
              required />
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
                <a href=\"#\" class=\"register-link\">Sign up</a>
              </p>
            </div>
          </form>
        </div>

        <!-- Register container -->

        <div class=\"form-box register\">
          <form method=\"POST\" action=\"{{path('login_signup')}}\">
            <h2>Sign Up</h2>
            <div class=\"input-box\">
              <span class=\"icon\"><i class=\"bx bxs-user\"></i></span>
              <input type=\"text\" name=\"username\" required />
              <label>Username</label>
            </div>
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
                ><input type=\"checkbox\" name=\"remember\" /> I Agree to
                Terms&Policy</label
              >
              <!-- <a href=\"#\">Forgot password?</a> -->
            </div>

            <button type=\"submit\" name=\"signup\" class=\"btn\">Sign Up</button>

            <div class=\"login-register\">
              <p>
                Already have an account?
                <a href=\"#\" class=\"login-link\">Sign in</a>
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>", "login_signup/index.html.twig", "C:\\Users\\ghrib\\OneDrive\\Desktop\\4thpull\\TicketHive\\templates\\login_signup\\index.html.twig");
    }
}
