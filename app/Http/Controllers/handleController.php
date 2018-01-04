<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class handleController extends Controller
{
    public function getForm()
    {
        return view('formRequest');
    }

    public function handleRequest(Request $request)
    {
        return $request->all();
    }
}
