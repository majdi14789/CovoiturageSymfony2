<?php

/* TeamBuilderCovoiturageBundle:Default:ajoutertrajet.html.twig */
class __TwigTemplate_7cbceaedc1a3a3ee1fc110b1a8bd5767d9a55b440774e92c2ef4e2e5c618dbe7 extends Twig_Template
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

    // line 4
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 5
        echo "
<div style='width: 100%;height:100%'>
    
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>

<script>
\$(function(\$) {
\t\$( \"#teambuilder_covoituragebundle_trajet_jours\" ).datepicker({
\t\tdateFormat : 'yy-'+'mm'+'-dd',
\t\tminDate : 0,  
\t});
});
</script>
                
                
        
<style>
    #teambuilder_covoituragebundle_trajet_jours {
background: url(../images/cal-icon.png) no-repeat 100% 50% #FFF;
}
</style> 







<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.10.4.custom.min.js"), "html", null, true);
        echo "\"></script>
                     
<link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui-1.10.4.custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
                    
               <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" title='numberOne'>


                     
                     
                <script>
                             
        var availableTags = [\"Ariana\",\"Tunis\",\"Sfax\",\"Grombalia\",\"Nabeul\",\"Sousse\",\"Gafsa\",\"Gabes\",\"Hammam-lif\",\"Monastir\",\"Douz\",\"Tabarka\",\"Beja\"];

    \$(function(\$) {
\t\t
\t\t\$( \"#teambuilder_covoituragebundle_trajet_villeDepart\" ).autocomplete({
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
      
              \t\t\$( \"#teambuilder_covoituragebundle_trajet_villeArrivee\" ).autocomplete({
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
                
                
      
                                  </script>
                    
     <style>
 .combo{
    
padding: 12px 10px;
width: 32%;
font-family: 'Open Sans', sans-serif;
margin: 12px 0;
border: 1px solid rgba(192, 192, 192, 0.61);
color: #626262;
background: #FFF;
float: left;
outline: none;
font-size: 0.85em;
transition: border-color 0.3s;
-o-transition: border-color 0.3s;
-ms-transition: border-color 0.3s;
-moz-transition: border-color 0.3s;
-webkit-transition: border-color 0.3s;
box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.05);
-webkit-box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.05);
-moz-box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.05);
-o-box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.05);
border-radius: 4px;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-o-border-radius: 4px;
}
                  
  .number{
    
padding: 12px 10px;
width: 30%;
font-family: 'Open Sans', sans-serif;
margin: 12px 0;
border: 1px solid rgba(192, 192, 192, 0.61);
color: #626262;
background: #FFF;
float: left;
outline: none;
font-size: 0.85em;
transition: border-color 0.3s;
-o-transition: border-color 0.3s;
-ms-transition: border-color 0.3s;
-moz-transition: border-color 0.3s;
-webkit-transition: border-color 0.3s;
box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.05);
-webkit-box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.05);
-moz-box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.05);
-o-box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.05);
border-radius: 4px;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-o-border-radius: 4px;
}
             



.text2 textarea {
float:left;
height: 270px;
//position:absolute;
//top:0px;
//left:0px;
}
    


              
              </style>
          
              
           
              
              <style>
                #fwslider{
                 width:50%;  
                }
                
                
#fwslider .slide_content {
top: 0;
left: 200px;
position: absolute;
width: 100%;
height: 100%;
min-height: 650px;




.client-head h3 {
color: red; 
text-transform: uppercase;
font-weight: 600;
font-size: 1.8em;
}

                </style>
              
               
    
     
     <br>
     <br>
     <br>

     
              
<div class=\"contact-form\">               
<div class=\"contact\">
 <div class=\"wrap\">

\t
  ";
        // line 206
        echo "        


                   <!-- ************AAAAAAAAAAAAAAAAAAAAAAAAAAAAA************** -->
    
                
<div id=\"fwslider\" style=\"height:500px; width: 50%; display:inline;\">

    
    
    <form method=\"POST\" action=\"";
        // line 216
        echo $this->env->getExtension('routing')->getPath("team_builder_covoiturage_ajoutertrajet");
        echo "\">

    
    
    
   <div class=\"slider_container\">

       <!-- *********************************** -->
         <div class=\"slide\"> 
\t\t                <!-- Slide image -->
                                <img height ='600px'  src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider-bg.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t                <!-- /Slide image -->
\t\t                <!-- Texts container -->
\t\t                <div class=\"slide_content\">
\t\t                    <div class=\"slide_content_wrap\" align='center'>
\t\t                        
                                        
 <div class=\"contact-form\">
 <div class='client-head'>
 <h3 align='left' style=\"color:#1DD2AF !important\">Ville Depart :<h3>
 </div>
 <div class=\"contact-to\">

";
        // line 239
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_ajouter"]) ? $context["form_ajouter"] : $this->getContext($context, "form_ajouter")), "villeDepart"), 'widget', array("attr" => array("value" => "Depart...", "class" => "dest", "onfocus" => "if (this.value=='Depart...') this.value = ''", "onblur" => "if (this.value=='') this.value = 'Depart...'")));
        echo "
          
</div> 
            
   </div>    
            
            
            
     \t\t\t\t                <div class=\"clear\"></div>
              
 <div class=\"contact-form\">
     <div class='client-head'>
     <h3 align='left' style=\"color:#1DD2AF !important\">Ville Destination :<h3>
     </div>
 <div class=\"contact-to\">

";
        // line 255
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_ajouter"]) ? $context["form_ajouter"] : $this->getContext($context, "form_ajouter")), "villeArrivee"), 'widget', array("attr" => array("value" => "Destination ...", "class" => "dest", "onfocus" => "if (this.value=='Destination ...') this.value = ''", "onblur" => "if (this.value=='') this.value = 'Destination ...'")));
        echo "
          
</div> 
            
   </div>         
            
            
            
     \t\t\t\t                <div class=\"clear\"></div>
                                                
                                                
                                                
<div class=\"contact-form\">
     <div class='client-head'>
     <h3 align='left' style=\"color:#1DD2AF !important\">Date Depart :<h3>
             </div>
 <div class=\"contact-to\">
";
        // line 272
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_ajouter"]) ? $context["form_ajouter"] : $this->getContext($context, "form_ajouter")), "jours"), 'widget', array("attr" => array("value" => "Date Depart ...", "class" => "date", "onfocus" => "if (this.value=='Date Depart ...') this.value = ''", "onblur" => "if (this.value=='') this.value = 'Date Depart ...'")));
        echo "
";
        // line 274
        echo "        
</div> 
            
   </div>         
            
    
                                                <div class=\"clear\"></div>

              
 <div class=\"contact-form\">
     <div class='client-head'>
     <h3 align='left' style=\"color:#1DD2AF !important\">Heure Depart :<h3>
     </div>
 <div class=\"contact-to\">

";
        // line 289
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_ajouter"]) ? $context["form_ajouter"] : $this->getContext($context, "form_ajouter")), "heure"), 'widget', array("attr" => array("value" => "Heure Depart ...", "class" => "text", "onfocus" => "if (this.value=='Heure Depart ...') this.value = ''", "onblur" => "if (this.value=='') this.value = 'Heure Depart ...'")));
        echo "
          
</div> 
            
   </div>         
            
            
            
     \t\t\t\t                <div class=\"clear\"></div>
              

\t\t                    </div>
\t\t                </div>
\t\t                 <!-- /Texts container -->
\t\t            </div>
\t\t            
                     <!-- *********************************** -->
          
                     <div class=\"slide\"> 
\t\t                <!-- Slide image -->
                                <img height ='600px'  src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider-bg.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t                <!-- /Slide image -->
\t\t                <!-- Texts container -->
\t\t                <div class=\"slide_content\">
\t\t                    <div class=\"slide_content_wrap\" align=\"center\">
\t\t                        
                                        
                                        <div class=\"contact-form\">
  <div class='client-head'>
  <h3 align='left' style=\"color:#1DD2AF !important\">Frequence Trajet:<h3>
 </div>
 <div class=\"contact-to\">

";
        // line 322
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_ajouter"]) ? $context["form_ajouter"] : $this->getContext($context, "form_ajouter")), "frequence"), 'widget', array("attr" => array("value" => "Ville Depart ...", "class" => "combo", "onfocus" => "if (this.value=='Ville Depart ...') this.value = ''", "onblur" => "if (this.value=='') this.value = 'Ville Depart ...'")));
        echo "
          
</div> 
            
   </div>         
            
            
            
     \t\t\t\t                <div class=\"clear\"></div>
              
 <div class=\"contact-form\">
     <div class='client-head'>
     <h3 align='left' style=\"color:#1DD2AF !important\">Type Trajet :<h3>
     </div>
 <div class=\"contact-to\">

";
        // line 338
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_ajouter"]) ? $context["form_ajouter"] : $this->getContext($context, "form_ajouter")), "typeTrajet"), 'widget', array("attr" => array("value" => "Ville Depart ...", "class" => "combo", "onfocus" => "if (this.value=='Ville Depart ...') this.value = ''", "onblur" => "if (this.value=='') this.value = 'Ville Depart ...'")));
        echo "
          
</div> 
            
   </div>         
            
            
            
     \t\t\t\t                <div class=\"clear\"></div>
              
 <div class=\"contact-form\">
     <div class='client-head'>
     <h3 align='left' style=\"color:#1DD2AF !important\">Type Bagages :<h3>
     </div>
 <div class=\"contact-to\">

";
        // line 354
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_ajouter"]) ? $context["form_ajouter"] : $this->getContext($context, "form_ajouter")), "bagages"), 'widget', array("attr" => array("value" => "Ville Depart ...", "class" => "combo", "onfocus" => "if (this.value=='Ville Depart ...') this.value = ''", "onblur" => "if (this.value=='') this.value = 'Ville Depart ...'")));
        echo "
          
</div> 
            
   </div>         
            
            

                                        

\t\t                    </div>
\t\t                </div>
\t\t                 <!-- /Texts container -->
\t\t            </div>
\t\t            
                     
                     
      <!-- *********************************** -->

                            
                            <div class=\"slide\"> 
\t\t                <!-- Slide image -->
                                <img height ='600px'  src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider-bg.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t                <!-- /Slide image -->
\t\t                <!-- Texts container -->
\t\t                <div class=\"slide_content\">
\t\t                    <div class=\"slide_content_wrap\" align=\"center\">
\t\t                        
                                        
                                                                                        
                            
<div class=\"contact-form\">
 <div class='client-head'>
 <h3 align='left' style=\"color:#1DD2AF !important\">Kilometrage Estime :<h3>
 </div>
 <div class=\"contact-to\">

";
        // line 391
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_ajouter"]) ? $context["form_ajouter"] : $this->getContext($context, "form_ajouter")), "kilometrage"), 'widget', array("attr" => array("value" => "00", "class" => "number", "onfocus" => "if (this.value=='00') this.value = ''", "onblur" => "if (this.value=='') this.value = '00'")));
        echo "
          
</div> 
            
   </div>         
\t\t                <div class=\"clear\"></div>
      
                                
                                
 <div class=\"contact-form\">
 <div class='client-head'>
 <h3 align='left' style=\"color:#1DD2AF !important\">Places Libres : <h3>
 </div>
 <div class=\"contact-to\">

";
        // line 406
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_ajouter"]) ? $context["form_ajouter"] : $this->getContext($context, "form_ajouter")), "places"), 'widget', array("attr" => array("value" => "00", "class" => "number", "onfocus" => "if (this.value=='00') this.value = ''", "onblur" => "if (this.value=='') this.value = '00'")));
        echo "
          
</div> 
            
   </div>         
\t\t                <div class=\"clear\"></div>
          
 <div class=\"contact-form\">
 <div class='client-head'>
 <h3 align='left' style=\"color:#1DD2AF !important\">Prix Par Personne: <h3>
 </div>
 <div class=\"contact-to\">

";
        // line 419
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_ajouter"]) ? $context["form_ajouter"] : $this->getContext($context, "form_ajouter")), "prix"), 'widget', array("attr" => array("value" => "00", "class" => "number", "onfocus" => "if (this.value=='00') this.value = ''", "onblur" => "if (this.value=='') this.value = '00'")));
        echo "
          
</div> 
            
   </div>         
\t\t                <div class=\"clear\"></div>                           
                                                
  
                                       

\t\t                    </div>
\t\t                </div>
\t\t                 <!-- /Texts container -->
\t\t            </div>
\t\t            
                            
       <!-- *********************************** -->
                        
                            
                     
      <!-- *********************************** -->

                            
                            <div class=\"slide\"> 
\t\t                <!-- Slide image -->
                                <img height ='600px'  src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider-bg.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t                <!-- /Slide image -->
\t\t                <!-- Texts container -->
\t\t                <div class=\"slide_content\">
\t\t                    <div class=\"slide_content_wrap\" align=\"left\">
\t\t                        
                                        
                           
 <div class=\"contact-form\">
 <div class='client-head'>
 <h3 align='left' style=\"color:#1DD2AF !important\">Commentaire : <h3>
 </div>
 <div class=\"contact-to\">

 <div class=\"text2\"  style='float:left !important ;width: 50% ; height:40% !important '>

";
        // line 460
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_ajouter"]) ? $context["form_ajouter"] : $this->getContext($context, "form_ajouter")), "commentaire"), 'widget', array("attr" => array("class" => "textarea", "value" => "Ajouter Un commentaire Pour Les Passagers", "onfocus" => "if (this.value=='Ajouter Un commentaire Pour Les Passagers') this.value = ''", "onblur" => "if (this.value=='') this.value = 'Ajouter Un commentaire Pour Les Passagers'")));
        echo "
        
    </div>
</div> 
            
   </div>         
\t\t               
  
                                       

\t\t                    </div>
\t\t                </div>
\t\t                 <!-- /Texts container -->
\t\t            </div>
       
       
                           <div class=\"slide\"> 
\t\t                <!-- Slide image -->
                                <img height ='600px'  src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider-bg.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t                <!-- /Slide image -->
\t\t                <!-- Texts container -->
\t\t                <div class=\"slide_content\">
\t\t                    <div class=\"slide_content_wrap\" align=\"center\">
\t\t                        
                                        
                                
                                                
 <div class=\"contact-form\">
 <div class='client-head'>
 <h3 align='left' style=\"color:#1DD2AF !important\">Immatriculation: <h3>
 </div>
 <div class=\"contact-to\">
<input id='immatriculation1' name='immatriculation1' type=\"text\" value='4 Chiffres' style=\" width:80px !important\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = '4 Chiffres';}\">  <input id='immatriculation2'name='immatriculation2' type=\"text\"  value='3 Chiffres'style=\" width:70px !important\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = '3 Chiffres';}\">
     </div> 
            
   </div>         

             
\t\t                <div class=\"clear\"></div>          
                                          
                                
                                
                                                
                                                
 <div class=\"contact-form\">
 <div class='client-head'>
 <h3 align='left' style=\"color:#1DD2AF !important\">Marque: <h3>
 </div>
 <div class=\"contact-to\">

     <input type ='text' name='marque' id='marque'>           
</div> 
            
   </div>         
\t\t                <div class=\"clear\"></div>          
                              
                                
                                                             
                                                
                                                <div class=\"contact-form\">
 <div class='client-head'>
 <h3 align='left' style=\"color:#1DD2AF !important\">Model: <h3>
 </div>
 <div class=\"contact-to\">

     <input type ='text' name='model' id='model'>           
</div> 
            
   </div>         
\t\t                <div class=\"clear\"></div>          

                                                
                                                <div class=\"contact-form\">
 <div class='client-head'>
 <h3 align='left' style=\"color:#1DD2AF !important\">Carburant: <h3>
 </div>
 <div class=\"contact-to\">

     <input type ='text' name='carburant' id='carburant'>           
</div> 
            
   </div>         
                               
                                
                   
                                      
\t\t                    </div>
\t\t                </div>
\t\t                 <!-- /Texts container -->
\t\t            </div>
\t\t             
   <!-- *********************************** -->

    
     <!-- *********************************** -->
                          
                            
           <!-- *********************************** -->
                    
                            
\t\t            <!--/slide -->
\t\t        </div>
\t\t        <div class=\"slidePrev\"><span> </span></div>
\t\t        <div class=\"slideNext\"><span> </span></div>
                        
                       

      
</div>
             
    <div style='background-color:red;float:right !important ;width: 48%'>
                  
    <style>
      #map-canvas {
        height: 600px;
        margin: 0px;
        padding: 0px
      }

    </style>      
                        
                        
                        
    
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDLz0GRExK6FU1yf48yMStyc0sc426rbEA&sensor=false\"></script>
    
<script>


\$(document).ready( function() {
    \$('#teambuilder_covoituragebundle_trajet_villeDepart').change(function() {
        // to get the selected value
var ville1 = document.getElementById('teambuilder_covoituragebundle_trajet_villeDepart').value+',Tunisia';
alert(ville1);
codeAddress(ville1,0);
        
        // do your magic pony stuff
    });
});


\$(document).ready( function() {
    \$('#teambuilder_covoituragebundle_trajet_villeArrivee').change(function() {
        // to get the selected value
var ville2 = document.getElementById('teambuilder_covoituragebundle_trajet_villeArrivee').value+',Tunisia';
alert(ville2);
codeAddress(ville2,1);



        // do your magic pony stuff
    });
});




var neighborhoods = [
//new google.maps.LatLng(36.806495,10.181532),
//new google.maps.LatLng(36.600000,10.500000)
];

var markers = [];
var iterator = 0;


function drop() {
  alert('drop tnezlet');
  for (var i = 0; i < neighborhoods.length; i++) {
  alert(neighborhoods[i]);
  
    setTimeout(function() {
      addMarker();
    }, i * 200);
  }
}

function addMarker() {
  markers.push(new google.maps.Marker({
    position: neighborhoods[iterator],
    map: map,
    draggable: false,
    animation: google.maps.Animation.DROP
  }));
  iterator++; 
}






// le path*******************************************************************
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();

//var myLatlng1 = new google.maps.LatLng(36.806495,10.181532);
//var myLatlng2 = new google.maps.LatLng(36.600000,10.500000);

var myLatlng1;
var myLatlng2;


//var myLatlng1 = 'TUNIS,Tunisia';
//var myLatlng1 = 'Grombalia,Tunisia';

var initiate = new google.maps.LatLng(0,0);


//Geocode ********************************************
var geocoder;  // y7ot Marker a partir men esm lemdina 


//*********************************************************************
var map;


function initialize() {
//pour le path
directionsDisplay = new google.maps.DirectionsRenderer();
  
// geo code pour les villes
  geocoder = new google.maps.Geocoder();

  //var myLatlng1 = new google.maps.LatLng(36.806495,10.181532);
  //var myLatlng2 = new google.maps.LatLng(36.600000,10.500000);
  
  
  
  
  var myLatlng1; // a affecter---> 
  var myLatlng2;  // a affecter
  var centre_map = new google.maps.LatLng(0,0);


var mapOptions = {
    zoom: 10,
    center: centre_map
  };




//**************OPTIONS DE LA MAP *********************************************
   map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
// pour le Path
  directionsDisplay.setMap(map);
  //le panel de route
  directionsDisplay.setPanel(document.getElementById('directions-panel'));
//**************************************************************************************************
  

  var marker = new google.maps.Marker({
      position: myLatlng1,
      map: map,
      title: 'Depart'
  });


var marker2 = new google.maps.Marker({
      position: myLatlng2,
      map: map,
      title: 'Destination'
  });


// GPS **************************************************************

  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = new google.maps.LatLng(position.coords.latitude,
                                       position.coords.longitude);


/*
      var infowindow = new google.maps.InfoWindow({
        map: map,
        position: pos,
        content: 'Location found using HTML5.'
      });
*/
 
var myPosition = new google.maps.Marker({
 position: pos,
      
icon :'http://www.googlemapsmarkers.com/v1/P/0099FF/FFFFFF/FF0000/',
animation: google.maps.Animation.BOUNCE,
      map: map,
      title: 'Ma Position'
  });






        // Positionner la map sur Ma position Actuel
        map.setCenter(pos);
        
        
        
        
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    // Browser doesn't support Geolocation
    handleNoGeolocation(false);
  }


// appel a la fonction calcroute bech tsawwer el PATH 
//------------------------------------------------------------>calcRoute();

} // Fin INIIIIIIIIIIIIIIIIIIIIIIIIIIIIITIAAAAAAAAAAATE -----> 

//Path ************************

function calcRoute(ville1,ville2) {
 var start = ville1;
 var end = ville2;

  //var start = myLatlng1;
  //var end = myLatlng2;


  var request = {
    origin:start,
    destination:end,
    travelMode: google.maps.TravelMode.DRIVING
  };
  directionsService.route(request, function(result, status) {
    if (status === google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(result);
    }
  });
}


//**********************************************************************************************************
//**********************************************************************************************************
//**********************************************************************************************************
// Fonction tres importaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaante 
// getting location depuis le nom de la ville 

function codeAddress(address,i) {
  //var address = document.getElementById(Ville).value+',Tunisia';
  alert(address);
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status === google.maps.GeocoderStatus.OK) {
    \talert('rani okkkk');
      map.setCenter(results[0].geometry.location);
     \t// afficher the location (both)
     \talert(results[0].geometry.location);
     \t// only the latitude
        alert(results[0].geometry.location.lat());
     \t// only the longitude
     \talert(results[0].geometry.location.lng());


neighborhoods[i]= new google.maps.LatLng(results[0].geometry.location.lat(),results[0].geometry.location.lng());
 
 drop();
 
 
        
     } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
    
    
    if(i===1){
     
     calcRoute(neighborhoods[0],neighborhoods[1]);
 }
    
    
  });
}
//**********************************************************************************************************
//**********************************************************************************************************
//**********************************************************************************************************

// geo localisation



function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } else {
    var content = 'Error: Your browser doesn\\'t support geolocation.';
  }

  var options = {
    map: map,
    position: new google.maps.LatLng(60, 105),
    content: content
  };

  var infowindow = new google.maps.InfoWindow(options);
  map.setCenter(options.position);
}


//**********************************************************************
google.maps.event.addDomListener(window, 'load', initialize);
//**************************************************************
    </script>
  


    
        
        <div id=\"map-canvas\"></div>
    
    
    
    
    
    </div>        

<span><input type=\"submit\" class=\"\" value=\"Publier Mon Trajet\" align='center'></span>
\t\t\t\t                <div class=\"clear\"></div>

                   
                   <br>
                   <br>
                   <br>
                            

       
     
    </div> 
     </div>
</div>



                                                
</form>
</div>

";
    }

    public function getTemplateName()
    {
        return "TeamBuilderCovoiturageBundle:Default:ajoutertrajet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  567 => 478,  546 => 460,  527 => 444,  499 => 419,  483 => 406,  465 => 391,  447 => 376,  422 => 354,  403 => 338,  384 => 322,  368 => 309,  345 => 289,  328 => 274,  324 => 272,  304 => 255,  285 => 239,  269 => 226,  256 => 216,  244 => 206,  74 => 37,  69 => 35,  64 => 33,  36 => 8,  31 => 5,  28 => 4,);
    }
}
