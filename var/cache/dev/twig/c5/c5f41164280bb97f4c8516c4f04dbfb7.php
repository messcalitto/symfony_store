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

/* home/contact.html.twig */
class __TwigTemplate_6b17368c4fc6629ad4e042b2c223e0e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/contact.html.twig", 1);
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

        echo "Contact Us!";
        
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
        echo "<section class=\"inner_page_head\">
    <div class=\"container_fuild\">
       <div class=\"row\">
          <div class=\"col-md-12\">
             <div class=\"full\">
                <h3>Contact us</h3>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- end inner page section -->
 <!-- why section -->
 <section class=\"why_section layout_padding\">
    <div class=\"container\">
    
        ";
        // line 22
        if ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 22, $this->source); })())) {
            // line 23
            echo "       
       <div class=\"alert alert-success\">
          ";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 25, $this->source); })()), "html", null, true);
            echo "   
       </div>
       
       ";
        } else {
            // line 29
            echo "
       <div class=\"row\">
          <div class=\"col-lg-8 offset-lg-2\">
             <div class=\"full\">
                <form method=\"post\" action=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_contact_send");
            echo "\">
                   
                   <fieldset>
                      <input type=\"text\" placeholder=\"Enter your full name\" name=\"name\" required />
                      <input type=\"email\" placeholder=\"Enter your email address\" name=\"email\" required />
                      <input type=\"text\" placeholder=\"Enter subject\" name=\"subject\" required />
                      <textarea placeholder=\"Enter your message\" name=\"message\" required></textarea>
                      <input type=\"submit\" value=\"Submit\" />
                   </fieldset>
                </form>
             </div>
          </div>
       </div>

       ";
        }
        // line 48
        echo "    </div>
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
        return "home/contact.html.twig";
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
        return array (  143 => 48,  125 => 33,  119 => 29,  112 => 25,  108 => 23,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact Us!{% endblock %}

{% block body %}
<section class=\"inner_page_head\">
    <div class=\"container_fuild\">
       <div class=\"row\">
          <div class=\"col-md-12\">
             <div class=\"full\">
                <h3>Contact us</h3>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- end inner page section -->
 <!-- why section -->
 <section class=\"why_section layout_padding\">
    <div class=\"container\">
    
        {% if message %}
       
       <div class=\"alert alert-success\">
          {{ message }}   
       </div>
       
       {% else %}

       <div class=\"row\">
          <div class=\"col-lg-8 offset-lg-2\">
             <div class=\"full\">
                <form method=\"post\" action=\"{{url('app_contact_send')}}\">
                   
                   <fieldset>
                      <input type=\"text\" placeholder=\"Enter your full name\" name=\"name\" required />
                      <input type=\"email\" placeholder=\"Enter your email address\" name=\"email\" required />
                      <input type=\"text\" placeholder=\"Enter subject\" name=\"subject\" required />
                      <textarea placeholder=\"Enter your message\" name=\"message\" required></textarea>
                      <input type=\"submit\" value=\"Submit\" />
                   </fieldset>
                </form>
             </div>
          </div>
       </div>

       {% endif %}
    </div>
 </section>
{% endblock %}
", "home/contact.html.twig", "C:\\work\\symfony\\store\\templates\\home\\contact.html.twig");
    }
}
