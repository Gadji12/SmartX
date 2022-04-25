<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Панель управления | Smart X-Investment</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('index/img/favicon.svg')}}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7868e52ddd.js" crossorigin="anonymous"></script>


    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('admin/plugins/charts-c3/plugin.css')}}"/>

    <link rel="stylesheet" href="{{asset('admin/plugins/morrisjs/morris.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/css/style.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin/plugins/dropify/css/dropify.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin/plugins/morrisjs/morris.css')}}" />
    <!-- Colorpicker Css -->
    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}" />
    <!-- Multi Select Css -->
    <link rel="stylesheet" href="{{asset('admin/plugins/multi-select/css/multi-select.css')}}">
    <!-- Bootstrap Spinner Css -->
    <link rel="stylesheet" href="{{asset('admin/plugins/jquery-spinner/css/bootstrap-spinner.css')}}">
    <!-- Bootstrap Tagsinput Css -->
    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
    <!-- Bootstrap Select Css -->
    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap-select/css/bootstrap-select.css')}}" />
    <!-- noUISlider Css -->
    <link rel="stylesheet" href="{{asset('admin/plugins/nouislider/nouislider.min.css')}}" />
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('admin/plugins/select2/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}">
{{--    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>--}}
    <link href="{{asset('admin/plugins/select2/select2.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/plugins/bootstrap/css/bootstrap-grid.css')}}" rel="stylesheet" />
{{--    <link href="{{asset('admin/plugins/summernote/summernote-bs3.css')}}" rel="stylesheet" />--}}
{{--    <link href="{{asset('index/css/custom.css')}}" rel="stylesheet" />--}}

</head>
<style>

</style>
<body class="theme-blush">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{asset('admin/images/loader.svg')}}" width="48" height="48" alt="Aero"></div>
        <strong>Загрузка страницы...</strong>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Right Icon menu Sidebar -->
<div class="navbar-right">
    <ul class="navbar-nav">
        <li class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle" title="App" data-toggle="dropdown" role="button"><i class="zmdi zmdi-apps"></i></a>
            <ul class="dropdown-menu slideUp2">
                <li class="header">Быстрая навигация</li>
                <li class="body">
                    <ul class="menu app_sortcut list-unstyled">
                        <li>
                            <a href="{{route('user-dashboard')}}">
                                <div class="icon-circle mb-2 bg-pink"><i class="zmdi zmdi-home"></i></div>
                                <p class="mb-0">Главная</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('user-profile')}}">
                                <div class="icon-circle mb-2 bg-blue"><i class="zmdi zmdi-account"></i></div>
                                <p class="mb-0">Мой профиль</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('projects.index')}}">
                                <div class="icon-circle mb-2 bg-amber"><i class="zmdi zmdi-shopping-cart"></i></div>
                                <p class="mb-0">Проекты</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('user-portfolio')}}">
                                <div class="icon-circle mb-2 bg-purple"><i class="zmdi zmdi-case"></i></div>
                                <p class="mb-0">Инвестиции</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('user-referals')}}">
                                <div class="icon-circle mb-2 bg-green"><i class="zmdi zmdi-accounts"></i></div>
                                <p class="mb-0">Рефералы</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('user-financial')}}">
                                <div class="icon-circle mb-2 bg-purple"><i class="zmdi zmdi-balance-wallet"></i></div>
                                <p class="mb-0">Финансы</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle" title="Notifications" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>
                <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
            </a>
            <ul class="dropdown-menu slideUp2">
                <li class="header">Уведомления</li>
                <li class="body">
                    <ul class="menu list-unstyled">
                        <li>
                            <a href="javascript:void(0);">
                                <div class="icon-circle bg-blue"><i class="zmdi zmdi-account"></i></div>
                                <div class="menu-info">
                                    <h4>Это пример уведомления</h4>
                                    <p><i class="zmdi zmdi-time"></i> 14 минут назад </p>
                                </div>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="footer"> <a href="javascript:void(0);">Все уведомления</a> </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-balance-wallet"></i></a>

            <ul class="dropdown-menu slideUp2">
                <li class="header">Ваш баланс <small class="float-right">
                        <a href="{{route('user-financial')}}">Подробнее</a></small>
                </li>

                <li class="body">
                    <ul class="menu tasks list-unstyled">
                        <li>
                            <div class="progress-container progress-primary">
                                <span class="progress-badge">Готовы к выводу</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                        <span class="progress-value">86%</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="progress-container progress-primary">
                                <span class="progress-badge">Холд</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                        <span class="progress-value">45%</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="javascript:void(0);" class="js-right-sidebar" title="Setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        <li><a href="sign-in.html" class="mega-menu" title="Sign Out"><i class="zmdi zmdi-power"></i></a></li>
    </ul>
</div>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="{{route('user-dashboard')}}"><img src="{{asset('index/img/black_flogo.svg')}}" width="150" alt="Meemoney"></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile.html"><img src="{{asset('admin/images/profile_av.jpg')}}" alt="user"></a>
                    <div class="detail">
                        <h4>{{Auth::user()->name}}</h4>
                        <small>Пользователь</small>
                    </div>
                </div>

            <li><a href="{{route('user-profile')}}"><i class="zmdi zmdi-account"></i><span>Мой профиль</span></a></li>
            <li><a href="{{route('user-dashboard')}}"><i class="zmdi zmdi-home"></i><span>Главная</span></a></li>
            <li> <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block"><i class="zmdi zmdi-shopping-cart"></i><span>Проекты</span></a>
                <ul class="ml-menu">
                    <li><a href="{{route('offers.index')}}" class=" waves-effect waves-block">Список проектов</a></li>
                    <li><a href="{{route('user-project')}}" class=" waves-effect waves-block">Мои проекты</a></li>
                </ul>
            </li>
            <li><a href="{{route('user-portfolio')}}"><i class="zmdi zmdi-file"></i><span>Мои инвестиции</span></a></li>
            <li><a href="{{route('user-referals')}}"><i class="zmdi zmdi-accounts"></i><span>Рефералы</span></a></li>
            <li><a href="{{route('user-financial')}}"><i class="zmdi zmdi-balance-wallet"></i><span>Финансы</span></a></li>
            <li><a href="{{route('user-affiliate')}}"><i class="zmdi zmdi-hc-fw"></i><span>Партнерская программа</span></a></li>
            <hr>
            <li><a href="javascript:void(0);" class="menu-toggle waves-effect waves-block"><i class="zmdi zmdi-hc-fw"></i><span>Центр поддержки</span></a>
                <ul class="ml-menu">
                    <li><a class=" waves-effect waves-block">Как работает краудинвестинг</a></li>
                    <li><a class=" waves-effect waves-block">Почему инвестиции в бизнес считаются высокорисковыми</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle waves-effect waves-block"><i class="zmdi zmdi-hc-fw"></i><span>Ответственность</span></a>
                <ul class="ml-menu">
                    <li><a class=" waves-effect waves-block">Персональные данные</a></li>
                    <li><a class=" waves-effect waves-block">Положение об ответственности</a></li>
                    <li><a class=" waves-effect waves-block">Пользовательское соглашения</a></li>
                </ul>
            </li>
            <li><a><i class="zmdi zmdi-hc-fw"></i></i><span>Новости</span></a></li>
            <li><a><i class="zmdi zmdi-hc-fw"></i><span>О Нас</span></a></li>
            <li><a><i class="zmdi zmdi-hc-fw"></i></i><span>Контакты</span></a></li>
            <li><a><i class="zmdi zmdi-hc-fw"></i><span>Как это работает</span></a></li>
            <a>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger ml-3"><i class="zmdi zmdi-power"></i><span> Выход</span></button>
                </form>
            </a>

        </ul>
    </div>
</aside>

<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs sm">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat"><i class="zmdi zmdi-comments"></i></a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="setting">
            <div class="slim_scroll">
                <div class="card">
                    <h6>Выбор темы</h6>
                    <div class="light_dark">
                        <div class="radio">
                            <input type="radio" name="radio1" id="lighttheme" value="light" checked="">
                            <label for="lighttheme">Светлая тема</label>
                        </div>
                        <div class="radio mb-0">
                            <input type="radio" name="radio1" id="darktheme" value="dark">
                            <label for="darktheme">Темная тема</label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h6>Цветовые схемы</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple"><div class="purple"></div></li>
                        <li data-theme="blue"><div class="blue"></div></li>
                        <li data-theme="cyan"><div class="cyan"></div></li>
                        <li data-theme="green"><div class="green"></div></li>
                        <li data-theme="orange"><div class="orange"></div></li>
                        <li data-theme="blush" class="active"><div class="blush"></div></li>
                    </ul>
                </div>
                <div class="card">
                    <h6>Визуальные настройки</h6>
                    <ul class="setting-list list-unstyled">
                        <li>
                            <div class="checkbox rtl_support">
                                <input id="checkbox1" type="checkbox" value="rtl_view">
                                <label for="checkbox1">Развернутая версия</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox ms_bar">
                                <input id="checkbox2" type="checkbox" value="mini_active">
                                <label for="checkbox2">Мини сайдбар</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox3" type="checkbox" checked="">
                                <label for="checkbox3">Звук уведомления</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-pane right_chat" id="chat">
            <div class="slim_scroll">
                <div class="card">
                    <ul class="list-unstyled">
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Sophia <small class="float-right">11:00AM</small></span>
                                        <span class="message">There are many variations of passages of Lorem Ipsum available</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Grayson <small class="float-right">11:30AM</small></span>
                                        <span class="message">All the Lorem Ipsum generators on the</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Isabella <small class="float-right">11:31AM</small></span>
                                        <span class="message">Contrary to popular belief, Lorem Ipsum</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="me">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">John <small class="float-right">05:00PM</small></span>
                                        <span class="message">It is a long established fact that a reader</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object" src="assets/images/xs/avatar3.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Alexander <small class="float-right">06:08PM</small></span>
                                        <span class="message">Richard McClintock, a Latin professor</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>

<!-- Main Content -->

<section class="content">
    @yield('user-content')
</section>
<script src="{{asset('admin/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="{{asset('admin/bundles/vendorscripts.bundle.js')}}"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="{{asset('admin/bundles/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{asset('admin/bundles/sparkline.bundle.js')}}"></script> <!-- Sparkline Plugin Js -->
<script src="{{asset('admin/bundles/c3.bundle.js')}}"></script>

<script src="{{asset('admin/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('admin/js/pages/index.js')}}"></script>

<script src="{{asset('admin/plugins/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('admin/js/pages/forms/dropify.js')}}"></script>

<script src="{{asset('admin/plugins/jquery-inputmask/jquery.inputmask.bundle.js')}}"></script> <!-- Input Mask Plugin Js -->
<script src="{{asset('admin/plugins/multi-select/js/jquery.multi-select.js')}}"></script> <!-- Multi Select Plugin Js -->
<script src="{{asset('admin/plugins/jquery-spinner/js/jquery.spinner.js')}}"></script> <!-- Jquery Spinner Plugin Js -->
<script src="{{asset('admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script> <!-- Bootstrap Tags Input Plugin Js -->
<script src="{{asset('admin/plugins/nouislider/nouislider.js')}}"></script> <!-- noUISlider Plugin Js -->

<script src="{{asset('admin/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-datatable/buttons/buttons.flash.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>

<script src="{{asset('admin/plugins/select2/select2.min.js')}}"></script> <!-- Select2 Js -->
{{--<script src="{{asset('admin/js/pages/forms/advanced-form-elements.js')}}"></script>--}}
<script src="{{asset('admin/js/pages/tables/jquery-datatable.js')}}"></script>

</body>
</html>
