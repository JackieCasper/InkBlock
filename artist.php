<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ink Block - Artists</title>
        <link rel="stylesheet" href="/InkBlock/css/bootstrap.min.css">
        <link rel="stylesheet" href="/InkBlock/css/bootstrap-theme.css">
        <link rel="stylesheet" href="/InkBlock/css/style.css">
        <link rel="stylesheet" href="/InkBlock/css/artist.css">
        <link rel="stylesheet" href="/InkBlock/font-awesome/css/font-awesome.min.css">
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>  
        <script src="/InkBlock/js/bootstrap.min.js"></script>
          <script src="/InkBlock/js/artist.js"></script>
        <script src="/InkBlock/js/JS.js"></script> 
        <link rel="icon" type="image/png" href="/InkBlock/img/favicon/black-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="/InkBlock/img/favicon/black-16x16.png" sizes="16x16" />
        <script src="https://use.typekit.net/gqu4epn.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
          <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes">
    </head>
    <body>
        
          <?php
                  $location = $_GET["location"];
                  $id = $_GET["id"];
                  $dir = $_GET["dir"];
                  $flileCount = 0; 
                  $dir = 'img/artists/'.$location.'/'.$dir.'/';
                  if ($handle = opendir($dir)) {
                        while (($file = readdir($handle)) !== false){
                              if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                                    $fileCount++;
                        }
                  }
          ?>
          <script>
            $(document).ready(function(){
                  setImageCount(<?php echo '"' . $fileCount . '"'; ?>);
                getXML(<?php echo '"' . $location . '", "' . $id . '"'; ?>);
            })
        </script>
          <div class="container-fluid">
                <div class="jumbotron hero viewportHeight" style="background-image: url(/InkBlock/img/articles/artists/hero.jpg)">

                   <h2 class="imgTitle heroTitle hiddenTitle">Artists</h2>

                   <h2 class="imgTitle heroTitle"> Artists</h2>

       </div>
        <div class="container-fluid content">
            <div class="row">
                <div class="col-lg-12 description"></div>
            </div>
            <div id="imgContent" class="row">
              
            </div>
        </div>
                
          </div>
          <hr>
           <div class="container-fluid trippleImage">
                  <div class="row moreCat" id="moreArtists">
                        
                  </div>
            </div>
        
          <div class="footer"></div>
    </body>
</html>