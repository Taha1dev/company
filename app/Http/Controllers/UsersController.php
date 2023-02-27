<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Users";
        $userData = User::all();
        return view('users.index')->with('title', $title)->with('userData', $userData);
    }
    public function show($id)
    {
        $title = "Users Details";
        $userDetails = User::find($id);
        return view('Users.showUsers')->with('title', $title)->with('userDetails', $userDetails);
    }
    public function edit($id)
    {
        $title = "Users Editing";
        $userEdit = User::find($id);
        return view('Users.editUsers')->with('title', $title)->with('userEdit', $userEdit);
    }
    public function update(Request $request, $id)
    {
        $userUpdate = User::find($id);
        $userUpdate->name = $request->input('user_name');
        $userUpdate->email = $request->input('email');
        $userUpdate->password = $request->input('password');
        $userUpdate->save();
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userDelete = User::find($id);
        $userDelete->delete();
        return redirect('/');
    }
}
