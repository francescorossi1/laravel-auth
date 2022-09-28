@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1>{{ $post->title }}</h1>
            <h4>Categoria: 
                @if($post->category)
                {{ $post->category->label }}
                @else
                Nessuna
                @endif
            </h4>

            <div class="clearfix">
                <img src="{{ $post->image }}" alt="post image preview" class="float-left mr-3 mb-3 img-fluid">
                <p class="h4">{{ $post->content }}</p>
            </div>
            <div class="d-flex justify-content-end">
                <p class="h5"><strong>Data Creazione: </strong>{{ $post->created_at }}</p>
                <p class="h5 ml-3"><strong>Ultima Modifica: </strong>{{ $post->updated_at }}</p>
            </div>
        </div>
        <div class="card-footer py-3">
            <div class="d-flex justify-content-end">
                <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Torna Indietro</a>
                <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-warning ml-2">Modifica</a>
                <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger ml-2">Elimina</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection