<?php

namespace App\Http\Controllers;
use App\Asset;
use App\Animal;
use App\Assetownership;
use App\User;
use Auth;

use Illuminate\Http\Request;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('asset.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assets = Asset::all();
        $animalownership = \App\Animalownership::where('household_id', Auth::user()->household->id)->first();

        return view('asset.create', compact('assets', 'animalownership'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'asset_id' => '',
            'asset_count' => '', 
 
         ]);
 
         
         $assetownership = new \App\Assetownership;
         $assetownership->household_id = \Auth::user()->household->id;
         $assetownership-> asset_id = $request->get('asset_id');
         $assetownership-> asset_count = $request->get('asset_count');
         
         
         $assetownership -> save();
         return redirect('/asset/index')->with('success', 'Asset ownership has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'asset_id' => '',
            'asset_count' => '', 
 
         ]);
 
         
         $assetownership = Assetownership::find($id);
         $assetownership->household_id = \Auth::user()->household->id;
         $assetownership-> asset_id = $request->get('asset_id');
         $assetownership-> asset_count = $request->get('asset_count');
         
         
         $assetownership -> save();
         return redirect('/asset/index')->with('success', 'Asset ownership has been added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
