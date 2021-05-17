<template>
  <nav class="navbar fixed-top navbar-expand-lg">
    <a class="navbar-brand" href="#"
      ><img src="assets/img/logohgl.svg" alt="HGL" height="75px" width="75px"
    /></a>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link seccions" href="#principal"
            >Home <span class="sr-only">(current)</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link seccions" href="#about">Quien soy?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link seccions" href="#skills">Habilidades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link seccions" href="#proyectos">Proyectos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link seccions" href="#colorPicker">Color Picker</a>
        </li>
        <li class="nav-item">
          <a class="nav-link seccions" href="#contacto">Contacto</a>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse justify-content-end collapse-redes">
      <ul class="navbar-nav navbar-redes text-center">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <img src="assets/img/facebook.png" height="50px" width="50px"/>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">
            <img src="assets/img/instagram.png" height="50px" width="50px"/>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">
            <img src="assets/img/linkedin.png" height="35px" width="35px" style="margin-top:8px"/>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">
            <img src="assets/img/twitter.png" height="50px" width="50px"/>
          </a>
        </li>
      </ul>
    </div>
  </nav>
</template>
<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
