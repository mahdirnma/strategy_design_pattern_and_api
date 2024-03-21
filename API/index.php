<?php
header('Content-Type: application/json');
$method = $_SERVER['REQUEST_METHOD'];
if ($method=="GET"){
    echo json_encode(["data"=>[
        "apple","banana","lemon"
    ]]);

}elseif ($method=="POST"){
    echo json_encode(["massage"=>"please enter data"]);

}else{
    echo json_encode(["error"=>"your method not allow"]);

}
