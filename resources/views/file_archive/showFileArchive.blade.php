@extends('layouts.app')
@section('Content')
<div class="p-4 sm:ml-64">
<h1 class="text-2xl font-bold">{{ $title }}</h1>
<div class="w-64 mx-auto mt-5">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h5 class="font-bold text-lg mb-2">File Archive ID :</h5>
        <p class="text-gray-700 text-base">{{ $file_archiveDetails->id }}</p>
        <h5 class="font-bold text-lg mb-2 mt-4">Type :</h5>
        <p class="text-gray-700 text-base">{{ $file_archiveDetails->type }}</p>
        <h5 class="font-bold text-lg mb-2 mt-4">Content :</h5>
        <p class="text-gray-700 text-base">{{ $file_archiveDetails->content }}</p>
        <h5 class="font-bold text-lg mb-2 mt-4">User ID :</h5>
        <p class="text-gray-700 text-base">{{ $file_archiveDetails->user_id }}</p>
        <h5 class="font-bold text-lg mb-2 mt-4">Edit Date Time :</h5>
        <p class="text-gray-700 text-base">{{ $file_archiveDetails->editDataTime }}</p>
        <a href="/fileArchive/edit/{{ $file_archiveDetails->id }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Edit Data</a>
    </div>
</div>
</div>
@endsection
