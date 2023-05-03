<?php

namespace App\Http\Controllers;

use App\Models\Response;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\response  $response
     * @return \Illuminate\Http\Response
     */
    public function show(response $response)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\response  $response
     * @return \Illuminate\Http\Response
     */
    public function edit($lamaran_id)
    {
        $lamaran = Response::where('lamaran_id', $lamaran_id)->first();
        $lamaranId = $lamaran_id;
        return view('response', compact('lamaran', 'lamaranId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\response  $response
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $lamaran_id)
    {
        $request->validate([
            'status' => 'required',
            'date' => 'required',
        ]);

        Response:: updateOrCreate (
            [
                'lamaran_id' => $lamaran_id,
            ],
            [
                'status' => $request->status,
                'date' => $request->date,
            ]
            );
            return redirect()->route('data_petugas')->with('responseSeccess', 'Berhasil mengubah response');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\response  $response
     * @return \Illuminate\Http\Response
     */
    public function destroy(response $response)
    {
        //
    }
}
