@extends('admin.app')

@section('content')
    <h3 class="">Tambah Pengguna</h3><br>

    {!! Form::open(['route' => 'admin.users.store']) !!}

    <div class="form-group {{ $errors->has('name') ? 'has-error' : false }}">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group {{ $errors->has('email') ? 'has-error' : false }}">
        {!! Form::label('email', 'Email address') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group {{ $errors->has('password') ? 'has-error' : false }}">
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', ['class' => 'form-control','placeholder'=>'Password']) !!}
    </div>

    <div class="form-group {{ $errors->has('password') ? 'has-error' : false }}">
        {!! Form::label('password_confirmation', 'Confirm Password') !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control','placeholder'=>'Confirm Password']) !!}
    </div>


    <div class="form-group {{ $errors->has('roles') ? 'has-error' : false }}">
        {!! Form::label('roles', 'Roles') !!}
        {!! Form::select('roles[]', $roles, null, ['class' => 'form-control', 'multiple'=>'multiple', 'size'=>$roles->count()]); !!}
    </div>


    <button type="submit" id="create" class="btn btn-labeled btn-primary"><span class="btn-label"><span class="glyphicon glyphicon-plus"></span> Tambah</button>

    <a class="btn btn-labeled btn-default" href="{{ route('admin.users.index') }}"><span class="btn-label"><span class="glyphicon glyphicon-arrow-left"></span> Batal/Kembali</a>

    {!! Form::close() !!}
@endsection