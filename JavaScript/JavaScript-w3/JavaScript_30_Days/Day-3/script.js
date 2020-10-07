	function myFunc() {
		
		 if (isNaN(document.getElementById('input').value)) {
                 
                 alert('Please input a Number.');

           } else {

                 let i = 1;
		         let inputValue = document.getElementById('input').value;

		         while (i <= 10) {

		             let create = document.createElement('H1');
		             let text   = document.createTextNode(inputValue + ' X ' + i + ' = ' + i * inputValue);

		             create.appendChild(text);
		             show.appendChild(create);

		             i++;

		         }


			 }


	}


	function myFunc2() {
		
        document.getElementById('input').value = '';
        
        let i = 0;
        while (i < 10) {
               
               document.getElementById('show').removeChild(show.childNodes[0]);

               i++;
        }
	}