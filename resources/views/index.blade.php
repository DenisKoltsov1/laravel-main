@extends('layouts/header')
@section('content')
<main class="mt-5">
    <div class="row justify-content-center">
        <div class="container-xxl w-75">
            <form  action="{{route('create')}}" method="post" novalidate>
                @method('POST')
                @csrf
                <div class="row justify-content-center">
                    <div class="col-6 mb-1">
                        <label for="validationContract">Введите номер договора</label>
                        <input type="text" name="contract_number" class="form-control" id="validationContract" value="{{old('contract_number')}}" required>
                        @error('contract_number')
                        <div class="alert alert-danger mt-1 h-1">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-6 mb-0">
                        <p>Реквизиты нашей организации</p>
                        <div class="form-group">
                            <label for="inputName">Наименование организации:</label>
                            <input type="text" name="our_organization" class="form-control" id="inputName" value="{{old('our_organization')}}">
                            @error('our_organization')
                            <div class="alert alert-danger mt-1 h-1">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputINN">ИНН:</label>
                                <input type="text" name="our_inn" value="{{old('our_inn')}}" class="form-control"  id="inputINN">
                                @error('our_inn')
                                <div class="alert alert-danger mt-1 h-1">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputKPP">КПП:</label>
                                <input type="text" name="our_kpp" value="{{old('our_kpp')}}" class="form-control"  id="inputKPP">
                                @error('our_kpp')
                                <div class="alert alert-danger mt-1 h-1">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputOGRN">ОГРН:</label>
                                <input type="text" name="our_ogrn" value="{{old('our_ogrn')}}" class="form-control"  id="inputOGRN">
                                @error('our_ogrn')
                                <div class="alert alert-danger mt-1 h-1">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPhone">Номер телефона:</label>
                                <input type="text" name="our_phone"   value="{{old('our_phone')}}" class="form-control" id="inputPhone">
                                @error('our_phone')
                                <div class="alert alert-danger mt-1 h-1">{{$message}}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="inputDirector">ФИО руководителя:</label>
                            <input type="text" value="{{old('our_director')}}" class="form-control" name="our_director" id="inputDirector">
                            @error('our_director')
                            <div class="alert alert-danger mt-1 h-1">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="">
                            <label for="validationAdress">Юридический адрес:</label>
                            <textarea class="form-control" name="our_adress" id="validationAdress"></textarea>
                            <div class="invalid-feedback">value="{{old('our_adress')}}"</div>
                            @error('our_adress')
                            <div class="alert alert-danger mt-1 h-1">{{$message}}</div>
                            @enderror
                        </div>

                    </div>
                    <div class="col-6">
                        <p>Реквизиты контрагента</p>
                        <div class="form-group">
                            <label for="inputName2">Наименование организации:</label>
                            <input type="text" name="counterparty_organization" class="form-control" value="{{old('counterparty_organization')}}"  id="inputName2" >
                            @error('counterparty_organization')
                            <div class="alert alert-danger mt-1 h-1">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputINN2">ИНН:</label>
                                <input type="text" name="counterparty_inn" value="{{old('counterparty_inn')}}" class="form-control" id="inputINN2">
                                @error('counterparty_inn')
                                <div class="alert alert-danger mt-1 h-1">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputKPP2">КПП:</label>
                                <input type="text" name="counterparty_kpp" value="{{old('counterparty_kpp')}}" class="form-control" id="inputKPP2">
                                @error('counterparty_kpp')
                                <div class="alert alert-danger mt-1 h-1">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputOGRN2">ОГРН:</label>
                                <input type="text" name="counterparty_ogrn" value="{{old('counterparty_ogrn')}}" class="form-control" id="inputOGRN2">
                                @error('counterparty_ogrn')
                                <div class="alert alert-danger mt-1 h-1">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPhone2">Номер телефона:</label>
                                <input type="text"value="{{old('counterparty_phone')}}" name="counterparty_phone" class="form-control" id="inputPhone2">
                                @error('counterparty_phone')
                                <div class="alert alert-danger mt-1 h-1">{{$message}}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="inputDirector2">ФИО руководителя:</label>
                            <input type="text" name="counterparty_director" value="{{old('counterparty_director')}}" class="form-control" id="inputDirector2" >
                            @error('counterparty_director')
                            <div class="alert alert-danger mt-1 h-1">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="validationAdress2">Юридический адрес:</label>
                            <textarea class="form-control " value="{{old('counterparty_adress')}}"name="counterparty_adress"id="validationAdress2" ></textarea>
                            <div class="invalid-feedback">
                                Пожалуйста, введите адрес в текстовое поле.
                            </div>
                            @error('counterparty_adress')
                            <div class="alert alert-danger mt-1 h-1">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                <div class="row justify-content-center">
                    <button class="btn btn-primary" type="submit">Сгенерировать договор</button>
                </div>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
