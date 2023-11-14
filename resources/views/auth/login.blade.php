<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <meta name="description" content="Apfolio is a Mobile App Development Agency HTML5 Template by tempload." />
	<meta name="keywords" content="Apfolio, mobile app, agency, development, html, template, tempload" />
	<meta name="author" content="tempload"/>

    @include('layouts.css')
    @yield('css')

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118135390-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-118135390-1');
	</script>
    <style>
        body {
            background-image: url('{{ asset('/assets/images/photos/fondo.png') }}'); /* Reemplaza 'ruta/de/tu/imagen.jpg' con la ubicación de tu imagen */
            background-size: cover; /* Ajusta el tamaño de la imagen para cubrir todo el fondo */
            background-repeat: no-repeat; /* Evita la repetición de la imagen de fondo */
        }
      

        form {
         background-color: rgba(0, 0, 255, .2); /* Fondo azul con 50% de transparencia */
         padding: 20px; /* Añade relleno según sea necesario */
         border-radius: 10px; /* Puedes agregar esquinas redondeadas si lo deseas */
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Agrega sombra si deseas */
        }

        .ov-btn-grow-ellipse {
    background: transparent; /* color de fondo */
    color: #4741d7; /* color de fuente */
    border: 2px solid #4741d7; /* tamaño y color de borde */
    padding: 2px 5px; /* Reducción del padding para hacer el botón más pequeño */
     border-radius: 15px; /* redondear bordes */
    position: relative;
    z-index: 1;
    overflow: hidden;
     display: inline-block;
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


    </style>
</head>

<body>

	<!-- ***** Preloader Start ***** -->
	<div class="loader-wrapper">
		<div class="loader">
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
		</div>
	</div>
	<!-- ***** Preloader End ***** -->


  <section class="page">
  <!-- ***** Page Top Start ***** -->
    <div class="cover">
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Inicio de Sesión</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Page Top End ***** -->
    

    <!-- ***** Page Content Start ***** -->
    <div class="page-bottom pbottom-70">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

        <div class="container ">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-post-thumb big mbottom-60">
                                <!-- ***** Post Top Start ***** -->
                            
                                <div class="blog-text">
                                
                                    <!-- ***** Post Top End ***** -->

                                    <!-- ***** Post Content Start ***** -->
                                    <div class="text post-detail">
                                        <div class="centered-form mt-5 ">
                                            <div class="col-lg-12 mt-5">
                                                <div class="container transparente " >
                                                            
                                                    <x-auth-session-status class="mb-4" :status="session('status')" />

                                                        @include('auth.partials.form')


                                                
                                                
                                                </div>
                                            
                                            </div>
                                            </div>

                                    </div>
                            </div>
                        </div>




                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- ***** Page Content End ***** -->
</section>




	<!-- ***** Footer Start ***** -->
	@include('layouts.footer')
	<!-- ***** Footer Start ***** -->


    @yield('js')
	@include('layouts.js')
</body>
</html>
