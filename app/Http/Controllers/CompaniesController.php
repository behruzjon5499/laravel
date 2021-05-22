<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Support\Facades\DB;

class CompaniesController extends Controller
{
    public function index()
    {

$companies = App\Models\Company::all();
        return view('companies.index', compact('companies'));
    }

    public function show($id)
    {
        $company = App\Models\Company::find($id);
        return view('companies.show', compact('company'));

    }
}
