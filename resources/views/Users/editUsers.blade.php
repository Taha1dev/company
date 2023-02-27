@extends('layouts.app')
@section('Content')
    <div class="p-4 sm:ml-64">
        <div class="flex justify-center mb-10">
            <div class="w-3/4">
                {!! Form::open(['action' => ['App\Http\Controllers\UsersController@update', $userEdit->id], 'method' => 'POST']) !!}
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-2xl font-bold mb-4">User Details</h2>
                    <hr class="mb-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            {{ form::label('User Name', 'User Name', ['class' => 'block font-medium text-sm text-gray-700 mb-1']) }}
                            {{ Form::text('user_name', $userEdit->name, ['class' => 'form-input w-full border-gray-300 rounded-md shadow-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500']) }}
                        </div>
                        <div>
                            {{ form::label('Email', 'Email', ['class' => 'block font-medium text-sm text-gray-700 mb-1']) }}
                            {{ Form::text('email', $userEdit->email, ['class' => 'form-input w-full border-gray-300 rounded-md shadow-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500']) }}
                        </div>
                        <div>
                            {{ form::label('Password', 'Password', ['class' => 'block font-medium text-sm text-gray-700 mb-1']) }}
                            {{ Form::text('password', $userEdit->password, ['class' => 'form-input w-full border-gray-300 rounded-md shadow-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500']) }}
                        </div>
                    </div>
                    <div class="mt-6">
                        {{ Form::hidden('_method', 'PUT') }}
                        {{ Form::submit('Submit', ['class' => 'inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest bg-indigo-600 hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150']) }}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
