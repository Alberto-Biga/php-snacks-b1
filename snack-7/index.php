<!-- stampare nome, cognome e media voti -->
<?php 
    $alunni = [
        [
            "nome" => "Alberto",
            "cognome" => "Biga",
            "voti" => [6, 8, 4, 5, 3]
        ],
        [
            "nome" => "Marianna",
            "cognome" => "Biga",
            "voti" => [8, 5, 7, 9, 10]
        ],
        [
            "nome" => "Fulvio",
            "cognome" => "Biga",
            "voti" => [6, 5, 4, 10, 7]
        ],
        [
            "nome" => "Mariella",
            "cognome" => "Giraudo",
            "voti" => [9, 7, 8, 6, 10]
        ]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
</head>
<body>
    <p>
        <?php 
            for($i = 0; $i < count($alunni); $i++){
                echo $alunni[$i]['nome'] . " " . $alunni[$i]['cognome'] . " " . $alunni[$i]['voti'][$i] . "<br>";
            }
        ?>
    </p>
</body>
</html>