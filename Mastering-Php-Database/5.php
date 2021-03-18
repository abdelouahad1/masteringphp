<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 
echo(abs(-4.7)). "<br>"; 
//2 
echo strlen("bonjour!"). "<br>";
//3 
$players = array("messi", "xavi", "iniesta");
echo "I like " . $players[0] . ", " . $players[1] . " and " . $players[2] . ".";

/*  
	Étape 1: utilisez une fonction mathématique prédéfinie ici et faites-en écho

	Étape 2: utilisez une fonction de chaîne prédéfinie ici et faites-en écho

	Étape 3: Utilisez une fonction Array prédéfinie ici et faites-en écho 

 */

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>