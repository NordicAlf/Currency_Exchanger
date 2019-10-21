<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExchangerCreateFormRequest;
use App\Models\Exchanger;
use App\Repositories\ExchangerRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExchangerController extends Controller
{
    private $exchangerRepository;
    private $userRepository;

    public function __construct()
    {
        $this->exchangerRepository = app(ExchangerRepository::class);
        $this->userRepository = app(UserRepository::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = $this->userRepository->getUserId();
        $history = $this->exchangerRepository->getHistory($user_id); // get history current user

        return view('exchanger', compact('history'));
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

        $dataExchanger['money_out'] = $this->exchangerRepository->convert($dataExchanger);
        $dataExchanger['user_id'] = $this->userRepository->getUserId();

        $item = (new Exchanger())->create($dataExchanger);

        if ($item) {
           return redirect()->route('exchanger.index');
        }
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
