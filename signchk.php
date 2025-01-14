<?php 
include 'dobcon.php';

 $uname = $_POST['username'];
 $upass = $_POST['password'];

//$sql = "SELECT * FROM user WHERE usrname = '$uname' AND usrpass = '$upass'";
$sql = "SELECT * FROM user WHERE usrname ='".$uname."' AND usrpass ='".$upass."'";
$result = $conn->query($sql);

foreach ($result as $row) 
{
    $dbuname = $row['usrname'];
    $dbupass = $row['usrpass'];
    echo $dbuname."--".$dbupass; 
}

if ($result->num_rows > 0) 
{
    echo "<br> <h1> Login Successful </h1>";
}
else 
{
    echo "<br> <h1> Login Failed, Invalid User Name or Password! </h1>";
}
/* // Prepared Statement
$psql = $mysqli->prepare("SELECT * FROM user WHERE usrname = ? AND usrpass = ?");
$psql->bind_param("ss", $uname, $upass); //string, string
$psql->execute();
$result = $psql->get_result();
*/

$conn->close();
