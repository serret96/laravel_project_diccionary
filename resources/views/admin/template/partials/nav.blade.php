<nav class="navbar navbar-inverse" style="height: 54px">

    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header ">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/admin')}}">EbreDic</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav nav-pills" style="padding-right: 9ch">
                <li class="active"><a href="{{url('/admin/panel')}}">Paraules<span
                                class="sr-only">(current)</span></a>
                </li>
                <li class="active"><a href="{{url('/admin/api/insertar')}}">Insertar Paraula <span
                                class="sr-only">(current)</span></a>
                </li>
                <li class="active"><a href="{{url('/admin/api/Translate')}}">Traduccions<span
                                class="sr-only">(current)</span></a></li>
                <li class="active"><a href="{{url('/admin/api/suggest')}}">Propostes<span
                                class="sr-only">(current)</span></a></li>
                <li class="active"><a href="{{url('/admin/register')}}">Nou usuari<span
                                class="sr-only">(current)</span></a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right" style="padding-right: 1ch">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                        </a>
                        {{--<ul class="dropdown-menu" role="menu">--}}
                        {{--<li><a href="{{url('admin/register)}}"><i class="fa fa-btn fa-sign-out"></i>Nou usuari</a></li>--}}
                        {{--</ul>--}}
                    </li>
                @endif
            </ul>

        </div><!-- /.navbar-collapse -->



    </div>
    {{--Declaracio de scripts--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"
            integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>


</nav>

