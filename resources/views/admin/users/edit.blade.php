@extends('layouts.admin')
@section('content')
@section('pagehead','Edit User')
<div class="row">
    <div class="col-md-4">
        <img height="300" src="{{URL::to('/')}}{{$user->photo ? $user->photo->file :'http:/placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">

    </div>
    <div class="col-md-8">
        {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}
        {{ csrf_field() }}
        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email','Email:') !!}
            {!! Form::email('email',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('role_id','Role:') !!}
            {!! Form::select('role_id', $roles ,null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('is_active','Active:') !!}
            {!! Form::select('is_active',array(1 => 'Active', 0 => "Not Active"),null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id','Choose Avatar:') !!}
            {!! Form::file('photo_id',['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password','Password:') !!}
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Edit Users',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
        {!! Form::open(['method'=>'DELETE','action'=>['AdminUsersController@update',$user->id]]) !!}
        @csrf
        <div class="form-group">
            {!! Form::submit('Delete Users',['class'=>'btn btn-danger']) !!}
        </div>
        {!! Form::close() !!}

    </div>

</div>

@include('includes.form-errors')
@stop