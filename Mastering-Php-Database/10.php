<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

	
	<?php  
class Chien {
    public $eyes_color;
    public $nose_color;
    public $fur_color;

    function set_name($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
  }
  
  $eyes_color = new Chien();
  $nose_color = new Chien();
  $fur_color = new Chien();
  $eyes_color->set_name('my dog have black eyes,');
  $nose_color->set_name('and black nose,');
  $fur_color->set_name('bleu fur.');
  echo $eyes_color->get_name();
  echo "<br>";
  echo $nose_color->get_name();
  echo "<br>";
  echo  $fur_color->get_name();
  echo "<br>";
	/*  
	Étape 1: Créez une classe appelée Chien

	Étape 2: Définissez certaines propriétés pour le Chien, l'exemple, la couleur des yeux, le nez ou la couleur de la fourrure

	Étape 4: Créez une méthode nommée AfficherTout qui fait écho à toutes les propriétés

	Étape 5: Instanciez la classe / créez l'objet et appelez-le pitbull

	Étape 6: Appelez la méthode AfficherTout
	
	*/
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>