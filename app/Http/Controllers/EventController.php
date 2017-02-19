<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use GuzzleHttp;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $page = $request->input('page');
        $count = $request->input('count');
        $kwd = $request->input('kwd');
        $kwd_mode = $request->input('kwd_mode');

        $began_on = $request->input('began_on');
        $ended_on = $request->input('ended_on');

        $client = new GuzzleHttp\Client();

        $url = env('RESAS_API_ENDPOINT') . "/partner/asutomo/event";

        //get
        $res = $client->get($url, [
            'headers' => [
                env('RESAS_API_KEY_NAME') => env('RESAS_API_KEY_VALUE')
            ],
            'query' => [
                'cities' => '01203',
                'count' => '100',
            ],
        ]);

        $obj = json_decode($res->getBody());

        return response()->json($obj);
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
