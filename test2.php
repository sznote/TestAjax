<?php

 $arr = array("a" => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5 );


$arr2 = array(
    array(
        "region" => "valore",
        "price" => "valore2"
    ),
    array(
        "region" => "valore",
        "price" => "valore2"
    ),
    array(
        "region" => "valore",
        "price" => "valore2"
    )
);
$arr3 = array (
	"id" => 18,
	"first_name" => "Dwayne",
	"last_name" => "Hicks",
	"email" => "dwaynehicks@usssulaco.com"
);


 echo json_encode($arr);
// echo json_encode($arr2);
// echo json_encode($arr3);

?>
