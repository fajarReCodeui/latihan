<?php

namespace App\Http\Controllers\Crud;

use App\Crud;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CrudController extends Controller
{
    public function index()
    {
        $latihans = Crud::all();
        return view('latihan.crud.index', compact('latihans'));
    }//
}
