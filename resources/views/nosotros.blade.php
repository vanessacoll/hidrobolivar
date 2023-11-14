@extends('layouts.plantilla')

@section('title','Conocenos')

@section('css')

<style>
    /* Aplica justificación al párrafo */
    p {
        text-align: justify;
    }
</style>

@endsection


@section('content')


<section class="page">
    <!-- ***** Page Top Start ***** -->
    <div class="cover" >
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Conocenos</h1>
                    </div>
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('hidrobolivar') }}">Hidrobolívar</a></li>
                            <li class="active">Nosotros</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Page Top End ***** -->

    		<!-- ***** Page Content Start ***** -->
		<div class="page-bottom pbottom-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p> Hidrobolívar es una hidrológica del Estado Venezolano creada por el Gobierno Regional y once municipios (Angostura del
                            Orinoco, Caroní, Raúl Leoni, Piar, Sucre, Padre Pedro Chien, Gran Sabana, Cedeño, Roscio, SIfonte y El
                            Callao). Nace para satisfacer y solucionar los problemas del agua en la comunidad, tales como la
                            potabilización, abastecimiento, clarificación y saneamiento del Estado.</p>
						<!-- ***** Gallery Start ***** -->
						<div class="row page-gallery-wrapper">
							<div class="col-lg-8 col-md-4 col-sm-12">
								
									<img src="{{asset('assets/images/photos/about/1.jpg')}}" alt="">
								
							</div>
							<div class="col-lg-4 col-md-8 col-sm-12">
								<div class="row">
									<div class="col-lg-12 col-md-6 mb-3">
										
											<img src="{{asset('assets/images/photos/about/2.jpg')}}" alt="">
										
									</div>
									<div class="col-lg-12 col-md-6">
									
											<img src="assets/images/photos/about/3.jpg" alt="">
										
									</div>
								</div>
							</div>
						</div>
						<!-- ***** Gallery End ***** -->
						<p class="mt-5">Fue constituida y registrada en un principio como Aguas de Bolívar C.A el 10 de septiembre de
                            2012 por la oficina del registro mercantil segundo del Estado Bolívar, Venezuela. En el acta de asamblea
                            extraordinaria de accionistas de la fecha 24 de febrero de 2005 se sometió a discusión y aprobación los
                            siguientes puntos; cese acciones, modificación de la denominación de la empresa, al igual que la aprobación
                            del proyecto de la reforma general de los estatus y el nombramiento de la nueva junta directiva.
                            Fue registrada ante la oficina del registro mercantil el 03 de marzo de 2005 bajo el nombre
                            de HIDROBOLÍVAR C.A.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- ***** Page Content End ***** -->
	</section>

    	<!-- ***** Parallax Start ***** -->
	<section class="parallax">
		<div class="parallax-content">
			<div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="info">
                            <p class="mb-4">Misión</p>
                            <p>
                                Proveer el servicio de agua potable y saneamiento en condiciones de óptima calidad, mediante un modelo de
                                gestión efectivo y sustentable, asegurando la satisfacción de nuestros clientes y el desarrollo de una nueva
                                cultura del agua fundamentada en la valoración del recurso hídrico 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="info">
                            <p class="mb-4">Visión</p>
                            <p>
                                Ser la hidrológica de referencia nacional, reconocida por proveer el vital líquido en óptimas condiciones a todo
                                el pueblo venezolano, ofreciendo el mayor compromiso, atención y excelencia humana.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
		</div>
	</section>
	<!-- ***** Parallax End ***** -->

	<!-- ***** Our Team Start ***** -->
	<section class="section pbottom-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="center-heading">
						<h2 class="section-title">Valores</h2>
					</div>
				</div>
				
			</div>

			<div class="row justify-content-between">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="team-item active">
                        <div class="header">
                            <div class="info">
                                <strong>Integridad, Ética y Compromiso</strong>
                            </div>
                        </div>
                        <div class="body">
                            Valoramos los comportamientos que reflejan ética, transparencia, honradez, disposición y automotivación
                            como medio para obtener credibilidad y respeto.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="team-item">
                        <div class="header">
                            
                            <div class="info">
                                <strong>Orientación a los procesos y clientes.</strong>
                            </div>
                        </div>
                        <div class="body">
                            Valoramos los aportes para mejorar los procesos a través de la identificación y logro de objetivos
                            cuantificables, realistas y rentables, enfocados a satisfacer las necesidades de nuestros clientes.

                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="team-item">
                        <div class="header">
                            
                            <div class="info">
                                <strong>Comunicación abierta.</strong>
                            </div>
                        </div>
                        <div class="body">
                            Valoramos el intercambio de información dentro de un espíritu abierto y sincero como medio para abordar y
                            resolver los problemas cotidianos dentro nuestra organización.

                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="team-item">
                        <div class="header">
                            
                            <div class="info">
                                <strong> Trabajo en equipo.</strong>
                            </div>
                        </div>
                        <div class="body">
                            Valoramos el trabajo en equipo por tener un resultado superior a los esfuerzos individuales hacía el logro de
                            un fin común.

                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="team-item">
                        <div class="header">
                            
                            <div class="info">
                                <strong> Creatividad e innovación.</strong>
                            </div>
                        </div>
                        <div class="body">
                            Valoramos la búsqueda continua de nuevas soluciones que agreguen valor a la misión de 
                            <strong>HIDROBOLÍVAR</strong>

                        </div>
                        
                    </div>
                </div>
            </div>
            
		</div>
	</section>
	<!-- ***** Our Team End ***** -->


@endsection

@section('js')

<!-- jQuery -->
<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

<!-- Bootstrap -->
<script src="{{asset('assets/js/popper.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<!-- Plugins -->
<script src="{{asset('assets/js/scrollreveal.min.js')}}"></script>
<script src="{{asset('assets/js/parallax.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/imgfix.min.js')}}"></script>

<!-- Global Init -->
<script src="{{asset('assets/js/custom.js')}}"></script>

    
@endsection
