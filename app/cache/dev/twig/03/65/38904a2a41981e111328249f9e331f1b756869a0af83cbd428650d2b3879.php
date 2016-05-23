<?php

/* TestBundle:Home:reservation.html.twig */
class __TwigTemplate_036538904a2a41981e111328249f9e331f1b756869a0af83cbd428650d2b3879 extends Twig_Template
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
        echo "reservation effectuee
Nombre de  Restantes ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "places"), "html", null, true);
        echo "
<br>

<button onclick=\"history.back()\" class=\"sub\">Retour</button>
";
    }

    // line 10
    public function block_Erasefooter($context, array $blocks = array())
    {
        // line 11
        echo "    ";
    }

    public function getTemplateName()
    {
        return "TestBundle:Home:reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  44 => 10,  35 => 5,  32 => 4,  29 => 3,);
    }
}
