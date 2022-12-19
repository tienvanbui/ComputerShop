@section('title')
  Users List
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
                <li><a href="{{ route('manage_user.index') }}" class="fw-normal">Users List</a></li>
              </ol>
              <a href="{{ route('manage_user.create') }}"
                class="btn btn-success  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Create
                User</a>
            </div>
          </div>
        </div>
        <!-- /.col-lg-12 -->
      </div>
    </div>
    <div class="row">
      <div class="container">
        <h1 class="text-center">USERS LIST</h1>
        @include('common.message')
        <div class="d-flex action-bar justify-content-between">
          @include('common.showPerPage')
          @include('common.search')
        </div>
        <div id="admin-data">
          @include('admin.user.user-item')
        </div>
        <input type="hidden" id="hidden_page_admin" value="1" />
        <input type="hidden" id="hidden_table" value="users" />
        <input type="hidden" id="hidden_view" value="admin.user.user-item" />
        <input type="hidden" id="hidden_col" value="name" />
      </div>
    </div>
  </div>
@endsection
@include('layouts.admin.main')
@include('layouts.admin.footer')
