function funcionPrincipal(callback1, callback2, callback3){
    //código de la función principal
    callback1(5,5);
    //más código de la función principal
    callback2();
    //más código de la función principal
    callback3();
    //más código si fuera necesario
}
//Funcion pasando parametros
function callback1(num1,num2){
        var resultado = num1 + num2;
        
        alert(resultado);
    }
//Funcion con estructuras de repeticion
function callback2(){
var fruits, text, fLen, i;
fruits = ["Banana", "Orange", "Apple", "Mango"];
Len = fruits.length;


for (i = 0; i < Len; i++) {
  alert( fruits[i] );

}

    }
//Funcion con estructuras de decision
  function callback3(){
  var time = new Date().getHours();
  if (time < 10) {
  greeting = "Good morning";
} else if (time < 20) {
  greeting = "Good day";
} else {
  greeting = "Good evening";
}
alert(greeting);
    } 
 
funcionPrincipal(callback1, callback2, callback3);