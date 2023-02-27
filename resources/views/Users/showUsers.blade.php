@extends('layouts.app')
@section('Content')
<div class="p-4 sm:ml-64">
    <h1 class="text-xl font-bold">{{ $title }}</h1>
    <div class="card w-72 mt-6">
        <div class="card-body">
            <h5 class="card-title font-bold">User ID:</h5>
            <h5 class="card-title">{{ $userDetails->id }}</h5>
            <h5 class="card-title font-bold">User name:</h5>
            <h5 class="card-title">{{ $userDetails->name }}</h5>
            <p class="card-text font-bold">Email:</p>
            <p class="card-text">{{ $userDetails->email }}</p>
            <p class="card-text font-bold">Password:</p>
            <p class="card-text">{{ $userDetails->password }}</p>
            <a href="/users/edit/{{ $userDetails->id }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-4 rounded">Edit Data</a>
        </div>
    </div>
</div>


@endsection
