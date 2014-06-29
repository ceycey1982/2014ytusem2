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
        <h1>Duyuru Ekle Formu</h1>
        
        <form action="duyuru_form_islem.php" method="POST" enctype="multipart/form-data">
            Duyuru Başlığı:<br>
            <input type="text" name="baslik" value="" />
            <br>
            Duyuru İçeriği:<br>
            <textarea name="icerik" rows="4" cols="20"></textarea>
            <br>
            Duyuru Eki:<br>
            <input type="file" name="ek" value="" />
            <br>
            <input type="submit" value="Kaydet" name="kaydet" />
        </form>
    </body>
</html>
