 

 var additionBtn=document.getElementById('addition');
    additionBtn.onclick=function(){
    	var firstNumberValue=Number(document.getElementById('firstNumber').value);
    	var secondNumberValue=Number(document.getElementById('secondNumber').value);
    	var result=firstNumberValue+secondNumberValue;
    	 document.getElementById('result').value=result;
    };
 var substractionBtn=document.getElementById('substraction');
    substractionBtn.onclick=function(){
    	var firstNumberValue=Number(document.getElementById('firstNumber').value);
    	var secondNumberValue=Number(document.getElementById('secondNumber').value);
    	var result=firstNumberValue-secondNumberValue;
    	 document.getElementById('result').value=result;
    };
 var multiplacationBtn=document.getElementById('multiplacation');
    multiplacationBtn.onclick=function(){
    	var firstNumberValue=Number(document.getElementById('firstNumber').value);
    	var secondNumberValue=Number(document.getElementById('secondNumber').value);
    	var result=firstNumberValue*secondNumberValue;
    	 document.getElementById('result').value=result;
    };
 var divisionBtn=document.getElementById('division');
    divisionBtn.onclick=function(){
    	var firstNumberValue=Number(document.getElementById('firstNumber').value);
    	var secondNumberValue=Number(document.getElementById('secondNumber').value);
    	var result=firstNumberValue/secondNumberValue;
    	 document.getElementById('result').value=result;
    };
 var reminderBtn=document.getElementById('reminder');
    reminderBtn.onclick=function(){
    	var firstNumberValue=Number(document.getElementById('firstNumber').value);
    	var secondNumberValue=Number(document.getElementById('secondNumber').value);
    	var result=firstNumberValue%secondNumberValue;
    	 document.getElementById('result').value=result;
    };
           //clear btn
 var clearBtn=document.getElementById('clear');
     clearBtn.onclick=function(){
     	var x='';
     	 document.getElementById('result').value=x;
     	 document.getElementById('firstNumber').value=x;
     	 document.getElementById('secondNumber').value=x;
     };

          //back btn 
 var ansBtn=document.getElementById('ans');
     ansBtn.onclick=function(){
     	ans=document.getElementById('result').value;
     	 alert('Your Answer is'+' '+ans);
     };