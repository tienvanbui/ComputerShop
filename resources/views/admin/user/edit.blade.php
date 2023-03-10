@section('title')
    Edit User
@endsection
@include('layouts.admin.header')
@include('layouts.admin.slidebar')
@section('main-content')
<div class="container">
	<div class="row">            
		<div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Users</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="{{route('manage_user.index')}}" class="fw-normal">Users List</a></li>
                            </ol>
                            <a href="{{route('manage_user.create')}}"
                                class="btn btn-success  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Create User</a>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
	</div>
  <div class="row">
   <h1 class="text-center">Edit User</h1>
   @include('common.message')
  <form action="{{route('manage_user.update',['manage_user'=>$user->id])}}" method="post">
    @method('put')
    @csrf
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" aria-describedby="name" name="name" value="{{ $user->name  }}">
  </div>
  <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" class="form-control" id="username" aria-describedby="username" name="username" value="{{ $user->username }}">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control" id="email" aria-describedby="email" name="email" value="{{ $user->email  }}">
  </div>
    <div class="form-group">
    <label for="phone">Phone Number:</label>
    <input type="text" class="form-control" id="phone" aria-describedby="phone" name="phoneNumber" value="{{ $user->phoneNumber }}">
  </div>
  <div class="form-group">
    <label for="adrress">Addres:</label>
    <input type="text" class="form-control" id="adrress" aria-describedby="adrress" name="adrress" value="{{$user->address }}">
  </div>
  <div class="form-group">
    <label for="role">Role:</label>
    <select name="role_id" id="role" class="form-control">
           @foreach ($roles as $role)
             <option  {{$roleOfUser->contains('id', $role->id)?'selected':''}} value="{{$role->id}}">{{$role->role_name}}</option>
            @endforeach
    </select>
  </div>
  <div class="d-grid gap-2">
    <button type="submit" class="btn btn-primary text-white mb-2">Update</button>
  </div>
  </form>
  </div>
</div>
@endsection
@include('layouts.admin.main')
@include('layouts.admin.footer')