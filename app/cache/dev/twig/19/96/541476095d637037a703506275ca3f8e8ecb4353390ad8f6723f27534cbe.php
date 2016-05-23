<?php

/* TestBundle:Home:AfficheTrajet.html.twig */
class __TwigTemplate_1996541476095d637037a703506275ca3f8e8ecb4353390ad8f6723f27534cbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TestBundle::layout.html.twig");

        $this->blocks = array(
            'Erasebody' => array($this, 'block_Erasebody'),
            'Erasefooter' => array($this, 'block_Erasefooter'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TestBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 4
        echo "<script src=\"http://code.jquery.com/ui/1.9.2/jquery-ui.js\"></script>
 <script>
\t\t\t\t  \$(function(\$) {
\t\t\t\t    \$( \"#datepicker\" ).datepicker({
                                    dateFormat : 'yy-'+'mm'+'-dd',
\t                            minDate : 0,  
                                    });
\t\t\t\t  });
              
\t\t
\t\t</script>
<script lang=\"javascrpt\">
    function test(){
        
        //alert(\"ok\");
    }
    </script>
    
    
    
    
<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.10.4.custom.min.js"), "html", null, true);
        echo "\"></script>
                     
<link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui-1.10.4.custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
                    
               <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" title='numberOne'>


                     
                     
                <script>
                             
        var availableTags = [\"Ariana\",\"Tunis\",\"Sfax\",\"Grombalia\",\"Nabeul\",\"Sousse\",\"Gafsa\",\"Gabes\",\"Hammam-lif\",\"Monastir\",\"Douz\",\"Tabarka\",\"Beja\"];

    \$(function(\$) {
\t\t
\t\t\$( \"#villeDepartText\" ).autocomplete({
\t\t\tsource: availableTags
\t\t});
\t\t

\t\t
// Hover states on the static widgets
\t\t\$( \"#dialog-link, #icons li\" ).hover(
\t\t\tfunction(\$) {
\t\t\t\t\$( this ).addClass( \"ui-state-hover\" );
\t\t\t},
\t\t\tfunction(\$) {
\t\t\t\t\$( this ).removeClass( \"ui-state-hover\" );
\t\t\t}
\t\t);
\t});
\t\t
                
                
                                         \$(function(\$) {
      
              \t\t\$( \"#villearriveeText\" ).autocomplete({
\t\t\tsource: availableTags
\t\t});
\t\t

\t\t
// Hover states on the static widgets
\t\t\$( \"#dialog-link, #icons li\" ).hover(
\t\t\tfunction(\$) {
\t\t\t\t\$( this ).addClass( \"ui-state-hover\" );
\t\t\t},
\t\t\tfunction(\$) {
\t\t\t\t\$( this ).removeClass( \"ui-state-hover\" );
\t\t\t}
\t\t);
\t});
                
                
      
                                  </script>
            
    
    
   <div class=\"find-place\">
\t\t\t<div class=\"wrap\">
\t\t\t\t<div class=\"p-h\">
\t\t\t\t\t<span>Trouvez</span>
\t\t\t\t\t<label>Votre Trajet</label>
\t\t\t\t</div> 
 <div class=\"p-ww\" id='reservation'>
     
\t<form method=\"get\" action=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("afficheTrajet");
        echo "\">
\t<span> Depart :</span>
\t  <input class=\"dest\" type=\"text\" id=\"villeDepartText\" name=\"villeDepartText\"  value=\"\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Distination';}\">
                                                
             <span> Destination :</span>
\t     <input class=\"dest\" type=\"text\" id=\"villearriveeText\" name=\"villearriveeText\" value=\"\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Distination';}\">
                                               
             <span>Date :</span>
\t     <input class=\"dateText\" id=\"datepicker\" name=\"datepicker\" type=\"text\" value=\"\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Select date';}\">
\t     <input type=\"submit\" value=\"Rechercher\" />
\t\t</form>
\t\t\t\t</div>  
                            <div class=\"clear\"> </div>
                        </div>
   </div>
    
    <table align=\"center\" width=\"98%\" class=\"styleTable\">
    <tr>
        
         
        <th style='background:#2C3E50 !important'><div style=\"color: #9FB0C0 !important; font-size:  1em !important;\"><span>Ville de depart</span></div></th>
        <th style='background:#2C3E50 !important'>Ville de arivee</th>
        <th style='background:#2C3E50 !important'>le jour</th>
        <th style='background:#2C3E50 !important'>Heure</th>
        <th style='background:#2C3E50 !important'>Nbr Placest</th>
        <th style='background:#2C3E50 !important'>Prix</th>
        <th style='background:#2C3E50 !important'></th>
        
    </tr>
";
        // line 121
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trajets"]) ? $context["trajets"] : $this->getContext($context, "trajets")));
        foreach ($context['_seq'] as $context["_key"] => $context["tra"]) {
            // line 122
            echo "    ";
            if (($this->getAttribute((isset($context["tra"]) ? $context["tra"] : $this->getContext($context, "tra")), "places") != 0)) {
                // line 123
                echo "    <tr>
        
        
        <td >";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tra"]) ? $context["tra"] : $this->getContext($context, "tra")), "villeDepart"), "html", null, true);
                echo "</td>
        <td> ";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tra"]) ? $context["tra"] : $this->getContext($context, "tra")), "villeArrivee"), "html", null, true);
                echo "</td>
        <td>";
                // line 128
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tra"]) ? $context["tra"] : $this->getContext($context, "tra")), "jours"), "d-m-Y"), "html", null, true);
                echo "</td>
        <td>";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tra"]) ? $context["tra"] : $this->getContext($context, "tra")), "heure"), "html", null, true);
                echo "</td>
        <td>";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tra"]) ? $context["tra"] : $this->getContext($context, "tra")), "places"), "html", null, true);
                echo "</td>
        <td>";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tra"]) ? $context["tra"] : $this->getContext($context, "tra")), "prix"), "html", null, true);
                echo "</td>
       
        <td>
 
            
         <a href = \" ";
                // line 136
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reserver", array("idConducteur" => $this->getAttribute($this->getAttribute((isset($context["tra"]) ? $context["tra"] : $this->getContext($context, "tra")), "idConducteur"), "id"), "idTrajet" => $this->getAttribute((isset($context["tra"]) ? $context["tra"] : $this->getContext($context, "tra")), "idTrajet"))), "html", null, true);
                echo " \"> Reserver </a>   
        </td>
        
      
    </tr>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tra'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "
</table>

    <br><br><br><br>

";
    }

    // line 150
    public function block_Erasefooter($context, array $blocks = array())
    {
        // line 151
        echo "    ";
    }

    public function getTemplateName()
    {
        return "TestBundle:Home:AfficheTrajet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 151,  225 => 150,  216 => 143,  203 => 136,  195 => 131,  191 => 130,  187 => 129,  183 => 128,  179 => 127,  175 => 126,  170 => 123,  167 => 122,  163 => 121,  131 => 92,  65 => 29,  60 => 27,  55 => 25,  32 => 4,  29 => 3,);
    }
}
