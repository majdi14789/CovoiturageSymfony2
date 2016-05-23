<?php

/* TeamBuilderCovoiturageBundle:Reclamation:ListeReclamation.html.twig */
class __TwigTemplate_54260774a88c04506213ed4827835c8d78b10c8a685406986b77acf357a22be7 extends Twig_Template
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

    // line 4
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 5
        echo "<style>
    
    
    styleTable a:link {
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
\tfont-size:12px;
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
\tpadding:21px 25px 22px 25px;
\tborder-top:1px solid #fafafa;
\tborder-bottom:1px solid #e0e0e0;

\tbackground: #ededed;
\tbackground: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
\tbackground: -moz-linear-gradient(top,  #ededed,  #ebebeb);
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

<link href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/basic.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Chart.js"), "html", null, true);
        echo "\"></script>
   
<SCRIPT language=\"javascript\">
var tab = new Array();
var i;
</SCRIPT>
\t\t\t\t
<div  class=\"content_center\">   

    <div Style=\"width: 40%; float: left\" > 
        
        <table class=\"styleTable\" cellpadding=\"2\" cellspacing=\"2\" border=\"1\" align=\"center\">
            <caption>RECLAMATION</caption>
            <tr>
                <th>Adherent Concerné</th>
                <th>Reclamateur</th>
                <th>Decrption</th>
                <th>Cause</th>
                <th>Nombre de reclamations</th>
            </tr>

            
        ";
        // line 132
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) ? $context["reclamations"] : $this->getContext($context, "reclamations")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 133
            echo "            ";
            $context["i"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index");
            // line 134
            echo "
            <tr id=\"";
            // line 135
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">

                <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "idAdherentconcerne"), "nom"), "html", null, true);
            echo "</td>
                <td>";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "idReclamateur"), "nom"), "html", null, true);
            echo "</td>
                <td>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "description"), "html", null, true);
            echo "</td>
                <td>";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "cause"), "html", null, true);
            echo "</td>
                <td>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "idAdherentconcerne"), "nombreReclamation"), "html", null, true);
            echo "</td>
                
                  
            <SCRIPT language=javascript>
                tab.push(";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "idAdherentconcerne"), "id"), "html", null, true);
            echo ");
            </SCRIPT>
            </tr>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "        </table>
       
    </div>
    
\t<div  Style=\"width: 58%; float: left; padding-top: 40px;\">
        <canvas id=\"canvas\" height=\"150\" width=\"250\" align=\"center\"> </canvas>
    
               
\t\t";
        // line 157
        if (((isset($context["ab"]) ? $context["ab"] : $this->getContext($context, "ab")) != null)) {
            // line 158
            echo "
\t\t<div id=\"lbl\" Style=\" margin-top: -10px;   \">
\t\t\t <label style=\"background:#69D2E7; font-size: 10px; \" for=\"inp\">&nbsp;&nbsp;&nbsp;</label>
\t\t\t &nbsp;&nbsp;Inpoctualité <br>
\t\t\t  <label style=\"background:#F38630; font-size: 10px; \" for=\"inp\">&nbsp;&nbsp;&nbsp;</label>
\t\t\t  &nbsp;&nbsp;Absence non prevenue<br>
\t\t\t  <label style=\"background:#E0E4CC; font-size: 10px; \" for=\"inp\">&nbsp;&nbsp;&nbsp;</label>
\t\t\t  &nbsp;&nbsp;Faux Profil<br>
\t\t\t  <h6 > ";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inp"]) ? $context["inp"] : $this->getContext($context, "inp")), 0, array(), "array"), "rec"), "html", null, true);
            echo " fois l'objet d'une reclamation pour motif d'inpoctualité</h6>
\t\t\t  <h6 > ";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fp"]) ? $context["fp"] : $this->getContext($context, "fp")), 0, array(), "array"), "rec"), "html", null, true);
            echo " fois l'objet d'une reclamation pour motif de faux profil</h6>
\t\t\t  <h6 > ";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ab"]) ? $context["ab"] : $this->getContext($context, "ab")), 0, array(), "array"), "rec"), "html", null, true);
            echo " fois l'objet d'une reclamation pour motif absence non prevenue</h6>
\t\t\t<br/>
\t\t\t<br/>
\t\t\t<br/>
\t\t\t";
            // line 172
            $context["url"] = $this->env->getExtension('routing')->getPath("Adherent_Bloquer", array("id" => $this->getAttribute((isset($context["adhC"]) ? $context["adhC"] : $this->getContext($context, "adhC")), "id")));
            // line 173
            echo "\t\t\t<button  class=\"back_button\" id=\"bloquerBtn\" onclick=\"lockUser('";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "')\">Bloquer</button>
\t\t\t
\t\t</div>
\t\t";
        }
        // line 177
        echo "\t</div>
   
</div>

 <script id=\"chart\">

function lockUser(url){
\t\$.ajax({
\t\ttype: \"POST\",
\t\turl: url,
\t\tdataType: 'json',
\t\tsuccess: function(data)
\t\t{
\t\t   alert(data.message); 
\t\t}
\t});

\treturn false; 
}
 
 
var pieData = [

{
\t\t\t\t\t\t\t";
        // line 201
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ab"]) ? $context["ab"] : $this->getContext($context, "ab")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 202
            echo "value: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "rec"), "html", null, true);
            echo ",
\t\tcolor:\"#F38630\"
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "},
{
\t\t\t\t\t\t\t";
        // line 207
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fp"]) ? $context["fp"] : $this->getContext($context, "fp")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 208
            echo "value : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "rec"), "html", null, true);
            echo ",
\t\tcolor : \"#E0E4CC\"
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "},
{
\t\t\t\t\t\t\t ";
        // line 213
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inp"]) ? $context["inp"] : $this->getContext($context, "inp")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 214
            echo "
value : ";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "rec"), "html", null, true);
            echo ",
\t\tcolor : \"#69D2E7\"
\t\t\t\t\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "}

];
var myPie = new Chart(document.getElementById(\"canvas\").getContext(\"2d\")).Pie(pieData);
</script>


<script type=\"text/javascript\">
\t\tvar i;
\t\t\$(document).ready(function(){
\t  
\t   \$('td').click(function(){
\t\tvar ind = \$(this).index();
\t\tvar indp = \$(this).parent().index();
\t\talert(ind);
\t\talert(indp);
\t\ti = tab[indp-1].toString();
\t\talert(i);
\t\tvar route = \"";
        // line 236
        echo $this->env->getExtension('routing')->getPath("Reclamation_chart", array("id" => "cont"));
        echo "\";
\t\twindow.location = route.replace(\"cont\", i);
\t\t\t\t \$('#bloquerBtn').click(function(){
\t\t\t\t\t alert('hhhhhhhhhh'+i);
\t\tvar route = \"";
        // line 240
        echo $this->env->getExtension('routing')->getPath("Adherent_Bloquer", array("id" => "cont"));
        echo "\";
\t\twindow.location = route.replace(\"cont\", i);
})
 
}
)

";
        // line 247
        if (((isset($context["ab"]) ? $context["ab"] : $this->getContext($context, "ab")) == null)) {
            // line 248
            echo "\$('#chart').hide();
\t\t\$('#canvas').hide();
\t   
\t\t
";
        } else {
            // line 253
            echo "\$('#chart').show();
\t\t\$('#canvas').show();
\t\t
";
        }
        // line 257
        echo "});
</script>


";
    }

    // line 263
    public function block_Erasefooter($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TeamBuilderCovoiturageBundle:Reclamation:ListeReclamation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 263,  413 => 257,  407 => 253,  400 => 248,  398 => 247,  388 => 240,  381 => 236,  361 => 218,  352 => 215,  349 => 214,  345 => 213,  341 => 211,  331 => 208,  327 => 207,  323 => 205,  313 => 202,  309 => 201,  283 => 177,  275 => 173,  273 => 172,  266 => 168,  262 => 167,  258 => 166,  248 => 158,  246 => 157,  236 => 149,  218 => 145,  211 => 141,  207 => 140,  203 => 139,  199 => 138,  195 => 137,  190 => 135,  187 => 134,  184 => 133,  167 => 132,  142 => 110,  138 => 109,  32 => 5,  29 => 4,);
    }
}
