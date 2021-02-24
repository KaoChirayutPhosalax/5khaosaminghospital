<?php

echo '<pre>';
print_r($_POST);
print_r($_FILES);
echo '</pre>';

$dir = "uploads/";
$fileImage = $dir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $fileImage)){
    echo "อัพโหลดสำเร็จ";
}else{
    echo "ERROR";
}

?>