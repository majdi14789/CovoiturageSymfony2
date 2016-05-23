<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_b92b182bc967b60ed3567ece42ed451c517a324e46207881ca606ce54cc7ace0 extends Twig_Template
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

    // line 5
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "    

    <style>
    
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
<form action=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

\t
\t<div class=\"registration\">
\t\t<table cellspacing=\"8\" cellpadding=\"8\" width=\"100%\">
\t\t\t<tr>
\t\t\t\t<th><label for=\"username\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></th>
\t\t\t\t<td><input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" /></td>
\t\t\t<tr>
\t\t\t<tr>
\t\t\t\t<th><label for=\"password\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></th>
\t\t\t\t<td><input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" /></td>
\t\t\t<tr>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t\t\t<label for=\"remember_me\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t</td>
\t\t\t<tr>
\t\t\t
\t\t\t
\t\t\t
\t\t\t<tr>
\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t<br/>
\t\t\t\t\t<br/>
\t\t\t\t\t<a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\" style=\"float: right\">Mot de passe oublié ?</a>
\t\t\t\t</td>
\t\t\t<tr>
\t\t\t
\t\t
\t\t</table>
            
           
            
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;   
\t  <input class='buttonOK' type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t
\t</div>
</form>
    
    
    
    <br>
    <br>
    <br>
    <br>
    <br>
    
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 92,  126 => 76,  113 => 66,  102 => 58,  96 => 55,  92 => 54,  83 => 48,  79 => 47,  39 => 9,  33 => 7,  31 => 6,  28 => 5,);
    }
}
