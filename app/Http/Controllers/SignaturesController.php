<?php

namespace App\Http\Controllers;

class SignaturesController extends Controller
{
    /**
     * Display the homepage
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('signatures.index');
    }

    /**
     * Display the signing page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('signatures.sign');
    }
}
