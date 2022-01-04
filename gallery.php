<?php 
 include ("ls/livesearch.class.php");
  $LiveSearch = new LiveSearch();
  $add2style = "code,pre {display:block;color:#088A08;margin:10px;overflow:auto;}
      h4 {margin: 15px 0;}
      .table.table-width-auto {width:auto;}
      .text-right,td.text-right {text-align: right}";
  $thisPage = "Gallery";
  $thisPageParent = "Dropdown";
  include("includes/header.php"); 
?>

    <div class="container">
      <div class="page-header">
        <h2>Just another sample Page</h2>
      </div>
      <div class="row">
        <div class="span8">
          <h3>Gallery Windows Sample Pics</h3>
            <ul class="thumbnails">
              <li class="span2"><a href="galpics/Chrysanthemum.jpg" class="thumbnail"><img class="img-rounded" alt="Chrysanthemum" title="Wucherblume" src="galpics/Chrysanthemum.jpg" /></a></li>
              <li class="span2"><a href="galpics/Desert.jpg" class="thumbnail"><img src="galpics/Desert.jpg" alt="Desert" title="Wüste" /></a></li>
              <li class="span2"><a href="galpics/Hydrangeas.jpg" class="thumbnail"><img src="galpics/Hydrangeas.jpg" alt="Hydrangeas" title="Hydrangea" /></a></li>
              <li class="span2"><a href="galpics/Jellyfish.jpg" class="thumbnail"><img src="galpics/Jellyfish.jpg" alt="Jellyfish" title="Qualle" /></a></li>
              <li class="span2"><a href="galpics/Koala.jpg" class="thumbnail"><img src="galpics/Koala.jpg" alt="Koala" title="Koala" /></a></li>
              <li class="span2"><a href="galpics/Lighthouse.jpg" class="thumbnail"><img src="galpics/Lighthouse.jpg" alt="Lighthouse" title="Leuchtturm" /></a></li>
              <li class="span2"><a href="galpics/Penguins.jpg" class="thumbnail"><img src="galpics/Penguins.jpg" alt="Penguins" title="Pinguine" /></a></li>
              <li class="span2"><a href="galpics/Tulips.jpg" class="thumbnail"><img src="galpics/Tulips.jpg" alt="Tulips" title="Tulpen" /></a></li>
            </ul>

          <h3>Gallery Easter Egg Heads</h3>
            <ul class="thumbnails">
              <li class="span4"><a href="galpics/DSC_0525.jpg" class="thumbnail"><img src="galpics/DSC_0525.jpg" alt="Easter 2010"></a></li>
              <li class="span2"><a href="galpics/DSC_0526.jpg" class="thumbnail"><img src="galpics/DSC_0526.jpg" alt="Easter 2011"></a></li>
              <li class="span2"><a href="galpics/DSC_0527.jpg" class="thumbnail"><img src="galpics/DSC_0527.jpg" alt="Easter 2010"></a></li>
              <li class="span2"><a href="galpics/DSC_0529.jpg" class="thumbnail"><img src="galpics/DSC_0529.jpg" alt="Easter 2010"></a></li>
              <li class="span2"><a href="galpics/DSC_0530.jpg" class="thumbnail"><img src="galpics/DSC_0530.jpg" alt="Easter 2013"></a></li>
              <li class="span2"><a href="galpics/DSC_0528.jpg" class="thumbnail"><img src="galpics/DSC_0528.jpg" alt="Easter 2013"></a></li>
              <li class="span2"><a href="galpics/DSC_0531.jpg" class="thumbnail"><img src="galpics/DSC_0531.jpg" alt="Easter 2011"></a></li>
              <li class="span2"><a href="galpics/DSC_0532.jpg" class="thumbnail"><img src="galpics/DSC_0532.jpg" alt="Easter 2010"></a></li>
              <li class="span2"><a href="http://www.homac.at/tn2353s21.jpg" class="thumbnail"><img src="http://www.homac.at/tn2353s21.jpg" alt="rent your page"></a></li>
            </ul>

        </div>

          <div class='span4'>
            <h3>Images can be found too</h3>
            <p>Just search for: <i>Chrysanthemum, Wucherblume, Desert, Wüste, Hydrangeas, Hydrangea, Jellyfish, Qualle, Koala, Lighthouse, Leuchtturm, Penguins, Pinguine, Tulips, Tulpen, Easter, Easter 2010, Easter 2011, Easter 2013</i><br />On other pages: <i>firefox, envato</i></p>
          </div>

        </div>

      <hr>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>

    </div>


  </body>
</html>
