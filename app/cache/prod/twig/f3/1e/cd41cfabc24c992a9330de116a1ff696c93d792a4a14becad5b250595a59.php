<?php

/* soleilFormationBundle:Formation:index.html.twig */
class __TwigTemplate_f31ecd41cfabc24c992a9330de116a1ff696c93d792a4a14becad5b250595a59 extends Twig_Template
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
        // line 16
        echo "     
<article class='colo_info'>
    
    ";
        // line 19
        if (twig_test_empty((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")))) {
            echo "   
    
        <h2>Formations</h2>
        <p>Aucune formation disponible pour le moment</p>
        
    ";
        } else {
            // line 25
            echo "        
        ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                echo " 
               <article class='colo_info'>
                    <h2>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "titreFr"), "html", null, true);
                echo "</h2>
                    ";
                // line 29
                echo $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "textFr");
                echo " 
               </article>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "           
    ";
        }
        // line 35
        echo "   
</article>";
    }

    public function getTemplateName()
    {
        return "soleilFormationBundle:Formation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 35,  57 => 33,  47 => 29,  43 => 28,  36 => 26,  33 => 25,  24 => 19,  19 => 16,  83 => 64,  63 => 47,  48 => 35,  38 => 28,  31 => 23,  28 => 22,);
    }
}
