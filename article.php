<!doctype html>
<html>
      <head>
          <meta charset="utf-8">
          <title>Ink Block</title>
          <link rel="stylesheet" href="/InkBlock/css/bootstrap.min.css">
          <link rel="stylesheet" href="/InkBlock/css/bootstrap-theme.css">
            <link rel="stylesheet" href="/InkBlock/css/style.css">
            <link rel="stylesheet" href="/InkBlock/css/article.css">
            <link rel="stylesheet" href="/InkBlock/font-awesome/css/font-awesome.min.css">
          <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
          <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>    
          <script src="/InkBlock/js/bootstrap.min.js"></script>
            <script src="/InkBlock/js/JS.js"></script>
            <script src="/InkBlock/js/articleImgs.js"></script>
            <script src="https://use.typekit.net/gqu4epn.js"></script>
            <script>try{Typekit.load({ async: true });}catch(e){}</script>
            <link rel="icon" type="image/png" href="/InkBlock/img/favicon/black-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="/InkBlock/img/favicon/black-16x16.png" sizes="16x16" />
            <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes">
      </head>
      <body>
            <!--- Hero Layout --->
           <?php
                  $category = $_GET["c"];
                  $id = $_GET["i"];
                  $flileCount = 0; 
                  $dir = 'img/articles/'.$category.'/'.$id.'/';
                  if ($handle = opendir($dir)) {
                        while (($file = readdir($handle)) !== false){
                              if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                                    $fileCount++;
                        }
                  }
            ?>
            <script>
                   $(document).ready(function(){
                         LoadImages(<?php echo $fileCount - 1 .', "' . $category . '", ' . $id; ?> );
                   });
            </script>
            
             <div class="jumbotron hero viewportHeight" <?php echo 'style="background-image: url(/InkBlock/img/articles/'. $_GET["c"].'/'. $_GET["i"].'/hero.jpg)"' ?>>

                                 <h2 class="imgTitle hiddenTitle"><?php echo str_replace("_", " ", $_GET["t"]); ?> </h2>


                                 <h2 class="imgTitle"><?php echo str_replace("_", " ", $_GET["t"]); ?></h2>

            </div>
          
                  <div class="container-fluid content">

                  </div>
            <div class="container-fluid trippleImage">
                  <div class="row moreCat" id="moreCat">
                        
                  </div>
            </div>
                  
            <div class="footer"></div>
      </body>
</html>