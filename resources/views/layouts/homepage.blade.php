<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Assets -->
        <link rel="stylesheet" href="{{ mix('/css/app.css')}}">
        <script src="{{ mix('/js/app.js')}}"></script>
    </head>
    <body @if(isset($bodyColor)) style="background-color: {{$bodyColor}};" @endif>
      <!-- Navigation bar in the header -->
      @include ('layouts.partials.header')
      <!-- Main -->
      <main>
        @yield('content')
      </main>
      <!-- Footer -->\

      <footer>
      </footer>
    </body>
</html>
