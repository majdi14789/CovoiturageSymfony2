<?php

/* TestBundle:Home:AfficheDetailReservationsCourrantes.html.twig */
class __TwigTemplate_87c5cec8c71f477ab16543f8365ff9dee21ca0b63f4639a334cacae276ad24e9 extends Twig_Template
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

    // line 8
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 9
        echo " <style>
      #map-canvas {
        margin-left : 20px;
        height: 430px;
        width: 600px;
       
      }

    </style> 
    <input id=\"villeDepart\" type=\"text\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["villeDepart"]) ? $context["villeDepart"] : $this->getContext($context, "villeDepart")), "html", null, true);
        echo "\" style=\"visibility: hidden\" >   
    <input id=\"villeArrivee\" type=\"text\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["villeArrivee"]) ? $context["villeArrivee"] : $this->getContext($context, "villeArrivee")), "html", null, true);
        echo "\" style=\"visibility: hidden\"> 
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>                   
    
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDLz0GRExK6FU1yf48yMStyc0sc426rbEA&sensor=false\"></script>
  <script>

//var ville1
//var ville2

//ville1='Ariana';
//Ville2='Tunis';


var ville1 = document.getElementById('villeDepart').value+',Tunisia';
var ville2 = document.getElementById('villeArrivee').value+',Tunisia';



var neighborhoods = [];

// le path*******************************************************************
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();


//var myLatlng1 = 'TUNIS,Tunisia';
//var myLatlng1 = 'Grombalia,Tunisia';

//Geocode ********************************************
var geocoder;  // y7ot Marker a partir men esm lemdina 


//*********************************************************************
var markers = [];
var iterator = 0;

var map;


function initialize() {
//pour le path
\t  directionsDisplay = new google.maps.DirectionsRenderer();
  
// geo code pour les villes
  geocoder = new google.maps.Geocoder();

  //var myLatlng1 = new google.maps.LatLng(36.806495,10.181532);
  //var myLatlng2 = new google.maps.LatLng(36.600000,10.500000);
  var centre_map = new google.maps.LatLng(0,0)

  var mapOptions = {
    zoom: 8,
    //center: myLatlng1
  }

//**************OPTIONS DE LA MAP *********************************************
   map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
// pour le Path
  directionsDisplay.setMap(map);
  //le panel de route
  directionsDisplay.setPanel(document.getElementById('directions-panel'));
//**************************************************************************************************


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
      
      //changer l icone de ma postion
      //icon : 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png',

//icon:'https://cdn1.iconfinder.com/data/icons/glyph_set/128/location.png',
//Position actuel
icon :'http://www.googlemapsmarkers.com/v1/P/0099FF/FFFFFF/FF0000/',
/*
      icon: {
      path: google.maps.SymbolPath.BACKWARD_CLOSED_ARROW,
      scale: 5
    },

   */ 
      map: map,
      title: 'Ma Position'
  });



      map.setCenter(pos);
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    // Browser doesn't support Geolocation
    handleNoGeolocation(false);
  }

codeAddress(ville1,0);
codeAddress(ville2,1);

// appel a la fonction calcroute bech tsawwer el PATH 
//calcRoute();

}

//Path ************************

function calcRoute() {
 var start = neighborhoods[0];
 var end = neighborhoods[1];




  var request = {
    origin:start,
    destination:end,
    travelMode: google.maps.TravelMode.DRIVING
  };
  directionsService.route(request, function(result, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(result);
    }
  });
}


//**********************************************************************************************************
//**********************************************************************************************************
//**********************************************************************************************************
// Fonction tres importaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaante 
// getting location depuis le nom de la ville 

function codeAddress(ville,i) {
  var address = ville;

  //alert(address);
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
    \t//alert('rani okkkk');
      map.setCenter(results[0].geometry.location);
     \t// afficher the location (both)
     \t//alert(results[0].geometry.location);
     \t// only the latitude
        //alert(results[0].geometry.location.lat());
     \t// only the longitude
     \t//alert(results[0].geometry.location.lng());

      
      
   neighborhoods[i]= new google.maps.LatLng(results[0].geometry.location.lat(),results[0].geometry.location.lng());

     
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
    
    
     if (i==1){
        calcRoute();  
      }
  });


}
//**********************************************************************************************************
//**********************************************************************************************************
//**********************************************************************************************************



//*******************************************************************************

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
  

  

  
<script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/styletabed.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1332079-8']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<body id=\"bd\">
     <div id=\"wrapper\" width=\"100%\" height=\"350px\">
        <div style=\"float:left\" width=\"100%\">
            <div style=\"float:left\">
  <div id=\"tabContainer\" width=\"100%\" >
    <div class=\"tabs\">
      <ul>
        <li id=\"tabHeader_1\">Information sur le trajet</li>
        <li id=\"tabHeader_2\">Information sur le conducteur</li>

      </ul>
    </div>
    <div class=\"tabscontent\">
      <div class=\"tabpage\" id=\"tabpage_1\" style=\"display: block; height: 340px;\">

       
";
        // line 268
        echo "
<table class=\"styleTable\" >
              <tr><th>Ville de depart :</th><td>";
        // line 270
        echo twig_escape_filter($this->env, (isset($context["villeDepart"]) ? $context["villeDepart"] : $this->getContext($context, "villeDepart")), "html", null, true);
        echo "</td></tr>
              <tr><th>Ville darrivee</th><td> ";
        // line 271
        echo twig_escape_filter($this->env, (isset($context["villeArrivee"]) ? $context["villeArrivee"] : $this->getContext($context, "villeArrivee")), "html", null, true);
        echo "</td></tr>
              <tr><th>Date</th><td>";
        // line 272
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["trajet"]) ? $context["trajet"] : $this->getContext($context, "trajet")), "jours"), "Y-m-d"), "html", null, true);
        echo " </td></tr>
              <tr><th>Heure</th><td>";
        // line 273
        echo twig_escape_filter($this->env, (isset($context["heure"]) ? $context["heure"] : $this->getContext($context, "heure")), "html", null, true);
        echo "</td></tr>
              <tr><th>Nbr places</th><td>";
        // line 274
        echo twig_escape_filter($this->env, (isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")), "html", null, true);
        echo "</td></tr>
          </table>

";
        // line 278
        echo "
      </div>
      <div class=\"tabpage\" id=\"tabpage_2\" style=\"display: block; height: 340px; \">
          ";
        // line 281
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adherent"]) ? $context["adherent"] : $this->getContext($context, "adherent")));
        foreach ($context['_seq'] as $context["_key"] => $context["cond"]) {
            // line 282
            echo " Son prenom:     ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cond"]) ? $context["cond"] : $this->getContext($context, "cond")), "prenom"), "html", null, true);
            echo " <br>
     Son nom:     ";
            // line 283
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cond"]) ? $context["cond"] : $this->getContext($context, "cond")), "nom"), "html", null, true);
            echo "<br>
     Son telephone :     ";
            // line 284
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cond"]) ? $context["cond"] : $this->getContext($context, "cond")), "telephone"), "html", null, true);
            echo "<br>
     Son Mail:   ";
            // line 285
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cond"]) ? $context["cond"] : $this->getContext($context, "cond")), "adressemail"), "html", null, true);
            echo "<br>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cond'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
        echo "          
      
      <table class=\"styleTable\" >
              <tr><th>Prenom</th><td>";
        // line 292
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["trajet"]) ? $context["trajet"] : $this->getContext($context, "trajet")), "idConducteur"), "prenom"), "html", null, true);
        echo "</td></tr>
              <tr><th>Nom</th><td>";
        // line 293
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["trajet"]) ? $context["trajet"] : $this->getContext($context, "trajet")), "idConducteur"), "nom"), "html", null, true);
        echo "</td></tr>
              <tr><th>Telephone</th><td> ";
        // line 294
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["trajet"]) ? $context["trajet"] : $this->getContext($context, "trajet")), "idConducteur"), "telephone"), "html", null, true);
        echo "</td></tr>
              <tr><th>E-mail</th><td>";
        // line 295
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["trajet"]) ? $context["trajet"] : $this->getContext($context, "trajet")), "idConducteur"), "email"), "html", null, true);
        echo "</td></tr>
          </table>
      </div>
      
        
         
      
        
    </div>
  </div> 
                
                 <form method=\"get\" action=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteReservation", array("idReservation" => (isset($context["idReservation"]) ? $context["idReservation"] : $this->getContext($context, "idReservation")), "idTrajet" => (isset($context["idTrajet"]) ? $context["idTrajet"] : $this->getContext($context, "idTrajet")))), "html", null, true);
        echo " \">
       <table border=\"0\">
           <tr>
               <td>
                   <input class= \"sub\" type=\"submit\" value=\"Annuler Trajett\"> </td>
               <td>
                   <input class= \"sub\" type=\"button\" value=\"Retour\"> </td>
       </table>
       
  </form> 
    
            </div>
            <div style=\"float:left\">
            <div id=\"map-canvas\">
                   
              
          </div> 
            </div>
     </div>
     </div>

        
</body>

";
    }

    // line 332
    public function block_Erasefooter($context, array $blocks = array())
    {
        // line 333
        echo "    ";
    }

    public function getTemplateName()
    {
        return "TestBundle:Home:AfficheDetailReservationsCourrantes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 333,  419 => 332,  390 => 306,  376 => 295,  372 => 294,  368 => 293,  364 => 292,  359 => 289,  349 => 285,  345 => 284,  341 => 283,  336 => 282,  332 => 281,  327 => 278,  321 => 274,  317 => 273,  313 => 272,  309 => 271,  305 => 270,  301 => 268,  268 => 237,  47 => 19,  43 => 18,  32 => 9,  29 => 8,);
    }
}
