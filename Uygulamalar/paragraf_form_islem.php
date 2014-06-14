<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if( isset($_POST['gonder']) ){
            
            if( $_POST['adet']=='0' ){
                echo 'Lütfen bir adet seçin.';
            }else{
                //formdan gelen stringi, integera çevirdik
                $adet = (int)$_POST['adet'];
                
                for($x=1; $x <= $adet; $x++){
                    $renk1 = rand(0,255);
                    $renk2 = rand(0,255);
                    $renk3 = rand(0,255);
                    
                    echo "<p style='color:rgb($renk1,$renk2,$renk3)'>{$x}. paragraf.</p>\n";
                }
            }
            
        }
        ?>
    </body>
</html>
