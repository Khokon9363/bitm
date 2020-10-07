var btn=document.getElementById('btn');
    btn.onclick=function(){
    	var startingNumber=document.getElementById('startingNumber').value;
    	var endingNumber=document.getElementById('endingNumber').value;

    	var res=' ';
    	for (var x = startingNumber; x <= endingNumber; x++) {
    		 res+=x+' '; //res= res+x+' ';
    	}
    	document.getElementById('result').value=res;
    }


              // css
  var Red=document.getElementById('Red');
      Red.onmouseover=function(){
        divOne=document.getElementById('divOne');
      	divOne.style.backgroundColor='red';
      }
  var Green=document.getElementById('Green');
      Green.onmouseover=function(){
        // divOne=document.getElementById('divOne');
      	divOne.style.backgroundColor='green';
      }
  var Blue=document.getElementById('Blue');
      Blue.onmouseover=function(){
        // divOne=document.getElementById('divOne');
      	divOne.style.backgroundColor='blue';
      }
  var Dafault=document.getElementById('Dafault');
      Dafault.onmouseover=function(){
        // divOne=document.getElementById('divOne');
      	divOne.style.backgroundColor='white';
      }



 var Red=document.getElementById('Red');
     Red.onmouseover=function(){
     	divOne=document.getElementById('divOne');
     	divOne.className='class-one';
     }
 var Green=document.getElementById('Green');
     Green.onmouseover=function(){
     	// divOne=document.getElementById('divOne');
     	divOne.className='class-two';
     }
 var Blue=document.getElementById('Blue');
     Blue.onmouseover=function(){
     	// divOne=document.getElementById('divOne');
     	divOne.className='class-three';
     }
 var Dafault=document.getElementById('Dafault');
     Dafault.onmouseover=function(){
     	// divOne=document.getElementById('divOne');
     	divOne.className='my-style';
     }