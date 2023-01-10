<?php
//using mysqli onnly ! 
$hostname = "localhost";
$username = "root" ;
$password = "";

$databaseName = "lol" ;

$dbConnected = mysqli_connect($hostname , $username , $password);
if ($dbConnected)
{
    echo " successfully connected <br />";
}


$dbConnected->query(" DROP DATABASE lol");
/*

you could have also done it like dis 
$drop_SQL = " DROP DATABASE lol";
$dbConnected->query($drop_SQL);

--> we can further put in success messages 
that has the query perfectly been executed through 
echo and if -else statememnsts ! 


*/



$dbConnected->close();


?>
