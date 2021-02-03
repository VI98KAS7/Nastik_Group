<?php 

include 'config.php';

$uname = $_POST['uname'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM user";

$result = mysqli_query($conn, $sql) or die('Query Failed');

if(mysqli_num_rows($result) > 0){

	while($row = mysqli_fetch_assoc($result)){
		if($row['user_name'] == $uname){
			echo 1;
		}
		else{
			echo 0;
		}
	}
}

?>