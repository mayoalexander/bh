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
        echo $this->env->getExtension('CMS')->contentFunction("bell/frontpage.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
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
        return array (  19 => 1,);
    }
}
/* {% content "bell/frontpage.htm" %}*/
