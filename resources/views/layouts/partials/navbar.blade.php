<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-light text-secondary fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/"><img class="logo" src="{{asset('/layouts/img/LOGO_SH_FIX.png')}}" /></a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="aboutUs"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            About Us
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="/vision-mission"
                >Vision & Mission</a
              >
            </li>
            <li>
              <a class="dropdown-item" href="/meet-the-team">Meet The Team</a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="events"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            Article
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="/article">Article</a>
            </li>
            <li><a class="dropdown-item" href="#">#</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/events">Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/suara-wanita">#SuaraWanita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/get-involved">Get Involved</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- END NAVBAR -->