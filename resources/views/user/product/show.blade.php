@extends('layouts.userapp')
@section('user-content')
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Подробности проекта</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="main"><i class="zmdi zmdi-home"></i> Smart X-Investment</a></li>
                        <li class="breadcrumb-item"><a href="{{route('offers.index')}}">Список проектов</a></li>
                        <li class="breadcrumb-item active">Подробности проекта</li>
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
                    <div class="card">
                        <div class="body">
                            <div class="row">
                                <div class="col-xl-8 col-lg-4 col-md-12">
                                    <div class="preview preview-pic tab-content">
                                        <div class="tab-pane active" id="product_1">
{{--                                            <img src="{{asset('/storage/'.$offer->picture_offer)}}" class="img-fluid" alt="">--}}
                                            <img src="{{asset('/storage/'. $offer->picture_offer)}}" class="img-fluid rounded" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-8 col-md-12">
                                    <div class="header">
                                        <h2 class="text-black font-bold" style="font-size: 1.5rem;">{{$offer->offer_name}}</h2>
                                        <p>Под заголовок</p>
                                        <div class=row">
                                            <div class="d-flex bd-highlight mt-4">
                                                 <p class="col-lg-8">1 625 000 RC RUB</p>
                                                 <p class="col-lg-4">45 инвесторов</p>
                                            </div>
                                            <div class="progress m-b-5">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> <span class="sr-only">60% Complete</span> </div>
                                            </div>
                                            <div class="d-flex bd-highlight mt-4">
                                                <p class="col-lg-8">100% из 1 625 000 RC RUB</p>
                                                <p class="col-lg-4">-894 осталось</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-primary ">
                                            <div class="panel-heading" role="tab" id="headingOne_1">
                                                <h4 class="panel-title text-info menu-toggle waves-effect waves-block show"><a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_1" aria-expanded="true" aria-controls="collapseOne_1"> Финансы<i class="zmdi zmdi-hc-fw"></i></a> </h4>
                                            </div>
                                            <div id="collapseOne_1" class="collapse in" role="tabpanel" aria-labelledby="headingOne_1">
                                                <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                    single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                    Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                    raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                    accusamus labore sustainable VHS. </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" role="tab" id="headingTwo_1">
                                                <h4 class="panel-title text-info "> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTwo_1" aria-expanded="false" aria-controls="collapseTwo_1"> Условия<i class="zmdi zmdi-hc-fw"></i> </a> </h4>
                                            </div>
                                            <div id="collapseTwo_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_1">
                                                <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                    single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                    Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                    raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                    accusamus labore sustainable VHS. </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" role="tab" id="headingThree_1">
                                                <h4 class="panel-title text-info"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseThree_1" aria-expanded="false"
                                                                            aria-controls="collapseThree_1"> Команда<i class="zmdi zmdi-hc-fw"></i> </a> </h4>
                                            </div>
                                            <div id="collapseThree_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_1">
                                                <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                    single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                    Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                    raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                    accusamus labore sustainable VHS. </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-success btn-lg col-12">Инвестировать</button>
                                </div>
                            </div>
                            <div class="mt-2">
                                <a class="btn btn-primary my-btn mb-2 btn-lg text-white" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#about" aria-expanded="true" aria-controls="collapseOne_1">О Проекте</a>
                                <a class="btn btn-primary my-btn mb-2 btn-lg text-white" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#news" aria-expanded="true" aria-controls="collapseOne_1">НОВОСТИ ПРОЕКТА</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="about" role="tabpanel" aria-labelledby="headingOne_1" class="panel-collapse collapse in col-xl-8 col-lg-4 col-md-12">
                    <div class="card">
                        <div class="body">
                            <div class="collapse show active">
                                <p>{{$offer->desc_offer}}</p>

                                <ol>
                                    <li>Сумма&nbsp; инвестиций: 1.625.000 RC&nbsp;RUR</li>
                                    <li>Количество Royal: 250</li>
                                    <li>Стоимость Royal: 6500 RC&nbsp;RUR</li>
                                </ol>

                                <p><strong>Условия:</strong></p>

                                <ol>
                                    <li>Планируемая прибыль инвестора: 25-30% годовых.</li>
                                    <li>Процент от прибыли на всех инвесторов: 25%</li>
                                    <li>Интервал выплат: ежемесячно (подробный PNL отчет формируется с 5-е по 10-е число)</li>
                                </ol>

                                <p><strong>Показатели:</strong>&nbsp;</p>

                                <ol>
                                    <li>Открыли кофейню: в июне 2019 года</li>
                                    <li>Средний чек: 202 рублей</li>
                                    <li>Самый популярный напиток: Дабл капучино 350 мл.</li>
                                    <li>Максимальная выручка в день: 36115 рублей.</li>
                                </ol>
                                <p></p>
{{--                                <p><a href="/files/projects/da8609922e026aac8c4fd84c018b2c6d.JPG" target="_blank"> <img src="https://investfond.pro/files/projects/da8609922e026aac8c4fd84c018b2c6d.JPG"> </a></p>--}}
{{--                                <p><a href="/files/projects/af4344f79be5f3f5474434edfa8877d7.png" target="_blank"> <img src="https://investfond.pro/files/projects/da8609922e026aac8c4fd84c018b2c6d.JPG"> </a></p>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div id="news" role="tabpanel" aria-labelledby="headingOne_1" class="panel-collapse collapse in col-xl-8 col-lg-4 col-md-12">
                    <div class="card">
                        <div class="body">
                            <div class="card mb-2">
                                <div class="card-body">
                                    <p style="margin-bottom:0px;"><b><a href="full_news.php?id=105">Пример новости</a></b></p>
                                    <p style="margin-bottom:0px;"><small>Дата: 01.05.2021</small></p>
                                    <p>Доброго времени. Отчет по продаже оборудования.
                                        ...</p>
                                    <a href="full_news.php?id=105">Подробнее</a>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <p style="margin-bottom:0px;"><b><a href="full_news.php?id=103">Пример новости</a></b></p>
                                    <p style="margin-bottom:0px;"><small>Дата: 16.04.2021</small></p>
                                    <p>Доброго времени. Продали часть оборудования (прим...</p>
                                    <a href="full_news.php?id=103">Подробнее</a>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <p style="margin-bottom:0px;"><b><a href="full_news.php?id=96">Пример новости</a></b></p>
                                    <p style="margin-bottom:0px;"><small>Дата: 28.02.2021</small></p>
                                    <p>Доброго времени. В январе мы перевезли кофейное о...</p>
                                    <a href="full_news.php?id=96">Подробнее</a>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <p style="margin-bottom:0px;"><b><a href="full_news.php?id=82">Пример новости</a></b></p>
                                    <p style="margin-bottom:0px;"><small>Дата: 21.12.2020</small></p>
                                    <p>Доброго времени. Готов PNL-отчет по ноябрю.

                                        К...</p>
                                    <a href="full_news.php?id=82">Подробнее</a>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <p style="margin-bottom:0px;"><b><a href="full_news.php?id=70">Пример новости</a></b></p>
                                    <p style="margin-bottom:0px;"><small>Дата: 14.11.2020</small></p>
                                    <p>Доброго времени. Готов PNL отчет по кофейне (прик...</p>
                                    <a href="full_news.php?id=70">Подробнее</a>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <p style="margin-bottom:0px;"><b><a href="full_news.php?id=66">Пример новости</a></b></p>
                                    <p style="margin-bottom:0px;"><small>Дата: 15.10.2020</small></p>
                                    <p>Доброго времени суток, уважаемые инвесторы. Отчет...</p>
                                    <a href="full_news.php?id=66">Подробнее</a>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <p style="margin-bottom:0px;"><b><a href="full_news.php?id=58">Пример новости</a></b></p>
                                    <p style="margin-bottom:0px;"><small>Дата: 19.08.2020</small></p>
                                    <p>Доброго времени. У нас была достаточно сложная си...</p>
                                    <a href="full_news.php?id=58">Подробнее</a>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <p style="margin-bottom:0px;"><b><a href="full_news.php?id=42">Пример новости</a></b></p>
                                    <p style="margin-bottom:0px;"><small>Дата: 16.05.2020</small></p>
                                    <p>Казанский кофе-бар был закрыт, т.к все офисное зд...</p>
                                    <a href="full_news.php?id=42">Подробнее</a>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <p style="margin-bottom:0px;"><b><a href="full_news.php?id=32">Пример новости</a></b></p>
                                    <p style="margin-bottom:0px;"><small>Дата: 13.03.2020</small></p>
                                    <p>Выручка - 236435 руб.
                                        - Себестоимость продукта -...</p>
                                    <a href="full_news.php?id=32">Подробнее</a>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <p style="margin-bottom:0px;"><b><a href="full_news.php?id=28">Пример новости</a></b></p>
                                    <p style="margin-bottom:0px;"><small>Дата: 13.02.2020</small></p>
                                    <p>Выручка - 238515 руб.

                                        - Себестоимость продукта...</p>
                                    <a href="full_news.php?id=28">Подробнее</a>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <p style="margin-bottom:0px;"><b><a href="full_news.php?id=24">Пример новости</a></b></p>
                                    <p style="margin-bottom:0px;"><small>Дата: 06.02.2020</small></p>
                                    <p>Выручка - 259824 руб.

                                        - Себестоимость продукта...</p>
                                    <a href="full_news.php?id=24">Подробнее</a>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <p style="margin-bottom:0px;"><b><a href="full_news.php?id=13">Пример новости</a></b></p>
                                    <p style="margin-bottom:0px;"><small>Дата: 12.12.2019</small></p>
                                    <p>Прикрепляем подробный отчет о доходах и расхода:
                                        ...</p>
                                    <a href="full_news.php?id=13">Подробнее</a>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <p style="margin-bottom:0px;"><b><a href="full_news.php?id=8">Пример новости</a></b></p>
                                    <p style="margin-bottom:0px;"><small>Дата: 11.11.2019</small></p>
                                    <p>Прикрепляем подробный отчет о доходах и расхода:
                                        ...</p>
                                    <a href="full_news.php?id=8">Подробнее</a>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <p style="margin-bottom:0px;"><b><a href="full_news.php?id=6">Пример новости</a></b></p>
                                    <p style="margin-bottom:0px;"><small>Дата: 11.10.2019</small></p>
                                    <p>Прикрепляем подробный отчет о доходах и расхода:
                                        ...</p>
                                    <a href="full_news.php?id=6">Подробнее</a>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <p style="margin-bottom:0px;"><b><a href="full_news.php?id=4">Пример новости</a></b></p>
                                    <p style="margin-bottom:0px;"><small>Дата: 16.09.2019</small></p>
                                    <p>В одном из прямых эфиров мы рассказывали, что про...</p>
                                    <a href="full_news.php?id=4">Подробнее</a>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <p style="margin-bottom:0px;"><b><a href="full_news.php?id=2">Пример новости</a></b></p>
                                    <p style="margin-bottom:0px;"><small>Дата: 10.09.2019</small></p>
                                    <p>Прикрепляем подробный отчет о доходах и расхода:
                                        ...</p>
                                    <a href="full_news.php?id=2">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success btn-block my-btn my-2 my-sm-0 btn-lg" type="submit" name="invest">ИНВЕСТИРОВАТЬ</button>
            </div>
        </div>
    </div>

@endsection
