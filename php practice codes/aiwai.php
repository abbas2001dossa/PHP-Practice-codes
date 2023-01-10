<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP INITITATE </title>
</head>

<style>

*{
    margin : 0 ; 
    padding: 0 ;
    box-sizing: border-box ;

}

.container{
    max-width: 80% ;
    background-color :red ;
    margin : auto;
}



</style>


<body>
    <div class="container"> 
        This is my first php website 
        <?php
            echo "<br>";
            echo " HELLO WORLD WRITTEN under php " ;

        ?>


        <?php
        
            echo " SALAM " ;
            $var = 234 ;
            $var2 = 456 ;
            $var3 = 123 ;
            echo " THE SUM OF VARIABLE 1 and 2 is :- "; echo $var + $var2 ; echo "<br>";

            echo "<br>";echo "<br>";
            $new = $var;
            $new2 =$var2 ;

            echo $new ; echo " and " ; echo $new2 ;
            echo " <h1> BOOLEAN DATATYPE </h1>";
            echo " Checking if 1 == 2 -->  ";
            echo var_dump(1==2);echo " Checking if 1 == 2 -->  ";
            echo var_dump(1==2);
            echo " Checking if 1 <= 2 -->  ";
            echo var_dump(1<=2);
            echo "<br>";


            echo " <h1>  increment decremeent operators  </h1>";
            echo $var+=$var2;
            echo "<br>";echo $var3++;
            echo "<br>";echo "<br>";
            //logical operators
            // and (&&)
            // or  (||)
            // xor   // true and true equals false 
            // !
        ?>
<p>  party status !  : </p>
        <?php
            define('PI', 3.142);  // defined constants -> pi now we acan use this anytwhere wee want


            echo PI;
            echo " <h1>  DATA TYPES  </h1>"
            ;
            echo "<br>";echo "<br>";
            $varp = "loljee";
            echo var_dump ( $varp );
            echo "<br>";echo "<br>";
            
            
            $lol = 234;$lol2=235;
            if ( $lol == 234 )
            {
                echo " HOLY SHIT !!" ;
            }
            if ( $lol2 > $lol )
            {
                echo " horreh ! " ; echo "<br>";echo "<br>";
            }
            else
            {
                echo " oke dude ! " ; 
            }
            

            echo " <h1>  ARRAYS  </h1>";
            $p = array( "79", "ui" , "oke" , "lool");
            echo $p[0];echo "<br>";
            echo $p[2];echo "<br>";
            
            echo " number of elements :- " ;echo "<br>";
            echo count($p);

            echo "<br>";echo "<br>";
            echo "<h2> LOOPS IN PHP </h2>" ;


            $a=0 ;//using array and while loops 
            while ( $a < count($p))
            {
                echo " VAlue is " ;
                echo  $p[$a];
                echo "<br>";
                $a++;
            }

            echo "<br>";echo "<br>";

            // for loop
            $i=0;echo "<h2> printing the samae message with for loop  now ! </h2>";
            echo "<br>";
            for ( $i=0 ; $i < count($p) ; $i++ )
            {
                echo " value is ";
                echo $p[$i] ;   echo "<br>";
            }

            //using same loop but as foreach keywrd now
            foreach ( $p as $v)
            {
                echo "<br> Th value is ";
                echo $v ;
            }

            //functions 
            
            echo "<h2> FUCNTIONS :- </h2>";

            function loloki (){
                echo " hello " ;
            }

            function lol222( $curse)
            {
                echo "<br> the value is " ;
                echo $curse ;
            }



            loloki();
            lol222("luci");

            echo "<br>";
            echo "<h2> STRINGS :- </h2>";
            $str = "loljee" ;
            echo $str ;
            $num = strlen ($str);
            echo "<br>";echo  $num ;

            echo "<h2>  ASSOCIATIVE ARRAYS </h2>"
            ;//associatie arrays !
            $connect = array(
                'host' => 'localhost',
                'user' => 'root',
                'pass' => 'none',
                'db'   => "hheeheh"
            );

            echo $connect['host'];
            echo "<br />";
            echo $connect['db'];

            //multi dimensional arrays ! 
            echo "<br />";
            echo "<h2> MULTI DIMENSIONAL  ARRAYS </h2>"
            ;echo "<br />";
            $multiDim[0] = array(2,3,4,5);
            $multiDim[1]= array("hello" , "ok" , "bye " , "luci") ;
            $multiDim[2]=  array("heya" , 12, "kue" , 234);
            echo $multiDim[0][1], $multiDim[1][2], $multiDim[2][0]  ;
            

            

        ?>  
    
    </div>
</body>
</html>