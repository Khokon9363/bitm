<?php 
     
       // array likhar system
   $data=array();
   $data=[];

      // like
   $data=[100,20,10];
   $data = array(10,20,30);
   $data = array(
               'Shofiq'=>10,
               'Rofiq'=>15,
               'Shakil'=>25
     );

    // start

 $data[0]=10;
 $data[1]=20;
 $data[2]=30;
 $data['name']='Moshiur';
 $data['city']='Mirpur-10';
 $data['country']='Bangladesh';

  echo $data[0];
  echo "<br>";
  echo $data[1];
  echo "<br>";
  echo $data[2];
  echo "<br>";
  echo $data['name'];
  echo "<br>";
  echo $data['city'];
  echo "<br>";
  echo $data['country'];

echo "<hr>";
  $data=[10,20,30,'Moshiur','Mirpur-10','Bangladesh'];
     echo $data[3];
     echo "<br>";
     echo 'Name = '.$data[3];


 // foreach loop = repeated statement
echo "<hr>";

   $data=[
       'name'=>'Moshiur',
       'city' =>'Mirpur-10',
       'country'=>'Bangladesh',
       'phone'=>'0123456789',
       'gender'=>'Male'
    ];

         // sudhu index asbe
 foreach ($data as $value) {
   echo $value.'<br>';
 }

echo "<hr>";

      // key r index/value 2tai asbe
 echo "<pre>";
   print_r($data);
 echo "</pre>";

 echo "<hr>";

  // or,    
         foreach ($data as $key => $value) {
               echo $key."=".$value."<br>";
         }
 echo "<hr>";     

     // key index/value data-type 3tai asbe
 echo "<pre>";
 var_dump($data);
 echo "</pre>";

echo "<hr>";

$data=[];   // array er moddhe array

$data[0][0]=10;
$data[0][1]=20;
$data[0][2]=30;

$data[1][0]=40;
$data[1][1]=50;
$data[1][2]=60;

$data[2][0]=70;
$data[2][1]=80;
$data[2][2]=90;

$data[3][0]=100;
$data[3][1]=110;
$data[3][2]=120;

       // serially ante forech loop =  repeated statement
foreach ($data as $value) {
    echo $value[0].' '.$value[1].' '.$value[2].'<br>';
}

echo "<hr>";

       // function
  function demo(){
    $firstName="Mehedi";
    $lastName="Hasan";
    $fullName=$firstName.' '.$lastName;
    echo $fullName;
  }
  echo demo();
  echo "<hr>";


function createFullName($firstName,$lastName=null){
         $fullName=$firstName.' '.$lastName;
         // echo $fullName;
         return $fullName;  // function a return korte hoy bt output same
      }
   echo createFullName('Robin');
   echo "<br>";
   echo createFullName('Sojib','Khan');
   echo "<hr>";

   $data=createFullName('Sazzad','Hossain'); //func in var
         echo "Full name is : ".$data;
         echo "<h1>".$data."</h1>";

 echo "<hr>";

               // class bujhte parsi
  class test{
          public $name='Kalam';
          public $city='Savar';

      function x(){
        echo 'Hello';
      }

      function y(){
        echo 'Hello';
      }

  }
    $z=new test;
      $z->x();
      echo "<br>";
      $z->y();
      echo "<br>";
      echo $z->name;
      echo "<br>";
      echo $z->city;


echo "<hr>"; // adata = function avabe call kore

 function x(){
        echo 'Hello';
      } x();
  





?>