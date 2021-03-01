<?php

date_default_timezone_set("Asia/Bangkok");
$date = date("Y-m-d");
$time = date("H:i:s");

echo '<pre>';
print_r($_POST);
print_r($_FILES);
echo '</pre>';

$dir = "uploads/";
$fileImage = $dir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $fileImage)){
    echo "$fileImage";
}else{
    echo "ERROR";
}

?>