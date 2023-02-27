@extends('layouts.app')
@section('Content')
<div class="p-4 sm:ml-64">
<h1 class="text-2xl">{{ $title }}</h1>
<div class="mt-8">
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2 text-left">ID</th>
                <th class="px-4 py-2 text-left">Type</th>
                <th class="px-4 py-2 text-left">User ID</th>
                <th class="px-4 py-2 text-left">Action</th>
            </tr>
        </thead>
        <tbody>
            @if(count($file_archiveData) > 0)
                @foreach ($file_archiveData as $da)
                    <tr>
                        <td class="border px-4 py-2">{{ $da->id }}</td>
                        <td class="border px-4 py-2">
                            <a class="text-blue-600 hover:underline" href="/fileArchive/{{ $da->id }}">{{ $da->type }}</a>
                        </td>
                        <td class="border px-4 py-2">{{ $da->User->id }}</td>
                        <td class="border px-4 py-2">
                            <a href="/fileArchive/edit/{{ $da->id }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Edit</a>
                            {!! Form::open(['action'=> ['App\Http\Controllers\file_archiveController@destroy' , $da->id], 'method'=>'POST']) !!}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Delete',['class' => 'px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 ml-2']) }}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
</div>
@endsection
