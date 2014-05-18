<h1>String veri tipi</h1>
<?php
//Aşağıdaki değişken değeri içinde sadece karakterler olduğu için tek tırnak kullanılmalıdır.
$konu = 'Php de Veri Tipleri';

//tarih değişkeni string(metin) tipinde veri içermektedir.
$tarih = '18 Mayıs 2014';

//ogrenci değişkeni 14 karakterden oluşan string tipinde veri içermektedir.
$ogrenci = 'Orhan Gencebay';

$not = '60';

echo 'Php eğitimine başladık!';

/*
 * Çok satırlı yorum koyulabilir
 * Aşağıdaki komut, çift tırnak ile echo komutuna örnektir.
 * Çift tırnak kullanıldığı zaman yazdırılacak metin içerisinde 
 * değişkenler varsa, o değişkenin değeri ifade içine yazdırılır.
 */
echo "Öğrenci adı: $ogrenci Notu: $not";

/*
 * Çift tırnak içerisine yazılan ifadelerde özel karakterler kullanılabilir.
 * Örnek özel ifadeler:
 * \n new line->yeni satır karakteridir ve alt satıra geçiş için kullanılır
 * \t tab tab boşluğu eklemek için kullanılır
 * \" çift tırnak veya tek tırnak yazdırmak için kullanılır
 */
echo "\n<br> \"Ad\": \t Ferdi \n \"Soyad\": \t Tayfur";