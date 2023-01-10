
<?php
//works perfect ! !


$hostname = "localhost";
$username = "root" ;
$password = "";
$dbname= "loljee";

// $dbConnected = mysqli_connect($hostname , $username , $password);
// another way to connect 
$dbConnected = new mysqli($hostname, $username, $password, $dbname);

$success = true ;
if ($dbConnected)
{
    // echo " successfully connected <br />";
    
}
else{
    echo " SQL connection failure <br />";
    $success=false;
}

$p = 'bangladesh' ; // if we use " " --> it would create error ! --> thereefore in querys we will use ' '  alwasy

// $a = "Abbas";
$c=36;
if ($success )
{
    $sql= "UPDATE OG SET PostCode = '$p' WHERE ID = 36";
    // $sql = "UPDATE OG ". "SET PostCode = $a ". 
    //            "WHERE ID = $c" ;
    if ( $dbConnected->query($sql) == TRUE)
    {
        echo "TABLE SUCCESFULLY UPDATED ";
    }
    else{
        echo "TABLE UPDATE FAILURE " ; 
    }
    



    $dbConnected->close() ;   
    

    

}




?>