<?php

/* /var/www/uibhcom/themes/demo/pages/home.htm */
class __TwigTemplate_299a0c30f792b515e2850e5157ef71c9c1c9ecff60b0f113ac257be7a2c9e2fe extends Twig_Template
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
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("hero/bell-luxurylounge.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 2
        echo "
<div class=\"jumbotron\">
    <div class=\"container\">
        ";
        // line 5
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("bell/ui-home.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 6
        echo "    </div>
</div>

<div class=\"container\">
    
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/uibhcom/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  28 => 5,  23 => 2,  19 => 1,);
    }
}
/* {% content "hero/bell-luxurylounge.htm" %}*/
/* */
/* <div class="jumbotron">*/
/*     <div class="container">*/
/*         {% content "bell/ui-home.htm" %}*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="container">*/
/*     */
/* </div>*/
