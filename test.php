<?php
$user = 'empactph_pipeops';
$pass = 'zpLd39=0Q**D';
$db = 'empactph_pipeops';
$host = 'e-mpactpharma.com';

$conn = mysqli_connect($host, $user, $pass, $db);

if($conn){
    echo "True";
}else{
    echo "False";
}




?>
