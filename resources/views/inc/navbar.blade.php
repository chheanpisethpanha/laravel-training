<nav class="navbar navbar-expand navbar-dark bg-dark">
  <div class="container">
      <a href="/" class="navbar-brand ">
        <span>{{config('app.name', 'Laravel-Panha')}}</span>
      </a>

      <ul class="navbar-nav">
        <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
        <li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="/posts" class="nav-link">Blog</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/posts/create">Create Post</a></li>
      </ul>
    </header>
</div>
</nav>