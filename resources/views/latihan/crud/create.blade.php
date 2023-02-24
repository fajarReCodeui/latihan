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
            <form action="{{route('latihan.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">A</label>
                    <input type="text" name="A" id="" class="form-control">
            </div>
                <div class="form-group">
                    <label for="">B</label>
                    <input type="text" name="B" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">C</label>
                    <input type="text" name="C" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">D</label>
                    <input type="text" name="D" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">E</label>
                    <input type="text" name="E" id="" class="form-control">
                </div>
                <div>
                    <button class="btn btn-info">Simpan</button:btn>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection