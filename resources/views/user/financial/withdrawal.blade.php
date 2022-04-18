@extends('layouts.userapp')
@section('user-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="body">
                        <h3>ЗАЯВКА НА ВЫВОД СРЕДСТВ</h3>
                        <p>текущий баланс: <span>45</span></p>
                        <p>Куда вы хотите сделать выплату - на счет ИП или на счет Qiwi </p>
                        <div class="checkbox inlineblock mt-1">
                            <input id="ip" type="checkbox">
                            <label for="ip">
                                ИП (комиссия 5%, минимум 100 рублей)
                            </label>
                        </div>
                        <br>

                        <div class="checkbox inlineblock">
                            <input id="qiwi" type="checkbox">
                            <label for="qiwi">
                                Qiwi (комиссия 5%, минимум 100 рублей)
                            </label>
                        </div>
                        <br>

                        <label for="email_address">Если вы хотите сделать перевод по Qiwi, укажите номер счета Qiwi</label>
                        <div class="form-group">
                            <input type="text" id="email_address" class="form-control">
                        </div>

                        <br>

                        <label for="email_address">Введите сумму вывода (сумма должна быть целым числом и кратной 100)</label>
                        <div class="form-group">
                            <input type="text" id="email_address" class="form-control">
                        </div>
                        <p>Если вы являетесь индивидуальным предпринимателем, то вам необходимо указать следующие данные:</p>
                        <br>
                        <strong> ИНН,ОГРНИП, Расчетный счет,БИК,БАНК,Корр.счет,Юр. и фактический адрес</strong>
                        <div class="row clearfix mt-1">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" class="form-control no-resize"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success mx-auto">Отправить заявку</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
