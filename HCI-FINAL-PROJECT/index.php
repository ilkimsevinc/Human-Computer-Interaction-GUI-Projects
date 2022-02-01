<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/favicon.png" />
        <title>Sakura Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We sell quality.</h1>
                       <p>Sakura Store makes dreams comes true with the payment you want.</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/iPhone-12Pro-799dalırs.png" alt="iPhone">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">iPhone</p>
                                        <p>Blast past fast.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/bbiMac-24inc-1299dalırs.png" alt="Mac">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Mac</p>
                                    <p>Say hello.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/Airpods-Max-599dalırs.png" alt="Music">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Music</p>
                                   <p>The music you love. On the go.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy <a href="https://sakurastore.in">Sakura</a> Store. All Rights Reserved.</p>
                   <p>This website is developed by Rana Selim & Ilkim Sevinç</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>