<?php

/* TeamBuilderCovoiturageBundle:Faq:list.html.twig */
class __TwigTemplate_8431ebfde7f37e2acbc3771a2de4239e7937eda88427fcb391639b63e90f00fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TeamBuilderCovoiturageBundle::layout.html.twig");

        $this->blocks = array(
            'Erasebody' => array($this, 'block_Erasebody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TeamBuilderCovoiturageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/faq/css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" />

<div id=\"content-outer\">
<!-- start content -->
<div id=\"content\">

\t<!--  start page-heading -->
\t<div id=\"page-heading\">
\t\t<h1>FAQ</h1>
\t\t<br/><br/>
\t\t<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("faq_ajouter");
        echo "\">Ajouter</a>
\t</div>
\t<!-- end page-heading -->

\t<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" id=\"content-table\">
\t<tbody><tr>
\t\t<th rowspan=\"3\" class=\"sized\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/faq/images/shared/side_shadowleft.jpg"), "html", null, true);
        echo "\" width=\"20\" height=\"300\" alt=\"\"></th>
\t\t<th class=\"topleft\"></th>
\t\t<td id=\"tbl-border-top\">&nbsp;</td>
\t\t<th class=\"topright\"></th>
\t\t<th rowspan=\"3\" class=\"sized\"><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/faq/images/shared/side_shadowright.jpg"), "html", null, true);
        echo "\" width=\"20\" height=\"300\" alt=\"\"></th>
\t</tr>
\t<tr>
\t\t<td id=\"tbl-border-left\"></td>
\t\t<td>
\t\t<!--  start content-table-inner ...................................................................... START -->
\t\t<div id=\"content-table-inner\">
\t\t
\t\t\t<!--  start table-content  -->
\t\t\t<div id=\"table-content\">
\t\t\t
\t\t\t\t<!--  start-table ..................................................................................... -->
\t\t\t\t<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" id=\"product-table\">
\t\t\t\t<tbody><tr>
\t\t\t\t\t<th class=\"table-header-repeat line-left\"><a>Objet</a></th>
\t\t\t\t\t<th class=\"table-header-repeat line-left\"><a>Contenu</a></th>
\t\t\t\t\t<th class=\"table-header-options line-left\"><a>Actions</a></th>
\t\t\t\t</tr>
\t\t\t\t";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["faqs"]) ? $context["faqs"] : $this->getContext($context, "faqs")));
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 43
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["faq"]) ? $context["faq"] : $this->getContext($context, "faq")), "objet"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["faq"]) ? $context["faq"] : $this->getContext($context, "faq")), "contenu"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"options-width\">
\t\t\t\t\t\t<a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("faq_modifier", array("id" => $this->getAttribute((isset($context["faq"]) ? $context["faq"] : $this->getContext($context, "faq")), "idFaq"))), "html", null, true);
            echo "\" class=\"icon-1 info-tooltip\"></a>
\t\t\t\t\t\t<a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("faq_supprimer", array("id" => $this->getAttribute((isset($context["faq"]) ? $context["faq"] : $this->getContext($context, "faq")), "idFaq"))), "html", null, true);
            echo "\" class=\"icon-2 info-tooltip\"></a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<!--  end product-table................................... --> 
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<!--  end content-table  -->
\t\t
\t\t\t
\t\t\t<div class=\"clear\"></div>
\t\t 
\t\t</div>
\t\t<!--  end content-table-inner ............................................END  -->
\t\t</td>
\t\t<td id=\"tbl-border-right\"></td>
\t</tr>
\t<tr>
\t\t<th class=\"sized bottomleft\"></th>
\t\t<td id=\"tbl-border-bottom\">&nbsp;</td>
\t\t<th class=\"sized bottomright\"></th>
\t</tr>
\t</tbody></table>
\t<div class=\"clear\">&nbsp;</div>

</div>
<!--  end content -->
<div class=\"clear\">&nbsp;</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TeamBuilderCovoiturageBundle:Faq:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 52,  102 => 48,  98 => 47,  93 => 45,  89 => 44,  86 => 43,  82 => 42,  61 => 24,  54 => 20,  45 => 14,  31 => 4,  28 => 3,);
    }
}
