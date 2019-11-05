<?php  

	$i = 1;
 	while ($i <= 100) {

if ($i % 3 == 0 && $i % 5 ==0) {
		echo "Fizzbuzz<br>";
			}

else if ($i % 3 == 0) {

	echo "Fizz<br>";
}

else if ($i % 5 == 0) {
	echo "buzz<br>";
}

else{
 	echo $i."<br>";
 }

 	$i = $i + 1;
 }

?>