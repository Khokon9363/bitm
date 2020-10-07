<?php 


 class oddEven{
 	
 	public function makeOddEven(){
 		      
 		   $first=$_POST['first_number'];
 		   $last=$_POST['last_number'];
 		   $choice=$_POST['check'];
 		   $res='';

 		   if ($first<$last) {
 		   	      for ($i=$first; $i<=$last; $i++) { 
 		   	      	   if ($i%2!=0 && $choice=='Odd') {
 		   	      	   	   $res.=$i.' '; // $res=$res.$i
 		   	      	   }
 		   	      	   if ($i%2==0 && $choice=='Even') {
 		   	      	   	   $res.=$i.' ';
 		   	      	   }
 		   	      }
 		   }
 		   if ($first>$last) {
 		   	      for ($i=$first; $i>=$last; $i--) { 
 		   	      	   if ($i%2!=0 && $choice=='Odd') {
 		   	      	   	   $res.=$i.' ';
 		   	      	   }
 		   	      	   if ($i%2==0 && $choice=='Even') {
 		   	      	   	   $res.=$i.' ';
 		   	      	   }
 		   	      }
 		   } return $res;

 	}
 	
 }







 ?>