@extends('layouts.app')
@section('Content')
<div class="p-4 sm:ml-64">
<h1 class="text-2xl font-bold">{{ $title }}</h1>
{!! Form::open(['action'=> ['App\Http\Controllers\GroupsController@update' , $groupsEditing->id], 'method'=>'POST']) !!}
<h5 class="text-lg font-semibold">Group ID: {{ $groupsEditing->id }}</h5>
<br>
<div class="mb-4">
{{ form::label('Group_name', 'Group Name', ['class' => 'block font-semibold text-gray-700']) }}
{{ Form::text('group_name', $groupsEditing->group_name,['class' => 'w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent', 'placeholder' => 'Group Name']) }}
</div>
<div class="mb-4">
{{ Form::hidden('_method', 'PUT') }}
{{ Form::submit('Submit',['class' => 'px-4 py-2 text-white bg-purple-600 rounded-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50']) }}
{!! Form::close() !!}
</div>
</div>
@endsection
