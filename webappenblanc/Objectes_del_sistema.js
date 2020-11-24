function buscar(){

    var txt = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    var sln = txt.length;
    alert(sln);
    }
    
    buscar();
    
    function redondear_decimales(){
    
    var x = 9.656;  // returns 9.656
    var z = x.toPrecision(2);
    
    alert(z);
    
    }
    redondear_decimales();
    
    function añadir_elemento(){
    var fruits = ["Banana", "Orange", "Apple", "Mango"];
    fruits.push("Kiwi")
    
    for(i=0;i<fruits.length;i++){
    alert(fruits[i]);
    
    }
    
    }
    añadir_elemento();
    
    function get_mes(){
    
    var d = new Date();
    alert(d.getMonth());
    
    }
    get_mes();
    
    function set_dia(){
    var d = new Date();
    d.setDate(15);
    alert(d);
    
    }
    set_dia();