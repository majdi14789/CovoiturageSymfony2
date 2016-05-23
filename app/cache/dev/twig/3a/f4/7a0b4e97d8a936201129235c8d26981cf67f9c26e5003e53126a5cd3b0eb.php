<?php

/* TeamBuilderCovoiturageBundle:Reclamation:Ajouter.html.twig */
class __TwigTemplate_3af47a0b4e97d8a936201129235c8d26981cf67f9c26e5003e53126a5cd3b0eb extends Twig_Template
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
        echo "<form  action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Reclamation_Conducteur", array("id" => (isset($context["idTrajet"]) ? $context["idTrajet"] : $this->getContext($context, "idTrajet")), "idR" => (isset($context["idAdhCon"]) ? $context["idAdhCon"] : $this->getContext($context, "idAdhCon")))), "html", null, true);
        echo "\" method=\"POST\" >
cause :";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_reclamation"]) ? $context["form_reclamation"] : $this->getContext($context, "form_reclamation")), "cause"), 'widget');
        echo "
Description :";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_reclamation"]) ? $context["form_reclamation"] : $this->getContext($context, "form_reclamation")), "description"), 'widget');
        echo "
<input type=\"submit\" value=\"Ajouter\" />
</form>";
    }

    public function getTemplateName()
    {
        return "TeamBuilderCovoiturageBundle:Reclamation:Ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  24 => 3,  19 => 2,);
    }
}
