<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //str_replace,bir metnin içinde, bir ifadeyi değiştirmek için kullanılır
        //str -> string(metin), replace->yer değiştirme, değiştirme
        $cumle="Ankara'nın plaka kodu 06. Ankara'nın önemli ilçeleri; Kızılay, Çankaya, Bahçelievler. Ankara'nın bürokrasisi ünlüdür.";
        echo $cumle;
        echo '<br>';
        $yeni_cumle= str_replace('Ankara', 'İstanbul', $cumle);
        echo $yeni_cumle;
        ?>
    </body>
</html>
