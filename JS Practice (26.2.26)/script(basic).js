// Declaring Variables (var)  
var name = "John";
var age = 25;


//Dynamic typing: 
var myVar = 10; // Initially a number
console.log(typeof myVar); // Outputs: number
myVar = "Hello"; // Now a string
console.log(typeof myVar); // Outputs: string

// Naming Rules for Variables
var firstName = "John"; // Valid
var _age = 30; // Valid
var $address = "NY"; // Valid
// Invalid examples (won't work):
// var 123name = "Alice"; // Invalid: Cannot start with a number
// var var = "test"; // Invalid: 'var' is a reserved keyword


//Re-declaration Behavior
var name = "John";
var name = "Alice"; // Re-declaring the variable
console.log(name); // Outputs: Alice


//Assigning Values
var name = "Bob"; // Assigning a string value
var age = 29; // Assigning a number value

//Primitive Data Types
//Boolean Represents true or false values.
var isActive = true;
var isFinished = false;
//Number represents both integer and floating-point numbers.
var age = 30; // Integer
var price = 19.99; // Floating-point number
//String represents text and is enclosed in single or double quotes.
var name = "John";
var greeting = 'Hello, world!';
//Undefined are variables that have been declared but not assigned a value.
var something;
console.log(something); // Outputs: undefined


//Complex Data Types
//1.Object is a collection of key-value pairs. Used to store structured data.
var person = {
name: "John",
age: 30,
isActive: true
};
//2.Function in JavaScript are objects too. Functions can be assigned to variables, passed around, and executed.
var greet = function() {
console.log("Hello!");
};
greet(); // Outputs: Hello!

//typeof Operator is used to determine the type of a given variable. (typeof "variable")
var name = "Alice";
console.log(typeof name); // Outputs: string
var age = 25;
console.log(typeof age); // Outputs: number
var isActive = true;
console.log(typeof isActive); // Outputs: boolean

//NaN Value stands for Not-a-Number. It is a special value in JavaScript used to represent a failed number operation. For example, dividing a non-numeric string by a number results in NaN.
var result = "hello" / 2;
console.log(result); // Outputs: NaN 