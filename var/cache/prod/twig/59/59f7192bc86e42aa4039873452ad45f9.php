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
class __TwigTemplate_6f7c8eff5ce6a8a8b2807abc7dcbe204 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        (((array_key_exists("search", $context) &&  !(null === ($context["search"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["search"] ?? null), "html", null, true))) : (print ("")));
        echo "\">
             <button type=\"submit\" >Search </button>
             </form>
          </div>

       <div class=\"row\">
      
         

       ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
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
            echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 74)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
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
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, ($context["products"] ?? null), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig");
        echo "
       </span>

       </div>
      
    </div>
 </section>
";
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
        return array (  190 => 101,  186 => 98,  176 => 93,  170 => 90,  167 => 89,  160 => 85,  155 => 83,  152 => 82,  150 => 81,  144 => 78,  137 => 74,  126 => 66,  119 => 62,  112 => 57,  108 => 56,  96 => 47,  92 => 46,  50 => 6,  46 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "C:\\work\\symfony\\store\\templates\\home\\index.html.twig");
    }
}
