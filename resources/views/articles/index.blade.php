@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-semibold text-gray-800">Articles</h1>
    <a href="{{ route('articles.create') }}" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded">Create New Article</a>

    <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($articles as $article)
            <div class="p-6 border border-gray-200 rounded-lg shadow-sm">
                <h2 class="text-xl font-semibold text-gray-700">{{ $article->title }}</h2>
                <p class="text-gray-500 mt-2">{{ Str::limit($article->content, 100) }}</p>
                <div class="mt-4 flex justify-between">
                    <a href="{{ route('articles.edit', $article->id) }}" class="text-blue-500">Edit</a>
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
