@extends('layouts.app')
@section('Content')
<div class="p-4 sm:ml-64">
<h1 class="text-2xl font-bold">{{ $title }}</h1>
{!! Form::open(['action'=> ['App\Http\Controllers\FilesController@update' , $fileShow->id], 'method'=>'POST', 'class' => 'mt-6']) !!}
<div class="mb-4">
    {{ form::label('File_Name', 'File Name', ['class' => 'block text-gray-700 font-bold mb-2']) }}
    {{ Form::text('file_name', $fileShow->file_name, ['class' => 'form-control py-2 px-3 border rounded-lg w-full', 'placeholder' => 'File Name']) }}
</div>
<div class="mb-4">
    {{ form::label('Cont', 'Content', ['class' => 'block text-gray-700 font-bold mb-2']) }}
    {{ Form::text('content', $fileShow->content, ['class' => 'form-control py-2 px-3 border rounded-lg w-full', 'placeholder' => 'Content']) }}
</div>
<div class="mb-4">
    {{ form::label('groupid', 'Group', ['class' => 'block text-gray-700 font-bold mb-2']) }}
    {{ Form::select('file_owner_id', $user_id, $fileShow->file_owner_id, ['class' => 'form-control py-2 px-3 border rounded-lg w-full']) }}
</div>
<div class="mb-4">
    {{ form::label('Group_id', 'Group ID', ['class' => 'block text-gray-700 font-bold mb-2']) }}
    {{ Form::text('group_id', $fileShow->group_id, ['class' => 'form-control py-2 px-3 border rounded-lg w-full', 'placeholder' => 'Group ID']) }}
</div>
{{ Form::hidden('_method', 'PUT') }}
<div class="flex justify-end">
    {{ Form::submit('Submit', ['class' => 'bg-blue-500 text-white font-bold py-2 px-4 rounded-full']) }}
    {!! Form::close() !!}
</div>
</div>
@endsection
