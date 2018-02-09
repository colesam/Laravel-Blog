<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Laravel Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto" id="left-nav">
            <li class="nav-item {{ Request::is('/') ? 'active':'' }}">
                <a class="nav-link" href="/">Home <span class="sr-only">{{ Request::is('/') ? '(current)':'' }}</span></a>
            </li>
            <li class="nav-item {{ Request::is('blog') ? 'active':'' }}">
                <a class="nav-link" href="/blog">Blog <span class="sr-only">{{ Request::is('blog') ? '(current)':'' }}</span></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto" id="right-nav">
            @if(Auth::check())
            
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Hello {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('posts.index') }}">Posts</a>
                        <a class="dropdown-item" href="{{ route('categories.index') }}">Categories</a>
                        <a class="dropdown-item" href="{{ route('tags.index') }}">Tags</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('auth.logout') }}">Logout</a>
                    </div>
                </li>
            
            @else
            
                <a href="{{ route('auth.form') }}" class="nav-link">Login</a>
            
            @endif
        </ul>
    </div>
</nav>