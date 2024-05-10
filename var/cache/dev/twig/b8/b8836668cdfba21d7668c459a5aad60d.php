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

/* home/product_details.html.twig */
class __TwigTemplate_0a54e20f0b690373495fa4fd18682182 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/product_details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/product_details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/product_details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"col-sm-6 col-md-4 col-lg-4\" style=\"margin: auto;\">
      <div class=\"box\">
         
         <div class=\"img-box\" style=\" margin-bottom: 20px;\">
            <img src=\"images/";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 11, $this->source); })()), "image", [], "any", false, false, false, 11), 0, [], "array", false, false, false, 11), "html", null, true);
        echo "\" alt=\"\" style=\"max-width:300px;\">
         </div>
         <div class=\"detail-box\" style=\"margin-bottom: 20px;\">
            <h5>
            ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "
            </h5>
            <br>

            ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "discountprice", [], "any", false, false, false, 19) != 0)) {
            // line 20
            echo "            <h6>
                  Discount price: \$";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 21, $this->source); })()), "discountprice", [], "any", false, false, false, 21), "html", null, true);
            echo "<br>
               
                  Normal price:
                  <span style=\"text-decoration: line-through; color: red;\">
                  \$";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 25, $this->source); })()), "price", [], "any", false, false, false, 25), "html", null, true);
            echo "
               </span>
            </h6>
            ";
        } else {
            // line 29
            echo "            <h6>
               Price: \$";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 30, $this->source); })()), "price", [], "any", false, false, false, 30), "html", null, true);
            echo "
            </6>
            ";
        }
        // line 33
        echo "            <br>
            <h6>
               ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), "html", null, true);
        echo "
            </6>
            <br><br>
            <h6>
               Available: ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 39, $this->source); })()), "quantity", [], "any", false, false, false, 39), "html", null, true);
        echo "
            </6>
            <br><br>
            
            <form action=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_cart", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\" method=\"post\">
                  <h6>
                     Quantity: <input type=\"number\" name=\"quantity\" value=\"1\" min=\"1\" max=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 45, $this->source); })()), "quantity", [], "any", false, false, false, 45), "html", null, true);
        echo "\" style=\"width:100px\">    
                  </h6>
                  
                  <input type=\"submit\" value=\"Add to Cart\" class=\"btn btn-primary\" style=\"margin:0\">  
                  
                  
            </form>
         </div>
      </div>
   </div>
      

 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/product_details.html.twig";
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
        return array (  140 => 45,  135 => 43,  128 => 39,  121 => 35,  117 => 33,  111 => 30,  108 => 29,  101 => 25,  94 => 21,  91 => 20,  89 => 19,  82 => 15,  75 => 11,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block body %}

<div class=\"col-sm-6 col-md-4 col-lg-4\" style=\"margin: auto;\">
      <div class=\"box\">
         
         <div class=\"img-box\" style=\" margin-bottom: 20px;\">
            <img src=\"images/{{product.image[0]}}\" alt=\"\" style=\"max-width:300px;\">
         </div>
         <div class=\"detail-box\" style=\"margin-bottom: 20px;\">
            <h5>
            {{ product.title }}
            </h5>
            <br>

            {% if ( product.discountprice!=0 ) %}
            <h6>
                  Discount price: \${{ product.discountprice }}<br>
               
                  Normal price:
                  <span style=\"text-decoration: line-through; color: red;\">
                  \${{ product.price }}
               </span>
            </h6>
            {% else %}
            <h6>
               Price: \${{ product.price }}
            </6>
            {% endif %}
            <br>
            <h6>
               {{ product.description }}
            </6>
            <br><br>
            <h6>
               Available: {{ product.quantity }}
            </6>
            <br><br>
            
            <form action=\"{{path('app_add_cart', {'id':product.id}) }}\" method=\"post\">
                  <h6>
                     Quantity: <input type=\"number\" name=\"quantity\" value=\"1\" min=\"1\" max=\"{{ product.quantity }}\" style=\"width:100px\">    
                  </h6>
                  
                  <input type=\"submit\" value=\"Add to Cart\" class=\"btn btn-primary\" style=\"margin:0\">  
                  
                  
            </form>
         </div>
      </div>
   </div>
      

 {% endblock %}
", "home/product_details.html.twig", "C:\\work\\symfony\\store\\templates\\home\\product_details.html.twig");
    }
}
