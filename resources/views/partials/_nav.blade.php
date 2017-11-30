<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Laravel Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto" id="left-nav">
            <li class="nav-item {{ Request::is('/') ? 'active':'' }}">
                <a class="nav-link" href="/">Blog <span class="sr-only">{{ Request::is('/') ? '(current)':'' }}</span></a>
            </li>
            <li class="nav-item {{ Request::is('about') ? 'active':'' }}">
                <a class="nav-link" href="/about">About <span class="sr-only">{{ Request::is('/about') ? '(current)':'' }}</span></a>
            </li>
            <li class="nav-item {{ Request::is('contact') ? 'active':'' }}">
                <a class="nav-link" href="/contact">Contact <span class="sr-only">{{ Request::is('/contact') ? '(current)':'' }}</span></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto" id="right-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    My Account
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </div>
</nav>