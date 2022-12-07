{{-- <div>
    <div class="card">

        <div class="card-body">
            <table id="users" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr> --}}
                        {{--  <th>ID</th> --}}
                        {{-- <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Dirección</th>
                        <th>Cédula</th>
                        <th>Edad</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th>Editar</th>
                        <th>Ver</th>
                        <th>Estado</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr> --}}
                            {{-- <td>{{$user->id}}</td> --}}
                            {{-- <td>{{ $user->name }}</td>
                            <td>{{ $user->apellido }}</td>
                            <td>{{ $user->direccion }}</td>
                            <td>{{ $user->cedula }}</td>
                            <td>{{ $user->edad }}</td>
                            <td>{{ $user->telefono }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @forelse ($user->roles as $role)
                                  <span class="badge badge-info">{{ $role->name }}</span>
                                @empty
                                  <span class="badge badge-danger">No roles</span>
                                @endforelse
                            </td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.users.edit', $user) }}"><i class="fas fa-pen-fancy"></i></a>
                            </td>
                            <td width="10px">
                                <a class="btn btn-warning btn-sm" href="{{ route('admin.users.show', $user) }}"><i class="bi bi-eye"></i></a>
                            </td>
                            <td>

                                @if($user->status == '1')
                                    <span class="btn btn-success"><i class="bi bi-toggle-on"></i></span>
                                @else
                                    <span class="btn btn-danger"><i class="bi bi-toggle-off"></i></span>
                                @endif

                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div> --}}
{{-- </div> --}}
