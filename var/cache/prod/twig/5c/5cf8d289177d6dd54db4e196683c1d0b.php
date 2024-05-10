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

/* order/shipping.html.twig */
class __TwigTemplate_dadc150f038023475d3029de958fbd01 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "order/shipping.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Shipping";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<section class=\"h-100 h-custom\">
    <div class=\"container h-100 py-5\">
        <div class=\"row d-flex justify-content-center align-items-center h-100\">
            <div class=\"col\">
                <h5><b>Shipping information</b></h5><br>
                <form action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_place_order");
        echo "\" method=\"post\">
                    
                    <div class=\"row col-md-6\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"name\">Name</label>
                                <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Enter name\"/>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email_field\" placeholder=\"Enter email\"/>
                            </div>
                        </div>
                        
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"phone\">Phone</label>
                                <input type=\"text\" class=\"form-control\" id=\"phone\" name=\"phone\" placeholder=\"Enter phone\"/>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"address\">Address</label>
                                <input type=\"text\" class=\"form-control\" id=\"address\" name=\"address\" placeholder=\"Enter address\"/>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"city\">City</label>
                                <input type=\"text\" class=\"form-control\" id=\"city\" name=\"city\" placeholder=\"Enter city\"/>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-6 text-end\">
                    <button type=\"submit\" class=\"btn btn-primary bg-danger border-danger mx-4\">Place Order</button>
                    </div>

                </from>

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
        return "order/shipping.html.twig";
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
        return array (  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/shipping.html.twig", "C:\\work\\symfony\\store\\templates\\order\\shipping.html.twig");
    }
}
