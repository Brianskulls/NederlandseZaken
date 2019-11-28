<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin | Nederlandse Zaken</title>

    <!-- Fonts -->

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
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Event List</a></li>
            <li><a href="#">Add event</a></li>
          </ul>
        </div>
        <!-- Main area -->
        <div class="dashboard__main">
          Dit is het dashboard
        </div>
      </div>
    </div>
  </body>
</html>
