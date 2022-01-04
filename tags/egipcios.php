<?php
include ("../ls/livesearch.class.php");
  $LiveSearch = new LiveSearch();
  $add2style = "code,pre {display:block;color:#088A08;margin:10px;overflow:auto;}
      h4 {margin: 15px 0;}
      .table.table-width-auto {width:auto;}
      .text-right,td.text-right {text-align: right}";
  $thisPage = "Deuses";
  include("../includes/header.php"); 
  
?>

<!DOCTYPE html>
<html>
<body><meta name="viewport" content="width=device-width, initial-scale=1">
 <script type="text/javascript" src="../js/jquery.min.js"></script>
 <script type="text/javascript" src="../js/jquery.maphilight.min.js"></script>
   <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="../css/bootstrap-responsive.min.css" type="text/css" />
    <link rel="stylesheet" href="../ls/livesearch.css" type="text/css" />

    <script type="text/javascript" src="../js/jquery.1.9.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../assets/plugins/elegant_font/css/style.css">
 <link id="theme-style" rel="stylesheet" href="../assets/css/styles.css">
    <script type="text/javascript">
        $(function () {
            $('.map').maphilight();
        });
    </script>
    <script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}



</script>

<p>Clique na figura que representa a divindade</p>

<table border="1" cellspacing="1" cellpadding="1" >
<tr>

<img  src="../img/deusesegicios.jpg"  alt="Egipcios" usemap="#imagemap" class="map responsive" >

<map name="imagemap" style="width:100%">
    <area target="" onclick="flivroh('nun')" alt="nun" title="nun"  coords="404,504,556,771" shape="rect">
    <area target="" onclick="flivroh('apep')" alt="atep" title="atep"  coords="251,918,120" shape="circle">
    <area target="" onclick="flivroh('aten')" alt="aten" title="aten"  coords="202,1197,161" shape="circle">
    <area target="" onclick="flivroh('ra')" alt="ra" title="ra"  coords="357,1101,487,1372" shape="rect">
    <area target="" onclick="flivroh('atum')" alt="atum" title="atum"  coords="512,1049,642,1372" shape="rect">
    <area target="" onclick="flivroh('amon')" alt="amon" title="amon"  coords="783,1371,665,1007" shape="rect">
    <area target="" onclick="flivroh('mut')" alt="mut" title="mut"  coords="822,1078,926,1376" shape="rect">
    <area target="" onclick="flivroh('Hathor')" alt="Hathor" title="Hathor"  coords="29,1433,135,1724" shape="rect">
    <area target="" onclick="flivroh('Sekhmet')" alt="Sekhmet" title="Sekhmet"  coords="143,1472,295,1726" shape="rect">
    <area target="" onclick="flivroh('Bastet')" alt="Bastet" title="Bastet"  coords="310,1472,414,1724" shape="rect">
    <area target="" onclick="flivroh('Maat')" alt="Maat" title="Maat"  coords="428,1463,556,1728" shape="rect">
    <area target="" onclick="flivroh('Shu')" alt="Shu" title="Shu"  coords="571,1470,665,1724" shape="rect">
    <area target="" onclick="flivroh('Tefnut')" alt="Tefnut" title="Tefnut"  coords="677,1477,807,1723" shape="rect">
    <area target="" onclick="flivroh('Khonsu')" alt="Khonsu" title="Khonsu"  coords="820,1473,935,1721" shape="rect">
    <area target="" onclick="flivroh('Ptah')" alt="Ptah" title="Ptah"  coords="69,1876,202,2152" shape="rect">
    <area target="" onclick="flivroh('Reshep')" alt="Reshep" title="Reshep"  coords="354,1825,505,2147" shape="rect">
    <area target="" onclick="flivroh('Taweret')" alt="Taweret" title="Taweret"  coords="567,1861,749,2144" shape="rect">
    <area target="" onclick="flivroh('Bes')" alt="Bes" title="Bes"  coords="761,1952,924,2145" shape="rect">
    <area target="" onclick="flivroh('Imhotep')" alt="Imhotep" title="Imhotep"  coords="71,2246,204,2491" shape="rect">
    <area target="" onclick="flivroh('Nefertem')" alt="Nefertem" title="Nefertem"  coords="221,2487,379,2241" shape="rect">
    <area target="" onclick="flivroh('Geb')" alt="Geb" title="Geb"  coords="413,2235,551,2511" shape="rect">
    <area target="" onclick="flivroh('Nut')" alt="Nut" title="Nut"  coords="561,2231,711,2504" shape="rect">
    <area target="" onclick="flivroh('Isis')" alt="Isis" title="Isis"  coords="205,2614,350,2933" shape="rect">
    <area target="" onclick="flivroh('Osiris')" alt="Osíris" title="Osíris"  coords="357,2598,456,2930" shape="rect">
    <area target="" onclick="flivroh('Horus')" alt="Horus" title="Horus"  coords="133,3031,276,3365" shape="rect">
    <area target="" onclick="flivroh('Anubis')" alt="Anubis" title="Anubis"  coords="312,3087,455,3358" shape="rect">
    <area target="" onclick="flivroh('Thoth')" alt="Thoth" title="Thoth"  coords="185,3472,345,3750" shape="rect">
    <area target="" onclick="flivroh('nefertem')" alt="nefthy" title="nefthy"  coords="465,2659,567,2922" shape="rect">
    <area target="" onclick="flivroh('seth')" alt="set" title="set"  coords="589,2615,859,2950" shape="rect">
</map>
</tr>

</tbody>
</table>	

<br>
<br>
<br>
<br>

<div id="mdartigo" class="modal" style="display: none">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2 id="topo"></h2>
    </div>
    <div class="modal-body">
      <table id="art"></table>
    </div>
    <div class="modal-footer">
      <h3 id="topo"></h3>
    </div>
  </div>

</div>

<script>
// Get the modal

var mdgenesis = document.getElementById("mdartigo");

// Get the button that opens the modal
var btart1 = document.getElementById("bt1");
var btart1 = document.getElementById("bt2");

// Get the <span> element that closes the modal
var fecha = document.getElementsByClassName("close")[0];



// When the user clicks on <span> (x), close the modal
fecha.onclick = function() {
  mdartigo.style.display = "none";
  document.getElementById("art").innerHTML ='';
   document.getElementById("topo").innerHTML ='';
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == mdartigo) {
    mdartigo.style.display = "none";
	document.getElementById("art").innerHTML ='';
   document.getElementById("topo").innerHTML ='';
  }
}

function flivroh(xt) {
var nome= xt;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("art").innerHTML =
      this.responseText;
    }
	document.getElementById("topo").innerHTML =nome.charAt(0).toUpperCase()+ nome.slice(1);
	mdartigo.style.display = "block";
  }; 
  xhttp.open("GET", "../artigos/"+nome.charAt(0).toLowerCase()+ nome.slice(1)+".html", true);
  xhttp.send();
}



</script>
</body>
</html>
