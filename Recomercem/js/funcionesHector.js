    
    var vidas = 3;
    var puntuacion =  document.getElementById('puntuacion');
    var choque;
    var bomba1;
    var bomba2=true;
    var bomba3;
    var bomba4;
    var carro = document.getElementById("carro");
    var objeto1 = document.getElementById("cuadrado1");
    var objeto2 = document.getElementById("cuadrado2");
    var objeto3 = document.getElementById("cuadrado3");
    var objeto4 = document.getElementById("cuadrado4");
    var punto=0;
    let imatges =["bomba.png","pan1.png","pescado1.png","carne1.png","bomba.png","lechuga1.png"]
    var acabar;
    var pantalla = document.getElementById("pantalla");
    var perder=false;
    var ganar=false;

    function iniciar()
    {
        vidas = 3
        punto=0;
        document.getElementById("imgvida1").setAttribute("src","../img/vida1.png");
        document.getElementById("imgvida2").setAttribute("src","../img/vida1.png");
        document.getElementById("imgvida3").setAttribute("src","../img/vida1.png");
        document.getElementById("pantalla").style.cursor="none";
        carro.style.visibility="visible";
        mover();
        ocultar();
        mostrar();
        movercarro();
        iniciarContador();
        
        

    }

    function cambiarImagen1()
        {
            if(imatges.length > 0)
            {
                var rand = Math.floor(Math.random()*imatges.length);
                var img1 = "../img/"+imatges[rand] ;
            
                document.getElementById("img1").setAttribute("src",img1);
            
            
                    if(img1=="../img/bomba.png")
                    {
                        bomba1=true;
                    }
                    else
                    {
                        bomba1=false;
                    }
            }
        }
    function cambiarImagen2()
        {
            if(imatges.length > 0){
            var rand = Math.floor(Math.random()*imatges.length);
            var img2 = "../img/"+imatges[rand];
           
            document.getElementById("img2").setAttribute("src",img2);
           
       
                if(img2=="../img/bomba.png")
                {
                    bomba2=true;
                }
                else
                {
                    bomba2=false;
                }
            }
        }
    function cambiarImagen3()
        {
            if(imatges.length > 0){
            var rand = Math.floor(Math.random()*imatges.length);
            var img3 = "../img/"+imatges[rand] ;
           
            document.getElementById("img3").setAttribute("src",img3);
           

                if(img3=="../img/bomba.png")
                {
                    bomba3=true;
                }
                else
                {
                    bomba3=false;
                }
            }
        }
    function cambiarImagen4()
        {
            if(imatges.length > 0){
            var rand = Math.floor(Math.random()*imatges.length);
            var img4 = "../img/"+imatges[rand];
           
            document.getElementById("img4").setAttribute("src",img4);
           
   
                if(img4=="../img/bomba.png")
                {
                    bomba4=true;
                }
                else
                {
                    bomba4=false;
                }
            }
        }
    
    function mover()
      {
        objeto1.classList.add('moviendo1');
        objeto2.classList.add('moviendo2');
        objeto3.classList.add('moviendo3');
        objeto4.classList.add('moviendo4');


      }
    function movercarro(){ 

        document.addEventListener('mousemove', function(e){
            var x = e.clientX;
            var y = e.clientY;

            x = x - 50;
            y = y + 20;

            if (x<1100 && x>100 && y>90 && y<610) {
                carro.style.left = x + "px";
                carro.style.top = y + "px";
            }

        })
     }
    function ocultar(){

        document.getElementById('inicio').style.display = 'none';
        document.getElementById('todo').style.cursor = 'none';
        document.getElementById('gameover').style.display= 'none';
    }

    function mostrar()
    {
        
        objeto1.style.display = 'block';
        objeto2.style.display = 'block';
        objeto3.style.display = 'block';
        objeto4.style.display = 'block';
      
    }
   

    function iniciarContador()
    {
            let temporizador = document.getElementById('textCrono');
            let tiempo = 0, intervalo = 0;
            let verificador = false;

              if (verificador==false) {
                  intervalo = setInterval(function(){
                      tiempo += 0.01;
                      temporizador.innerHTML = tiempo.toFixed(2);

                      DetectarColision();   
                      

                }, 10)
                verificador = true;
              }  

        }
        
    function clear()
        {
        clearInterval(intervalo);
        }
       
    function DetectarColision(){


        if(objeto1.offsetTop<pantalla.offsetTop-100 )
        {
            cambiarImagen1();

        }
        if (objeto2.offsetTop<pantalla.offsetTop-100)
        {
            cambiarImagen2();
        }
        if(objeto3.offsetTop<pantalla.offsetTop-100)
        {
            cambiarImagen3();
        }
        if(objeto4.offsetTop<pantalla.offsetTop-100) 
        {
            cambiarImagen4();
        }
        if(punto>=2500)
                {
                    punto = 2500;
                    ganar=true;
                    findeljuego();
                }
        
        //Detecta si se superponen las áreas
        if(     carro.offsetLeft  <  objeto1.offsetLeft + objeto1.offsetHeight && 
                carro.offsetLeft + carro.offsetWidth >  objeto1.offsetLeft &&
                carro.offsetTop + carro.offsetWidth > objeto1.offsetTop &&
                carro.offsetTop < objeto1.offsetTop + objeto1.offsetWidth )
        {

                if(bomba1)
                {
                choque = true;
                vidas = vidas - 1;
                
                    if (vidas==2) 
                    {
                        document.getElementById("imgvida1").setAttribute("src","../img/sinvida1.png");
                        carrohidden();
                        objeto1hidden();
                        
                    }
                    else if(vidas==1)
                    {
                        document.getElementById("imgvida2").setAttribute("src","../img/sinvida1.png");
                        carrohidden();
                        objeto1hidden();
                    
                    }
                    else
                    {
                        document.getElementById("imgvida3").setAttribute("src","../img/sinvida1.png");
                        carrohidden();
                        objeto1hidden();
                        perder=true;
                        findeljuego();
                        
                    }
                }
            else{

                    punto = punto + 1;
                    puntuacion.innerHTML = punto;
                    objeto1hidden();
                    

            }
            
            }
        else if(     carro.offsetLeft  <  objeto2.offsetLeft + objeto2.offsetHeight && 
                     carro.offsetLeft + carro.offsetWidth >  objeto2.offsetLeft &&
                     carro.offsetTop + carro.offsetWidth > objeto2.offsetTop &&
                     carro.offsetTop < objeto2.offsetTop + objeto2.offsetWidth ){

                if(bomba2)
                {
                    choque = true;
                    vidas = vidas - 1;
                    
                    if (vidas==2) 
                    {
                        document.getElementById("imgvida1").setAttribute("src","../img/sinvida1.png");
                        carrohidden();
                        objeto2hidden();
                         
                    }
                    else if(vidas==1)
                    {
                        document.getElementById("imgvida2").setAttribute("src","../img/sinvida1.png");
                        carrohidden();
                        objeto2hidden();
                   
                    }
                    else
                    {
                        document.getElementById("imgvida3").setAttribute("src","../img/sinvida1.png");
                        objeto2hidden();
                        perder=true;
                        findeljuego();
                 
                    }
                }
                else
                {
                                
                    punto = punto + 1;
                    puntuacion.innerHTML = punto;
                    objeto2hidden();
                    
                }
                
        }
        else if(    carro.offsetLeft  <  objeto3.offsetLeft + objeto3.offsetHeight && 
                    carro.offsetLeft + carro.offsetWidth >  objeto3.offsetLeft &&
                    carro.offsetTop + carro.offsetWidth > objeto3.offsetTop &&
                    carro.offsetTop < objeto3.offsetTop + objeto3.offsetWidth ){

                if(bomba3)
                {  
                    vidas = vidas - 1;
                    choque = true;
                    if (vidas==2) 
                    {
                        document.getElementById("imgvida1").setAttribute("src","../img/sinvida1.png");
                        carrohidden();
                        objeto3hidden(); 
                    }
                    else if(vidas==1)
                    {
                        document.getElementById("imgvida2").setAttribute("src","../img/sinvida1.png");
                        carrohidden();
                        objeto3hidden(); 
                        
                    }
                    else
                    {
                        document.getElementById("imgvida3").setAttribute("src","../img/sinvida1.png");
                        carrohidden();
                        objeto3hidden();
                        perder=true;
                        findeljuego();
                    }
                }
                else
                {         
                    punto = punto + 1;
                    puntuacion.innerHTML = punto;
                    objeto3hidden();
                    
                }
                
            
        }
        else if(     carro.offsetLeft  <  objeto4.offsetLeft + objeto4.offsetHeight && 
                     carro.offsetLeft + carro.offsetWidth >  objeto4.offsetLeft &&
                     carro.offsetTop + carro.offsetWidth > objeto4.offsetTop &&
                     carro.offsetTop < objeto4.offsetTop + objeto4.offsetWidth ){

                 if(bomba4)
                {  
                    vidas = vidas - 1;
                    choque = true;
                    if (vidas==2) 
                    {
                        document.getElementById("imgvida1").setAttribute("src","../img/sinvida1.png");
                        carrohidden();
                        objeto4hidden();  
                    }
                    else if(vidas==1)
                    {
                        document.getElementById("imgvida2").setAttribute("src","../img/sinvida1.png");
                        carrohidden();
                        objeto4hidden(); 
                    }
                    else
                    {
                        document.getElementById("imgvida3").setAttribute("src","../img/sinvida1.png");
                        carrohidden();
                        objeto4hidden(); 
                        perder=true;
                        findeljuego();
                    }
                }
                else
                {             
                    punto = punto + 1;
                    puntuacion.innerHTML = punto;
                    objeto4hidden();
                    
                }
                
               
        }
        
    }

    function carrohidden()
    {
        carro.style.display = "none";
        setTimeout(function(){carro.style.display = "block";
        choque=false;},500);
    }
    function objeto1hidden()
    {
        objeto1.style.visibility = "hidden";
        setTimeout(function(){objeto1.style.visibility = "visible";
        choque=false;},1300);
        
    }
    function objeto2hidden()
    {
        objeto2.style.visibility = "hidden";
        setTimeout(function(){objeto2.style.visibility = "visible";
       
        choque=false;},1300);
    }
    function objeto3hidden()
    {
        objeto3.style.visibility = "hidden";
        setTimeout(function(){objeto3.style.visibility = "visible";
 
        choque=false;},1300);
    }
    function objeto4hidden()
    {
        objeto4.style.visibility = "hidden";
        setTimeout(function(){objeto4.style.visibility = "visible";
    
        choque=false;},1300);
    }
    function findeljuego(){
        
    objeto1.style.display="none";
    objeto2.style.display="none";
    objeto3.style.display="none";
    objeto4.style.display="none";
    carro.style.visibility="hidden";
    document.getElementById("pantalla").style.cursor= "pointer";
    document.getElementById("puntos").innerHTML= punto;

    
    document.cookie = "puntosJuegoSuper=" + punto + "; path=/;";


    punto=0;
    puntuacion.innerHTML=punto;   
    if(perder)
    {
    document.getElementById("gameover").style.display="block";
    }else if (ganar)
    {
        document.getElementById("win").style.display="block";
    }
    clear();
    

    }