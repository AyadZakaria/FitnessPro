<?php
    $xname = $_GET["xname"];
    $note = [
        "Arabe" => "15",
        "Français" => "18",
        "Anglais" => "14",
        "Math" => "12"
    ];
    echo $note[$xname];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="koko.php" method="GET">
        <input type="text" name="xname">
        <input type="submit">
    </form>
    
</body>
</html>