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

/* stripe_payment/stripe.html.twig */
class __TwigTemplate_208acf3179c988a2c80e29bbf6e0ae8e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stripe_payment/stripe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stripe_payment/stripe.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stripe_payment/stripe.html.twig", 1);
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

        echo "Payment";
        
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


    <style type=\"text/css\">
        
        .panel-title {
            display: inline;
            font-weight: bold;
        }

        .hide {
            display: none;
        }

        .has-error {
            color:#a94442;
        }

        .has-error input {
            border-color:#a94442;
        }

        label {
            display: inline-block;
            max-width: 100%;
            margin-bottom: 5px;
            font-weight: 700;
            font-size: 14px;
        }
        
        .form-control {
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        }

    </style>

  
<div class=\"container\" >
  
    
    <div class=\"row\">
        <div class=\"col-md-6 col-md-offset-3\" style=\"margin:auto;\">
            <div class=\"panel credit-card-box\">
                <div class=\"panel-heading \" >
                    <div class=\"row \" >
                        <h5 class=\"panel-title text-center font-weight-bold p-4 \" >Payment Details</h5>
                        <br><br>
                    </div>                    
                </div>
                <div class=\"panel-body\">
  
                    ";
        // line 72
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 72, $this->source); })())) {
            // line 73
            echo "                    <div class=\"alert alert-danger text-center\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                        <p>";
            // line 75
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 75, $this->source); })()), "html", null, true);
            echo "</p>
                    </div>
                    ";
        }
        // line 78
        echo "
                    ";
        // line 79
        if ((isset($context["successMessage"]) || array_key_exists("successMessage", $context) ? $context["successMessage"] : (function () { throw new RuntimeError('Variable "successMessage" does not exist.', 79, $this->source); })())) {
            // line 80
            echo "                        <div class=\"alert alert-success text-center\">
                            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                            <p>";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["successMessage"]) || array_key_exists("successMessage", $context) ? $context["successMessage"] : (function () { throw new RuntimeError('Variable "successMessage" does not exist.', 82, $this->source); })()), "html", null, true);
            echo "</p>
                        </div>
                    ";
        } else {
            // line 85
            echo "  
                    <form 
                            role=\"form\" 
                            action=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_stripe_post");
            echo "\" 
                            method=\"post\" 
                            class=\"require-validation\"
                            data-cc-on-file=\"false\"
                            data-stripe-publishable-key=\"";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["stripeKey"]) || array_key_exists("stripeKey", $context) ? $context["stripeKey"] : (function () { throw new RuntimeError('Variable "stripeKey" does not exist.', 92, $this->source); })()), "html", null, true);
            echo "\"
                            id=\"payment-form\">
                        
  
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name on Card</label> <input
                                    class='form-control' size='4' type='text'>
                            </div>
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group  required'>
                                <label class='control-label'>Card Number</label> <input
                                    autocomplete='off' class='form-control card-number' size='20'
                                    type='text'>
                            </div>
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                    class='form-control card-cvc' placeholder='ex. 311' size='4'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Month</label> <input
                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Year</label> <input
                                    class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                    type='text'>
                            </div>
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
                            </div>
                        </div>
  
                        <div class=\"form-row row\">
                            <div class=\"col-xs-12\">
                                <button class=\"btn btn-danger bg-danger btn-lg btn-block\" type=\"submit\">Pay Now (\$";
            // line 138
            echo twig_escape_filter($this->env, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 138, $this->source); })()), "html", null, true);
            echo ")</button>
                            </div>
                        </div>
                          
                    </form>

                    ";
        }
        // line 145
        echo "                </div>
            </div>        
        </div>
    </div>
      
</div>
  
</body>
  
<script type=\"text/javascript\" src=\"https://js.stripe.com/v2/\"></script>
  
<script type=\"text/javascript\">
\$(function() {
   
    var \$form         = \$(\".require-validation\");
   
    \$('form.require-validation').bind('submit', function(e) {
        var \$form         = \$(\".require-validation\"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        \$inputs       = \$form.find('.required').find(inputSelector),
        \$errorMessage = \$form.find('div.error'),
        valid         = true;
        \$errorMessage.addClass('hide');
  
        \$('.has-error').removeClass('has-error');
        \$inputs.each(function(i, el) {
          var \$input = \$(el);
          if (\$input.val() === '') {
            \$input.parent().addClass('has-error');
            \$errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
   
        if (!\$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey(\$form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: \$('.card-number').val(),
            cvc: \$('.card-cvc').val(),
            exp_month: \$('.card-expiry-month').val(),
            exp_year: \$('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
  
  });
  
  function stripeResponseHandler(status, response) {
        if (response.error) {
            \$('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
               
            \$form.find('input[type=text]').empty();
            \$form.append(\"<input type='hidden' name='stripeToken' value='\" + token + \"'/>\");
            \$form.get(0).submit();
        }
    }
   
});
</script>
<br><br>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "stripe_payment/stripe.html.twig";
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
        return array (  254 => 145,  244 => 138,  195 => 92,  188 => 88,  183 => 85,  177 => 82,  173 => 80,  171 => 79,  168 => 78,  162 => 75,  158 => 73,  156 => 72,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Payment{% endblock %}

{% block body %}



    <style type=\"text/css\">
        
        .panel-title {
            display: inline;
            font-weight: bold;
        }

        .hide {
            display: none;
        }

        .has-error {
            color:#a94442;
        }

        .has-error input {
            border-color:#a94442;
        }

        label {
            display: inline-block;
            max-width: 100%;
            margin-bottom: 5px;
            font-weight: 700;
            font-size: 14px;
        }
        
        .form-control {
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        }

    </style>

  
<div class=\"container\" >
  
    
    <div class=\"row\">
        <div class=\"col-md-6 col-md-offset-3\" style=\"margin:auto;\">
            <div class=\"panel credit-card-box\">
                <div class=\"panel-heading \" >
                    <div class=\"row \" >
                        <h5 class=\"panel-title text-center font-weight-bold p-4 \" >Payment Details</h5>
                        <br><br>
                    </div>                    
                </div>
                <div class=\"panel-body\">
  
                    {% if error %}
                    <div class=\"alert alert-danger text-center\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                        <p>{{ error }}</p>
                    </div>
                    {% endif %}

                    {% if successMessage %}
                        <div class=\"alert alert-success text-center\">
                            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                            <p>{{ successMessage }}</p>
                        </div>
                    {% else %}
  
                    <form 
                            role=\"form\" 
                            action=\"{{ url('app_stripe_post') }}\" 
                            method=\"post\" 
                            class=\"require-validation\"
                            data-cc-on-file=\"false\"
                            data-stripe-publishable-key=\"{{ stripeKey }}\"
                            id=\"payment-form\">
                        
  
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name on Card</label> <input
                                    class='form-control' size='4' type='text'>
                            </div>
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group  required'>
                                <label class='control-label'>Card Number</label> <input
                                    autocomplete='off' class='form-control card-number' size='20'
                                    type='text'>
                            </div>
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                    class='form-control card-cvc' placeholder='ex. 311' size='4'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Month</label> <input
                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Year</label> <input
                                    class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                    type='text'>
                            </div>
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
                            </div>
                        </div>
  
                        <div class=\"form-row row\">
                            <div class=\"col-xs-12\">
                                <button class=\"btn btn-danger bg-danger btn-lg btn-block\" type=\"submit\">Pay Now (\${{ price }})</button>
                            </div>
                        </div>
                          
                    </form>

                    {% endif %}
                </div>
            </div>        
        </div>
    </div>
      
</div>
  
</body>
  
<script type=\"text/javascript\" src=\"https://js.stripe.com/v2/\"></script>
  
<script type=\"text/javascript\">
\$(function() {
   
    var \$form         = \$(\".require-validation\");
   
    \$('form.require-validation').bind('submit', function(e) {
        var \$form         = \$(\".require-validation\"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        \$inputs       = \$form.find('.required').find(inputSelector),
        \$errorMessage = \$form.find('div.error'),
        valid         = true;
        \$errorMessage.addClass('hide');
  
        \$('.has-error').removeClass('has-error');
        \$inputs.each(function(i, el) {
          var \$input = \$(el);
          if (\$input.val() === '') {
            \$input.parent().addClass('has-error');
            \$errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
   
        if (!\$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey(\$form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: \$('.card-number').val(),
            cvc: \$('.card-cvc').val(),
            exp_month: \$('.card-expiry-month').val(),
            exp_year: \$('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
  
  });
  
  function stripeResponseHandler(status, response) {
        if (response.error) {
            \$('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
               
            \$form.find('input[type=text]').empty();
            \$form.append(\"<input type='hidden' name='stripeToken' value='\" + token + \"'/>\");
            \$form.get(0).submit();
        }
    }
   
});
</script>
<br><br>

{% endblock %}
", "stripe_payment/stripe.html.twig", "C:\\work\\symfony\\store\\templates\\stripe_payment\\stripe.html.twig");
    }
}
