<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\File;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //get all files
        $files = File::all();
        return view('files')->with(['files'=>$files]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

        //
        $upload = file_get_contents($request->file('media')->getRealPath());
        //var_dump($upload); exit();
        $path = str_random(40).'.'.$request->file('media')->getClientOriginalExtension();
        //var_dump($path);exit();
        Storage::disk('local')->put($path, $upload);
        $file = new File;
        $file->name = $request->name;
        $file->path = public_path('media'.'/'.$path);
        $file->url = url('media'.'/'.$path);
        //var_dump(public_path('media'.'/'.$path));exit();
        $file->save();
        //var_dump($file); exit();
        return redirect()->action('FileController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        File::find($id)->delete();
        return true;

    }


    public function destroyAll() {

      $files = File::all();
      foreach($files as $file){
        $file->delete();
      }
    }
}
