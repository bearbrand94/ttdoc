<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentSendController extends Controller
{
    public function index()
    {
        return view('DocumentSendList');
    }
}
