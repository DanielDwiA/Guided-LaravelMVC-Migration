<?php

namespace App\Http\Controllers;

use App\Models\Macbook;
use Illuminate\Http\Request;

class MacbookController extends Controller
{
    public function index()
    {
        $macbooks = Macbook::get();
        return view('macbooks.index', compact('macbooks'));
    }
}
