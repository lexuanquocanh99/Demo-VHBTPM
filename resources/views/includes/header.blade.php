<nav class="navbar border shadow navbar-expand-sm bg-white navbar-light">
  <a class="navbar-brand" target="_blank" href="https://www.hukcommerce.com/">
    <img src="https://www.hukcommerce.com/media/wysiwyg/unicase/logo/hukcommerce.png" alt="HukCommerce-logo" height="45px">
  </a>
  
  <ul class="navbar-nav">
    <li class="nav-item @if (Request::is('/')){{'active'}}@endif">
      <a class="nav-link" href="/">Dashboard</a>
    </li>
    <li class="nav-item @if (Request::is('customize')){{'active'}}@endif">
      <a class="nav-link" href="/customize">Customize</a>
    </li>
  </ul>
</nav>

