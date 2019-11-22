<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Multimedia;


class MultimediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_multimedia=Multimedia::all();
        //dd($multimedia);
        return view('back.arena.pages.multimedia.show',compact('data_multimedia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('back.arena.pages.multimedia.add');
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
        $multimedia=new Multimedia();
        $imageName=time().'.'.$request['image']->getClientOriginalExtension();
        $request['image']->move(
            base_path().'/public/' ,$imageName
                            );
        $multimedia->image=$imageName;
        $multimedia->description=$request->description;
        $multimedia->status=$request->status;

        $multimedia->save();

        return redirect('multimedia');
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
        $data_multimedia=Multimedia::all();
        $data=multimedia::find($id);

        return view('back.arena.pages.multimedia.view',compact('data'));
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
          $data_multimedia=Multimedia::all();
        $data=Multimedia::find($id);
        return view('back.arena.pages.multimedia.edit',compact('data'));
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
         $multimedia=Multimedia::find($id);
        if($request->hasFile('image'))
         {
           $pic=$request->pic;
            if(isset($pic))
            {
               unlink($pic); 
               $file=$request->file('image');
               $imageName=time().'.'.$request['image']->getClientOriginalExtension();
                 $request['image']->move(
                base_path().'/public/' ,$imageName
                                        );
            }

            $multimedia->image=$imageName;
         }

         
         $multimedia->description=$request->description;
        // $multimedia->type=$request->type;

         $multimedia->save();

         return redirect('multimedia');

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
                 Multimedia::where('id',$id)->delete();
        return redirect()->back();
    }
}
