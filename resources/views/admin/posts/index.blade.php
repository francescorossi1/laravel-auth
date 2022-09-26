@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row row-cols-3">
        @foreach ($posts as $post)
        <div class="col my-3">
            <div class="card h-100">
                <div class="card-body">
                    <h2>{{ $post->title }}</h2>
                    <a href="#"><img src="{{ $post->image }}" alt="{{ $post->title }}" class="img-fluid"></a>
                    <p>{{ $post->content }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection