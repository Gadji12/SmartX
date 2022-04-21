@extends('layouts.userapp')
@section('user-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="body">
                        <h3>РЕКВИЗИТЫ</h3>

                        <label for="telephone">Телефон (без знака "+")</label>
                        <div class="form-group">
                            <input type="text" id="telephone" name="telephone" class="form-control">
                        </div>

                        <label for="">CityLife. Номер счета</label>
                        <div class="form-group">
                            <input type="text" id="email_address" class="form-control">
                        </div>

                        <label for="requisite_ip">Реквизиты ИП</label>
                        <div class="form-group form-float">
                            <textarea name="requisite_ip" cols="30" rows="5"  class="form-control no-resize" required="" aria-required="true"></textarea>
                        </div>

                        <label for="inn">ИНН</label>
                        <div class="form-group">
                            <input type="text" name="inn" id="email_address" class="form-control" >
                        </div>

                        <label for="">Паспорт серия</label>
                        <div class="form-group">
                            <input type="text" id="email_address" class="form-control">
                        </div>


                        <label for="">Паспорт номер</label>
                        <div class="form-group">
                            <input type="text" id="email_address" class="form-control">
                        </div>

                        <label for="">Кем выдан</label>
                        <div class="form-group">
                            <input type="text" id="email_address" class="form-control">
                        </div>

                        <label for="">Дата выдачи</label>
                        <div class="form-group">
                            <input type="date" id="email_address" class="form-control">
                        </div>

                        <label for="">Код подразделения</label>
                        <div class="form-group">
                            <input type="text" id="email_address" class="form-control">
                        </div>

                        <label for="requisite_ip">Адрес регистрации</label>
                        <div class="form-group form-float">
                            <textarea name="requisite_ip" cols="30" rows="5"  class="form-control no-resize" required="" aria-required="true"></textarea>
                        </div>

                        <label for="requisite_ip">Адрес для получения корреспонденции</label>
                        <div class="form-group form-float">
                            <textarea name="requisite_ip" cols="30" rows="5" class="form-control no-resize" required="" aria-required="true"></textarea>
                        </div>
                        <div class="row clearfix mt-1">
                            <button class="btn btn-success mx-auto">Изменить</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
