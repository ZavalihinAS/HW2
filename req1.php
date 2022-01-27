<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Homework 2 </title>
    <link rel="stylesheet" href="style1.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p="Требования к заданию"  ?> </h1>

        </div>


        <?php
    if ($_POST['ball'] < 5) {
        echo 'Вывод требований на 0 баллов.';
    } elseif ( $_POST['ball'] >= 5 && $_POST['ball'] < 10) {
        echo 'Вывод требований на 5 баллов.';
    } elseif ( $_POST['ball'] >= 10 && $_POST['ball'] < 15) {
        echo 'Вывод требований на 10 баллов.';
    } elseif ( $_POST['ball'] >= 15 && $_POST['ball'] < 20) {
        echo 'Вывод требований на 15 баллов.';
    } else {echo 'Вывод требований на 20 баллов.';};
    ?>

        
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>