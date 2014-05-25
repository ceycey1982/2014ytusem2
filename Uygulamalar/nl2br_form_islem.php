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
        echo 'Adınız: ' . $_POST['isim'];
        echo '<br>';
        echo 'Yorumunuz:';
        echo '<br>';
        echo nl2br($_POST['yorum']);
        ?>
    </body>
</html>
