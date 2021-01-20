<?php

/* circlet/template/common/search.twig */
class __TwigTemplate_bd8f8c39f957e2f7a6d5a4d4e36a7dcc63a6aa24e5e0a3a1cba01c8dede3fa50 extends Twig_Template
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
        echo "<div class=\"search-wrap\">
\t<button data-toggle=\"dropdown\" type=\"button\" class=\"dropdown-toggle hidden-sm hidden-xs\"><i class=\"fa fa-search\"></i></button>
\t<div class=\"dropdown-menu dropdown-menu-right\">
\t\t<div id=\"search\" class=\"input-group\">
\t\t  <input type=\"text\" name=\"search\" value=\"";
        // line 5
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"form-control input-lg\" />
\t\t  <span class=\"input-group-btn\">
\t\t    <button type=\"button\" class=\"btn btn-lg\"><i class=\"fa fa-search\"></i></button>
\t\t  </span>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "circlet/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }
}
/* <div class="search-wrap">*/
/* 	<button data-toggle="dropdown" type="button" class="dropdown-toggle hidden-sm hidden-xs"><i class="fa fa-search"></i></button>*/
/* 	<div class="dropdown-menu dropdown-menu-right">*/
/* 		<div id="search" class="input-group">*/
/* 		  <input type="text" name="search" value="{{ search }}" placeholder="{{ text_search }}" class="form-control input-lg" />*/
/* 		  <span class="input-group-btn">*/
/* 		    <button type="button" class="btn btn-lg"><i class="fa fa-search"></i></button>*/
/* 		  </span>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
