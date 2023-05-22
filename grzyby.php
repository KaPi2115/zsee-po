<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

    $conn = mysqli_connect("localhost", "root", "", "dane2");

    if($conn->connect_error){
        die("Połączenie nie udane z powodu " . $conn->connect_error);
    }
    $sql = "SELECT nazwa_pliku, potoczna FROM grzyby";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
        echo '<img src="' . $row["nazwa_pliku"] . '" title="' . $row["potoczna"] . '">' . "<br>";
    }

    ?>
</body>
</html>