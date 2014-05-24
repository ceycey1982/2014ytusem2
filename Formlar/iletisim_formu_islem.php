<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //sayfaya, iletişim formu geldi mi?
        //gonder butonu kontrol ediliyor
        if( isset($_POST['gonder']) ){
            echo 'Adınız: ' . $_POST['ad'];
            echo '<br>';
            echo 'Form verileri geldi.';
        }
        ?>
    </body>
</html>
