

var receta1 = Object.create(receta)
var receta2 = Object.create(receta)
var receta3 = Object.create(receta)
var receta4 = Object.create(receta)
var receta5 = Object.create(receta)
var receta6 = Object.create(receta)
var puntos = 0
var fallos = 0
var tiempo
var intervalo
var conjunto_recetas 
var intervalId = null
var puntosDB = 0
var negativePointDB = 0
///////////////////////////////////////////////////////////////////
function pushear(ob1, ob2, ob3, ob4, ob5, ob6){
    ob1.urlimg = "hamburguesa.png"
    ob1.resImg = "hamburguesa1.png"
    ob1.ingredientes.push(hamburguesa)

    ob2.urlimg = "ensalada1.png"
    ob2.resImg = "ensalada.png"
    ob2.ingredientes.push(ensalada)

    ob3.urlimg = "ensalada_fruta.png"
    ob3.resImg = "ensalada_fruta1.png"
    ob3.ingredientes.push(ensalada_fruta)

    ob4.urlimg = "arroz-pescado.png"
    ob4.resImg = "arroz-pescado1.png"
    ob4.ingredientes.push(arroz_con_pescado)

    ob5.urlimg = "arrozCc.png"
    ob5.resImg = "arrozCc1.png"
    ob5.ingredientes.push(arroz_con_carne)

    ob6.urlimg = "spaggh1.png"
    ob6.resImg = "spaggh.png"
    ob6.ingredientes.push(spagg_queso_tomate)

    conjunto_recetas = [ob1, ob2, ob3, ob4, ob5, ob6]

}
//////////////////////////////////////////////////////////////////////////////////////////////
    function mostrarReceta(array){
        document.getElementById("Receta").innerHTML= '<img src="../img/'+array.urlimg+'" class="mx-auto d-block" style="border: black 3px solid"/>'
        document.getElementById("Resultado").innerHTML= '<img src="../img/'+array.resImg+'" class="mx-auto d-block"/>'
    }
/////////////////////////////////////////////////////////////////////////////////////////////
    function AsignarNumRamdom(){
    var num = Math.round(Math.random()*5)
    return num
    }
///////////////////////////////////////////////////////////////////////////////////////////////
    function create_Checkpoint(array) {
        var check = array.length
        return check
    }
///////////////////////////////////////////////////////////////////////////////////////////////
    function mostrarRes(){
        document.getElementById("Resultado").style.display =""
    }
///////////////////////////////////////////////////////////////////////////////////////////////
    function Reload(){
        var numero = 0
        numero = numRamdom

            document.getElementById("Resultado").style.display="none"
            numRamdom = AsignarNumRamdom()
        
                if(numero == numRamdom){
                    Reload()
                }
        uptadedArr = pasarArray(conjunto_recetas[numRamdom].ingredientes[numRamdom])        
        chekPoint = create_Checkpoint(conjunto_recetas[numRamdom].ingredientes[numRamdom])
        mostrarReceta(conjunto_recetas[numRamdom])
    }
///////////////////////////////////////////////////////////////////////////////////////////////

    function iniciarContador(){
        tiempo = 0
        var crono = document.getElementById("crono")

       intervalId = setInterval(function(){
            crono.innerHTML = tiempo++ +" : Segundos"
        },1000)
    }
////////////////////////////////////////////////////////////////////////////////////////////////
    function sumarPuntos(){
        puntosDB = puntosDB + 500
        console.log(puntosDB);
        puntos = puntos + 1
        document.getElementById("puntuacion").innerHTML =(puntos)
        
    }
////////////////////////////////////////////////////////////////////////////////////////////////////////
    function sumarFallos(){
        negativePointDB =  negativePointDB + 300
        fallos= fallos + 1
        document.getElementById("fallos").innerHTML = (fallos)
    }
///////////////////////////////////////////////////////////////////////////////////////////////
    function pasarArray(array){
         var updated = []
        array.forEach(element => {
            updated.push(element)
        });
        
        return updated
    }
////////////////////////////////////////////////////////////////////////////////////////////////
    function BotonesBlancos(array) {
        array.forEach(element => {
            document.getElementById(element).style.backgroundColor="#242221";    
        });
    }
///////////////////////////////////////////////////////////////////////////////////////////////
    function check_Ingrediente(idIngrediente, array,puntos){
        var boolean = false
        array.forEach(function(item,index) {
            if(item == idIngrediente){
                chekPoint = chekPoint -1 
                boolean = true
                array.splice(index,1)
                document.getElementById(idIngrediente).style.backgroundColor = "green";
            }
        });
        if(chekPoint == 0){
            sumarPuntos()
            mostrarRes()
            if(puntos == 4){
                puntosDB = puntosDB - negativePointDB
                console.log(puntosDB);
               document.getElementById('ganar').style.display = ""
               document.getElementById('puntu').innerHTML = (puntosDB)
               document.cookie = "puntosJuegoCKM=" + puntosDB + "; path=/;";
               clearInterval(intervalId)
            }else{
                console.log("porqueentras qui")
            setTimeout(function(){ Reload()
                                BotonesBlancos(productos)}, 3000);
            }
        }
        if(boolean == false){
            document.getElementById(idIngrediente).style.backgroundColor = "red";
            sumarFallos()
        }
    }   

alert("Hola, esto es un pequeño tutorial para que sepas que hacer en el juego. \n El objetivo es alcanzar hacer 5 recetas escogiendo los ingredientes correctos. \n Buena suerte ")

pushear(receta1, receta2, receta3, receta4, receta5, receta6)
var numRamdom = AsignarNumRamdom()
var uptadedArr = pasarArray(conjunto_recetas[numRamdom].ingredientes[numRamdom])
var chekPoint = create_Checkpoint(conjunto_recetas[numRamdom].ingredientes[numRamdom])

mostrarReceta(conjunto_recetas[numRamdom])
iniciarContador()

