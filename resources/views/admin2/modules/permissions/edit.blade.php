@extends('admin2.admin')
@section('content')
<div class="card">
    <div class="card border-secondary mb-3">
    <div class="card-header">Editar Permisos
        <div class="btn-group btn-group-sm float-right" role="group" aria-label="...">
            <a href="{{ route('permissions.index') }}" class="btn btn-outline-danger"> Cancelar</a>
        </div>
    </div>
    <div class="card-body text-secondary">
        {!! Form::model($permission, ['route' => ['permissions.update', $permission->id], 'method' => 'PUT']) !!}
            <input type="text">
            <button type="submit" class="btn btn-primary">Actualizar Registro</button>
        {!! Form::close() !!}
    </div>
    </div>
</div>
@endsection