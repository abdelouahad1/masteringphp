<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">
	
	
	<?php  
//1
$variable1 ="bonjour";
//2 
if (CRYPT_STD_DES == 1)
{
echo "Standard DES: ".crypt('abdelouahad','st')."\n<br>";
}
else
{
echo "Standard DES not supported.\n<br>";
}
//3 
$h=crypt('abdelouahad','st');
//4 
echo $h;
	/*  
	Étape 1 - Créer une variable avec du texte comme valeur

	Étape 2 - Utilisez la fonction crypt() pour le crypter

	Étape 3 - Attribuez le résultat de cryptage à une variable

	Étape 4 - Échoyez de la variable 
	*/
	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>