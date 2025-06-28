<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;

public function index()
{
    return view('welcome', compact('doctors'));
}

class WelcomeController extends Controller
{
    //
}
