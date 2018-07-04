<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document_Receive;
class DocumentReceiveController extends Controller
{
    public function index()
    {
        return view('DocumentReceiveList', ['document_receive'=>Document_Receive::all()]);
    }

    public function test(){
    	return Document_Receive::all();
    }
}
