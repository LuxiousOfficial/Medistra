<!-- Navigasi -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success fs-4 sticky-top" style="font-family: calibri">
  <div class="container-fluid">
  <div class="search">
      <form action="/search" method="GET" class="d-flex mt-2" role="search">
        <input class="form-control me-2" type="search" id="search" name="search" placeholder="Cari sesuatu di sini..." aria-label="Search" autocomplete="off" style="width: 20rem">
        <button class="btn btn-outline-white bg-white fw-bold text-success fs-5 border-3" type="submit">Search</button>
      </form>
  </div>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse mx-5" id="navbarNavDropdown">
      <ul class="navbar-nav text-capitalize ms-auto mx-1" style="font-weight: bold;">
      <li class="nav-item">
          <x-navlink href="/" :active="request()->is('/')">Home</x-navlink>
      </li>
      <li class="nav-item">
          <x-navlink href="/doctors" :active="request()->is('doctors*')">Doctors</x-navlink>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Services
          </a>
          <ul class="dropdown-menu fs-5" aria-labelledby="navbarDropdownMenuLink">
          <li><x-links href="/oncology" :active="request()->is('oncology')">Oncology</x-links></li>
          <li><x-links href="/cardiology" :active="request()->is('cardiology')">Cardiology</x-links></li>
          <li><x-links href="#" :active="request()->is('astra/service*')">Orthopedic</x-links></li>
          <li><x-links href="#" :active="request()->is('astra/service*')">Tropical & Infectious Disease</x-links></li>
          <li><x-links href="#" :active="request()->is('astra/service*')">Gastroentero hepatology</x-links></li>
          </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Info
        </a>
        <ul class="dropdown-menu fs-5" aria-labelledby="navbarDropdownMenuLink">
        <li><x-links href="/news" :active="request()->is('news')">News</x-links></li>
        <li><x-links href="/articles" :active="request()->is('articles')">Articles</x-links></li>
        </ul>
    </li>
      <li class="nav-item">
          <x-navlink href="/about" :active="request()->is('about')">About Us</x-navlink>
      </li>
      <li class="nav-item">
          <x-navlink href="/careers" :active="request()->is('careers')">Careers</x-navlink>
      </li>
      @auth
      <li class="nav-item">
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="nav-link">Logout</button>
        </form>
      </li>
      @else
      
      @endauth
    </ul>
  </div>
  </div>
</nav>
<!-- End Navigasi -->