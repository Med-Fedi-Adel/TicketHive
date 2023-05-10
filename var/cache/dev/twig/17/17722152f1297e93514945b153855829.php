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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
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

    // line 13
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 14
        echo "<meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "
    <div class=\"big-container\">
    
    <div class=\"container\">
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

                    ";
        // line 42
        echo "                        <div class=\"inputBox\">
                            <span>Total :</span>
                            <input type=\"number\" placeholder=\"...\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "\"> 
                        </div>
                    ";
        // line 47
        echo "
                </div>

                <div class=\"col\">

                    <h3 class=\"title\">payment</h3>

                    <div class=\"inputBox\">
                        <span>cards accepted :</span>
                        <!-- <img src=\"card_img.png\" alt=\"\"> -->
                        <div class=\"credit-cards\" style=\"text-align: left ; width: 100%\">
                            <img height=\"40\" src=\"cards.png\"/>
                            <img height=\"40\" src=\"E-Dinar (1).png\"/>
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
        return array (  189 => 47,  184 => 44,  180 => 42,  157 => 20,  147 => 19,  134 => 14,  124 => 13,  106 => 10,  93 => 7,  83 => 6,  72 => 3,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
Payment Checkout
{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/payment/payment.css')}}\"/>
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

                    {# {% block  %} #}
                        <div class=\"inputBox\">
                            <span>Total :</span>
                            <input type=\"number\" placeholder=\"...\" value=\"{{ total }}\"> 
                        </div>
                    {# {% endblock %} #}

                </div>

                <div class=\"col\">

                    <h3 class=\"title\">payment</h3>

                    <div class=\"inputBox\">
                        <span>cards accepted :</span>
                        <!-- <img src=\"card_img.png\" alt=\"\"> -->
                        <div class=\"credit-cards\" style=\"text-align: left ; width: 100%\">
                            <img height=\"40\" src=\"cards.png\"/>
                            <img height=\"40\" src=\"E-Dinar (1).png\"/>
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

{% endblock %}", "payment/index.html.twig", "C:\\Users\\msi\\PhpstormProjects\\ppp\\TicketHive\\templates\\payment\\index.html.twig");
    }
}
