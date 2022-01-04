<?php 
 include ("ls/livesearch.class.php");
  $LiveSearch = new LiveSearch();
  $add2style = "code,pre {display:block;color:#088A08;margin:10px;overflow:auto;}
      h4 {margin: 15px 0;}
      .table.table-width-auto {width:auto;}
      .text-right,td.text-right {text-align: right}";
  $thisPage = "Religiões";
  include("includes/header.php"); 
?>
<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/elegant_font/css/style.css">
 <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
   <section class="cards-section text-center">
    <div class="container">
      <div class="row"> 
				<div class="span4">
                    <div class="item item-orange col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            
                            <div class="w3-panel w3-card " ><h4><b>
							 Cristianísmo </b></h4> 
							<img src="img/cristianismo.jpg">
							 <a class="link" href="tags/cristianismo"><span></span></a>
							 <br>
							 <?php 
						$myfile = fopen("tags/cristaos.txt", "r") or die("Unable to open file!");
						echo fgets($myfile);
						fclose($myfile);							
							  ?> Views
					 <p>A fé cristã acredita essencialmente em Jesus como o Cristo, Filho de Deus, Salvador. A religião cristã tem três vertentes principais:...</p>
                        </div><!--//item-inner-->
                    </div><!--//item-->
					</div></div>
					<div class='span4'>
                    <div class="item item-orange item-2 col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            
                            <div class="w3-panel w3-card " ><h4><b>
							 Islamísmo </b></h4> 
							<img src="img/islamismo.jpg">
							<a class="link" href="tags/islamismo"><span></span></a>
							 <br>
							<?php 
						$myfile = fopen("tags/islas.txt", "r") or die("Unable to open file!");
						echo fgets($myfile);
						fclose($myfile);							
							  ?> Views
							  <p>O Islão é descrito em árabe como um "diin", significa "modo de vida" e/ou "religião" que significam "paz"....</p>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    </div><!--//item-->
					</div>
					<div class="span4">
                    <div class="item item-orange col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            
                            <div class="w3-panel w3-card " ><h4><b>
							Judaísmo </b></h4> 
							<img src="img/judaismo.jpg">
							<a class="link" href="tags/judaismo"><span></span></a>
							 <br>
							<?php 
						$myfile = fopen("tags/judeus.txt", "r") or die("Unable to open file!");
						echo fgets($myfile);
						fclose($myfile);							
							  ?> Views
							  <p>considera que a Torá foi escrita por Deus que a ditou a Moisés, sendo as suas leis imutáveis...</p>
                        </div><!--//item-inner-->
                    </div><!--//item-->
					</div></div></div>
					<div class="row"> 
					<div class="span4">
                    <div class="item item-green col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            
                            <div class="w3-panel w3-card " ><h4><b>
							 Hinduísmo </b></h4> 
							<img src="img/hinduismo.jpg">
								<a class="link" href="tags/hinduismo"><span></span></a>
								<br>
								<?php 
						$myfile = fopen("tags/hindus.txt", "r") or die("Unable to open file!");
						echo fgets($myfile);
						fclose($myfile);							
							  ?> Views
							  <p>Hinduísmo é uma tradição religiosa que se originou na india chamado de Sanātana Dharma...</p>
                        </div><!--//item-inner-->
                    </div><!--//item-->
					</div></div>
					<div class="span4">
                    <div class="item item-green col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            
                            <div class="w3-panel w3-card " ><h4><b>
							 Budísmo </b></h4> 
							<img src="img/budismo.jpg">
							
								<a class="link" href="tags/budismo"><span></span></a>
								<br>
								<?php 
						$myfile = fopen("tags/budismos.txt", "r") or die("Unable to open file!");
						echo fgets($myfile);
						fclose($myfile);							
							  ?> Views
							  <p>Verdades do Buda, a meta do budismo é a superação do sofrimento (dukkha) causado pelo desejo e pela ignorância...</p>
                        </div><!--//item-inner-->
                    </div><!--//item-->
					</div></div>
					</div>	

   


  </body>
</html>
<?php 
  include("includes/footer.php"); 
?>