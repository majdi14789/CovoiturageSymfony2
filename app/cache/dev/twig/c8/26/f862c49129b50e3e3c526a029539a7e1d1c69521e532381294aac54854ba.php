<?php

/* TeamBuilderCovoiturageBundle:Default:contact.html.twig */
class __TwigTemplate_c826f862c49129b50e3e3c526a029539a7e1d1c69521e532381294aac54854ba extends Twig_Template
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
        echo " 
<!---start-contact---->
\t\t<div class=\"contact\">
\t\t\t
\t\t\t\t<div class=\"contact-info\">
\t\t\t\t\t<div class=\"map\">
                                                    
                                            
                                            <iframe width=\"100%\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Tunis+Tunisia&amp;aq=4&amp;oq=light&amp;sll=36.818810000000000000,10.165960000000041000&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=tunis+Tunisia&amp;t=m&amp;z=8&amp;ll=36.818810000000000000,10.165960000000041000&amp;output=embed\"></iframe>
                                            
\t\t\t\t\t </div>
\t\t\t\t\t <div class=\"wrap\">
\t\t\t\t\t <div class=\"contact-grids\">
\t\t\t\t\t\t\t <div class=\"col_1_of_bottom span_1_of_first1\">
\t\t\t\t\t\t\t\t    <h5>Addresse</h5>
\t\t\t\t\t\t\t\t    <ul class=\"list3\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/home.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"extra-wrap\">
\t\t\t\t\t\t\t\t\t\t\t <p>Z.I. Chotrana II - B.P. 160 - <br> 2083 Pôle Technologique - El Ghazala</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t<div class=\"col_1_of_bottom span_1_of_first1\">
\t\t\t\t\t\t\t\t    <h5>Telephones</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"list3\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t   <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/phone.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"extra-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t<p><span>Telephone:</span>+216 99 999 999</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/fax.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"extra-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t<p><span>FAX:</span>+216 999 999 99</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col_1_of_bottom span_1_of_first1\">
\t\t\t\t\t\t\t\t\t <h5>Email</h5>
\t\t\t\t\t\t\t\t    <ul class=\"list3\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/email.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"extra-wrap\">
\t\t\t\t\t\t\t\t\t\t\t  <p><span class=\"mail\"><a href=\"mailto:teambuilder@gmail.com\">teambuilder@gmail.com</a></span></p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t </div>
\t\t\t\t\t \t
                                             <form method=\"post\" action=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("team_builder_covoiturage_contact");
        echo "\">
\t\t\t\t\t          <div class=\"contact-form\">
\t\t\t\t\t\t\t\t<div class=\"contact-to\">
          ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_contact"]) ? $context["form_contact"] : $this->getContext($context, "form_contact")), "name"), 'widget', array("attr" => array("value" => "Nom...", "class" => "text", "onfocus" => "if (this.value=='Nom...') this.value = ''", "onblur" => "if (this.value=='') this.value = 'Nom...'")));
        echo "
          ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_contact"]) ? $context["form_contact"] : $this->getContext($context, "form_contact")), "email"), 'widget', array("attr" => array("value" => "Email...", "class" => "text", "onfocus" => "if (this.value=='Email...') this.value = ''", "onblur" => "if (this.value=='') this.value = 'Email...'")));
        echo "
          ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_contact"]) ? $context["form_contact"] : $this->getContext($context, "form_contact")), "sujet"), 'widget', array("attr" => array("value" => "Sujet...", "class" => "text", "onfocus" => "if (this.value=='Sujet...') this.value = ''", "onblur" => "if (this.value=='') this.value = 'Sujet...'")));
        echo "
   



\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"text2\">
\t\t\t\t                          ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_contact"]) ? $context["form_contact"] : $this->getContext($context, "form_contact")), "message"), 'widget', array("attr" => array("value" => "Message...", "class" => "text", "onfocus" => "if (this.value=='Message...') this.value = ''", "onblur" => "if (this.value=='') this.value = 'Message...'")));
        echo "

                                                                </div>
\t\t\t\t               <span><input type=\"submit\" class=\"\" value=\"Submit\"></span>
\t\t\t\t                <div class=\"clear\"></div>
\t\t\t\t               </div>
\t\t\t\t           </form>
\t\t\t\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!----//End-contact---->




";
    }

    public function getTemplateName()
    {
        return "TeamBuilderCovoiturageBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 70,  111 => 63,  107 => 62,  103 => 61,  97 => 58,  84 => 48,  70 => 37,  63 => 33,  49 => 22,  28 => 5,);
    }
}
