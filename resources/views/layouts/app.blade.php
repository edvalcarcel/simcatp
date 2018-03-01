<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=500, initial-scale=1, maximum-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

        {!! Html::style("/css/misestilos.css") !!}
    {!! Html::style("/bootstrap/css/bootstrap.css") !!}
    {!! Html::style("/bootstrap/css/bootstrap.css") !!}
    {!! Html::style("/jquery-ui/jquery-ui.css") !!}


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- JS file -->


<!-- CSS file -->
    {!! Html::script("/jquery-ui/jquery.js") !!}
    {!! Html::script("/jquery-ui/jquery-ui.js") !!}
    {!! Html::script("/js/moment.min.js") !!}
   



     


</head>
<style type="text/css" media="screen">
#circulo{
     background-image: url("/SimCaTP/public/img/fondo_horno.jpg");
    background-repeat: repeat;

}    
</style>
<body style="background: #2d2d2d">
    <div id="app"  style="background: #2d2d2d">
        <nav class="navbar navbar-default navbar-static-top" style="background: #2d2d2d">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a style="color: #fff; font-size: 24px" class="navbar-brand" href="{{url("Simulador/inicio/home")}}">
                        SIMCATP
                    </a>
                </div>

                <div  class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
<!--                           <li><a href="{{ route('register') }}">Register</a></li>-->
                        @else
                         <li   ><a href="{{ route('register') }}" style="color: #fff; font-size: 24px">Register</a></li>
                            <li class="dropdown">
                                <a style="color: #fff; font-size: 24px" href="#" class=" dropdown-toggle" data-toggle="dropdown" role="button"  aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a style="font-size: 30px;" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

       
    </div>
     @yield('content')
    
        <!-- Scripts -->
    {!! Html::script("/bootstrap/js/bootstrap.js") !!}
  {!! Html::script("/js/vue.js") !!}
     {!! Html::script("/js/vue-resource.js") !!}
       {!! Html::script("/js/three.min.js") !!}
         {!! Html::script("/js/OrbitControls.js") !!}
           {!! Html::script("/js/ColladaLoader.js") !!}
           
           {!! Html::script("/js/THREEx.WindowResize.js") !!}
           {!! Html::script("/js/THREEx.KeyboardState.js") !!}
               

     	


     
</body>




 @yield('script')
 
 @yield('vue')
</html>
