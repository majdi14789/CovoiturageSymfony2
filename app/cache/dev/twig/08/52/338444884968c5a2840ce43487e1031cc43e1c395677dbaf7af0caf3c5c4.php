<?php

/* TestBundle:Home:afficheReservationCourrantes.html.twig */
class __TwigTemplate_0852338444884968c5a2840ce43487e1031cc43e1c395677dbaf7af0caf3c5c4 extends Twig_Template
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

    // line 4
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 5
        echo "
<table align=\"center\" width=\"98%\" class=\"styleTable\">
    <tr>
        
         
        <th style='background:#2C3E50 !important'><div class=\"p-ww\">Ville de depart</div></th>
<th style='background:#2C3E50 !important'><span>Ville de arivee</span></th>
        <th style='background:#2C3E50 !important'>le jour</th>
        <th style='background:#2C3E50 !important'>Heure</th>
        <th style='background:#2C3E50 !important'>Nbr Placest</th>
       
        <th style='background:#2C3E50 !important'></th>
        
    </tr>
";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) ? $context["reservations"] : $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            // line 20
            echo "   
    <tr>
        
        
        <td >";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "villeDepart"), "html", null, true);
            echo "</td>
        <td> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "villeArrivee"), "html", null, true);
            echo "</td>
         <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "date"), "d-m-Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "heure"), "html", null, true);
            echo "</td>
        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "places"), "html", null, true);
            echo "</td>
       <td>
 
            
         <a href = \" ";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AfficheDetailsReservationsCourrantes", array("idReservation" => $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "idReservation"), "idTrajet" => $this->getAttribute($this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "idTrajet"), "idTrajet"))), "html", null, true);
            echo " \"> Consulter </a>   
        </td> 
        
        
      
    </tr>
   
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
</table>
";
    }

    // line 43
    public function block_Erasefooter($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TestBundle:Home:afficheReservationCourrantes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 43,  95 => 40,  81 => 32,  74 => 28,  70 => 27,  66 => 26,  62 => 25,  58 => 24,  52 => 20,  48 => 19,  32 => 5,  29 => 4,);
    }
}
