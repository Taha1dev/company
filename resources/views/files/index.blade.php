@extends('layouts.app')
@section('Content')
<div class="p-4 sm:ml-64">
    <h1 class="text-2xl font-bold">{{ $title }}</h1>
    <div class="mt-8">
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">File Name</th>
                    <th class="px-4 py-2">Group Name</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @if (count($fileIndex) > 0)
                    @foreach ($fileIndex as $da)
                        <tr class="bg-white hover:bg-gray-100">
                            <td class="border px-4 py-2">{{ $da->id }}</td>
                            <td class="border px-4 py-2">
                                <a class="nav-link text-blue-500" href="/files/{{ $da->id }}">
                                    {{ $da->file_name }}
                                </a>
                            </td>
                            <td class="border px-4 py-2">{{ $da->group->group_name }}</td>
                            <td class="border px-4 py-2">
                                <a href="/files/edit/{{ $da->id }}" class="btn btn-primary mr-2">Edit</a>
                                {!! Form::open(['action' => ['App\Http\Controllers\FilesController@destroy', $da->id], 'method' => 'POST']) !!}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="border px-4 py-2" colspan="4">No data available</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
    </div>
@endsection
