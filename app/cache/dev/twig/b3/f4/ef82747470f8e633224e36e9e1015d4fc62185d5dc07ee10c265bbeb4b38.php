<?php

/* TestBundle:Home:ErreurDeReservation.html.twig */
class __TwigTemplate_b3f4ef82747470f8e633224e36e9e1015d4fc62185d5dc07ee10c265bbeb4b38 extends Twig_Template
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
        echo "Vous avez deja reserver mesieur

 <form action=\" ";
        // line 6
        echo $this->env->getExtension('routing')->getPath("Retour");
        echo " \">
    
     <input class= \"sub\" type=\"submit\" value=\"Retour\">
    
</form>

";
    }

    // line 13
    public function block_Erasefooter($context, array $blocks = array())
    {
        // line 14
        echo "    ";
    }

    public function getTemplateName()
    {
        return "TestBundle:Home:ErreurDeReservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  47 => 13,  36 => 6,  32 => 4,  29 => 3,);
    }
}
