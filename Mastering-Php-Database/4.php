<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  
//1 
function addNumbers(int $a, int $b) {
	return $a + $b;
  }
  echo addNumbers(5, 5); 
//2 
function addNumber(int $a, int $b) {
	return $a + $b;
 }
  $f=addNumber(5,8); 
  echo $f
/*  
	Étape 1: Définir une fonction et qui renvoie un calcul de 2 nombres

	Étape 2: Créez une fonction qui transmet des paramètres et appelez-la à l'aide de valeurs de paramètres

 */
	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php" ?>