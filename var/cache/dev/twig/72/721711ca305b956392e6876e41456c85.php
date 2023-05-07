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

/* contact/index.html.twig */
class __TwigTemplate_f44fa9e3dccf8007013cc75fbf50b24d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/contact/contact.css"), "html", null, true);
        echo "\">
    <title>Contact Us</title>
</head>
<body>
    <section class=\"contact\">
        <div class=\"content\">
            <h2>Contact Us</h2>
            <p>Welcome to our Contact Us page! Here, you can easily get in 
               touch with us for any inquiries, feedback, or complaints. We 
               are committed to providing you with the best possible customer
               service, and we value your opinions and suggestions. Please feel 
               free to fill out the contact form or reach out to us directly via 
               email or phone. We are always here to help and look forward to 
               hearing from you!
            </p>
        </div>
        <div class=\"container\">
            <div class=\"contactInfo\">
                <div class=\"box\">
                    <div class=\"icon\"><i class=\"fa-solid fa-location-dot\"></i></div>
                    <div class=\"text\">
                        <h3>Our Address</h3>
                        <p>INSAT : <br> Institut National des sciences appliquées et de technologie</p>
                    </div>
                </div>
                <div class=\"box\">
                    <div class=\"icon\"><i class=\"fa-solid fa-phone-volume\"></i></div>
                    <div class=\"text\">
                        <h3>Phone number</h3>
                        <p>+216 27 111 999</p>
                    </div>
                </div>
                <div class=\"box\">
                    <div class=\"icon\"><i class=\"fa-solid fa-envelope\"></i></div>
                    <div class=\"text\">
                        <h3>Our Email</h3>
                        <p>event.organiser@gmail.com </p>
                    </div>
                </div>
            </div>

            <div class=\"contactForm\">
                <form>
                    <h2>Send Message</h2>
                    <div class=\"inputBox\">
                        <input type=\"text\" name=\"\" required=\"required\">
                        <span>Full Name </span>
                    </div>
                    <div class=\"inputBox\">
                        <input type=\"text\" name=\"\" required=\"required\">
                        <span>Email </span>
                    </div>
                    <div class=\"inputBox\">
                        <textarea name=\"textarea\"
                        rows=\"8\" cols=\"48\"
                        placeholder=\"  Please write your question here....\"></textarea>
                       <!-- <span>Type your Message : </span> -->
                    </div>
                    <div class=\"inputBox\">
                        <input type=\"submit\" name=\"\" value=\"Send\">
                    </div>
                </form>
            </div> 
        </div>
    </section>
    
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
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
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/contact/contact.css') }}\">
    <title>Contact Us</title>
</head>
<body>
    <section class=\"contact\">
        <div class=\"content\">
            <h2>Contact Us</h2>
            <p>Welcome to our Contact Us page! Here, you can easily get in 
               touch with us for any inquiries, feedback, or complaints. We 
               are committed to providing you with the best possible customer
               service, and we value your opinions and suggestions. Please feel 
               free to fill out the contact form or reach out to us directly via 
               email or phone. We are always here to help and look forward to 
               hearing from you!
            </p>
        </div>
        <div class=\"container\">
            <div class=\"contactInfo\">
                <div class=\"box\">
                    <div class=\"icon\"><i class=\"fa-solid fa-location-dot\"></i></div>
                    <div class=\"text\">
                        <h3>Our Address</h3>
                        <p>INSAT : <br> Institut National des sciences appliquées et de technologie</p>
                    </div>
                </div>
                <div class=\"box\">
                    <div class=\"icon\"><i class=\"fa-solid fa-phone-volume\"></i></div>
                    <div class=\"text\">
                        <h3>Phone number</h3>
                        <p>+216 27 111 999</p>
                    </div>
                </div>
                <div class=\"box\">
                    <div class=\"icon\"><i class=\"fa-solid fa-envelope\"></i></div>
                    <div class=\"text\">
                        <h3>Our Email</h3>
                        <p>event.organiser@gmail.com </p>
                    </div>
                </div>
            </div>

            <div class=\"contactForm\">
                <form>
                    <h2>Send Message</h2>
                    <div class=\"inputBox\">
                        <input type=\"text\" name=\"\" required=\"required\">
                        <span>Full Name </span>
                    </div>
                    <div class=\"inputBox\">
                        <input type=\"text\" name=\"\" required=\"required\">
                        <span>Email </span>
                    </div>
                    <div class=\"inputBox\">
                        <textarea name=\"textarea\"
                        rows=\"8\" cols=\"48\"
                        placeholder=\"  Please write your question here....\"></textarea>
                       <!-- <span>Type your Message : </span> -->
                    </div>
                    <div class=\"inputBox\">
                        <input type=\"submit\" name=\"\" value=\"Send\">
                    </div>
                </form>
            </div> 
        </div>
    </section>
    
</body>
</html>
", "contact/index.html.twig", "C:\\Users\\user\\Desktop\\TicketHive\\templates\\contact\\index.html.twig");
    }
}
