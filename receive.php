<?php
require 'config.php';
//$_FILES['field_name_input']
$file = $_FILES['file'];

if(isset($file['tmp_name']) && !empty($file['tmp_name'])) { // file send
    //move_uploaded_file(parameter1, parameter2); 
    //parameter1: $file['tmp_name'] 
    //parameter2: destination_file
    $archive_extension = pathinfo($file['name']);
    $archive_name = MD5(time().rand(0,99)).".".$archive_extension['extension'];

    move_uploaded_file($file['tmp_name'], "archives/".$archive_name);

    $sql = "INSERT INTO db_users (dbu_images) VALUES (:imagefile)";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':imagefile', $archive_name);
    $sql->execute();
}

/*
return an array:
array
    (
        [name] => file_name.extension
        [type] => file_type/type *obs.: type = png, txt, jpg e etc...
        [tmp_name] => C:\xampp\tmp\php7D3A.tmp
        [error] => 0
        [size] => 0 *obs.: size in bits
    )
*/
?> 

