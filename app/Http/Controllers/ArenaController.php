<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\user;
use Auth;
use DB;

class ArenaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
         return view('back.arena.arena');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       $ind= Auth::user()->id;
       //dd($ind);
       $inde = DB::table('companies')
            ->join('users', 'users.id', '=', 'companies.uid')
            ->where('companies.uid','=',$ind)
            ->get(); 
           //dd($data);
        $cid=$inde;
        dd($cid);
        $data=Company::find($cid);
        return view('back.arena.pages.arenainfo', compact('data'));
        //return view('back.arena.pages.arena');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function location()
    {
        //
        return view('back.arena.pages.locationdetail');
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
        //
         $setting=Company::find($id);
         $setting->companyName=$request->company_name;
         $setting->location=$request->location;
         $setting->contact=$request->contact;
         $setting->description=$request->description;
         $setting->facebook=$request->facebook;
         $setting->twitter=$request->twitter;
         $setting->googleMap=$request->googleMap;
         $setting->save();
         return redirect('setting');

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
