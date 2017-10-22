<?php
class FileUploader{
	
// Upload file in target directory 
public static function upload($fileInfo){
$dir=__DIR__."/uploads/";
$target_file = $dir.basename($fileInfo['fileToUpload']['name']);
 if( self:: fileCheckAndUpload($target_file))
 {
	 return $target_file;
 }
}

public static function fileCheckAndUpload($target_file){
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  if ($imageFileType == "csv" && move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)){
  return true;
}else
{
  return false;
}
}
}

