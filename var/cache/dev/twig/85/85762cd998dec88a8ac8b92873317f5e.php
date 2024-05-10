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

/* home/index.html.twig */
class __TwigTemplate_8a86c95a72f23123c2ab617641b674ad extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
<link rel=\"stylesheet\" href=\"home/css/pagination.css\" >

<section class=\"product_section layout_padding\">
    <div class=\"container\">
       

       <style>
    #searchBar form {
       display:inline-flex;
       margin:auto;

    }
    #searchBar form button {
       background:#f7444e;
       color:white;
       padding:0 10px;
       height:42px;
       margin-left: 5px;
       font-weight:bold;
       border: none;
    }
    #searchBar {
       margin: auto;
       width: fit-content;
    }   

    #searchBar form input {
      border-color:#6b7280 !important;
      padding: .5rem .75rem !important;
      font-size: 1rem;
      line-height: 1.5rem;
    }


    
    
 </style>

          <div id=\"searchBar\">
             <form action=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_home");
        echo "\" method=\"get\">
             <input type=\"text\" name=\"search\" placeholder=\"Search\" value=\"";
        // line 47
        (((array_key_exists("search", $context) &&  !(null === (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 47, $this->source); })())))) ? (print (twig_escape_filter($this->env, (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 47, $this->source); })()), "html", null, true))) : (print ("")));
        echo "\">
             <button type=\"submit\" >Search </button>
             </form>
          </div>

       <div class=\"row\">
      
         

       ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 57
            echo "
          <div class=\"col-sm-6 col-md-4 col-lg-4\">
             <div class=\"box\"  style=\"height: 350px\">
                <div class=\"option_container\">
                   <div class=\"options\">
                      <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_details", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\" class=\"option1\">
                      Product Details
                      </a>
                      
                      <form action=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_add_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\" method=\"post\">
                         <input type=\"submit\" value=\"Buy Now\" class=\"option2\" style=\"border-radius: 30px;\">  
                         
                      </form>

                   </div>
                </div>
                <div class=\"img-box\">
                   <img src=\"images/";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 74), 0, [], "array", false, false, false, 74), "html", null, true);
            echo "\" alt=\"\">
                </div>
                <div class=\"detail-box\">
                   <h5>
                   ";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 78), "html", null, true);
            echo "
                   </h5>

                   ";
            // line 81
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "discountprice", [], "any", false, false, false, 81) != 0)) {
                // line 82
                echo "                   <h6>
                      \$";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "discountprice", [], "any", false, false, false, 83), "html", null, true);
                echo "<br>
                      <span style=\"text-decoration: line-through; color: red;\">
                         \$";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 85), "html", null, true);
                echo "
                      </span>
                   </h6>
                   ";
            } else {
                // line 89
                echo "                   <h6>
                      \$";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 90), "html", null, true);
                echo "
                   </h6>
                   ";
            }
            // line 93
            echo "                </div>
             </div>
          </div>
       
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
       <span style=\"margin-top: 20px\">
       ";
        // line 101
        echo "       ";
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 101, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig");
        echo "
       </span>

       </div>
      
    </div>
 </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
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
        return array (  208 => 101,  204 => 98,  194 => 93,  188 => 90,  185 => 89,  178 => 85,  173 => 83,  170 => 82,  168 => 81,  162 => 78,  155 => 74,  144 => 66,  137 => 62,  130 => 57,  126 => 56,  114 => 47,  110 => 46,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block body %}

<link rel=\"stylesheet\" href=\"home/css/pagination.css\" >

<section class=\"product_section layout_padding\">
    <div class=\"container\">
       

       <style>
    #searchBar form {
       display:inline-flex;
       margin:auto;

    }
    #searchBar form button {
       background:#f7444e;
       color:white;
       padding:0 10px;
       height:42px;
       margin-left: 5px;
       font-weight:bold;
       border: none;
    }
    #searchBar {
       margin: auto;
       width: fit-content;
    }   

    #searchBar form input {
      border-color:#6b7280 !important;
      padding: .5rem .75rem !important;
      font-size: 1rem;
      line-height: 1.5rem;
    }


    
    
 </style>

          <div id=\"searchBar\">
             <form action=\"{{url('app_home')}}\" method=\"get\">
             <input type=\"text\" name=\"search\" placeholder=\"Search\" value=\"{{search ?? ''}}\">
             <button type=\"submit\" >Search </button>
             </form>
          </div>

       <div class=\"row\">
      
         

       {% for product in products %}

          <div class=\"col-sm-6 col-md-4 col-lg-4\">
             <div class=\"box\"  style=\"height: 350px\">
                <div class=\"option_container\">
                   <div class=\"options\">
                      <a href=\"{{path('app_product_details', {'id': product.id})}}\" class=\"option1\">
                      Product Details
                      </a>
                      
                      <form action=\"{{ url('app_add_cart', {'id': product.id}) }}\" method=\"post\">
                         <input type=\"submit\" value=\"Buy Now\" class=\"option2\" style=\"border-radius: 30px;\">  
                         
                      </form>

                   </div>
                </div>
                <div class=\"img-box\">
                   <img src=\"images/{{product.image[0]}}\" alt=\"\">
                </div>
                <div class=\"detail-box\">
                   <h5>
                   {{ product.title }}
                   </h5>

                   {% if  product.discountprice!=0  %}
                   <h6>
                      \${{ product.discountprice }}<br>
                      <span style=\"text-decoration: line-through; color: red;\">
                         \${{ product.price }}
                      </span>
                   </h6>
                   {% else %}
                   <h6>
                      \${{ product.price }}
                   </h6>
                   {% endif %}
                </div>
             </div>
          </div>
       
       {% endfor %}

       <span style=\"margin-top: 20px\">
       {# {!! \$products.links('pagination::bootstrap-5') !!} #}
       {{ knp_pagination_render(products, '@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig') }}
       </span>

       </div>
      
    </div>
 </section>
{% endblock %}
", "home/index.html.twig", "C:\\work\\symfony\\store\\templates\\home\\index.html.twig");
    }
}
