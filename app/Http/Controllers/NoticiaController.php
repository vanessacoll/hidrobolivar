<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use App\Http\Requests\StoreNoticia;
use App\Http\Requests\UpdateNoticia;
use Illuminate\Support\Facades\Storage;
//use Intervention\Image\Facades\Image;

class NoticiaController extends Controller
{
    public function index(){
        $noticias = Noticia::orderBy('id','desc')->paginate();

       // return $noticias;

       return view('noticias.index',compact('noticias'));
    }

    public function create(){
        //return"hola";
        return view('noticias.create');
    }


    public function store(StoreNoticia $request){
        //return $request->all();
        $noticia = new Noticia();

        //dd ($request);

        $noticia->titulo = $request->titulo;
        $noticia->autor = $request->autor;
        $noticia->descripcion = $request->descripcion;
        //$noticia->foto = $request->foto;
        $noticia->slug = $request->slug;
        $noticia->usuario = $request->input('usuario');
        if($request->hasFile('foto')){
            $noticia->foto=$request->file('foto')->store('public/noticias');
        }

        //$url = Storage::url($noticia->foto);
       // return $noticia;
        $noticia->save();
        session()->flash('success', 'La noticia se ha creado con éxito.');
        //dd(session('success'));
        return redirect()->route('noticias.show',$noticia);
    }

    /*
    public function store(StoreNoticia $request)
{
    // Crear una nueva instancia de Noticia
    $noticia = new Noticia();

    // Asignar los valores desde la solicitud
    $noticia->nombre = $request->nombre;
    $noticia->autor = $request->autor;
    $noticia->descripcion = $request->descripcion;
    $noticia->slug = $request->slug;

    if ($request->hasFile('foto')) {
        $foto = $request->file('foto');

        // Verificar el tipo de archivo (foto o video) y guardar en la ubicación adecuada
        if ($foto->getMimeType() === 'image/jpeg' || $foto->getMimeType() === 'image/png') {
            // Es una foto
            $ruta = $foto->store('public/carpeta-fotos');
        } elseif ($foto->getMimeType() === 'video/mp4') {
            // Es un video
            $ruta = $foto->store('public/carpeta-videos');
        }

        // Obtener el nombre del archivo en la carpeta 'public'
        $nombreArchivo = str_replace('public/', '', $ruta);

        // Asignar la ruta del archivo en 'public' a la propiedad 'foto' del modelo
        $noticia->foto = $nombreArchivo;
    }

    $noticia->save();

    session()->flash('success', 'La noticia se ha creado con éxito.');
    return redirect()->route('noticias.show', $noticia);
}
*/

    public function show(Noticia $noticia){
        //$noticia = Noticia::find($id);
        //return $noticia;
        return view('noticias.show',compact('noticia'));
    }

    public function edit(Noticia $noticia){
        //$noticia = Noticia::find($id);
        //return $noticia;
        return view('noticias.edit',compact('noticia'));
    }

    public function update (UpdateNoticia $request, Noticia $noticia){


        $noticia->titulo = $request->titulo;
        $noticia->autor = $request->autor;
        $noticia->descripcion = $request->descripcion;
        if($request->hasFile('foto')){
            $noticia->foto=$request->file('foto')->store('public/noticias');
        }
        $noticia->usuario = $request->input('usuario');
        $noticia->save();
        session()->flash('success', 'La noticia se ha editado con éxito.');
        return redirect()->route('noticias.show',$noticia);
    }

    public function destroy (Noticia $noticia){
        $noticia->delete();
        return redirect()->route('noticias.index');
    }
}
