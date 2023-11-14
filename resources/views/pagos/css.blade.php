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
text-align: center; 

}
strong.blue-text {
    color: blue;
}
</style>