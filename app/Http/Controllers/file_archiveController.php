<?php

namespace App\Http\Controllers;

use App\Models\file_archive;
use App\Models\User;
use Illuminate\Http\Request;

class file_archiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $title = "File Archive";
            $file_archiveData = file_archive::all();
        return view('file_archive.index')->with('title', $title)->with('file_archiveData', $file_archiveData);
    }
    public function show($id)
    {
        $title = "File Archive Details";
        $file_archiveDetails = file_archive::find($id);
        return view('file_archive.showFileArchive')->with('title', $title)->with('file_archiveDetails', $file_archiveDetails);
    }
    public function edit($id)
    {
        $title = "File Archive Editing";
        $file_archiveEditing = file_archive::find($id);
        $user_id = User::pluck('name', 'id');
        return view('file_archive.editFileArchive')->with('title', $title)
        ->with('file_archiveEditing', $file_archiveEditing)->with('user_id', $user_id);
    }
    public function update(Request $request, $id)
    {
        $file_archiveUpdate = file_archive::find($id);
        $file_archiveUpdate->type = $request->input('type');
        $file_archiveUpdate->content = $request->input('content');
        $file_archiveUpdate->user_id = $request->input('user_id');
        $file_archiveUpdate->editDataTime = $request->input('EditDateTime');
        $file_archiveUpdate->save();
        return redirect('/fileArchive');
    }
    public function destroy($id)
    {
        $file_archiveDestroy = file_archive::find($id);
        $file_archiveDestroy->delete();
        return redirect('/fileArchive');
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
