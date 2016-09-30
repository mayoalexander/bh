<?php

/* /var/www/uibhcom/themes/demo/partials/config/config.htm */
class __TwigTemplate_7e9717efe260b8f3c62a578f5c290b18224184669f5b7b0ea3bdb870dd479f9c extends Twig_Template
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
        echo "<script>
    function debug(data) {
        console.log(data);
    }
    function disableLinks() {
    \t\$('a').click(function(e){
    \t\te.preventDefault();
    \t});
    }
</script>";
    }

    public function getTemplateName()
    {
        return "/var/www/uibhcom/themes/demo/partials/config/config.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <script>*/
/*     function debug(data) {*/
/*         console.log(data);*/
/*     }*/
/*     function disableLinks() {*/
/*     	$('a').click(function(e){*/
/*     		e.preventDefault();*/
/*     	});*/
/*     }*/
/* </script>*/
