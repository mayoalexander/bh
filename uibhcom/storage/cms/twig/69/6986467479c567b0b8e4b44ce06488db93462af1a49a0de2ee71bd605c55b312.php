<?php

/* /var/www/uibhcom/themes/demo/partials/site/header.htm */
class __TwigTemplate_3ae3efde401cf94dd4b71be551bc3dd9953ee5ac499fb2cca489127f1f0f2e41 extends Twig_Template
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
        echo "<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">Alex Mayo</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"";
        // line 16
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "training-requests")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("training-requests");
        echo "\">Training Requests</a></li>
                <li class=\"";
        // line 17
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "selfie")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("selfie");
        echo "\">Selfie</a></li>
                <li class=\"";
        // line 18
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "pardot")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("pardot");
        echo "\">Pardot</a></li>
                <li class=\"";
        // line 19
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "facebook")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("facebook");
        echo "\">Facebook</a></li>
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/var/www/uibhcom/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 19,  55 => 18,  47 => 17,  39 => 16,  31 => 11,  19 => 1,);
    }
}
/* <!-- Nav -->*/
/* <nav id="layout-nav" class="navbar navbar-inverse navbar-fixed-top navbar-autohide" role="navigation">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="{{ 'home'|page }}">Alex Mayo</a>*/
/*         </div>*/
/*         <div class="collapse navbar-collapse navbar-main-collapse">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li class="separator hidden-xs"></li>*/
/*                 <li class="{% if this.page.id == 'training-requests' %}active{% endif %}"><a href="{{ 'training-requests'|page }}">Training Requests</a></li>*/
/*                 <li class="{% if this.page.id == 'selfie' %}active{% endif %}"><a href="{{ 'selfie'|page }}">Selfie</a></li>*/
/*                 <li class="{% if this.page.id == 'pardot' %}active{% endif %}"><a href="{{ 'pardot'|page }}">Pardot</a></li>*/
/*                 <li class="{% if this.page.id == 'facebook' %}active{% endif %}"><a href="{{ 'facebook'|page }}">Facebook</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
