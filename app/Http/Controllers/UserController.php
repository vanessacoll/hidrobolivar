<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    //PROTECCION DE RUTAS!!
    public function __construct(){
        $this->middleware('can:permiso.index')->only('index');
        $this->middleware('can:permiso.edit')->only('edit','update');
    }

    public function index()
    {
        $users = User::orderBy('id','desc')->paginate();
        return view('admin.index', compact('users'));
    }

    public function edit(User $user)
    {
        //return $user;
        //recuperar la informacion de los roles;
        $roles =Role::all();
        return view('admin.edit', compact('user','roles'));
    }
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.edit',$user)->with('info','Se asigno el rol correctamente');
    }
}
