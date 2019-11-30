<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Nederlandse Zaken</title>
    <!-- Assets -->
    <link rel="stylesheet" href="{{ mix('/css/admin.css')}}">
  </head>
  <body>
    <div class="dashboard">
      <div class="dashboard__row">
        <!-- Dashboard tab -->
        <div class="dashboard__left">
          <h2>Admin</h2>
          <ul>
            <li><a href="http://127.0.0.1:8000/admin">Dashboard</a></li>
            <li><a href="http://127.0.0.1:8000/admin/evenementen">Evenementen</a></li>
            <li><a href="http://127.0.0.1:8000/admin/toevoegen">Evenement toevoegen</a></li>
            <li><a href="http://127.0.0.1:8000">Main pagina</a></li>
          </ul>
        </div>
        <!-- Main area -->
        <div class="dashboard__main">
          @yield('content')
        </div>
      </div>
    </div>
  </body>
</html>
