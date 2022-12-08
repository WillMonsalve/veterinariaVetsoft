<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function __construct()
   {        
        $this->middleware('can:admin.permissions.index')->only('index');
        $this->middleware('can:admin.permissions.create')->only('create', 'store');
        $this->middleware('can:admin.permissions.show')->only('show');
        $this->middleware('can:admin.permissions.edit')->only('edit', 'update');
        $this->middleware('can:admin.permissions.destroy')->only('destroy');
   }
    
    public function index()
    {
        $permissions = Permission::all();

        return view('admin.permissions.index', compact('permissions'));
    }

    
    public function create()
    {
        return view('admin.permissions.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $permission = Permission::create($request->all());

        return redirect()->route('admin.permissions.edit', $permission)->with('info', 'El permiso se creó con éxito');
    }

    
    public function show(Permission $permission)
    {
        return view('admin.permissions.show', compact('permission'));
    }

    
    public function edit(Permission $permission)
    {
        return view('admin.permissions.edit', compact('permission'));
    }

    
    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $permission->update($request->all());

        return redirect()->route('admin.permissions.index', $permission)->with('info', 'El permiso se actualizó con éxito');
    }

    
    public function destroy(Permission $permission)
    {
        $permission->delete();

        return redirect()->route('admin.permissions.index')->with('info', 'El permiso se eliminó con éxito');
    }
}
