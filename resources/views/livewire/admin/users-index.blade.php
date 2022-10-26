<div>
    <div class="card">
        <a href="{{route('register')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
            Registrarse
        </a>

        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre o correo de un usuario">
        </div>

        @if($users->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Dirección</th>
                            <th>Cédula</th>
                            <th>Edad</th>
                            <th>Teléfono</th>
                            <th>Email</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->apellido}}</td>
                                <td>{{$user->direccion}}</td>
                                <td>{{$user->cedula}}</td>
                                <td>{{$user->edad}}</td>
                                <td>{{$user->telefono}}</td>
                                <td>{{$user->email}}</td>
                                <td width="10px">
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.users.edit', $user)}}"><i class="fa fa-fw fa-edit"></i></a>
                                </td>
                                <td width="10px">
                                    <form action="{{route('admin.users.destroy', $user)}}" method="POST">
                                        @csrf
                                        @method('delete')
    
                                        <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-fw fa-trash"></i></button>
    
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

            <div class="card-footer">
                {{$users->links()}}
            </div>

        @else

            <div class="card-body">
                <strong>No hay registros</strong>
            </div>

        @endif
           
    </div>
</div>
