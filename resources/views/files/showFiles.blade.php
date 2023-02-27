@extends('layouts.app')
@section('Content')
<div class="p-4 sm:ml-64">
    <h1 class="text-xl font-bold">{{ $title }}</h1>
    <div class="mt-4 rounded-lg shadow-lg">
        <div class="p-4">
            <h2 class="text-lg font-medium mb-2">File ID :</h2>
            <p class="mb-4">{{ $fileShow->id }}</p>
            <h2 class="text-lg font-medium mb-2">File name :</h2>
            <p class="mb-4">{{ $fileShow->file_name }}</p>
            <h2 class="text-lg font-medium mb-2">Content :</h2>
            <p class="mb-4">{{ $fileShow->content }}</p>
            <h2 class="text-lg font-medium mb-2">File Owner ID :</h2>
            <p class="mb-4">{{ $fileShow->User->name }}</p>
            <h2 class="text-lg font-medium mb-2">Group Name :</h2>
            <p class="mb-4">{{ $fileShow->group->group_name }}</p>
            <a href="/files/edit/{{ $fileShow->id }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit Data</a>
        </div>
        </div>
    </div>
@endsection
