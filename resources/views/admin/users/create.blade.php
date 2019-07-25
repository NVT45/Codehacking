@extends('layouts.admin')
@section('content')
@section('pagehead','Create User')
{!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true]) !!}
@csrf
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
    {!! Form::select('role_id',['' => 'Choose Option'] + $roles,null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('is_active','Active:') !!}
    {!! Form::select('is_active',array(1 => 'Active', 0 => "Not Active"),0,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('file','Choose Avatar:') !!}
    {!! Form::file('file',['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('password','Password:') !!}
    {!! Form::password('password',['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Create Users',['class'=>'btn btn-primary']) !!}
</div>
@include('includes.form-errors')
@stop