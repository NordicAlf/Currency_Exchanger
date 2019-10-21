@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="main">
            <div class="title">
                Конвертер валют
            </div>

        <div class="row justify-content-center">
            <form class="exchanger" action="{{ route('exchanger.store') }}" method="POST">
                @csrf
                <div class="block">
                    <div class="block-text"></div>
                    <select class="option" name="currency_in" required>
                        <option selected disabled>Выберите валюту</option>
                        <option value="BYN">BYN</option>
                        <option value="RUB">RUB</option>
                        <option value="USD">USD</option>
                        <option value="EUR">EUR</option>
                    </select>
                    <input class="money" type="text" name="money_in" placeholder="Ввод денег" pattern="^[ 0-9]+$" required>
                </div>

                <div class="block">
                    <select class="option" name="currency_out" required>
                        <option selected disabled>Выберите валюту</option>
                        <option value="BYN">BYN</option>
                        <option value="RUB">RUB</option>
                        <option value="USD">USD</option>
                        <option value="EUR">EUR</option>
                    </select>
                    <input class="money" type="text" name="money_out" placeholder="Результат" value="" disabled>
                </div>
                <button class="submit" type="submit">ПЕРЕВОД</button>
                    <table class="history-table">
                        <tr>
                            <th>Дата</th>
                            <th>Из какой валюты</th>
                            <th>Количество</th>
                            <th>В какую валюту</th>
                            <th>Результат</th>
                        </tr>
                        @foreach($history as $row)
                        <tr>
                            <td>{{ $row->created_at }}</td>
                            <td>{{ $row->currency_in }}</td>
                            <td>{{ $row->money_in }}</td>
                            <td>{{ $row->currency_out }}</td>
                            <td>{{ round($row->money_out, 2) }}</td>
                        </tr>
                        @endforeach
                    </table>
            </form>
        </div>
    </div>
    </div>
@endsection