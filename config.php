<?php 
$server = "localhost";
$user = "root";
$pass = "";
$database = "login_learn";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn){
    die ("<script>Can't Connect to database</script>");
}
?>