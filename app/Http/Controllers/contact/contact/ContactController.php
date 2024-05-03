<?php

namespace App\Http\Controllers\contact\contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contacto.index');
    }
}
