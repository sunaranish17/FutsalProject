<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Company;
use DB;
use App\user;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        // $data = DB::table('companies')
        // ->join('users','companies.id','=','users.id')
        // ->join('locations','locations.id','=','companies.id')
        // ->join('working_hours','working_hours.id','=','companies.id')
        // ->select('users.name','companies.contact','locations.tole','working_hours.time_start','working_hours.time_end')
        // ->get();


        // if($data){ 
        //     return view('back.user.userdashboard',compact('data'));
        // }else{
        //     echo 'vayena';
        // }
    }

    public function index()
    {
        //
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
