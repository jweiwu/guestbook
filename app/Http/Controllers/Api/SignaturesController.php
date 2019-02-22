<?php

namespace App\Http\Controllers\Api;

use App\Services\SignatureService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SignaturesController extends Controller
{
    protected $service;

    /**
     * SignaturesController constructor.
     */
    public function __construct(SignatureService $service)
    {
        $this->service = $service;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $signatures = $this->service->Paginate();
        return response()->json($signatures);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $instance = $request->only(['name', 'email', 'body']);
        $signature = $this->service->Create($instance);
        return response()->json($signature)->setStatusCode(201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->setStatusCode(404);
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
        return response()->setStatusCode(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response()->setStatusCode(404);
    }
}
