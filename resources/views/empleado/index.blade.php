<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <title>Empleados-Dashboard</title>


    <!-- Styles -->
    <style> *{ margin: 0; padding: 0; box-sizing: border-box; } :root { font-family: 'Varela Round', sans-serif; --background: linear-gradient(142deg, rgba(65,255,144,1) 0%, rgba(35,152,153,1) 50%, rgba(2,79,84,1) 97%); --navbar-width: 256px; --navbar-width-min: 80px; --navbar-dark-primary: #18283b; --navbar-dark-secondary: #2c3e50; --navbar-light-primary:#94dce9; --navbar-light-secondary: #8392a5; --background2: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%); --background1:linear-gradient(45deg, rgba(255,65,177,1) 0%, rgba(40,180,181,1) 50%, rgba(2,79,84,1) 100%); --backgroundglassdark:linear-gradient(45deg, rgba(40,50,80,0.7), rgba(40,50,80,0.5)); --backgroundglass:linear-gradient(45deg, rgba(255,255,255,0.7), rgba(255,255,255,0.5)); --color-claro:#fff; } body { margin: 0; padding: 0; } main{ margin: 0; padding: 0; min-width: 100vh; min-height: 100vh; display: flex; flex-direction:row; background:var(--background2); } .container1{ position: absolute; right: 1vw; top: 1vw; height: calc(100% - 2vw); width: calc(85% - 2vw); border-radius: 16px; } #nav-bar { position: absolute; left: 1vw; top: 1vw; margin-right: 0vw; height: calc(100% - 2vw); background: var(--backgroundglassdark); border-radius: 16px; display: flex; flex-direction: column; color: var(--navbar-light-primary); backdrop-filter:blur(2rem); overflow: hidden; user-select: none; } #nav-bar hr { margin: 0; position: relative; left: 16px; width: calc(100% - 32px); border: none; border-top: solid 1px var(--navbar-dark-secondary); } #nav-bar a { color: inherit; text-decoration: inherit; } #nav-bar input[type="checkbox"] { display: none; } #nav-header { position: relative; width:100%; min-height: 80px; background: var(--navbar-dark-secondary); border-radius: 16px; z-index: 2; display: flex; align-items: center; transition: width .2s; justify-content: center; flex-direction: column; padding-bottom: 1rem; } #nav-header hr { position: absolute; bottom: 0; } #nav-title { font-size: 1.5rem; transition: opacity 1s; font-weight: bold; } #nav-content { margin: -16px 0; padding: 16px 0; position: relative; flex: 1; width: var(--navbar-width); background: var(--backgroundglassdark); box-shadow: 0 0 0 16px var(--backgroundglassdark); display: flex; flex-direction: column; backdrop-filter:blur(2rem); overflow-x: hidden; transition: width .2s; } #nav-content-highlight { position: absolute; left: 10px; top: -70px; width: calc(100% - 16px); height: 54px; background: var(--background2); background-attachment: fixed; border-radius: 16px  16px; transition: top .2s; } #nav-content-highlight:before, #nav-content-highlight:after { content: ''; position: absolute; right: 0; bottom: 100%; width: 32px; height: 32px; border-radius: 50%; box-shadow: 16px 16px var(--background); } #nav-content-highlight:after { top: 100%; box-shadow: 16px -16px var(--background); } .nav-button { position: relative; margin-left: 16px; height: 54px; display: flex; align-items: center; flex-direction: row; align-content: space-between; color: var(--navbar-light-secondary); direction: ltr; cursor: pointer; z-index: 1; transition: color .2s; } .nav-button span { transition: opacity 1s; } .nav-button .fas { transition: min-width .2s; } .nav-button:nth-of-type(1):hover { color: var(--color-claro); font-weight: 500; } .nav-button:nth-of-type(1):hover ~ #nav-content-highlight { top: 16px; } .nav-button:nth-of-type(2):hover { color: var(--color-claro); font-weight: 500; } .nav-button:nth-of-type(2):hover ~ #nav-content-highlight { top: 70px; } .nav-button:nth-of-type(3):hover { color: var(--color-claro); font-weight: 500; } .nav-button:nth-of-type(3):hover ~ #nav-content-highlight { top: 124px; } .nav-button:nth-of-type(8):hover ~ #nav-content-highlight { top: 394px; } #nav-bar .fas { min-width: 3rem; text-align: center; } #nav-footer { position: relative; width: var(--navbar-width); height: 5rem; background: var(--navbar-dark-secondary); border-radius: 16px; display: flex; flex-direction: column; z-index: 2; transition: width .2s, height .2s; } #nav-footer-heading { position: relative; width: 100%; height: 5rem; display: flex; align-items: center; } #nav-footer-avatar { position: relative; margin: 11px 0 11px 16px; left: 0; border-radius: 50%; overflow: hidden; transform: translate(0); transition: .2s; } #nav-footer-avatar img { width:100%; height: auto; } #nav-footer-titlebox { position: relative; margin-left: 20px; width: 90%; display: flex; flex-direction: column; transition: opacity 1s; font-size: 1.5rem; font-weight: bold; } #nav-footer-subtitle { color: var(--navbar-light-secondary); font-size: .8rem; } </style> <style> .container1{ background:var(--backgroundglass); backdrop-filter:blur(2rem); display: flex; justify-content: center; align-items: center; } #nav-link-icon { position: relative; margin: 11px 16px 11px 16px; width: 35px; height: 35px; overflow: hidden; transform: translate(0); transition: .2s; } #nav-link-icon img { width:100%; height:100%; } </style>
    <!-- <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
</head>

<body>

    <main>

        <div class="container">
            <!-- //boton con ruta -->

            <div id="nav-bar"><input id="nav-toggle" type="checkbox" />
                <div id="nav-header"><img src="https://img.icons8.com/ios/80/94dce9/home-office--v1.png" /><a href="{{  url('empleado/hola')  }}" id="nav-title">Sistema Empleados</a></label>
                    <hr />
                </div>
                <div id="nav-content">

                    <div class="nav-button">
                        <div id="nav-link-icon"><img src="https://img.icons8.com/ios-glyphs/60/f76daa/home.png" /></div><a href="{{  url('empleado/hola')  }}">Inicio</a>
                    </div>

                    <div class="nav-button">
                        <div id="nav-link-icon"><img src="https://img.icons8.com/ios-glyphs/60/f76daa/user-group-man-woman.png" /></div><a href="{{  url('empleado/listar')  }}">Tus Empleados</a>
                    </div>
                    <div class="nav-button">
                        <div id="nav-link-icon"><img src="https://img.icons8.com/ios-glyphs/60/f76daa/add-user-male.png" /></div><a href="{{  url('empleado/create')  }}">Nuevo Empleado</a>
                    </div>

                    <hr />







                    <div id="nav-content-highlight"></div>
                </div>
                <div id="nav-footer">
                    <div id="nav-footer-heading">
                        <div id="nav-footer-avatar"><img src="https://img.icons8.com/ios-glyphs/90/94e9e1/user-male-circle.png" /></div>




                        <div id="nav-footer-titlebox">
                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else

                            <h4 id="nav-footer-title navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }}</h4>

                            <a id="nav-footer-subtitle" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            @endguest

                        </div>

                        <label for="nav-footer-toggle"><i class="fas fa-caret-up"></i></label>
                    </div>





                </div>
            </div>
        </div>

        <div class="container1">

            <h1>
                @if(Session::has('mensaje'))
                <center><img src="https://img.icons8.com/ios/100/fa314a/accept-database.png" /></center><br>
                {{ Session::get('mensaje') }}
                @endif
            </h1>
            @yield('content')
            <!-- @yield('hola') -->

        </div>
        <!-- //mensajes -->


    </main>

</body>
<footer>

</footer>
