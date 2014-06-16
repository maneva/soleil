<?php

/* soleilSiteBundle:SousSite:menuSousSite.html.twig */
class __TwigTemplate_95f407acab821ae815857955a007b3c20170cb84eba535fca188d369027a7547 extends Twig_Template
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
        // line 18
        echo " 
<section id=\"etage1\">

\t\t<div></div>  
                
                <nav id=\"menuSecondaire\" class=\"container\"> 
                    <ul>
                ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubriques"]) ? $context["rubriques"] : $this->getContext($context, "rubriques")));
        foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
            // line 26
            echo "       
                        ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "rubriques"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["rub"]) {
                echo " ";
                // line 28
                echo "                            
                            ";
                // line 35
                echo "                               <li class=\"grid_2 animationLi push_li Li";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo " ";
                if (($this->getAttribute((isset($context["rub"]) ? $context["rub"] : $this->getContext($context, "rub")), "url") == (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))) {
                    echo "actif";
                }
                echo "\">
\t\t\t\t\t<a href=\"";
                // line 36
                echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["rub"]) ? $context["rub"] : $this->getContext($context, "rub")), "url"));
                echo "\" class=\"menu";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo " ";
                if (($this->getAttribute((isset($context["rub"]) ? $context["rub"] : $this->getContext($context, "rub")), "url") == (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))) {
                    echo "active";
                }
                echo "\"></a>
\t\t\t\t</li>

                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo " 

                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo " 
                            \t</ul>
\t\t</nav>
\t\t
                
                

\t<!--=================Pour que l'on puisse cliquer===================-->
<nav id=\"menuSecondaireBis\" class=\"container\"> 
\t\t\t<ul>
        ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubriques"]) ? $context["rubriques"] : $this->getContext($context, "rubriques")));
        foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
            // line 52
            echo "       
                        ";
            // line 53
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "rubriques"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["rub"]) {
                // line 54
                echo "
                               
                               <li class=\"grid_2 animationLi push_li ";
                // line 56
                if (($this->getAttribute((isset($context["rub"]) ? $context["rub"] : $this->getContext($context, "rub")), "url") == (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))) {
                    echo "actif";
                }
                echo "\">
\t\t\t\t\t<a href=\"";
                // line 57
                echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["rub"]) ? $context["rub"] : $this->getContext($context, "rub")), "url"));
                echo "\" class=\"menu";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo " ";
                if (($this->getAttribute((isset($context["rub"]) ? $context["rub"] : $this->getContext($context, "rub")), "url") == (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))) {
                    echo "active";
                }
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rub"]) ? $context["rub"] : $this->getContext($context, "rub")), "nomFr"), "html", null, true);
                echo "</a>
\t\t\t\t</li>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo " 

                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo " 
                        \t</ul>
\t\t</nav>       

\t\t
</section>

";
    }

    public function getTemplateName()
    {
        return "soleilSiteBundle:SousSite:menuSousSite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 61,  168 => 59,  143 => 57,  137 => 56,  133 => 54,  116 => 53,  113 => 52,  109 => 51,  97 => 41,  89 => 39,  65 => 36,  56 => 35,  53 => 28,  35 => 27,  32 => 26,  28 => 25,  90 => 42,  70 => 36,  63 => 32,  59 => 31,  55 => 30,  50 => 28,  45 => 26,  42 => 25,  25 => 24,  19 => 18,);
    }
}
