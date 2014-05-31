<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <?php
        $sayi = rand(1, 5);
        ?>
        
        <style>
            body{
                background: url(resimler/<?php echo $sayi; ?>.jpg);
                background-size: cover;
                color:white;
            }    
        </style>
        
    </head>
    <body>
Web sitesine hoşgeldiniz.
    </body>
</html>
