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
        <form action="paragraf_form_islem.php" method="POST">
            <select name="adet">
                <option value="0">Adet seçin</option>
                
                <?php
                for( $x=5; $x<=30; $x+=5 ){
                    echo "<option value='$x'>$x kere</option>";
                }
                ?>
                
                <input type="submit" value="Gönder" name="gonder" />
                
            </select>
            
        </form>
    </body>
</html>
