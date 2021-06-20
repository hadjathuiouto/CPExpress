<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        

        <title>{{$title}}</title>

        <!-- Fonts --> 
        <link href="/dist/css/bootstrap.css" type="text/css" rel="stylesheet">
        <!--<link href="/icons/WebFont/font-css/Linelcons.css" rel="stylesheet">-->
        <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">

    </head>

    <body>
    
   @include('partials/_nav')
   @yield('content')
    </body>

    <footer>
        @yield('footer')
    </footer>
  </html> 