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

/* base.html.twig */
class __TwigTemplate_304b65a2db176fda718980b14dd364f5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 5
        echo "        

        ";
        // line 8
        echo "
        <base href=\"/public\">
        
        <!-- Basic -->
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <!-- Mobile Metas -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <!-- Site Metas -->
        <meta name=\"keywords\" content=\"\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <link rel=\"shortcut icon\" href=\"images/favicon.png\" type=\"\">
        <title>";
        // line 21
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <!-- bootstrap core css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"home/css/bootstrap.css\" />
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"/>

        <!-- font awesome style -->
        <link href=\"home/css/font-awesome.min.css\" rel=\"stylesheet\" />
        <!-- Custom styles for this template -->
        <link href=\"home/css/style.css\" rel=\"stylesheet\" />
        <!-- responsive style -->
        <link href=\"home/css/responsive.css\" rel=\"stylesheet\" />

        <link rel=\"preconnect\" href=\"https://fonts.bunny.net\">
        <link href=\"https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap\" rel=\"stylesheet\" />

        <!-- Scripts -->
        <link rel=\"stylesheet\" href=\"home/css/style.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">

        
        
        

        <script src=\"//code.jquery.com/jquery-1.11.3.min.js\"></script>





        ";
        // line 52
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 54
        echo "
        ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "    </head>
    <body>
        
<header class=\"header_section\">
    <div class=\"container\">
       
    
      


 
       <nav class=\"navbar navbar-expand-lg custom_nav-container \">
          <a class=\"navbar-brand\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_home");
        echo "\"><img width=\"250\" src=\"images/logo.png\" alt=\"#\" /></a>
          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"\"> </span>
          </button>
          <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
             <ul class=\"navbar-nav\">
                <li class=\"nav-item ";
        // line 76
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "request", [], "any", false, false, false, 76), "attributes", [], "any", false, false, false, 76), "get", ["_route"], "method", false, false, false, 76) == "app_home")) ? ("active") : (""));
        echo "\">
                   <a class=\"nav-link\" href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_home");
        echo "\">Home <span class=\"sr-only\">(current)</span></a>
                </li>
                
                
                <li class=\"nav-item ";
        // line 81
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "request", [], "any", false, false, false, 81), "attributes", [], "any", false, false, false, 81), "get", ["_route"], "method", false, false, false, 81) == "app_contact")) ? ("active") : (""));
        echo " \">
                   <a class=\"nav-link\" href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_contact");
        echo "\">Contact</a>
                </li>
                <li class=\"nav-item ";
        // line 84
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "request", [], "any", false, false, false, 84), "attributes", [], "any", false, false, false, 84), "get", ["_route"], "method", false, false, false, 84) == "app_orders")) ? ("active") : (""));
        echo "\">
                   <a class=\"nav-link\" href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_orders");
        echo "\">My Orders</a>
                </li>
                <li class=\"nav-item ";
        // line 87
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "request", [], "any", false, false, false, 87), "attributes", [], "any", false, false, false, 87), "get", ["_route"], "method", false, false, false, 87) == "app_cart_list")) ? ("active") : (""));
        echo "\">
                   <a class=\"nav-link\" href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_cart_list");
        echo "\">Cart</a>
                </li>                     
 



                  ";
        // line 94
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94)) {
            // line 95
            echo " 
                     <style>
                        .btn-user-menu:hover,
                        .btn-user-menu:active {
                           background-color: white !important;
                           color: black !important;
                           box-shadow: none !important;
                        }

                        .dropdown-menu {
                             box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                        }


                     </style>        
                           
                           <div class=\"dropdown\">
                              <button class=\"btn btn-outline-secondary btn-user-menu dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                 ";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113), "name", [], "any", false, false, false, 113), "html", null, true);
            echo "
                              </button>
                              <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                <a class=\"dropdown-item\" href=\"";
            // line 116
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_profile");
            echo "\">Profile</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 117
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_logout");
            echo "\">Log Out</a>
                              </div>
                            </div>


                             
                   
                  ";
        } else {
            // line 125
            echo "                   
                      <li class=\"nav-item\">
                         <a class=\"btn btn-primary\" href=\"";
            // line 127
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_login");
            echo "\" id=\"logincss\">Login</a>
                      </li>
                      
                      <li class=\"nav-item\">
                         <a class=\"btn btn-primary\" href=\"";
            // line 131
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_register");
            echo "\">Register</a>
                      </li>
                   
                  ";
        }
        // line 135
        echo "                
                
             </ul>
          </div>
       </nav>
    </div>
 </header>

        ";
        // line 143
        $this->displayBlock('body', $context, $blocks);
        // line 144
        echo "

        <footer>
            <div class=\"container\">
               <div class=\"row\">
                  <div class=\"col-md-4\">
                      <div class=\"full\">
                         <div class=\"logo_footer\">
                           <a href=\"#\"><img width=\"210\" src=\"images/logo.png\" alt=\"#\" /></a>
                         </div>
                         <div class=\"information_f\">
                           <p><strong>ADDRESS:</strong> 28 White tower, Street Name New York City, USA</p>
                           <p><strong>TELEPHONE:</strong> +91 987 654 3210</p>
                           <p><strong>EMAIL:</strong> yourmain@gmail.com</p>
                         </div>
                      </div>
                  </div>
                  <div class=\"col-md-8\">
                     <div class=\"row\">
                     <div class=\"col-md-7\">
                        <div class=\"row\">
                           <div class=\"col-md-6\">
                        <div class=\"widget_menu\">
                           <h3>Menu</h3>
                           <ul>
                              <li><a href=\"#\">Home</a></li>
                              <li><a href=\"#\">About</a></li>
                              <li><a href=\"#\">Services</a></li>
                              <li><a href=\"#\">Testimonial</a></li>
                              <li><a href=\"#\">Blog</a></li>
                              <li><a href=\"#\">Contact</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class=\"col-md-6\">
                        <div class=\"widget_menu\">
                           <h3>Account</h3>
                           <ul>
                              <li><a href=\"#\">Account</a></li>
                              <li><a href=\"#\">Checkout</a></li>
                              <li><a href=\"#\">Login</a></li>
                              <li><a href=\"#\">Register</a></li>
                              <li><a href=\"#\">Shopping</a></li>
                              <li><a href=\"#\">Widget</a></li>
                           </ul>
                        </div>
                     </div>
                        </div>
                     </div>     
                     <div class=\"col-md-5\">
                        <div class=\"widget_menu\">
                           <h3>Newsletter</h3>
                           <div class=\"information_f\">
                             <p>Subscribe by our newsletter and get update protidin.</p>
                           </div>
                           <div class=\"form_sub\">
                              <form>
                                 <fieldset>
                                    <div class=\"field\">
                                       <input type=\"email\" placeholder=\"Enter Your Mail\" name=\"email\" />
                                       <input type=\"submit\" value=\"Subscribe\" />
                                    </div>
                                 </fieldset>
                              </form>
                           </div>
                        </div>
                     </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
   
   
         <div class=\"cpy_\">
            <p class=\"mx-auto\">© 2021 All Rights Reserved By <a href=\"https://html.design/\">Free Html Templates</a><br>
            
               Distributed By <a href=\"https://themewagon.com/\" target=\"_blank\">ThemeWagon</a>
            
            </p>
         </div>
         <!-- jQery -->
         <script src=\"home/js/jquery-3.4.1.min.js\"></script>
         <!-- popper js -->
         <script src=\"home/js/popper.min.js\"></script>
         <!-- bootstrap js -->
         <script src=\"home/js/bootstrap.js\"></script>
         <!-- custom js -->
         <script src=\"home/js/custom.js\"></script>
      </body>
   </html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 21
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Famms - Fashion HTML Template";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 52
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 53
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "            ";
        // line 57
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 143
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  412 => 143,  402 => 57,  400 => 56,  390 => 55,  380 => 53,  370 => 52,  351 => 21,  250 => 144,  248 => 143,  238 => 135,  231 => 131,  224 => 127,  220 => 125,  209 => 117,  205 => 116,  199 => 113,  179 => 95,  177 => 94,  168 => 88,  164 => 87,  159 => 85,  155 => 84,  150 => 82,  146 => 81,  139 => 77,  135 => 76,  126 => 70,  112 => 58,  110 => 55,  107 => 54,  105 => 52,  71 => 21,  56 => 8,  52 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        {# <meta charset=\"UTF-8\"> #}
        

        {# <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\"> #}

        <base href=\"/public\">
        
        <!-- Basic -->
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <!-- Mobile Metas -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <!-- Site Metas -->
        <meta name=\"keywords\" content=\"\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <link rel=\"shortcut icon\" href=\"images/favicon.png\" type=\"\">
        <title>{% block title %}Famms - Fashion HTML Template{% endblock %}</title>
        
        <!-- bootstrap core css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"home/css/bootstrap.css\" />
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"/>

        <!-- font awesome style -->
        <link href=\"home/css/font-awesome.min.css\" rel=\"stylesheet\" />
        <!-- Custom styles for this template -->
        <link href=\"home/css/style.css\" rel=\"stylesheet\" />
        <!-- responsive style -->
        <link href=\"home/css/responsive.css\" rel=\"stylesheet\" />

        <link rel=\"preconnect\" href=\"https://fonts.bunny.net\">
        <link href=\"https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap\" rel=\"stylesheet\" />

        <!-- Scripts -->
        <link rel=\"stylesheet\" href=\"home/css/style.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">

        
        
        

        <script src=\"//code.jquery.com/jquery-1.11.3.min.js\"></script>





        {% block stylesheets %}
        {% endblock %}

        {% block javascripts %}
            {# {% block importmap %}{{ importmap('app') }}{% endblock %} #}
        {% endblock %}
    </head>
    <body>
        
<header class=\"header_section\">
    <div class=\"container\">
       
    
      


 
       <nav class=\"navbar navbar-expand-lg custom_nav-container \">
          <a class=\"navbar-brand\" href=\"{{url('app_home')}}\"><img width=\"250\" src=\"images/logo.png\" alt=\"#\" /></a>
          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"\"> </span>
          </button>
          <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
             <ul class=\"navbar-nav\">
                <li class=\"nav-item {{app.request.attributes.get('_route') == 'app_home'?'active':''}}\">
                   <a class=\"nav-link\" href=\"{{url('app_home')}}\">Home <span class=\"sr-only\">(current)</span></a>
                </li>
                
                
                <li class=\"nav-item {{app.request.attributes.get('_route') == 'app_contact'?'active':''}} \">
                   <a class=\"nav-link\" href=\"{{url('app_contact')}}\">Contact</a>
                </li>
                <li class=\"nav-item {{app.request.attributes.get('_route') == 'app_orders'?'active':''}}\">
                   <a class=\"nav-link\" href=\"{{url('app_orders')}}\">My Orders</a>
                </li>
                <li class=\"nav-item {{app.request.attributes.get('_route') == 'app_cart_list'?'active':''}}\">
                   <a class=\"nav-link\" href=\"{{url('app_cart_list')}}\">Cart</a>
                </li>                     
 



                  {% if app.user %}
 
                     <style>
                        .btn-user-menu:hover,
                        .btn-user-menu:active {
                           background-color: white !important;
                           color: black !important;
                           box-shadow: none !important;
                        }

                        .dropdown-menu {
                             box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                        }


                     </style>        
                           
                           <div class=\"dropdown\">
                              <button class=\"btn btn-outline-secondary btn-user-menu dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                 {{ app.user.name }}
                              </button>
                              <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                <a class=\"dropdown-item\" href=\"{{url('app_profile')}}\">Profile</a>
                                <a class=\"dropdown-item\" href=\"{{url('app_logout')}}\">Log Out</a>
                              </div>
                            </div>


                             
                   
                  {% else %}
                   
                      <li class=\"nav-item\">
                         <a class=\"btn btn-primary\" href=\"{{ url('app_login') }}\" id=\"logincss\">Login</a>
                      </li>
                      
                      <li class=\"nav-item\">
                         <a class=\"btn btn-primary\" href=\"{{ url('app_register') }}\">Register</a>
                      </li>
                   
                  {% endif %}
                
                
             </ul>
          </div>
       </nav>
    </div>
 </header>

        {% block body %}{% endblock %}


        <footer>
            <div class=\"container\">
               <div class=\"row\">
                  <div class=\"col-md-4\">
                      <div class=\"full\">
                         <div class=\"logo_footer\">
                           <a href=\"#\"><img width=\"210\" src=\"images/logo.png\" alt=\"#\" /></a>
                         </div>
                         <div class=\"information_f\">
                           <p><strong>ADDRESS:</strong> 28 White tower, Street Name New York City, USA</p>
                           <p><strong>TELEPHONE:</strong> +91 987 654 3210</p>
                           <p><strong>EMAIL:</strong> yourmain@gmail.com</p>
                         </div>
                      </div>
                  </div>
                  <div class=\"col-md-8\">
                     <div class=\"row\">
                     <div class=\"col-md-7\">
                        <div class=\"row\">
                           <div class=\"col-md-6\">
                        <div class=\"widget_menu\">
                           <h3>Menu</h3>
                           <ul>
                              <li><a href=\"#\">Home</a></li>
                              <li><a href=\"#\">About</a></li>
                              <li><a href=\"#\">Services</a></li>
                              <li><a href=\"#\">Testimonial</a></li>
                              <li><a href=\"#\">Blog</a></li>
                              <li><a href=\"#\">Contact</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class=\"col-md-6\">
                        <div class=\"widget_menu\">
                           <h3>Account</h3>
                           <ul>
                              <li><a href=\"#\">Account</a></li>
                              <li><a href=\"#\">Checkout</a></li>
                              <li><a href=\"#\">Login</a></li>
                              <li><a href=\"#\">Register</a></li>
                              <li><a href=\"#\">Shopping</a></li>
                              <li><a href=\"#\">Widget</a></li>
                           </ul>
                        </div>
                     </div>
                        </div>
                     </div>     
                     <div class=\"col-md-5\">
                        <div class=\"widget_menu\">
                           <h3>Newsletter</h3>
                           <div class=\"information_f\">
                             <p>Subscribe by our newsletter and get update protidin.</p>
                           </div>
                           <div class=\"form_sub\">
                              <form>
                                 <fieldset>
                                    <div class=\"field\">
                                       <input type=\"email\" placeholder=\"Enter Your Mail\" name=\"email\" />
                                       <input type=\"submit\" value=\"Subscribe\" />
                                    </div>
                                 </fieldset>
                              </form>
                           </div>
                        </div>
                     </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
   
   
         <div class=\"cpy_\">
            <p class=\"mx-auto\">© 2021 All Rights Reserved By <a href=\"https://html.design/\">Free Html Templates</a><br>
            
               Distributed By <a href=\"https://themewagon.com/\" target=\"_blank\">ThemeWagon</a>
            
            </p>
         </div>
         <!-- jQery -->
         <script src=\"home/js/jquery-3.4.1.min.js\"></script>
         <!-- popper js -->
         <script src=\"home/js/popper.min.js\"></script>
         <!-- bootstrap js -->
         <script src=\"home/js/bootstrap.js\"></script>
         <!-- custom js -->
         <script src=\"home/js/custom.js\"></script>
      </body>
   </html>
", "base.html.twig", "C:\\work\\symfony\\store\\templates\\base.html.twig");
    }
}
