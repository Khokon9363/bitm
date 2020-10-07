
   const secondHand = document.querySelector('.second-hand');
   const minHand = document.querySelector('.min-hand');
   const hourHand = document.querySelector('.hour-hand');

   function clock() {
   	  
         const fullTime = new Date();

         const seconds = fullTime.getSeconds();
         const secondsInDegree = ((seconds / 60) * 360)  + 90;
         secondHand.style.transform = 'rotate(' + secondsInDegree + 'deg)';

         const mins = fullTime.getMinutes();
         const minsInDegrees = (mins / 60) * 360 + 90;
         minHand.style.transform = 'rotate(' + minsInDegrees + 'deg)';

         const hours = fullTime.getHours();
         const hoursInDegree = ((hours / 12) * 360) + 90;
         hourHand.style.transform = 'rotate(' + hoursInDegree + 'deg)';


   }


   setInterval(clock,1000) // no reload
   clock();




   // extra 

function time() {

	const time = new Date();

    const sec = time.getSeconds();
    const min = time.getMinutes();
    const hour = time.getHours();


	document.getElementById('time').innerHTML = hour +':'+ min +':'+ sec;
	document.getElementById('times').innerHTML = time.toLocaleTimeString();

}

setInterval(time,1000);
time();






