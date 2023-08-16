const number=[12,13,14,15,16,17,18,19,20]
// for loop example
for(let i=0; i<number.length; i++){
    // console.log(number[i])
}

// while loop example:
let i=0;
while(i<number.length){
    // console.log(number[i])
    i++
}

// do while loop example:
let j=0;
do{
    console.log(number[j])
    j++
}while(j<number.length)
// for of loop example:
const dataR=['a', 'b', 'c', 'd', 'e']
for (const item of dataR) {
    console.log(item)
}
// for in loop example:
const dataG={
    name: 'rowdra',
    age:23,
    hobby: ['football', 'basketball']
}
for(const data in dataG) {
    console.log(dataG[data])
}