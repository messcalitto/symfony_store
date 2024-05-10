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
class __TwigTemplate_407f7998009fe192a7cf7da296232e53 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/my_orders.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/my_orders.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/my_orders.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "My Orders!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        if (twig_length_filter($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 25, $this->source); })()))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 39, $this->source); })()));
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
            $context["totalprice"] = ((isset($context["totalprice"]) || array_key_exists("totalprice", $context) ? $context["totalprice"] : (function () { throw new RuntimeError('Variable "totalprice" does not exist.', 61, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 61) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 61)));
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  182 => 63,  176 => 62,  174 => 61,  168 => 58,  152 => 47,  148 => 46,  142 => 43,  137 => 40,  133 => 39,  130 => 38,  128 => 37,  119 => 30,  115 => 28,  111 => 26,  109 => 25,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My Orders!{% endblock %}

{% block body %}
      

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
            
            {% if orders|length %}
            <tr id=\"empty_cart_row\" class=\"hidden\">
            {% else %}
            <tr id=\"empty_cart_row\">
            {% endif %}
              <td colspan=\"3\">
                <h5 class=\"text-center my-4\">You don't have any orders yet</h5>
              </td>
            </tr>
            


            {% set totalprice = 0 %}

            {% for item in orders %}
              <tr>
                <th scope=\"row\">
                  <div class=\"d-flex align-items-center\">
                    <img src=\"/uploads/{{item.image}}\" class=\"img-fluid rounded-3\"
                      style=\"width: 120px;\" alt=\"\">
                    <div class=\"flex-column ms-4\">
                      <p class=\"mb-2\">{{item.title}}</p>
                      <p class=\"mb-0 fw-normal\">{{item.quantity}} x \${{item.price}}</p>
                    </div>
                  </div>
                </th>
              
                <td class=\"align-middle\">
                  <div class=\"d-flex flex-row\">
                   
                  </div>
                </td>
                <td class=\"align-middle text-end pe-4\">
                  <p class=\"mb-0\" style=\"font-weight: 500;\">{{item.status}}</p>
                </td>
              </tr>
              {% set totalprice = totalprice + (item.price * item.quantity) %}
             {% endfor %}
            </tbody>
          </table>
        </div>

      
        
      </div>
    </div>
  </div>
</section>
      

{% endblock %}
", "order/my_orders.html.twig", "C:\\work\\symfony\\store\\templates\\order\\my_orders.html.twig");
    }
}
