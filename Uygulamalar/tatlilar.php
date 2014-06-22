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
        <?php
        // form checkbox incelemesi için yapılmıştır
        ?>
        
        <form action="tatlilar_islem.php" method="POST">
            <h1>Sevdiğiniz tatlılar hangileridir?</h1>
            <div>
                <div>
                    <input id="tatli1" type="checkbox" name="tatlilar[]" value="Kazandibi" />
                    <label for="tatli1">Kazandibi</label>
                </div>             
                
                <div>
                    <input id="tatli2" type="checkbox" name="tatlilar[]" value="Künefe" />
                    <label for="tatli2">Künefe</label>                    
                </div>
                
                <div>
                    <input id="tatli3" type="checkbox" name="tatlilar[]" value="Baklava" />
                    <label for="tatli3">Baklava</label>                    
                </div>                
                
                <div>
                    <input type="submit" value="Gönder" name="gonder" />
                </div>
            </div>
        </form> 
    </body>
</html>
