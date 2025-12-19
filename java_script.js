// var x =3;

// document.writeln(x==="3");

// let temp = 25;

//     if (temp>=100) {
//         document.writeln("boiling");
//     } else if(temp<100 && temp>=70) {
//         document.writeln("hot");
//     }else if(temp<70 && temp >=30){
//         document.writeln("warm");
//     }else{
//         document.writeln("idc");
//     }

//     let day = 3;
//     let FirstName = "omar";

//     switch (FirstName) {
//         case omar:
//             document.writeln("my name is omar");
//             break;
//         case 2 :
//             document.writeln("Monday");
//             break;
//         case 3 :
//             document.writeln("Tuesday");
//             break;
//         default:
//             document.writeln("get a job");    
//     }


//     let s;
//     t = 140;
//     if (t >= 100 ) {
//         s = "Boiling";
//     } else {
//         document.writeln("not boiling");
//     }


//     let f =(f>=100)? "Boiling": "not Boiling";



//     for (let aaa = 0; aaa< 5; aaa++) {
//         document.writeln(aaa);
        
//     }


//     var f =3;
//     while (f < 5){
//         document.writeln(f);
//         f++
//     }

//     var f =3;

//     do {
//         document.writeln(f);
//         f++
//     } while (f = 3);




// function welcome() {
//     console,log("welcome")
// }

// welcome()


// function sum(num1 = 3 , num2 = 4) {
//     var result = num1 + num2;
//     console.log(result)
// }


// sum(1,3)


// function multiplay(n1 , n2) {
//     let k =2 
//     var e = 6
//     var result = n1*n2;
//     return result
// }
// console.log(multiplay(5,9));



// var w = () => {
//     console.log("this is an annoymous function")
// }

// w()


// function call_fn(anotherfn){
//     console.log("hii")
//     anotherfn()
// }


// call_fn(function(){
//     console.log("this is func")
// })


//     for (let aaa = 0; aaa< 5; aaa++) {
//         let b = 1
//         var t = 2

//         console.log(i);
//     }    
//     console.log(b);



// var arr= [100,700,900,700]
// console.log(arr[0])

// arr[3] = 300
// console.log(arr)

// console.log(arr.length)

// arr.pop()
// console.log(arr)

// arr.push(700,980)
// console.log(arr)


// arr.splice(2,0, "name")
// console.log(arr)

// arr.shift()
// console.log(arr)

// arr.unshift(40)
// console.log(arr)


let arr=[1,2,4]
let arr2=[7,8,9]
let new_arr = arr.concat(arr2)

console.log(new_arr)

let arr3 = ["hello" , "omar" , "and" , "omar"]

let str_arr = arr3.join(",")

console.log(str_arr)

arr3.sort()

console.log(arr3)


let arr4=[10,7,2,5]
arr4.sort((a,b)=>a-b)

console.log(arr4)

let arr5=[10,7,2,5]
arr5.sort((a,b)=>b-a)

console.log(arr5)


// for (var i = 0; i < arr4.length(); i++) {
//     console.log(arr4[i]) 
// }


arr4.forEach(function(element){
    console.log(element+1)
})


for(var element of arr3){
    console.log(element)
}


var obj1 = document.getElementById("ww")
console.log(obj1)


var obj2 = document.getElementsByClassName("c1")
console.log(obj2)

var obj3 = document.getElementsByTagName("h2")[0]
console.log(obj3)


var obj4 = document.querySelector("container")
console.log(obj4)

obj1.innerHTML = "first header"

console.log(obj1)


var obj5 = document.getElementsByTagName("input")[0]
obj5.setAttribute("placeholder" , "enter")
obj5.setAttribute("value" , "ali")

obj4.style.background="gray"


var element1 = document.createElement("div")
var text = document.createTextNode("this is node")

element1.appendChild(text)

document.body.appendChild(element)


var btn = document.getElementsByTagName("button")[1]
btn.addEventListener("click", function(){alert('hi')})


let person = {
    name: "Omar",
    age: 18,
    welcome: function() {
        console.log("Welcome " + this.name);
    }
};
person.welcome();


function Person(name, age) {
    this.name = name;
    this.age = age;
}
let student = new Person("Ali", 21);
console.log("Student Name: " + student.name);

class Animal {
    constructor(name) {
        this.name = name;
    }
    speak() {
        console.log(this.name + " makes a sound.");
    }
}

class Dog extends Animal {
    speak() {
        console.log(this.name + " barks!");
    }
}

let myDog = new Dog("Rex");
myDog.speak();