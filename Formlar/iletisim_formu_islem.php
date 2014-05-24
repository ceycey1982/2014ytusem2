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
            echo 'Adınız: ' . $_POST['ad'] . '<br>';
            echo 'Emailiniz: ' . $_POST['email'] . '<br>';
            echo 'Form verileri geldi.';
            echo '<br>';
            
            if(strpos($_POST['email'], '@') == false ){
                echo 'Email geçerli değil.';
            }
        }
        ?>
    </body>
</html>
