<?php
/*======Common Functions-Start=========================================*/
function echo_active($page){
     $page_name=basename($_SERVER['PHP_SELF']);
    
    $page_arr=explode(",",$page);
    if(in_array($page_name, $page_arr))
    echo "active";
}
/*======Common Functions-End=========================================*/


?>
