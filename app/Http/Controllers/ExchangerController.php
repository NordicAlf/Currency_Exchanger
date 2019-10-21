<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExchangerCreateFormRequest;
use App\Models\Exchanger;
use App\Repositories\ExchangerRepository;
use Illuminate\Http\Request;

class ExchangerController extends Controller
{
    private $exchangerRepository;

    public function __construct()
    {
        $this->exchangerRepository = app(ExchangerRepository::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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

        $funct = $this->exchangerRepository->convert($dataExchanger);

        dd($funct);
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
