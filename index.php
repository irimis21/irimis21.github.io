<!DOCTYPE html>
<html>
        

        <head>
 	      <meta charset="utf-8">
 	      <title>titre</title>
        </head>
        

        <body>
 	
                <?php 
                        include 'includes/menunavigation.php'; 
                        include 'includes/database.php';
                        global $db;
                ?>
                
                <form method="post">
                        
                        <input type="text" name="bague" id="bague" placeholder="Numéro de bague" required>
                        <input type="text" name="espece" id="espece" placeholder="Espece" required>

                        <input type="text" name="age" id="age" placeholder="Age de l'oiseau">
                        <input type="text" name="sexe" id="sexe" placeholder="Sexe de l'oiseau">

                       <!-- input type="checkbox" name="check1" id="check1" value="value1" </div> -->

                        <input type="submit" name="formsend" id="formsend">

                </form>

                <!-- ?php

                if(isset($_POST['check1']))
                {
                       if ($_POST['check1'] == 'value1') 
                       {
                                echo "cette check box foctionne";
                       }
                }

                ?>-->

                <?php include 'includes/signin.php';?>

        
        </body>
 
</html>