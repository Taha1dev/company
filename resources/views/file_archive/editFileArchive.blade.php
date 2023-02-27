@extends('layouts.app')
@section('Content')
<div class="p-4 sm:ml-64">
    <h1 class="text-2xl font-bold mb-5">{{ $title }}</h1>
    <div class="container mx-auto flex justify-center mt-10">
        <div class="w-full md:w-1/2">
            <h1 class="text-2xl font-bold mb-5">{{ $title }}</h1>
            {!! Form::open(['action'=> ['App\Http\Controllers\file_archiveController@update' , $file_archiveEditing->id], 'method'=>'POST']) !!}
            <div class="mt-4">
                {{ form::label('Type', 'Type', ['class' => 'block font-medium text-sm text-gray-700']) }}
                {{ Form::text('type', $file_archiveEditing->type,['class' => 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50', 'placeholder' => 'Type']) }}
            </div>
            <div class="mt-4">
                {{ form::label('content', 'Content', ['class' => 'block font-medium text-sm text-gray-700']) }}
                {{ Form::text('content', $file_archiveEditing->content,['class' => 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50', 'placeholder' => 'Content']) }}
            </div>
            <div class="mt-4">
                {{ form::label('userid', 'User', ['class' => 'block font-medium text-sm text-gray-700']) }}
                {{ Form::select('user_id', $user_id, $file_archiveEditing->user_id, ['class' => 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) }}
            </div>
            <div class="mt-4">
                {{ form::label('editDateTima', 'Edit Date Time', ['class' => 'block font-medium text-sm text-gray-700']) }}
                {{ Form::text('EditDateTime', $file_archiveEditing->editDataTime,['class' => 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50', 'placeholder' => 'Edit Date Time']) }}
            </div>
            <div class="mt-4">
                {{ Form::hidden('_method', 'PUT') }}
                {{ Form::submit('Submit', ['class' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded']) }}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    </div>
@endsection
