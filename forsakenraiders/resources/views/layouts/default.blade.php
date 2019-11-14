<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="shortcut icon" href="/favicon.ico" />
        <title>@yield('title', 'Forsaken Raiders')</title>
        {{-- CSS --}}
        @section('css')
            <link href="/css/app.css" rel="stylesheet">
        @show
        <script src="https://kit.fontawesome.com/bd3fb58fdd.js" crossorigin="anonymous"></script>
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body class="{{ (App::environment('local', 'staging') && config('app.debug')) ? 'media-tags' : '' }}">
        <header id="{{ (Route::getCurrentRoute()->uri() == '/') ? 'home' : '' }}">
            @include('includes.header')
            @if (View::hasSection('hero'))
                @yield('hero')
            @endif
        </header>
        <main>
            @if(!Request::is('/'))
            <section class="slab slab-white">
                <h1 class="text-center">@yield('title')</h1>
            </section>
            @endif
            @yield('content')
        </main>
        <footer>
            @include('includes.footer')
        </footer>
        {{-- JS --}}
        @section('js')

            <script src="/js/app.js"></script>
            <script src="/js/common.js"></script>
        @show
    </body>
</html>
