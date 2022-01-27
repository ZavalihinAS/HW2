<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style1.css" />
</head>
<body>
<div class="knowledge">

    <?php
        echo 'Сумма ', $_POST['n1'] + $_POST['n2'],'<br>';
        echo 'Разность ', $_POST['n1'] - $_POST['n2'], '<br>';
        echo 'Произведение ', $_POST['n1'] * $_POST['n2'], '<br>';
        echo 'Деление ', $_POST['n1'] / $_POST['n2'], '<br>';
        echo 'Возведение в степень ', $_POST['n1'] ** $_POST['n2'], '<br>';
       
    ?>       
</div>
</body>