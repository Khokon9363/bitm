$('#firstName').keyup(function() {
	// alert('Test');
  var firstNameValue=$('#firstName').val();
      $('#res1').text(firstNameValue);   //input nile .text er jaygay .val hobe
});

$('#lastName').keyup(function() {
  var lastNameValue=$('#lastName').val();
      $('#res2').text(lastNameValue);
});

$('#lastName').blur(function(){
	var firstNameValue=$('#firstName').val();
	var lastNameValue=$('#lastName').val();
	var fullNameValue=firstNameValue+' '+lastNameValue;
	    $('#res3').text(fullNameValue);
});



            // DOM
// alert(document.getElementById('input').value='gdffdfhd');
     document.getElementById('input').value='gdffdfhd';
// alert(document.getElementById('h1').innerHTML='aaassdsdfdg sadgffg');
      document.getElementById('h1').innerHTML='aaassdsdfdg sadgffg';
// alert(document.getElementById('img').getAttribute('src','image/carousel2.jpeg'));
document.getElementById('img').setAttribute('src','image/carousel3.jpg');






var newHeadingElement=document.createElement('h1');
var newParagraphElement=document.createElement('p');

 newHeadingElement.innerHTML="This is a heading.";
 newParagraphElement.innerHTML="This is a paragraph.";
 document.getElementById('div').appendChild(newHeadingElement);
 document.getElementById('div').appendChild(newParagraphElement);








// function createHeadingParagraphElement() {
// 	var newHeadingElement=document.createElement('h1');
//  var newParagraphElement=document.createElement('p');

//     newHeadingElement.innerHTML="This is a heading.";
//     newParagraphElement.innerHTML="This is a paragraph.";
//  document.getElementById('div').appendChild(newHeadingElement);
//  document.getElementById('div').appendChild(newParagraphElement);
// }
//  document.getElementById('btn').onclick=function(){
//  	createHeadingParagraphElement();
//  }

        //same
document.getElementById('btn').onclick=function(){
	var newHeadingElement=document.createElement('h1');
    var newParagraphElement=document.createElement('p');

    newHeadingElement.innerHTML="This is a heading.";
    newParagraphElement.innerHTML="This is a paragraph.";
 document.getElementById('div').appendChild(newHeadingElement);
 document.getElementById('div').appendChild(newParagraphElement);
}











        // img gallary
 $('#img1').click(function(){
 	var imgSrcValue=$(this).attr('src');
 	// alert('test')
 	$('#mainImage').attr('src',imgSrcValue);
 });

 $('#img2').click(function(){
 	var imgSrcValue=$(this).attr('src');
 	// alert('test')
 	$('#mainImage').attr('src',imgSrcValue);
 });

 $('#img3').click(function(){
 	var imgSrcValue=$(this).attr('src');
 	// alert('test')
 	$('#mainImage').attr('src',imgSrcValue);
 });

 $('#img4').click(function(){
 	var imgSrcValue=$(this).attr('src');
 	// alert('test')
 	$('#mainImage').attr('src',imgSrcValue);
 });

 $('#img5').click(function(){
 	var imgSrcValue=$(this).attr('src');
 	// alert('test')
 	$('#mainImage').attr('src',imgSrcValue);
 });