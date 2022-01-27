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
         
          <h1>  <?php  echo $p="Ввести количество баллов"  ?> </h1>

        </div>


        <form action="req1.php" method="post">
 <p>Сколько баллов мы хотим получить за задание: <input type="number" name="ball" /></p>
  <p><input type="submit" /></p>
</form>

       
            
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
