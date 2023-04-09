<?php


	include'includes/database.php';
	global $db;

	
	//collier mâle
	$c = $db->prepare('SELECT bague FROM collier WHERE sexe = "male"');

	$executeIsOk = $c->execute();

	$colliermales = $c->fetchAll();

	//collier femelle
	$c = $db->prepare('SELECT bague FROM collier WHERE sexe = "femelle"');

	$executeIsOk = $c->execute();

	$collierfemelles = $c->fetchAll();


	//inseparable male

	$i = $db->prepare('SELECT bague FROM inseparable WHERE sexe = "male"');

	$executeIsOk = $i->execute();

	$inseparablemales = $i->fetchAll();

	//inseparable femelle

	$i = $db->prepare('SELECT bague FROM inseparable WHERE sexe = "femelle"');

	$executeIsOk = $i->execute();

	$inseparablefemelles = $i->fetchAll();

?>


<!DOCTYPE html>
<html>
	

	<head>
		<meta charset="utf-8">
	</head> 
		
		
		<body>
	 
	 		<h1 class="headline">
					Welcome !
			</h1>


			<?php include 'includes/menunavigation.php';?>
              

            <h1>Liste des oiseaux</h1>

            <!-- collier -->
            
            <h2>Collier</h2>

			<!-- male -->
			<h3>Mâle</h3>
			
			<?php foreach ($colliermales as $colliermale): ?>

	            <li>

	            		<?= $colliermale['bague'] ?>

	            </li>
            

            <?php endforeach; ?>

			<!-- femelle -->
			<h3>Femelle</h3>
			<?php foreach ($collierfemelles as $collierfemelle): ?>

	            <li>

	            		<?= $collierfemelle['bague'] ?>

	            </li>
            

            <?php endforeach; ?>


             <!-- inseparable -->
             <h2>Inseparable</h2>
			 
			 <!-- male -->

			<h3>Mâle</h3>
            <?php foreach ($inseparablemales as $inseparablemale): ?>

	            <li>

	            		<?= $inseparablemale['bague'] ?>

	            </li>
            

            <?php endforeach; ?>
			
			<!-- femelle -->

			<h3>Femelle</h3>
			<?php foreach ($inseparablefemelles as $inseparablefemelle): ?>

	            <li>

	            		<?= $inseparablefemelle['bague'] ?>

	            </li>
            

            <?php endforeach; ?>

            <h2>
            	
            	Pour voir la fiche de l' oiseau

            </h2>

            	<form method="POST">

	            	<input type="text" name="espece" id="espece" placeholder="Espece" required>
	            	<input type="text" name="bague" id="bague" placeholder="Numéro de bague" required>
	            	<input type="submit" name="submit" id="submit">

            	</form>

            	<?php include 'includes/login.php'; ?>
            	

		</body>

</html>