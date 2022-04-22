@extends('layouts.app')
@section('content')
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Создание проекта</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="zmdi zmdi-home"></i> Smart X-Investment</a></li>
                        <li class="breadcrumb-item active">Проект</li>
                        <li class="breadcrumb-item active">Создание</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <!-- Form start -->
        <form action="{{route('projects.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>Загрузите изображение Проекта</h2>
                            </div>
                            <div class="body">
                                <input type="file" name="picture_offer" class="dropify" data-show-errors="true" />
                             </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Информация</strong> об оффере</h2>
                            </div>
                            <div class="body">
                                <label for="about">Заголовок Проекта</label>
                                <div class="form-group">
                                    <input type="text" name="offer_name" placeholder="Название проекта" class="form-control">
                                </div>

                                <label for="shortdesc">Описание проекта</label>
                                <div class="form-group">
                                    <textarea rows="4" class="form-control" name="desc_offer" id="shortdesc" placeholder="Это описание будут видеть инвесторы"></textarea>
                                </div>


                                <div class="row">
                                    <div class="col-6">
                                        <label for="">Цена за долю</label>
                                        <div class="input-group masked-input mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" style="font-weight: 600;"><!--i class="zmdi zmdi-money"></i--> ₽</span>
                                            </div>
                                            <input type="text" name="price_per_offer" class="form-control" placeholder="1500">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <label for="">Число доль</label>
                                        <div class="input-group masked-input mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" style="font-weight: 600;"><i class="zmdi zmdi-blur-circular"></i></span>
                                            </div>
                                            <input type="text" name="number_shares_offer" class="form-control" placeholder="7">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <label for="about">Дата окончания оффера</label>
                                <div class="input-group masked-input">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                                    </div>
                                    <input type="text" name="end_date_offer" class="form-control date" placeholder="30.07.2016">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--                <div class="col-lg-6 col-md-6 col-sm-12">-->
                    <!--                    <div class="card">-->
                    <!--                        <div class="body">-->
                    <!--                            <label>Время окончания оффера (Необязательно)</label>-->
                    <!--                                    <div class="input-group masked-input">-->
                    <!--                                        <div class="input-group-prepend">-->
                    <!--                                            <span class="input-group-text"><i class="zmdi zmdi-time"></i></span>-->
                    <!--                                        </div>-->
                    <!--                                        <input type="text" name="endTime" class="form-control time12" placeholder="11:59">-->
                    <!--                                    </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!-- Traffics End -->

                    <!-- Banners -->
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>Дополнительные файлы (если файлов несколько, то занесите их в архив)</h2>
                            </div>
                            <div class="body">
                                <input type="file" name="picture_or_file_offer" class="dropify" data-show-errors="true" />
                            </div>
                        </div>
                    </div>
                    <!-- Banners End -->
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="body">
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <button style="margin-left: 35px;" type="submit" class="btn btn-primary"><h6 class="pt-2">Добавить оффер</h6></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
        <!-- Form end -->
    </div>
    <script>$('.dropify').dropify();</script>
{{--    <script>--}}
{{--            $('.dropify').dropify({--}}
{{--                messages: {--}}
{{--                    'default': 'Нажмите или перетащите файлы',--}}
{{--                    'replace': 'Нажмите или перетащите файлы',--}}
{{--                    'remove':  'Remove',--}}
{{--                    'error':   'Ooops, something wrong happended.'--}}
{{--                }--}}
{{--            });--}}
{{--    </script>--}}

    <script>
        $(function () {
            $('.colorpicker').colorpicker();

            //Masked Input =========
            var $demoMaskedInput = $('.masked-input');

        $demoMaskedInput.find('.date').inputmask('dd/mm/yyyy', { placeholder: '__/__/____' });});
    </script>
@endsection
