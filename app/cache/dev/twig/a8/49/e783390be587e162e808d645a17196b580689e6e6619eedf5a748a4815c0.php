<?php

/* TeamBuilderCovoiturageBundle:Contact:contact.html.twig */
class __TwigTemplate_a849e783390be587e162e808d645a17196b580689e6e6619eedf5a748a4815c0 extends Twig_Template
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
        echo "<div class=\"content_center\">

<table align=\"center\" width=\"95%\" class=\"styleTable\">
    <tr>
        <th style='background:#2C3E50 !important'></th>
\t\t<th style='background:#2C3E50 !important'><span>Nom</span></th>
        <th style='background:#2C3E50 !important'>Email</th>
        <th style='background:#2C3E50 !important'>Objet</th>
        <th style='background:#2C3E50 !important'>Message</th>
        <th style='background:#2C3E50 !important'></th>
    </tr>
\t
\t";
        // line 16
        $context["i"] = 1;
        // line 17
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : $this->getContext($context, "contacts")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 18
            echo "   
    <tr>        
        <td >";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</td>
        <td >";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "name"), "html", null, true);
            echo "</td>
        <td> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "email"), "html", null, true);
            echo "</td>
         <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "sujet"), "html", null, true);
            echo "</td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "message"), "html", null, true);
            echo "</td>
        <td></td>
    </tr>
   
\t";
            // line 28
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 29
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "TeamBuilderCovoiturageBundle:Contact:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 30,  81 => 29,  79 => 28,  72 => 24,  68 => 23,  64 => 22,  60 => 21,  56 => 20,  52 => 18,  47 => 17,  45 => 16,  31 => 4,  28 => 3,);
    }
}
