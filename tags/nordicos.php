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
<body>

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
    
 <p>Clique na figura que representa a divindade</p>

<table border="1" cellspacing="1" cellpadding="1" >
<tr>
<img src="../img/deusesnordicos.jpg" alt="deusesnordicos" usemap="#imagemap" class="map" >

<map name="imagemap" style="width:100%">
   <area target="" onclick="flivroh('Ymir')"alt="Ymir" title="Ymir"  coords="402,320,615,653" shape="rect">
    <area target="" onclick="flivroh('Farbauti')"alt="Fárbauti" title="Fárbauti"  coords="94,914,182,1207" shape="rect">
    <area target="" onclick="flivroh('Laufey')"alt="Laufey" title="Laufey"  coords="266,935,407,1226" shape="rect">
    <area target="" onclick="flivroh('Himinglaeva')"alt="Himinglaeva, Dufa, Blodughadda, Hefring, Udr, Hronn, Bylgja, Drofn e Kolga" title="Himinglaeva, Dufa, Blodughadda, Hefring, Udr, Hronn, Bylgja, Drofn e Kolga"  coords="399,1401,946,1701" shape="rect">
    <area target="" onclick="flivroh('Angrboda')"alt="Angrboda" title="Angrboda"  coords="49,1827,207,2113" shape="rect">
    <area target="" onclick="flivroh('Loki')"alt="Loki" title="Loki"  coords="300,1836,450,2125" shape="rect">
    <area target="" onclick="flivroh('cavalo')"alt="Um cavalo" title="Um cavalo"  coords="473,1856,712,2132" shape="rect">
    <area target="" onclick="flivroh('Heimdall')"alt="Heimdall" title="Heimdall"  coords="773,1869,928,2149" shape="rect">
    <area target="" onclick="flivroh('Fenrir')"alt="Fenrir" title="Fenrir"  coords="29,2383,163,2644" shape="rect">
    <area target="" onclick="flivroh('Jormungand')"alt="Jormungand" title="Jormungand"  coords="184,2356,419,2654" shape="rect">
    <area target="" onclick="flivroh('Hel')"alt="Hel" title="Hel"  coords="443,2354,556,2656" shape="rect">
    <area target="" onclick="flivroh('Sleipnir')"alt="Sleipnir" title="Sleipnir"  coords="569,2354,741,2657" shape="rect">
    <area target="" onclick="flivroh('angrboda')"alt="Audumbla" title="Audumbla"  coords="770,2366,951,2647" shape="rect">
    <area target="" onclick="flivroh('Tyr')"alt="Tyr" title="Tyr"  coords="30,2809,167,3089" shape="rect">
    <area target="" onclick="flivroh('Mimir')"alt="Mimir" title="Mimir"  coords="216,2787,345,3092" shape="rect">
    <area target="" onclick="flivroh('Vili')"alt="Vili e Vé" title="Vili e Vé"  coords="375,3228,706,3535" shape="rect">
    <area target="" onclick="flivroh('Hoenir')"alt="Hoenir" title="Hoenir"  coords="778,3237,929,3526" shape="rect">
    <area target="" onclick="flivroh('Frigg')"alt="Frigg" title="Frigg"  coords="45,3656,209,3942" shape="rect">
    <area target="" onclick="flivroh('Odin')"alt="Odin" title="Odin"  coords="256,3627,448,3941" shape="rect">
    <area target="" onclick="flivroh('Jord')"alt="Jord" title="Jord"  coords="722,3686,908,3947" shape="rect">
    <area target="" onclick="flivroh('Nanna')"alt="Nanna" title="Nanna"  coords="42,4082,133,4372" shape="rect">
    <area target="" onclick="flivroh('Baldr')"alt="Baldr" title="Baldr"  coords="168,4089,286,4379" shape="rect">
    <area target="" onclick="flivroh('Hodr')"alt="Hodr" title="Hodr"  coords="350,4077,483,4373" shape="rect">
    <area target="" onclick="flivroh('Idunn')"alt="Idunn" title="Idunn"  coords="775,4106,897,4363" shape="rect">
    <area target="" onclick="flivroh('Thor')"alt="Thor" title="Thor"  coords="567,4446,759,4761" shape="rect">
    <area target="" onclick="flivroh('Skadi')"alt="Skadi" title="Skadi"  coords="25,4867,160,5151" shape="rect">
    <area target="" onclick="flivroh('Freya')"alt="Freya" title="Freya"  coords="557,5298,680,5552" shape="rect">
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
      <hr>
<?php 
  include("../includes/footer.php"); 
?>