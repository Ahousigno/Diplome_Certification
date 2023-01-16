<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Certification</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/offcanvas-navbar/">




    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">


    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{asset('css/offcanvas-navbar.css')}}" rel="stylesheet">
</head>

<body class="bg-light">
    <nav class="ff fixed-top">
        <div class="topnav"></div>
        <div class="bottomnav">
            <nav class="navbar navbar-expand-lg  navbar-dark" aria-label="Main navigation" id="nav-bar">
                <div class="container-fluid container">
                    <a class="navbar-brand" href="{{route('client.accueil')}}"><img class="me-3"
                            src="{{asset('img/client/assets/logo.png')}}" alt="" width="58" height="58"></a>
                    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
                        aria-label="Toggle navigation">
                        <i class="fa fa-bars fa-2x" style="color: black" aria-hidden="true"></i>
                    </button>
                    <div class="navbar-collapse  justify-content-between offcanvas-collapse" id="navbarsExampleDefault">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link " href="{{route('client.accueil')}}" id="nav-link">
                                    <i class="fa fa-home" aria-hidden="true"></i> Accueil
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{route('client.form')}}" id="nav-link">
                                    <i class="fa fa-send" aria-hidden="true"></i> Certification
                                </a>
                            </li>

                        </ul>
                        <ul class="navbar-nav">
                            {{--@if(Auth::user()->getRoleNames()[0] == "1")--}}
                            @if(Auth::user())

                            <li class="nav-item">
                                <span class="dropdown">
                                    <a class="dropdown-toggle text-decoration-none" href="#" role="button"
                                        data-bs-toggle="dropdown" id="nav-link">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        {{Auth::user()['name']}}
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="{{route('admin.detail')}}"
                                                target="_blank">Tableau
                                                de bord</a>
                                        </li>
                                        <hr class="dropdown-divider">
                                        <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">Deconnexion
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </span>
                            </li>
                            {{--@elseif(Auth::user()->getRoleNames()[0] == "0")--}}

                            {{--@elseif(Auth::user()->getRoleNames()[0] == "Autre")
                            <li class="nav-item">
                                <span class="dropdown">
                                    <a class="dropdown-toggle text-decoration-none" href="#" role="button"
                                        data-bs-toggle="dropdown" id="nav-link">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        {{Auth::user()['name']}}
                            </a>
                            <ul class="dropdown-menu">
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Deconnexion
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                            </span>
                            </li>--}}
                            @else
                            <li class="nav-item" style="">
                                <a class="nav-link" href="{{route('login')}}" id="nav-link"><i class="fa fa-user"
                                        aria-hidden="true"></i> Se connecter</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('register')}}" id="nav-link">
                                    <i class="fa fa-user-plus" aria-hidden="true"></i> S'inscrire
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </nav>

    </div>

    </div>


    <main class="">
        @yield("content")
    </main>

    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <footer id="rs-footer" class="rs-footer">
            <div class="footer-top mb-0 pb-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="widget footer_widget">
                                <h5 class="footer-title">Administration</h5>
                                <ul>
                                    <li class="text-white"><i class="fa fa-phone mr-2"></i>(+225) 01-42-22-22-11
                                        /
                                        27-22-51-51-47</li>
                                    <li class="text-white"><i class="fa fa-envelope mr-2 mt-3"></i>courrier@uvci.edu.ci
                                    </li>
                                    <li class="text-white"><i class="fa fa-paste mr-2 mt-3"></i>28 BP 536
                                        Abidjan 28
                                        - Côte d'Ivoire</li>
                                    <li class="text-white"><i class="fa fa-map-marker mr-2 mt-3 "></i>Abidjan
                                        Cocody
                                        Deux-Plateaux, rue K4<br>(GPS: 5.357177; -4.001287)</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="widget footer_widget mb-3">
                                <h5 class="footer-title">Scolarité</h5>
                                <ul>
                                    <li class="text-white"><i class="fa fa-phone mr-2"></i>(+225) 01-53-66-66-06
                                        /
                                        01-72-51-30-32</li>
                                    <li class="text-white"><i class="fa fa-envelope mr-2 mt-3"></i>scolarite@uvci.edu.ci
                                    </li>
                                </ul>
                            </div>
                            <div class="widget mt-0">
                                <h5 class="footer-title">Pédagogie</h5>
                                <ul>
                                    <li class="text-white"><i class="fa fa-phone mr-2"></i>(+225) 01-42-05-95-70
                                    </li>
                                    <li class="text-white"><i class="fa fa-envelope mr-2 mt-3"></i>pedagogie@uvci.edu.ci
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="widget footer_widget">
                                <h5 class="footer-title">Liens Utiles</h5>
                                <ul>
                                    <li><a href="https://uvci.edu.ci/" target=_blank>Portail Uvci</a></li>
                                    <li><a href="http://scolarite.uvci.edu.ci/" target=_blank>Scolarité</a></li>
                                    <li><a href="http://campus.uvci.edu.ci/" target=_blank>Campus</a></li>
                                    <li><a href="https://biblio.uvci.edu.ci/" target=_blank>Bibliothèque
                                            Virtuelle</a></li>
                                    <li><a href="https://www.enseignement.gouv.ci/" target=_blank>Site du
                                            MESRS</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom pt-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-12 ">
                            <span class="text-white slogan-2">&copy; 2022 - Mon université avec moi, partout et
                                à
                                tout moment.</span>
                        </div>
                        <div class="col-lg-3 col-md-12 text-center ">
                            <ul class="list-inline d-flex justify-content-center">
                                <li><a href="https://www.facebook.com/uvciv/" target=_blank class="btn-link"><i
                                            class="fa fa-facebook mr-3"></i></a></li>
                                <li><a href="https://twitter.com/uvciv" target=_blank class="btn-link"><i
                                            class="fa fa-twitter mr-3 "></i></a></li>
                                <li><a href="https://www.linkedin.com/company/universit%C3%A9-virtuelle-de-c%C3%B4te-d-ivoire/"
                                        target=_blank class="btn-link"><i class="fa fa-linkedin mr-3"></i></a>
                                </li>
                                <li><a href="https://www.youtube.com/channel/UC6NIaSns4ATHrYtv0bJ0uow" target=_blank
                                        class="btn-link"><i class="fa fa-youtube mr-3"></i></a>
                                </li>
                                <li><a href="http://uvci.tv/" target=_blank class="btn-link"><i
                                            class="fa fa-television "></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    </main>


    <script src="{{asset ('js/bootstrap.bundle.min.js')}}"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <script src="{{asset ('js/offcanvas-navbar.js')}}"></script>
</body>

</html><?php

        use App\Http\Controllers\AccueilController;
        use App\Http\Controllers\FormController;
        use Illuminate\Support\Facades\Route;


        /*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/