    @extends('layouts.admin')
    @section('content')
    @section('pagehead','List Users')
@if(Session::has('deleted_user'))

<p class="bg-danger">{{session('deleted_user')}}</p>
    @endif
<table class="table">
    <thead>
      <tr>
          <th>ID</th>
          <th>Avatar</th>
          <th>Name</th>
          <th>Email</th>
          <th>Role</th>
          <th>Active</th>
          <th>Created</th>
          <th>Updated</th>
      </tr>
    </thead>
    <tbody>
    @if($users)
          @foreach($users as $user)
      <tr>
          <td>{{$user->id}}</td>
          <td><img height="50" src="{{URL::to('/')}}{{$user->photo ? $user->photo->file :'User has no role'}}" alt=""></td>
          <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
          <td>{{$user->email}}</td>
          <td>{{$user->role ? $user->role->name :'User has no role'}}</td>
          <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
          <td>{{$user->created_at->diffForHumans()}}</td>
          <td>{{$user->updated_at->diffForHumans()}}</td>
     </tr>
      @endforeach
          @endif
   </tbody>
 </table>
@stop