@extends('layouts.main')

@section('container')

    <h2>{{ $post->title }}</h2>

    <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

    {{-- {{ $post->body }} JIKA SEPERTI INI MAKA AKAN MELAKUKAN SKIP TERHADAP TAG HTML YG ADA DI DALAM BODY --}}

    {{-- JIKA SEPERTI DIBAWAH INI MAKAN TIDAK AKAN MELAKUKAN SKIP TERHADAP TAG HTML DAN AKAN MEMBACA TAG HTML YG ADA DIDALAM BODY --}}
    {!! $post->body !!}

    <a href="/posts" class="d-block mt-3">Back to Posts</a>
@endsection

