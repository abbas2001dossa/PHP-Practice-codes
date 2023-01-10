



<?php






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

$a = array('78990' , '75837' , '5737289' , '57378');
$b= array('pehla' , 'dusra' , 'tessra' , 'chota');
$c= array('Abbas' , 'Ahsan' , 'Fatima' , 'saba');
$d= array('lahore','khi','bangladsh','syria');

$count=0;
$jeez=TRUE;
//table OG
if ($success )
{  
    // for ( $count =0 ; $count <4 ; $count++  )
    // {
    //     $sql= "INSERT INTO OG (ID,preName,namee,PostCode) VALUES ('$a[$count]' , '$b[$count]' , '$c[$count]' , '$d[$count]' )";
    //     if ($dbConnected->query($sql) == TRUE )
    //     {
    //         echo " THE VALUES ARE PERFETLY ENTEREd <br />" ;
    //         $jeez=TRUE;
    //     }else{echo" VALUE ENTRY FAILURE ";$jeez=FALSE;}
    // }

    //this is commented -> since the following entries where already made 
    //when the program was run first ! 
    
    
    if ($jeez== TRUE )
    {
        //delete command 

        $sql2= "DELETE FROM OG WHERE PostCode = 'khi' ";
        if ($dbConnected->query($sql2) == TRUE)
        {
            echo " the elemeents re deleted successfully ! ";
        }else{
            echo "error";
        }
    }



   
    $dbConnected->close() ;   
    

    

}




?>