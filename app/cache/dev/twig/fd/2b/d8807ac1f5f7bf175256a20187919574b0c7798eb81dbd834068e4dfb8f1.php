<?php

/* TeamBuilderCovoiturageBundle:Default:affichertrajet.html.twig */
class __TwigTemplate_fd2bd8807ac1f5f7bf175256a20187919574b0c7798eb81dbd834068e4dfb8f1 extends Twig_Template
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

    // line 6
    public function block_Erasebody($context, array $blocks = array())
    {
        echo " 
<style>
    .styleTable a:link {
\tcolor: #666;
\tfont-weight: bold;
\ttext-decoration:none;
}
.styleTable a:visited {
\tcolor: #999999;
\tfont-weight:bold;
\ttext-decoration:none;
}
.styleTable a:active,
.styleTable a:hover {
\tcolor: #bd5a35;
\ttext-decoration:underline;
}
.styleTable {
\tfont-family:Arial, Helvetica, sans-serif;
\tcolor:#666;
\tfont-size:15px;
\ttext-shadow: 1px 1px 0px #fff;
\tbackground:#eaebec;
\tmargin:20px;
\tborder:#ccc 1px solid;

\t-moz-border-radius:3px;
\t-webkit-border-radius:3px;
\tborder-radius:3px;

\t-moz-box-shadow: 0 1px 2px #d1d1d1;
\t-webkit-box-shadow: 0 1px 2px #d1d1d1;
\tbox-shadow: 0 1px 2px #d1d1d1;
        //ziyedaaa
       //    table-layout:fixed;

}
.styleTable th {
\t
    /*
    padding:21px 25px 22px 25px;
\tborder-top:1px solid #fafafa;
\tborder-bottom:1px solid #e0e0e0;

\tbackground: #ededed;
\tbackground: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
\tbackground: -moz-linear-gradient(top,  #ededed,  #ebebeb);
*/



padding: 21px 25px 22px 25px;
border-top: 1px solid #fafafa;
border-bottom: 1px solid #e0e0e0;
background: #2C3E50;
/* background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb)); */
background: -moz-linear-gradient(top, #ededed, #ebebeb);
        



}
.styleTable th:first-child {
\ttext-align: left;
\tpadding-left:20px;
}
.styleTable tr:first-child th:first-child {
\t-moz-border-radius-topleft:3px;
\t-webkit-border-top-left-radius:3px;
\tborder-top-left-radius:3px;
}
.styleTable tr:first-child th:last-child {
\t-moz-border-radius-topright:3px;
\t-webkit-border-top-right-radius:3px;
\tborder-top-right-radius:3px;
}
.styleTable tr {
\ttext-align: center;
\tpadding-left:20px;
}
.styleTable td:first-child {
\ttext-align: left;
\tpadding-left:20px;
\tborder-left: 0;
        
  
        
        
}
.styleTable td {
\tpadding:18px;
\tborder-top: 1px solid #ffffff;
\tborder-bottom:1px solid #e0e0e0;
\tborder-left: 1px solid #e0e0e0;

\tbackground: #fafafa;
\tbackground: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
\tbackground: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);

}
.styleTable tr.even td {
\tbackground: #f6f6f6;
\tbackground: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
\tbackground: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6);

       
}
.styleTable tr:last-child td {
\tborder-bottom:0;
        border-left: 1px solid #e0e0e0;
 

}
.styleTable tr:last-child td:first-child {
\t-moz-border-radius-bottomleft:3px;
\t-webkit-border-bottom-left-radius:3px;
\tborder-bottom-left-radius:3px;
}
.styleTable tr:last-child td:last-child {
\t-moz-border-radius-bottomright:3px;
\t-webkit-border-bottom-right-radius:3px;
\tborder-bottom-right-radius:3px;
}
.styleTable tr:hover td {
\tbackground: #f2f2f2;
\tbackground: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
\tbackground: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);\t
}
</style>

        
        <style>
        #map-canvas {
        height: 700px;
        margin: 0px;
        //margin: auto;
        
        padding: 0px;
        }

     

#directions-panel {
        height: 100%;
        float: left;
        width: 400px;
        height:700px;
        overflow: auto;
}
      
      
   
      
    </style>
        
    
    <style>
        
        #buttonRetour1 {
background: #2C3E50;
color: #FFF;
padding: .9em 3em;
display: inline-block;
text-transform: uppercase;
transition: 0.5s all;
-webkit-transition: 0.5s all;
-moz-transition: 0.5s all;
-o-transition: 0.5s all;
border-radius: 0.3em;
-webkit-border-radius: 0.3em;
-moz-border-radius: 0.3em;
-o-border-radius: 0.3em;
font-size: 0.875em;
border-top: none;
border-right: none;
border-left: none;
border-bottom: 4px solid #2A323A;
outline: none;
cursor: pointer;
font-family: 'Open Sans', sans-serif;
}
        </style>
    
    <br>
    <br>
    <br>
    
    
<table class='styleTable'>
    
    <tr>
    
    <th>Vos Donnees Du Trajet</th>
    <th> Votre Map Du Trajet</th>
    <th>Vos Indications Routiere</th>
          
    </tr>
    
    <tr>
      
        <td   height = '100px' style='width:30% !important; vertical-align:top !important'>
         
 <div height='100px'>

     
 <table class='styleTable'>
       <tr>
           <td>
Depart :  ";
        // line 214
        echo twig_escape_filter($this->env, (isset($context["ville1"]) ? $context["ville1"] : $this->getContext($context, "ville1")), "html", null, true);
        echo " <input type='text' id='villeDepart' value='";
        echo twig_escape_filter($this->env, (isset($context["ville1"]) ? $context["ville1"] : $this->getContext($context, "ville1")), "html", null, true);
        echo "' style='visibility:hidden' >
</tr>

       <tr>
           <td>
Destination :  ";
        // line 219
        echo twig_escape_filter($this->env, (isset($context["ville2"]) ? $context["ville2"] : $this->getContext($context, "ville2")), "html", null, true);
        echo " <input type='text' id='villeArrivee' value='";
        echo twig_escape_filter($this->env, (isset($context["ville2"]) ? $context["ville2"] : $this->getContext($context, "ville2")), "html", null, true);
        echo "' style='visibility:hidden'>
<tr>
           <td>
Frequence   :  ";
        // line 222
        echo twig_escape_filter($this->env, (isset($context["frequence"]) ? $context["frequence"] : $this->getContext($context, "frequence")), "html", null, true);
        echo " 
</tr>

<tr>
           <td>
Places Libres :   ";
        // line 227
        echo twig_escape_filter($this->env, (isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")), "html", null, true);
        echo " </td>
</tr>

<tr>
           <td>
Type Trajet  : ";
        // line 232
        echo twig_escape_filter($this->env, (isset($context["typeTrajet"]) ? $context["typeTrajet"] : $this->getContext($context, "typeTrajet")), "html", null, true);
        echo "  </td> 
</tr>

<tr>
           <td>
Prix / Personne :   ";
        // line 237
        echo twig_escape_filter($this->env, (isset($context["prix"]) ? $context["prix"] : $this->getContext($context, "prix")), "html", null, true);
        echo "   </td> 
</tr>

<tr>
           <td>
Heure Depart :   ";
        // line 242
        echo twig_escape_filter($this->env, (isset($context["heure"]) ? $context["heure"] : $this->getContext($context, "heure")), "html", null, true);
        echo "  </td> 
</tr>

<tr>
           <td>
Date Deaprt :   ";
        // line 247
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["jours"]) ? $context["jours"] : $this->getContext($context, "jours")), "d-m-Y"), "html", null, true);
        echo "  </td> 
</tr>

<tr>
           <td>
Distance Estimee:  ";
        // line 252
        echo twig_escape_filter($this->env, (isset($context["kilometrage"]) ? $context["kilometrage"] : $this->getContext($context, "kilometrage")), "html", null, true);
        echo "  </td>
</tr>

<tr>
           <td>
Type Bagages :  ";
        // line 257
        echo twig_escape_filter($this->env, (isset($context["bagages"]) ? $context["bagages"] : $this->getContext($context, "bagages")), "html", null, true);
        echo "  </td>
</tr>

   
   
   </table>

</div>
    </td>
    
    
<td  height = '100px'style='width:33% !important' align='center'>  
 <div id=\"map-canvas\"></div>   </td>
    
    
    <td  height = '100px' style='width:33% !important white-space: normal;' align='center'>     <div id=\"directions-panel\">YOUR ROUTE IS HERE </div></td>
        
    </tr>


</table>
    
    
    
    <form action=\"";
        // line 281
        echo $this->env->getExtension('routing')->getPath("team_builder_covoiturage_ajoutertrajet");
        echo "\">
        <span><input type=\"submit\" id=\"buttonRetour1\" value=\"RETOUR\" align='center'></span>
        </form>
    
    
    
    <script src=\"    https://maps.googleapis.com/maps/api/js?key=AIzaSyDLz0GRExK6FU1yf48yMStyc0sc426rbEA&sensor=false\"></script>
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

  alert(address);
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
    \talert('rani okkkk');
      map.setCenter(results[0].geometry.location);
     \t// afficher the location (both)
     \talert(results[0].geometry.location);
     \t// only the latitude
        alert(results[0].geometry.location.lat());
     \t// only the longitude
     \talert(results[0].geometry.location.lng());

      
      
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
    
    
    
<br>
<br>
<br>
<br>
<br>
<br>




<br>
<br>
<br>
<br>
<br>
<br>



";
    }

    public function getTemplateName()
    {
        return "TeamBuilderCovoiturageBundle:Default:affichertrajet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 281,  314 => 257,  306 => 252,  298 => 247,  290 => 242,  282 => 237,  274 => 232,  266 => 227,  258 => 222,  250 => 219,  240 => 214,  28 => 6,);
    }
}
