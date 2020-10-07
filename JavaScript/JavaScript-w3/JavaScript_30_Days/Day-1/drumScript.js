
 // function valZero(data) {
 // 	let val = data.value = '';
 // }


  window.addEventListener('keydown',playSound);

        function playSound(data) {
        	   const audio = document.querySelector(`audio[data-key="${data.keyCode}"]`);
               const key = document.querySelector(`div[data-key="${data.keyCode}"]`);

            audio.currentTime = 0;

            switch(data.keyCode) {
			  case 65:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 83:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 68:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 70:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 71:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 72:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 74:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 75:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 76:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 90:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 88:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 67:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 86:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 66:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 78:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 77:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 81:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 87:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 69:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 82:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 84:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 89:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 85:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 73:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 79:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 80:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 90:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 88:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 67:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 86:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 66:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 78:
			    audio.play();
			    key.classList.add("playing");
			    break;
			  case 77:
			    audio.play();
			    key.classList.add("playing");
			    break;
			}
        }
  window.addEventListener('keyup',removeSound);

        function removeSound(data) {
               const key = document.querySelector(`div[data-key="${data.keyCode}"]`);
        	
        	switch(data.keyCode) {
			  case 65:
			    key.classList.remove("playing");
			    break;
			  case 83:
			    key.classList.remove("playing");
			    break;
			  case 68:
			    key.classList.remove("playing");
			    break;
			  case 70:
			    key.classList.remove("playing");
			    break;
			  case 71:
			    key.classList.remove("playing");
			    break;
			  case 72:
			    key.classList.remove("playing");
			    break;
			  case 74:
			    key.classList.remove("playing");
			    break;
			  case 75:
			    key.classList.remove("playing");
			    break;
			  case 76:
			    key.classList.remove("playing");
			    break;
			  case 90:
			    key.classList.remove("playing");
			    break;
			  case 88:
			    key.classList.remove("playing");
			    break;
			  case 67:
			    key.classList.remove("playing");
			    break;
			  case 86:
			    key.classList.remove("playing");
			    break;
			  case 66:
			    key.classList.remove("playing");
			    break;
			  case 78:
			    key.classList.remove("playing");
			    break;
			  case 77:
			    key.classList.remove("playing");
			    break;
			  case 81:
			    key.classList.remove("playing");
			    break;
			  case 87:
			    key.classList.remove("playing");
			    break;
			  case 69:
			    key.classList.remove("playing");
			    break;
			  case 82:
			    key.classList.remove("playing");
			    break;
			  case 84:
			    key.classList.remove("playing");
			    break;
			  case 89:
			    key.classList.remove("playing");
			    break;
			  case 85:
			    key.classList.remove("playing");
			    break;
			  case 73:
			    key.classList.remove("playing");
			    break;
			  case 79:
			    key.classList.remove("playing");
			    break;
			  case 80:
			    key.classList.remove("playing");
			    break;
			  case 90:
			    key.classList.remove("playing");
			    break;
			  case 88:
			    key.classList.remove("playing");
			    break;
			  case 67:
			    key.classList.remove("playing");
			    break;
			  case 86:
			    key.classList.remove("playing");
			    break;
			  case 66:
			    key.classList.remove("playing");
			    break;
			  case 78:
			    key.classList.remove("playing");
			    break;
			  case 77:
			    key.classList.remove("playing");
			    break;
			}

        }
