<?php
error_reporting( ~E_DEPRECATED & ~E_NOTICE );
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'iii');
 
$conn = new MySQLi(DBHOST,DBUSER,DBPASS,DBNAME);
if ( $conn->errno ) {
  die("Error:".$conn->error);
}

 ?>