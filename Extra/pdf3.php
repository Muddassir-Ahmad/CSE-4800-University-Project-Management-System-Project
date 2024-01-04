<html>
    <head>
        <meta charset="utf-8">
        <title>PDF</title>
    </head>


    <body>
    <?php
    

    $pdffile='BDRAILWAY_TICKET2.pdf';
    $pdffilename='BDRAILWAY_TICKET2.pdf';

    header('Content-type:application/pdf');
    
    header('Content-Desposition:inline;filename="'.$pdffilename.'"');
    header("Content-Yransfer-Enciding:binary");
    header('Accept-Range:bytes');
    @readfile($pdffile);

    ?>




    </body>


</html>