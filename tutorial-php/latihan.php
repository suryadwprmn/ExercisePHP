<!DOCTYPE html>
<html>
<body>

<nav>
    <ul>
        <li><a href="">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Contact</a></li>
    </ul>
</nav>
<h1>Halo Bang</h1>

<?php
$color = "red";
echo "My car is " . $color ."<br>";

$bilangan_1 = 5;
$bilangan_2 = 10;
$jumlah = $bilangan_1 + $bilangan_2;

echo "<h1>" .$bilangan_1. "</h1>";
echo "Hasil dari pertambahan " . $jumlah ."<br>";  

echo $bilangan_1 + $bilangan_2;

$animals = array("Sapi", "Kerbau","Kambing");
echo "<p> Hewan pemakan rumput ada " . implode(",", $animals) . "<p>";
var_dump($animals);
echo "<br>";
?>

<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>
<?php 
echo "<br>";
$bilangan = array(1,2,3,4,5,6,7,8,9,10);
foreach($bilangan as $bil){
    echo "Looping foreach bilangan : " . $bil . "<br>";
}
?>
<?php 
$nilai 
?>


</body>
</html>