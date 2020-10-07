<?php
              // Syntex
      echo "<!DOCTYPE html>";
      echo "<html>";
      echo "<head>";
	      echo "<title>";
	      echo "Syntex Var Oparator Function Statement";
	      echo "</title>";
      echo "</head>";
      echo "<body>";
        echo "<h1>This is a headline.</h1>";
        echo "<p>This is a paragraph.</p>";
      echo "</body>";
      echo "</html>";

?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
     <title><?php echo "Syntex Var Oparator Function Statement" ?></title>
  </head>
  <body>
     <h1><?php echo "This is a headline." ?></h1>
     <p><?php echo "This is a paragraph." ?></p>
     <input type="text" name="" value="<?php echo "firstName" ?>">
  </body>
  </html>
         

             <!-- Var -->

   <!--  3 major rules for creating a var
         start with $
         A-Z,a-z,0-9
         No number in first
             $NAME;
             $name;
             $Name;
             $nAmE;
             name; wrong
             NAme; wrong
             $9name; wrong
             $name9;
    3 standart rules for creating a var
        small letter
        meaningfull
        readable
             $name="Rakib"
             $number=100;
             $first_name="Rakib";
             $firstName="Rakib"; -->

<?php 
    echo "<hr>";
        $firstName="Rakib";
        $lastName="Hossain";
        $fullName=$firstName.' '.$lastName;
          echo $fullName;


                  // Oparator

       // Arithmatic
           // binary (+,-,*,/,%)
       // Assignment
           // =,+=,-=,*=,/=,.= ata holo concreate
       // Conditional
           // >,>=,<,<=,!=,===,!==
       // Logical
           // &&,||,!

 echo "<hr>";
        $x=10;
        $y=20;
        $z=$x+$y;
        $p=$x-$y;
        $q=$x*$y;
        $r=$x/$y;
        $s=$x%$y;
         echo $z; // 30
         echo "<br>";
         echo $p; // -10
         echo "<br>";
         echo $q; // 200
         echo "<br>";
         echo $r; // .5
         echo "<br>";
         echo $s; // 10
         echo "<br>";
         echo $x++; // 10
         echo "<br>";
         echo ++$x; // 12
         echo "<br>";
         echo --$x; // 11
         echo "<br>";
         echo $x+=$y; // $x=$x+$y 11+20=31
         echo "<br>";
         echo $x-=$y; // $x=$x-$y 31-20=11
         echo "<br>";
         echo $x.=$y; // $x=$x.$y 1120


         // Statement
   //single line
   //conditional
         //if
         //if else
         //if else if
         //switch
   // repeated
         //while
         //do while
         //foreach

echo "<hr>";
       $x=10;
       $y=20;
       $z=$x+$y;
        echo $z;
        echo "<br>";
       if ($x<$y) {
       	 echo $z;
       }echo "<br>";
       if ($x>$y) {
       	 echo "Hello World";
       } else {
       	 echo "Hello php";
       }




        // function
echo "<hr>";
             function demo()
             {
             	echo "Hello Everyone";
             }
               demo();
    

?>