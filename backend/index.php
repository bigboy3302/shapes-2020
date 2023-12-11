<?php
include "Circle.php";
include "Rectangle.php";


header("Access-Control-Allow-Origin: *");
$data = ["message" => "hi chigga"];
echo json_encode($data);

?>