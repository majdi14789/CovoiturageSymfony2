<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_6493935b4e0efa134fd84397a06380d20ce613ca099a8c4dc186e10d51100ed2 extends Twig_Template
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
<div class=\"content_center\">
<form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\">
   
\t";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
\t<div class=\"registration change_password\">
\t\t<table cellspacing=\"8\" cellpadding=\"8\" width=\"100%\">
\t\t\t<tr>
\t\t\t\t<th>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password"), 'label');
        echo "</th>
\t\t\t\t<td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password"), 'widget');
        echo "</td>
\t\t\t<tr>
\t\t\t<tr>
\t\t\t\t<th>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'label');
        echo "</th>
\t\t\t\t<td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'widget');
        echo "</td>
\t\t\t<tr>
\t\t\t<tr>
\t\t\t\t<th>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'label');
        echo "</th>
\t\t\t\t<td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'widget');
        echo "</td>
\t\t\t<tr>
\t\t\t
\t\t
\t\t\t<tr>
\t\t\t\t<td colspan=\"2\"> <input type=\"submit\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" /></td>
\t\t\t<tr>
\t\t\t
\t\t
\t\t</table>
\t\t
\t</div>
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 25,  65 => 20,  61 => 19,  55 => 16,  51 => 15,  45 => 12,  41 => 11,  34 => 7,  30 => 6,  23 => 4,  19 => 2,  31 => 4,  28 => 3,);
    }
}
