<?php

  $Path=$_POST["Path"]."/img";
  $FileName=$_POST["FileName"];
  $FullPath=$Path."/".$FileName;
  if(! file_exists($Path))
  {
    mkdir($Path,0777,true);
  }

  if(!file_exists($FullPath)){
      move_uploaded_file($_FILES["Image"]['tmp_name'], $FullPath);
  }else{
      file_put_contents($FullPath, file_get_contents($_FILES['Image']['tmp_name']),FILE_APPEND);
  }

  echo $FullPath;

?>
