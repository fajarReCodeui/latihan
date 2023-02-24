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
    public function create()
    {
        return view('latihan.crud.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'A' => 'required',
            'B' => 'required',
            'C' => 'required',
            'D' => 'required',
            'E' => 'required',
        ]);
        Crud::create($request->all());

        return redirect()->back();
    }
    public function edit($id)
    {
        $crud = Crud::findOrFail($id);
        return view('latihan.crud.edit', compact('crud'));
    }
    public function update(Request $request,$id)
    {
        $crud = Crud::findOrFail($id);
        $crud->update($request->all());
        return redirect('latihan');
    }
    public function destroy(Request $request,$id)
    {
        $crud = Crud::findOrFail($id);
        $crud->delete($request->all());
        return redirect('latihan');
    }
}
