@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crea un nuovo Post</h1>
    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" placeholder="Inserisci un titolo" name="title"
                value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="content">Contenuto</label>
            <textarea class="form-control" id="content" name="content">{{ old('content') }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Immagine</label>
            <input type="url" class="form-control" id="image" name="image">{{ old('image') }}
        </div>
        <button type="submit" class="btn btn-success">Invia</button>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary ml-2">Torna Indietro</a>
    </form>
</div>
@endsection