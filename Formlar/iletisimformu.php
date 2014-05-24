<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="iletisim_formu_islem.php" method="POST">
            Ad: <br>
            <input type="text" name="ad" value="" />
            <br>
            Soyad: <br>
            <input type="text" name="soyad" value="" />
            <br>
            Email: <br>
            <input type="text" name="email" value="" />
            <br>
            Mesajınız: <br>
            <textarea name="mesaj" rows="4" cols="20">
            </textarea>
            <br>
            <input type="submit" value="Gönder" name="gonder" />
        </form>
    </body>
</html>
