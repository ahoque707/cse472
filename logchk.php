<?php 
 //1. Catch or grab the values 
 //2. As per our requirments we take different actions
session_start();

 $un = $_POST['username'];
 $pa = $_POST['password'];

 
/*
echo "Unser name=". $un; 
echo "<br>";
echo "Pasword=".$pa; 
*/

// 10 lacs user name & Password 

echo date('Y-m-d');
echo "<br>".date('Y-m-d h:i:s a') ;

//echo $un."==".$pa."<br>"; 
//exit();

if (($un == 'yahoo') && ($pa =='YAHOO'))
  { 
    echo "<br><h4 style='background-color:green'>Successfull Login</h4>";
    header("Location: http://localhost/cse472/p1.php"); 
  }  

elseif ($un == 'google' && $pa == 'GOOGLE')
  {
  echo "<br> <h4 style='background-color:green'> Successful Login </h4>";
  echo "<script type='text/javascript'> 
          window.location.href='http://localhost/cse472/p2.php'
  </script>"; 
  }
elseif ($un == 'bing' && $pa == 'BING')
  echo "<br> <marquee> <h4 style='background-color:green'> Successful Login </h4></marquee>";
else 
  {
    echo "<br><h4 style='background-color:red'>Wrong Username or Password</h4>";
    $_SESSION["wup"]="Wrong User Name or Password";  
    header("Location: http://localhost/cse472/login.php");
  } 

