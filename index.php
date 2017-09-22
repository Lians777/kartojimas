
<pre>
<?php 

for ($i=200; $i >=0 ; $i-=5) { 
	echo "$i ";
}

$masyvas = ["jautiena" => "250", "pupeles" => "300", "vanduo" => "500", "pomidorai" => "300", "paprika" => "100"];

sort($masyvas);

print_r($masyvas);

shuffle($masyvas);

print_r($masyvas);


$a = 454;


if (isset($a)) {
	echo "tru";
}

$a = [4, 5, 84, 87, 6, 9, 11];

$sk = 4;

function rask ($masyvas, $skaicius) {

	if (in_array($skaicius, $masyvas)) {
		echo "radau";
	}	else {
		echo "neradau";

	}
	
}

rask($a, $sk);


/*function spindulys ($r);

$s = pi () * pow($r,2);


$pi = 3.1415926535898;


function trapecija ($a, $b, $h);

$s = ($a + $b)/2 * $h;

return ($s,2);

echo trapecija (10,5);

$a = 0.3;
$b = 0.2;
$d = 5000;
function palet ($a, $b, $c, $d);{

return ($d)/($a * $b)/500;

}*/

$nuorodos = [
['name' => 'Delfi', 'url' => 'https://www.delfi.lt/'],
['name' => '15min', 'url' => 'https://www.15min.lt/']
];

foreach ($nuorodos as $nuoroda) {
	echo '<a href="'.$nuoroda['url'].'"> '.$nuoroda['name'].'</a>';
}



function format_number ($t){

	return str_replace("+370", "8", $t);
}
$number = "+370 677 77777 <br>";
echo format_number($number);


$d1=strtotime("december 24");
$d2=ceil(($d1-time())/60/60/24);
echo "Likes laikas iki kaledu " . $d2 ." dienos.<br>";


$d1=strtotime("september 1, + 1 year");
$d2=ceil(($d1-time())/60/60/24);
echo "Likes laikas iki rugsejo pirmos dienos " . $d2 ." dienos.<br>";


$numbers = array(4, 6, 2, 22, 11, 5, 7, 9, 8, 3, 1);
sort($numbers);

/*$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";

    if (isset($numbers)) {
    	
    }
}*/

foreach ($numbers as $key => $value) {
	if ($key != $value) {
		echo "truksta"; .$key
		exit();
	}
}
 ?> 