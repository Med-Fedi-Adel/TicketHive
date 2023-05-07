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
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"images/icon.png\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">


    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main/style.css"), "html", null, true);
        echo "\" />
    <title>TicketHive</title>

    <script defer src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main/script.js"), "html", null, true);
        echo "\"></script>
  </head>

  <body>
    <header class=\"header\">
      <!-- Nav Bar -->
      <nav class=\"nav\">
        <img src=\"#\" alt=\"*logo\" class=\"nav__logo\" id=\"logo\" />
        <a class=\"navbar-brand\" href=\"\">TicketHive</a>
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
          <li class=\"nav__item\">
          ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "session", [], "any", false, false, false, 36), "get", [0 => "username"], "method", false, false, false, 36)) {
            // line 37
            echo "            <div class=\"app-header-actions\">
            <button class=\"user-profile\">
                <span>
                  <i class=\"fa-solid fa-basket-shopping fa-xl\"></i>
                </span>
              </button>
              <button class=\"user-profile\" id=\"userprofile\">
                <span>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "session", [], "any", false, false, false, 44), "get", [0 => "username"], "method", false, false, false, 44), "html", null, true);
            echo "</span>
                <span>
                  <!-- <img src=\"https://assets.codepen.io/285131/almeria-avatar.jpeg\" /> -->
                  ";
            // line 47
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "session", [], "any", false, false, false, 47), "get", [0 => "username"], "method", false, false, false, 47), 0, 1), "html", null, true);
            echo "
                </span>
              </button>
            </div>
            ";
        } else {
            // line 52
            echo "              <a class=\"nav__link nav__link--btn btn--show-modal\" href=\"#\">Log in</a>
          ";
        }
        // line 54
        echo "            
          </li>
        </ul>
      </nav>

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

    ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "session", [], "any", false, false, false, 73), "get", [0 => "username"], "method", false, false, false, 73)) {
            // line 74
            echo "      <div class=\"dropdown-user\">
      <li id=\"update\">Update</li>
      <li id=\"addevent\">Add Event</li>
      <li id=\"logout\">Logout</li>
    </div>
    ";
        }
        // line 80
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
          <img src=\"https://media.timeout.com/images/105885233/750/422/image.jpg\" id=\"slide1\">
          <img src=\"https://thefox.com.au/wp-content/uploads/2020/01/144A1391-1024x683.jpg\" id=\"slide2\">
          <img src=\"https://images.pexels.com/photos/1190298/pexels-photo-1190298.jpeg?cs=srgb&dl=pexels-wendy-wei-1190298.jpg&fm=jpg\" id=\"slide3\">
          <img src=\"https://media.istockphoto.com/id/1279483477/photo/we-are-going-to-party-as-if-theres-no-tomorrow.jpg?s=612x612&w=0&k=20&c=wPmd1hxQEDxhG2P-OwDW3EJ0WoyuW-lEBsPa8O09bwU=\" id=\"slide4\">
          <div class=\"slider1-nav\">
            <a href=\"#slide1\"></a>
            <a href=\"#slide2\"></a>
            <a href=\"#slide3\"></a>
            <a href=\"#slide4\"></a>
          </div>
          <div class=\"text\">
            <p>
              Welcome to the party<br>
              <span class=\"small\">Sousse 12/09/2023</span>
            </p>
            
          </div>
        </div>
      </div>
    </section>

    <article class=\"flow section section--hidden\" id=\"section--2\">
      <h1 class=\"catalogueTitle catalogue-animation \">Our Catalogue</h1>
      <div style=\"font-size: 1.5rem; text-align: center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif\">
        Simply hover over the cards to get a sneak peek of the events,<br>or click on a category to dive deeper into the world of entertainment<br>and purchase your tickets! 🎟️
      </div>
      <div class=\"team\">
        <ul class=\"auto-grid\" role=\"list\">
          <li>
            ";
        // line 133
        echo "              <h2 class=\"card__name\">Festivals</h2>
              <p class=\"catP\">Discover the hottest festivals in town and experience the ultimate party scene.</p>
            </a>
          </li>
          <li>
            ";
        // line 139
        echo "              <h2 class=\"card__name\">Sport</h2>
              <p class=\"catP\">Get your adrenaline pumping with our thrilling sports events and buy your tickets now.</p>
            </a>
          </li>
          <li>
            ";
        // line 145
        echo "              <h2 class=\"card__name\">Concerts</h2>
              <p class=\"catP\">Immerse yourself in the music and attend the most happening concerts in the city.</p>
            </a>
          </li>
      
          <li>
            ";
        // line 152
        echo "              <h2 class=\"card__name\">Theatre</h2>
              <p class=\"catP\">Indulge in the world of drama and witness the finest plays and theatre performances.</p>
            </a>
          </li>
          <li>
            ";
        // line 158
        echo "              <h2 class=\"card__name\">Cinema</h2>
              <p class=\"catP\">Get your popcorn ready and browse our collection of movies and cinema experiences.</p>
            </a>
          </li>
          <li>
            ";
        // line 164
        echo "              <h2 class=\"card__name\">Other</h2>
              <p class=\"catP\">Explore a diverse range of unique events that don't fit into the other categories.</p>
            </a>
          </li>
        </ul>
      </div>
    </article>
    

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
      <img src=\"#\" alt=\"Logo\" class=\"footer__logo\" />
    </footer>

    <div class=\"modal hidden\">
      <button class=\"btn--close-modal\">&times;</button>
      <h2 class=\"modal__header\">
        Open your account <br />
        in just <span class=\"highlight\"> 5 minutes</span>
      </h2>
      <div class=\"modal__form form-box login\">
        <form method=\"POST\" action=\"";
        // line 311
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
        // line 333
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_signup");
        echo "\" class=\"register-link\">Sign up</a>
            </p>
          </div>
      </div>
    </div>
    <div class=\"overlay hidden\"></div>
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
        return array (  407 => 333,  382 => 311,  233 => 164,  226 => 158,  219 => 152,  211 => 145,  204 => 139,  197 => 133,  143 => 80,  135 => 74,  133 => 73,  112 => 54,  108 => 52,  100 => 47,  94 => 44,  85 => 37,  83 => 36,  60 => 16,  53 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\" />
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"images/icon.png\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">


    {# <link
      href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&display=swap\"
      rel=\"stylesheet\"
    /> #}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/main/style.css') }}\" />
    <title>TicketHive</title>

    <script defer src=\"{{ asset('assets/js/main/script.js') }}\"></script>
  </head>

  <body>
    <header class=\"header\">
      <!-- Nav Bar -->
      <nav class=\"nav\">
        <img src=\"#\" alt=\"*logo\" class=\"nav__logo\" id=\"logo\" />
        <a class=\"navbar-brand\" href=\"\">TicketHive</a>
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
          <li class=\"nav__item\">
          {% if app.session.get('username') %}
            <div class=\"app-header-actions\">
            <button class=\"user-profile\">
                <span>
                  <i class=\"fa-solid fa-basket-shopping fa-xl\"></i>
                </span>
              </button>
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
          <img src=\"https://media.timeout.com/images/105885233/750/422/image.jpg\" id=\"slide1\">
          <img src=\"https://thefox.com.au/wp-content/uploads/2020/01/144A1391-1024x683.jpg\" id=\"slide2\">
          <img src=\"https://images.pexels.com/photos/1190298/pexels-photo-1190298.jpeg?cs=srgb&dl=pexels-wendy-wei-1190298.jpg&fm=jpg\" id=\"slide3\">
          <img src=\"https://media.istockphoto.com/id/1279483477/photo/we-are-going-to-party-as-if-theres-no-tomorrow.jpg?s=612x612&w=0&k=20&c=wPmd1hxQEDxhG2P-OwDW3EJ0WoyuW-lEBsPa8O09bwU=\" id=\"slide4\">
          <div class=\"slider1-nav\">
            <a href=\"#slide1\"></a>
            <a href=\"#slide2\"></a>
            <a href=\"#slide3\"></a>
            <a href=\"#slide4\"></a>
          </div>
          <div class=\"text\">
            <p>
              Welcome to the party<br>
              <span class=\"small\">Sousse 12/09/2023</span>
            </p>
            
          </div>
        </div>
      </div>
    </section>

    <article class=\"flow section section--hidden\" id=\"section--2\">
      <h1 class=\"catalogueTitle catalogue-animation \">Our Catalogue</h1>
      <div style=\"font-size: 1.5rem; text-align: center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif\">
        Simply hover over the cards to get a sneak peek of the events,<br>or click on a category to dive deeper into the world of entertainment<br>and purchase your tickets! 🎟️
      </div>
      <div class=\"team\">
        <ul class=\"auto-grid\" role=\"list\">
          <li>
            {# <a href=\"{{ path('event')}}\" target=\"_blank\" class=\"cardGrid\" style=\"background-image: url('{{ asset('assets/images/main/catalogue/festivals.jpg') }}');\"> #}
              <h2 class=\"card__name\">Festivals</h2>
              <p class=\"catP\">Discover the hottest festivals in town and experience the ultimate party scene.</p>
            </a>
          </li>
          <li>
            {# <a href=\"{{ path('event')}}\" target=\"_blank\" class=\"cardGrid\" style=\"background-image: url('{{ asset('assets/images/main/catalogue/sport.jpg') }}');\"> #}
              <h2 class=\"card__name\">Sport</h2>
              <p class=\"catP\">Get your adrenaline pumping with our thrilling sports events and buy your tickets now.</p>
            </a>
          </li>
          <li>
            {# <a href=\"{{ path('event')}}\" target=\"_blank\" class=\"cardGrid\" style=\"background-image: url('{{ asset('assets/images/main/catalogue/concerts.jpg') }}');\"> #}
              <h2 class=\"card__name\">Concerts</h2>
              <p class=\"catP\">Immerse yourself in the music and attend the most happening concerts in the city.</p>
            </a>
          </li>
      
          <li>
            {# <a href=\"{{ path('event')}}\" target=\"_blank\" class=\"cardGrid\" style=\"background-image: url('{{ asset('assets/images/main/catalogue/theatre.jpg') }}');\"> #}
              <h2 class=\"card__name\">Theatre</h2>
              <p class=\"catP\">Indulge in the world of drama and witness the finest plays and theatre performances.</p>
            </a>
          </li>
          <li>
            {# <a href=\"{{ path('event')}}\" target=\"_blank\" class=\"cardGrid\" style=\"background-image: url('{{ asset('assets/images/main/catalogue/cinema.jpg') }}');\"> #}
              <h2 class=\"card__name\">Cinema</h2>
              <p class=\"catP\">Get your popcorn ready and browse our collection of movies and cinema experiences.</p>
            </a>
          </li>
          <li>
            {# <a href=\"{{ path('event')}}\" target=\"_blank\" class=\"cardGrid\" style=\"background-image: url('{{ asset('assets/images/main/catalogue/other.jpg') }}');\"> #}
              <h2 class=\"card__name\">Other</h2>
              <p class=\"catP\">Explore a diverse range of unique events that don't fit into the other categories.</p>
            </a>
          </li>
        </ul>
      </div>
    </article>
    

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
      <img src=\"#\" alt=\"Logo\" class=\"footer__logo\" />
    </footer>

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
      </div>
    </div>
    <div class=\"overlay hidden\"></div>
  </body>
</html>
<<<<<<< HEAD
", "main/index.html.twig", "C:\\Users\\user\\OneDrive\\Bureau\\projetphp\\templates\\main\\index.html.twig");
=======
", "main/index.html.twig", "C:\\Users\\user\\Desktop\\TicketHive\\templates\\main\\index.html.twig");
>>>>>>> f7c4b9e8387af1fad763c96f6219ee7d25a45a68
    }
}
