<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Spatie\Permission\Models\Role;

class UserController extends Controller
{

   /* public function __construct()
   {
        $this->middleware('can:admin.users.index')->only('index');
        $this->middleware('can:admin.users.edit')->only('edit', 'update');
        $this->middleware('can:admin.users.destroy')->only('destroy');
   } */

    public function index()
    {
        //$users = User::all();
        return view('admin.users.index');
    }


    public function create()
    {
        $roles = Role::all();

        return view('admin.users.create', compact('roles'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'apellido' => 'required',
            'direccion' => 'required',
            'cedula' => 'required',
            'edad' => 'required',
            'telefono' => 'required',
            'email' => 'required',
        ]);

        $user = User::create($request->all());

        if ($request->roles) {
            $user->roles()->attach($request->roles);
        }

        return redirect()->route('admin.users.edit', $user)->with('info', 'El usuario se creó con éxito');
    }

   
    public function show(User $user)
    {
        //
    }

   
    public function edit(User $user)
    {
        $roles = Role::all();

        return view('admin.users.edit', compact('user', 'roles'));
    }

    
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'apellido' => 'required',
            'direccion' => 'required',
            'cedula' => 'required',
            'edad' => 'required',
            'telefono' => 'required',
            'email' => 'required',
        ]);

        $user->update($request->all());

        $user->roles()->sync($request->roles);

        return redirect()->route('admin.users.index', $user)->with('info', 'Se actualizó los datos correctamente');
    }

   
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users.index')->with('info', 'El usuario se elimino con exito');;
    }
}
