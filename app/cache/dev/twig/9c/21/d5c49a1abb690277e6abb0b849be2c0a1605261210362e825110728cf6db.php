<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_9c21d5c49a1abb690277e6abb0b849be2c0a1605261210362e825110728cf6db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
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

<div class=\"content_center\">
<div class=\"profile\">

<div class=\"fos_user_user_show\" align='center'>
    
    
    <table class='styleTable' >
       
        <tr>
            <th>
                Mon PROFIL
                </th>
            </tr>
        
        <tr>
    <td><p>";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</p></td>
           </tr>
        <tr>

  <td>  <p>";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</p> </td>
             </tr>
        <tr>

    <td><p>Sexe: ";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "sexe"), "html", null, true);
        echo "</p></td>
        </tr>
<tr>
    <td><p>Nom: ";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom"), "html", null, true);
        echo "</p></td>
        
    </tr>
    <tr>
        

    <td><p>Prénom: ";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom"), "html", null, true);
        echo "</p> </td>
            </tr>
        <tr>

    <td><p>date de naissance: ";
        // line 171
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "naissance"), "d/m/Y"), "html", null, true);
        echo "</p> </td>
        </tr>
\t
\t
\t<br/>
\t<br/>

     </table>   
        
        <a href=\"";
        // line 180
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Modifier mes informations</a>
\t<br/>
\t<br/>
\t<a href=\"";
        // line 183
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Modifier le mot de passe</a>
</div>

</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 183,  221 => 180,  209 => 171,  202 => 167,  193 => 161,  187 => 158,  178 => 154,  169 => 150,  19 => 2,);
    }
}
