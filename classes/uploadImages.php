<?php

error_reporting(0);
class uploadImages extends dbQueries {
public $imageErrors = [];
public function uploadImg($fieldName, $extensions){

    $imageName = $_FILES[$fieldName]['name'];
    $tmpName = $_FILES[$fieldName]["tmp_name"];
    $storage = "assets/images/";
    $imgExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
    if(empty($imageName)){

        return $this->imageErrors[$fieldName] = "Image is required";

    }

    if(!in_array($imgExtension, $extensions)){

        return $this->imageErrors[$fieldName] = "This file '" . $imgExtension . "' is not valid";

    }

    $imgName = pathinfo($imageName,PATHINFO_FILENAME);
    $imgName = preg_replace("/\s+/", "-", $imgName);
    $imgName = $imgName.rand();
    $imgName = $imgName.".".$imgExtension;
    move_uploaded_file($tmpName, $storage.$imgName);
    
    $userID = $_SESSION['userID'];
    if($this->Query("UPDATE users SET image = ? WHERE id = ? ", [$imgName, $userID])){

        $_SESSION['imageUploaded'] = "Your image has been saved successfully!";
        header("location: dashboard.php");

    }
}


}


?>