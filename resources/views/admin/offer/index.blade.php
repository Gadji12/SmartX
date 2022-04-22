@extends('layouts.app')
@section('content')
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Oфферы</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> MeeMoney</a></li>
                        <li class="breadcrumb-item active">Офферы</li>
                        <li class="breadcrumb-item active">Мои офферы</li>
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
                <div class="col-md-12">
                    <div class="d-flex">
                        <div class="mobile-left">
                            <a class="btn btn-info btn-icon toggle-email-nav collapsed" data-toggle="collapse" href="#email-nav" role="button" aria-expanded="false" aria-controls="email-nav">
                                <span class="btn-label"><i class="zmdi zmdi-more"></i></span>
                            </a>
                        </div>
                        <div class="inbox left" id="email-nav">
                            <div class="mail-compose mb-4">
                                <a href="{{route('projects.create')}}" class="btn btn-danger btn-block">Добавить оффер</a>
                            </div>
                            <div class="mail-side">
                                <ul class="nav">
                                    <li class="active"><a href="mail-inbox.html"><i class="zmdi zmdi-inbox"></i>Все<span class="badge badge-primary">{{DB::table('offers')->count()}}</span></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-mail-send"></i>Ожидают<span class="badge badge-warning">6</span></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-badge-check"></i>Одобренные <span class="badge badge-success">6</span> </a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-email"></i>Заявки</a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-alert-circle"></i>Отклонены<span class="badge badge-danger">6</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="inbox right">

                            <div class="table-responsive">
                                <table class="table c_table inbox_table">
                                    @if(empty($projects))
                                        <tr>
                                            <h2 class="text-center mt-5">НЕТ ОФФЕРОВ</h2>
                                        </tr>
                                    @else
                                        @foreach($projects as $project)
                                            <tr>
                                                <td class="u_image"><img src="{{asset('/storage/'. $project->picture_offer)}}" alt="user" class="rounded"></td>
                                                <td class="u_name"><h5 class="font-15 mt-0 mb-0">{{$project->offer_name}}</h5></td>
                                                <td class="max_ellipsis">
                                                    <a class="link" href="{{route('projects.show',$project)}}">
                                                        {{$project->desc_offer}}
                                                    </a>
                                                </td>
                                                <td class="clip"><i class="zmdi zmdi-attachment-alt"></i></td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

