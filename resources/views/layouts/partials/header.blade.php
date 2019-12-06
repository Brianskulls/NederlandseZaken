<!-- Navigation bar in the header -->
<header>
  <div class="navbar">
    <nav>
      <a href="{{ route('home') }}">
        <img src="img/logo.png" alt="Nederlandse Zaken Logo">
      </a>
      <!-- List with navigation items -->
      <ul class="navbar__list">
        <!-- Item 1 -->
        <li class="navbar__item">
          <a href="{{ route('home') }}" class="navbar__link @if(Request::routeIs('home'))navbar__active @endif">Home</a>
        </li>
        <!-- Item 2 -->
        <li class="navbar__item">
          <a href="{{ route('agenda') }}" class="navbar__link @if(Request::routeIs('agenda'))navbar__active @endif">Agenda</a>
        </li>
        <!-- Item 3 -->
        <li class="navbar__item">
          <a href="{{ route('contact') }}" class="navbar__link @if(Request::routeIs('contact'))navbar__active @endif">Contact</a>
        </li>
        <!-- Item 4 -->
        <li class="navbar__item">
          <a href="{{ route('info') }}" class="navbar__link @if(Request::routeIs('info'))navbar__active @endif">Info</a>
        </li>
        <!-- Item 5 -->
        <li class="navbar__item">
          <a href="#" class="navbar__link">Login</a>
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
