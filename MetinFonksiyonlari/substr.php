<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //substr, bir ifadenin yalnızca bir bölümünü almak için kullanılır
        $makale='Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor eleifend nisi, sed vestibulum tellus auctor placerat. Praesent in consectetur nisi. Cras lacinia purus vitae dolor semper ornare. Quisque congue lobortis quam, sit amet accumsan nibh fringilla sed. Donec rhoncus lorem quis arcu eleifend, sed blandit urna tempor. Suspendisse a aliquam massa. Cras laoreet, quam eget eleifend tristique, dui justo cursus massa, eu ullamcorper tortor sapien ultricies risus. Nulla at lorem non mi egestas laoreet ut at felis. Donec tincidunt risus quam, eget ultrices tortor ullamcorper sed. Donec mollis massa vel dapibus laoreet. Donec ut posuere arcu, at malesuada ligula. Donec dignissim nisi non purus volutpat, at pulvinar nibh imperdiet. Nunc augue massa, tempor vitae tincidunt rhoncus, iaculis eget libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.';
        $ozet=  substr($makale, 0, 100);
        
        echo 'Makalenin orjinal metni: ' . $makale;
        
        echo '<br><br>';
        
        echo 'Makalenin özet metni: ' . $ozet;


        //Not:
        //Türkçe harf içeren ifadelerde substr için
        //mb_substr fonksiyonu kullanılmalıdır.
        echo '<br><br><br>';
        $cumle='yoğurt';
        echo mb_substr($cumle, 0, 4, 'utf-8');
        ?>
    </body>
</html>
