<?php

/* /var/www/uibhcom/themes/demo/partials/tracking.htm */
class __TwigTemplate_b68f6f670a55f7f2aa6e5bc89d22ba69e3e269b449674207ab0bec1b1d6aa0c7 extends Twig_Template
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
        echo "<script src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets/javascript/tracking.js");
        echo "\"></script>
<script>
    // appendTrackingCode('button', 'class');
    // appendTrackingCode('a', 'href');
    appendTrackingCode('input', 'name');
</script>";
    }

    public function getTemplateName()
    {
        return "/var/www/uibhcom/themes/demo/partials/tracking.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <script src="{{ 'assets/javascript/tracking.js'|theme }}"></script>*/
/* <script>*/
/*     // appendTrackingCode('button', 'class');*/
/*     // appendTrackingCode('a', 'href');*/
/*     appendTrackingCode('input', 'name');*/
/* </script>*/
