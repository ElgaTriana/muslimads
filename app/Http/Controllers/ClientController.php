<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;

class ClientController extends Controller
{
    public function index(Request $request){
        $data=Client::all();
        return view('clientpage')
        ->with('data', $data);
    }

    public function pagecity(Request $request){
        $data=Client::all();
        return view('pagecity')
        ->with('data', $data);
    }

    public function arraymax(Request $request){
        return view('arraymax');
    }

    public function looping(Request $request){
        return view('looping');
    }
}
