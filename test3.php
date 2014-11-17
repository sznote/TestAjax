<?php 
header('content-Type: application/json');

 $mydata['customer'] = array (
                       array(
                          'firstname' => 'jason',
                          'lastname' => 'smith'
                       ),
                       array(
                          'firstname' => 'sahai',
                          'lastname' => 'srichock'
                        ),
                      array( 
                         'firstname' => 'Davic',
                         'lastname' =>  'copper'
                      ),
                      array(
                         'firstname' => 'Jone',
                         'lastname' => 'eber'
                      )
 ); 

echo json_encode($mydata)
      

?>
