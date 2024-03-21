<?php
header('Content-Type: application/json');
$method = $_SERVER['REQUEST_METHOD'];
if ($method=="GET"){
    echo json_encode(["data"=>[
        "apple","banana","lemon"
    ]]);

}elseif ($method=="POST"){
    $body=file_get_contents('php://input');
    $body_json=json_decode($body,true);
    $fruit=$body_json["fruit"];
    echo json_encode(["massage"=>"your fruit added:$fruit"]);

}else{
    echo json_encode(["error"=>"your method not allow"]);

}
