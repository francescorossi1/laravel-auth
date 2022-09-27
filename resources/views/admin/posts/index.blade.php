@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Data Creazione</th>
                <th scope="col">Ultima Modifica</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                <td>
                    <a href="{{ route('admin.posts.show', $post) }}" class="btn btn-primary">Dettagli</a>
                    <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-warning">Modifica</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="justify-content-end d-flex mt-5">
        <a href="{{ route('admin.posts.create') }}" class="btn btn-success">Aggiungi</a>
    </div>
</div>
@endsection