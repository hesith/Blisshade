<?php

/* circlet/template/common/cart.twig */
class __TwigTemplate_bdaf343500da0f9edb4783dd869203d6f93f74ae66556c8ce739e6ccde144b3e extends Twig_Template
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
        echo "<div id=\"cart\" class=\"btn-group\">
  <button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"";
        // line 2
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"dropdown-toggle\"><i class=\"fa fa-shopping-cart\"></i> <span id=\"cart-total\">";
        echo (isset($context["text_items"]) ? $context["text_items"] : null);
        echo "</span></button>
  <ul class=\"dropdown-menu pull-right\">";
        // line 4
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 5
            echo "    <li>
      <table class=\"table\">";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 8
                echo "        <tr>
          <td class=\"text-center\">";
                // line 9
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    echo " <a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-thumbnail\" /></a>";
                }
                echo "</td>
          <td class=\"text-left product-td\"><a href=\"";
                // line 10
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a>";
                // line 11
                echo $this->getAttribute($context["product"], "quantity", array());
                echo " x <span class=\"price\">";
                echo $this->getAttribute($context["product"], "total", array());
                echo "</span>";
                // line 12
                if ($this->getAttribute($context["product"], "option", array())) {
                    // line 13
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 14
                        echo "            <span class=\"cartoptions\">-";
                        echo $this->getAttribute($context["option"], "name", array());
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "</span>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 16
                if ($this->getAttribute($context["product"], "recurring", array())) {
                    // line 17
                    echo "            <span class=\"recurring\">-";
                    echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
                    echo $this->getAttribute($context["product"], "recurring", array());
                    echo "</span>";
                }
                // line 18
                echo "
          </td>
          <td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 20
                echo $this->getAttribute($context["product"], "cart_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"remove-btn\"><i class=\"fa fa-times\"></i></button></td>
        </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 24
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 26
                echo $this->getAttribute($context["voucher"], "description", array());
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 28
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 29
                echo $this->getAttribute($context["voucher"], "key", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "      </table>
    </li>
    <li>
      <div>
        <table class=\"table table-total\">";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 38
                echo "          <tr>
            <td class=\"text-left\">";
                // line 39
                echo $this->getAttribute($context["total"], "title", array());
                echo "</td>
            <td class=\"text-right\">";
                // line 40
                echo $this->getAttribute($context["total"], "text", array());
                echo "</td>
          </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        </table>
        <p class=\"text-left table-total-btn\">
          <a class=\"btn btn-block btn-default\" href=\"";
            // line 45
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "\">";
            echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
            echo "</a>
          <a class=\"btn btn-block btn-primary\" href=\"";
            // line 46
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\">";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</a>
        </p>
      </div>
    </li>";
        } else {
            // line 51
            echo "    <li>
      <p class=\"text-center\">";
            // line 52
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
    </li>";
        }
        // line 55
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "circlet/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 55,  176 => 52,  173 => 51,  164 => 46,  158 => 45,  154 => 43,  146 => 40,  142 => 39,  139 => 38,  135 => 37,  129 => 32,  119 => 29,  115 => 28,  110 => 26,  106 => 24,  102 => 23,  92 => 20,  88 => 18,  82 => 17,  80 => 16,  70 => 14,  66 => 13,  64 => 12,  59 => 11,  54 => 10,  40 => 9,  37 => 8,  33 => 7,  30 => 5,  28 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div id="cart" class="btn-group">*/
/*   <button type="button" data-toggle="dropdown" data-loading-text="{{ text_loading }}" class="dropdown-toggle"><i class="fa fa-shopping-cart"></i> <span id="cart-total">{{ text_items }}</span></button>*/
/*   <ul class="dropdown-menu pull-right">*/
/*     {% if products or vouchers %}*/
/*     <li>*/
/*       <table class="table">*/
/*         {% for product in products %}*/
/*         <tr>*/
/*           <td class="text-center">{% if product.thumb %} <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail" /></a> {% endif %}</td>*/
/*           <td class="text-left product-td"><a href="{{ product.href }}">{{ product.name }}</a>*/
/*             {{ product.quantity }} x <span class="price">{{ product.total }}</span>*/
/*             {% if product.option %}*/
/*             {% for option in product.option %}*/
/*             <span class="cartoptions">- {{ option.name }} {{ option.value }}</span> {% endfor %}*/
/*             {% endif %}*/
/*             {% if product.recurring %}*/
/*             <span class="recurring">- {{ text_recurring }} {{ product.recurring }}</span> {% endif %}*/
/* */
/*           </td>*/
/*           <td class="text-center"><button type="button" onclick="cart.remove('{{ product.cart_id }}');" title="{{ button_remove }}" class="remove-btn"><i class="fa fa-times"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         {% for voucher in vouchers %}*/
/*         <tr>*/
/*           <td class="text-center"></td>*/
/*           <td class="text-left">{{ voucher.description }}</td>*/
/*           <td class="text-right">x&nbsp;1</td>*/
/*           <td class="text-right">{{ voucher.amount }}</td>*/
/*           <td class="text-center text-danger"><button type="button" onclick="voucher.remove('{{ voucher.key }}');" title="{{ button_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*       </table>*/
/*     </li>*/
/*     <li>*/
/*       <div>*/
/*         <table class="table table-total">*/
/*           {% for total in totals %}*/
/*           <tr>*/
/*             <td class="text-left">{{ total.title }}</td>*/
/*             <td class="text-right">{{ total.text }}</td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*         </table>*/
/*         <p class="text-left table-total-btn">*/
/*           <a class="btn btn-block btn-default" href="{{ cart }}">{{ text_cart }}</a>*/
/*           <a class="btn btn-block btn-primary" href="{{ checkout }}">{{ text_checkout }}</a>*/
/*         </p>*/
/*       </div>*/
/*     </li>*/
/*     {% else %}*/
/*     <li>*/
/*       <p class="text-center">{{ text_empty }}</p>*/
/*     </li>*/
/*     {% endif %}*/
/*   </ul>*/
/* </div>*/
/* */
