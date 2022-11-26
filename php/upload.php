<?php
$result='';
if(isset($_FILES['file']['name'])){
    foreach ($_FILES['file']['name'] as $key => $file){

        $file_name = '../html/upload/'.$_FILES['file']['name'][$key];

        if(move_uploaded_file($_FILES['file']['tmp_name'][$key], $file_name)){
           
            $result.="<div class=\"image\"> <img src=\"${file_name}\" /></div>";
       
        }
    }
}
echo $result;