<?php

/* TeamBuilderCovoiturageBundle:Reclamation:ListeAdherent.html.twig */
class __TwigTemplate_e81fb4b4f363e9263f951cec09eef0d7d334a0fc8ceb7b0d1764806071659890 extends Twig_Template
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


<div class=\"content_center\" style=\"width: 80%; margin: auto;\">
<h1 align='center'> Liste des Passagers</h1>
    <table class='styleTable'>

";
        // line 142
        $context["i"] = 0;
        // line 143
        echo "
";
        // line 144
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adherentConcernes"]) ? $context["adherentConcernes"] : $this->getContext($context, "adherentConcernes")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["adherentConcerne"]) {
            // line 145
            echo "    <br>

        <tr>
            <th>
                Passager
                <th>
            </tr>
        <tr>
        <td><label>Nom   :       </label<label>";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adherentConcerne"]) ? $context["adherentConcerne"] : $this->getContext($context, "adherentConcerne")), "nom"), "html", null, true);
            echo "  </label><br></td>
    </tr>
    <tr>    
    <td><label>Prenom :      </label<label>";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adherentConcerne"]) ? $context["adherentConcerne"] : $this->getContext($context, "adherentConcerne")), "prenom"), "html", null, true);
            echo " </label><br></td>
    </tr>
    <tr>
    <td><label>Telephone :   </label<label>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adherentConcerne"]) ? $context["adherentConcerne"] : $this->getContext($context, "adherentConcerne")), "telephone"), "html", null, true);
            echo "</label><br></td>
</tr>
<tr>
    <td>
";
            // line 163
            if (($this->getAttribute($this->getAttribute((isset($context["reclamationRs"]) ? $context["reclamationRs"] : $this->getContext($context, "reclamationRs")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "nbrreclamation") == 0)) {
                // line 168
                echo "    ";
                // line 169
                echo "
\t<br>
\t<a class=\"toshow";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo " back_button\" id=\"reclamationBtn\">Reclamation</a>
\t<a href=\"";
                // line 172
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Evaluation_ajouter", array("id" => $this->getAttribute((isset($context["adherentConcerne"]) ? $context["adherentConcerne"] : $this->getContext($context, "adherentConcerne")), "id"))), "html", null, true);
                echo "\" class=\"back_button\">Evaluer</a>
\t
    <form action=\"";
                // line 174
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Reclamation_Conducteur", array("id" => $this->getAttribute((isset($context["adherentConcerne"]) ? $context["adherentConcerne"] : $this->getContext($context, "adherentConcerne")), "id"), "idR" => $this->getAttribute($this->getAttribute((isset($context["reclamationRs"]) ? $context["reclamationRs"] : $this->getContext($context, "reclamationRs")), ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") - 1), array(), "array"), "idReclamationreservation"))), "html", null, true);
                echo "\">
    
    </form>
    <div  Style=\" margin-top: 35px; margin-left:  +10px; \" id=\"reclamation\" class=\"reclamations";
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "\">

    ";
                // line 179
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TeamBuilderCovoiturageBundle:Reclamation:ajouter", array("id" => $this->getAttribute((isset($context["adherentConcerne"]) ? $context["adherentConcerne"] : $this->getContext($context, "adherentConcerne")), "id"), "idR" => $this->getAttribute($this->getAttribute((isset($context["reclamationRs"]) ? $context["reclamationRs"] : $this->getContext($context, "reclamationRs")), ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") - 1), array(), "array"), "idReclamationreservation"), "idTrajet" => (isset($context["idTrajet"]) ? $context["idTrajet"] : $this->getContext($context, "idTrajet")))));
                echo "

    </div>
        
        
        </tr>
        </td>
";
            }
            // line 187
            echo "<hr/>
 




<script type=\"text/javascript\">
    
    \$(document).ready(function() {

        \$('.reclamations";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "').hide();

        \$('.toshow";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "').click(function() {
            \$('.reclamations";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "').show();

        }
                
                );




    });
</script>
";
            // line 211
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adherentConcerne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "
</table>


";
    }

    public function getTemplateName()
    {
        return "TeamBuilderCovoiturageBundle:Reclamation:ListeAdherent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 213,  296 => 211,  282 => 200,  278 => 199,  273 => 197,  261 => 187,  250 => 179,  245 => 177,  239 => 174,  234 => 172,  230 => 171,  226 => 169,  224 => 168,  222 => 163,  215 => 159,  209 => 156,  203 => 153,  193 => 145,  176 => 144,  173 => 143,  171 => 142,  31 => 4,  28 => 3,);
    }
}
