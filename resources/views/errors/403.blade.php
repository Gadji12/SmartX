@extends('errors::minimal')
@section('title', __('Forbidden'))

    <!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Недостаточно прав</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/style.min.css')}}">
</head>

<body class="theme-blush">

<div class="authentication">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12 p-t-70 ">
                <form class="card auth_form">
                    <div class="header">
                        <img src="{{asset('index/img/black_flogo.svg')}}" width="200" alt="">
                        <h5>Ошибка 403</h5>
                        <span class="text-danger ">У вас недостаточно прав для просмотра этой страницы!</span>
                    </div>
                    <div class="body">
                        <a href="{{route('homepage')}}" class="btn btn-primary btn-block waves-effect waves-light text-white">НА СТРАНИЦУ АВТОРИЗАЦИИ</a>
                        <div class="signin_with mt-3">
                            <a href="javascript:void(0);" class="link">Нужна помощь?</a>
                        </div>
                    </div>
                </form>
                <div class="copyright text-center">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>,
                    <span>Designed by <a href="https://thememakker.com/" target="_blank">Х!АЖИ</a></span>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <img src="{{asset('admin/images/maintanance.svg')}}" alt="404" />
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
    <script src="{{asset('admin/bundles/libscripts.bundle.js')}}"></script>
    <script src="{{asset('admin/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
</body>
</html>

{{--@section('code', '403')--}}
{{--@section('message', __($exception->getMessage() ?: 'Forbidden'))--}}
