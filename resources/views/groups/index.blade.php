@extends('layouts.app')

@section('Content')
<div class="p-4 sm:ml-64">
    <h1 class="text-2xl font-bold">{{ $title }}</h1>
    <div class="mt-4">
        <table class="w-full border-collapse border border-gray-300 shadow-lg">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 py-2 px-3 text-left">Group ID</th>
                    <th class="border border-gray-300 py-2 px-3 text-left">Group Name</th>
                    <th class="border border-gray-300 py-2 px-3 text-left">Action</th>
                </tr>
            </thead>
            <tbody>
                @if(count($groupsData) > 0)
                    @foreach ($groupsData as $da)
                        <tr class="hover:bg-gray-100">
                            <td class="border border-gray-300 py-2 px-3">{{ $da->id }}</td>
                            <td class="border border-gray-300 py-2 px-3"><a class="text-blue-600 hover:underline" href="/groups/{{ $da->id }}">{{ $da->group_name }}</a></td>
                                <td class="border border-gray-300 py-2 px-3">
                                <a href="/groups/edit/{{ $da->id }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                {!! Form::open(['action'=> ['App\Http\Controllers\GroupsController@destroy' , $da->id], 'method'=>'POST']) !!}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit('Delete',['class' => 'bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2']) }}
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
