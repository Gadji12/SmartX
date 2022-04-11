
<html class="chrome">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Авторизация | Smart X Invest</title>
    <!-- Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('index/img/favicon.png')}}">
    <meta name="description" content="Авторизация | MeeMoney">
    <meta name="author" content="Ssapphire inc.">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('index/css/blocks/main.css')}}">
    <link rel="stylesheet" href="{{asset('index/css/blocks/authentication.css')}}">
    <link rel="stylesheet" href="{{asset('index/css/blocks/all-themes.css')}}">
    <link rel="stylesheet" href="{{asset('index/css/login.css')}}">

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- BOOTSTRAP | Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style type="text/css">
        *:focus{
            outline: none !important;
            box-shadow: none !important;
        }
        @keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-moz-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-webkit-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}#zCK51DW-1589738274268{outline:none!important;visibility:visible!important;resize:none!important;box-shadow:none!important;overflow:visible!important;background:none!important;opacity:1!important;filter:alpha(opacity=100)!important;-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity1)!important;-moz-opacity:1!important;-khtml-opacity:1!important;top:auto!important;right:10px!important;bottom:0px!important;left:auto!important;position:fixed!important;border:0!important;min-height:0!important;min-width:0!important;max-height:none!important;max-width:none!important;padding:0!important;margin:0!important;-moz-transition-property:none!important;-webkit-transition-property:none!important;-o-transition-property:none!important;transition-property:none!important;transform:none!important;-webkit-transform:none!important;-ms-transform:none!important;width:auto!important;height:auto!important;display:none!important;z-index:2000000000!important;background-color:transparent!important;cursor:auto!important;float:none!important;border-radius:unset!important;pointer-events:auto!important}#Gj3AQ2v-1589738274270.open{animation : tawkMaxOpen .25s ease!important;}</style></head>

<body class="theme-red ls-closed op0">
<div class="mask" style="background: url('index/img/regbg.jpg') center -100px;"></div>

<h1 class="head-h1">Smart<span>X</span>Invest</h1>

<form method="POST" action="{{route('login')}}">
    @csrf
    @method('POST')
    <h2>Вход в панель</h2>

    <div class="form__group" style="margin-top: 15px;">
        <label for="login">Логин(Email)</label>
        <input type="text" id="login" name="email" value="{{old('login')}}" class="@error('login') is-invalid @enderror">

        @error('login')
        <span class="invalid-feedback" role="alert">
            <p>{{ $message }}</p>
        </span>
        @enderror
    </div>

    <div class="form__group">
        <label for="password">Пароль</label>
        <input type="password" id="password" name="password" class="@error('password') is-invalid @enderror">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <p>{{ $message }}</p>
        </span>
        @enderror
    </div>

    <div class="form__group">
        <input type="submit" value="Авторизация" name="auth">
    </div>

    <div class="links">
        <div class="link"><a href="">Забыли пароль?</a></div>
        <div class="link"><a href="{{route('register')}}">Регистрация</a></div>
    </div>
</form>

<div class="content">
    <h3>Добро пожаловать в Smart <span style="color:#73bdab;margin: 0px 2px;text-shadow: 0px 0px 7px #73bdab;">X</span>-Investment</h3>
    <p>Для начала необходимо авторизоваться. <br> Пройдите авторизацию используя данные, которые вводили при регистрации.</p>
    <a href="">Связаться с нами</a><a href="">О нас</a>
</div>

<div class="footer">
    <img src="{{asset('index/img/bottomcover.png')}}" alt="">
    <p>Разработка сайта <a href="">MirFox</a></p>
</div>

<style>
    body{
        font-family: PT Sans;
    }
    @import url('https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap');
</style>

<!-- Jquery Core Js -->
<script async="" src="https://embed.tawk.to/59f5afbbbb0c3f433d4c5c4c/default" charset="UTF-8" crossorigin="*"></script>
<script src="{{asset('index/js/bundle/libscript.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{asset('index/js/bundle/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->

<script src="{{asset('index/js/bundle/mainscript.bundle.js')}}"></script><!-- Custom Js -->

