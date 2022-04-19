<?php
 $name = $_FILES['upload']['name'];
 echo $name;
 echo "<BR>";
 $type = $_FILES['upload']['type'];
 echo $type;
 echo "<BR>";
 $tmpfile = $_FILES['upload']['tmp_name'];
 echo $tmpfile;
 echo "<BR>";
 $dest_File = "photos/".$name;
 $extension = strrchr($name,".");
 echo $extension;
 echo '<BR>';
 $extension_autorisees = array('.jpg', '.png','.tif');
 if(in_array($extension,$extension_autorisees))
 move_uploaded_file($tmpfile,$dest_File);
 else
 echo "extension non autorise";
 
?>
