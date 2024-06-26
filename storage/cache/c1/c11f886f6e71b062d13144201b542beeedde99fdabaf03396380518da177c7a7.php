<?php

/* circlet/template/common/language.twig */
class __TwigTemplate_77b441f976f70e79c43931ac971a285b5a22329c2452b90b0d89e26daec3f8a2 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["languages"]) ? $context["languages"] : null)) > 1)) {
            // line 2
            echo "<form action=\"";
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
  <h4>";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 5
                if (($this->getAttribute($context["language"], "code", array()) == (isset($context["code"]) ? $context["code"] : null))) {
                    echo " 
    <img src=\"catalog/language/";
                    // line 6
                    echo $this->getAttribute($context["language"], "code", array());
                    echo "/";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo ".png\" alt=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\">";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo (isset($context["text_language"]) ? $context["text_language"] : null);
            echo "</span>
  </h4>
    <ul class=\"list-unstyled\">";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 13
                echo "      <li>
        <a class=\"language-select\" type=\"button\" name=\"";
                // line 14
                echo $this->getAttribute($context["language"], "code", array());
                echo "\"><img src=\"catalog/language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" alt=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" />";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</a>
      </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    </ul>
  <input type=\"hidden\" name=\"code\" value=\"\" />
  <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 19
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
</form>";
        }
    }

    public function getTemplateName()
    {
        return "circlet/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  78 => 17,  60 => 14,  57 => 13,  53 => 12,  48 => 9,  34 => 6,  30 => 5,  26 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if languages|length > 1 %}*/
/* <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-language">*/
/*   <h4>*/
/*     {% for language in languages %}*/
/*     {% if language.code == code %} */
/*     <img src="catalog/language/{{ language.code }}/{{ language.code }}.png" alt="{{ language.name }}" title="{{ language.name }}">*/
/*     {% endif %}*/
/*     {% endfor %}*/
/*     {{ text_language }}</span>*/
/*   </h4>*/
/*     <ul class="list-unstyled">*/
/*       {% for language in languages %}*/
/*       <li>*/
/*         <a class="language-select" type="button" name="{{ language.code }}"><img src="catalog/language/{{ language.code }}/{{ language.code }}.png" alt="{{ language.name }}" title="{{ language.name }}" /> {{ language.name }}</a>*/
/*       </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   <input type="hidden" name="code" value="" />*/
/*   <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/* </form>*/
/* {% endif %}*/
/* */
