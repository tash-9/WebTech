// 1. Print a message to the console
console.log("Hello, World!");

//  2. Variable Declaration and Assignment
var name = "John";
var age = 25;
console.log("My name is " + name + " and I am " + age + " years old.");

// 3.Simple Arithmetic
var num1 = 5;
var num2 = 10;
var sum = num1 + num2;
console.log("The sum of " + num1 + " and " + num2 + " is " + sum);

// 4. Checking Odd or Even
var number = 7;
if (number % 2 === 0) {
 console.log(number + " is even.");
} else {
 console.log(number + " is odd.");
}

// 5. Temperature Conversion 
//  Q.Write a program that converts Celsius to Fahrenheit. Formula: Fahrenheit = (Celsius × 9/5) + 32
var celsius = 25;
var fahrenheit = (celsius * 9/5) + 32;
console.log(celsius + "°C is equal to " + fahrenheit + "°F");

// 6. Simple Calculator
// Q. Create a simple calculator that performs addition, subtraction, multiplication, and division on two numbers.
var num1 = 10;
var num2 = 5;
console.log("Addition: " + (num1 + num2));
console.log("Subtraction: " + (num1 - num2));
console.log("Multiplication: " + (num1 * num2));
console.log("Division: " + (num1 / num2));


// 7. Find Largest Number
var num1 = 15;
var num2 = 22;
var num3 = 8;

var largest = num1;

if (num2 > largest) {
 largest = num2;
}
if (num3 > largest) {
 largest = num3;
}
console.log("The largest number is: " + largest);

// 8. Loop through Numbers (1 to 10)
for (var i = 1; i <= 10; i++) {
 console.log(i);
}

/* 9. Write a program to find the factorial of a number using a loop.
    For example, Factorial of 5 = 5 × 4 × 3 × 2 × 1 = 120. */
var num = 5;
var factorial = 1;
for (var i = num; i > 0; i--) {
 factorial *= i;
}
console.log("Factorial of " + num + " is: " + factorial);

//  10. Reverse a String
var str = "JavaScript";
var reversedStr = "";
for (var i = str.length - 1; i >= 0; i--) {
 reversedStr += str[i];
}
console.log("Reversed string is: " + reversedStr);

// 11.Sum of Array Elements
var arr = [1, 2, 3, 4, 5];
var sum = 0;
for (var i = 0; i < arr.length; i++) {
 sum += arr[i];
}
console.log("Sum of array elements: " + sum);


// 12.Prime Number Checker
var num = 29;
var isPrime = true;
for (var i = 2; i < num; i++) {
 if (num % i === 0) {
 isPrime = false;
 break;
 }
}
if (isPrime) {
 console.log(num + " is a prime number.");
} else {
 console.log(num + " is not a prime number.");
}

/*  13. Array Manipulation
    Write a program that adds a number to an array, removes the first element, and displays the modified array.*/
var arr = [1, 2, 3, 4, 5];

// Add/Push an element to the end of the array
arr.push(6);

// Remove/Pop/Shift the first element
arr.shift();
console.log("Modified array: " + arr);

// 14. Simple Object Example
var person = {
 name: "Alice",
 age: 30
};
console.log("Name: " + person.name);
console.log("Age: " + person.age);


