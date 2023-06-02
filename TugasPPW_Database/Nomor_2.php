<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 2</title>
    <style>
        h1{
            color:red
        }
    </style>
</head>
<body>
    <?php    
    echo "<h1>Nomor 2</h1>";
    $Kelompok = array(
        array("Afra",  496428),
        array("Dhanu", 499364),
        array("Ami", 494455),
        array("Ashila", 493981),
        array("Kinanthy", 494423)
    );
    function assign($index){
        global $Kelompok;
        if ($Kelompok[$index][0] == "Afra"){
            array_push($Kelompok[$index], "Project Manager");
        }
        else {
            if ($Kelompok[$index][1] % 2 == 0){
                array_push($Kelompok[$index], "Back-end Developer");
            } else {
                array_push($Kelompok[$index], "Front-end Developer");
            }
        }
    }

    for ($i = 0 ; $i < count($Kelompok) ; $i++){
        assign($i, $Kelompok);
        echo "Nama : " . $Kelompok[$i][0] . ", Nim : " . $Kelompok[$i][1] . ", Job : " . $Kelompok[$i][2] . "<br><br>";
    }
    ?>
</body>
</html>