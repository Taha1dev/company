@extends('layouts.app')
@section('Content')
<div class="p-4 sm:ml-64">
    <h1 class="text-2xl font-bold">{{ $title }}</h1>
<div class="w-72 bg-white rounded-lg shadow-md">
    <div class="p-4">
        <h5 class="font-bold mb-2">User Group ID : {{ $user_groupDetails->id }}</h5>
        @if($user_groupDetails->owner == 1)
            <h5 class="font-bold mb-2">Owner : True</h5>
        @else
            <h5 class="font-bold mb-2">Owner : False</h5>
        @endif
        <h5 class="font-bold mb-2">Group : {{ $user_groupDetails->groups->group_name }}</h5>
        <h5 class="font-bold mb-2">User : {{ $user_groupDetails->User->name }}</h5>
        <br>
        <a href="/user_group/edit/{{ $user_groupDetails->id }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md">Edit Data</a>
    </div>
</div>
</div>
@endsection
