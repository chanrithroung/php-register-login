<?php 
    function fileUploader($sourceFile):string {
        $filename = rand(0, 9999).date('y-m-d-h-i-s').'.'. pathinfo($sourceFile['name'], 4); 
        move_uploaded_file($sourceFile['tmp_name'], './uploads/'.$filename);
        return $filename;
    }