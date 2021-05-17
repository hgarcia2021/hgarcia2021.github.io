<template>
  <div id="principal">
    <div id="header" style="background-image: url('assets/img/fondo2.gif')">
      <div id="titulo" data-aos="fade-down" data-aos-duration="3000">
        <h1 class="titulo-principal flotar">Bienvenido</h1>
      </div>
      <div
        id="presentacion"
        data-aos="fade-up-right"
        data-aos-duration="3000"
        data-aos-delay="3000"
      >
        <h3 class="flotar">
          ¡Hola! Bienvenido al sitio web de mi portafolio personal.<br />
          En esta página web te mostraré cuáles son mis habilidades <br />
          y conocimientos de programación
        </h3>
      </div>
    </div>
    <section id="about">
      <div id="perfil" data-aos="zoom-in" data-aos-duration="3000">
        <div class="row">
          <div class="col-lg-4">
            <img
              src="assets/img/perfil.jpg"
              height="300px"
              width="400px"
              style="margin-left: 200px"
            />
          </div>
          <div class="col-lg-6 mx-auto">
            <h1 class="titulos" style="color: #141415">Quien soy?</h1>
            <p class="card-text">
              Soy un chico de Barcelona de 21 años que esta acabando el grado de
              desarrollo web en el centre d'estudis politecnics. Anteriormente
              he hecho el grado de desarrollo de aplicaiones multiplataforma en
              el salesians de sarria y previamente he hecho el bachillerato
              tecnologico. Tambien he estado trabajando durante 1 año y medio en
              Avanttic que es una consultora partner de oracle y ahi me
              encargaba de crear y migrar forms&reports y tambien toque un poco
              de oracle APEX.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <a href="https://avanttic.com/"
              ><img
                src="assets/img/avanttic.png"
                height="100%"
                width="100%"
                style="margin-top: -50px"
                alt="avanttic"
            /></a>
          </div>
          <div class="col-lg-4">
            <a href="https://www.salesianssarria.com/"
              ><img
                src="assets/img/sales.png"
                height="100%"
                width="100%"
                style="margin-top: -50px"
                alt="salesian de sarria"
            /></a>
          </div>
          <div class="col-lg-4">
            <a href="https://politecnics.barcelona/"
              ><img
                src="assets/img/cep.png"
                height="100%"
                width="100%"
                style="margin-top: -50px"
                alt="cep"
            /></a>
          </div>
        </div>
      </div>
    </section>

    <section id="skills">
      <div class="alinear-titulos">
        <h1 class="titulos" style="margin-top: 25px; margin-bottom: 25px">
          Habilidades
        </h1>
      </div>
      <div class="row text-center mt-6" style="margin-bottom: 50px">
        <div class="col">
          <img
            src="assets/img/html.png"
            alt="html"
            height="100px"
            width="100px"
          />
          <h5>HTML</h5>
        </div>
        <div class="col">
          <img
            src="assets/img/javascript.png"
            alt="javascript"
            height="100px"
            width="200px"
          />
          <h5>JavaScript</h5>
        </div>
        <div class="col">
          <img
            src="assets/img/php.png"
            alt="php"
            height="100px"
            width="100px"
          />
          <h5>PHP</h5>
        </div>
        <div class="col">
          <img
            src="assets/img/laravel.png"
            alt="laravel"
            height="100px"
            width="100px"
          />
          <h5>Laravel</h5>
        </div>
        <div class="col">
          <img
            src="assets/img/vue.png"
            alt="vue"
            height="100px"
            width="100px"
          />
          <h5>VUE</h5>
        </div>
      </div>
      <div class="row text-center mt-4" style="margin-bottom: 50px">
        <div class="col">
          <img
            src="assets/img/bootstrap.png"
            alt="bootstrap"
            height="100px"
            width="100px"
          />
          <h5>Bootstrap</h5>
        </div>
        <div class="col">
          <img
            src="assets/img/java.png"
            alt="java"
            height="100px"
            width="100px"
          />
          <h5>Java</h5>
        </div>
        <div class="col">
          <img
            src="assets/img/plsql.png"
            alt="pl/sql"
            height="100px"
            width="100px"
          />
          <h5>PL/SQL</h5>
        </div>
        <div class="col">
          <img
            src="assets/img/css.png"
            alt="css"
            height="100px"
            width="100px"
          />
          <h5>CSS</h5>
        </div>
        <div class="col">
          <img
            src="assets/img/eloquent.png"
            alt="eloquent"
            height="100px"
            width="100px"
          />
          <h5>Eloquent</h5>
        </div>
      </div>
      <div class="row text-center mt-4" style="margin-bottom: 50px">
        <div class="col">
          <img
            src="assets/img/angular.png"
            alt="angular"
            height="100px"
            width="100px"
          />
          <h5>Angular</h5>
        </div>
        <div class="col">
          <img
            src="assets/img/ionic.png"
            alt="ionic"
            height="100px"
            width="100px"
          />
          <h5>Ionic</h5>
        </div>
        <div class="col">
          <img
            src="assets/img/flutter.png"
            alt="flutter"
            height="100px"
            width="100px"
          />
          <h5>Flutter</h5>
        </div>
        <div class="col">
          <img
            src="assets/img/dart.png"
            alt="dart"
            height="100px"
            width="100px"
          />
          <h5>Dart</h5>
        </div>
        <div class="col">
          <img
            src="assets/img/csharp.png"
            alt="c#"
            height="100px"
            width="100px"
          />
          <h5>C#</h5>
        </div>
      </div>
    </section>
    <section id="proyectos">
      <div class="alinear-titulos">
        <h1 class="titulos" style="color: #141415">Proyectos</h1>
      </div>

      <div style="margin-bottom: 50px" class="row">
        <div
          style="background-image: url('assets/img/recomercem.png')"
          class="recomercem col-lg-4"
        >
          <a
            class="recomercem"
            href="http://daw.abp-politecnics.com/daw2b02/cepsem/public/"
          ></a>
        </div>
        <div class="col-lg-4" style="margin-right: 200px">
          <div class="subtitulo">
            <h1>Recomercem</h1>
          </div>
          <p class="card-text">
            Soy un chico de Barcelona de 21 años que esta acabando el grado de
            desarrollo web en el centre d'estudismultiplataforma en el salesians
            de sarria y previamente he hecho el bachillerato tecnologico.
            Tambien he estado trabajando durante 1 año y medio en Avanttic que
            es una consultora partner de oracle y ahi me encargaba de crear y
            migrar forms&reports y tambien toque un poco de oracle APEX.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4" style="margin: auto">
          <div class="subtitulo">
            <h1>Cepsem</h1>
          </div>
          <p id="cepsem" class="card-text">
            Soy un chico de Barcelona de 21 años que esta acabando el grado de
            desarrollo web en el centre d'estudis politecnics. Anteriormente he
            hecho el grado de desarrollo de aplicaiones multiplataforma en el
            salesians de sarria y previamente he hecho el bachillerato
            tecnologico. Tambien he estado trabajando durante 1 año y medio en
            Avanttic que es una consultora partner de oracle y ahi me encargaba
            de crear y migrar forms&reports y tambien toque un poco de oracle
            APEX.
          </p>
        </div>

        <div
          style="
            background-image: url('assets/img/cepsem.png');
            margin-top: 100px;
          "
          class="recomercem col-lg-4"
        >
          <a
            class="recomercem"
            href="http://daw.abp-politecnics.com/daw2b02/cepsem/public/"
          ></a>
        </div>
      </div>
    </section>
    <section id="colorPicker">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="alinear-titulos">
            <h1 class="titulos textoPicker" style="color: #141415">
              Color Picker
            </h1>
          </div>
          <p id="error1" class="textoPicker">
            A continuación mostraré mis conocimientos sobre el uso de las API's
            mediante este pequeño ejemplo de colorpicker, con el que podremos
            canviar el color de fondo de esta seccion i el color del texto y a
            traves de la API
            <a href="http://www.thecolorapi.com">http://www.thecolorapi.com</a>
            nos va a mostrar los valores de cada color que seleccionemos
          </p>
          <p class="textoPicker">
            Selecciona el color de fondo:
            <input
              type="color"
              id="colorPrincipal"
              v-on:input="Color1()"
              style="width: 25%"
            />
          </p>
          <div id="color1Dades" style="display: none">
            <div>
              <span><b class="textoPicker">Nombre: </b></span
              ><span id="colorname1" class="textoPicker"></span>
            </div>
            <div>
              <span><b class="textoPicker">Valor HEX: </b></span>
              <span id="colorhex1" class="textoPicker"></span>
            </div>
            <div>
              <span><b class="textoPicker">Valor </b></span
              ><span id="colorrgb1" class="textoPicker"> </span>
            </div>
            <div>
              <span><b class="textoPicker">Valor </b></span>
              <span id="colorhsl1" class="textoPicker"></span>
            </div>
          </div>
          <p class="textoPicker">
            Selecciona el color del texto:
            <input
              type="color"
              id="colorSecundari"
              v-on:input="Color2()"
              style="width: 25%"
            />
          </p>
          <div id="color2Dades" style="display: none">
            <div>
              <span><b class="textoPicker">Nombre: </b></span
              ><span id="colorname2" class="textoPicker"></span>
            </div>
            <div>
              <span><b class="textoPicker">Valor HEX: </b></span>
              <span id="colorhex2" class="textoPicker"></span>
            </div>
            <div>
              <span><b class="textoPicker">Valor </b></span
              ><span id="colorrgb2" class="textoPicker"> </span>
            </div>
            <div>
              <span><b class="textoPicker">Valor </b></span>
              <span id="colorhsl2" class="textoPicker"></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="contacto">
      <div
        class="container"
        style="
          background-color: #141415;
          border-radius: 20px;
          padding-bottom: 30px;
        "
      >
        <h1 class="titulos alinear-titulos">Contacto</h1>
        <form class="contact-form" @submit.prevent="sendEmail">
          <label>Nombre</label>
          <input
            type="text"
            v-model="name"
            name="name"
            placeholder="Tu nombre"
          />
          <label>Email</label>
          <input
            type="email"
            v-model="email"
            name="email"
            placeholder="Tu Email"
          />
          <label>Mensaje</label>
          <textarea
            name="message"
            v-model="message"
            cols="30"
            rows="5"
            placeholder="Mensaje"
          >
          </textarea>

          <input type="submit" value="Send" />
        </form>
      </div>
    </section>
  </div>
</template>

<script>
import emailjs from "emailjs-com";
export default {
  name: "ContactUs",
  data() {
    return {
      name: "",
      email: "",
      message: "",
    };
  },
  methods: {
    Color1: function () {
      var x = document.getElementById("colorPrincipal").value;
      var y = x.substring(1);
      var nombre = document.getElementById("colorname1");
      var hex = document.getElementById("colorhex1");
      var rgb = document.getElementById("colorrgb1");
      var hsl = document.getElementById("colorhsl1");
      var dades = document.getElementById("color1Dades");

      const url = "http://www.thecolorapi.com/id?hex=" + y;

      axios
        .get(url)
        .then((response) => {
          const myJSON = JSON.stringify(response);

          var json1 = JSON.parse(myJSON);
          document.getElementById("colorPicker").style.backgroundColor =
            json1.data.hex.value;
          nombre.innerHTML = json1.data.name.value;
          hex.innerHTML = json1.data.hex.value;
          rgb.innerHTML = json1.data.rgb.value;
          hsl.innerHTML = json1.data.hsl.value;
          dades.style.display = "block";
        })
        .catch(
          (error) => (document.getElementById("error1").innerHTML = error)
        );
    },
    Color2: function () {
      var x = document.getElementById("colorSecundari").value;
      var y = x.substring(1);

      const url = "http://www.thecolorapi.com/id?hex=" + y;

      axios
        .get(url)
        .then((response) => {
          const myJSON = JSON.stringify(response);

          var json1 = JSON.parse(myJSON);
          var nombre = document.getElementById("colorname2");
          var hex = document.getElementById("colorhex2");
          var rgb = document.getElementById("colorrgb2");
          var hsl = document.getElementById("colorhsl2");
          var dades = document.getElementById("color2Dades");

          var textos = document.getElementsByClassName("textoPicker");
          Array.from(textos).forEach((element) => {
            element.style.color = json1.data.hex.value;
          });
          nombre.innerHTML = json1.data.name.value;
          hex.innerHTML = json1.data.hex.value;
          rgb.innerHTML = json1.data.rgb.value;
          hsl.innerHTML = json1.data.hsl.value;
          dades.style.display = "block";
        })
        .catch(
          (error) => (document.getElementById("error1").innerHTML = error)
        );
    },
    sendEmail(e) {
      try {
        emailjs.sendForm(
          "service_h39x8bj",
          "template_8g28alk",
          e.target,
          "user_EBcITTFP4r68ZiYXyEXUY",
          {
            name: this.name,
            email: this.email,
            message: this.message,
          }
        );
      } catch (error) {
        console.log({ error });
      }
      // Reset form field
      this.name = "";
      this.email = "";
      this.message = "";
    },
  },
};
</script>
