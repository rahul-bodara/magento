var obj={name: "narola", city: "surat"};
console.log(obj);





function sum(a,b) {
    return a+b;
}
console.log(sum(2,5));






var nano = function () {
    console.log(Date());
    var d = new Date();
    console.log(d.getMonth());
    //  d.getMonth() +"/"+  d.getDate()+"/"+d.getFullYear();
}
nano();
setTimeout(nano,5000);





function request(order) {
    console.log("request", order)
    responce(function (){
        console.log("developer data", order);
    })
}
function responce(callback) {
    setTimeout(callback, 500);

}
request('1');
request('2');
request('3');

var New = {
    name : "RB",
    city : "surat"
};

var Temp = New;
Temp.name = "red";

console.log(New.name);



console.log(20 == "20");
console.log(20 === "20");



var Rahul = {
    Name : function () {
        console.log(this === Rahul);
    }
};

Rahul.Name();

function workless() {
    console.log(this == global);

}

workless();


function parson(name){
    this.name = name
}
parson.prototype = {

    temp : function () {
        console.log("May name is " + this.name)
    }
};

var nice = new parson("Rahul Bodara");
nice.temp();


var Fexport = require('./movie');
// Fexport.a();

Fexport.Name2();
Fexport.a();
