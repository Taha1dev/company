@extends('layouts.app')
@section('Content')
<div class="p-4 sm:ml-64">
    <h1 class="text-2xl font-bold">{{ $title }}</h1>
    {!! Form::open(['action'=> ['App\Http\Controllers\user_groupController@update' , $user_groupEdit->id], 'method'=>'POST']) !!}
    <h5 class="font-bold">User Group ID : {{ $user_groupEdit->id }}</h5>
    <div class="mt-4">
        <label class="block font-bold" for="owner">Owner</label>
        {{ Form::text('owner', $user_groupEdit->type,['class' => 'w-full p-2 border rounded-md', 'placeholder' => 'Owner']) }}
    </div>
    <div class="mt-4">
        <label class="block font-bold" for="group_id">Group</label>
        {{ Form::select('group_id', $group_id, $user_groupEdit->group_id, ['class' => 'w-full p-2 border rounded-md']) }}
    </div>
    <div class="mt-4">
        <label class="block font-bold" for="user_id">User</label>
        {{ Form::select('user_id', $user_id, $user_groupEdit->user_id, ['class' => 'w-full p-2 border rounded-md']) }}
    </div>
    <div class="mt-4">
        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::submit('Submit', ['class' => 'px-4 py-2 font-bold text-white bg-purple-600 rounded-md hover:bg-purple-700']) }}
    </div>
    {!! Form::close() !!}
</div>
</div>
@endsection
