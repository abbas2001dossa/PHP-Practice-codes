



<?php
//works perfectly ! 





//sql script to create table tt
//works perfect 

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



if ($success )
{

    $createTable = "CREATE TABLE OG( ";
    $createTable .= "ID INT( 11 ) PRIMARY KEY, ";
    $createTable .= "preName VARCHAR(50) , ";
    $createTable .= "namee VARCHAR(200) , ";
    $createTable .= "PostCode VARCHAR(60) NOT NULL )";


    // $createTable=   "CREATE TABLE empl45233oyees(
    //                 id INT(2)  PRIMARY KEY, 
    //                 firstname VARCHAR(30) NOT NULL,
    //                 lastname VARCHAR(30) NOT NULL,
    //                 email VARCHAR(50)
    //                 )";



    //to only input table entries and not create a table comment put this if conditiotn 
    if ( $dbConnected->query($createTable) == TRUE)
    {
        echo " TABLE CREATED SUCCESSFULLY ! " ; 


        //Entering details inside thhe table ~ 

        $sql= "INSERT INTO OG (ID,preName,namee,PostCode) VALUES ('36', 'he' , 'boi' , 'hill')";
        if ($dbConnected->query($sql) == TRUE )
        {
            echo " THE VALUES ARE PERFETLY ENTEREd " ;

        }
        else{echo" VALUE ENTRY FAILURE ";}




    }
    else
    {
        echo "Table nor created successfully! ";
    }

    $dbConnected->close() ;   
    

    

}




?>