<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExchangerCreateFormRequest;
use App\Models\Exchanger;
use Illuminate\Http\Request;

class ExchangerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $apikey = '9eba2bd578bb5a52e148'; // add you api of account
//
//        $json = file_get_contents("https://free.currconv.com/api/v7/convert?q=USD_BYN,USD_EUR,USD_RUB,BYN_USD,BYN_EUR,BYN_RUB,RUB_USD,RUB_BYN,RUB_EUR&compact=ultra&apiKey={$apikey}");
//        $obj = json_decode($json, true);
//
//        dd($obj);
        return view('exchanger');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExchangerCreateFormRequest $request)
    {
        $dataExchanger = $request->all();

        dd($dataExchanger);
        //$item = (new Exchanger())->create($dataExchanger);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
