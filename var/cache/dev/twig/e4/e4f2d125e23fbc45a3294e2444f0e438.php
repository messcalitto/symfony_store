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

/* cart/list.html.twig */
class __TwigTemplate_90fbf2e9aef5367a148a9981e5b8a456 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/list.html.twig", 1);
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

        echo "        
      
<style>
    .hidden {
        display:none;
    }
</style>
      
      
<section class=\"h-100 h-custom\">
  <div class=\"container h-100 py-5\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col\">

        <div class=\"table-responsive\">
          <table class=\"table\">
            <thead>
              <tr>
                <th scope=\"col\" class=\"h5\">Shopping Bag</th>
                
                <th scope=\"col\">Quantity</th>
                <th scope=\"col\" class=\"text-end pe-4\">Total Price</th>
              </tr>
            </thead>
            <tbody>
            
            ";
        // line 31
        if (twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 31, $this->source); })()))) {
            // line 32
            echo "            <tr id=\"empty_cart_row\" class=\"hidden\">
            ";
        } else {
            // line 34
            echo "            <tr id=\"empty_cart_row\">
            ";
        }
        // line 36
        echo "              <td colspan=\"3\">
                <h5 class=\"text-center my-4\">Your shopping bag is empty</h5>
              </td>
            </tr>
            


            ";
        // line 43
        $context["totalprice"] = 0;
        // line 44
        echo "
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 46
            echo "              <tr>
                <th scope=\"row\">
                  <div class=\"d-flex align-items-center\">
                    <img src=\"/uploads/";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 49), "html", null, true);
            echo "\" class=\"img-fluid rounded-3\"
                      style=\"width: 120px;\" alt=\"Book\">
                    <div class=\"flex-column ms-4\">
                      <p class=\"mb-2\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "producttitle", [], "any", false, false, false, 52), "html", null, true);
            echo "</p>
                      <p class=\"mb-0 fw-normal\">\$<span id=\"price";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 53), "html", null, true);
            echo "</span></p>
                    </div>
                  </div>
                </th>
              
                <td class=\"align-middle\">
                  <div class=\"d-flex flex-row\">
                    <button class=\"btn btn-link px-2\"
                      onclick=\"decreaseValue(this, ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 61), "html", null, true);
            echo ")\">
                      <i class=\"fas fa-minus\"></i>
                    </button>

                    <input id=\"form1\" min=\"0\" name=\"quantity\" value=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 65), "html", null, true);
            echo "\" type=\"number\"
                      class=\"form-control form-control-sm rounded\" style=\"width: 50px;\" />

                    <button class=\"btn btn-link px-2\"
                      onclick=\"increaseValue(this, ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 69), "html", null, true);
            echo ")\">
                      <i class=\"fas fa-plus\"></i>
                    </button>
                  </div>
                </td>
                <td class=\"align-middle text-end pe-4\">
                  <p class=\"mb-0\" style=\"font-weight: 500;\">\$<span class=\"totalprice\" id=\"totalprice";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 75), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 75) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 75)), "html", null, true);
            echo "</span></p>
                </td>
              </tr>
              ";
            // line 78
            $context["totalprice"] = ((isset($context["totalprice"]) || array_key_exists("totalprice", $context) ? $context["totalprice"] : (function () { throw new RuntimeError('Variable "totalprice" does not exist.', 78, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 78) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 78)));
            // line 79
            echo "             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "            </tbody>
          </table>
        </div>

        ";
        // line 84
        if (twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 84, $this->source); })()))) {
            // line 85
            echo "        <div class=\"mb-5 mb-lg-0\" id=\"bottom_total_price_row\">
          <div class=\"card-body p-4\">

            <div class=\"row\">
              <div class=\"col-md-6 col-lg-4 col-xl-3 mb-4 mb-md-0\">
                
              </div>
              <div class=\"col-md-6 col-lg-4 col-xl-6\">
                
              </div>
              <div class=\"col-lg-4 col-xl-3\">
                <div class=\"d-flex justify-content-between\" style=\"font-weight: 500;\">
                  <p class=\"mb-2\">Subtotal</p>
                  <p class=\"mb-2\">\$<span id=\"subtotal\">";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["totalprice"]) || array_key_exists("totalprice", $context) ? $context["totalprice"] : (function () { throw new RuntimeError('Variable "totalprice" does not exist.', 98, $this->source); })()), "html", null, true);
            echo "</span></p>
                </div>
                ";
            // line 100
            $context["shipping"] = 2.99;
            // line 101
            echo "                <div class=\"d-flex justify-content-between\" style=\"font-weight: 500;\">
                  <p class=\"mb-0\">Shipping</p>
                  <p class=\"mb-0\">\$<span id=\"shipping\">";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["shipping"]) || array_key_exists("shipping", $context) ? $context["shipping"] : (function () { throw new RuntimeError('Variable "shipping" does not exist.', 103, $this->source); })()), "html", null, true);
            echo "</span></p>
                </div>
                
                ";
            // line 106
            $context["totalprice"] = ((isset($context["totalprice"]) || array_key_exists("totalprice", $context) ? $context["totalprice"] : (function () { throw new RuntimeError('Variable "totalprice" does not exist.', 106, $this->source); })()) + (isset($context["shipping"]) || array_key_exists("shipping", $context) ? $context["shipping"] : (function () { throw new RuntimeError('Variable "shipping" does not exist.', 106, $this->source); })()));
            // line 107
            echo "
                <hr class=\"my-4\">

                <div class=\"d-flex justify-content-between mb-4\" style=\"font-weight: 500;\">
                  <p class=\"mb-2\">Total (tax included)</p>
                  <p class=\"mb-2\">\$<span id=\"total\">";
            // line 112
            echo twig_escape_filter($this->env, (isset($context["totalprice"]) || array_key_exists("totalprice", $context) ? $context["totalprice"] : (function () { throw new RuntimeError('Variable "totalprice" does not exist.', 112, $this->source); })()), "html", null, true);
            echo "</span></p>
                </div>

                <button onclick=\"document.location='";
            // line 115
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_shipping");
            echo "'\" type=\"button\" class=\"btn btn-primary btn-block btn-lg bg-danger border-danger\">
                  <div class=\"d-flex justify-content-between\">
                    <span>Checkout</span>
                    <span>\$<span id=\"total2\">";
            // line 118
            echo twig_escape_filter($this->env, (isset($context["totalprice"]) || array_key_exists("totalprice", $context) ? $context["totalprice"] : (function () { throw new RuntimeError('Variable "totalprice" does not exist.', 118, $this->source); })()), "html", null, true);
            echo "</span></span>
                  </div>
                </button>

              </div>
            </div>

          </div>

          

        </div>
        ";
        }
        // line 131
        echo "        
      </div>
    </div>
  </div>
</section>
      
<script>
    function increaseValue(currentElement, id) {

        currentElement.parentNode.querySelector('input[type=number]').stepUp()
        var newQuantity = currentElement.parentNode.querySelector('input[type=number]').value;
        var totalprice = document.getElementById('totalprice' + id);
        var price = document.getElementById('price' + id);
        totalprice.innerHTML = newQuantity * price.innerHTML;
        
        calculateTotalPrice();

        \$.ajax({url: \"/cart_update/\"+id+\"/\"+newQuantity});
    }

    function decreaseValue(currentElement, id) {
        if (currentElement.parentNode.querySelector('input[type=number]').value == 1) {
            if (confirm('Are you sure you want to remove this item from your cart?')) {
                currentElement.parentNode.parentNode.parentNode.remove();
                calculateTotalPrice();

                \$.ajax({url: \"/cart_remove/\"+id});

                if (document.getElementsByClassName('totalprice').length == 0) {
                  document.getElementById('empty_cart_row').classList.remove('hidden');
                  document.getElementById('bottom_total_price_row').remove();
                }
                
            } 
            return;
        }
        currentElement.parentNode.querySelector('input[type=number]').stepDown()
        var newQuantity = currentElement.parentNode.querySelector('input[type=number]').value;
        var totalprice = document.getElementById('totalprice' + id);
        var price = document.getElementById('price' + id);
        totalprice.innerHTML = newQuantity * price.innerHTML;
        
        calculateTotalPrice();

        \$.ajax({url: \"/cart_update/\"+id+\"/\"+newQuantity});
    }

    function calculateTotalPrice() {
        var totalprice = 0;
        var prices = document.getElementsByClassName('totalprice');
        
        for (var i = 0; i < prices.length; i++) {
            totalprice += parseFloat(prices[i].innerHTML);
        }
        
        document.getElementById('subtotal').innerHTML = totalprice;
        
        var shipping = document.getElementById('shipping').innerHTML;
        var total = document.getElementById('total');
        var total2 = document.getElementById('total2');

        
        total.innerHTML = parseFloat(totalprice) + parseFloat(shipping);
        total2.innerHTML = parseFloat(totalprice) + parseFloat(shipping);
        
    }
</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "cart/list.html.twig";
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
        return array (  267 => 131,  251 => 118,  245 => 115,  239 => 112,  232 => 107,  230 => 106,  224 => 103,  220 => 101,  218 => 100,  213 => 98,  198 => 85,  196 => 84,  190 => 80,  184 => 79,  182 => 78,  174 => 75,  165 => 69,  158 => 65,  151 => 61,  138 => 53,  134 => 52,  128 => 49,  123 => 46,  119 => 45,  116 => 44,  114 => 43,  105 => 36,  101 => 34,  97 => 32,  95 => 31,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block body %}        
      
<style>
    .hidden {
        display:none;
    }
</style>
      
      
<section class=\"h-100 h-custom\">
  <div class=\"container h-100 py-5\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col\">

        <div class=\"table-responsive\">
          <table class=\"table\">
            <thead>
              <tr>
                <th scope=\"col\" class=\"h5\">Shopping Bag</th>
                
                <th scope=\"col\">Quantity</th>
                <th scope=\"col\" class=\"text-end pe-4\">Total Price</th>
              </tr>
            </thead>
            <tbody>
            
            {% if cart|length %}
            <tr id=\"empty_cart_row\" class=\"hidden\">
            {% else %}
            <tr id=\"empty_cart_row\">
            {% endif %}
              <td colspan=\"3\">
                <h5 class=\"text-center my-4\">Your shopping bag is empty</h5>
              </td>
            </tr>
            


            {% set totalprice = 0 %}

            {% for item in cart %}
              <tr>
                <th scope=\"row\">
                  <div class=\"d-flex align-items-center\">
                    <img src=\"/uploads/{{item.image}}\" class=\"img-fluid rounded-3\"
                      style=\"width: 120px;\" alt=\"Book\">
                    <div class=\"flex-column ms-4\">
                      <p class=\"mb-2\">{{item.producttitle}}</p>
                      <p class=\"mb-0 fw-normal\">\$<span id=\"price{{item.id}}\">{{item.price}}</span></p>
                    </div>
                  </div>
                </th>
              
                <td class=\"align-middle\">
                  <div class=\"d-flex flex-row\">
                    <button class=\"btn btn-link px-2\"
                      onclick=\"decreaseValue(this, {{item.id}})\">
                      <i class=\"fas fa-minus\"></i>
                    </button>

                    <input id=\"form1\" min=\"0\" name=\"quantity\" value=\"{{item.quantity}}\" type=\"number\"
                      class=\"form-control form-control-sm rounded\" style=\"width: 50px;\" />

                    <button class=\"btn btn-link px-2\"
                      onclick=\"increaseValue(this, {{item.id}})\">
                      <i class=\"fas fa-plus\"></i>
                    </button>
                  </div>
                </td>
                <td class=\"align-middle text-end pe-4\">
                  <p class=\"mb-0\" style=\"font-weight: 500;\">\$<span class=\"totalprice\" id=\"totalprice{{item.id}}\">{{item.price * item.quantity}}</span></p>
                </td>
              </tr>
              {% set totalprice = totalprice + (item.price * item.quantity) %}
             {% endfor %}
            </tbody>
          </table>
        </div>

        {% if cart|length %}
        <div class=\"mb-5 mb-lg-0\" id=\"bottom_total_price_row\">
          <div class=\"card-body p-4\">

            <div class=\"row\">
              <div class=\"col-md-6 col-lg-4 col-xl-3 mb-4 mb-md-0\">
                
              </div>
              <div class=\"col-md-6 col-lg-4 col-xl-6\">
                
              </div>
              <div class=\"col-lg-4 col-xl-3\">
                <div class=\"d-flex justify-content-between\" style=\"font-weight: 500;\">
                  <p class=\"mb-2\">Subtotal</p>
                  <p class=\"mb-2\">\$<span id=\"subtotal\">{{totalprice}}</span></p>
                </div>
                {% set shipping = 2.99 %}
                <div class=\"d-flex justify-content-between\" style=\"font-weight: 500;\">
                  <p class=\"mb-0\">Shipping</p>
                  <p class=\"mb-0\">\$<span id=\"shipping\">{{shipping}}</span></p>
                </div>
                
                {% set totalprice = totalprice + shipping %}

                <hr class=\"my-4\">

                <div class=\"d-flex justify-content-between mb-4\" style=\"font-weight: 500;\">
                  <p class=\"mb-2\">Total (tax included)</p>
                  <p class=\"mb-2\">\$<span id=\"total\">{{totalprice}}</span></p>
                </div>

                <button onclick=\"document.location='{{url('app_shipping')}}'\" type=\"button\" class=\"btn btn-primary btn-block btn-lg bg-danger border-danger\">
                  <div class=\"d-flex justify-content-between\">
                    <span>Checkout</span>
                    <span>\$<span id=\"total2\">{{totalprice}}</span></span>
                  </div>
                </button>

              </div>
            </div>

          </div>

          

        </div>
        {% endif %}
        
      </div>
    </div>
  </div>
</section>
      
<script>
    function increaseValue(currentElement, id) {

        currentElement.parentNode.querySelector('input[type=number]').stepUp()
        var newQuantity = currentElement.parentNode.querySelector('input[type=number]').value;
        var totalprice = document.getElementById('totalprice' + id);
        var price = document.getElementById('price' + id);
        totalprice.innerHTML = newQuantity * price.innerHTML;
        
        calculateTotalPrice();

        \$.ajax({url: \"/cart_update/\"+id+\"/\"+newQuantity});
    }

    function decreaseValue(currentElement, id) {
        if (currentElement.parentNode.querySelector('input[type=number]').value == 1) {
            if (confirm('Are you sure you want to remove this item from your cart?')) {
                currentElement.parentNode.parentNode.parentNode.remove();
                calculateTotalPrice();

                \$.ajax({url: \"/cart_remove/\"+id});

                if (document.getElementsByClassName('totalprice').length == 0) {
                  document.getElementById('empty_cart_row').classList.remove('hidden');
                  document.getElementById('bottom_total_price_row').remove();
                }
                
            } 
            return;
        }
        currentElement.parentNode.querySelector('input[type=number]').stepDown()
        var newQuantity = currentElement.parentNode.querySelector('input[type=number]').value;
        var totalprice = document.getElementById('totalprice' + id);
        var price = document.getElementById('price' + id);
        totalprice.innerHTML = newQuantity * price.innerHTML;
        
        calculateTotalPrice();

        \$.ajax({url: \"/cart_update/\"+id+\"/\"+newQuantity});
    }

    function calculateTotalPrice() {
        var totalprice = 0;
        var prices = document.getElementsByClassName('totalprice');
        
        for (var i = 0; i < prices.length; i++) {
            totalprice += parseFloat(prices[i].innerHTML);
        }
        
        document.getElementById('subtotal').innerHTML = totalprice;
        
        var shipping = document.getElementById('shipping').innerHTML;
        var total = document.getElementById('total');
        var total2 = document.getElementById('total2');

        
        total.innerHTML = parseFloat(totalprice) + parseFloat(shipping);
        total2.innerHTML = parseFloat(totalprice) + parseFloat(shipping);
        
    }
</script>

{% endblock %}
    ", "cart/list.html.twig", "C:\\work\\symfony\\store\\templates\\cart\\list.html.twig");
    }
}
