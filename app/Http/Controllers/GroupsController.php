<?php

namespace App\Http\Controllers;

use App\Models\groups;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Groups";
        $groupsData = groups::all();
        return view('groups.index')->with('title', $title)->with('groupsData',$groupsData);
    }
    public function show($id)
    {
        $title = "Group Details";
        $groupsDetails = groups::find($id);
        return view('groups.showGroups')->with('title', $title)->with('groupsDetails',$groupsDetails);
    }
    public function edit($id)
    {
        $title = "Group Editing";
        $groupsEditing = groups::find($id);
        return view('groups.editGroups')->with('title', $title)->with('groupsEditing',$groupsEditing);
    }
    public function update(Request $request, $id)
    {
        $groupsUpdate = groups::find($id);
        $groupsUpdate->group_name = $request->input('group_name');
        $groupsUpdate->save();
        return redirect('/groups');
    }
    public function destroy($id)
    {
        $groupsDestroy = groups::find($id);
        $groupsDestroy->delete();
        return redirect('/groups');
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
