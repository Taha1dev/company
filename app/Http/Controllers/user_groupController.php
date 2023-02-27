<?php

namespace App\Http\Controllers;

use App\Models\groups;
use App\Models\User;
use App\Models\user_group;
use Illuminate\Cache\RedisTaggedCache;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder\find;

class user_groupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "User Group";
        $user_groupData = user_group::all();
        return view('user_group.index')->with('title', $title)->with('user_groupData',$user_groupData);
    }
    public function show($id)
    {
        $title = "User Groups Details";
        $user_groupDetails = user_group::find($id);
        return view('user_group.showUserGroup')->with('title',$title)
        ->with('user_groupDetails',$user_groupDetails);
    }
    public function edit($id)
    {
        $title = "User Groups Editing";
        $user_groupEdit = user_group::find($id);
        $user_id = User::pluck('name', 'id');
        $group_id = groups::pluck('group_name', 'id');
        return view('user_group.editUserGroup')->with('title',$title)
        ->with('user_groupEdit',$user_groupEdit)->with('user_id', $user_id)
        ->with('group_id', $group_id);
    }
    public function update(Request $request, $id)
    {
        $user_groupEdit = user_group::find($id);
        $user_groupEdit->owner = $request->input('owner');
        $user_groupEdit->group_id = $request->input('group_id');
        $user_groupEdit->user_id = $request->input('user_id');
        $user_groupEdit->save();
        return redirect('/user_group');
    }
    public function destroy($id)
    {
        $user_groupEdit = user_group::find($id);
        $user_groupEdit->delete();
        return redirect('/user_group');
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

}

