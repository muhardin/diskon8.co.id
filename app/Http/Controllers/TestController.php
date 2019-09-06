<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Shop;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      //dd($request->server->get('SERVER_NAME'));
      //Request::server ("HTTP_HOST");
                    $data = Shop::find(2);
                    $curl = curl_init();
                    curl_setopt_array($curl, [
                    CURLOPT_URL => 'https://portal.bulkgate.com/api/1.0/simple/transactional',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => json_encode([
                        'application_id' => '4799',
                        'application_token' => '5CyWVSHiTfpDCSsJDEqlQqQBNex05IuYN3tumwaI2CsQ3m2LBS',
                        'number' => '62'.@$data->phone,
                        'text' => 'SMS Code :'.@$data->domain.'Salam Sukses, ULTIMATE246 www.ultimate246.co.id',
                        'sender_id' => '100',
                        'sender_id_value' => 'BulkGate'
                    ]),
                    CURLOPT_HTTPHEADER => [
                        'Content-Type: application/json'
                    ],
                ]);
                $response = curl_exec($curl);
                curl_close($curl);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user()->id;
        dd( $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
