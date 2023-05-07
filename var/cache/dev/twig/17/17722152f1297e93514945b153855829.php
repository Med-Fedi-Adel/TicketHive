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

/* payment/index.html.twig */
class __TwigTemplate_e6030323cc46753d44d109f937d31cbe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/payment/payment.css"), "html", null, true);
        echo "\">
    
</head>


<body>

<div class=\"big-container\">


    <div class=\"container0\">
        <div>
            <h3>Event Description </h3>

        </div> 

        <div>
            <h3>Location</h3>
        
        </div>
    </div>
    
    
    <div class=\"container\">
        <h3>Checkout Form </h3>
        <form action=\"\">
            <div class=\"row\">
                <div class=\"col\">
                    <h3 class=\"title\">Personal information</h3>
                    <div class=\"inputBox\">
                        <span>First name :</span>
                        <input type=\"text\" placeholder=\"Enter your first name\">
                    </div>
                    <div class=\"inputBox\">
                        <span>Last name :</span>
                        <input type=\"text\" placeholder=\"Enter your last name\">
                    </div>
                    <div class=\"inputBox\">
                        <span>Country :</span>
                        <input type=\"text\" placeholder=\"your country\">
                    </div>

                    <div class=\"flex\">
                        <div class=\"inputBox\">
                            <span>Tickets :</span>
                            <input type=\"number\" class=\"quantity\" id=\"quantity\" min=\"0\" value=\"1\" >
                        </div>
                        <div class=\"inputBox\">
                            <span>Total :</span>
                            <input type=\"number\" placeholder=\"...\"> 
                        </div>
                    </div>
                </div>

                <div class=\"col\">

                    <h3 class=\"title\">payment</h3>

                    <div class=\"inputBox\">
                        <span>cards accepted :</span>
                        <!-- <img src=\"card_img.png\" alt=\"\"> -->
                        <div class=\"credit-cards\" style=\"text-align: left ; width: 100%\">
                            <img height=\"40\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/payment/cards.png"), "html", null, true);
        echo "\"/>
                            <img height=\"40\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/payment/E-Dinar (1).png"), "html", null, true);
        echo "\"/>
                        </div>
                    </div>
                    <div class=\"inputBox\">
                        <span> CIN :</span>
                        <input type=\"text\" placeholder=\"CIN or passport number\">
                    </div>
                    <div class=\"inputBox\">
                        <span>Full Name on card :</span>
                        <input type=\"text\" placeholder=\"Name on card\">
                    </div>
                    <div class=\"inputBox\">
                        <span>credit card number :</span>
                        <input type=\"number\" placeholder=\"Type a valid number\">
                    </div>

                    <div class=\"flex\">
                        <div class=\"inputBox\">
                            <span>exp month :</span>
                            <input type=\"text\" placeholder=\"Janvier\">
                        </div>
                        <div class=\"inputBox\">
                            <span>exp year :</span>
                            <input type=\"number\" placeholder=\"2024\">
                        </div>
                    </div>

                </div>
            </div>
            <input type=\"submit\" value=\"Buy Now\" class=\"submit\">
        </form>
    </div>
</div>        
    
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "payment/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 70,  116 => 69,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/payment/payment.css') }}\">
    
</head>


<body>

<div class=\"big-container\">


    <div class=\"container0\">
        <div>
            <h3>Event Description </h3>

        </div> 

        <div>
            <h3>Location</h3>
        
        </div>
    </div>
    
    
    <div class=\"container\">
        <h3>Checkout Form </h3>
        <form action=\"\">
            <div class=\"row\">
                <div class=\"col\">
                    <h3 class=\"title\">Personal information</h3>
                    <div class=\"inputBox\">
                        <span>First name :</span>
                        <input type=\"text\" placeholder=\"Enter your first name\">
                    </div>
                    <div class=\"inputBox\">
                        <span>Last name :</span>
                        <input type=\"text\" placeholder=\"Enter your last name\">
                    </div>
                    <div class=\"inputBox\">
                        <span>Country :</span>
                        <input type=\"text\" placeholder=\"your country\">
                    </div>

                    <div class=\"flex\">
                        <div class=\"inputBox\">
                            <span>Tickets :</span>
                            <input type=\"number\" class=\"quantity\" id=\"quantity\" min=\"0\" value=\"1\" >
                        </div>
                        <div class=\"inputBox\">
                            <span>Total :</span>
                            <input type=\"number\" placeholder=\"...\"> 
                        </div>
                    </div>
                </div>

                <div class=\"col\">

                    <h3 class=\"title\">payment</h3>

                    <div class=\"inputBox\">
                        <span>cards accepted :</span>
                        <!-- <img src=\"card_img.png\" alt=\"\"> -->
                        <div class=\"credit-cards\" style=\"text-align: left ; width: 100%\">
                            <img height=\"40\" src=\"{{ asset('assets/images/payment/cards.png') }}\"/>
                            <img height=\"40\" src=\"{{ asset('assets/images/payment/E-Dinar (1).png') }}\"/>
                        </div>
                    </div>
                    <div class=\"inputBox\">
                        <span> CIN :</span>
                        <input type=\"text\" placeholder=\"CIN or passport number\">
                    </div>
                    <div class=\"inputBox\">
                        <span>Full Name on card :</span>
                        <input type=\"text\" placeholder=\"Name on card\">
                    </div>
                    <div class=\"inputBox\">
                        <span>credit card number :</span>
                        <input type=\"number\" placeholder=\"Type a valid number\">
                    </div>

                    <div class=\"flex\">
                        <div class=\"inputBox\">
                            <span>exp month :</span>
                            <input type=\"text\" placeholder=\"Janvier\">
                        </div>
                        <div class=\"inputBox\">
                            <span>exp year :</span>
                            <input type=\"number\" placeholder=\"2024\">
                        </div>
                    </div>

                </div>
            </div>
            <input type=\"submit\" value=\"Buy Now\" class=\"submit\">
        </form>
    </div>
</div>        
    
</body>
</html>", "payment/index.html.twig", "C:\\Users\\user\\Desktop\\TicketHive\\templates\\payment\\index.html.twig");
    }
}
