@extends('layouts.app')
@section('Content')
<div class="p-4 sm:ml-64">
    <h1>{{ $title }}</h1>
    <div>
        <table class="table-auto w-full border-collapse border border-gray-400">
            <thead>
                <tr>
                    <th class="px-4 py-2 font-bold capitalaize">User ID</th>
                    <th class="px-4 py-2 font-bold capitalaize">User Name</th>
                    <th class="px-4 py-2 font-bold capitalaize">Action</th>
                </tr>
            </thead>
            <tbody>
                @if (count($userData) > 0)
                    @foreach ($userData as $da)
                        <tr class="border-b border-gray-400">
                            <td class="px-4 py-2">{{ $da->id }}</td>
                            <td class="px-4 py-2"><a class="nav-link text-blue-500 hover:underline"
                                    href="/users/{{ $da->id }}">{{ $da->name }}</a></td>
                            <td class="px-4 py-2">
                                <a href="/users/edit/{{ $da->id }}" class="btn btn-primary mr-2">Edit</a>
                                {!! Form::open([
                                    'action' => ['App\Http\Controllers\UsersController@destroy', $da->id],
                                    'method' => 'POST',
                                    'class' => 'inline-block',
                                ]) !!}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="px-4 py-2" colspan="3">No data found</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
    </div>
@endsection
