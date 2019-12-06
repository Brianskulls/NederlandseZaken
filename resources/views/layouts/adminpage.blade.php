<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Nederlandse Zaken</title>
    <!-- Assets -->
    <link rel="stylesheet" href="{{ mix('/css/admin.css')}}">
    <script src="{{ mix('/js/app.js')}}"></script>
  </head>
  <body>
    <!-- Dashboard on the side -->
    <div class="dashboard">
      <div class="dashboard__row">
        @include ('layouts.partials.dashboard')
        <!-- Main area -->
        <div class="dashboard__main">
          @yield('content')
        </div>
      </div>
    </div>
  </body>
</html>
