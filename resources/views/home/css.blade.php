<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<style>

    .text-1 {
  font-size:28px;
  font-family:helvetica;
  font-weight:bold;
  color: blue;
  text-transform:uppercase;
}
.parpadea {
  
  animation-name: parpadeo;
  animation-duration: 1s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;

  -webkit-animation-name:parpadeo;
  -webkit-animation-duration: 1s;
  -webkit-animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
}

@-moz-keyframes parpadeo{  
  0% { opacity: 1.0; }
  50% { opacity: 0.0; }
  100% { opacity: 1.0; }
}

@-webkit-keyframes parpadeo {  
  0% { opacity: 1.0; }
  50% { opacity: 0.0; }
   100% { opacity: 1.0; }
}

@keyframes parpadeo {  
  0% { opacity: 1.0; }
   50% { opacity: 0.0; }
  100% { opacity: 1.0; }
}

.ov-btn-grow-ellipse {
    background: transparent; /* color de fondo */
    color: #4741d7; /* color de fuente */
    border: 2px solid #4741d7; /* tamaño y color de borde */
    padding: 10px 200px;
    border-radius: 15px; /* redondear bordes */
    position: relative;
    z-index: 1;
    overflow: hidden;
     display: inline-block;
    text-align: center; /* Centra el texto horizontalmente dentro del div */
}
    

    .ov-btn-grow-ellipse:hover {
    color: #fff; /* color de fuente hover */
    }

    .ov-btn-grow-ellipse::after {
    content: "";
    background: #4741d7; /* color de fondo hover */
    position: absolute;
     z-index: -1;
    padding: 10px 14px; /* Reducción del padding para hacer el botón más pequeño */
    display: block;
    border-radius: 50%;
    left: -50%;
    right: -50%;
    top: -150%;
    bottom: -150%;
    transform: scale(0, 0);
    transition: all 0.4s ease;
    }

    .ov-btn-grow-ellipse:hover::after {
    transition: all 0.6s ease-out;
    transform: scale(1, 1);
    }

    .text-2 {
    text-align: center; /* Centra todo el contenido horizontalmente */

}

.carousel-section {
        padding: 40px 0; /* Agregar espacios en la parte superior e inferior */
        background-color: #f5f5f5; /* Color de fondo opcional */
    }

    .carousel-container {
        max-width: 800px; /* Ancho máximo del carrusel */
        margin: 0 auto; /* Centrar el carrusel horizontalmente */
    }

    /* Estilos para el carrusel */
    #carouselExampleControls {
        margin-top: 20px; /* Margen superior */
        /* Puedes ajustar otros estilos del carrusel según tus preferencias */
    }

    .hit-the-floor {
color: #fff;
font-size: 12em;
font-weight: bold;
font-family: Helvetica;
text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaa, 0 6px 1px rgba(0,0,0,.1), 0 0 5px rgba(0,0,0,.1), 0 1px 3px rgba(0,0,0,.3), 0 3px 5px rgba(0,0,0,.2), 0 5px 10px rgba(0,0,0,.25), 0 10px 10px rgba(0,0,0,.2), 0 20px 20px rgba(0,0,0,.15);
}

.hit-the-floor {
  text-align: center;
}

:root {
    --color-inactivo: #3c39df;
    --color-hover: #ffa400;
}
.valoracion {
    display: flex;
    flex-direction: row-reverse;
    justify-content: center;
    align-items: center;
}
.valoracion button {
    background-color: initial;
    border: 0;
    color: var(--color-inactivo);
    transition: 1s all;
    font-size: 50px; /* Tamaño de fuente deseado */
    margin: 0 5px; /* Espacio entre estrellas */
}
.valoracion button:hover {
    cursor: pointer;
    color: var(--color-hover);
    transform: rotate(360deg);
}
button:nth-child(1):hover ~ button {
    color: var(--color-hover);
    transform: rotate(360deg);
}
button:nth-child(2):hover ~ button {
    color: var(--color-hover);
    transform: rotate(360deg);
}
button:nth-child(3):hover ~ button {
    color: var(--color-hover);
    transform: rotate(360deg);
}
button:nth-child(4):hover ~ button {
    color: var(--color-hover);
    transform: rotate(360deg);
}
button:nth-child(5):hover ~ button {
    color: var(--color-hover);
    transform: rotate(360deg);
}

.center-heading h1.section-title {
    margin-top: 50px; /* Ajusta la cantidad de espacio que desees entre el texto y la parte superior */
}

.blue-text {
    color: #fff; /* Color de fuente blanco */
   
}




</style>    