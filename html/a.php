<?php

$data['name'] = $_GET['name'];
$data['id']   = $_GET['id'];

file_put_contents('./a.txt', serialize($data)); 

echo json_encode($data);
exit;
?>
