<?php 
    session_destroy(); //destroy entire session 
    $myObj = array(
        'status' => 200,
        'message' => "Success"  
    );
    $myJSON = json_encode($myObj, JSON_FORCE_OBJECT);
    echo $myJSON;
?>