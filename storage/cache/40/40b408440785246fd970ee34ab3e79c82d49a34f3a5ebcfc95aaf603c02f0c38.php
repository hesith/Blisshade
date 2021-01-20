<?php

/* circlet/template/extension/module/latest.twig */
class __TwigTemplate_48cc14ae1bbd6552b1153192da184a5f5ba271e1f792c3ce685a5bf5e7db6931 extends Twig_Template
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
        echo "<div class=\"bgblock text-center\">
  <h3 class=\"exheading\">";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
  <div class=\"row\">";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 4
            echo "    <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
      <div class=\"product-thumb transition\">
        <div class=\"image\">
          <a href=\"";
            // line 7
            echo $this->getAttribute($context["product"], "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"img-responsive\" />";
            // line 8
            if ($this->getAttribute($context["product"], "additional_image", array())) {
                // line 9
                echo "            <img class=\"hover-img img-responsive\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" src=\"";
                echo $this->getAttribute($context["product"], "additional_image", array());
                echo "\" />";
            }
            // line 11
            echo "          </a>

          <div class=\"exbutton-group\">
            <button class=\"btn cartbtn\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 14
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "\" onclick=\"cart.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-shopping-cart\"></i></button>
            <button class=\"btn wishbtn\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 15
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-heart\"></i></button>
            <button class=\"btn combtn\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 16
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo "\" onclick=\"compare.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-exchange\"></i></button>
          </div>
        </div>
        <div class=\"caption\">
          <h4><a href=\"";
            // line 20
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
          <div class=\"rating\">";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 22
                if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                    echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                } else {
                    echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "</div>";
            // line 24
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 25
                echo "          <p class=\"price\">";
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 26
                    echo $this->getAttribute($context["product"], "price", array());
                } else {
                    // line 27
                    echo " <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>";
                }
                // line 28
                if ($this->getAttribute($context["product"], "tax", array())) {
                    echo " <span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span>";
                }
                echo " </p>";
            }
            // line 29
            echo " </div>

      </div>
    </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "circlet/template/extension/module/latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 34,  125 => 29,  116 => 28,  109 => 27,  106 => 26,  103 => 25,  101 => 24,  99 => 23,  89 => 22,  85 => 21,  79 => 20,  70 => 16,  64 => 15,  58 => 14,  53 => 11,  46 => 9,  44 => 8,  35 => 7,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="bgblock text-center">*/
/*   <h3 class="exheading">{{ heading_title }}</h3>*/
/*   <div class="row"> {% for product in products %}*/
/*     <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">*/
/*       <div class="product-thumb transition">*/
/*         <div class="image">*/
/*           <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" />*/
/*             {% if product.additional_image %}*/
/*             <img class="hover-img img-responsive" title="{{ product.name }}" src="{{ product.additional_image }}" />*/
/*             {% endif %}*/
/*           </a>*/
/* */
/*           <div class="exbutton-group">*/
/*             <button class="btn cartbtn" type="button" data-toggle="tooltip" title="{{ button_cart }}" onclick="cart.add('{{ product.product_id }}');"><i class="fa fa-shopping-cart"></i></button>*/
/*             <button class="btn wishbtn" type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*             <button class="btn combtn" type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*           </div>*/
/*         </div>*/
/*         <div class="caption">*/
/*           <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*           <div class="rating">{% for i in 1..5 %}*/
/*             {% if product.rating < i %} <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> {% endif %}*/
/*             {% endfor %}</div>*/
/*           {% if product.price %}*/
/*           <p class="price"> {% if not product.special %}*/
/*             {{ product.price }}*/
/*             {% else %} <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> {% endif %}*/
/*             {% if product.tax %} <span class="price-tax">{{ text_tax }} {{ product.tax }}</span> {% endif %} </p>*/
/*           {% endif %} </div>*/
/* */
/*       </div>*/
/*     </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
