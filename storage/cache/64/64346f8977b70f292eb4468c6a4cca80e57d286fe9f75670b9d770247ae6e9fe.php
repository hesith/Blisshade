<?php

/* circlet/template/common/home.twig */
class __TwigTemplate_361ca2e592089d9fdf3ba4d7598ceb3cf9dcb3f207396afee57613bc5c7163ed extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        // line 2
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
<div id=\"common-home\" class=\"container\">
  <div class=\"row\">";
        // line 4
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        // line 5
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 6
            $context["class"] = "col-sm-6";
        } elseif ((        // line 7
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 8
            $context["class"] = "col-sm-9";
        } else {
            // line 10
            $context["class"] = "col-sm-12";
        }
        // line 12
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>";
        // line 13
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>";
        // line 15
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "circlet/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  46 => 13,  40 => 12,  37 => 10,  34 => 8,  32 => 7,  30 => 6,  28 => 5,  26 => 4,  21 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/* {{ content_top }}*/
/* <div id="common-home" class="container">*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
