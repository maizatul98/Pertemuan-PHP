<?php  

class Car {
	public $name, $brand, $colour,
	       $speedMaximum,
	       $totalPassenger;

	public function increaseSpeed() {
		return "Your speed has increased!";
	} 
}

class SportCar extends Car {
	public $turbo = false;

	public function useTurbo(){
		return "Your turbo has been used!";
	}
}


$car1 = new SportCar ();

echo $mobil1->increaseSpeed();
echo "<br>";
echo $mobil1->jalankanTurbo();
?>