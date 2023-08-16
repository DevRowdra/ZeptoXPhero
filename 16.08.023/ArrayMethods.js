const numberArray =[23,24,25,26,12,42,22,53,63]


const doubleArray = numberArray.map(number => number * 2);
console.log(doubleArray); 


const evenNum = numberArray.filter(number => number % 2 === 0);
console.log(evenNum); 

const sum = numberArray.reduce((accumulator, currentValue) => accumulator + currentValue, 0);
console.log( sum);

numberArray.forEach(number => {
    console.log(number);
});

const firstbigTHir = numberArray.find(number => number > 30);
console.log( firstbigTHir);





const sortedArray = numberArray.slice().sort((a, b) => a - b);
console.log( sortedArray); 

const includes42 = numberArray.includes(42);
console.log( includes42)

const indexOf42 = numberArray.indexOf(42);
console.log(indexOf42); // 5

const lastIndexOf25 = numberArray.lastIndexOf(25);
console.log(lastIndexOf25); // 2


const joinedString = numberArray.join(" - ");
console.log( joinedString);


const slicedArray = numberArray.slice(2, 5);
console.log("slice:", slicedArray); 

const reversedArray = numberArray.slice().reverse();
console.log( reversedArray);

const poppedElement = numberArray.pop();
console.log( poppedElement)
console.log( numberArray); 

numberArray.push(100, 200);
console.log( numberArray); 

const shiftedElement = numberArray.shift();
console.log(shiftedElement);
console.log( numberArray);

numberArray.unshift(10, 20);
console.log( numberArray)