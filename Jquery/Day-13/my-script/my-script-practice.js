
                  // form
$('#firstName').keyup(function () {
	var firstNameValue=$('#firstName').val();
	 $('#res1').text(firstNameValue);
});
// $('#firstName').keyup(function () {
// 	$('#res1').text($('#firstName').val());
// });

$('#lastName').keyup(function () {
	var lastNameValue=$('#lastName').val();
	 $('#res2').text(lastNameValue);
});

$('#lastName').blur(function () {
	var firstNameValue=$('#firstName').val();
	var lastNameValue=$('#lastName').val();
	var fullNameValue=firstNameValue+' '+lastNameValue;
	 $('#res3').html(fullNameValue);
});




                // DOM  take & give
 // alert(document.getElementById('input').value='Hello Dom');
       // document.getElementById('input').value='Hello Dom';
       $('#input').val('Hello DOM');

 // alert(document.getElementById('h1').innerHTML='Hello DOM');
        // document.getElementById('h1').innerHTML='Hello DOM';
        $('#h1').text('Hello DOM')

        // document.getElementById('img').setAttribute('src','image/carousel4.jpg');
        $('#img').attr('src','image/carousel4.jpg');




             // Create a HTMl Element by JS
  var createdHeadingElement=document.createElement('h1');
  var createdParagraphElement=document.createElement('p');
      createdHeadingElement.innerHTML="This is a headline.";
      createdParagraphElement.innerHTML="This is a paragraph."
  document.getElementById('div').appendChild(createdHeadingElement);
  document.getElementById('div').appendChild(createdParagraphElement);




         // Create Element By Click
 // document.getElementById('btn').onclick=(function(){
 // 	var createHeadingElement=document.createElement('h1');
 // 	var createParagraphElement=document.createElement('p');
 // 	    createHeadingElement.innerHTML="This is a headline.";
 // 	    createParagraphElement.innerHTML="This is a paragraph.";
 // 	document.getElementById('div').appendChild(createHeadingElement);
 // 	document.getElementById('div').appendChild(createParagraphElement);
 // });

                // Same ata function diye banano
function createHeadingParagraphElement() {
   var createHeadingElement=document.createElement('h1');
   var createParagraphElement=document.createElement('p');
       createHeadingElement.innerHTML="This is a headline.";
       createParagraphElement.innerHTML="This is a paragrph.";
    document.getElementById('div').appendChild(createHeadingElement);
    document.getElementById('div').appendChild(createParagraphElement);
}
document.getElementById('btn').onclick=function(){
	createHeadingParagraphElement();
}



                   //Image Gallery
 // $('#img1').click(function(){
 // 	var imageSrcValue=$('#img1').attr('src');
 // 	$('#mainImage').attr('src',imageSrcValue);
 // })
 // $('#img2').click(function(){
 // 	var imageSrcValue=$('#img2').attr('src');
 // 	$('#mainImage').attr('src',imageSrcValue);
 // })
 // $('#img3').click(function(){
 // 	var imageSrcValue=$('#img3').attr('src');
 // 	$('#mainImage').attr('src',imageSrcValue);
 // })
 // $('#img4').click(function(){
 // 	var imageSrcValue=$('#img4').attr('src');
 // 	$('#mainImage').attr('src',imageSrcValue);
 // })
 // $('#img5').click(function(){
 // 	var imageSrcValue=$('#img5').attr('src');
 // 	$('#mainImage').attr('src',imageSrcValue);
 // })

            // same get & set attribute
 document.getElementById('img1').onclick=function(){
 	var imageSrcValue=document.getElementById('img1').getAttribute('src');
 	document.getElementById('mainImage').setAttribute('src',imageSrcValue);
 }
 document.getElementById('img2').onclick=function(){
 	var imageSrcValue=document.getElementById('img2').getAttribute('src');
 	document.getElementById('mainImage').setAttribute('src',imageSrcValue);
 }
 document.getElementById('img3').onclick=function(){
 	var imageSrcValue=document.getElementById('img3').getAttribute('src');
 	document.getElementById('mainImage').setAttribute('src',imageSrcValue);
 }
 document.getElementById('img4').onclick=function(){
 	var imageSrcValue=document.getElementById('img4').getAttribute('src');
 	document.getElementById('mainImage').setAttribute('src',imageSrcValue);
 }
 document.getElementById('img5').onclick=function(){
 	var imageSrcValue=document.getElementById('img5').getAttribute('src');
 	document.getElementById('mainImage').setAttribute('src',imageSrcValue);
 }


























