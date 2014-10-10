<?php 
// Force download of image file specified in URL query string and which 
// is in the same directory as this script: 
if(!empty($_GET['path'])) 
{ 
   $filename = $_GET['path']; // don't accept other directories // don't accept other directories 
    $size = @getimagesize($filename);
	
$ext = pathinfo($filename, PATHINFO_EXTENSION);
echo $ext;
header("Content-type: ". $size['mime']); 
      
//header("Content-type: jpeg/image");//notice this content-type, it will force a download since browsers think that's what they should do with .exe files
header("Content-Disposition: attachment; filename=$filename"); 
//header("Content-disposition: attachment; filename= shewta.png");
header('Content-Transfer-Encoding: binary'); 
      header('Cache-Control: must-revalidate, post-check=0, pre-check=0'); 
readfile($filename);   
  // $content = file_get_contents($filename);
//Store in the filesystem.
//$fp = fopen("d:/image.jpg", "w");
//fwrite($fp, $content);
//fclose($fp);
/*
echo $filename; 
   $size = @getimagesize($filename);
//echo 'size'+$size;   
   $fp = @fopen($filename, "rb"); 
   if ($size && $fp) 
   { 
      header("Content-type: {$size['mime']}"); 
      header("Content-Length: " . filesize($filename)); 
      header("Content-Disposition: attachment; filename=$filename"); 
      header('Content-Transfer-Encoding: binary'); 
      header('Cache-Control: must-revalidate, post-check=0, pre-check=0'); 
      fpassthru($fp); 
      exit; 
   }*/
} 
//header("HTTP/1.0 404 Not Found"); 
?>
