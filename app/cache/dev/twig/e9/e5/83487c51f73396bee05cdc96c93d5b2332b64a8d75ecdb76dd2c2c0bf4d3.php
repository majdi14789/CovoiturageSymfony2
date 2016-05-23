<?php

/* TeamBuilderCovoiturageBundle:Evaluation:list_stat.html.twig */
class __TwigTemplate_e9e583487c51f73396bee05cdc96c93d5b2332b64a8d75ecdb76dd2c2c0bf4d3 extends Twig_Template
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

    // line 6
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"content_center\">
\t<a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("Evaluation_liste");
        echo "\">Les adherents les plus notés ><a>
\t<br/>
\t<br/>
\t<a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("Statistiques_sexe");
        echo "\">Statistiques sexes ><a>
\t<br/>
\t<br/>
\t<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("Statistiques_age");
        echo "\">Statistiques ages ><a>
</div>

";
    }

    public function getTemplateName()
    {
        return "TeamBuilderCovoiturageBundle:Evaluation:list_stat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  40 => 11,  34 => 8,  31 => 7,  28 => 6,);
    }
}
