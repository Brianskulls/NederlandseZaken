<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Homepage</title>
        <!-- Assets -->
        <link rel="stylesheet" href="{{ mix('/css/app.css')}}">
        <script src="{{ mix('/js/app.js')}}"></script>
    </head>
    <body>
      <header>
        <!-- Navigation bar in the header -->
        <div class="navbar">
          <nav>
            <a href="#">
              <img src="img/logo.png" alt="Nederlandse Zaken Logo">
            </a>
            <!-- List with navigation items -->
              <ul class="navbar__list">
                <!-- Item 1 -->
                <li class="navbar__item">
                  <a href="http://127.0.0.1:8000/" class="navbar__link">Home</a>
                </li>
                <!-- Item 2 -->
                <li class="navbar__item">
                  <a href="http://127.0.0.1:8000/agenda" class="navbar__link">Agenda</a>
                </li>
                <!-- Item 3 -->
                <li class="navbar__item">
                  <a href="http://127.0.0.1:8000/contact" class="navbar__link">Contact</a>
                </li>
                <!-- Item 4 -->
                <li class="navbar__item">
                  <a href="http://127.0.0.1:8000/info" class="navbar__link">Info</a>
              </li>
            </ul>
            <!-- Hamburger Menu -->
            <div class="navbar__hamburger">
              <span class="navbar__line"></span>
              <span class="navbar__line"></span>
              <span class="navbar__line"></span>
            </div>
          </nav>
        </div>
      </header>
      <main>
      </main>
      <footer>
      </footer>
    </body>
</html>
