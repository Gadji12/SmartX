@extends('layouts.app')
@section('content')
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Главная</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> MeeMoney</a></li>
                        <li class="breadcrumb-item active">Главная</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card widget_2 big_icon traffic">
                        <div class="body">
                            <h6>Всего пользователей (админы не учитываются)</h6>
                            <h2>12</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card widget_2 big_icon sales">
                        <div class="body">
                            <h6>Всего админов</h6>
                            <h2>1</h2>
                        </div>
                    </div>
                </div>


{{--                <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="card widget_2 big_icon email">--}}
{{--                        <div class="body">--}}
{{--                            <h6>Email</h6>--}}
{{--                            <h2>39 <small class="info">of 100</small></h2>--}}
{{--                            <small>Total Registered email</small>--}}
{{--                            <div class="progress">--}}
{{--                                <div class="progress-bar l-purple" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100" style="width: 39%;"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="card widget_2 big_icon domains">--}}
{{--                        <div class="body">--}}
{{--                            <h6>Domains</h6>--}}
{{--                            <h2>8 <small class="info">of 10</small></h2>--}}
{{--                            <small>Total Registered Domain</small>--}}
{{--                            <div class="progress">--}}
{{--                                <div class="progress-bar l-green" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong><i class="zmdi zmdi-chart"></i> Движение</strong> Бюджета (Рассчёт количества на неделю)</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Delete</a></li>
                                        <li><a href="javascript:void(0);">Report</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body mb-2">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="state_w1 mb-1 mt-1">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5>11</h5>
                                                <span><i class="zmdi zmdi-alert-circle-o"></i> Людей, инвестировавщих  в проекты</span>
                                            </div>
                                            <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#82c885">5,3,0,1,0,0,4</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="state_w1 mb-1 mt-1">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5>0</h5>
                                                <span><i class="zmdi zmdi-print"></i> Пополнений баланса</span>
                                            </div>
                                            <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#45aaf2">2,0,3,0,6,0,2</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="body">
                            <div id="chart-area-spline-sracked" class="c3_chart d_sales"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
