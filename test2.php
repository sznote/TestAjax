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
              array(
 	        'name' => 'host1',
                'age'  => '10'
	        ),

               array(
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
//https://www.udemy.com/blog/json-array/
$mydata = array (
           'customer' => array( 
	       	'firstname' => 'Jason',
                'lastname' => 'Smith',
                'firstname' => 'sahai',
		'lastname' => 'srichock' 
		)
	   
	

);

$data['customer'] = array (
		       array(
		          'firstname' => 'jason',
                          'lastname' => 'smith'
		       ),
		       array(
			  'firstname' => 'sahai',
			  'lastname' => 'srichock'
			),
                       array(
                          'name' => array('John', 'Smith'),
                          'age' => 27,
                          'sex' => 0,
                          'height' => 180.53,
                          'is_human' => true,
                          'string' => 'Hello'
                      )

                   ); 

 echo json_encode($meme);
// echo json_encode($mydata);
//echo json_encode($data)
?>
