<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hijo;
use App\Models\User;

class HijosresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('hmenor.hmenor');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('hmenor.create');
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
        $mayor= User::find($request->user_id);
        $hijo= new Hijo;
        $hijo->name=$request->name;
        $hijo->user_id=$request->user_id;
        $hijo->padre_id=Auth()->user()->id;
        $hijo->pname=Auth()->user()->name;
        $mayor->type='N';
        $mayor->save();
        $hijo->save();
        return redirect('/hmenor/create')->with('exito', 'Tu idea fue registrada con exito!');
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
        $nuevo=Hijo::all()->where('id',$id)->first();
        return view('hmenor.show',['ver'=>$nuevo]);
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
    public function destroy(Request $id)
    {
        //
        
        $menor= Hijo::find($id->id);
        $mayor= User::find($id->user_id);
        $mayor->type='S';
        $mayor->save();
        $menor->delete();
        return redirect('/hmenor')->with('exito', 'Eliminación exitosa');
    }
}
