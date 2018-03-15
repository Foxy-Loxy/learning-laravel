<div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link" href="/">Home</a>
          @if(Auth::check())
          <a class="nav-link" href="/posts/create">Create a post</a>
          @endif
          @if($user = Auth::user())
            <a class="nav-link ml-auto" href="/home">{{ Auth::user()->name }}</a>
          @else
            <a href="/login" class="nav-link ml-auto">Login</a>
          @endif
        </nav>
      </div>
    </div>

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">My Blog</h1>
        <p class="lead blog-description">My blog made with Bootstrap 4 and Laravel 5.6 .</p>
      </div>
    </div>