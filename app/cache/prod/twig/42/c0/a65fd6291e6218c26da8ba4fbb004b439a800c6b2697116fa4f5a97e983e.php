<?php

/* soleilSiteBundle:SousSite:footer.html.twig */
class __TwigTemplate_42c0a65fd6291e6218c26da8ba4fbb004b439a800c6b2697116fa4f5a97e983e extends Twig_Template
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
        // line 20
        echo "<section id=\"etage3\">
\t<footer id=\"pied\" class=\"container\">
\t\t<article id=\"faites-un-don\" class=\"grid_3bis alpha omega\">
\t\t\t<h2>Aidez-nous</h2>
\t\t\t<div id=\"boutonResponsive\">
\t\t\t\t<div class=\"box\" style=\"border-radius:8px;\">
\t\t\t\t\t<p>
\t\t\t\t\t\t<a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("soleil_don_accueil");
        echo "\"> 
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" height=\"100%\" style=\"border-radius:5px;\">
\t\t\t\t\t\t\t\t<line class=\"top\" x1=\"0\" y1=\"0\" x2=\"900\" y2=\"0\"/>
\t\t\t\t\t\t\t\t<line class=\"left\" x1=\"0\" y1=\"60\" x2=\"0\" y2=\"-920\"/>
\t\t\t\t\t\t\t\t<line class=\"bottom\" x1=\"220\" y1=\"60\" x2=\"-600\" y2=\"60\"/>
\t\t\t\t\t\t\t\t<line class=\"right\" x1=\"220\" y1=\"0\" x2=\"220\" y2=\"1380\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t
\t\t\t\t\t\tJe fais un don
\t\t\t\t\t\t</a>
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"boxResponsive\" style=\"border-radius:8px;\">
\t\t\t\t\t<p>
\t\t\t\t\t\t<a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("soleil_don_accueil");
        echo "\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" height=\"100%\" style=\"border-radius:5px;\">
\t\t\t\t\t\t\t\t<line class=\"top\" x1=\"0\" y1=\"0\" x2=\"900\" y2=\"0\"/>
\t\t\t\t\t\t\t\t<line class=\"left\" x1=\"1\" y1=\"60\" x2=\"0\" y2=\"-920\"/>
\t\t\t\t\t\t\t\t<line class=\"bottom\" x1=\"376\" y1=\"60\" x2=\"-600\" y2=\"60\"/>
\t\t\t\t\t\t\t\t<line class=\"right\" x1=\"376\" y1=\"0\" x2=\"376\" y2=\"1380\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t
\t\t\t\t\t\tJe fais un don
\t\t\t\t\t\t</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</article>

\t\t<article id=\"contactez-nous\" class=\"grid_3bis alpha omega push_1bis\">
\t\t\t<h2>Contactez-nous</h2>
\t\t\t<p>
\t\t\t\t<a href=\"mailto:";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "mail"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "mail"), "html", null, true);
        echo "</a><br/>
\t\t\t\t<a href=\"tel:";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "tel"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "tel"), "html", null, true);
        echo "</a><br/>
\t\t\t\t<a href=\"tel:";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "gsm"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "gsm"), "html", null, true);
        echo "</a>
\t\t\t</p>
\t\t</article>

\t\t<article id=\"suivez-nous\" class=\"grid_3bis alpha omega push_3bis\">
\t\t\t<h2>Suivez-nous</h2>

\t\t\t<div>
\t\t\t\t<figure id=\"linkedin\">
\t\t\t\t\t<a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["conf"]) ? $context["conf"] : $this->getContext($context, "conf")), "likedln"), "html", null, true);
        echo "\" target=\"_blank\"
\t\t\t\t\tonMouseOver=\"document.getElementById('logo-linkedin').src='";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/img/linkedin-hover.png"), "html", null, true);
        echo "';\"
\t\t\t\t\tonMouseOut=\"document.getElementById('logo-linkedin').src='";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/img/linkedin.png"), "html", null, true);
        echo "';\">
\t\t\t\t\t\t<img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/img/linkedin.png"), "html", null, true);
        echo "\" alt=\"linkedin\" title=\"linkedin\" id=\"logo-linkedin\" />
\t\t\t\t\t</a>
\t\t\t\t</figure> 

\t\t\t\t<figure class=\"prefix_1bis\">
\t\t\t\t\t<a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["conf"]) ? $context["conf"] : $this->getContext($context, "conf")), "twitter"), "html", null, true);
        echo "\" target=\"_blank\" 
\t\t\t\t\tonMouseOver=\"document.getElementById('logo-twitter').src='";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/img/twitter-hover.png"), "html", null, true);
        echo "';\"
\t\t\t\t\tonMouseOut=\"document.getElementById('logo-twitter').src='";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/img/twitter.png"), "html", null, true);
        echo "';\">
\t\t\t\t\t\t<img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/img/twitter.png"), "html", null, true);
        echo "\" alt=\"twitter\" title=\"twitter\" id=\"logo-twitter\" />
\t\t\t\t\t</a>
\t\t\t\t</figure>

\t\t\t\t<figure id=\"facebook\" class=\"prefix_1bis\">  
\t\t\t\t\t<a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["conf"]) ? $context["conf"] : $this->getContext($context, "conf")), "facebook"), "html", null, true);
        echo "\" target=\"_blank\"
\t\t\t\t\tonMouseOver=\"document.getElementById('logo-facebook').src='";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/img/facebook-hover.png"), "html", null, true);
        echo "';\"
\t\t\t\t\tonMouseOut=\"document.getElementById('logo-facebook').src='";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/img/facebook.png"), "html", null, true);
        echo "';\">
\t\t\t\t\t\t<img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("site/img/facebook.png"), "html", null, true);
        echo "\" alt=\"facebook\" title=\"facebook\" id=\"logo-facebook\" /> <!--image par defaut-->
\t\t\t\t\t</a> 
\t\t\t\t</figure>
\t\t\t</div>
\t\t</article>
\t\t
\t\t<div class=\"clear\"></div>
\t</footer>
</section>
\t\t
\t\t<p id=\"copyright\">Document fait en HTML5 et CSS3 - &copy; Design réalisé par <strong><a href=\"http://about.me/acyian.art\">Rey Emilie</a></strong> - Developpement réalisé par <strong><a href=\"#\">Vanessa Verschoren</a></strong> & <strong><a href=\"#\">Patricia Mestdag</a></strong> - 2014</p>

        ";
    }

    public function getTemplateName()
    {
        return "soleilSiteBundle:SousSite:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 90,  141 => 89,  125 => 82,  121 => 81,  117 => 80,  105 => 74,  101 => 73,  93 => 71,  79 => 62,  73 => 61,  67 => 60,  46 => 42,  176 => 61,  168 => 59,  143 => 57,  137 => 88,  133 => 87,  116 => 53,  113 => 79,  109 => 51,  97 => 72,  89 => 39,  65 => 36,  56 => 35,  53 => 28,  35 => 27,  32 => 26,  28 => 27,  90 => 42,  70 => 36,  63 => 32,  59 => 31,  55 => 30,  50 => 28,  45 => 26,  42 => 25,  25 => 24,  19 => 20,);
    }
}
