@extends('layouts.app')
@section('content')
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Подробности оффера</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> MeeMoney</a></li>
                        <li class="breadcrumb-item">Офферы</li>
                        <li class="breadcrumb-item active">Подробности оффера</li>
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
                <div class="col-lg-12">
                    <div class="alert alert-warning">
                        <strong>Внимание!</strong> Подробное описание видно только вам. Все данные предоставлены в режиме разработчика.
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-12">
                                    <div class="preview preview-pic tab-content">
                                        <div class="tab-pane active" id="product_1"><img src="{{asset('/storage/'. $project->picture_offer)}}" class="img-fluid" alt="" /></div>
{{--                                        <div class="tab-pane" id="product_2"><img src="{{asset('/storage/'. $offer->picture_offer)}}" class="img-fluid" alt=""/></div>--}}
{{--                                        <div class="tab-pane" id="product_3"><img src="{{asset('/storage/'. $offer->picture_offer)}}" class="img-fluid" alt=""/></div>--}}
{{--                                        <div class="tab-pane" id="product_4"><img src="{{asset('/storage/'. $offer->picture_offer)}}" class="img-fluid" alt=""/></div>--}}
                                    </div>
{{--                                    <ul class="preview thumbnail nav nav-tabs">--}}
{{--                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#product_1"><img src="{{asset('/storage/'. $offer->picture_offer)}}" alt=""/></a></li>--}}
{{--                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#product_2"><img src="assets/images/ecommerce/2.png" alt=""/></a></li>--}}
{{--                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#product_3"><img src="assets/images/ecommerce/3.png" alt=""/></a></li>--}}
{{--                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#product_4"><img src="assets/images/ecommerce/4.png" alt=""/></a></li>--}}
{{--                                    </ul>--}}
                                </div>
                                <div class="col-xl-9 col-lg-8 col-md-12">
                                    <div class="product details">
                                        <h3 class="product-title mb-0">{{$project->offer_name}}</h3>
                                        <h5 class="price mt-0">Текущая ставка: <span class="col-amber">$180</span></h5>
                                        <h6>Статус : <span class="text-danger"> Неактивен</span></h6>
                                        <h6>Требует подтверждения : <span class="text-danger"> Нет</span></h6>
                                        <hr>
                                        <p class="product-description">{{$project->desc_offer}}</p>
                                        <div class="action">
                                            <button class="btn btn-success waves-effect" type="button">Одобрить оффер</button>
                                            <button class="btn btn-warning waves-effect" type="button">Скрыть оффер</button>
                                            <button class="btn btn-danger waves-effect" type="button" data-toggle="modal" data-target="#smallModal">Удалить оффер</button>

                                            <div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="title" id="smallModalLabel">Внимание!</h4>
                                                        </div>
                                                        <div class="modal-body">Оффер будет удален, вы уверены? </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default btn-round waves-effect">Отменить</button>

                                                            <form action="{{ route('projects.destroy', $project) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger waves-effect">Удалить оффер</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mt-3">Для отклонения оффера воспользуйтесь формой ниже  "Заблокировать оффер".</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#description">Материалы</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#review">Условия</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#about">Подробное описание</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="body">
                            <div class="tab-content">
                                <div class="tab-pane active col-12" id="description">
                                    <p>Ссылка для привлечения: </p>
                                    <input type="text"  class="form-control">
                                    <div class="row mt-4">
                                        <div class="col-lg-4">
                                            <p>Баннер 1:</p>
                                            <p>Какой-то текстКакой-то текстКакой-то текстКакой-то текстКакой-то текстКакой-то текстКакой-то текст</p>
                                            <p>Баннер отсутствует</p>
                                        </div>

                                        <div class="col-lg-4">
                                            <p>Баннер 2:</p>
                                            <p>Какой-то текстКакой-то текстКакой-то текстКакой-то текстКакой-то текстКакой-то текстКакой-то текст</p>
                                            <p>Баннер отсутствует</p>
                                        </div>

                                        <div class="col-lg-4">
                                            <p>Баннер 3:</p>
                                            <p>Какой-то текстКакой-то текстКакой-то текстКакой-то текстКакой-то текстКакой-то текстКакой-то текст</p>
                                            <p>Баннер отсутствует</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="tab-pane" id="review">
                                    <p> ГЕО: lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>
                                    <p> Разрешённые источники: : lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>
                                    <p> Дата добавления:  lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>
                                </div>
                                <div class="tab-pane" id="about">
                                    <h6>Where does it come from?</h6>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
