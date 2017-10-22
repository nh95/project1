<?php
class Controller {
  protected $request;
  public function __construct($request) {
  $this->request = $request;
 }
 //To display the form contents
 public function form(){
   require('./form.php');

}
public function submit() { 
if(isset($this->request['submit'])){
$target_file =FileUploader::upload($_FILES);
if($target_file){
header('Location:index.php?action=display&&filename='.$target_file);
 }else
{
echo 'Error while uploading.';
}
 }
 }

//Displaying the HTML table

public function display() {
$filename = $this->request['filename'];
$reader = new CsvReader();
$data = $reader->_read($filename);
$dis = new CsvDisplay();
echo  $dis->_display($data);
}
}

