<form action="{{route('noticias.store')}}" method="POST" enctype="multipart/form-data" class="form-crear">
    @csrf
    <input type="hidden" name="usuario" value="{{ auth()->user()->name }}">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="form-item">
                <label for="f1">Titulo de la noticia:</label>
                <input type="text" id="titulo" name="titulo" value="{{old('titulo')}}">
                @error('titulo')
                <span class="error-message">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="form-item">
                <label for="f2">Autor:</label>
                <input type="text" id="autor" name="autor" value="{{old('autor')}}">
                @error('autor')
                <span class="error-message">{{$message}}</span>
                 @enderror
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-item">
                <label for="f3">Descripcion:</label>
                <textarea id="descripcion" name="descripcion">{{old('descripcion')}}</textarea>
                @error('descripcion')
                    <span class="error-message">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="form-item">
                <label for="f2">Foto/Video:</label>
                <input type="file" id="foto" name="foto" value="{{old('foto')}}">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="form-item">
                <label for="f1">Palabras claves para la noticia:</label>
                <input type="text" id="slug" name="slug" value="{{old('slug')}}">
                @error('slug')
                <span class="error-message">{{$message}}</span>
                @enderror
            </div>
        </div>

        
        
        <div class="col-lg-12 mt-5">
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn-primary-line float-left mx-2">Crear noticia</button>
                <a class="btn-primary-line float-right mx-5" href="{{route('noticias.index')}}">Cancelar</a>
            </div>
        </div>



    </div>
</form>