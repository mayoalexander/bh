<?php

/* /var/www/uibhcom/themes/demo/layouts/fallback.htm */
class __TwigTemplate_027e0c518d8ad3c146e191d9b2b5f8ac23ca8fb13c823383f8c60fbb40802d30 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/var/www/uibhcom/themes/demo/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {% page %}*/
