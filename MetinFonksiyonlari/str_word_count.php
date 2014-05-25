<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //str_word_count bir metin içindeki sözcük sayısını verir
        $cumle='Yoğurdu sarımsaklasak da mı saklasak.';
        echo str_word_count($cumle);
        echo '<br>';
        //yukarıdaki ifadede ğ karakterinden dolayı hatalı sonuç çıkacaktır.
        
        //türk alfabesine uygun kelime sayımı için aşağıdaki yol izlenebilir
        $kelimeler=  explode(' ', $cumle);
        echo count($kelimeler);
        ?>
    </body>
</html>
