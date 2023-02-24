@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div>
                <a href="{{route('latihan.create')}}" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>A</th>
                        <th>B</th>
                        <th>C</th>
                        <th>D</th>
                        <th>E</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($latihans as $latihan)
                        <tr>
                            <td>
                                <a href="{{route('latihan.edit', $latihan->id)}}" class="btn btn-outline-warning btn-sm">
                                    {{$latihan->A}}
                                </a>
                            </td>
                            <td>
                                <form action="{{route('latihan.destroy', $latihan->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm">{{$latihan->B}}</button>
                                </form>
                            </td>
                            <td>{{$latihan->C}}</td>
                            <td>{{$latihan->D}}</td>
                            <td>{{$latihan->E}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
