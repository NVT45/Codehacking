@extends('layouts.admin')
@section('content')
@section('pagehead','Create User')
{!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store','files'=>true]) !!}
{{ csrf_field() }}
<div class="form-group">
    {!! Form::label('title','Title:') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('category_id','Category:') !!}
    {!! Form::select('category_id',[''=>'Choose Categories'] + $categories,null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('photo_id','Choose Photo:') !!}
    {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('body','Description:') !!}
    {!! Form::textarea('body',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Create Posts',['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}
@include('includes.form-errors')
@stop