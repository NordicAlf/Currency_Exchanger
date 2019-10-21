@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="main">
            <div class="title">
                Конвертер валют
            </div>

        <div class="row justify-content-center">
            <form class="exchanger" action="" method="POST">
                @csrf
                <div class="block">
                    <div class="block-text"></div>
                    <select class="option">
                        <option selected disabled>Выберите валюту</option>
                        <option value="BYN">BYN</option>
                        <option value="RUB">RUB</option>
                        <option value="USD">USD</option>
                        <option value="EUR">EUR</option>
                    </select>
                    <input class="money" type="text" placeholder="Ввод денег">
                </div>

                <div class="block">
                    <select class="option">
                        <option selected disabled>Выберите валюту</option>
                        <option value="BYN">BYN</option>
                        <option value="RUB">RUB</option>
                        <option value="USD">USD</option>
                        <option value="EUR">EUR</option>
                    </select>
                    <input class="money" type="text" placeholder="Результат" value="" disabled>
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
                        <tr>
                            <td>20.09.2018</td>
                            <td>USD</td>
                            <td>200</td>
                            <td>BYN</td>
                            <td>400</td>
                        </tr>
                    </table>
            </form>
        </div>
    </div>
    </div>
@endsection