<?php

namespace App\Http\Controllers;

use App;

class Company extends Controller
{
    public function index()
    {

        var_dump($companies);
        die();
        return view('companies.index', compact('companies'));
    }

    public function show()
    {
    }
}
