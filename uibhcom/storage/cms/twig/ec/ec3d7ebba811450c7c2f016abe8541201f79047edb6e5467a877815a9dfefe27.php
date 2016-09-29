<?php

/* /var/www/uibhcom/themes/demo/partials/site/footer.htm */
class __TwigTemplate_d001ff8baea6279c44024090d653390bb2fafd5703b1782130733b8af60a6547 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"muted credit\">&copy; 2013 - ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Alexey Bobkov &amp; Samuel Georges.</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/uibhcom/themes/demo/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
/* <div id="footer">*/
/*     <div class="container">*/
/*         <hr />*/
/*         <p class="muted credit">&copy; 2013 - {{ "now"|date("Y") }} Alexey Bobkov &amp; Samuel Georges.</p>*/
/*     </div>*/
/* </div>*/
