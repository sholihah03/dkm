<!-- resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="style.css">
  <link href="{{ asset('css/beranda.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/settings/settings2.css') }}">
  <link rel="stylesheet" href="{{ asset('css/settings/settings3.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  @include('includes.nav')
  @yield('content')
</body>
</html>
