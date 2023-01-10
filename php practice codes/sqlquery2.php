<?php



$hostname = "localhost";
$username = "root" ;
$password = "";

$databaseName = "pero" ;

$dbConnected = mysqli_connect($hostname , $username , $password);
$dbSelected = mysqli_select_db($dbConnected,$databaseName);


$success = true ;
if ($dbConnected)
{
    // echo " successfully connected <br />";
    if (!$dbSelected)
    {
        echo " DB CONNECTION FAiLed  <br />";
        $success= false;
    
    }
}
else{
    echo " SQL connection failure <br />";
}



if ($success )
{




    $query = " DROP DATABASE " . $databaseName ; 
    if ($dbConnected->query($query))
    {
        echo " DATABASE DROPPED  SUCCESSFULLY "; 
    }
    else
    {
        echo "DATABASE DROP FAILED ";
    }

}



// This code worked perfect where the database pero was dropped successsfully !


?>
