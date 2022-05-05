<!-- 15 numeri casuali non ripetuti -->
<?php 
    $numeriRandom = [];      

    function getRandom(){    
        return rand(1,100);
    }
    
    for( $i = 0; $i < 15; $i++){
        if(in_array(getRandom(), $numeriRandom) == false){
            array_push($numeriRandom, getRandom());
        }else{
            $i = ($i - 1);
        }
    }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>    
    <p>
        <?php 
            echo var_dump($numeriRandom);
        ?>
    </p>
    <?php 
        echo count($numeriRandom);         
    ?>

</body>
</html>