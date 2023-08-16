/*
we have three types of scopes in js . the are local scopes global scopes and block scopes;
*/
// global scopes 
var num=12;
function test() {
    console.log(num)
}
console.log(num) // we can ge the values from any where we want
test()

// local scopes

function test1() {
    const nums=12;
    console.log(nums)
}
test1()
console.log(nums) // here we get some error messages
// block scopes

if(true) {
    let num=12;
    console.log(num) // it is a block scope
}
console.log(num) 