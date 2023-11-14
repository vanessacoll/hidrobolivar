<div class="form-group">
    {!! Form::label('name', 'Nombre del rol',['class'=>'mb-2 h6']) !!}
    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el nombre del rol']) !!}
    @error('name')
        <small class="text-danger">
            {{$message}}
        </small>
    @enderror
</div>

<h2 class="h6 mt-4">
Lista de Permisos
</h2>

@foreach ( $permissions as $permission )
<div>
    <label>
        {!! Form::checkbox('permissions[]', $permission->id, null, ['class'=>'mt-1']) !!}
        {{$permission->description}}
    </label>
</div>
@endforeach