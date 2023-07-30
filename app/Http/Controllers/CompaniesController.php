<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompaniesController extends Controller
{
    public function index() {
        $companies = Company::all();
        return view('companies', compact('companies'));
    }
}
