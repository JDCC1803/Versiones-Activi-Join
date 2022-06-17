<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hijo;
use App\Models\Tutor;
use App\Models\Activitie;
use App\Models\User;
class CapacitoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alumnos=Activitie::all()->where('padre_id',Auth()->user()->id);
        
        return view('hmayor.hmayor',['new'=>$alumnos]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $nuevo=Hijo::all()->where('padre_id',Auth()->user()->id);
        return view('hmayor.create',['new'=>$nuevo]);
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
        $mayor= new Activitie;
        $mayor->user_id=$request->user_id;
        $mayor->padre_id=Auth()->user()->id;
        $mayor->tema=$request->tema;
        $mayor->descripcion=$request->descripcion;
        $mayor->fecha=$request->fecha;
        $mayor->hora=$request->hora;
        $mayor->save();
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
        $nuevo=Activitie::all()->where('id',$id)->first();
        return view('hmayor.show',['ver'=>$nuevo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Activitie $hmayor)
    {
        //
        $nuevo=Hijo::all()->where('padre_id',Auth()->user()->id);
        return view('hmayor.edit',['upd'=>$hmayor,'new'=>$nuevo]);
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
        $mayor= Activitie::find($id);
        $mayor->user_id=$request->user_id;
        $mayor->tema=$request->tema;
        $mayor->descripcion=$request->descripcion;
        $mayor->fecha=$request->fecha;
        $mayor->hora=$request->hora;
        $mayor->save();
        return redirect('/hmayor')->with('exito', 'Tu idea fue registrada con exito!');
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
        $mayor= Activitie::find($id);
        $mayor->delete();
        return redirect('/hmayor')->with('exito', 'Eliminación exitosa');
    }
}
