<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //get all stores and return
        $stores = Store::all();
        return view('all-stores')->with(['stores'=>$stores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('add-store');

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
        $store = new Store;
        $store->name = $request->name;
        $store->ip_address = $request->ip();
        $store->websocket_channel = str_random(40);
        $store->save();
        //$stores = Store::all();
        //return view('all-stores')->with(['stores'=>$stores]);
        return redirect()->action('StoreController@index');
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
        Store::find($id)->delete();
        return redirect()->action('StoreController@index');
    }
    public function destroyAll() {

      $stores = Store::all();
      foreach($stores as $store){
        $store->delete();
      }
      return "true";
    }

}
