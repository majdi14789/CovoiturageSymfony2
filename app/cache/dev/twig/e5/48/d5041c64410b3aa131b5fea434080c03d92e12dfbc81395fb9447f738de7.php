<?php

/* TeamBuilderCovoiturageBundle:Adherent:StatistiquesAdherents.html.twig */
class __TwigTemplate_e548d5041c64410b3aa131b5fea434080c03d92e12dfbc81395fb9447f738de7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TeamBuilderCovoiturageBundle::layout.html.twig");

        $this->blocks = array(
            'Erasebody' => array($this, 'block_Erasebody'),
            'Erasefooter' => array($this, 'block_Erasefooter'),
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
        echo "
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Chart.js"), "html", null, true);
        echo "\"></script>
<div>
<canvas id=\"canvas\" height=\"450\" width=\"450\"> </canvas>
<div id=\"lbl\" Style=\"float: left; width: 50%; padding-top: 40px;\">
\t<label Style=\"background:#1DD2AF; font-size: 10px ;\"for=\"inp\">&nbsp;&nbsp;&nbsp </label>&nbsp;&nbsp
\t<span>Le nombre de Femmes est :</span> &nbsp;&nbsp";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sadh"]) ? $context["sadh"] : $this->getContext($context, "sadh")), "sex"), "html", null, true);
        echo "<br><br>
\t
\t<label Style=\"background:#2C3E50; font-size: 10px ;\"for=\"inp\">&nbsp;&nbsp;&nbsp </label>&nbsp;&nbsp
\t<span> Le nombre d'hommes est :</span> &nbsp;&nbsp;";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shadh"]) ? $context["shadh"] : $this->getContext($context, "shadh")), "sex"), "html", null, true);
        echo "
</div>\t
</div>
    
    <script>

\t\tvar pieData = [
\t\t
\t\t\t\t\t{
\t\t\t\t\t\tvalue: ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sadh"]) ? $context["sadh"] : $this->getContext($context, "sadh")), "sex"), "html", null, true);
        echo ",
\t\t\t\t\t\tcolor:\"#1DD2AF\"
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tvalue: ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shadh"]) ? $context["shadh"] : $this->getContext($context, "shadh")), "sex"), "html", null, true);
        echo ",
\t\t\t\t\t\tcolor:\"#2C3E50\"
\t\t\t\t\t}
\t\t\t
\t\t\t];

\tvar myPie = new Chart(document.getElementById(\"canvas\").getContext(\"2d\")).Pie(pieData);
\t
\t</script>
        
        
        
\t
\t\t

 
<button onclick=\"history.back()\" class=\"back_button\">Retour</button>
    
";
    }

    // line 48
    public function block_Erasefooter($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TeamBuilderCovoiturageBundle:Adherent:StatistiquesAdherents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 48,  68 => 26,  61 => 22,  49 => 13,  43 => 10,  35 => 5,  32 => 4,  29 => 3,);
    }
}
