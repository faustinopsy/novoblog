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
    <style>
        .responsive {
  width: 100%;
  height: auto;
}
    </style>
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
<img src="../img/deusesgregos.jpg" alt="gregos" usemap="#imagemap" class="map"  >

<map name="imagemap" style="width:100%">
     <area target="" onclick="flivroh('Gaia')" alt="Gaia " title="Gaia "  coords="556,404,660,638" shape="rect">
    <area target="" onclick="flivroh('Urano')" alt="Urano" title="Urano"  coords="375,530,482,812" shape="rect">
    <area target="" onclick="flivroh('Afrodite')" alt="Afrodite" title="Afrodite"  coords="115,849,276,1084" shape="rect">
    <area target="" onclick="flivroh('Themis')" alt="Themis" title="Themis"  coords="57,1196,222,1457" shape="rect">
    <area target="" onclick="flivroh('Mnemosyne')" alt="Mnemosyne" title="Mnemosyne"  coords="229,1197,364,1468" shape="rect">
    <area target="" onclick="flivroh('Hyperion')" alt="Hyperion" title="Hyperion"  coords="397,1179,542,1457" shape="rect">
    <area target="" onclick="flivroh('Theia')" alt="Theia" title="Theia"  coords="564,1187,722,1465" shape="rect">
    <area target="" onclick="flivroh('Crius')" alt="Crius " title="Crius "  coords="738,1189,869,1467" shape="rect">
    <area target="" onclick="flivroh('Oceanus')" alt="Oceanus " title="Oceanus "  coords="79,1552,312,1824" shape="rect">
    <area target="" onclick="flivroh('Tethys')" alt="Tethys" title="Tethys"  coords="401,1566,561,1844" shape="rect">
    <area target="" onclick="flivroh('Iapetus')" alt="Iapetus " title="Iapetus "  coords="670,1568,828,1854" shape="rect">
    <area target="" onclick="flivroh('Pleione')" alt="Pleione" title="Pleione"  coords="264,1987,374,2260" shape="rect">
    <area target="" onclick="flivroh('Atlas')" alt="Atlas" title="Atlas"  coords="732,2064,151" shape="circle">
    <area target="" onclick="flivroh('Coeus')" alt="Coeus " title="Coeus "  coords="133,2465,296,2741" shape="rect">
    <area target="" onclick="flivroh('Febe')" alt="Febe" title="Febe"  coords="312,2462,468,2746" shape="rect">
    <area target="" onclick="flivroh('Cronos')" alt="Cronos " title="Cronos "  coords="507,2462,680,2741" shape="rect">
    <area target="" onclick="flivroh('Rhea')" alt="Rhea" title="Rhea"  coords="726,2467,855,2740" shape="rect">
    <area target="" onclick="flivroh('Semele')" alt="Semele" title="Semele"  coords="64,2952,160,3199" shape="rect">
    <area target="" onclick="flivroh('Maia')" alt="Maia" title="Maia"  coords="184,2957,283,3203" shape="rect">
    <area target="" onclick="flivroh('Leto')" alt="Leto" title="Leto"  coords="313,2953,418,3199" shape="rect">
    <area target="" onclick="flivroh('Zeus')" alt="Zeus" title="Zeus"  coords="434,2913,690,3206" shape="rect">
    <area target="" onclick="flivroh('Hera')" alt="Hera" title="Hera"  coords="758,2938,896,3209" shape="rect">
    <area target="" onclick="flivroh('Dionísio')" alt="Dionísio" title="Dionísio"  coords="44,3352,162,3620" shape="rect">
    <area target="" onclick="flivroh('Hermes')" alt="Hermes" title="Hermes"  coords="170,3418,280,3632" shape="rect">
    <area target="" onclick="flivroh('Apollo')" alt="Apollo " title="Apollo "  coords="291,3408,381,3635" shape="rect">
    <area target="" onclick="flivroh('Artemis')" alt="Artemis" title="Artemis"  coords="392,3420,480,3642" shape="rect">
    <area target="" onclick="flivroh('Athena')" alt="Athena" title="Athena"  coords="512,3396,628,3651" shape="rect">
    <area target="" onclick="flivroh('Ares')" alt="Ares" title="Ares"  coords="647,3371,761,3654" shape="rect">
    <area target="" onclick="flivroh('Hephaistos')" alt="Hephaistos" title="Hephaistos"  coords="786,3405,901,3652" shape="rect">
    <area target="" onclick="flivroh('Poseidon')" alt="Poseidon" title="Poseidon"  coords="59,3802,232,4110" shape="rect">
    <area target="" onclick="flivroh('Hestia')" alt="Hestia" title="Hestia"  coords="276,3851,428,4107" shape="rect">
    <area target="" onclick="flivroh('Hades')" alt="Hades" title="Hades"  coords="525,3832,638,4110" shape="rect">
    <area target="" onclick="flivroh('Demeter')" alt="Deméter" title="Deméter"  coords="743,3831,882,4119" shape="rect">
</map>
</tr>

</tbody>
</table>	

<br>
<br>
<br>
<br>

<div id="mdartigo" class="modal responsive" style="display: none">

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