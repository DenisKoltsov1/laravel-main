@extends('layouts/header')
@section('content')
    <div class="container mt-2">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Номер договора</th>
                <th scope="col">Дата создания</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
                @foreach($linkList as $contract)
                <tr>
                    <td>{{$contract->contract_number}}</td>
                    <td>{{$contract->created_at}}</td>
                    <td>
                    <form action="{{route('download', $contract->contract_number)}}" method="get">
                        <input type="hidden"  value="">
                        <button type="submit">Скачать</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
