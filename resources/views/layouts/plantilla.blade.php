<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>



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
            background-image: url('{{ asset('/assets/images/photos/fondo.png') }}');
            background-size: cover; /* Ajusta el tamaño de la imagen para cubrir todo el fondo */
            background-repeat: no-repeat; /* Evita la repetición de la imagen de fondo */
        }
    </style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

	<!-- ***** Header Area Start ***** -->
	<header class="header-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					@include('layouts.nav')
				</div>
			</div>
		</div>
	</header>
	<!-- ***** Header Area End ***** -->

    @yield('content')




	<!-- ***** Footer Start ***** -->
	@include('layouts.footer')
	<!-- ***** Footer Start ***** -->


    @yield('js')
	@include('layouts.js')
</body>
</html>
