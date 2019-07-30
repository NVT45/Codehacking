@extends('layouts.admin')
@section('content')
@section('pagehead','List Posts')
<table class="table">
    <thead>
      <tr>
          <th>Id</th>
          <th>User</th>
          <th>Category</th>
          <th>Photo</th>
          <th>Title</th>
          <th>Body</th>
          <th>Created_at</th>
          <th>Update_at</th>

      </tr>
    </thead>
    <tbody>
    @if($posts)
        @foreach($posts as $post)
      <tr>
          <td>{{$post -> id}}</td>
          <td>{{$post -> user->name}}</td>
          <td>{{$post -> category_id}}</td>
          <td><img height="50" src="{{URL::to('/')}}{{$post->photo ? $post->photo->file :'User has no role'}}"></td>
          <td>{{$post -> title}}</td>
          <td>{{$post -> body}}</td>
          <td>{{$post -> created_at->diffForhumans()}}</td>
          <td>{{$post -> updated_at->diffForhumans()}}</td>
     </tr>
      @endforeach
        @endif
   </tbody>
 </table>
@stop