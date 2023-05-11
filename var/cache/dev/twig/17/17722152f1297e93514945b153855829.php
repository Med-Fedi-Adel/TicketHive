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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "payment/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Payment Checkout
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/payment/payment.css"), "html", null, true);
        echo "\"/>
    <link rel=\"icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faviconM.ico"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 15
        echo "<meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "
    <div class=\"big-container\">
    
    <div class=\"container\">
        <form action=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ticket");
        echo "\" method=\"GET\">
            <div class=\"row\">
                <div class=\"col\">
                    <h3 class=\"title\">Personal information</h3>
                    <div class=\"inputBox\">
                        <span>First name :</span>
                        <input type=\"text\" placeholder=\"Enter your first name\" required>
                    </div>
                    <div class=\"inputBox\">
                        <span>Last name :</span>
                        <input type=\"text\"  placeholder=\"Enter your last name\" required>
                    </div>
                    <div class=\"inputBox\">
                        <span>Country :</span>
                        <input type=\"text\" placeholder=\"your country\" required>
                    </div>

                    ";
        // line 43
        echo "                        <div class=\"inputBox\">
                            <span>Total :</span>
                            <input type=\"number\" placeholder=\"...\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "\" readonly> 
                        </div>
                    ";
        // line 48
        echo "
                </div>

                <div class=\"col\">

                    <h3 class=\"title\">payment</h3>

                    <div class=\"inputBox\">
                        <span>cards accepted :</span>
                        <!-- <img src=\"card_img.png\" alt=\"\"> -->
                        <div class=\"credit-cards\" style=\"text-align: left ; width: 100%\">
                            <img height=\"40\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/payment/cards.png"), "html", null, true);
        echo "\"/>
                            <img height=\"40\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/payment/E-Dinar (1).png"), "html", null, true);
        echo "\"/>
                        </div>
                    </div>
                    <div class=\"inputBox\">
                        <span> CIN :</span>
                        <input type=\"text\" placeholder=\"CIN or passport number\" required>
                    </div>
                    <div class=\"inputBox\">
                        <span>Full Name on card :</span>
                        <input type=\"text\" placeholder=\"Name on card\" required>
                    </div>
                    <div class=\"inputBox\">
                        <span>credit card number :</span>
                        <input type=\"number\" placeholder=\"Type a valid number\" required>
                    </div>

                    <div class=\"flex\">
                        <div class=\"inputBox\">
                            <span>exp month :</span>
                            <input type=\"text\" placeholder=\"Janvier\" required>
                        </div>
                        <div class=\"inputBox\">
                            <span>exp year :</span>
                            <input type=\"number\" placeholder=\"2024\"required>
                        </div>
                    </div>

                </div>
            </div>
            <input type=\"submit\" value=\"Buy Now\" class=\"submit\" id=\"boutton\">
        </form>
    </div>
</div> 

<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/Checkout/script.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  250 => 94,  213 => 60,  209 => 59,  196 => 48,  191 => 45,  187 => 43,  167 => 25,  161 => 21,  151 => 20,  138 => 15,  128 => 14,  110 => 11,  98 => 8,  93 => 7,  83 => 6,  72 => 3,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
Payment Checkout
{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/payment/payment.css')}}\"/>
    <link rel=\"icon\" href=\"{{ asset('assets/images/faviconM.ico') }}\">
{% endblock %}

{% block javascripts %}
{% endblock %}

{% block header %}
<meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
{% endblock %}

{% block body %}

    <div class=\"big-container\">
    
    <div class=\"container\">
        <form action=\"{{path('ticket')}}\" method=\"GET\">
            <div class=\"row\">
                <div class=\"col\">
                    <h3 class=\"title\">Personal information</h3>
                    <div class=\"inputBox\">
                        <span>First name :</span>
                        <input type=\"text\" placeholder=\"Enter your first name\" required>
                    </div>
                    <div class=\"inputBox\">
                        <span>Last name :</span>
                        <input type=\"text\"  placeholder=\"Enter your last name\" required>
                    </div>
                    <div class=\"inputBox\">
                        <span>Country :</span>
                        <input type=\"text\" placeholder=\"your country\" required>
                    </div>

                    {# {% block  %} #}
                        <div class=\"inputBox\">
                            <span>Total :</span>
                            <input type=\"number\" placeholder=\"...\" value=\"{{ total }}\" readonly> 
                        </div>
                    {# {% endblock %} #}

                </div>

                <div class=\"col\">

                    <h3 class=\"title\">payment</h3>

                    <div class=\"inputBox\">
                        <span>cards accepted :</span>
                        <!-- <img src=\"card_img.png\" alt=\"\"> -->
                        <div class=\"credit-cards\" style=\"text-align: left ; width: 100%\">
                            <img height=\"40\" src=\"{{asset('assets/images/payment/cards.png')}}\"/>
                            <img height=\"40\" src=\"{{asset('assets/images/payment/E-Dinar (1).png')}}\"/>
                        </div>
                    </div>
                    <div class=\"inputBox\">
                        <span> CIN :</span>
                        <input type=\"text\" placeholder=\"CIN or passport number\" required>
                    </div>
                    <div class=\"inputBox\">
                        <span>Full Name on card :</span>
                        <input type=\"text\" placeholder=\"Name on card\" required>
                    </div>
                    <div class=\"inputBox\">
                        <span>credit card number :</span>
                        <input type=\"number\" placeholder=\"Type a valid number\" required>
                    </div>

                    <div class=\"flex\">
                        <div class=\"inputBox\">
                            <span>exp month :</span>
                            <input type=\"text\" placeholder=\"Janvier\" required>
                        </div>
                        <div class=\"inputBox\">
                            <span>exp year :</span>
                            <input type=\"number\" placeholder=\"2024\"required>
                        </div>
                    </div>

                </div>
            </div>
            <input type=\"submit\" value=\"Buy Now\" class=\"submit\" id=\"boutton\">
        </form>
    </div>
</div> 

<script src=\"{{asset('assets/js/Checkout/script.js')}}\"></script>

{% endblock %}", "payment/index.html.twig", "C:\\Users\\Mehdi\\Desktop\\lastone\\TicketHive\\templates\\payment\\index.html.twig");
    }
}
