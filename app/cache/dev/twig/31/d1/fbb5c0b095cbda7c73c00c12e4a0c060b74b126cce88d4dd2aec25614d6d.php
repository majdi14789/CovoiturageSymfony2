<?php

/* TestBundle::layout.html.twig */
class __TwigTemplate_31d1fbb5c0b095cbda7c73c00c12e4a0c060b74b126cce88d4dd2aec25614d6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Erasebody' => array($this, 'block_Erasebody'),
            'Erasefooter' => array($this, 'block_Erasefooter'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
\t<head
            
\t\t<title></title>
\t\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
\t\t</script>
\t\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
                
\t\t<!---script---->
                
\t\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.bxslider.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/styletab.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.bxslider.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\">
\t\t\t\tvar admin=false;
                                \$(document).ready(function(){
\t\t\t\t\t\$('.bxslider').bxSlider({
\t\t\t\t\t\t auto: true,
 \t\t\t\t\t\t autoControls: true,
\t\t\t\t\t\t minSlides: 4,
\t\t\t\t\t\t maxSlides: 4,
\t\t\t\t\t\t slideWidth:450,
\t\t\t\t\t\t slideMargin: 10
\t\t\t\t\t});
                                        
                                        if(admin==true){
                                        \$('#admin-panel').hide();
                                        \$('#onglet-admin').hide();
                                              }
\t\t\t\t});
\t\t\t</script>
\t\t<!---//script---->
\t\t<!---smoth-scrlling---->
\t\t\t<script type=\"text/javascript\">
\t\t\t\t\$(document).ready(function(){
\t\t\t\t\t\t\t\t\t\$('a[href^=\"#\"]').on('click',function (e) {
\t\t\t\t\t\t\t\t\t    e.preventDefault();
\t\t\t\t\t\t\t\t\t    var target = this.hash,
\t\t\t\t\t\t\t\t\t    \$target = \$(target);
\t\t\t\t\t\t\t\t\t    \$('html, body').stop().animate({
\t\t\t\t\t\t\t\t\t        'scrollTop': \$target.offset().top
\t\t\t\t\t\t\t\t\t    }, 1000, 'swing', function () {
\t\t\t\t\t\t\t\t\t        window.location.hash = target;
\t\t\t\t\t\t\t\t\t    });
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t});
\t\t\t\t</script>
\t\t<!---//smoth-scrlling---->
\t\t<!----start-top-nav-script---->
\t\t<script type=\"text/javascript\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/flexy-menu.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\">\$(document).ready(function(){\$(\".flexy-menu\").flexymenu({speed: 400,type: \"horizontal\",align: \"right\"});});</script>
\t\t<!----//End-top-nav-script---->
\t\t<!---webfonts---->
\t\t<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
\t\t<!---webfonts---->
\t\t<!--start slider -->
                
\t    <link rel=\"stylesheet\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fwslider.css"), "html", null, true);
        echo "\" media=\"all\">
            
\t\t<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/css3-mediaqueries.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fwslider.js"), "html", null, true);
        echo "\"></script>
\t\t<!--end slider -->
\t\t
                <!---calender-style---->
                <link rel=\"stylesheet\" href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" />
\t\t<!---//calender-style---->
\t</head>
\t<body>
\t\t<!----start-wrap---->
\t\t\t<!----start-top-header----->
\t\t\t<div class=\"top-header\" id=\"header\">
\t\t\t\t<div class=\"wrap\">
\t\t\t\t<div class=\"top-header-left\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
        // line 86
        if ((null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))) {
            // line 87
            echo "                                                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><span> </span>Login</a></li>
\t\t\t\t\t\t<li><p><span> </span>Pas Encore Membre ? </p>&nbsp;<a class=\"reg\" href=\"";
            // line 88
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\"> S'enregistrer</a></li>
\t\t\t\t\t\t";
        }
        // line 90
        echo "                                                <li>
                                                    <p class=\"contact-info\">
                                                        Telephone : +216 98 329 320 
                                                        ";
        // line 93
        if ((!(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")))) {
            // line 94
            echo "                                                         | Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo " |
                                                         <a href=\"";
            // line 95
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">déconnexion</a>
                                                        ";
        }
        // line 97
        echo "                                                    </p>
                                                </li>
\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"top-header-right\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a class=\"face\" href=\"http://www.facebook.com\"><span> </span></a></li>
\t\t\t\t\t\t<li><a class=\"twit\" href=\"http://www.twitter.com\"><span> </span></a></li>
\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"clear\"> </div>
\t\t\t</div>
\t\t\t</div>
\t\t\t<!----//End-top-header----->
\t\t\t<!---start-header---->
\t\t\t<div class=\"header\">
\t\t\t\t<div class=\"wrap\">
\t\t\t\t<!--- start-logo---->
\t\t\t\t<div class=\"logo\">
                                    <a href=\"";
        // line 118
        echo $this->env->getExtension('routing')->getPath("Home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" title=\"voyage\" /></a>
\t\t\t\t</div>
\t\t\t\t<!--- //End-logo---->
\t\t\t\t<!--- start-top-nav---->
\t\t\t\t<div class=\"top-nav\">
\t\t\t\t\t\t<ul class=\"flexy-menu thick orange\">
                                                        ";
        // line 127
        echo "\t\t\t\t\t\t\t";
        if ((!(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")))) {
            // line 128
            echo "                                                        
                                                        <li><a href=\"";
            // line 129
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Profil</a></li>
                                                         <li><a href=\"";
            // line 130
            echo $this->env->getExtension('routing')->getPath("team_builder_covoiturage_ajoutertrajet");
            echo "\">Publier trajet</a></li>
                                                   \t<li><a href=\"";
            // line 131
            echo $this->env->getExtension('routing')->getPath("afficheTrajet");
            echo "\">Trouver un trajet</a></li>
\t\t\t\t\t\t\t
                                                         <li><a href=\"#\">Trajets/Reservations</a>
                                                         <ul>
\t\t\t\t\t\t\t  <li><a href=\"#\">Trajets</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 137
            echo $this->env->getExtension('routing')->getPath("team_builder_covoiturage_mesroutes");
            echo "\">Mes Trajets courants</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 138
            echo $this->env->getExtension('routing')->getPath("team_builder_covoiturage_archiveroutes");
            echo "\">Anciens Trajets</a>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Reservations</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 143
            echo $this->env->getExtension('routing')->getPath("afficheReservationCourrantes");
            echo "\">Mes Rerservations courantes</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 144
            echo $this->env->getExtension('routing')->getPath("AfficheReservationsAnciennes");
            echo "\">Anciennes Reservation</a>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
                                                        </li>
                                                        ";
            // line 149
            if (((!(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))) && $this->env->getExtension('security')->isGranted("ROLE_ADHERANT"))) {
                // line 150
                echo "                                                         <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("team_builder_covoiturage_contact");
                echo "\">Contact</a></li>
                                                                                                                  ";
            }
            // line 152
            echo "
                                                        ";
        }
        // line 154
        echo "                                                        
\t\t\t\t\t\t           ";
        // line 155
        if (((!(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))) && $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 156
            echo "\t\t\t\t\t\t\t <li><a href=\"http://127.0.0.1/voyage/web/app_dev.php/home#admin-panel\">Admin</a></li>
                                                         ";
        }
        // line 158
        echo "
                                                
                                                </ul>
\t\t\t\t\t\t
                                    
                                            <div class=\"search-box\">
\t\t\t\t\t\t\t<div id=\"sb-search\" class=\"sb-search\">
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<input class=\"sb-search-input\" placeholder=\"Entrer ce que vous chercher...\" type=\"search\" name=\"search\" id=\"search\">
\t\t\t\t\t\t\t\t\t<input class=\"sb-search-submit\" type=\"submit\" value=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"sb-icon-search\"> </span>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!----search-scripts---->
                                                
\t\t\t\t\t\t<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/uisearch.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\tnew UISearch( document.getElementById( 'sb-search' ) );
\t\t\t\t\t\t</script>
\t\t\t\t\t\t<!----//search-scripts---->
\t\t\t\t</div>
\t\t\t\t<!--- //End-top-nav---->
\t\t\t\t<div class=\"clear\"> </div>
\t\t\t</div>
\t\t\t<!---//End-header---->
\t\t</div>
\t\t
                        
                        
<div>       
";
        // line 191
        $this->displayBlock('Erasebody', $context, $blocks);
        // line 649
        echo "</div>            
                
        \t\t<!----// END Container Body ---->
        ";
        // line 652
        $this->displayBlock('Erasefooter', $context, $blocks);
        // line 708
        echo "    
        
        </body>
</html>

";
    }

    // line 191
    public function block_Erasebody($context, array $blocks = array())
    {
        echo " 
                        
                 <!----start-images-slider---->
\t\t<div class=\"images-slider\">
\t\t\t<!-- start slider -->
\t\t    <div id=\"fwslider\">
\t\t        <div class=\"slider_container\">
\t\t            <div class=\"slide\"> 
\t\t                <!-- Slide image -->
                                <img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider-bg.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t                <!-- /Slide image -->
\t\t                <!-- Texts container -->
\t\t                <div class=\"slide_content\">
\t\t                    <div class=\"slide_content_wrap\">
\t\t                        <!-- Text title -->
\t\t                        <h4 class=\"title\">Votre Destination... à portée de main</h4>
\t\t                        <!-- /Text title -->
\t\t                        <!-- Text description -->
\t\t                        <p class=\"description\">Si Vous êtes ici ... C'est que Vous faites le bon choix</p>
\t\t                        <!-- /Text description -->
\t\t                        <div class=\"slide-btns description\">
\t\t                        \t<ul>
\t\t                        \t\t<li><a class=\"mapbtn\" href=\"#reservation\">Reserver Maintenant </a></li>
\t\t                        \t\t<li><a class=\"minfo\" href=\"";
        // line 214
        echo $this->env->getExtension('routing')->getPath("faq_list_for_adh");
        echo "\">Comment ca se passe ?</a></li>
\t\t                        \t\t<div class=\"clear\"> </div>
\t\t                        \t</ul>
\t\t                        </div>
\t\t                    </div>
\t\t                </div>
\t\t                 <!-- /Texts container -->
\t\t            </div>
\t\t            <!-- /Duplicate to create more slides -->
\t\t            <div class=\"slide\">
                                <img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider-bg.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t                <div class=\"slide_content\">
\t\t                     <div class=\"slide_content_wrap\">
\t\t                        <!-- Text title -->
\t\t                        <h4 class=\"title\">Faites en Partie ... Publiez Votre Annonce</h4>
\t\t                        <!-- /Text title -->
\t\t                        <!-- Text description -->
\t\t                        <p class=\"description\"></p>
\t\t                        <!-- /Text description -->
\t\t                        <div class=\"slide-btns description\">
\t\t                        \t<ul>
\t\t                        \t\t<li><a class=\"mapbtn\" href=\"#\">Publier Une Annonce </a></li>
\t\t                        \t\t\t<div class=\"clear\"> </div>
\t\t                        \t</ul>
\t\t                        </div>
\t\t                    </div>
\t\t                </div>
\t\t            </div>
                            
                            
                            
                            <div class=\"slide\">
                                <img src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider-bg.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t                <div class=\"slide_content\">
\t\t                     <div class=\"slide_content_wrap\">
\t\t                        <!-- Text title -->
\t\t                        <h4 class=\"title\">Une Demande?... Une Reclamation?</h4>
\t\t                        <!-- /Text title -->
\t\t                        <!-- Text description -->
\t\t                        <p class=\"description\">Tous vos Feedback sont les Bienvenus</p>
\t\t                        <!-- /Text description -->
\t\t                        <div class=\"slide-btns description\">
\t\t                        \t<ul>
\t\t                        \t\t<li><a class=\"mapbtn\" href=\"";
        // line 257
        echo $this->env->getExtension('routing')->getPath("team_builder_covoiturage_contact");
        echo "\">Contacter Nous !</a></li>
\t\t                        \t\t<div class=\"clear\"> </div>
\t\t                        \t</ul>
\t\t                        </div>
\t\t                    </div>
\t\t                </div>
\t\t            </div>
                            
                            
                            
                            
                            
\t\t            <!--/slide -->
\t\t        </div>
\t\t        <div class=\"timers\"> </div>
\t\t        <div class=\"slidePrev\"><span> </span></div>
\t\t        <div class=\"slideNext\"><span> </span></div>
\t\t    </div>
\t\t    <!--/slider -->
\t\t</div>
\t\t<!----start-find-place---->
\t\t<div class=\"find-place\">
\t\t\t<div class=\"wrap\">
\t\t\t\t<div class=\"p-h\">
\t\t\t\t\t<span>Trouvez</span>
\t\t\t\t\t<label>Votre Trajet</label>
\t\t\t\t</div>
\t\t\t\t<!---strat-date-piker---->
\t\t\t\t  <script src=\"http://code.jquery.com/ui/1.9.2/jquery-ui.js\"></script>
\t\t\t\t
                                  
                                  
                                  
                                  
                                  
<script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.10.4.custom.min.js"), "html", null, true);
        echo "\"></script>
                     
<link href=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui-1.10.4.custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
                    
               <link href=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" title='numberOne'>

                                  
                                  <script>
\t\t\t\t  \$(function() {
\t\t\t\t    \$( \"#datepicker\" ).datepicker({
                                   dateFormat : 'yy-'+'mm'+'-dd',
\t                            minDate : 0,  
                                    });
\t\t\t\t  });
                                  
                                  
                                 var availableTags = [\"Ariana\",\"Tunis\",\"Sfax\",\"Grombalia\",\"Nabeul\",\"Sousse\",\"Gafsa\",\"Gabes\",\"Hammam-lif\",\"Monastir\",\"Douz\",\"Tabarka\",\"Beja\"];

    \$(function(\$) {
\t\t
\t\t\$( \"#villedepart1\" ).autocomplete({
\t\t\tsource: availableTags
\t\t});
\t\t

\t\t
// Hover states on the static widgets
\t\t\$( \"#dialog-link, #icons li\" ).hover(
\t\t\tfunction(\$) {
\t\t\t\t\$( this ).addClass( \"ui-state-hover\" );
\t\t\t},
\t\t\tfunction(\$) {
\t\t\t\t\$( this ).removeClass( \"ui-state-hover\" );
\t\t\t}
\t\t);
\t});
\t\t
                
                
                                         \$(function(\$) {
      
              \t\t\$( \"#villedestination1\" ).autocomplete({
\t\t\tsource: availableTags
\t\t});
\t\t

\t\t
// Hover states on the static widgets
\t\t\$( \"#dialog-link, #icons li\" ).hover(
\t\t\tfunction(\$) {
\t\t\t\t\$( this ).addClass( \"ui-state-hover\" );
\t\t\t},
\t\t\tfunction(\$) {
\t\t\t\t\$( this ).removeClass( \"ui-state-hover\" );
\t\t\t}
\t\t);
\t});
                
                 
                                  
                                  
                                  
\t\t\t\t  </script>
\t\t\t\t<!---/End-date-piker---->
\t\t\t\t<div class=\"p-ww\" id='reservation'>
\t\t\t\t\t<form action=";
        // line 357
        echo $this->env->getExtension('routing')->getPath("afficheTrajet");
        echo ">
\t\t\t\t\t\t<span> Depart :</span>
\t\t\t\t\t\t<input id='villedepart1' class=\"dest\" type=\"text\" value=\"Ville Depart\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Distination';}\">
                                                
                                                <span> Destination :</span>
\t\t\t\t\t\t<input id='villedestination1'class=\"dest\" type=\"text\" value=\"Ville Arrivee\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Distination';}\">
                                               
                                                <span>Date :</span>
\t\t\t\t\t\t<input class=\"date\" id=\"datepicker\" type=\"text\" value=\"Select date\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Select date';}\">
\t\t\t\t\t\t<input type=\"submit\" value=\"Rechercher\" />
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"clear\"> </div>
\t\t\t</div>
\t\t</div>
\t\t<!----//End-find-place---->
\t\t<!----start-offers---->
\t\t<div class=\"offers\">
\t\t\t<div class=\"offers-head\">
\t\t\t\t<h3>Top Destinations de Trajets</h3>
\t\t\t\t<p></p>
\t\t\t</div>
\t\t\t<!-- start content_slider -->
\t\t\t<!-- FlexSlider -->
\t\t\t <!-- jQuery -->
                         <link rel=\"stylesheet\" href=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/flexslider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
\t\t\t  <!-- FlexSlider -->
                          
\t\t\t  <script defer src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
\t\t\t  <script type=\"text/javascript\">
\t\t\t    \$(function(){
\t\t\t      SyntaxHighlighter.all();
\t\t\t    });
\t\t\t    \$(window).load(function(){
\t\t\t      \$('.flexslider').flexslider({
\t\t\t        animation: \"slide\",
\t\t\t        animationLoop: true,
\t\t\t        itemWidth:250,
\t\t\t        itemMargin: 5,
\t\t\t        start: function(slider){
\t\t\t          \$('body').removeClass('loading');
\t\t\t        }
\t\t\t      });
\t\t\t    });
\t\t\t  </script>
\t\t\t<!-- Place somewhere in the <body> of your page -->
\t\t\t\t <section class=\"slider\">
              <!-- //End content_slider -->
              
              
              <!-- start content_slider -->
\t\t\t<!-- FlexSlider -->
\t\t\t <!-- jQuery -->
                         <link rel=\"stylesheet\" href=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/flexslider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
\t\t\t  <!-- FlexSlider -->
                          
\t\t\t  <script defer src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
\t\t\t  <script type=\"text/javascript\">
\t\t\t    \$(function(){
\t\t\t      SyntaxHighlighter.all();
\t\t\t    });
\t\t\t    \$(window).load(function(){
\t\t\t      \$('.flexslider').flexslider({
\t\t\t        animation: \"slide\",
\t\t\t        animationLoop: true,
\t\t\t        itemWidth:250,
\t\t\t        itemMargin: 5,
\t\t\t        start: function(slider){
\t\t\t          \$('body').removeClass('loading');
\t\t\t        }
\t\t\t      });
\t\t\t    });
\t\t\t  </script>
\t\t\t<!-- Place somewhere in the <body> of your page -->
\t\t\t\t <section class=\"slider\">
\t\t        <div class=\"flexslider carousel\">
\t\t          <ul class=\"slides\">
\t\t            
                          
                          
                          
                          <li onclick=\"location.href=";
        // line 438
        echo $this->env->getExtension('routing')->getPath("Reclamation_liste");
        echo "\">
\t\t  \t    \t    <img src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/hammamet.jpg"), "html", null, true);
        echo "\"  height=\"200px\" width=\"200px\"/>
\t\t  \t    \t    <!----place-caption-info---->
\t\t  \t    \t    <div class=\"caption-info\">
\t\t  \t    \t    \t <div class=\"caption-info-head\">
\t\t  \t    \t    \t \t<div class=\"caption-info-head-left\">
\t\t\t  \t    \t    \t \t<h4><a href=\"";
        // line 444
        echo $this->env->getExtension('routing')->getPath("AfficheTrajetBydepart");
        echo "\">Hammamet</a></h4>
\t\t\t  \t    \t    \t \t<span>  voir Trajets</span>

\t\t  \t    \t    \t \t</div>
\t\t  \t    \t    \t \t<div class=\"caption-info-head-right\">
\t\t  \t    \t <span> </span>
                                         \t</div>
\t\t  \t    \t    \t \t<div class=\"clear\"> </div>
\t\t  \t    \t    \t </div>
\t\t  \t    \t    </div>
\t\t  \t    \t     <!----//place-caption-info---->
\t\t  \t    \t\t</li>
\t\t  \t    
                                        
                                         <li onclick=\"location.href='#';\">
\t\t  \t    \t    <img src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/nabeul.jpg"), "html", null, true);
        echo "\" height=\"200px\" width=\"200px\"  />
\t\t  \t    \t    <!----place-caption-info---->
\t\t  \t    \t    <div class=\"caption-info\">
\t\t  \t    \t    \t <div class=\"caption-info-head\">
\t\t  \t    \t    \t \t<div class=\"caption-info-head-left\">
\t\t\t  \t    \t    \t \t<h4><a href=\"";
        // line 464
        echo $this->env->getExtension('routing')->getPath("AfficheTrajetBydepart");
        echo "\">Nabeul</a></h4>
                                                    <span>  voir Trajets</span>
\t\t  \t    \t    \t
                                                </div>
\t\t  \t    \t    \t \t<div class=\"caption-info-head-right\">
\t\t  \t    \t    \t \t\t<span> </span>
\t\t  \t    \t    \t \t</div>
\t\t  \t    \t    \t \t<div class=\"clear\"> </div>
\t\t  \t    \t    \t </div>
\t\t  \t    \t    </div>
\t\t  \t    \t     <!----//place-caption-info---->
\t\t  \t    \t\t</li>
\t\t  \t    
                                        
                                         <li onclick=\"location.href='#';\">
\t\t  \t    \t    <img src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/sfax.jpg"), "html", null, true);
        echo "\" height=\"200px\" width=\"200px\"  />
\t\t  \t    \t    <!----place-caption-info---->
\t\t  \t    \t    <div class=\"caption-info\">
\t\t  \t    \t    \t <div class=\"caption-info-head\">
\t\t  \t    \t    \t \t<div class=\"caption-info-head-left\">
\t\t\t  \t    \t    \t \t<h4><a href=\"";
        // line 484
        echo $this->env->getExtension('routing')->getPath("AfficheTrajetBydepart");
        echo "\">Sfax</a></h4>
\t\t  \t    \t    \t \t<span>  voir Trajets</span>

                                                </div>
\t\t  \t    \t    \t \t<div class=\"caption-info-head-right\">
\t\t  \t    \t    \t \t\t<span> </span>
\t\t  \t    \t    \t \t</div>
\t\t  \t    \t    \t \t<div class=\"clear\"> </div>
\t\t  \t    \t    \t </div>
\t\t  \t    \t    </div>
\t\t  \t    \t     <!----//place-caption-info---->
\t\t  \t    \t\t</li>
\t\t  \t    
                                        
                                   <li onclick=\"location.href='#';\">
\t\t  \t    \t    <img src=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/sousse.jpg"), "html", null, true);
        echo "\" height=\"200px\" width=\"200px\" />
\t\t  \t    \t    <!----place-caption-info---->
\t\t  \t    \t    <div class=\"caption-info\">
\t\t  \t    \t    \t <div class=\"caption-info-head\">
\t\t  \t    \t    \t \t<div class=\"caption-info-head-left\">
\t\t\t  \t    \t    \t \t<h4><a href=\"";
        // line 504
        echo $this->env->getExtension('routing')->getPath("AfficheTrajetBydepart");
        echo "\">Sousse</a></h4>
\t\t  \t    \t    \t \t<span>voir Trajets</span>
                                                </div>
\t\t  \t    \t    \t \t<div class=\"caption-info-head-right\">
\t\t  \t    \t    \t \t\t<span> </span>
\t\t  \t    \t    \t \t</div>
\t\t  \t    \t    \t \t<div class=\"clear\"> </div>
\t\t  \t    \t    \t </div>
\t\t  \t    \t    </div>
\t\t  \t    \t     <!----//place-caption-info---->
\t\t  \t    \t\t</li>
\t\t  \t     <li onclick=\"location.href='#';\">
\t\t  \t    \t    <img src=\"";
        // line 516
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/tunis.jpg"), "html", null, true);
        echo "\" height=\"200px\" width=\"200px\" />
\t\t  \t    \t    <!----place-caption-info---->
\t\t  \t    \t    <div class=\"caption-info\">
\t\t  \t    \t    \t <div class=\"caption-info-head\">
\t\t  \t    \t    \t \t<div class=\"caption-info-head-left\">
\t\t\t  \t    \t    \t \t<h4><a href=\"#\">Tunis</a></h4>
\t\t  \t    \t    \t \t<span>  voir Trajets</span>

                                                
                                                </div>
\t\t  \t    \t    \t \t<div class=\"caption-info-head-right\">
\t\t  \t    \t    \t \t\t<span> </span>
\t\t  \t    \t    \t \t</div>
\t\t  \t    \t    \t \t<div class=\"clear\"> </div>
\t\t  \t    \t    \t </div>
\t\t  \t    \t    </div>
\t\t  \t    \t     <!----//place-caption-info---->
\t\t  \t    \t\t</li>
\t\t  \t          
                                        
                          
                          
                          </ul>
\t\t        </div>
\t\t      </section>
              <!-- //End content_slider -->
              
              
\t\t</div>
\t\t<!----//End-offers---->
                ";
        // line 546
        if (((!(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))) && $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 547
            echo "                ";
            // line 551
            echo "\t\t<!---start-holiday-types---->
\t\t\t<div class=\"holiday-types\" id=\"admin-panel\">
\t\t\t\t<div class=\"wrap\">
\t\t\t\t\t<div class=\"holiday-type-head\">
\t\t\t\t\t\t<h3>Panneau D'administration</h3>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t</div>
                                    
                                    
\t\t\t\t\t<div class=\"holiday-type-grids\">
\t\t\t\t\t
                                            
                                               <div class=\"holiday-type-grid\" onclick=\"location.href='#';\">
\t\t\t\t\t\t\t<img>
                                                              <a href=\"#\"></a>
\t\t\t\t\t\t</div>
                                            
\t\t\t\t   <div class=\"holiday-type-grid\" onclick=\"location.href=";
            // line 568
            echo $this->env->getExtension('routing')->getPath("Reclamation_liste");
            echo "\">
\t\t\t\t\t\t\t<img  src=\"";
            // line 569
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/arrow.png"), "html", null, true);
            echo "\">
                                                              <a href=\"";
            // line 570
            echo $this->env->getExtension('routing')->getPath("Reclamation_liste");
            echo "\">Reclamation</a>
\t\t\t\t\t\t</div>
                                            
\t\t\t\t\t\t<div class=\"holiday-type-grid\" onclick=\"location.href=";
            // line 573
            echo $this->env->getExtension('routing')->getPath("stat_list");
            echo "\">
\t\t\t\t\t\t <img  src='";
            // line 574
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/arrow.png"), "html", null, true);
            echo "' >
\t\t\t\t\t\t  <a href=\"";
            // line 575
            echo $this->env->getExtension('routing')->getPath("stat_list");
            echo "\">
\t\t\t\t\t\t  Statistique
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t</div>
                                         
                                            \t<div class=\"holiday-type-grid\" onclick=\"location.href='#';\">
\t\t\t\t\t\t\t<img  src='";
            // line 581
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/arrow.png"), "html", null, true);
            echo "' onclick=\"location.href='#';\">
                                                              <a href=\"";
            // line 582
            echo $this->env->getExtension('routing')->getPath("faq_list");
            echo "\">   FAQ    </a>
\t\t\t\t\t\t</div>
                                         \t<div class=\"holiday-type-grid\" onclick=\"location.href='#';\">
\t\t\t\t\t\t\t<img  src='";
            // line 585
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/arrow.png"), "html", null, true);
            echo "' onclick=\"location.href='#';\">
                                                              <a href=\"";
            // line 586
            echo $this->env->getExtension('routing')->getPath("team_builder_covoiturage_notifier");
            echo "\">Prevention Conducteur</a>
\t\t\t\t\t\t</div>
                                         \t<div class=\"holiday-type-grid\" onclick=\"location.href='#';\">
\t\t\t\t\t\t\t<img  src='";
            // line 589
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/arrow.png"), "html", null, true);
            echo "' onclick=\"location.href='#';\">
                                                              <a href=\"";
            // line 590
            echo $this->env->getExtension('routing')->getPath("contact");
            echo "\">Contact Admin</a>
\t\t\t\t\t\t</div>
                                            
                                            
                                            
                                            
\t\t\t\t\t</div>
\t\t\t\t                                        
                                            
                                </div>
                         </div>
                            
                           
                            

                  
                            
                <!---//End-holiday-types---->
                ";
        }
        // line 609
        echo "\t\t<!----//End-images-slider---->
\t\t<!----start-clients---->
\t\t<div class=\"clients\">
\t\t\t<div class=\"client-head\">
\t\t\t\t<h3>Covoiturage Tunisie</h3>
\t\t\t\t<span>Nous en quelques Mots </span>
\t\t\t</div>
\t\t\t<div class=\"client-grids\">
\t\t\t\t<ul class=\"bxslider\">
\t\t\t\t  <li>
\t\t\t\t      <a href=\"#\">Pratique</a>
                                      <p>Pour le week-end ou les vacances :Trouvez votre conducteur en quelques clics.</p>
\t\t\t\t      <label> </label>
\t\t\t\t  </li>
\t\t\t\t  <li>
                                        <a href=\"#\">Economique</a>
\t\t\t\t  \t<p>Voyager à petits prix en Tunisie et bientot dans toute l'Afrique.</p>
\t\t\t\t  \t<label> </label>
\t\t\t\t  </li>
\t\t\t\t  <li>
                                       <a href=\"#\">Fiable</a>
\t\t\t\t  \t<p>Grace à la reservation,conducteurs et passagers s'engagent à effectuer le trajet ensemble.</p>
\t\t\t\t  \t
\t\t\t\t  \t<label> </label>
\t\t\t\t  </li>
\t\t\t\t  <li>
                                        <a href=\"#\">Ecologique</a>
\t\t\t\t  \t<p>Avec le covoiturage,         </p>
                                        <p>je protege ma planete.       </p>
\t\t\t\t  \t
\t\t\t\t  \t<label> </label>
\t\t\t\t  </li>
\t\t\t\t  
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<!----//End-clients---->
\t\t
                
    
";
    }

    // line 652
    public function block_Erasefooter($context, array $blocks = array())
    {
        // line 653
        echo "          <!----start-footer---->
\t\t<div class=\"footer\">
\t\t\t<div class=\"wrap\">
\t\t\t<div class=\"footer-grids\">
\t\t\t
\t\t\t
\t\t\t\t<div class=\"footer-grid tags\">
\t\t\t\t\t<h3>Tags</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Agent login</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Pas Encore Membre?</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Contact</a></li>
                                                <li><a href=\"#\">Trajets</a></li>
                                                <li><a href=\"#\">Reserver</a></li>
                                                
\t\t\t\t\t\t\t
                                                <div class=\"clear\"> </div>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-grid address\">
\t\t\t\t\t<h3>Addresse </h3>
\t\t\t\t\t<div class=\"address-info\">
\t\t\t\t\t\t<span>Z.I. Chotrana II - B.P. 160 - </span>
\t\t\t\t\t\t<span>2083 Pôle Technologique - El Ghazala</span><br>
\t\t\t\t\t\t<span><i>E-mail:</i><a href=\"mailto:Teambuilder@gmail.com\">Teambuilder@gmail.com</a></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"footer-social-icons\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a class=\"face1 simptip-position-bottom simptip-movable\" data-tooltip=\"facebook\" href=\"http://www.facebook.com\"><span> </span></a></li>
\t\t\t\t\t\t\t<li><a class=\"twit1 simptip-position-bottom simptip-movable\" data-tooltip=\"twitter\" href=\"http://www.twitter.com\"><span> </span></a></li>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"clear\"> </div>
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!----//End-footer---->
\t\t<!---start-subfooter---->
\t\t<div class=\"subfooter\">
\t\t\t<div class=\"wrap\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"\">Home</a><span>::</span></li>
\t\t\t\t\t<li><a href=\"\">Destinations</a><span>::</span></li>
\t\t\t\t\t<li><a href=\"\">Contact</a></li>
\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t</ul>
\t\t\t\t<p class=\"copy-right\">Template by <a href=\"http://w3layouts.com/\">W3layouts</a></p>
\t\t\t\t<a class=\"to-top\" href=\"#header\"><span> </span> </a>
\t\t\t</div>
\t\t</div>
\t\t<!---//End-subfooter---->
\t\t<!----//End-wrap---->

        ";
    }

    public function getTemplateName()
    {
        return "TestBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  908 => 653,  905 => 652,  861 => 609,  839 => 590,  835 => 589,  829 => 586,  825 => 585,  819 => 582,  815 => 581,  806 => 575,  802 => 574,  798 => 573,  792 => 570,  788 => 569,  784 => 568,  765 => 551,  763 => 547,  761 => 546,  728 => 516,  713 => 504,  705 => 499,  687 => 484,  679 => 479,  661 => 464,  653 => 459,  635 => 444,  627 => 439,  623 => 438,  595 => 413,  589 => 410,  561 => 385,  555 => 382,  527 => 357,  463 => 296,  458 => 294,  453 => 292,  415 => 257,  401 => 246,  376 => 224,  363 => 214,  346 => 200,  333 => 191,  324 => 708,  322 => 652,  317 => 649,  315 => 191,  297 => 176,  293 => 175,  289 => 174,  271 => 158,  267 => 156,  265 => 155,  262 => 154,  258 => 152,  252 => 150,  250 => 149,  242 => 144,  238 => 143,  230 => 138,  226 => 137,  217 => 131,  213 => 130,  209 => 129,  206 => 128,  192 => 118,  169 => 97,  164 => 95,  159 => 94,  157 => 93,  152 => 90,  147 => 88,  142 => 87,  140 => 86,  127 => 76,  120 => 72,  116 => 71,  112 => 70,  107 => 68,  96 => 60,  56 => 23,  52 => 22,  48 => 21,  41 => 17,  34 => 13,  21 => 2,  228 => 151,  225 => 150,  216 => 143,  203 => 127,  195 => 131,  191 => 130,  187 => 129,  183 => 128,  179 => 127,  175 => 126,  170 => 123,  167 => 122,  163 => 121,  131 => 92,  65 => 29,  60 => 27,  55 => 25,  32 => 4,  29 => 3,);
    }
}
