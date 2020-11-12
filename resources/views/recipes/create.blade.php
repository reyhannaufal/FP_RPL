@extends('recipes.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Resep
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('recipes.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="title">Judul Resep</label> <input type="text" name="title" class="form-control" id="title" aria-describedby="title" placeholder="Masukkan Judul Resep"> </div>
                    <div class="form-group">
                        <label for="writer">Deskripsi Resep</label> <input type="text" name="description" class="form-control" id="description" aria-describedby="description" placeholder="Masukkan Deskripsi resep"> </div>
                    <div class="form-group">
                        <label for="publisher">Bahan-Bahan</label> <input type="text" name="ingridient" class="form-control" id="ingridient" aria-describedby="ingridient" placeholder="Masukkan Bahan-Bahan">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection