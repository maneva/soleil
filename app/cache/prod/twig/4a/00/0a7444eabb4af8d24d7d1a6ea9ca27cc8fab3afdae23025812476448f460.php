<?php

/* soleilArticleBundle:Article:voirplus.html.twig */
class __TwigTemplate_4a000a7444eabb4af8d24d7d1a6ea9ca27cc8fab3afdae23025812476448f460 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::SousSite/base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::SousSite/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "
<section id=\"articles_avec-videos\" class=\"container\">
    
";
        // line 32
        if (((isset($context["voirplus"]) ? $context["voirplus"] : $this->getContext($context, "voirplus")) == "article")) {
            // line 33
            echo "
    <h3>Article</h3>
    
    ";
            // line 36
            $context["i"] = 1;
            // line 37
            echo "    
    ";
            // line 38
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 39
                echo "        
        ";
                // line 40
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 4)) {
                    echo " ";
                    $context["i"] = 1;
                    echo " ";
                }
                // line 41
                echo "    
        <article id=\"article";
                // line 42
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\" class=\"grid_4bis alpha";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo " omega";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\">
            <h3>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "titreFr"), "html", null, true);
                echo "</h3> 
            ";
                // line 44
                echo $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "textFr");
                echo "
        </article>

        ";
                // line 47
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 48
                echo "    
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        
";
        } else {
            // line 52
            echo "    
    <h3>Article vidéo</h3>
    
    ";
            // line 55
            $context["i"] = 1;
            // line 56
            echo "    
    ";
            // line 57
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                echo " 

        ";
                // line 59
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 4)) {
                    echo " ";
                    $context["i"] = 1;
                    echo " ";
                }
                // line 60
                echo "    
        ";
                // line 61
                if ((!(null === $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "video")))) {
                    // line 62
                    echo "            <article id=\"article";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "\" class=\"grid_4bis alpha";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo " omega";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "\">
                <h3>";
                    // line 63
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "titreFr"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "</h3> 
                <iframe width=\"298\" height=\"200\" src=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "video"), "html", null, true);
                    echo "\" allowfullscreen class=\"grid_4bis alpha omega\"></iframe>
                ";
                    // line 65
                    echo $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "textFr");
                    echo " 
            </article>
        ";
                }
                // line 68
                echo "        
        ";
                // line 69
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 70
                echo "    
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "        
";
        }
        // line 74
        echo "
</section>

";
    }

    public function getTemplateName()
    {
        return "soleilArticleBundle:Article:voirplus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 74,  160 => 72,  153 => 70,  151 => 69,  148 => 68,  142 => 65,  138 => 64,  132 => 63,  123 => 62,  121 => 61,  118 => 60,  112 => 59,  105 => 57,  102 => 56,  100 => 55,  95 => 52,  91 => 50,  84 => 48,  82 => 47,  76 => 44,  72 => 43,  64 => 42,  61 => 41,  55 => 40,  52 => 39,  48 => 38,  45 => 37,  43 => 36,  38 => 33,  36 => 32,  31 => 29,  28 => 28,);
    }
}
