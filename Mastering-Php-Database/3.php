<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  
//1 
$t = "I love greenchip :p";
if ($t) {
  echo "I love greenchip :p";
} else {
  echo "I don't";}
  //2 
  for ($i = 1; ; $i++) {
	  if ($i > 10) {
		  break;
	  }
	  echo $i;
	  }
	
	//3 
	switch ($i) {
		case "apple":
			echo "i est une pomme";
			break;
		case "bar":
			echo "i est une barre";
			break;
		case "cake":
			echo "i est un gateau";
			break;
		case 0:
			echo "i égal 0";
			break;
		case 1:
			echo "i égal 1";
			break;    
	}
	?>

     
        










</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>