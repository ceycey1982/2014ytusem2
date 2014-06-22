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
        <form action="uyelik_formu_islem.php" method="POST" enctype="multipart/form-data">
            <div>
                <h1>Üyelik Formu</h1>
                
                <div>
                    Adınız: <br>
                    <input type="text" name="ad" value="" />
                </div>
                                
                <div>
                    Soyadınız: <br>
                    <input type="text" name="soyad" value="" />
                </div>
                
                <div>
                    Profil Fotoğrafınız: <br>
                    <input type="file" name="foto" value="" />
                </div>
                
                <br>
                
                <div>
                    <input type="submit" name="gonder" value="Gönder" />
                </div>               
                
            </div>
        </form>
    </body>
</html>
