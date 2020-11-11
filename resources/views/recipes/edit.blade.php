@extends('recipes.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Buku
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
                <form method="post" action="{{ route('recipes.update',$recipes->id) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Judul</label> <input type="text" name="title" class="form-control" id="title" value="{{ $recipes->title }}" aria-describedby="title" placeholder="Masukkan Judul Resep"> </div>
                    <div class="form-group">
                        <label for="writer">Deskripsi</label> <input type="text" name="description" class="form-control" id="description" value="{{ $recipes->writer }}" aria-describedby="writer" placeholder="Masukkan Deskripsi Resep"> </div>
                    <div class="form-group">
                        <label for="publisher">Bahan-bahan</label> <input type="text" name="ingridient" class="form-control" id="ingridient" value="{{ $recipes->publisher }}" aria-describedby="publisher" placeholder="Masukkan bahan-bahan resep">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection