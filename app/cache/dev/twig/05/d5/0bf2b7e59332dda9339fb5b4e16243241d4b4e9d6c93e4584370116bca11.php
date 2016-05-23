<?php

/* TeamBuilderCovoiturageBundle:Default:archive.html.twig */
class __TwigTemplate_05d50bf2b7e59332dda9339fb5b4e16243241d4b4e9d6c93e4584370116bca11 extends Twig_Template
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



    .buttonOK {
background: #2ecc71;
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
<script>
    
    \$(document).ready(function(){
    \$('#confirmSuppression').click(function(){
        var answer = confirm(\"Etes Vous Sur de Vouloir Confirmer la suppresion Du Trajet?\");
        if (answer){
            return true;
        } else {
            return false;
        }
    });
});
    
    </script>
    
    
<br>
<br>
<br>
<br>
    
<table class='styleTable'>
    <tr>
        
    <th>  Ville Depart </th>
    <th>  Ville Destination </th>
    <th>  Date Depart </th>
    <th>  Heure Depart  </th>
    <th>  Kilometrage </th>  
    <th>  Prix </th>
    <th> Passager(s) </th>
    
    
    
    </tr>
";
        // line 231
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trajets"]) ? $context["trajets"] : $this->getContext($context, "trajets")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 232
            echo "


 <tr>
    
    
    
    <td>";
            // line 239
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "villeDepart"), "html", null, true);
            echo "</td>
    <td>";
            // line 240
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "villeArrivee"), "html", null, true);
            echo "</td>
    <td>";
            // line 241
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "jours"), "d-m-Y"), "html", null, true);
            echo "</td>
    <td>";
            // line 242
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "heure"), "html", null, true);
            echo "</td>
     <td>";
            // line 243
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "kilometrage"), "html", null, true);
            echo "</td>
    <td>";
            // line 244
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "prix"), "html", null, true);
            echo " DT</td>
    
    
    <td> 
\t\t";
            // line 253
            echo "\t\t<a class=\"back_button\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Reclamation_Conducteur", array("id" => $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "idTrajet"))), "html", null, true);
            echo "\">Passager(s)</a>
\t</form> 
    
    
    </td>
        
        
        </tr>
    
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        echo " 
</table>

<br>
<br>
<br>
<br>
<br>
<br>
<br>





";
    }

    public function getTemplateName()
    {
        return "TeamBuilderCovoiturageBundle:Default:archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 263,  297 => 253,  290 => 244,  286 => 243,  282 => 242,  278 => 241,  274 => 240,  270 => 239,  261 => 232,  257 => 231,  28 => 6,);
    }
}
