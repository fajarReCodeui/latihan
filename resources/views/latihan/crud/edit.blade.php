@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div>
                <h3>Latihan Crud</h3>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('latihan.update', $crud->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">A</label>
                    <input type="text" name="A" id="" value="{{$crud->A}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">B</label>
                    <input type="text" name="B" id="" value="{{$crud->B}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">C</label>
                    <input type="text" name="C" id="" value="{{$crud->C}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">D</label>
                    <input type="text" name="D" id="" value="{{$crud->D}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">E</label>
                    <input type="text" name="E" id="" value="{{$crud->E}}" class="form-control">
                </div>
                <div>
                    <button class="btn btn-info">Simpan</button:btn>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection