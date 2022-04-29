@extends('layouts.userapp')
@section('user-content')
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Проекты</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="main"><i class="zmdi zmdi-home"></i> Smart X-Investment</a></li>
                        <li class="breadcrumb-item active">Список проектов</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="row clearfix d-flex">
                    @foreach($offers as $offer)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="body product_item">
                                <img src="{{asset('/storage/'.$offer->picture_offer)}}" width="300" alt="Product" class="img-fluid cp_img">
                                <div class="product_details">
                                    <a href="ec-product-detail.html">{{$offer->offer_name}}</a>
                                    <ul class="product_price list-unstyled">
                                        <li class="new_price">{{$offer->end_date_offer}}</li>
                                        <li class="new_price">25%</li>
                                    </ul>
                                </div>
                                <div class="action">
                                    <a href="{{route('offers.show',$offer)}}" class="btn btn-primary waves-effect">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
