@extends('layouts.plantilla')

@section('title','Métodos de Pago')

@section('css')
@include('pagos.css')
	
@endsection

@section('content')



<section class="page">
    <!-- ***** Page Top Start ***** -->
    <div class="cover" >
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Metodos de Pago</h1>
                    </div>
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li><a href="{{route('hidrobolivar')}}">Hidrobolivar</a></li>
                            <li>Métodos de pago</li>

                        </ol>
                    </div>


                    



                </div>
            </div>
        </div>
    </div>
    <!-- ***** Page Top End ***** -->

    <!-- ***** Page Content Start ***** -->
    <div class="page-bottom pbottom-70">

		<div class="col-lg-12">
			<div class="center-heading">
				<h1 class="section-title mb-5 ">
					<strong>
						¿ Quieres cancelar tu deuda y no sabes como hacerlo ?
					</strong>
				</h1>
				
				

				<span class="parpadea text-1"><strong> ¡Aquí te explicamos como! </strong>

					
				
			</div>
		</div>
 
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-post-thumb big mbottom-60">
                                <!-- ***** Post Top Start ***** -->
                                <div class="img">
                                   
                                    <div class="video-container" style="text-align: center;">
										<video controls width="700" height="500" style="display: inline-block;">
											<source src="{{asset('assets/images/photos/videos/patria.mp4')}}" type="video/mp4">
										</video>
									</div>
									

                                </div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-12 mx-auto">
									<ul class="features">
										<li class="active" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.2s">
											<div class="count">
												<span>1</span>
											</div>
											<div class="text">
												<h6 class="title">Ingresa al portal web del Sistema Patría</h6>
												<div class="text-center"> <!-- Agrega esta clase para centrar horizontalmente -->
													<a href="https://persona.patria.org.ve/login/clave/" target="_blank" class="ov-btn-grow-ellipse">
														Sistema Patría
													</a>
												</div>
											</div>
										</li>
										<li class="active" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.3s">
											<div class="count">
												<span>2</span>
											</div>
											<div class="text">
												<h5 class="title">Selecciona la opción monedero, seguido de servicios y contratos</h5>
												
											</div>
										</li>
										<li class="active" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
											<div class="count">
												<span>3</span>
											</div>
											<div class="text">
												<h5 class="title">luego ubicas en el listado que se despliega <strong>"Hidrobolívar"</strong></h5>
											</div>
										</li>
										<li class="active" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.5s">
											<div class="count">
												<span>4</span>
											</div>
											<div class="text">
												<h5 class="title">Procedes a ingresar tu número de cuenta hidrológica o numero telefónico perteneciente a la cuenta</h5> 
											</div>
										</li>
									</ul>

									<div class="col-lg-12 mt-5" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.5s">
										<div class="center-heading">
											<h1 class="section-title mb-5 ">
												<strong class="blue-text">
													Cancela tu deuda de una manera rapída, fácil y sencilla.
												</strong>
											</h1>
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

@endsection
