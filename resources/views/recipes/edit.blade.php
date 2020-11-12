@extends('recipes.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Makanan
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

                <form method="post" action="{{ route('recipes.update', $recipe->id) }}" id="myForm">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{ $recipe->title }}" aria-describedby="title" placeholder="Masukkan Judul Resep"> </div>
                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <input type="text" name="description" class="form-control" id="description" value="{{ $recipe->description }}" aria-describedby="description" placeholder="Masukkan Deskripsi Resep"> </div>
                    <div class="form-group">
                        <label for="ingridient">Bahan-bahan</label>
                        <input type="text" name="ingridient" class="form-control" id="ingridient" value="{{ $recipe->ingridient }}" aria-describedby="ingridient" placeholder="Masukkan bahan-bahan resep" />
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection