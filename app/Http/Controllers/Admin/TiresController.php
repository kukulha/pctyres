<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Http\Requests\TireStoreRequest;
use App\Http\Requests\TireUpdateRequest;
use App\Tire;

class TiresController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tires = Tire::orderBy('id' , 'DESC')->paginate();
        return view('admin.tires.index', compact('tires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tires.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TireStoreRequest $request)
    {
        $tire = Tire::create($request->all());

        // Imagenes
        if ($request->file('file')) {

            $tire->file = $request->file('file')->store('public');
            $tire->save();
        }

        if ($request->file('brand')) {

            $tire->brand = $request->file('brand')->store('public');
            $tire->save();
        }

        if ($request->file('data')) {

            $tire->data = $request->file('data')->store('public');
            $tire->save();
        }
        
        $tire->save();

        return redirect()->route('tires.index', $tire->id)->with('info', 'Articulo creado correctamente');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tire = Tire::findOrFail($id);
        return view('admin.tires.edit', compact('tire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TireUpdateRequest $request, $id)
    {
        $tire = Tire::findOrFail($id);
        $tire->fill($request->all())->save();

        // Imagenes
        if ($request->file('file')) {

            $tire->file = $request->file('file')->store('public');
            $tire->save();
        }

        if ($request->file('brand')) {

            $tire->brand = $request->file('brand')->store('public');
            $tire->save();
        }

        if ($request->file('data')) {

            $tire->data = $request->file('data')->store('public');
            $tire->save();
        }

        return redirect()->route('tires.index', $tire->id)->with('info', 'Llanta actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tire = Tire::findOrFail($id)->delete();
        return back()->with('info', 'Llanta eliminada correctamente');
    }
}
