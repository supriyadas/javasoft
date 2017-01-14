<?php
$fullcode="";
if ($handle = opendir('./upload/')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

            //echo "$entry\n";
            $fullcode.=file_get_contents("upload/".$entry);
        }
    }

    closedir($handle);
}
 

echo nl2br($fullcode);
?>
