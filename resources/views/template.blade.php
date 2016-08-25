<!DOCTYPE html>
<html>
    <head>
        <title>NR2017</title>
        <script src="https://use.typekit.net/rnd5fkg.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
        <!--<![endif]-->
        <link rel="stylesheet" href="{{asset('css/app.css')}}" />
        @yield('head')
    </head>
    <body>
        <div id="master_wrapper">
            @yield('body')
        </div>
    </body>
</html>
