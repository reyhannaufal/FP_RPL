@extends('recipes.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Makanan
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Judul resep: </b>{{$recipe->title}}</li>
                    <li class="list-group-item"><b>Deskripsi resep: </b>{{$recipe->description}}</li>
                    <li class="list-group-item"><b>Bahan-bahan: </b>{{$recipe->ingridient}}</li>
                </ul>
            </div>
            <a class="btn btn-success" href="{{ route('recipes.index') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection