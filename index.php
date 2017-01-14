<?php 

if(isset($_POST["submit"])){
// Loop through each file
for($i=0; $i<count($_FILES['java']['name']); $i++) {
  //Get the temp file path
  $tmpFilePath = $_FILES['java']['tmp_name'][$i];

  $newFilePath = "upload/" . $_FILES['java']['name'][$i];
  move_uploaded_file($tmpFilePath, $newFilePath);

  
}
} 
?>


<form action="" method="post" enctype="multipart/form-data">
  Send these files:<br />
  <input name="java[]" type="file"  multiple="" />
  <input type="submit" name="submit" value="Send files" />
</form>