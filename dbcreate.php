<?php
 $servername = "localhost"; 
 $username ="root"; 
 $password=""; 
 $dbname = "summer24"; 

 // MySQLi OO Way 
 $con = new mysqli($servername, $username,$password,$dbname); 

 if ($con->connect_error)
  die("<br> Connection ". $con->connect_error); 
 else 
   echo "<br><h2>Alhamdulillah DB Server Is Connected </h2>";


// $sql = "CREATE database seu_cse";
/*
$sql2 ="CREATE table seucse (
id int not null auto_increment, 
names varchar(20), 
sage int, 
addr varchar (100), 
bg varchar(3), 
primary key (id)
)"; 

$res = $con->query($sql2); 

if ($res == TRUE)
   echo "<br>New Table Created";
else 
  echo "<br> Database Not Created";
*/


/*
$name = "Debosree"; //POST
$age = 19; // POST
$add = "Chittagong"; // POST 
$bg = "A+"; // POST

 $SQLin = "INSERT INTO seucse (names,sage,addr,bg) VALUES ('".$name."',".$age.",'".$add."','".$bg."')";              
 $res=$con->query($SQLin);

 if ($res == TRUE)
  echo "<br>New record added successfully<br>";
else 
  echo "<br> Error: ". $SQLin. "<br>". $con->error;
*/

// Read the Data 
 $SQLse = "SELECT * FROM seucse";
 $res=$con->query($SQLse);
 
 //var_dump($res);

 //$asores = mysqli_fetch_assoc($res);
 //print_r($asores);
 
 // LOOP 
 $i=1;
 ?>
 
 <?php
 echo "<table border='1'>";
 echo "<thead> <tr><th>SL</th><th>NAME</th><th>Age</th><th>Address</th><th>BloodGroup</th></tr></thead";  
 while ($row = $res->fetch_assoc())
 {
    //echo "<br>";
    //echo $row['names']; 
    //echo $i.">>". $row['names']."++++".$row['sage']."++++".$row['addr']."++++".$row['bg'];
    
    echo "<tr>";
    echo "<td>".$i."</td><td>".$row['names']."</td><td>".$row['sage']."</td><td>".$row['addr']."<td>".$row['bg']."</td>";
    echo "</tr>";
    $i++;
  }
  ?>
  </table>

<?php
 //var_dump($res);
 //echo "<pre>";
 
 

 $con->close(); 


// MySQLi Pro way 
// $pcon = mysqli_connect($servername,$username,$password,$dbname);

// if (!$pcon)
//  die("<br> Connection Failed ". mysqli_connect_error());
// else 
//  echo "<br> <h2> PRW Alhamdulillah DB Connected";

//  $SQLse = "SELECT * FROM seucse";
//  $pres=mysqli_query($pcon,$SQLse);
 
//  print_r($pres);

//  $res= mysqli_query($pcon,$sql);
// if ($res == TRUE)
//    echo "<br>New Database Created";
// else 
//   echo "<br> Database Not Created";


// PDO 
// try
// {
//  $pdocon = new PDO("mysql:host=$servername; dbname=$dbname",$username,$password);
//  $pdocon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//  echo "<br> PDO CONNECTED";  
// }
// catch(PDOException $e) 
// {
//   echo "<br> PDO Connection ERROR ".$e->getMessage(); 
// }

// $psql = "CREATE DATABASE pdobd"; 
// $pdocon->query($psql);


?>
