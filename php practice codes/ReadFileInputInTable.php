



<?php
//works perfect





//sql script to create table tt
 

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


$count=0;
//table OG
if ($success )
{  


    //filing
    $file = fopen('ehsan.txt','r');
    $i=0;
    while(!feof($file))
    {
        $line=fgets($file);
        $personD[$i]= explode(",",$line);

        $i++;
    }

    fclose($file);

    $number=sizeof($personD);

    // echo $personD[1][0] ; 
    // echo $personD[1][1] ; 
    // echo $personD[1][2] ; 
    // echo $personD[1][3] ; 

    $p=1;
    while ($p<4 )
    {
        $a=$personD[$p][0] ;$b=$personD[$p][1];$c=$personD[$p][2];$d=$personD[$p][3];
        $sql= "INSERT INTO OG (ID,preName,namee,PostCode) VALUES ('$a' , '$b', '$c' , '$d') ";
        
        if ($dbConnected->query($sql) == TRUE )
        {
            echo " THE VALUES ARE PERFETLY ENTEREd <br />" ;
        }else{echo" VALUE ENTRY FAILURE ";}


        $p++;
    }

   
    $dbConnected->close() ;   
    

    

}




?>