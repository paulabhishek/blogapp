<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tech Blog</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{ asset('js/app.js') }}"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="{{ url('/')}}" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                    <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                    <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                </svg>
                <p style="font-family: 'Acme', sans-serif; font-size: 30px;">Tech Blog</p>
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 text-end">
                <li><a href="{{ url('/posts/create')}}" class="nav-link px-2 link-dark mb-0 h4 text-dark">Authors</a></li>
                <li><a href="{{ url('/users')}}" class="nav-link px-2 link-secondary mb-0 h4 text-dark">Admin</a></li>
            </ul>
            @if(Auth::guest())
                <div class="col-md-3 text-end">
                    <a href="{{ url('/login')}}" class="btn btn-outline-secondary me-2">Login</a>
                    <a href="{{ url('/register')}}" class="btn btn-secondary">Sign-up</a>
                </div>
            @else

            @endif

        </header>
        <div class="container-fluid text-center">
            <div class="row content">
                <div class="col-sm-10 text-left">
                    @yield('body')
                </div>
            </div>
        </div>
    </div>
        <footer class="bg-light navbar-static-bottom">
            <!-- Copyright -->
            <div class="text-center p-3 mb-0 h5" style="background-color: #6c757d">
                Made by
                <a class="text-dark" href="https://www.linkedin.com/in/paul-abhishek17/">Abhishek</a> and <a class="text-dark" href="https://www.linkedin.com/in/abdullahalidev/">Abdullah</a> © 2022 Copyright
            </div>
            <!-- Copyright -->
        </footer>

    </body>
</html>
