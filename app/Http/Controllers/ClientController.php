<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        return view('clients', [
            'clients' => Client::where('first_name', 'like', '%' . $request->search . '%')->paginate(5),
            'search' => $request->search
        ]);
    }
}
