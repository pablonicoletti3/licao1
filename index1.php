<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    if(isset($_POST["num"])){
        echo $_POST["num"];

        $num=$_POST["NUM"];
        if($num % 2==0){
            echo "o numero informado é par";
        }else{
            echo"o numero informado é ímpar";
        }
    }
        
    ?>
</body>
</html>