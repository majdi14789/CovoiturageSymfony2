<?php

/* TeamBuilderCovoiturageBundle:Faq:list_adh.html.twig */
class __TwigTemplate_15a549e0247c4e7d44a064a923d7b37c79b809e221fb865fd6a91197bc1f62a5 extends Twig_Template
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
\t\t<h1>Comment faire ?</h1>
\t</div>
\t<!-- end page-heading -->
\t
\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["faqs"]) ? $context["faqs"] : $this->getContext($context, "faqs")));
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 17
            echo "\t\t<h2>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["faq"]) ? $context["faq"] : $this->getContext($context, "faq")), "objet"), "html", null, true);
            echo "</h2>
\t\t<div>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["faq"]) ? $context["faq"] : $this->getContext($context, "faq")), "contenu"), "html", null, true);
            echo "</div>
\t\t<br/>
\t\t<br/>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
</div>
<!--  end content -->
<div class=\"clear\">&nbsp;</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TeamBuilderCovoiturageBundle:Faq:list_adh.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 22,  56 => 18,  51 => 17,  47 => 16,  31 => 4,  28 => 3,);
    }
}
