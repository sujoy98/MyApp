<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">{{config('app/name','MyApp')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav navbar-nav">
        <li class="nav-item "><a class="nav-link" href="/login">Login or Signup</a></li>
        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="/posts">Posts</a></li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item"><a class="nav-link" href="/posts/create">Create Post</a></li>
    </ul>
  </div>
</nav>
