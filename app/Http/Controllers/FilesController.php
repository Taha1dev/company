<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\files;
use App\Models\groups;
use App\Models\User;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Files";
        $fileIndex = files::all();
        return view('files.index')->with('title', $title)->with('fileIndex', $fileIndex);
    }
    public function show($id)
    {
        $title = "File Details";
        $fileShow = files::find($id);
        return view('files.showFiles')->with('title', $title)->with('fileShow', $fileShow);
    }
    public function edit($id)
    {
        $title = "File Editing";
        $fileShow = files::find($id);
        $user_id = User::pluck('name', 'id');
        return view('files.editFiles')->with('title', $title)
        ->with('fileShow', $fileShow)->with('user_id', $user_id);
    }
    public function update(Request $request, $id)
    {
        $fileShow = files::find($id);
        $fileShow->file_name =  $request->input('file_name');
        $fileShow->content =  $request->input('content');
        $fileShow->file_owner_id =  $request->input('file_owner_id');
        $fileShow->group_id =  $request->input('group_id');
        $fileShow->save();
        return redirect('/files');
    }
    public function destroy($id)
    {
        $fileShow = files::find($id);
        $fileShow->delete();
        return redirect('/files');
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
