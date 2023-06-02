<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 3</title>
    <style>
        h1{
            color:Green
        }
    </style>
</head>
<body>
    <?php
    echo "<h1>Nomor 3</h1>";
    $Nama = array("A", "F", "R", "A");
    $Kota = array("Lampung", "Riau", "Jambi", "Bengkulu", "Makassar", "Kendari", "Gorontalo", "Samarinda", "Papua", "Nusa Tenggara Barat");
    $Founded = FALSE;
    for ($i = 0 ; $i < count($Nama) ; $i++){
        for ($j = 0 ; $j < count($Kota) ; $j++){
            if (substr($Kota[$j], 0, 1) == $Nama[$i]){
                $KKN = $Kota[$j];
                $Founded = TRUE;
                break;
            }
        }
        if ($Founded){
            break;
        }
    }
    echo "Kota KKN : " . $KKN;
    
    ?>
</body>
</html>