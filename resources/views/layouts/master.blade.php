<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Foobooks' --}}
        @yield('title','P4 - My First Ledger Checkbook App')
    </title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta charset='utf-8'>
    <link href="/css/master.css" type='text/css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic|Arvo:700,400,400italic' rel='stylesheet' type='text/css'>
    <link href="/assets/prism.css" media="all" rel="stylesheet" type="text/css">
    <link href="/dist/lity.css" rel="stylesheet"/>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-34232738-1', 'auto');
        ga('set', 'anonymizeIp', true);
        ga('send', 'pageview');
    </script>
    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <div class='topLinks'>
        <ul class='topLinks'>
            @if(Auth::check())
                <li class='topLinks'>Welcome {{ $user->name }}!</li>
                <li class='topLinks'><a href='/' class='topLinks'>Home</a></li>
                <li class='topLinks'><a href='/info/{{ $user->id }}' class='topLinks'>Edit Personal Info</a></li>
                <li class='topLinks'><a href='/addresses/edit' class='topLinks'>My Address</a></li>
                <li class='topLinks'><a href='/accounts' class='topLinks'>My Accounts</a></li>
                <li class='topLinks'><a href='/logout' class='topLinks'>Log out</a></li>
            @else
                <li class='topLinks'><a href='/' class='topLinks'>Home</a></li>
                <li class='topLinks'><a href='/register' class='topLinks'>Register</a></li>
            @endif
        </ul>
    </div>


    @if(\Session::has('flash_message'))
        <div class="flash">
            <div class='flash_message'>
                {{ \Session::get('flash_message') }}
            </div>
        </div>
    @endif


    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>

    </footer>



    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')
    <script src="/vendor/jquery.js"></script>
    <script src="/dist/lity.js"></script>

    <script src="/assets/prism.js"></script>
</body>
</html>
