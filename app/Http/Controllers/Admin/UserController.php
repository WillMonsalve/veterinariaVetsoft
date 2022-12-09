<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Spatie\Permission\Models\Role;

class UserController extends Controller
{

   public function __construct()
   {        
        $this->middleware('can:admin.users.index')->only('index');
        $this->middleware('can:admin.users.create')->only('create', 'strore');
        $this->middleware('can:admin.users.show')->only('show');
        $this->middleware('can:admin.users.edit')->only('edit', 'update');
   }

    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
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
            'cedula' => 'required|unique:users',
            'edad' => 'required',
            'telefono' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|unique:users',
            'status' => 'nullable',

        ]);

        $user = User::create($request->only('name', 'apellido', 'direccion', 'cedula', 'edad', 'telefono', 'email', 'status')
                + [
                    'password' => bcrypt($request->input('password')),
                ]);

        if ($request->roles) {
            $user->roles()->attach($request->roles);
        }

        return redirect()->route('admin.users.edit', $user)->with('info', 'El usuario se creó con éxito');
    }

   
    public function show($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        
        return view('admin.users.show', compact('user', 'roles'));
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
            'status' => 'nullable',

        ]);

        $user->update($request->all());

        $user->roles()->sync($request->roles);

        return redirect()->route('admin.users.index', $user)->with('info', 'Se actualizó los datos correctamente');
    }

   
    public function destroy(User $user)
    {
        /* $user->delete();

        return redirect()->route('admin.users.index')->with('info', 'El usuario se elimino con exito'); */
    }
}
