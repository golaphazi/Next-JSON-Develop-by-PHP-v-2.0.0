<?php
    include('../include/nx_json.php');
  
    use \Simple\JSONs\NX_JSON;
    
    $json = new NX_JSON();
  
    $object = new stdClass();
    $object->LastLog = '123456789123456';
    $object->Password = 'Mypassword';
    $object->Dramatic = 'Cat';
    $object->Things = array(1,2,3);
    
    $json->data = $object;
    $json->user = 'Golap Hazi';
    $json->status = 'online';
    
    $json->send_var('someVar');
  
  
  /*
  Expected result : 
   var someVar = {
   	"data": {
   		"LastLog": "123456789123456",
   		"Password": "Mypassword",
   		"Dramatic": "Cat",
   		"Things": [1, 2, 3]
   	},
   	"user": "Golap Hazi",
   	"status": "online"
   };

  Result : 
  var someVar = {"data":{"LastLog":"123456789123456","Password":"Mypassword","Dramatic":"Cat","Things":[1,2,3]},"user":"Golap Hazi","status":"online"};
 */
?>