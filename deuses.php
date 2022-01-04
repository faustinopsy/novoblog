<?php
  include ("ls/livesearch.class.php");
  $LiveSearch = new LiveSearch();
  $add2style = "code,pre {display:block;color:#088A08;margin:10px;overflow:auto;}
      h4 {margin: 15px 0;}
      .table.table-width-auto {width:auto;}
      .text-right,td.text-right {text-align: right}";
  $thisPage = "Deuses";
  include("includes/header.php"); 

?>
  
<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/elegant_font/css/style.css">
 <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
   <section class="cards-section text-center">
            <div class="container">
              

                
		<div class="row"> 
				<div class="span4">
                    <div class="item item-green col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            
                            <div class="w3-panel w3-card " ><h4><b>
							 Deuses do Egito </b></h4> 
							<img src="img/egipcios.png">
							 <a class="link" href="tags/egipcios"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
					</div></div>
					<div class='span4'>
                    <div class="item item-orange item-2 col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            
                            <div class="w3-panel w3-card " ><h4><b>
							 Deuses Gregos </b></h4> 
							<img src="img/gregos.png">
							<a class="link" href="tags/gregos"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    </div><!--//item-->
					</div>
					<div class="span4">
                    <div class="item item-green col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            
                            <div class="w3-panel w3-card " ><h4><b>
							 Deuses Nordicos </b></h4> 
							<img src="img/nordicos.png">
							<a class="link" href="tags/nordicos"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
					</div></div>
					<div class="span4">
                    <div class="item item-green col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            
                            <div class="w3-panel w3-card " ><h4><b>
							 Deuses Hindu </b></h4> 
							<img src="img/hindu.png">
								<a class="link" href="tags/hindu"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
					</div></div>
					</div>		
                
<?php 
/*$path = "tags";
$diretorio = dir($path);
$arquivo="";
//echo "Lista de Arquivos do diretório '<strong>".$path."</strong>':<br />";
while($arquivo = $diretorio -> read()){
	if((empty($arquivo)==false) && (strlen($arquivo)>3)){
echo "<div class='span4'>	<div class='item item-purple col-md-4 col-sm-6 col-xs-6'>
					<div class='item-inner'>
						<div class='icon-holder'>
							<span aria-hidden='true' class='icon icon_lifesaver'></span>
						</div><!--//icon-holder-->
						<h3 class='title'>".substr_replace($arquivo,"",-4,4)."</h3>
						<p class='intro'>";
						$myfile = fopen($path."/".$arquivo, "r") or die("Unable to open file!");
						echo fgets($myfile);
						fclose($myfile);
						echo "</p><a class='link' href='".$path."/".$arquivo."'><span></span></a>
					</div><!--//item-inner-->
                    </div></div>";
	}
}
$diretorio->close();
*/
?>      
				<!--//cards-->
            </div><!--//container-->
        </section><!--//cards-section-->
    </div><!--//page-wrapper-->
      <hr>
<?php 
  include("includes/footer.php"); 
?>