<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','por defecto')</title>
</head>
<body>
<nav>
<ul>
    <li><a href="/">@lang('Home')</a></li>
    <li><a href="/about">@lang('About')</a></li>
    <li><a href="/portfolio">@lang('Portfolio')</a></li>
    <li><a href="/contact">@lang('Contact')</a></li>
    <li><a href="{{url('idioma/es')}}">                                    
           
            Español
        </a>
    </li>
    <li>
        <a href="{{url('idioma/en')}}">  
          
            English
        </a>
    </li>
</ul>
</nav>
   @yield('content')
</body>
</html>