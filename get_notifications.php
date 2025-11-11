<?php
include 'db.php';
header('Content-Type: application/json');
// Simple notifications placeholder: recent bookings & designs
$out = [];
$sql = "SELECT CONCAT('New booking: ', customer, ' — ', DATE_FORMAT(datetime, '%Y-%m-%d %H:%i')) as note FROM bookings ORDER BY id DESC LIMIT 5";
$res = $conn->query($sql);
if($res){ while($r = $res->fetch_assoc()) $out[] = $r['note']; }
$sql = "SELECT CONCAT('Design uploaded: ', name) as note FROM designs ORDER BY id DESC LIMIT 5";
$res = $conn->query($sql);
if($res){ while($r = $res->fetch_assoc()) $out[] = $r['note']; }
echo json_encode($out);
?>