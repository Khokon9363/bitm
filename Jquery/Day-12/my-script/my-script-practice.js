     // Syntex
 // $(selector).action()

 // alert(document.getElementById('h1').innerHTML);

 alert($('#h1').text());
 // alert($('#h1').html());

 $('#h1').text('Hello Jquery.');
 // $('#h1').html('Hello Jquery.');


              // form
 $('#btn').click(function(){
 	var firstNameValue=$('#firstName').val();
 	var lastNameValue=$('#lastName').val();
 	var fullNameValue=firstNameValue+' '+lastNameValue;
 	$('#fullName').val(fullNameValue);
 });

                     // Same jinis
// $('#btn').click(function() {
// 	$('#fullName').val($('#firstName').val()+' '+$('#lastName').val());
// })


          // Calculator
$('#addition').click( function() {
	var FirstNumberValue=Number($('#firstNumber').val());
	var secondNumberValue=Number($('#secondNumber').val());
	var resultValue=FirstNumberValue+secondNumberValue;
	$('#result').val(resultValue);
})
$('#substraction').click( function() {
	var FirstNumberValue=Number($('#firstNumber').val());
	var secondNumberValue=Number($('#secondNumber').val());
	var resultValue=FirstNumberValue-secondNumberValue;
	$('#result').val(resultValue);
})
$('#multiplacation').click( function() {
	var FirstNumberValue=Number($('#firstNumber').val());
	var secondNumberValue=Number($('#secondNumber').val());
	var resultValue=FirstNumberValue*secondNumberValue;
	$('#result').val(resultValue);
})
$('#division').click( function() {
	var FirstNumberValue=Number($('#firstNumber').val());
	var secondNumberValue=Number($('#secondNumber').val());
	var resultValue=FirstNumberValue/secondNumberValue;
	$('#result').val(resultValue);
})
$('#reminder').click( function() {
	var FirstNumberValue=Number($('#firstNumber').val());
	var secondNumberValue=Number($('#secondNumber').val());
	var resultValue=FirstNumberValue%secondNumberValue;
	$('#result').val(resultValue);
})