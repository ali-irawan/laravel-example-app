<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link {{ ($page=='home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ ($page=='about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ ($page=='contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
  </li>
</ul>