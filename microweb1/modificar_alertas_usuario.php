<?php
$id=$_POST["id"]; 
$estado=$_POST["estado"]; 

$url = "http://172.190.52.193:3003/alerta/$id"; 
$data = array( 
    'estado' => $estado, 
); 
    
$json_data = json_encode($data); 
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT'); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
$response = curl_exec($ch); 
if ($response===false){ 
    header("Location:index.html"); } 
curl_close($ch); 
header("Location:usuario_alerta.php"); 

?>
