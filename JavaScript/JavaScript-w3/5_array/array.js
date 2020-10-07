// Array
// let fruits = ['Apple','Pine-apple','Jack-fruit','Mango'];
/*
let fruits = [
    
    'Apple',
    'Pine-apple',
    'Jack-fruit',
    'Mango'

];
// console.log(fruits[0]);
// console.log(fruits+'\n');
*/

/*
fruits[0] = 'Choconut'    //  changing values
console.log(fruits+'\n');
*/

/*
let fruitsLength = fruits.length ;  // length
console.log(fruitsLength);

let firstFruit = fruits[0];  // access first value
let lastFruit  = fruits[fruits.length - 1];  // access last value
console.log(firstFruit);
console.log(lastFruit);
*/



 // example
/*
let alphabets = [
        
        'A',
        'B',
        'C',
        'D',
        'E',
        'F',
        'G',
        'H',
        'I',
        'J'

];
 // console.log(alphabets);
 // document.getElementById('demo').innerHTML = alphabets; 
  


// let list = '<ul>';

// for (var i = 0; i < alphabets.length; i++) {
// 	 list += '<li>' + alphabets[i] + '</li>';

//   document.getElementById('demo').innerHTML = list + '</ul>';  // loop er moddhe let deoya lage na
// }

for (var i = 0; i < alphabets.length; i++) {
	
	// console.log(alphabets[i]);
	document.write(alphabets[i]);
}
*/





// Real Practice
/*
let Numbers = [
   
   1,2,3,4,5,6,7,8,9

]; console.log(Numbers);            // pashapashi with comma
   console.log(Numbers.join(' '));  // pashapashi without comma




function addItems(){

	Numbers.push('Lemon');    // add last element
	// Numbers.unshift('Lemon'); // add first element
    
    console.log(Numbers);
} 
function removeItems() {

	Numbers.pop();     // remove last element
	// Numbers.shift();   // remove first element

	console.log(Numbers);
}
*/





// practice
/*
let items =[];
function practice() {
   
   let item = prompt('Add a name new item');
   
   let x = items.push(item);

   console.log(items);
   document.getElementById('prac').innerHTML = items.join(' ');
}
*/


// splice() method    == aksathe onek value add kora in an array
/*
//  The first parameter (1) defines the position where new elements should be added .
//  The second parameter (0) defines how many elements should be removed .

let Animals = [

     'a',
     'b',
     'c',
     'd'
];

// Animals.splice(1, 0, 'Hello', 'JavaScript'); // just add in an array
// console.log(Animals);

// Animals.splice(1,2,'Hello','JS=','JavaScript');
// console.log(Animals);

Animals.splice(0,3); // remove 3 values from first
console.log(Animals);
*/


/*
// slice() method
let Animals = [

     'a',
     'b',
     'c',
     'd'
];
console.log(Animals.slice(1));  // 1 ta remove
*/