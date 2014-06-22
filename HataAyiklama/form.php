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
        <form action="islem.php" method="POST">
            Ad:
            <br>
            <input type="text" name="ad" value="" />
            <br>
            Soyad:
            <br>
            <input type="text" name="soyad" value="" />
            <br>
            Şehir:
            <br>
            <select name="sehir">
                <option value="0">Seçiniz</option>
                <option value="1">Ankara</option>
                <option value="2">İzmir</option>
                <option value="3">İstanbul</option>
            </select>
            
            <br><br>
            <input name="gonder" type="submit" value="gonder" />
        </form>
    </body>
</html>
