<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul type = "square">
        <li>Wielkopolska</li>
        <ol type="1">
            <li>Poznań</li>
            <li>Gniezno</li>
        </ol>
        <li>Dolnośląskie</li>
        <li>Zachodniopomorskie
            <ol>
                <li>Stagrad</li>
            </ol>
        </li>
    </ul>


    <?php
        include "./list.php";
    ?>
    
</body>
</html>