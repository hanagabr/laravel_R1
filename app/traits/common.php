<?php
namespace app\traits;
trait common {
public function uploadFile($file, $path){
  $file_extension = $file->getClientOriginalExtension();
  $file_name =time() . '.' .$file_extension;
   $path ='assets/images';
  $file->move($path, $file_name);
 return $file_name;
}}

?>