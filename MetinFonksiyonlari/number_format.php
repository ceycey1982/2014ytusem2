<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //number_format fonksiyonu, verilen bir sayısal ifadeyi
        //biçimlendirmek için kullanılır
        
        //sadece binerli olarak biçimlendirilir
        echo number_format("1000000") . "<br>";
        
        //sayıyı biçimlendirir ve sonuna 2. paratrede belirtilen adet kadar
        //0 ekler
        echo number_format("1000000", 2) . "<br>";
        
        //sayıyı binerli olarak biçimlendirir ve 3. parametredeki karakteri
        //ondalık kısmı ayırmak için kullanır.
        //4. parametreyi ise binler basamakları için kullanılır
        echo number_format("1000000", 2, ",", ".");
        ?>
    </body>
</html>
