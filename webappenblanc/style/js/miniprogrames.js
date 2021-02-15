//Variables Simples

var num1=1;
var num2=2;
var result = num1 + num2;
alert(result);

//Variables complexes
var persona = {
    nom: "Hector",
    cognom: "Garcia",
    edat: 20,
      nomcomplet : function() {
      return this.nom + " " + this.cognom;
    }
  };
  
  alert (persona.nomcomplet())