<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@if ($title)
        {{$title}}
    @else
        Dashboard
    @endif</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/icon/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sb-admin-2.min.css') }}">
  <link rel="stylesheet" href="//cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css">
  <script src="{{ asset('assets/jquery/dist/jquery.min.js') }}"> </script>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
   <div class="container-fluid w-100 h-100 p-0 m-0">
    <main class="container-fluid w-100 h-100 p-0 m-0">
        @yield('content')
    </main>
   </div>

   <script src="//cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
   <script src="{{ asset('assets/js/main.js') }}"></script>
   {{-- <script src="{{ asset('assets/jquery.easing/jquery.easing.min.js') }}"></script> --}}
  
   {{-- <script src="{{ asset('assets/js/sb-admin-2.js') }}"></script> --}} 
   {{-- <script src="{{ asset('assets/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script> --}}
   
</body>
</html>
