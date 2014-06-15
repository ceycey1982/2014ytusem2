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
        $meyveler = array( 
            array('ad'=>'elma','birimfiyat'=>200,'stokadedi'=>100000),
            array('ad'=>'armut','birimfiyat'=>220,'stokadedi'=>10000),
            array('ad'=>'muz','birimfiyat'=>180,'stokadedi'=>200000),
        );
        
        foreach ($meyveler as $anahtar => $deger) {
            foreach ($deger as $anahtar2 => $deger2) {
                echo $anahtar2. '=' . $deger2 . '<br>';
            }
            echo '---------------<br>';
        }
        ?>
    </body>
</html>
