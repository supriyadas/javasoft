<?php error_reporting(0); ob_start(); session_start();

define(DB_HOST,"localhost");
		define(DB_USER,"root");
		define(DB_PASSWORD,"123456");
		define(DB_NAME,"java");
		//connection
			$conn=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
			if($conn)
			{
				mysql_select_db(DB_NAME,$conn);
			}else
			{
				echo "<strong>Connection has not established with the server</strong>";
			}
                        
                        include("predefine.php");
                        
                        
                       

?>
