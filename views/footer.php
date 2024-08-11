<footer class="footer d-flex flex-wrap flex-column justify-content-center align-content-center py-5 py-lg-2 flex-lg-row justify-content-lg-between">
  <nav class="navbar navbar-expand-lg" id="navigation">
    <div class="container-fluid justify-content-center">
      <div id="navbarNav w-100">
        <ul class="navbar-nav footbar">
          <li class="nav-item">
            <a class="text-center <?= actualUrl('/') ? 'nav-link active' : 'nav-link' ?>" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="text-center <?= actualUrl('/about') ? 'nav-link active' : 'nav-link' ?>" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="text-center <?= actualUrl('/help') ? 'nav-link active' : 'nav-link' ?>" href="/help">Seek Help</a>
          </li>
          <li class="nav-item">
            <a class="text-center <?= actualUrl('/contact') ? 'nav-link active' : 'nav-link' ?>" href="/contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="dev-signature d-flex justify-content-center align-items-center me-xl-4">
    <p class="dev-signing mb-0 text-center text-white">Developed by <a class="dev-link" href="https://github.com/MartinXCVI/" target="_blank">MartinXCVI</a></p>
  </div>
</footer>