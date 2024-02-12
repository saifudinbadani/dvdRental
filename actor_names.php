<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   <?php
    require 'index.php';
    foreach ($allData as $oneData) {
         echo '<h1>'.$oneData->first_name.'</h1> <br>';
    }
    ?>
</body>

</html>