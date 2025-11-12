<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $type = $_POST['type'] ?? '';
    if($type === 'appointment'){
        $name = $_POST['name'] ?? '';
        $datetime = $_POST['datetime'] ?? '';
        $service = $_POST['service'] ?? '';
        echo json_encode(['status'=>'success','message'=>'Appointment received']);
    }
    if($type === 'design'){
        $designName = $_POST['designName'] ?? '';
        $price = $_POST['price'] ?? '';
        $desc = $_POST['desc'] ?? '';
        echo json_encode(['status'=>'success','message'=>'Design uploaded']);
    }
}
?>