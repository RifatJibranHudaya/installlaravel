@extends('layouts.app')

@section('content')
<div style="padding: 20px; font-family: Arial, sans-serif;">
    <h1 style="border-bottom: 2px solid #ccc; padding-bottom: 10px; margin-bottom: 20px;">Daftar Post</h1>

    <ul style="list-style: none; padding: 0;">
    @foreach ($posts as $post)
        <li style="border: 1px solid #eee; padding: 15px; margin-bottom: 15px; border-radius: 8px; background-color: #f9f9f9;">
            <h2 style="margin-top: 0; margin-bottom: 5px; color: #333;">{{ $post->title }}</h2>
            
            {{-- Tampilkan nama kategori --}}
            @if ($post->category)
                <p style="font-size: 0.9em; color: #007bff; margin-bottom: 10px;">
                    Kategori: <strong>{{ $post->category->name }}</strong>
                </p>
            @else
                <p style="font-size: 0.9em; color: #888; margin-bottom: 10px;">
                    Kategori: <em>Tidak Berkategori</em>
                </p>
            @endif

            <p style="line-height: 1.6; color: #555;">{{ $post->content }}</p>
        </li>
    @endforeach
    </ul>
</div>
@endsection