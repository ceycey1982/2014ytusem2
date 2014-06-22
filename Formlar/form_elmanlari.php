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
        <form action="form_elemanlari_islem.php" method="POST" enctype="multipart/form-data">
            Anahtar 1: 
            <input type="text" name="anahtar1" value="" />
            <br>
            
           <input type="hidden" name="anahtar2" value="698" />
            
           Anahtar 3:<br>
           <textarea name="anahtar3" rows="4" cols="10">
           </textarea>
            
           <br>
           Anahtar 4:
           <select name="anahtar4">
               <option value="0">Seçiniz</option>
               <option value="1">Ayakkabı</option>
               <option value="65">Gömlek</option>
           </select>
           <br>
           
           Hoşlandığınız müzik türleri: 
           <input id="muzik1" type="checkbox" name="anahtar5[]" value="65" /> <label for="muzik1">Jazz</label>
           <input id="muzik2" type="checkbox" name="anahtar5[]" value="98" /> <label for="muzik2">Pop</label>
           <input id="muzik3" type="checkbox" name="anahtar5[]" value="6458" /> <label for="muzik3">R&B</label>
           
           
           <br>
           Kan grubunuz: 
           <input type="radio" name="anahtar6" value="ARH+" /> ARH+
           <input type="radio" name="anahtar6" value="ARH-" /> ARH-
           <input type="radio" name="anahtar6" value="BRH+" /> BRH+
           <input type="radio" name="anahtar6" value="0RH+" /> 0RH+
           
           <br>
           
           
           
            <br>
            <br>
            <input type="submit" value="Gönder" />
            
        </form>
    </body>
</html>
