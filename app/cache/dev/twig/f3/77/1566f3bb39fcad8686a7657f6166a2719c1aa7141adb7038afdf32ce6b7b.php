<?php

/* TeamBuilderCovoiturageBundle:Default:prevention.html.twig */
class __TwigTemplate_f3771566f3bb39fcad8686a7657f6166a2719c1aa7141adb7038afdf32ce6b7b extends Twig_Template
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

    // line 7
    public function block_Erasebody($context, array $blocks = array())
    {
        echo " 



<style>
 
    .styleTable a:link {
\tcolor: #666;
\tfont-weight: bold;
\ttext-decoration:none;
}
.styleTable a:visited {
\tcolor: #999999;
\tfont-weight:bold;
\ttext-decoration:none;
}
.styleTable a:active,
.styleTable a:hover {
\tcolor: #bd5a35;
\ttext-decoration:underline;
}
.styleTable {
\tfont-family:Arial, Helvetica, sans-serif;
\tcolor:#666;
\tfont-size:15px;
\ttext-shadow: 1px 1px 0px #fff;
\tbackground:#eaebec;
\tmargin:20px;
\tborder:#ccc 1px solid;

\t-moz-border-radius:3px;
\t-webkit-border-radius:3px;
\tborder-radius:3px;

\t-moz-box-shadow: 0 1px 2px #d1d1d1;
\t-webkit-box-shadow: 0 1px 2px #d1d1d1;
\tbox-shadow: 0 1px 2px #d1d1d1;
     
                

}
.styleTable th {
/*\t
    padding:21px 25px 22px 25px;
\tborder-top:1px solid #fafafa;
\tborder-bottom:1px solid #e0e0e0;

\tbackground: #ededed;
\tbackground: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
\tbackground: -moz-linear-gradient(top,  #ededed,  #ebebeb);
        
  */
  
padding: 21px 25px 22px 25px;
border-top: 1px solid #fafafa;
border-bottom: 1px solid #e0e0e0;
background: #2C3E50;
/* background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb)); */
background: -moz-linear-gradient(top, #ededed, #ebebeb);
        
        
        
        
        
}
.styleTable th:first-child {
\ttext-align: left;
\tpadding-left:20px;
}
.styleTable tr:first-child th:first-child {
\t-moz-border-radius-topleft:3px;
\t-webkit-border-top-left-radius:3px;
\tborder-top-left-radius:3px;
        
        
}
.styleTable tr:first-child th:last-child {
\t-moz-border-radius-topright:3px;
\t-webkit-border-top-right-radius:3px;
\tborder-top-right-radius:3px;
}
.styleTable tr {
\ttext-align: center;
\tpadding-left:20px;
}
.styleTable td:first-child {
\ttext-align: left;
\tpadding-left:20px;
\tborder-left: 0;
        
  
        
        
}
.styleTable td {
\tpadding:18px;
\tborder-top: 1px solid #ffffff;
\tborder-bottom:1px solid #e0e0e0;
\tborder-left: 1px solid #e0e0e0;

\tbackground: #fafafa;
\tbackground: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
\tbackground: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);

}
.styleTable tr.even td {
\tbackground: #f6f6f6;
\tbackground: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
\tbackground: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6);

       
}
.styleTable tr:last-child td {
\tborder-bottom:0;
        border-left: 1px solid #e0e0e0;
 

}
.styleTable tr:last-child td:first-child {
\t-moz-border-radius-bottomleft:3px;
\t-webkit-border-bottom-left-radius:3px;
\tborder-bottom-left-radius:3px;
}
.styleTable tr:last-child td:last-child {
\t-moz-border-radius-bottomright:3px;
\t-webkit-border-bottom-right-radius:3px;
\tborder-bottom-right-radius:3px;
}
.styleTable tr:hover td {
\tbackground: #f2f2f2;
\tbackground: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
\tbackground: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);\t
}
</style>


<style>
    
      .buttonAnnuler {
background: #c0392b;
color: #FFF;
padding: .9em 3em;
display: inline-block;
text-transform: uppercase;
transition: 0.5s all;
-webkit-transition: 0.5s all;
-moz-transition: 0.5s all;
-o-transition: 0.5s all;
border-radius: 0.3em;
-webkit-border-radius: 0.3em;
-moz-border-radius: 0.3em;
-o-border-radius: 0.3em;
font-size: 0.875em;
border-top: none;
border-right: none;
border-left: none;
border-bottom: 4px solid #2A323A;
outline: none;
cursor: pointer;
font-family: 'Open Sans', sans-serif;
}
</style>



      
      
            <br> 
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
  
    <div align='center'>
  
<table  class='styleTable'>
    
   <tr> 
    <tr>
        <th>Ville Depart</th>
        <th>Ville Arrivee</th>
        <th>Date Depart</th>
        <th>Heure Depart</th>
        <th>Kilometrage</th>
        <th>Prix</th>
        
        </tr>
         



 ";
        // line 201
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trajets"]) ? $context["trajets"] : $this->getContext($context, "trajets")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 202
            echo "
 <tr>
    
    
    
    <td>";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "villeDepart"), "html", null, true);
            echo "</td>
    <td>";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "villeArrivee"), "html", null, true);
            echo "</td>
    <td>";
            // line 209
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "jours"), "d-m-Y"), "html", null, true);
            echo "</td>
    <td>";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "heure"), "html", null, true);
            echo "</td>
     <td>";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "kilometrage"), "html", null, true);
            echo "</td>
    <td>";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "prix"), "html", null, true);
            echo " DT</td>
    
    </tr>
    
    
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "
       </table> 
    
            
        </div>
            <style>
               
.p-ww {
float: center !important; 
width: 90% !important;
padding: 1.3em 0 0 0!important;
}
                </style>
            
                
                <div align='center'>
<div align='center' class=\"p-ww\" id=\"reservation\">         
 
  <form action='";
        // line 236
        echo $this->env->getExtension('routing')->getPath("team_builder_covoiturage_notifier");
        echo "' method='POST'>
 Date du depart :  <input  type='text' id='datepicker' name='date1' value=\"";
        // line 237
        echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
        echo "\">
 Destination    :  <input  type='text' id='villeDepart' name='villeDepart' value=\"";
        // line 238
        echo twig_escape_filter($this->env, (isset($context["destination"]) ? $context["destination"] : $this->getContext($context, "destination")), "html", null, true);
        echo "\"> 
 
 
 <!--
 <input name='option' type=\"submit\" id='confirm' class=\"buttonAnnuler\" value=\"Chercher\" align='center'>   
 -->

</div> 
      
            <div>    
   <span><input name='option' type=\"submit\" id='confirm' class=\"buttonAnnuler\" value=\"Prevention climatique\" align='center'>
            </span>
  <span><input name='option'  type=\"submit\" id='confirm' class=\"buttonAnnuler\" value=\"Prevention Emb\" align='center'>
            </span>
           <span><input name='option' type=\"submit\" id='confirm' class=\"buttonAnnuler\" value=\"Prevention sec\" align='center'>
            </span> 
  
</form>
</div>
                
            </div>    


<script src=\"http://code.jquery.com/ui/1.9.2/jquery-ui.js\"></script>

 <script>
\t\t\t\t  \$(function(\$) {
\t\t\t\t    \$( \"#datepicker\" ).datepicker({
                                   // dateFormat : 'dd/'+'M'+'/yy',
\t                            
             dateFormat : 'yy-'+'mm'+'-dd',
\t                            
                                 minDate : 0,  
                                    });
\t\t\t\t  });
              
\t\t

\t\t</script>

<style>
    #datepicker {
background: url(../images/cal-icon.png) no-repeat 100% 50% #FFF;
}
</style>
              





<script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.10.4.custom.min.js"), "html", null, true);
        echo "\"></script>
                     
<link href=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui-1.10.4.custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
                    
<link href=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" title='numberOne'>


                     
                     
                <script>
                               \$(function(\$) {
\t\t
     var availableTags = [\"Ariana\",\"Tunis\",\"Sfax\",\"Grombalia\",\"Nabeul\",\"Sousse\",\"Gafsa\",\"Gabes\",\"Hammam-lif\",\"Monastir\",\"Douz\",\"Tabarka\",\"Beja\"];
\t\t\$( \"#villeDepart\" ).autocomplete({
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
             
                
      
                                  </script>



      
            <br> 
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br> 
    
   
    
    <script>
       
    var date='';
    var destination='';
    \$(document).ready( function() {
    \$('#datepicker').change(function() {
       
       date= document.getElementById('datepicker').value;
        alert(date);
       destination= document.getElementById('villeDepart').value;
       alert(date);

        // do your magic pony stuff
    });
});

        
        </script>
    
";
    }

    public function getTemplateName()
    {
        return "TeamBuilderCovoiturageBundle:Default:prevention.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 293,  356 => 291,  351 => 289,  297 => 238,  293 => 237,  289 => 236,  269 => 218,  257 => 212,  253 => 211,  249 => 210,  245 => 209,  241 => 208,  237 => 207,  230 => 202,  226 => 201,  28 => 7,);
    }
}
