@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')
    <a class="btn btn-secondary float-right" href="{{route('admin.roles.create')}}">Nuevo Role</a>
    <h1>Lista de Roles</h1>
@stop

@section('content')
    @if (session('info'))
      <div class="alert alert-success">
        {{session('info')}}
      </div>
    @endif
    <div class="card">
      <div class="card-body">

        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Rol</th>
              <th colspan="2"></th>
            </tr>
          </thead>

          <tbody>
            @foreach ($roles as $role)
              <tr>
                <td>{{$role->id}}</td>
                <td>{{$role->name}}</td>
                <td width="10px">
                  <a href="{{route('admin.roles.edit', $role)}}" class="btn btn-sm btn-primary">Editar</a>
                </td>

                <td width="10px">
                  <form action="{{route('admin.roles.destroy', $role)}}" method="post">
                    @CSRF
                    @method('delete')
                    <button class="btn btn-sm btn-primary btn-danger" type="submit">Eliminar</button>
                  </form>
                </td>

              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
