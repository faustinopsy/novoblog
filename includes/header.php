<?php
  $version = "4.2";
  $releaseDate = "Dec 2020";
  $actNav[$thisPage] = "class='active'";
  $actParentNav[$thisPageParent] = "active";
  header('Content-Type: text/html; charset=utf-8');
  $host = $_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .media.pull-left {
        margin-right: 10px;
      }
      .media.pull-right {
        margin-left: 10px;
      }

      <?php
        echo $add2style; 
      ?>
	  .tabcontentblog {

  padding: 0px 12px;
  border: 0px solid #ccc;
  width: 80%;
   height: 100%;
  border-left: none;
   text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
  
}
	  @media only screen and (max-width: 600px)
{
    .tabcontentblog{
		 width: 100%;
	}
  .anuncios {
        opacity: 0; /* desaparece no mobile. */
         overflow: hidden;
          display: none;
    }
    
    
}
    </style>

      <title>CeuVago  <?php echo $thisPage; ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css" type="text/css" />
    <link rel="stylesheet" href="ls/livesearch.css" type="text/css" />

    <script type="text/javascript" src="js/jquery.1.9.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/elegant_font/css/style.css">
 <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
  </head>
  <body>

   <div class="navbar navbar-inverse navbar-fixed-top " >
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" >
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="index.php"> <small>CeuVago</small></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li <?php echo $actNav["Inicio"]; ?>><a href="http://<?php echo $host; ?>/novoblog/index.php">Inicio</a></li>
              <li <?php echo $actNav["Deuses"]; ?>><a href="http://<?php echo $host; ?>/novoblog/deuses.php">Deuses</a></li>
              <li <?php echo $actNav["Religiões"]; ?>><a href="http://<?php echo $host; ?>/novoblog/religioes.php">Religiões</a></li>
			  <li <?php echo $actNav["Bíblia"]; ?>><a href="http://<?php echo $host; ?>/novoblog/biblia.php">Bíblia</a></li>
              <li <?php echo $actNav["Busca"]; ?>><a href="http://<?php echo $host; ?>/novoblog/busca.php">Procurar</a></li>
              <li class="dropdown <?php echo $actParentNav["Dropdown"]; ?>">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Religiões <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li <?php echo $actNav["Gallery"]; ?>><a href="http://<?php echo $host; ?>/novoblog/gallery.php">Gallery Page</a></li>
                  <li <?php echo $actNav["Downloads"]; ?>><a href="http://<?php echo $host; ?>/novoblog/downloads.php">Download Page</a></li>
                  <li <?php echo $actNav["Sample Page #1"]; ?>><a href="http://<?php echo $host; ?>/novoblog/sample1.php">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Next Section</li>
                  <li <?php echo $actNav["Sample Page #2"]; ?>><a href="http://<?php echo $host; ?>/novoblog/sample2.php">Another Site</a></li>
                  <li <?php echo $actNav["Sample Page #3"]; ?>><a href="http://<?php echo $host; ?>/novoblog/sample3.php">And the last one</a></li>
                </ul>
              </li>
            </ul>
            <!-- theSearchForm [+] -->
            <form class="navbar-form pull-right" action="http://<?php echo $host; ?>/novoblog/busca.php">
              <div class="input-append">
                <input type="text" name="q" class="span4" value="" placeholder="Procurar no Site ..."/>
                <button class="btn" type="submit"><i class='icon-search'></i> Procurar</button>
              </div>
            </form>
            <!-- theSearchForm [-] -->
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
