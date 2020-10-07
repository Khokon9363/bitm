var btnElement=document.getElementById('btn');
    btnElement.onclick=function(){
      var startingNumber=document.getElementById('startingNumber').value;
      var endingNumber=document.getElementById('endingNumber').value;
     
      var res=' ';
     for(x=startingNumber; x<=endingNumber; x++){
     	  // document.write(x+' '); //print hobe
     	     res+=x+' '; //res=res+x+' '   //duitai kintu string
     };
   document.getElementById('result').value=res;
  };



                    //css

  // var redBtn=document.getElementById('redBtn');
  //     redBtn.onmouseover=function(){
  // var divOne=document.getElementById('divOne');
  //     divOne.style.backgroundColor='red';
  //    };

  // var greenBtn=document.getElementById('greenBtn');
  //     greenBtn.onmouseover=function(){
  // // var divOne=document.getElementById('divOne');
  //     divOne.style.backgroundColor='green';
  //    };

  // var blueBtn=document.getElementById('blueBtn');
  //     blueBtn.onmouseover=function(){
  // // var divOne=document.getElementById('divOne');
  //     divOne.style.backgroundColor='blue';
  //    };

  // var dafaultBtn=document.getElementById('dafaultBtn');
  //     dafaultBtn.onmouseover=function(){
  // // var divOne=document.getElementById('divOne');
  //     divOne.style.backgroundColor='white';
  //    };





  var redBtn=document.getElementById('redBtn');
      redBtn.onmouseover=function(){
  var divOne=document.getElementById('divOne');
      divOne.className='class-one';
      }

   var greenBtn=document.getElementById('greenBtn');
      greenBtn.onmouseover=function(){
  // var divOne=document.getElementById('divOne');
      divOne.className='class-two';
      }

   var blueBtn=document.getElementById('blueBtn');
      blueBtn.onmouseover=function(){
  // var divOne=document.getElementById('divOne');
      divOne.className='class-three';
      }

  var dafaultBtn=document.getElementById('dafaultBtn');
      dafaultBtn.onmouseover=function(){
  // var divOne=document.getElementById('divOne');
      divOne.className='my-style';
      }
 

