<!doctype html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('/css/loginStyle.css') }}">
  <style>
    .btn-secondary {
      background-color: black !important;
    }
  </style>
</head>

<body class="img js-fullheight" style="background-image: url({{ asset('images/thiet-ke-cua-hang-may-tinh-1.jpg') }});">

  <section class="ftco-section">
    <div class="container">
      @yield('content')
    </div>
  </section>
</body>

</html>
