<?php
  include ("ls/livesearch.class.php");
  $LiveSearch = new LiveSearch();
  $add2style = "code,pre {display:block;color:#088A08;margin:10px;overflow:auto;}
      h4 {margin: 15px 0;}
      .table.table-width-auto {width:auto;}
      .text-right,td.text-right {text-align: right}";
  $thisPage = "Inicio";
  include("includes/header.php"); 

?>
  
<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/elegant_font/css/style.css">
 <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
 <script src="js/Chart.min.js"></script>
 <script src="js/grafico.js"></script>  
   <section class="cards-section text-center">
            <div class="container">
               
                
				<div class="row"> 
				<div class="span8">
                    <div class="item item-green col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                
                            </div><!--//icon-holder-->
                            <div class="w3-panel w3-card " ><h4><b><i class="fa fa-flask" aria-hidden="true"></i> Absurdos científicos e imprecisões históricas </b></h4> 
    <canvas id="ciencia" width="90%" style="width: 100%; color:efda52; background-color:#efda52"></canvas></div>
                        </div><!--//item-inner-->
                    </div><!--//item-->
					</div>
					<div class='span4'>
                    <div class="item item-orange item-2 col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                          
                            <h3>Nuvem de Busca</h3>
      
      <p><?php echo $LiveSearch->printSrchCloud(); ?></p>
                        </div><!--//item-inner-->
                    </div><!--//item-->
					</div>
					</div>
				<div class="row"> 
				<div class="span8">
                    <div class="item item-blue col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                             
                            </div><!--//icon-holder-->
                           <div class="w3-panel w3-card " ><h4><b><i class="fa fa-female" aria-hidden="true"></i> Misoginia, violência e discriminação contra as mulheres </b></h4> 
    <canvas id="misogenia" width="90%" style="width: 100%; background-color:#00a390"></canvas></div>
                        </div><!--//item-inner-->
                    </div><!--//item-->
					</div>
					<div class='span4'>
                    <div class="item item-purple col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_lifesaver"></span>
                            </div><!--//icon-holder-->
                           
                        </div><!--//item-inner-->
                    </div><!--//item-->
					</div>
					</div>
					<div class="row"> 
				<div class="span8">
                    <div class="item item-primary col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                              
                            </div><!--//icon-holder-->
                           <div class="w3-panel w3-card "><h4><b><i class="fa fa-heartbeat" aria-hidden="true"></i> Discriminação contra homossexuais </b></h4> 
    <canvas id="homosexuais" width="90%" style="width: 100%; background-color:#00a390"></canvas></div>	
                        </div><!--//item-inner-->
                    </div><!--//item-->
					</div>
					<div class='span4'>
                    <div class="item item-orange col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                               
                            </div><!--//icon-holder-->
                            <h3 class="title">License &amp; Credits</h3>
                            <p class="intro"><strong>PrettyDocs</strong> (template for these documentation and presentation pages) and <strong>Live<span class='text-primary'>Search</span></strong> Credits and License information</p>
                            <a class="link" href="credits.html"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
					</div>
					</div>
					<div class="row"> 
				<div class="span8">
                    <div class="item item-primary col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                              
                            </div><!--//icon-holder-->
                            <div class="w3-panel w3-card "><h4><b><i class="fa fa-bomb" aria-hidden="true"></i> Crueldade e violência </b></h4> 
    <canvas id="violencia" width="90%" style="width: 100%; background-color:#efda52"></canvas></div>
                        </div><!--//item-inner-->
                    </div><!--//item-->
					</div>
					<div class='span4'>
                    <div class="item item-orange col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                               
                            </div><!--//icon-holder-->
                            <h3 class="title">License &amp; Credits</h3>
                            <p class="intro"><strong>PrettyDocs</strong> (template for these documentation and presentation pages) and <strong>Live<span class='text-primary'>Search</span></strong> Credits and License information</p>
                            <a class="link" href="credits.html"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
					</div>
					</div>
                </div><!--//cards-->
                
            </div><!--//container-->
        </section><!--//cards-section-->
    </div><!--//page-wrapper-->
      <hr>


<div id="mdbiblia" class="modal" style="display:none">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2 id="topo"></h2>	
    </div>
    <div class="modal-body">
      <table id="demo"></table>
    </div>
    <div class="modal-footer">
      <h3 id="topo"></h3>
    </div>
  </div>

</div>

<br><br><br>


<script>
// Get the modal

var mdgenesis = document.getElementById("mdbiblia");

// Get the button that opens the modal
var btgenesis = document.getElementById("btgenesis");
var btexodo = document.getElementById("btexodo");

// Get the <span> element that closes the modal
var fecha = document.getElementsByClassName("close")[0];



// When the user clicks on <span> (x), close the modal
fecha.onclick = function() {
  mdbiblia.style.display = "none";
   document.getElementById("demo").innerHTML ='';
    document.getElementById("topo").innerHTML ='';
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == mdbiblia) {
    mdbiblia.style.display = "none";
    document.getElementById("demo").innerHTML ='';
     document.getElementById("topo").innerHTML ='';
  }
}

function flivroc(xt) {
var nome= xt;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
	document.getElementById("topo").innerHTML =nome.charAt(0).toUpperCase()+ nome.slice(1);
	mdbiblia.style.display = "block";
  };
  xhttp.open("GET", "grafico/ciencia/"+nome.charAt(0).toLowerCase()+ nome.slice(1)+".txt", true);
  xhttp.send();
}

function flivrov(xt) {
var nome= xt;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
	document.getElementById("topo").innerHTML =nome.charAt(0).toUpperCase()+ nome.slice(1);
	mdbiblia.style.display = "block";
  };         
  xhttp.open("GET", "grafico/violencia/"+nome.charAt(0).toLowerCase()+ nome.slice(1)+".txt", true);
  xhttp.send();
}
function flivrom(xt) {
var nome= xt;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
	document.getElementById("topo").innerHTML =nome.charAt(0).toUpperCase()+ nome.slice(1);
	mdbiblia.style.display = "block";
  };
  xhttp.open("GET", "grafico/misognia/"+nome.charAt(0).toLowerCase()+ nome.slice(1)+".txt", true);
  xhttp.send();
}
function flivroh(xt) {
var nome= xt;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
	document.getElementById("topo").innerHTML =nome.charAt(0).toUpperCase()+ nome.slice(1);
	mdbiblia.style.display = "block";
  }; 
  xhttp.open("GET", "grafico/homofobia/"+nome.charAt(0).toLowerCase()+ nome.slice(1)+".txt", true);
  xhttp.send();
}




var cience = document.getElementById("ciencia");
var ctxC = cience.getContext('2d');
var CPieChart = new Chart(ctxC, {
   type: 'bar',
   data: {
      labels: ["Genesis","Exodo","Levitico","Numeros","Deuteronomio","Josue","Juizes","Rute","1samuel","2samuel","1reis","2reis","1cronicas","2cronicas","Esdras","Neemias","Ester","Jo","Salmos","Proverbios","Eclesiastes","Canticos","Isaias","Jeremias","Lamentacoes","Ezequiel","Daniel","Oseias","Joel","Amos","Obadias","Jonas","Miqueias","Naum","Habacuque","Sofonias","Ageu","Zacarias","Malaquias","Mateus","Marcos","Lucas","Joao","Atos","Romanos","1corintios","2corintios","Galatas","Efesios","Filipenses","Colossenses","1tessalonicenses","2tessalonicenses","1timoteo","2timoteo","Tito","Filemom","Hebreus","Tiago","1pedro","2pedro","1joao","2joao","3joao","Judas","Apocalipse"],
     datasets: [{
         data: [67, 13, 7, 12, 18,4,3,0,5,8,6,10,6,7,1,0,1,17,38,5,7,0,29,17,1,6,6,0,4,5,0,3,1,2,4,0,1,4,1,33, 22, 34, 10,14,5,6,1,0,1,0,1,0,0,2,0,0,0,2,3,0,1,0,0,0,0,13],
			
         backgroundColor: ["green", "green", "green", "green", "green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green", "green", "green", "green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green","green"],
         hoverBackgroundColor: ["white", "white", "white", "white", "white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white", "white", "white", "white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white"]
      }]
   },
   
   
   
   options: {
      legend: {
         display: false,
         position: "right"
      },
	   pan: {
      enabled: true,
      mode: 'xy',
    },
    zoom: {
      enabled: true,
      mode: 'xy', // or 'x' for "drag" version
    },
   }
});

cience.onclick = function(e) {
   var slice = CPieChart.getElementAtEvent(e);
   if (!slice.length) return; // return if not clicked on slice
   var label = slice[0]._model.label;
   switch (label) {
      // add case for each label/slice
      case label:
         flivroc(label);
         break;
         
		 
   }
}

var violence = document.getElementById("violencia");
var ctxV = violence.getContext('2d');
var VPieChart = new Chart(ctxV, {
   type: 'bar',
   data: {
     labels: ["Genesis","Exodo","Levitico","Numeros","Deuteronomio","Josue","Juizes","Rute","1samuel","2samuel","1reis","2reis","1cronicas","2cronicas","Esdras","Neemias","Ester","Jo","Salmos","Proverbios","Eclesiastes","Canticos","Isaias","Jeremias","Lamentacoes","Ezequiel","Daniel","Oseias","Joel","Amos","Obadias","Jonas","Miqueias","Naum","Habacuque","Sofonias","Ageu","Zacarias","Malaquias","Mateus","Marcos","Lucas","Joao","Atos","Romanos","1corintios","2corintios","Galatas","Efesios","Filipenses","Colossenses","1tessalonicenses","2tessalonicenses","1timoteo","2timoteo","Tito","Filemom","Hebreus","Tiago","1pedro","2pedro","1joao","2joao","3joao","Judas","Apocalipse"],
     datasets: [{
         data: [23, 65, 141, 64, 93,49,50,0,65,42,42,37,23,34,0,0,13,13,51,19,0,0,43,104,10,79,2,19,5,24,0,0,11,5,3,7,1,18,3,30, 8, 14, 7,8,4,4,1,1,4,0,2,2,3,0,0,0,0,14,1,3,4,1,0,0,0,51],
			
         backgroundColor: ["red", "red", "red", "red", "red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red", "red", "red", "red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red","red"],
         hoverBackgroundColor: ["white", "white", "white", "white", "white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white", "white", "white", "white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white"]
      }]
   },
   options: {
      legend: {
         display: false,
         position: "right"
      },
	   pan: {
      enabled: true,
      mode: 'xy',
    },
    zoom: {
      enabled: true,
      mode: 'xy', // or 'x' for "drag" version
    },
   }
});

violence.onclick = function(e) {
   var slice = VPieChart.getElementAtEvent(e);
   if (!slice.length) return; // return if not clicked on slice
   var label = slice[0]._model.label;
    switch (label) {
      // add case for each label/slice
      case label:
         flivrov(label);
         break;
         
		 
   }
}


var mulher = document.getElementById("misogenia");
var ctxM = mulher.getContext('2d');
var MPieChart = new Chart(ctxM, {
   type: 'bar',
   data: {
      labels: ["Genesis","Exodo","Levitico","Numeros","Deuteronomio","Josue","Juizes","Rute","1samuel","2samuel","1reis","2reis","1cronicas","2cronicas","Esdras","Neemias","Ester","Jo","Salmos","Proverbios","Eclesiastes","Canticos","Isaias","Jeremias","Lamentacoes","Ezequiel","Daniel","Oseias","Joel","Amos","Obadias","Jonas","Miqueias","Naum","Habacuque","Sofonias","Ageu","Zacarias","Malaquias","Mateus","Marcos","Lucas","Joao","Atos","Romanos","1corintios","2corintios","Galatas","Efesios","Filipenses","Colossenses","1tessalonicenses","2tessalonicenses","1timoteo","2timoteo","Tito","Filemom","Hebreus","Tiago","1pedro","2pedro","1joao","2joao","3joao","Judas","Apocalipse"],
     datasets: [{
         data: [45, 10, 30, 17, 18,1,19,2,10,16,7,0,5,7,3,2,6,4,3,18,2,1,11,20,8,34,0,16,0,2,0,0,0,2,0,0,0,2,0,5, 3, 7, 3,3,1,10,0,0,2,0,1,1,0,7,1,2,0,0,0,3,1,0,0,0,0,8],
			
         backgroundColor: ["pink", "pink", "pink", "pink", "pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink", "pink", "pink", "pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink","pink"],
         hoverBackgroundColor: ["white", "white", "white", "white", "white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white", "white", "white", "white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white"]
      }]
   },
   options: {
      legend: {
         display: false,
         position: "right"
      },
	   pan: {
      enabled: true,
      mode: 'xy',
    },
    zoom: {
      enabled: true,
      mode: 'xy', // or 'x' for "drag" version
    },
   }
});

mulher.onclick = function(e) {
   var slice = MPieChart.getElementAtEvent(e);
   if (!slice.length) return; // return if not clicked on slice
   var label = slice[0]._model.label;
    switch (label) {
      // add case for each label/slice
      case label:
         flivrom(label);
         break;
         
		 
   }
}

var homos = document.getElementById("homosexuais");
var ctxH = homos.getContext('2d');
var HPieChart = new Chart(ctxH, {
   type: 'bar',
   data: {
     labels: ["Genesis","Exodo","Levitico","Numeros","Deuteronomio","Josue","Juizes","Rute","1samuel","2samuel","1reis","2reis","1cronicas","2cronicas","Esdras","Neemias","Ester","Jo","Salmos","Proverbios","Eclesiastes","Canticos","Isaias","Jeremias","Lamentacoes","Ezequiel","Daniel","Oseias","Joel","Amos","Obadias","Jonas","Miqueias","Naum","Habacuque","Sofonias","Ageu","Zacarias","Malaquias","Mateus","Marcos","Lucas","Joao","Atos","Romanos","1corintios","2corintios","Galatas","Efesios","Filipenses","Colossenses","1tessalonicenses","2tessalonicenses","1timoteo","2timoteo","Tito","Filemom","Hebreus","Tiago","1pedro","2pedro","1joao","2joao","3joao","Judas","Apocalipse"],
     datasets: [{
         data: [8, 0, 2, 0, 3,0,0,0,7,2,4,4,0,0,0,0,0,0,0,0,0,0,4,3,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,4, 0, 2, 0,2,2,1,0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,3],
			
         backgroundColor: ["purple", "purple", "purple", "purple", "purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple", "purple", "purple", "purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple","purple"],
         hoverBackgroundColor: ["white", "white", "white", "white", "white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white", "white", "white", "white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white","white"]
      }]
   },
   options: {
      legend: {
         display: false,
         position: "right"
      },
	   pan: {
      enabled: true,
      mode: 'xy',
    },
    zoom: {
      enabled: true,
      mode: 'xy', // or 'x' for "drag" version
    },
   }
});

homos.onclick = function(e) {
   var slice = HPieChart.getElementAtEvent(e);
   if (!slice.length) return; // return if not clicked on slice
   var label = slice[0]._model.label;
   switch (label) {
      // add case for each label/slice
      case label:
         flivroh(label);
         break;
         
		 
   }
}

</script>







 <?php 
 include("includes/footer.php"); 
 ?>

    </div>


  </body>
</html>
