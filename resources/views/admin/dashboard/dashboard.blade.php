@section('title', 'Dashboard')
@include('layouts.admin.header')
@include('layouts.admin.slidebar')
@section('main-content')
  <div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Dashboard</h4>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-12">
        <div class="white-box analytics-info bg-danger">
          <h3 class="box-title text-white">Earnings</h3>
          <ul class="list-inline two-part d-flex align-items-center mb-0">
            <li>
              <i class="fas fa-university text-white" style="font-size: 35px"></i>
            </li>
            <li class="ms-auto"><span class="counter text-white">{{ '$' . number_format($earnings) }}</span></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="white-box analytics-info bg-warning">
          <h3 class="box-title text-white">Orders</h3>
          <ul class="list-inline two-part d-flex align-items-center mb-0">
            <li>
              <i class="fas fa-truck text-white" style="font-size: 35px"></i>
            </li>
            <li class="ms-auto"><span class="counter text-white">{{ $orderCount }}</span></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="white-box analytics-info bg-success">
          <h3 class="box-title text-white">User</h3>
          <ul class="list-inline two-part d-flex align-items-center mb-0">
            <li>
              <i class="fas fa-user-plus text-white" style="font-size: 35px"></i>
            </li>
            <li class="ms-auto"><span class="counter text-white">{{ $usersCount }}</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <form method="post">
        <h3 class="text-capitalize text-center fw-bold">order sales statistics</h3>
        <div class="d-flex justify-content-between">
          <div class="col-md-3 col-sm-12">
            <p class="d-inline-flex"><span class="fw-bold" style="margin-right:10px">From: </span><input type="text"
                id="datepicker" name="from-date" class="form-control"></p>
          </div>
          <div class="col-md-3 col-sm-12">
            <p class="d-inline-flex"><span class="fw-bold" style="margin-right:10px">To:</span>
              <input type="text" id="datepicker2" name="to-date" class="form-control">
            </p>
          </div>
          <div class="col-md-3 col-sm-12 d-flex">
            <p class="fw-bold" style="margin-right:10px">Option:</p>
            <select class="form-control filter-by-option-dashboard">
              <option selected>Choose the option</option>
              <option value="7Days">7 Days</option>
              <option value="prevMonth">Previous Month</option>
              <option value="thisMonth">This Month</option>
            </select>
          </div>
          <div class="col-md-3 col-sm-12">
            <button type="submit" class="btn btn-primary btn-bg rounded-pill" style="margin-left:40px"
              id="btn-dashboard-statistic-earnings">Filter</button>
          </div>
        </div>

      </form>
    </div>
    <div class="row">
      <div class="col-md-12 col-lg-12 col-sm-12">
        <div id="statistic-chart" style="height: 250px;"></div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-lg-4">
        <div id="statistic-chart-donus" style="height: 250px;"></div>
      </div>
      <div class="col-md-12 col-sm-12 col-lg-4">
        <h3 class="fw-bold">List of most viewed products</h3>
        <ul class="list-group">
          @foreach ($listProductMostViewed as $index => $value)
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <p><span class="fw-bold text-dark">{{ $index + 1 }}</span>{{ '.' . $value->product_name }}</p>
              <span class="badge badge-primary badge-pill"
                style="background-color: red;border-radius:50%">{{ $value->viewed_number_count }}</span>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-lg-8">
        @include('admin.dashboard.order-item', ['orders' => $orders])
      </div>
      <div class="col-md-12 col-sm-12 col-lg-4">
        <table class="table caption-top mt-5">
          <caption class="text-success fw-bold fs-6"><span
              style="
            width: 10px;
            height: 10px;
            background-color: #1dcb32;
            display: inline-block;
            line-height: 10px;
            border-radius: 50%;
            margin-right: 5px;
        "></span>Online
          </caption>
          <thead>
            <tr>
              <th scope="col" class="fw-bold text-dark">Name</th>
              <th scope="col" class="fw-bold text-dark">Avatar</th>
              <th scope="col" class="fw-bold text-dark">Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($userOnlines as $user)
              @if (Cache::has('user-is-online-' . $user->id))
                <tr>
                  <th scope="row" class="text-bold">{{ $user->name }}</th>
                  <td><img src="{{ asset($user->avatar) }}" style="width: 50px;height:50px;border-radius:50%;"></td>
                  <td class="text-success fw-bold">Online</td>
                </tr>
              @endif
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>
@endsection
@include('layouts.admin.main')
@include('layouts.admin.footer')
