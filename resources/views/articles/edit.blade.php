@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-semibold text-gray-800">Edit Article</h1>

    <form action="{{ route('articles.update', $article->id) }}" method="POST" class="mt-6">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" value="{{ $article->title }}" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg" required>
        </div>

        <div class="mb-4">
            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
            <textarea name="content" id="content" rows="5" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg" required>{{ $article->content }}</textarea>
        </div>

        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Update Article</button>
    </form>
</div>
@endsection
