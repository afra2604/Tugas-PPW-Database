<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 1</title>
    <style>
        h1{
            color:blue
        }
    </style>
</head>
<body>
    <?php
    echo "<h1>Nomor 1</h1>";
    $Name = "Afra";
    echo "$Name<br>";
    if (strlen($Name) == date("d") - 2) {
        echo "Berhasil";
    } else if (strlen($Name) < date("d")){
        echo "Sedikit Lagi";
    } else {
        echo "Coba Lagi";
    }
    ?>
</body>
</html>