<?php 
 include ("ls/livesearch.class.php");
  $LiveSearch = new LiveSearch();
  $add2style = "code,pre {display:block;color:#088A08;margin:10px;overflow:auto;}
      h4 {margin: 15px 0;}
      .table.table-width-auto {width:auto;}
      .text-right,td.text-right {text-align: right}";
  $thisPage = "Downloads";
  $thisPageParent = "Dropdown";
  include("includes/header.php"); 
?>

    <div class="container">
      <div class="page-header">
        <h2>Sample Page with linked PDF and TXT files</h2>
      </div>
      <div class="row">
        <div class="span8">
          <h3>The linked Files</h3>
            <ul class='unstyled'>
              <li><a href="envato.pdf"><code>PDF</code> Envato</a></li>
              <li><a href="hallo.txt"><code>TXT</code> Hallo</a></li>
            </ul>
          <h3>The unlinked but added Files</h3>
            <ul class='unstyled'>
              <li><code>PDF</code> Envato2000.pdf</li>
              <li><code>TXT</code> Ciao.txt</li>
            </ul>

        </div>

          <div class='span4'>
            <h3>PDF and TXT files can be searched</h3>
            <p>Linked: <i>envato, passionate, marketplace, Creattica</i><br />NOT linked: <i>firefox, Jimbo, </i></p>
          </div>

        </div>

      <hr>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>

    </div>


  </body>
</html>
