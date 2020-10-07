              // syntex
      // $(selector).action()



// alert($('#h1').text());
// alert($('#h1').html());

// alert(document.getElementById('h1').innerHTML);

// ($('#h1').text('Hello Jquery'));


$('#btn').click(function(){
	// alert('Test');
   var firstNameValue=$('#firstName').val();
   var lastNameValue=$('#lastName').val();
   var fullNameValue=firstNameValue+' '+lastNameValue;
   // alert('Your name is'+' '+fullNameValue);
   $('#fullName').val(fullNameValue);
});


          //calculator
$('#addition').click(function(){
	var firstNumberValue=Number($('#firstNumber').val());
	var lastNumberValue=Number($('#lastNumber').val());
	var ResultValue=firstNumberValue+lastNumberValue;
	$('#result').val(ResultValue);
});

$('#substraction').click(function(){
	var firstNumberValue=Number($('#firstNumber').val());
	var lastNumberValue=Number($('#lastNumber').val());
	var ResultValue=firstNumberValue-lastNumberValue;
	$('#result').val(ResultValue);
});

$('#multiplacation').click(function(){
	var firstNumberValue=Number($('#firstNumber').val());
	var lastNumberValue=Number($('#lastNumber').val());
    var ResultValue=firstNumberValue*lastNumberValue;
    $('#result').val(ResultValue);
});

$('#division').click(function(){
	var firstNumberValue=Number($('#firstNumber').val());
	var lastNumberValue=Number($('#lastNumber').val());
    var ResultValue=firstNumberValue/lastNumberValue;
    $('#result').val(ResultValue);
});

$('#reminder').click(function(){
	var firstNumberValue=Number($('#firstNumber').val());
	var lastNumberValue=Number($('#lastNumber').val());
    var ResultValue=firstNumberValue%lastNumberValue;
    $('#result').val(ResultValue);
});