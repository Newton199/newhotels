<?php



/* Database config */

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'shoopingcart'; 

/* End config */

$con = mysqli_connect("localhost","root","","shoopingcart");



if (!$con) {
    die('Connect Error: ' . mysqli_connect_errno());
}
?>
/*$mysqli_select_db($db_database,$conn);
$mysqli_query("SET names UTF8");*/

?>