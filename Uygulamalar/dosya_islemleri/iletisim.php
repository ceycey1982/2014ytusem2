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
        <h1>İletişim Formu</h1>
        <form action="iletisim_islem.php" method="POST">
            Adınız:<br>
            <input type="text" name="ad" value="" />
            <br>
            Soyadınız:<br>
            <input type="text" name="soyad" value="" />
            <br>
            Telefon:<br>
            <input type="text" name="tel" value="" />
            <br>
            Mesajınız:<br>
            <textarea name="mesaj" rows="4" cols="20"></textarea>
            <br>
            <input type="submit" value="Gönder" name="gonder" />
        </form>
    </body>
</html>
