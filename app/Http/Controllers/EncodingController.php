<?php

namespace App\Http\Controllers;

use App\Http\Requests\EncodingRequest;
use App\Http\Strategies\EncodingStrategy;
use Illuminate\Http\Request;

class EncodingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
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

    public function store(EncodingRequest $request)
    {
        $input = $request->input('input');
        $encodingConfigurations = $request->mapEncodingConfigurationEntity();
        $types = $request->getTypes();

        foreach ($types as $type) {
            $strategy = new  EncodingStrategy();
            $strategy->setStrategy($type, $encodingConfigurations);

            $input = $strategy->encode($input);
        }

        return view('welcome')->with([
            'result' => $input,
            'inputs' => $request->input()
        ]);
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
