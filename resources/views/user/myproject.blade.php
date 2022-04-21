@extends('layouts.userapp')
@section('user-content')
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card widget_2 traffic">
                    <h4>Мои проекты</h4>
                    <div class="body">
                        <div class="row">
                            <div class="col-12">
                               <div class="card-body">
                                   <h3 class="mx-auto">Вы еще не инвестировали ни в один проект</h3>
                                   <p class="mx-auto">Мы подготовили для Вас несколько вариантов, что бы Вам было легче принять решение</p>
                                   <a  href="{{route('offers.index')}}" class="btn btn-success mx-auto">Выбрать проект</a>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
