<?php

/* /var/www/uibhcom/themes/demo/pages/blog.htm */
class __TwigTemplate_ab79f8ab9cc2c3ae27a7a3ee58e14ced25b50e7ec7cd9be77c43bc2fc7832cab extends Twig_Template
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
        echo "WElcome to the blog!

";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/uibhcom/themes/demo/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* WElcome to the blog!*/
/* */
/* {% component 'blogPosts' %}*/
