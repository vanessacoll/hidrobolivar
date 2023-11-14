<section class="section pbottom-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="center-heading">
                    <h1 class="section-title ">
                        <strong>
                        Noticias Hidrobolívar
                        </strong>
                    </h1>
                </div>
            </div>
            {{--  
            <div class="offset-lg-3 col-lg-6">
                <div class="center-text">
                    <p>Fusce placerat pretium mauris, vel sollicitudin elit lacinia vitae. Quisque sit amet nisi erat.</p>
                </div>
            </div>
            --}}
        </div>
        
        <div class="row">

            @foreach ( $noticias as $noticia )
            <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.5s">
                <div class="blog-post-thumb">
                    <div class="img">
                        @if (isset($noticia->foto) && pathinfo($noticia->foto, PATHINFO_EXTENSION) === 'jpg' || pathinfo($noticia->foto, PATHINFO_EXTENSION) === 'png' || pathinfo($noticia->foto, PATHINFO_EXTENSION) === 'jpeg' || pathinfo($noticia->foto, PATHINFO_EXTENSION) === 'gif')
                                    <img src="{{ asset('storage/noticias/' . basename($noticia->foto)) }}" alt="" style="width: 400px; height: 400px;">
                                    @elseif (isset($noticia->foto) && (pathinfo($noticia->foto, PATHINFO_EXTENSION) === 'mp4' || pathinfo($noticia->foto, PATHINFO_EXTENSION) === 'webm' || pathinfo($noticia->foto, PATHINFO_EXTENSION) === 'ogg'))
                                        <!-- Si es un video -->
                                    <div class="video-container">
                                        <video controls width="400" height="400">
                                          <source src="{{ asset('storage/noticias/' . basename($noticia->foto)) }}" type="video/mp4">
                                          Tu navegador no admite el elemento de video.
                                        </video>
                                      </div>
                                        @else
                                        <img src="{{ asset('assets/images/photos/Logo.png') }}" > 
                                        @endif
                    </div>
                    <div class="blog-text">
                        <p style="text-align: right; font-size: 14px;">
                            {{ $noticia->created_at->diffForHumans() }}
                        </p>
                        <h3>
                            <strong>{{ $noticia->titulo }}</strong>
                        </h3>
                        <div class="text">
                            {{ $noticia->descripcion }}
                        </div>
                        <a href="{{ route('noticias.show',$noticia) }}" class="btn-primary-line">Leer Más</a>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>