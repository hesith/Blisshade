<?php

/* circlet/template/common/currency.twig */
class __TwigTemplate_994996f91ed265fbe342c12570080535f0b1184dc5174c266dd2a37e1e766ff2 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["currencies"]) ? $context["currencies"] : null)) > 1)) {
            // line 2
            echo "<form action=\"";
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
  <h4>";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 5
                if (($this->getAttribute($context["currency"], "symbol_left", array()) && ($this->getAttribute($context["currency"], "code", array()) == (isset($context["code"]) ? $context["code"] : null)))) {
                    echo " 
        <strong>";
                    // line 6
                    echo $this->getAttribute($context["currency"], "symbol_left", array());
                    echo "</strong>";
                } elseif (($this->getAttribute(                // line 7
$context["currency"], "symbol_right", array()) && ($this->getAttribute($context["currency"], "code", array()) == (isset($context["code"]) ? $context["code"] : null)))) {
                    echo " 
        <strong>";
                    // line 8
                    echo $this->getAttribute($context["currency"], "symbol_right", array());
                    echo "</strong>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo " 
    <span>";
            // line 11
            echo (isset($context["text_currency"]) ? $context["text_currency"] : null);
            echo "</span>
  </h4>
  <ul class=\"list-unstyled\">";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 15
                if ($this->getAttribute($context["currency"], "symbol_left", array())) {
                    // line 16
                    echo "        <li>
          <a class=\"currency-select\" type=\"button\" name=\"";
                    // line 17
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["currency"], "symbol_left", array());
                    echo $this->getAttribute($context["currency"], "title", array());
                    echo "</a>
        </li>";
                } else {
                    // line 20
                    echo "        <li>
          <a class=\"currency-select\" type=\"button\" name=\"";
                    // line 21
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["currency"], "symbol_right", array());
                    echo $this->getAttribute($context["currency"], "title", array());
                    echo "</a>
        </li>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "  </ul>
  <input type=\"hidden\" name=\"code\" value=\"\" />
  <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 27
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
</form>";
        }
        // line 29
        echo " ";
    }

    public function getTemplateName()
    {
        return "circlet/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 29,  93 => 27,  89 => 25,  77 => 21,  74 => 20,  66 => 17,  63 => 16,  61 => 15,  57 => 14,  52 => 11,  49 => 10,  41 => 8,  37 => 7,  34 => 6,  30 => 5,  26 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if currencies|length > 1 %}*/
/* <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-currency">*/
/*   <h4>*/
/*     {% for currency in currencies %}*/
/*       {% if currency.symbol_left and currency.code == code %} */
/*         <strong>{{ currency.symbol_left }}</strong>*/
/*         {% elseif currency.symbol_right and currency.code == code %} */
/*         <strong>{{ currency.symbol_right }}</strong> */
/*       {% endif %}*/
/*     {% endfor %} */
/*     <span>{{ text_currency }}</span>*/
/*   </h4>*/
/*   <ul class="list-unstyled">*/
/*     {% for currency in currencies %}*/
/*       {% if currency.symbol_left %}*/
/*         <li>*/
/*           <a class="currency-select" type="button" name="{{ currency.code }}">{{ currency.symbol_left }} {{ currency.title }}</a>*/
/*         </li>*/
/*       {% else %}*/
/*         <li>*/
/*           <a class="currency-select" type="button" name="{{ currency.code }}">{{ currency.symbol_right }} {{ currency.title }}</a>*/
/*         </li>*/
/*       {% endif %}*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <input type="hidden" name="code" value="" />*/
/*   <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/* </form>*/
/* {% endif %} */
