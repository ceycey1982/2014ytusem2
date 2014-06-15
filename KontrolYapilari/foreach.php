<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //foreach dizi değişkenlerlle kullanılır.
        //foreach döngüsü, kendisine verilen dizi değişken eleman sayısınca 
        //tekrar eder
        
        $araclar = array(
            array('Opel','Astra',40000,2011), 
            array('Seat','Leon',36000,2012),
            array('Toyota','Yaris',40000,2011)
        );
        
        echo 'Toplam araç sayısı: ' . count($araclar);
        echo "<br>\n";
        
        $sira=1;
        
        foreach ( $araclar as $arac ){
            echo $sira . ". aracımızın özellikleri:<br>\n";
            echo 'Marka: ' . $arac[0];
            echo "<br>\n";
            echo 'Model: ' . $arac[1];
            echo "<br>\n";
            echo 'Fiyat: ' . $arac[2];
            echo "<br>\n";
            echo 'Üretim Yılı: ' . $arac[3];

            echo "<br>\n";
            echo '-----------------------';    
            echo "<br>\n";
            $sira++;
        }
       
        ?>
    </body>
</html>
