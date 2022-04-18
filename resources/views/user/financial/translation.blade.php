@extends('layouts.userapp')
@section('user-content')
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card widget_2 traffic">
                    <h4>Переводы</h4>
                    <div class="body">
                        <p>Текущий баланс: 0.00 RC RUB</p>
                        <strong>Условия перевода</strong>
                        <p class="text-muted">Минимальная сумма 500 RC RUB</p>
                        <p class="text-muted">Комиссия 1.5% (но не менее 100 рублей)</p>
                        <button type="button" class="btn btn-primary waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">Сделать перевод</button>

                        <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="title" id="defaultModalLabel">Выполнить перевод средств</h4>
                                    </div>
                                    <form>
                                        <div class="modal-body">
                                            <p>Текуший баланс: 0.00 RUB</p>
                                            <label for="email_address">Укажите Email пользователя которому хотите сделать перевод</label>
                                            <div class="form-group">
                                                <input type="text" id="email_address" class="form-control">
                                            </div>
                                            <label for="password">Введите сумму перевода</label>
                                            <div class="form-group">
                                                <input type="password" id="password" class="form-control">
                                            </div>
                                            <p>Итого с комиссией: RUB</p>
                                            <button type="button" class="btn btn-success btn-lg waves-effect">Выполнить перевод</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <h6 class="mt-3">Переводы</h6>
                        <ul class="nav nav-tabs p-0 mb-3 mt-3">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Cделанные вами</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile">Сделанных вам</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane in active" id="home">
                                <div class="table-responsive">
                                    <table class="table table-striped text-center">
                                        <thead>
                                        <tr>
                                            <th>Дата</th>
                                            <th>Сумма</th>
                                            <th>Отправитель</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>...₽</td>
                                            <td>...</td>
                                            <td>...</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <div class="table-responsive">
                                    <table class="table table-striped text-center">
                                        <thead>
                                        <tr>
                                            <th>Дата</th>
                                            <th>Сумма</th>
                                            <th>Получатель</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>...₽</td>
                                            <td>...</td>
                                            <td>...</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
