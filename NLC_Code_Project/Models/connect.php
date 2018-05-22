<?PHP
function DBConnect(){

error_reporting(E_ERROR);
	
global $Host, $User, $DBPassword, $DBName, $table_1;

$Host = "localhost";
$User = "";
$DBPassword = "";
$DBName = "";

$table_1 = "NLC_Data";

//IMPORTANT!Comment out this block when connection is successful!
/*if(mysqli_connect($Host, $User, $DBPassword, $DBName)){
	print "MySQL Connection Active!";
	}else{
	print "MySQL Connection Error! Please Check Details In class.model.common.php!";
	} */


}//close function

//DBConnect();


?>