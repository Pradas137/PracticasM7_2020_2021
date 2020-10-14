<?php
    $fp = fopen("Carrito.txt", 'rb');
?>
 
<html>
   <head>
   <title></title>
   <link rel="stylesheet" type="text/css" href="CSS/Botiga.css" />
   </head>
   <body>
      <div class="container">
         <h1>Pedido</h1>
         <?php
            if(!$fp){
              echo '<p><strong>No orders pending.'
              .'Please try again later</strong></p>';
             exit;
            }
            flock($fp, LOCK_SH);
            while (!feof($fp)){
               $order = fgets($fp, 999);
               echo $order. "<br />";
            }
           flock($fp, LOCK_UN);
           fclose($fp);
         ?>
     </div>
   </body>
</html>