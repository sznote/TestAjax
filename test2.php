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

/*
$arr4 = array ( 
        
         'host1' => array(
            'name' =>  'host1',
            'age'  =>   '10',
            'email' => 'host1@gmail.com'
	     )

	 'host2' => array(
             'name' => 'host2',
 	     'age' => '20',
             'email' => 'host2@gmail.com'
             )

	 'host3' => array(
             'name' => 'host3',
 	     'age' => '30',
             'email' => 'host3@gmail.com'
             )


);
*/
$meme = array ( 
            'host1' => array(
 	        'name' => 'host1',
                'age'  => '10'
	        ),

            'host2' => array(
 	        'name' => 'host2',
                'age'  => '15'
	         ),
               array(
		'name' => 'host3',
                'age'  => '20'
                  ),
               array(
		'name' => 'host4',
                'age'  => '30'
                  )


);
 echo json_encode($meme);

?>
