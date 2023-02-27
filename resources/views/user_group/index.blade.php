@extends('layouts.app')
@section('Content')
<div class="p-4 sm:ml-64">
    <h1 class="text-3xl font-bold">{{ $title }}</h1>
    <div class="my-4">
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-left">User Group ID</th>
                    <th class="px-4 py-2 text-left">Owner</th>
                    <th class="px-4 py-2 text-left">Action</th>
                </tr>
            </thead>
            <tbody>
                @if(count($user_groupData) > 0)
                    @foreach ($user_groupData as $da)
                        <tr>
                            <td class="border px-4 py-2">
                                <a class="text-blue-500 hover:underline" href="/user_group/{{ $da->id }}">
                                    {{ $da->id }}
                                </a>
                            </td>
                            <td class="border px-4 py-2">
                                <a class="text-blue-500 hover:underline" href="/user_group/{{ $da->User->name }}">
                                    {{ $da->User->name }}
                                </a>
                            </td>
                            <td class="border px-4 py-2">
                                @if($da->owner == 1)
                                    <span class="text-green-500 font-bold">True</span>
                                @else
                                    <span class="text-red-500 font-bold">False</span>
                                @endif
                            </td>
                            <td class="border px-4 py-2">
                                <a href="/user_group/edit/{{ $da->id }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Edit
                                </a>
                                {!! Form::open(['action'=> ['App\Http\Controllers\user_groupController@destroy' , $da->id], 'method'=>'POST']) !!}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::button('Delete', ['type' => 'submit', 'class' => 'bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded']) }}
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
