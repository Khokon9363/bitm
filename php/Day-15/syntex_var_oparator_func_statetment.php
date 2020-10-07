
     <!-- Syntex -->

<?php
  echo "<html>";
  echo "<head>";
  	echo "<title>";
  	  echo "Syntex var oparator Statement";
  	echo "</title>";
  echo "</head>";
  echo "<body>";
    echo "<h1> This is a headline.</h1>";
    echo "<p>This is a paragraph.</p>";
  echo "</body>";
  echo "</html>";
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title><?php echo "Syntex var oparator Statement"; ?></title>
 </head>
 <body>
    <h1><?php echo "This is a headline."; ?></h1>
    <p><?php echo "This is a paragraph."; ?></p>
    <input type="text" name="" value=" <?php echo "Hello"; ?> ">
 </body>
 </html>


     <!-- Var -->

<!-- 3 major  rules for creating a var
     Start with $ sign
     A-Z, a-z, 0-9,_
     No number in first
         $NAME;
         $name;
         $NaMe;
         $9name; wrong
         $name9;
         $_name;
         $name_;

3 standard rules for creating a var
     small letter
     meaning full
     readable  
        $name="Rakib";
        $number=100;
        $first_name="Rakib"
        $firstName="Rakib";  -->

<?php 
  echo "<br>";

   $firstName="Rakib";
   $lastName="Hossain";
   $fullName=$firstName.' '.$lastName;
     echo "$fullName";

         // Operator
       // Arithmatic
            // binary (+,-,*,/,%)
       // Assignment
            // =,+=,-=,*=,/=,.=
       // Conditional
           // >,>=,<,<=,!=,===,!==
       // Logical
           // &&,||,!


  echo "<br>";

    $x=10;
    $y=20;
    echo $x+$y; // 30
    echo "<br>";
    echo $x++; // 10
    echo "<br>";
    echo ++$x; // 12
    echo "<br>";
    echo --$x; // 11
    echo "<br>";
    echo "<br>";

    $x=10;
    $y=20;
    echo $x+=$y; // $x= $x+$y 30
    echo "<br>";
    echo $x-=$y; // $x=$x-$y 30-20=10
    echo "<br>";
    echo $x.=$y; // $x=$x+$y 1020
    echo "<br>";
    echo "<br>";




        // Statement
    // single line 
    // conditional
         // if
         // if else
         // if else if
         // switch
    // repeated
        // for
        // while
        // do while
        // foreach

	 $x=10;
	 $y=20;
	 $z=$x+$y;
	  echo $z;
	  echo "<br>";

	 if ($x<$y) {
	 	echo $z;
	 }echo "<br>";
	  echo "<br>";
     
     


       // function
   function demo(){
   	echo "Hello World";
   }
    demo();

?>