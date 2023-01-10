<?php



$hostname = "localhost";
$username = "root" ;
$password = "";


$dbConnected = mysqli_connect($hostname , $username , $password);


$success = true ;
if ($dbConnected)
{
    // echo " successfully connected <br />";
    
}
else{
    echo " SQL connection failure <br />";
    $success=false;
}



if ($success )
{

    // $a=readline(' ENTER YOUR DATABASE NAME :- ');
    
    // $databaseName=$a;
    $databaseName="loljee2";
    $query = " CREATE DATABASE " . $databaseName ; 
    if ($dbConnected->query($query))
    {
        echo " DATABASE created  SUCCESSFULLY "; 
    }
    else
    {
        echo "DATABASE CREATION  FAILED ";
    }

}




?>