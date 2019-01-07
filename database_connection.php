 <?php
// conecxão da BD criada com sucesso
//$connect = new PDO("msql:host=localhost;dbname=gest_devedores","root","root");
//$connect = mysqli_connect('localhost','root','root','gest_devedores');
global $connect;

$host_name = "localhost";
$database = "gest_devedores"; // Change your database name
$username = "root";   // Your database user id 
$password = "";          // Your password

$connect = mysqli_connect($host_name,$username,$password,$database);

//////// Do not Edit below /////////
/*
try {
		$connect = new PDO('mysql:host='.$host_name.';dbname='.$database, $username, $password);
		} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/>";
		die();
}*/
?>