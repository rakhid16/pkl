<?php
    if (!empty($_FILES["pilih_file"])) {
        $file	= $_FILES["pilih_file"];
        $ext	= pathinfo($_FILES["pilih_file"]["name"], PATHINFO_EXTENSION);
        $parts = pathinfo($file['name']);
        $name = $parts["filename"]. "." . $parts["extension"];
        move_uploaded_file($file["tmp_name"], 'upload/' . $name);
    }
?>