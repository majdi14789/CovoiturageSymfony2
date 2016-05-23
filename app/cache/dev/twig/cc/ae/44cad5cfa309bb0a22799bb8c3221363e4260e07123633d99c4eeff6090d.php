<?php

/* TeamBuilderCovoiturageBundle:Evaluation:allEvaluation.html.twig */
class __TwigTemplate_ccae44cad5cfa309bb0a22799bb8c3221363e4260e07123633d99c4eeff6090d extends Twig_Template
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
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Chart.js"), "html", null, true);
        echo "\"></script>
<meta name = \"viewport\" content = \"initial-scale = 1, user-scalable = no\">
\t\t




<canvas id=\"canvas\" height=\"450\" width=\"600\"></canvas>


\t<script>

\t\t
\t\t
\t\tvar doughnutData = [ 
\t\t\t\t
\t\t\t\t
                                    {
\t\t\t\t\tvalue: ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["evaluations"]) ? $context["evaluations"] : $this->getContext($context, "evaluations")), 0, array(), "array"), "moy"), "html", null, true);
        echo ",
\t\t\t\t\tcolor:\"#F7464A\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tvalue : ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["evaluations"]) ? $context["evaluations"] : $this->getContext($context, "evaluations")), 1, array(), "array"), "moy"), "html", null, true);
        echo ",
\t\t\t\t\tcolor : \"#46BFBD\"
\t\t\t\t},
                               {
\t\t\t\t\tvalue : ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["evaluations"]) ? $context["evaluations"] : $this->getContext($context, "evaluations")), 2, array(), "array"), "moy"), "html", null, true);
        echo ",
\t\t\t\t\tcolor : \"#008080\"
\t\t\t\t}
                                        
\t\t\t\t\t
\t\t\t\t
\t\t\t];
                         
var intmyDoughnut = new Chart(document.getElementById(\"canvas\").getContext(\"2d\")).Doughnut(doughnutData);
\t</script>
        <div id=\"lbl\" class=\"stat_legends\">
        <div id=\"lbl\" class=\"stat_legend\">
            
\t\t\t<label Style=\"background:#F7464A; font-size: 10px ;\"for=\"inp\">&nbsp;&nbsp;&nbsp </label>&nbsp;&nbsp; 
\t\t\t<span style=\"font-weight: bold;\">Le premier adhérent</span>&nbsp;&nbsp;
\t\t\t<span>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["evaluations"]) ? $context["evaluations"] : $this->getContext($context, "evaluations")), 0, array(), "array"), "name"), "html", null, true);
        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["evaluations"]) ? $context["evaluations"] : $this->getContext($context, "evaluations")), 0, array(), "array"), "moy"), "html", null, true);
        echo "<span>

\t\t\t</br>
\t\t\t</br>

\t\t\t<label Style=\"background:#46BFBD; font-size: 10px ;\"for=\"inp\">&nbsp;&nbsp;&nbsp </label> &nbsp;&nbsp;
\t\t\t<span style=\"font-weight: bold;\">Le deuxiéme adhérent</span>&nbsp;&nbsp;
\t\t\t<span>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["evaluations"]) ? $context["evaluations"] : $this->getContext($context, "evaluations")), 1, array(), "array"), "name"), "html", null, true);
        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["evaluations"]) ? $context["evaluations"] : $this->getContext($context, "evaluations")), 1, array(), "array"), "moy"), "html", null, true);
        echo "<span>

\t\t\t</br>
\t\t\t</br>

\t\t\t<label Style=\"background:#008080; font-size: 10px ;\"for=\"inp\">&nbsp;&nbsp;&nbsp </label> &nbsp;&nbsp;
\t\t\t<span style=\"font-weight: bold;\">Le troisiéme Adhérent</span>&nbsp;&nbsp;
\t\t\t<span>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["evaluations"]) ? $context["evaluations"] : $this->getContext($context, "evaluations")), 2, array(), "array"), "name"), "html", null, true);
        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["evaluations"]) ? $context["evaluations"] : $this->getContext($context, "evaluations")), 2, array(), "array"), "moy"), "html", null, true);
        echo "<span>
            
        </div> 
        
        <table cellpadding=\"8\" cellspacing=\"8\" class=\"stat_table styleTable\">
            <caption id=\"bold\"><span style=\"font-weight: bold;\">EVALUATION</span></caption>
                <tr >
                    <th id=\"bold\" style=\"background:#2C3E50\"><span style=\"font-weight: bold;\">Nom et Prénom</span></th>
                    <th id=\"bold\" style=\"background:#2C3E50\"><span style=\"font-weight: bold;\">Moyenne</span></th>
               </tr>



            ";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evaluations"]) ? $context["evaluations"] : $this->getContext($context, "evaluations")));
        foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
            // line 76
            echo "

                      <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "name"), "html", null, true);
            echo "</td>
                      <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : $this->getContext($context, "evaluation")), "moy"), "html", null, true);
            echo "</td>

            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evaluation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "        </table>
</div>
       
<button onclick=\"history.back()\" class=\"back_button\">Retour</button>

";
    }

    public function getTemplateName()
    {
        return "TeamBuilderCovoiturageBundle:Evaluation:allEvaluation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 83,  139 => 79,  135 => 78,  131 => 76,  127 => 75,  109 => 62,  97 => 55,  85 => 48,  67 => 33,  60 => 29,  53 => 25,  31 => 7,  28 => 6,);
    }
}
