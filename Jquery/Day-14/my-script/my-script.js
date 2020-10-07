function checkFirstName(){
	var firstNameLength=$('#firstName').val().length;
    if (firstNameLength>=6 && firstNameLength<=15) {
          $('#firstNameError').text(' ');
    } else {
          $('#firstNameError').text('First name should be between 6 to 15 character.');
    }	
};

$('#firstName').click(function(){
	checkFirstName();
});
$('#firstName').blur(function(){
	checkFirstName();
});
$('#firstName').keyup(function(){
     checkFirstName();	
});




function checkLastName(){
	var lastNameLength=$('#lastName').val().length;
    if (lastNameLength>=6 && lastNameLength<=15) {
          $('#lastNameError').text(' ');
    } else {
          $('#lastNameError').text('Last name should be between 6 to 15 character.');
    };	
};

$('#lastName').click(function(){
	checkLastName();
});
$('#lastName').blur(function(){
	checkLastName();
});
$('#lastName').keyup(function(){
	checkLastName();
});


function checkPassword() {
  var passwordLength=$('#password').val().length;
  if (passwordLength>=8 && passwordLength<=32) {
    $('#passwordError').text('Perferct Password');
  } else {
    $('#passwordError').text('Password should be between8 to 32 character.');
  }
};
 $('#password').click(function () {
  checkPassword();
 });
 $('#password').blur(function () {
  checkPassword();
 });
 $('#password').keyup(function () {
  checkPassword();
 });



function checkConfirmPassword() {
  var passwordValue=$('#password').val();
  var confirmPasswordValue=$('#confirmPassword').val();
  if (passwordValue==confirmPasswordValue) {
    $('#confirmPasswordError').text('Confirm.');
  } else {
    $('#confirmPasswordError').text('Try again.');
  }
 };
$('#confirmPassword').click(function () {
  checkConfirmPassword();
});
$('#confirmPassword').blur(function () {
  checkConfirmPassword();
});
$('#confirmPassword').keyup(function () {
  checkConfirmPassword();
});




// function checkEmailAddress() {
// 	var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z{3,4}$/i];);
// 		if (pattern.test($('#email').val())) {
// 			$('#emailError').text(' ');
// 		} else {
// 			$('#emailError').text('Email address is invalid');
// 		}
// 	});
//   $('#email').blur(function(){
//   	checkEmailAddress();
//   });
//   $('#email').blur(function(){
//   	checkEmailAddress();
//   });
//   $('#email').keyup(function(){
//   	checkEmailAddress();
//   });
  



$('#registrationForm').submit(function(){
	return false;
	// return true;
});