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

/* order/my_orders.html.twig */
class __TwigTemplate_174fb11ba66a25a0e51acf3bd106cf64 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "order/my_orders.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "My Orders!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "      

<section class=\"h-100 h-custom\">
  <div class=\"container h-100 py-5\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col\">

        <div class=\"table-responsive\">
          <table class=\"table\">
            <thead>
              <tr>
                <th scope=\"col\" class=\"h5\">My Orders</th>
                
                <th scope=\"col\"></th>
                <th scope=\"col\" class=\"text-end pe-4\">Status</th>
              </tr>
            </thead>
            <tbody>
            
            ";
        // line 25
        if (twig_length_filter($this->env, ($context["orders"] ?? null))) {
            // line 26
            echo "            <tr id=\"empty_cart_row\" class=\"hidden\">
            ";
        } else {
            // line 28
            echo "            <tr id=\"empty_cart_row\">
            ";
        }
        // line 30
        echo "              <td colspan=\"3\">
                <h5 class=\"text-center my-4\">You don't have any orders yet</h5>
              </td>
            </tr>
            


            ";
        // line 37
        $context["totalprice"] = 0;
        // line 38
        echo "
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 40
            echo "              <tr>
                <th scope=\"row\">
                  <div class=\"d-flex align-items-center\">
                    <img src=\"/uploads/";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 43), "html", null, true);
            echo "\" class=\"img-fluid rounded-3\"
                      style=\"width: 120px;\" alt=\"\">
                    <div class=\"flex-column ms-4\">
                      <p class=\"mb-2\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 46), "html", null, true);
            echo "</p>
                      <p class=\"mb-0 fw-normal\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 47), "html", null, true);
            echo " x \$";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 47), "html", null, true);
            echo "</p>
                    </div>
                  </div>
                </th>
              
                <td class=\"align-middle\">
                  <div class=\"d-flex flex-row\">
                   
                  </div>
                </td>
                <td class=\"align-middle text-end pe-4\">
                  <p class=\"mb-0\" style=\"font-weight: 500;\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 58), "html", null, true);
            echo "</p>
                </td>
              </tr>
              ";
            // line 61
            $context["totalprice"] = (($context["totalprice"] ?? null) + (twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 61) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 61)));
            // line 62
            echo "             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            </tbody>
          </table>
        </div>

      
        
      </div>
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
        return "order/my_orders.html.twig";
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
        return array (  152 => 63,  146 => 62,  144 => 61,  138 => 58,  122 => 47,  118 => 46,  112 => 43,  107 => 40,  103 => 39,  100 => 38,  98 => 37,  89 => 30,  85 => 28,  81 => 26,  79 => 25,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/my_orders.html.twig", "C:\\work\\symfony\\store\\templates\\order\\my_orders.html.twig");
    }
}
