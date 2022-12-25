@section('title', 'Order')
@include('layouts.admin.header')
@include('layouts.admin.slidebar')
@section('main-content')
  <div class="container">
    <div class="row">
      <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Order</h4>
          </div>
          <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <div class="d-md-flex">
              <ol class="breadcrumb ms-auto">
                <li><a href="{{ route('admin.order-check') }}" class="fw-normal">Orders List</a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mt-5">
            <div class="card">
              <h5 class="card-header bg-dark text-white text-center">User Information</h5>
              <div class="card-body">

                <p class="card-text"><strong>Name</strong>{{ ':' . $order->user->name }}</p>
                <p class="card-text"><strong>Address</strong>{{ ':' . $order->user->adrress }}</p>
                <p class="card-text"><strong>Phone</strong>{{ ':' . $order->user->phoneNumber }}</p>
                <p class="card-text"><strong>Address Shipping</strong>{{ ':' . $order->address_shipping }}</p>
                <p class="card-text"><strong>Phone Shipping</strong>{{ ':' . $order->phoneNumber_shipping }}</p>
                <p class="card-text"><strong>Time Order</strong>{{ ':' . $order->created_at }}</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mt-5">
            <div class="card">
              <h5 class="card-header bg-dark text-white text-center">Payment Information</h5>
              <div class="card-body">

                <p class="card-text"><strong>Payment Method</strong>{{ ':' . $order->payment->payment_method }}</p>

              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 mt-5">
                <table class="table">
                  <thead style="background-color: #021919;color:white">
                    <tr>
                      <th scope="col" class="text-center">Product</th>
                      <th scope="col">Image</th>
                      <th scope="col" class="text-center">Quanlity</th>
                      <th scope="col" class="text-center">Color</th>
                      <th scope="col" class="text-center">Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($order->products as $product)
                      <tr>
                        <td class="fw-bold text-center text-primary">{{ $product->product_name }}</td>
                        <td><img src="{{ $product->product_image }}" alt="{{ $product->product_image_name }}"
                            width="100rem" height="100rem"></td>
                        <td class="text-center">{{ $product->pivot->buy_quanlity }}</td>
                      
                        <td class="text-center">
                          {{ $product->colors()->where('colors.id', '=', $product->pivot->color_id)->first()->color_name }}
                        </td>
                        <td class="text-center">{{ '$' . $product->price }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endsection
    @include('layouts.admin.main')
    @include('layouts.admin.footer')
