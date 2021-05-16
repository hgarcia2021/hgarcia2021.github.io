var vidas = 4;
var puntos = 0;
var choque = false;
var verificador = false;
var imgVida1 = document.getElementById("vida1");
var imgVida2 = document.getElementById("vida2");
var imgVida3 = document.getElementById("vida3");
var imgVida4 = document.getElementById("vida4");
var carretera = document.getElementById("carretera");
var botonStart = document.getElementById("botonStart");
var gameover = document.getElementById("gameover");
var moto = document.getElementById("moto");
var linea1 = document.getElementById("linea1");
var linea2 = document.getElementById("linea2");
var linea3 = document.getElementById("linea3");
var linea4 = document.getElementById("linea4");
var coche1 = document.getElementById("coche1");
var coche2 = document.getElementById("coche2");
var coche3 = document.getElementById("coche3");
var coche4 = document.getElementById("coche4");
var cocheMedio1 = document.getElementById("cocheMedio1");
var cocheMedio2 = document.getElementById("cocheMedio2");
var textPuntos = document.getElementById("textPuntos");
var textPuntosWin = document.getElementById("textPuntosWin");
var volverajugar = document.getElementById("volverajugarmoto");
var salirdeljuego = document.getElementById("salirmoto");


            

function comenzar(){

            var fondo = document.getElementById("fondo");            
            fondo.play();
            carretera.style.cursor = "none";
            botonStart.style.visibility = "hidden";
            botonStart.style.animationPlayState = "paused";
            volverajugar.style.visibility = "hidden";
            salirdeljuego.style.visibility = "hidden";

            linea1.style.animationName = "linea1-0";
            linea1.style.animationDuration = "3s";

            linea2.style.animationName = "linea2-0";
            linea2.style.animationDuration = "3s";

            linea3.style.animationName = "linea3-0";
            linea3.style.animationDuration = "3s";
            linea3.style.animationDelay = "1.5s";

            linea4.style.animationName = "linea4-0";
            linea4.style.animationDuration = "3s";
            linea4.style.animationDelay = "1.5s";

            linea1.style.animationPlayState = "running";
            linea2.style.animationPlayState = "running";
            linea3.style.animationPlayState = "running";
            linea4.style.animationPlayState = "running";

            
            iniciarContador(fondo);

            movimientoMoto();
                     
}

        


function iniciarContador(fondo){
            let temporizador = document.getElementById('textCrono');
            let tiempo = 0, intervalo = 0;
            

              if (verificador==false) {
                  intervalo = setInterval(function(){
                      tiempo += 0.01;
                      temporizador.innerHTML = tiempo.toFixed(2);

                      if (vidas != 0) {
                        
                        if (choque == false) {
                        colisiones();
                        }
                      
                    
                        if(tiempo < 30 && tiempo > 8){

                            
                            
                            coche1.style.animationName = "coche1-0";
                            coche1.style.animationDelay = "0s";
                            coche1.style.animationDuration = "2.5s";
                            coche1.style.animationTimingFunction = "linear";
                            coche1.style.animationIterationCount = "9";
                            coche1.style.animationPlayState = "running";
                            coche1.style.visibility = "visible";
                           
                            coche2.style.animationName = "coche2-0";
                            coche2.style.animationDelay = "2s";
                            coche2.style.animationDuration = "2s";
                            coche2.style.animationIterationCount = "10";
                            coche2.style.animationTimingFunction = "linear";
                            coche2.style.animationPlayState = "running";
                            coche2.style.visibility = "visible";
                            
                            cocheMedio1.style.animationName = "cocheMedio1-0";
                            cocheMedio1.style.animationDelay = "6s";
                            cocheMedio1.style.animationDuration = "2.5s";
                            cocheMedio1.style.animationTimingFunction = "linear";
                            cocheMedio1.style.animationIterationCount = "3";
                            cocheMedio1.style.animationPlayState = "running";
                            cocheMedio1.style.visibility = "visible";

                            
                            cocheMedio2.style.animationName = "cocheMedio2-0";   
                            cocheMedio2.style.animationDelay = "16s";
                            cocheMedio2.style.animationDuration = "2.5s";
                            cocheMedio2.style.animationTimingFunction = "linear";
                            cocheMedio2.style.animationIterationCount = "3";
                            cocheMedio2.style.animationPlayState = "running";
                            cocheMedio2.style.visibility = "visible"; 
                            
                            
 
                        }

                        if(tiempo < 60 && tiempo > 33){
                            
                            linea1.style.animationName = "linea1-30";
                            linea1.style.animationDuration = "2.5s";

                            linea2.style.animationName = "linea2-30";
                            linea2.style.animationDuration = "2.5s";

                            linea3.style.animationName = "linea3-30";
                            linea3.style.animationDuration = "2.5s";
                            linea3.style.animationDelay = "1.25s";

                            linea4.style.animationName = "linea4-30";
                            linea4.style.animationDuration = "2.5s";
                            linea4.style.animationDelay = "1.25s";

                            linea1.style.animationPlayState = "running";
                            linea2.style.animationPlayState = "running";
                            linea3.style.animationPlayState = "running";
                            linea4.style.animationPlayState = "running";

                            
                            coche4.style.animationName = "coche4-30";
                            coche4.style.animationDelay = "2s";
                            coche4.style.animationDuration = "2.5s";
                            coche4.style.animationIterationCount = "10";
                            coche4.style.animationTimingFunction = "ease-in";
                            coche4.style.animationPlayState = "running";
                            coche4.style.visibility = "visible";

                            cocheMedio1.style.animationName = "cocheMedio1-30";
                            cocheMedio1.style.animationDelay = "2s"
                            cocheMedio1.style.animationDuration = "2.5s";
                            cocheMedio1.style.animationIterationCount = "6";
                            cocheMedio1.style.animationTimingFunction = "ease-in";
                            cocheMedio1.style.animationPlayState = "running";
                            cocheMedio1.style.visibility = "visible";

                            coche3.style.animationName = "coche3-30";
                            coche3.style.animationDelay = "5s";
                            coche3.style.animationDuration = "3.5s";
                            coche3.style.animationIterationCount = "7";
                            coche3.style.animationTimingFunction = "ease";
                            coche3.style.animationPlayState = "running";
                            coche3.style.visibility = "visible";
                            
                            cocheMedio2.style.animationName = "cocheMedio2-30";
                            cocheMedio2.style.animationDelay = "18s";
                            cocheMedio2.style.animationDuration = "1.5s";
                            cocheMedio2.style.animationIterationCount = "5";
                            cocheMedio2.style.animationTimingFunction = "ease-out";
                            cocheMedio2.style.animationPlayState = "running";
                            cocheMedio2.style.visibility = "visible";

                            
                            
                           
 
                        }
                        if(tiempo < 86 && tiempo > 63){
                            
                            linea1.style.animationName = "linea1-60";
                            linea1.style.animationDuration = "2s";

                            linea2.style.animationName = "linea2-60";
                            linea2.style.animationDuration = "2s";

                            linea3.style.animationName = "linea3-60";
                            linea3.style.animationDuration = "2s";
                            linea3.style.animationDelay = "1s";

                            linea4.style.animationName = "linea4-60";
                            linea4.style.animationDuration = "2s";
                            linea4.style.animationDelay = "1s";

                            linea1.style.animationPlayState = "running";
                            linea2.style.animationPlayState = "running";
                            linea3.style.animationPlayState = "running";
                            linea4.style.animationPlayState = "running";



                            coche1.style.animationName = "coche1-60";
                            coche1.style.animationDelay = "0s";
                            coche1.style.animationDuration = "2.5s";
                            coche1.style.animationTimingFunction = "linear";
                            coche1.style.animationIterationCount = "9";
                            coche1.style.animationPlayState = "running";
                            coche1.style.visibility = "visible";
                           
                            coche2.style.animationName = "coche2-60";
                            coche2.style.animationDelay = "2s";
                            coche2.style.animationDuration = "2s";
                            coche2.style.animationIterationCount = "10";
                            coche2.style.animationTimingFunction = "ease-in";
                            coche2.style.animationPlayState = "running";
                            coche2.style.visibility = "visible";
                            
                            cocheMedio1.style.animationName = "cocheMedio1-60";
                            cocheMedio1.style.animationDelay = "6s";
                            cocheMedio1.style.animationDuration = "2.5s";
                            cocheMedio1.style.animationTimingFunction = "ease";
                            cocheMedio1.style.animationIterationCount = "3";
                            cocheMedio1.style.animationPlayState = "running";
                            cocheMedio1.style.visibility = "visible";

                            
                            cocheMedio2.style.animationName = "cocheMedio2-60";   
                            cocheMedio2.style.animationDelay = "16s";
                            cocheMedio2.style.animationDuration = "2s";
                            cocheMedio2.style.animationTimingFunction = "linear";
                            cocheMedio2.style.animationIterationCount = "3";
                            cocheMedio2.style.animationPlayState = "running";
                            cocheMedio2.style.visibility = "visible";

                            
                            
                           
 
                        }

                        if(tiempo < 120 && tiempo > 85){
                            
                            linea1.style.animationName = "linea1-90";
                            linea1.style.animationDuration = "1s";

                            linea2.style.animationName = "linea2-90";
                            linea2.style.animationDuration = "1s";

                            linea3.style.animationName = "linea3-90";
                            linea3.style.animationDuration = "1s";
                            linea3.style.animationDelay = "0.5s";

                            linea4.style.animationName = "linea4-90";
                            linea4.style.animationDuration = "1s";
                            linea4.style.animationDelay = "0.5s";

                            linea1.style.animationPlayState = "running";
                            linea2.style.animationPlayState = "running";
                            linea3.style.animationPlayState = "running";
                            linea4.style.animationPlayState = "running";



                            coche1.style.animationName = "coche1-90";
                            coche1.style.animationDelay = "0s";
                            coche1.style.animationDuration = "3s";
                            coche1.style.animationTimingFunction = "linear";
                            coche1.style.animationIterationCount = "15";
                            coche1.style.animationPlayState = "running";
                            coche1.style.visibility = "visible";
                           
                            coche3.style.animationName = "coche3-90";
                            coche3.style.animationDelay = "20s";
                            coche3.style.animationDuration = "2s";
                            coche3.style.animationIterationCount = "11";
                            coche3.style.animationTimingFunction = "ease-in";
                            coche3.style.animationPlayState = "running";
                            coche3.style.visibility = "visible";
                            
                            cocheMedio2.style.animationName = "cocheMedio2-90";
                            cocheMedio2.style.animationDelay = "8s";
                            cocheMedio2.style.animationDuration = "2s";
                            cocheMedio2.style.animationTimingFunction = "ease";
                            cocheMedio2.style.animationIterationCount = "4";
                            cocheMedio2.style.animationPlayState = "running";
                            cocheMedio2.style.visibility = "visible";

                            
                            cocheMedio1.style.animationName = "cocheMedio1-90";   
                            cocheMedio1.style.animationDelay = "16s";
                            cocheMedio1.style.animationDuration = "1.5s";
                            cocheMedio1.style.animationTimingFunction = "linear";
                            cocheMedio1.style.animationIterationCount = "8";
                            cocheMedio1.style.animationPlayState = "running";
                            cocheMedio1.style.visibility = "visible";

                            
                            
                           
 
                        }

                        if(tiempo < 121 && tiempo > 120){
                            
                        //paramos el crono
                        clear(intervalo);
                        //paramos todas las animaciones
                        fondo.pause();
                        linea1.style.animationPlayState = "paused";
                        linea2.style.animationPlayState = "paused";
                        linea3.style.animationPlayState = "paused";
                        linea4.style.animationPlayState = "paused";
                        coche1.style.animationPlayState = "paused";
                        coche2.style.animationPlayState = "paused";
                        coche3.style.animationPlayState = "paused";
                        coche4.style.animationPlayState = "paused";
                        cocheMedio1.style.animationPlayState = "paused";
                        cocheMedio2.style.animationPlayState = "paused";
                        carretera.style.cursor = "default";
                        win.style.visibility = "visible";
                        win.style.animationPlayState = "running";
                        //calculamos puntos
                        puntos = 2500;
                        textPuntosWin.innerHTML = "Has conseguido " + puntos + " puntos"; 
                        document.cookie = "puntosJuegoMoto=" + puntos + "; path=/;"; 
                        volverajugar.style.visibility = "visible";
                        salirdeljuego.style.visibility = "visible";
                        
                           
 
                        }


                        
                      }else{
                        //paramos el crono
                        clear(intervalo);
                        //paramos todas las animaciones
                        fondo.pause();
                        linea1.style.animationPlayState = "paused";
                        linea2.style.animationPlayState = "paused";
                        linea3.style.animationPlayState = "paused";
                        linea4.style.animationPlayState = "paused";
                        coche1.style.animationPlayState = "paused";
                        coche2.style.animationPlayState = "paused";
                        coche3.style.animationPlayState = "paused";
                        coche4.style.animationPlayState = "paused";
                        cocheMedio1.style.animationPlayState = "paused";
                        cocheMedio2.style.animationPlayState = "paused";
                        carretera.style.cursor = "default";
                        gameover.style.visibility = "visible";
                        gameover.style.animationPlayState = "running";
                        //calculamos puntos
                        calcularPuntos(tiempo);
                        textPuntos.innerHTML = "Has conseguido " + puntos.toFixed(0) + " puntos";
                        document.cookie = "puntosJuegoMoto=" + puntos.toFixed(0) + "; path=/;"; 
                        volverajugar.style.visibility = "visible";
                        salirdeljuego.style.visibility = "visible";
                      }

                    

                }, 10)
                
              }  

}

function colisiones(){
        var sonidochoque = document.getElementById("choque");
    

            //colision coche 1
            if (moto.offsetTop + moto.offsetWidth - 20  > coche1.offsetTop && //arriba
                moto.offsetTop < coche1.offsetTop + coche1.offsetWidth + 80 && //abajo
                moto.offsetLeft < coche1.offsetLeft + coche1.offsetHeight - 180 && //derecha
                moto.offsetLeft + moto.offsetHeight - 85 > coche1.offsetLeft) { //izq

                
                choque = true;   
                vidas = vidas - 1;
                sonidochoque.play();
                
                
                if(vidas == 3){
                    imgVida4.setAttribute("src", "../img/corazongris.png"); 
                    moto.style.animationName = "colision1";
                    moto.style.animationPlayState = "running";
                }
                else if(vidas == 2){
                    imgVida3.setAttribute("src", "../img/corazongris.png"); 
                    moto.style.animationName = "colision2";
                    moto.style.animationPlayState = "running";
                }
                else if(vidas == 1){
                    imgVida2.setAttribute("src", "../img/corazongris.png"); 
                    moto.style.animationName = "colision3";
                    moto.style.animationPlayState = "running";
                }
                else if(vidas == 0){
                    imgVida1.setAttribute("src", "../img/corazongris.png"); 
                    moto.style.animationName = "colision4";
                    moto.style.animationPlayState = "running";
                }
                
                
                motoHidden();
                                
            }

            //colision coche 2
            if (moto.offsetTop + moto.offsetWidth - 15  > coche2.offsetTop && //arriba
                moto.offsetTop < coche2.offsetTop + coche2.offsetWidth + 85 && //abajo
                moto.offsetLeft < coche2.offsetLeft + coche2.offsetHeight - 200 && //derecha
                moto.offsetLeft + moto.offsetHeight - 65 > coche2.offsetLeft) { //izq

                
                choque = true; 
                vidas = vidas - 1;
                sonidochoque.play();
                
                if(vidas == 3){
                    imgVida4.setAttribute("src", "../img/corazongris.png"); 
                    moto.style.animationName = "colision1";
                    moto.style.animationPlayState = "running";
                }
                else if(vidas == 2){
                    imgVida3.setAttribute("src", "../img/corazongris.png"); 
                    moto.style.animationName = "colision2";
                    moto.style.animationPlayState = "running";
                }
                else if(vidas == 1){
                    imgVida2.setAttribute("src", "../img/corazongris.png"); 
                    moto.style.animationName = "colision3";
                    moto.style.animationPlayState = "running";
                }
                else if(vidas == 0){
                    imgVida1.setAttribute("src", "../img/corazongris.png"); 
                    moto.style.animationName = "colision4";
                    moto.style.animationPlayState = "running";
                }
                
                
                motoHidden();
                                
            }

            //colision coche 3
            if (moto.offsetTop + moto.offsetWidth - 15  > coche3.offsetTop && //arriba
                moto.offsetTop < coche3.offsetTop + coche3.offsetWidth + 85 && //abajo
                moto.offsetLeft < coche3.offsetLeft + coche3.offsetHeight - 210 && //derecha
                moto.offsetLeft + moto.offsetHeight - 65 > coche3.offsetLeft) { //izq

                
                choque = true; 
                vidas = vidas - 1;
                sonidochoque.play();
                
                if(vidas == 3){
                    imgVida4.setAttribute("src", "../img/corazongris.png"); 
                    moto.style.animationName = "colision1";
                    moto.style.animationPlayState = "running";
                }
                else if(vidas == 2){
                    imgVida3.setAttribute("src", "../img/corazongris.png"); 
                    moto.style.animationName = "colision2";
                    moto.style.animationPlayState = "running";
                }
                else if(vidas == 1){
                    imgVida2.setAttribute("src", "../img/corazongris.png"); 
                    moto.style.animationName = "colision3";
                    moto.style.animationPlayState = "running";
                }
                else if(vidas == 0){
                    imgVida1.setAttribute("src", "../img/corazongris.png"); 
                    moto.style.animationName = "colision4";
                    moto.style.animationPlayState = "running";
                }
                
                
                motoHidden();
                                
            }

            //colision coche 4
            if (moto.offsetTop + moto.offsetWidth - 25  > coche4.offsetTop && //arriba
                moto.offsetTop < coche4.offsetTop + coche4.offsetWidth + 55 && //abajo
                moto.offsetLeft < coche4.offsetLeft + coche4.offsetHeight - 200 && //derecha
                moto.offsetLeft + moto.offsetHeight - 90 > coche4.offsetLeft) { //izq

                
                choque = true;  
                vidas = vidas - 1;
                sonidochoque.play();
                
                if(vidas == 3){
                    imgVida4.setAttribute("src", "../img/corazongris.png"); 
                    moto.style.animationName = "colision1";
                    moto.style.animationPlayState = "running";
                }
                else if(vidas == 2){
                    imgVida3.setAttribute("src", "../img/corazongris.png"); 
                    moto.style.animationName = "colision2";
                    moto.style.animationPlayState = "running";
                }
                else if(vidas == 1){
                    imgVida2.setAttribute("src", "../img/corazongris.png"); 
                    moto.style.animationName = "colision3";
                    moto.style.animationPlayState = "running";
                }
                else if(vidas == 0){
                    imgVida1.setAttribute("src", "../img/corazongris.png"); 
                    moto.style.animationName = "colision4";
                    moto.style.animationPlayState = "running";
                }
                
                
                motoHidden();
                                
            }

            //colision coche medio 1
            if (moto.offsetTop + moto.offsetWidth - 15  > cocheMedio1.offsetTop && //arriba
                moto.offsetTop < cocheMedio1.offsetTop + cocheMedio1.offsetWidth + 85 && //abajo
                moto.offsetLeft < cocheMedio1.offsetLeft + cocheMedio1.offsetHeight - 200 && //derecha
                moto.offsetLeft + moto.offsetHeight - 65 > cocheMedio1.offsetLeft) { //izq

                
                choque = true; 
                vidas = vidas - 1;
                sonidochoque.play();
                
                if(vidas == 3){
                    imgVida4.setAttribute("src", "../img/corazongris.png"); 
                    moto.style.animationName = "colision1";
                    moto.style.animationPlayState = "running";
                }
                else if(vidas == 2){
                    imgVida3.setAttribute("src", "../img/corazongris.png"); 
                    moto.style.animationName = "colision2";
                    moto.style.animationPlayState = "running";
                }
                else if(vidas == 1){
                    imgVida2.setAttribute("src", "../img/corazongris.png"); 
                    moto.style.animationName = "colision3";
                    moto.style.animationPlayState = "running";
                }
                else if(vidas == 0){
                    imgVida1.setAttribute("src", "../img/corazongris.png"); 
                    moto.style.animationName = "colision4";
                    moto.style.animationPlayState = "running";
                }
                
                
                motoHidden();
                                
            }
            
            //colision coche medio 2
            if (moto.offsetTop + moto.offsetWidth - 25  > cocheMedio2.offsetTop && //arriba
                moto.offsetTop < cocheMedio2.offsetTop + cocheMedio2.offsetWidth + 55 && //abajo
                moto.offsetLeft < cocheMedio2.offsetLeft + cocheMedio2.offsetHeight - 190 && //derecha
                moto.offsetLeft + moto.offsetHeight - 95 > cocheMedio2.offsetLeft) { //izq

                
                choque = true;      
                vidas = vidas - 1;
                sonidochoque.play();
                
                if(vidas == 3){
                    imgVida4.setAttribute("src", "../img/corazongris.png"); 
                    moto.style.animationName = "colision1";
                    moto.style.animationPlayState = "running";
                }
                else if(vidas == 2){
                    imgVida3.setAttribute("src", "../img/corazongris.png"); 
                    moto.style.animationName = "colision2";
                    moto.style.animationPlayState = "running";
                }
                else if(vidas == 1){
                    imgVida2.setAttribute("src", "../img/corazongris.png"); 
                    moto.style.animationName = "colision3";
                    moto.style.animationPlayState = "running";
                }
                else if(vidas == 0){
                    imgVida1.setAttribute("src", "../img/corazongris.png"); 
                    moto.style.animationName = "colision4";
                    moto.style.animationPlayState = "running";
                }
                
                
                motoHidden();
                                
            }
}

function movimientoMoto(){
                
    document.addEventListener('mousemove', function(e){
            
        if (vidas != 0 && puntos != 2500) {
            var x = e.clientX;
            var y = e.clientY;

            x = (x - 150 - 285) / 0.7;
            y = (y - 50) / 0.7;
            

            if (x<495 && x>-50 && y>-5 && y<750) {
                moto.style.left = x + "px";
                moto.style.top = y + "px";
            }
        }
                

    })

}

function motoHidden() {
    moto.style.visibility = "hidden";
            
    setTimeout(function(){
        moto.style.visibility = "visible";
        choque = false;}, 800);
                
}

function clear(intervalo){
    clearInterval(intervalo);
}

function calcularPuntos(tiempo){

    puntos = tiempo * 20.83;
   
}

