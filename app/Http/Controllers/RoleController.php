<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    //PROTECCION DE RUTAS
    public function __construct(){
        $this->middleware('can:role.index')->only('index');
        $this->middleware('can:role.create')->only('create');
        $this->middleware('can:role.show')->only('show');
        $this->middleware('can:role.edit')->only('edit');
        $this->middleware('can:role.update')->only('update');
        $this->middleware('can:role.destroy')->only('destroy');
    }
    public function index(){

        $roles = Role::orderBy('id','asc')->paginate();
        return view('admin.roles.index',compact('roles'));
    }

    public function create(){
        $permissions = Permission::all();
        return view('admin.roles.create', compact('permissions'));
    }

    public function store(Request $request){
        $request -> validate([
            'name'=>'required'
        ]);

        //creamos un nuevo rol
        $role = Role::create($request->all());

        //asignamos los permisos al rol que se acaba de crear
        $role -> permissions()->sync($request->permissions);

        return redirect()->route('admin.role.edit',$role)->with('info','El rol ha sido creado exitosamente');
    }

    public function show(Role $role){
        return view('admin.roles.show',compact('role'));
    }

    public function edit(Role $role){
        $permissions = Permission::all();
        return view('admin.roles.edit',compact('role','permissions'));
    }

    public function update(Request $request, Role $role){
        $request -> validate([
            'name'=>'required'
        ]);

        $role->update($request->all());
       
        $role -> permissions()->sync($request->permissions);
        session()->flash('info', 'El rol ha sido actualizado exitosamente');
        //dd(session('info'));
        return redirect()->route('admin.role.edit',$role);
        
    }

    /*    
    public function destroy(Role $role){
        
        $role->delete();
        session()->flash('info', 'El rol ha sido eliminado exitosamente');
        
        //$roles = Role::orderBy('id','asc')->paginate();
       
       return redirect()->route('admin.role.index');

    }
    */
    public function destroy(Role $role)
{
    // Verifica si hay usuarios que tienen asignado este rol
    if ($role->users->isEmpty()) {
        // No hay usuarios con este rol, por lo que se puede eliminar
        $role->delete();
        session()->flash('info', 'El rol ha sido eliminado exitosamente');
    } else {
        // Hay usuarios con este rol, muestra un mensaje de error
        session()->flash('error', 'No se puede eliminar el rol porque hay usuarios asignados a él.');
    }

    return redirect()->route('admin.role.index');
}

}
