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
        <form action="isbasvuru_form_islem.php" method="POST">
            Ad:<br>
            <input type="text" name="ad" value="" />
            <br>
            Soyad:<br>
            <input type="text" name="soyad" value="" />
            <br>
            Eposta:<br>
            <input type="text" name="eposta" value="" />
            <br>
            Doğum tarihi:<br>
            <input type="text" name="dogumtarihi" value="" />
            <br>
            Telefon:<br>
            <input type="text" name="tel" value="" />
            <br>
            Yabancı dil 1:<br>
            <input type="text" name="yd1" value="" />
            <br>
            Yabancı dil 2:<br>
            <input type="text" name="yd2" value="" />
            <br>
            Başvurmak istediğiniz pozisyonlar:<br>
            <textarea name="pozisyonlar"></textarea>
            <br>
            <br>
            <input type="submit" value="Gönder" name="gonder" />
        </form>
    </body>
</html>
