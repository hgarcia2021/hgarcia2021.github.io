var puntuacion = 0;

    function iniciarContador(){
        let temporizador = document.getElementById('textCrono');
        let tiempo = 0, intervalo = 0;
        let verificador = false;

          if (verificador==false) {
              intervalo = setInterval(function(){
                  tiempo += 0.01;
                  temporizador.innerHTML = tiempo.toFixed(2);                        

            }, 10)
            verificador = true;
          }  
    }



    window.onload = function() {
        iniciarJuego();
        iniciarContador();
    }

    var aleatorio = Math.round(Math.random()*18);
    function iniciarJuego(){
        document.getElementById(aleatorio).src="../img/ventanamarilla.png";
        setTimeout(function(){
            document.getElementById(aleatorio).src="../img/ventana.png";
            aleatorio = Math.round(Math.random()*18);
            iniciarJuego();
        }
        ,2000);
    }


    function llamardiv(imagen1) {
        imagen1 = "../img/ventanamarilla.png";
            puntuacion = puntuacion+100;
            document.getElementById('puntuacion').innerHTML = puntuacion;
            document.getElementById(aleatorio).src= "../img/ventana.png";
    }

    function llamardiv2(imagen2) {
            imagen2 = "../img/ventana.png";
            puntuacion = puntuacion-50;
            document.getElementById('puntuacion').innerHTML = puntuacion;
    }

    function togglePopup(){
        
    if (puntuacion == 100) {
        document.getElementById("popup-1").classList.toggle("active");

        $('#boton1Ganar').css('display', 'inline-block');
        $('#boton2Ganar').css('display', 'inline-block');
        $('#boton3').css('display', 'inline-block');

        document.getElementById("titulo").innerHTML =

            "<h1>¡Has ganado!</h1> <br>";

        document.getElementById("contenido").innerHTML =

            "Puntos conseguidos: <b>" + puntuacion + "</b><br> Tiempo restante: " + tiempo + " segundos";
    }

}
