@extends('recipes.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mt-3 mb-3">
        <div class="text-left">
            <h2>Resep Makanan</h2>
        </div>
        <div class="text-right">
            <a class="btn btn-success" href="{{ route('recipes.create') }}">Tambah Makanan</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>
        <p>{{ $message }}</p>
    </strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<table class="table table-striped table-bordered">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Bahan-Bahan</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($recipes as $key => $recipe)
    <tr>

        <td>{{ $key + 1 }}</td>
        <td>{{ $recipe->title }}</td>
        <td>{{ $recipe->description }}</td>
        <td>{{ $recipe->ingridient }}</td>
        <td>

            <form action="{{ route('recipes.destroy',$recipe->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('recipes.show', $recipe->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('recipes.edit', $recipe->id) }}">Edit</a>
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="delete" class="btn btn-danger">Delete</button>
            </form>

        </td>
    </tr>
    @endforeach
</table>

@endsection