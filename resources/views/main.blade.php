<!DOCTYPE html>
<html>
    
@include('partials/_head')

<body>

    @include('partials/_nav')

    <main role="main" class="container">
        
        @include('partials/_messages')
        
        @yield('content')
    
    </main>
    
    @include('partials/_footer')
    @yield('scripts')
    
</body>

</html>