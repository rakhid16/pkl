<?php
    if (!empty($_FILES["file"])) {
        $file	= $_FILES["file"];
        $ext	= pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
        $parts = pathinfo($file['name']);
        $name = $parts["filename"]. "." . $parts["extension"];
        move_uploaded_file($file["tmp_name"], 'upload/' . $name);
    }
?>