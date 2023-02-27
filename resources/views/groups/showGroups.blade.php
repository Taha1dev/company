@extends('layouts.app')
@section('Content')
<div class="p-4 sm:ml-64">
<h1 class="text-xl font-bold">{{ $title }}</h1>
<div class="card w-72 mt-4">
    <div class="card-body">
        <h5 class="font-bold mb-2">Group ID:</h5>
        <p class="mb-4">{{ $groupsDetails->id }}</p>

        <h5 class="font-bold mb-2">Group name:</h5>
        <p class="mb-4">{{ $groupsDetails->group_name }}</p>

        <a href="/groups/edit/{{ $groupsDetails->id }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Edit Data
        </a>
    </div>
</div>
</div>
@endsection
