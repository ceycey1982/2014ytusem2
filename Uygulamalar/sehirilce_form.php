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
        <form action="sehirilce_form_islem.php" method="POST">
            <select name="sehir">
                <option value="0">Seçiniz</option>
                <option value="1">Ankara</option>
                <option value="2">İstanbul</option>
                <option value="3">İzmir</option>
            </select>
            <br>
            <input type="submit" value="Gönder" name="gonder" />
        </form>
    </body>
</html>
