<?php  
//$x = 1;

// $aplikasi[1] = "gtAkademik";
// $aplikasi[2] = "gtFinansi";
// $aplikasi[3] = "gtPerizinan";
// $aplikasi[4] = "eCampuz";
// $aplikasi[5] = "eOviz";
 
// while($aplikasi<=5) {
  // print_r($aplikasi);
// } 
// $x = 8;
	// $y = 3;
// echo floor($x / $y);

// foreach($aplikasi as $airport) {
  // if($content = getData($airport)) {
    // return $content;
  // }
// }

for( $i=1; $i<=50; $i++ ){
	
	if($i%3==0 && $i%5!=0){
		echo "Foo";
	}
	if($i%5==0 && $i%3!=0){
		echo "Bar";
	}
	if($i%3==0 && $i%5==0){
		echo "FooBar";
	}
	echo $i."<br>";
	
}
?>  