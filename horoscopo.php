<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $annoNac=$_GET['anno'];
        $chinoNum=$annoNac%12;
        $signos=["mono","gallo","perro","cerdo","rata","buey","tigre","conejo","dragon","serpiente","caballo","cabra"];
        $chinoAnimal=$signos[$chinoNum];
        echo ("Tu animal es: ".strtoupper($chinoAnimal));
    ?>
</body>
</html>