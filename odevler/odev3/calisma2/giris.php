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
        <form action="giris_islem.php" method="POST">
            Kullanıcı adı:<br>
            <input type="text" name="kulad" value="" />
            <br>
            Şifre:<br>
            <input type="password" name="sifre" value="" />
            <br>
            <input type="checkbox" name="benihatirla" value="1" id="benihatirla" /> <label for="benihatirla">Beni hatırla</label>
            <br>
            <input type="submit" value="Giriş" name="giris" />
        </form>
    </body>
</html>
