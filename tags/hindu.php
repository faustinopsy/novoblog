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

<img src="../img/deuseshindu.jpg" alt="deuseshindu" usemap="#imagemap" class="map" >

<map name="imagemap" style="width:100%">
 <area target="" onclick="flivroh('Devi')" alt="Devi" title="Devi"  coords="411,414,602,670" shape="rect">
    <area target="" onclick="flivroh('Brahma')" alt="Brahma" title="Brahma"  coords="106,797,281,1127" shape="rect">
    <area target="" onclick="flivroh('Saraswati')" alt="Saraswati" title="Saraswati"  coords="297,847,435,1118" shape="rect">
    <area target="" onclick="flivroh('Vishnu')" alt="Vishnu" title="Vishnu"  coords="545,816,718,1127" shape="rect">
    <area target="" onclick="flivroh('Lakshmi')" alt="Lakshmi" title="Lakshmi"  coords="729,847,838,1127" shape="rect">
    <area target="" onclick="flivroh('Rama')" alt="Rama" title="Rama"  coords="142,1326,275,1623" shape="rect">
    <area target="" onclick="flivroh('Sita')" alt="Sita" title="Sita"  coords="289,1339,392,1620" shape="rect">
    <area target="" onclick="flivroh('Hanuman')" alt="Hanuman" title="Hanuman"  coords="405,1309,583,1627" shape="rect">
    <area target="" onclick="flivroh('Balarama')" alt="Balarama" title="Balarama"  coords="594,1352,703,1619" shape="rect">
    <area target="" onclick="flivroh('Krishna')" alt="Krishna" title="Krishna"  coords="711,1375,811,1627" shape="rect">
    <area target="" onclick="flivroh('Matsya')" alt="Matsya" title="Matsya"  coords="114,1867,264,2123" shape="rect">
    <area target="" onclick="flivroh('Kurma')" alt="Kurma" title="Kurma"  coords="272,1883,392,2132" shape="rect">
    <area target="" onclick="flivroh('Varaha')" alt="Varaha" title="Varaha"  coords="405,1770,526,2128" shape="rect">
    <area target="" onclick="flivroh('Nrisingha')" alt="Nrisingha" title="Nrisingha"  coords="537,1816,692,2134" shape="rect">
    <area target="" onclick="flivroh('Vamana')" alt="Vamana" title="Vamana"  coords="703,1954,779,2126" shape="rect">
    <area target="" onclick="flivroh('Parasurama')" alt="Parasurama" title="Parasurama"  coords="776,1850,890,2134" shape="rect">
    <area target="" onclick="flivroh('Shiva')" alt="Shiva" title="Shiva"  coords="74,2330,267,2657" shape="rect">
    <area target="" onclick="flivroh('Parvati')" alt="Parvati" title="Parvati"  coords="278,2335,384,2642" shape="rect">
    <area target="" onclick="flivroh('Sati')" alt="Sati" title="Sati"  coords="411,2357,498,2642" shape="rect">
    <area target="" onclick="flivroh('Durga')" alt="Durga" title="Durga"  coords="504,2324,699,2643" shape="rect">
    <area target="" onclick="flivroh('Kali')" alt="Kali" title="Kali"  coords="721,2324,885,2632" shape="rect">
    <area target="" onclick="flivroh('Kartikeya')" alt="Kartikeya " title="Kartikeya "  coords="191,2836,427,3151" shape="rect">
    <area target="" onclick="flivroh('Ganesha')" alt="Ganesha" title="Ganesha"  coords="444,2855,620,3146" shape="rect">
    <area target="" onclick="flivroh('Riddhi')" alt="Riddhi e Siddhi" title="Riddhi e Siddhi"  coords="831,2877,653,3135" shape="rect">
    <area target="" onclick="flivroh('Mitra')" alt="Mitra" title="Mitra"  coords="138,3856,308,4159" shape="rect">
    <area target="" onclick="flivroh('Indra')" alt="Indra" title="Indra"  coords="760,5866,926,6200" shape="rect">
   
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
<?php 
  include("../includes/footer.php"); 
?>