<?php 
    //name piu' di 3 caratteri
    $name = ( isset($_GET['name']) ) ? $_GET['name'] : '' ;
    //mail contiene . e @
    $mail = ( isset($_GET['mail']) ) ? $_GET['mail'] : '' ;
    //numero
    $age = ( isset($_GET['age']) ) ? $_GET['age'] : '' ;
    $age = intval($age);

    $si = "accesso riuscito";
    $no = "accesso negato";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <p>
        <?php     
            if(strlen($name) > 3 && strpos($mail, '@') == true && strpos($mail, '.') == true && is_int($age) == true && $age !== 0){
               echo $si;
            }else{
                echo $no;
            }           
        ?>
    </p>
    
</body>
</html>