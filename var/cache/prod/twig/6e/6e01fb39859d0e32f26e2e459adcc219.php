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
class __TwigTemplate_f99782f766fb41dd2c462e15aae3ee2a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/product_details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"col-sm-6 col-md-4 col-lg-4\" style=\"margin: auto;\">
      <div class=\"box\">
         
         <div class=\"img-box\" style=\" margin-bottom: 20px;\">
            <img src=\"images/";
        // line 11
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 11)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
        echo "\" alt=\"\" style=\"max-width:300px;\">
         </div>
         <div class=\"detail-box\" style=\"margin-bottom: 20px;\">
            <h5>
            ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "
            </h5>
            <br>

            ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discountprice", [], "any", false, false, false, 19) != 0)) {
            // line 20
            echo "            <h6>
                  Discount price: \$";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discountprice", [], "any", false, false, false, 21), "html", null, true);
            echo "<br>
               
                  Normal price:
                  <span style=\"text-decoration: line-through; color: red;\">
                  \$";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 25), "html", null, true);
            echo "
               </span>
            </h6>
            ";
        } else {
            // line 29
            echo "            <h6>
               Price: \$";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 30), "html", null, true);
            echo "
            </6>
            ";
        }
        // line 33
        echo "            <br>
            <h6>
               ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 35), "html", null, true);
        echo "
            </6>
            <br><br>
            <h6>
               Available: ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "quantity", [], "any", false, false, false, 39), "html", null, true);
        echo "
            </6>
            <br><br>
            
            <form action=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_cart", ["id" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\" method=\"post\">
                  <h6>
                     Quantity: <input type=\"number\" name=\"quantity\" value=\"1\" min=\"1\" max=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "quantity", [], "any", false, false, false, 45), "html", null, true);
        echo "\" style=\"width:100px\">    
                  </h6>
                  
                  <input type=\"submit\" value=\"Add to Cart\" class=\"btn btn-primary\" style=\"margin:0\">  
                  
                  
            </form>
         </div>
      </div>
   </div>
      

 ";
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
        return array (  122 => 45,  117 => 43,  110 => 39,  103 => 35,  99 => 33,  93 => 30,  90 => 29,  83 => 25,  76 => 21,  73 => 20,  71 => 19,  64 => 15,  57 => 11,  50 => 6,  46 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/product_details.html.twig", "C:\\work\\symfony\\store\\templates\\home\\product_details.html.twig");
    }
}
