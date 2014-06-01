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
        if(isset($_POST['gonder'])){
            echo 'Siparişiniz ulaşmıştır <br>';
            
           $tutar=$_POST['fiyat']*$_POST['adet'];
          
           echo "Sipariş tutarı: $tutar TL <br>";
          
           if($tutar>50){
             
               echo "Sipariş tutarı 50 TL üzerinde olduğu için kargo ücretsizdir. <br>";
           }
           else {
   
               echo "Sipariş tutarı 50 TL altında olduğu için kargo ücretlidir. <br>";
           }
                                    
        }
            
        ?>
    </body>
</html>
