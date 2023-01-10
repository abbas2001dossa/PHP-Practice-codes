<?php
// basic code snippet for ininital connection with db
$hostname = "localhost";
$username = "root" ;
$password = "";

$databaseName = "lol" ;

$dbConnected = mysqli_connect($hostname , $username , $password);
$dbSelected = mysqli_select_db($dbConnected,$databaseName);


// code nippet so wed know if its working or not
if ( $dbConnected)
{
    echo " MY SQL connected <br  />";
    
    if ($dbSelected)
    {
        echo " DAta base connected ! <br />";

    }
    else{
        echo " DB failed !";
    }



}
else{
    " My sql connection failed <br />";
}
mysqli_close($dbConnected);





?>