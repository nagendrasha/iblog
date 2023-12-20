<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iBlogs</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/index.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

  </head>
  <body>
  @include('layout.header')
  
  @yield('content')

  @include('layout.footer')
 <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>