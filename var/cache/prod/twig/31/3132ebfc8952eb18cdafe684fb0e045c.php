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
class __TwigTemplate_3a71f2426eafb50b2d66597a362ed278 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Contact Us!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if (($context["message"] ?? null)) {
            // line 23
            echo "       
       <div class=\"alert alert-success\">
          ";
            // line 25
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
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
        return array (  113 => 48,  95 => 33,  89 => 29,  82 => 25,  78 => 23,  76 => 22,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/contact.html.twig", "C:\\work\\symfony\\store\\templates\\home\\contact.html.twig");
    }
}
