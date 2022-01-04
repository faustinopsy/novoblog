<?php
  include ("ls/livesearch.class.php");
  $LiveSearch = new LiveSearch();
  $add2style = 'code {display:block;color:#088A08;margin:10px;}
      h4 {margin: 15px 0;}';
  $thisPage = "Busca";
  include("includes/header.php"); 
?>

    <div class="container">

      <div class="page-header">
        <h2><small>LiveSearch V</small></h2>
        
      </div>

      <div class="row">
        <div class="span8">

          <div class='text-center'>
          <form action="busca.php" method="post">
            <input type="text" name="q" value="<?php echo htmlentities($_REQUEST["q"], ENT_QUOTES); ?>" placeholder="Procure no Site ..." class='input-block-level' required/><br /><br />
            <input type='submit' value="Procurar" class="btn btn-large btn-success" />
          </form>
          </div>



<?php

      $search_results = $LiveSearch->search($_REQUEST["q"],$_REQUEST["p"]);
      
      echo "<h2>Resultados<br /></h2>";

      echo $LiveSearch->drawSearchresults();
/*
      echo "<h2>Search Results<br />[some dumped array output]</h2>";

      echo "<pre><b>Search Results</b><code>" . print_r($search_results,true) . "</code></pre>";
      echo "<pre><b>Pager</b><code>" . print_r($LiveSearch->pager(),true) . "</code></pre>";
      echo "<pre><b>SearchCount</b><code>" . print_r($LiveSearch->searchcount,true) . "</code></pre>";

      */
      //print_r($search_results);
    
        ?>          
       </div>
    <section class="cards-section text-center">
       <div class='span4'>
      <h3>Nuvem de Busca</h3>
      
      <p><?php echo $LiveSearch->printSrchCloud(); ?></p>
       </div>
	   
		<div class='span4'>
                    <div class="item item-orange item-2 col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_puzzle_alt"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Manual</h3>
                            <p class="intro">How to use Live<span class='text-primary'>Search</span> and its features</p>
                            <a class="link" href="manual.html"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
					</div>
					 </section>
      </div>

      <hr>

     <?php 
 include("includes/footer.php"); 
 ?>

    </div>


  </body>
</html>
