<?php

/* soleilecommerceBundle:Realisation:index.html.twig */
class __TwigTemplate_98d4ca82d4c37fd4a6434ecbd501b968af1ae4a85d14db518d3c087c1b0b8ed0 extends Twig_Template
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

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 30
        echo "  
<section id=\"etage2\" class=\"alignement_etage2\">
\t<section id=\"contenu\" class=\"container\">

\t\t<section id=\"articles_avec-realisations\" class=\"grid_12 alpha omega\">
\t\t\t<h2>Nos réalisations</h2>

\t\t\t<section id=\"big-realisations\">
\t\t            
                            ";
        // line 39
        $context["i"] = 1;
        // line 40
        echo "                            
                            ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["realisation"]) ? $context["realisation"] : $this->getContext($context, "realisation")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 42
            echo "                            
                                ";
            // line 43
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 5)) {
                echo " ";
                $context["i"] = 1;
                echo " ";
            }
            // line 44
            echo "                            
\t\t\t\t<div class=\"doubleArticle\">
                                    ";
            // line 46
            if ((0 == $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 3)) {
                // line 47
                echo "                                        <article class=\"grid_3_realisations realisation";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo " ecran2RealisationUnique \">
                                    ";
            } else {
                // line 49
                echo "                                        <article class=\"grid_3_realisations realisation";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo " ecran2Realisation\">
                                    ";
            }
            // line 51
            echo "\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t<h3>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "titreFr"), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t
                                                        <img
                                                        src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "image"), "webPath")), "html", null, true);
            echo "\"
                                                        alt=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "titreFr"), "html", null, true);
            echo "\" class=\"taillePetitImage\"
                                                        />
                                                        
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p><strong>Dimensions :</strong> ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "dimension"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p><strong>Réalisé par :</strong> ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "realiserpar"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p class=\"alignePrix\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "prix"), "html", null, true);
            echo "</p>
                                                        ";
            // line 66
            if (($this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "vendu") == 0)) {
                // line 67
                echo "\t\t\t\t\t\t\t   <p class=\"bouton\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("soleil_realisation_paiement_details", array("slug_r" => $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "slug"))), "html", null, true);
                echo "\">Acheter</a></p>
                                                        ";
            } else {
                // line 69
                echo "                                                           <p class=\"boutonVendu\"><a>Vendu</a></p>
                                                        ";
            }
            // line 71
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t</article>
<!--====================================TEST INFOS SUR IMAGE 1===================================-->
\t\t\t\t\t<article class=\"grid_3_realisations visuel";
            // line 75
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo " alpha omega\">
\t\t\t\t\t\t<h3>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "titreFr"), "html", null, true);
            echo "</h3>

\t\t\t\t\t\t\t<div class=\"frame\">
\t\t\t\t\t\t\t\t<b class=\"r1 c1\"></b><b class=\"r1 c2\"></b><b class=\"r1 c3\"></b><b class=\"r1 c4\"></b><b class=\"r1 c5\"></b><b class=\"r1 c6\"></b><b class=\"r1 c7\"></b><b class=\"r1 c8\"></b><b class=\"r1 c9\"></b><b class=\"r1 c10\"></b><b class=\"r1 c11\"></b>

\t\t\t\t\t\t\t\t<b class=\"r2 c1\"></b><b class=\"r2 c2\"></b><b class=\"r2 c3\"></b><b class=\"r2 c4\"></b><b class=\"r2 c5\"></b><b class=\"r2 c6\"></b><b class=\"r2 c7\"></b><b class=\"r2 c8\"></b><b class=\"r2 c9\"></b><b class=\"r2 c10\"></b><b class=\"r2 c11\"></b>

\t\t\t\t\t\t\t\t<b class=\"r3 c1\"></b><b class=\"r3 c2\"></b><b class=\"r3 c3\"></b><b class=\"r3 c4\"></b><b class=\"r3 c5\"></b><b class=\"r3 c6\"></b><b class=\"r3 c7\"></b><b class=\"r3 c8\"></b><b class=\"r3 c9\"></b><b class=\"r3 c10\"></b><b class=\"r3 c11\"></b>

\t\t\t\t\t\t\t\t<b class=\"r4 c1\"></b><b class=\"r4 c2\"></b><b class=\"r4 c3\"></b><b class=\"r4 c4\"></b><b class=\"r4 c5\"></b><b class=\"r4 c6\"></b><b class=\"r4 c7\"></b><b class=\"r4 c8\"></b><b class=\"r4 c9\"></b><b class=\"r4 c10\"></b><b class=\"r4 c11\"></b>

\t\t\t\t\t\t\t\t<b class=\"r5 c1\"></b><b class=\"r5 c2\"></b><b class=\"r5 c3\"></b><b class=\"r5 c4\"></b><b class=\"r5 c5\"></b><b class=\"r5 c6\"></b><b class=\"r5 c7\"></b><b class=\"r5 c8\"></b><b class=\"r5 c9\"></b><b class=\"r5 c10\"></b><b class=\"r5 c11\"></b>

\t\t\t\t\t\t\t\t<b class=\"r6 c1\"></b><b class=\"r6 c2\"></b><b class=\"r6 c3\"></b><b class=\"r6 c4\"></b><b class=\"r6 c5\"></b><b class=\"r6 c6\"></b><b class=\"r6 c7\"></b><b class=\"r6 c8\"></b><b class=\"r6 c9\"></b><b class=\"r6 c10\"></b><b class=\"r6 c11\"></b>

\t\t\t\t\t\t\t\t<b class=\"r7 c1\"></b><b class=\"r7 c2\"></b><b class=\"r7 c3\"></b><b class=\"r7 c4\"></b><b class=\"r7 c5\"></b><b class=\"r7 c6\"></b><b class=\"r7 c7\"></b><b class=\"r7 c8\"></b><b class=\"r7 c9\"></b><b class=\"r7 c10\"></b><b class=\"r7 c11\"></b>

\t\t\t\t\t\t\t\t<b class=\"r8 c1\"></b><b class=\"r8 c2\"></b><b class=\"r8 c3\"></b><b class=\"r8 c4\"></b><b class=\"r8 c5\"></b><b class=\"r8 c6\"></b><b class=\"r8 c7\"></b><b class=\"r8 c8\"></b><b class=\"r8 c9\"></b><b class=\"r8 c10\"></b><b class=\"r8 c11\"></b>

\t\t\t\t\t\t\t\t<b class=\"r9 c1\"></b><b class=\"r9 c2\"></b><b class=\"r9 c3\"></b><b class=\"r9 c4\"></b><b class=\"r9 c5\"></b><b class=\"r9 c6\"></b><b class=\"r9 c7\"></b><b class=\"r9 c8\"></b><b class=\"r9 c9\"></b><b class=\"r9 c10\"></b><b class=\"r9 c11\"></b>

\t\t\t\t\t\t\t\t<b class=\"r10 c1\"></b><b class=\"r10 c2\"></b><b class=\"r10 c3\"></b><b class=\"r10 c4\"></b><b class=\"r10 c5\"></b><b class=\"r10 c6\"></b><b class=\"r10 c7\"></b><b class=\"r10 c8\"></b><b class=\"r10 c9\"></b><b class=\"r10 c10\"></b><b class=\"r10 c11\"></b>

\t\t\t\t\t\t\t\t<b class=\"r11 c1\"></b><b class=\"r11 c2\"></b><b class=\"r11 c3\"></b><b class=\"r11 c4\"></b><b class=\"r11 c5\"></b><b class=\"r11 c6\"></b><b class=\"r11 c7\"></b><b class=\"r11 c8\"></b><b class=\"r11 c9\"></b><b class=\"r11 c10\"></b><b class=\"r11 c11\"></b>

\t\t\t\t\t\t\t\t<img
                                                                src=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "image"), "webPath")), "html", null, true);
            echo "\"
                                                                alt=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "titreFr"), "html", null, true);
            echo "\"
                                                                />
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p><strong>Dimensions :</strong> ";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "dimension"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p><strong>Réalisé par :</strong> ";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "realiserpar"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p class=\"alignePrix\">";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "prix"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t";
            // line 111
            if (($this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "vendu") == 0)) {
                // line 112
                echo "\t\t\t\t\t\t\t   <p class=\"bouton\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("soleil_realisation_paiement_details", array("slug_r" => $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "slug"))), "html", null, true);
                echo "\">Acheter</a></p>
                                                        ";
            } else {
                // line 114
                echo "                                                           <p class=\"boutonVendu\"><a>Vendu</a></p>
                                                        ";
            }
            // line 116
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
<!--=================================FIN DE TEST INFOS SUR IMAGE 1=================================-->
\t\t\t\t</div>
                            
                                ";
            // line 121
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 122
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                            
\t\t\t</section>
\t\t</section>
\t</section>
</section>
";
    }

    public function getTemplateName()
    {
        return "soleilecommerceBundle:Realisation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 123,  222 => 122,  220 => 121,  213 => 116,  209 => 114,  203 => 112,  201 => 111,  197 => 110,  193 => 109,  189 => 108,  181 => 103,  177 => 102,  148 => 76,  144 => 75,  138 => 71,  134 => 69,  128 => 67,  126 => 66,  122 => 65,  118 => 64,  114 => 63,  106 => 58,  102 => 57,  95 => 53,  91 => 51,  85 => 49,  79 => 47,  77 => 46,  73 => 44,  67 => 43,  64 => 42,  47 => 41,  44 => 40,  42 => 39,  31 => 30,  28 => 29,);
    }
}