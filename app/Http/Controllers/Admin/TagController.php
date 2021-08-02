<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags=Tag::all();
        return view('admin.tags.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colors=[
            'red'=>'Color Rojo',
            'yellow'=>'Color Amarillo',
            'blue'=>'Color Azul',
            'green'=>'Color Verde',
            'indigo'=>'Color Indigo',
            'purple'=>'Color Morado',
            'pink'=>'Color Rosado',
        ];
        return view('admin.tags.create', compact('colors'));
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
            'name'=>'required',
            'slug'=>'required|unique:tags',
            'color'=>'required'

        ]);
        $tag=Tag::create($request->all());
       return redirect()->route('admin.tags.edit',$tag)->with('info','La etiqueta se ha creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        return view('admin.tags.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        $colors=[
            'red'=>'Color Rojo',
            'yellow'=>'Color Amarillo',
            'blue'=>'Color Azul',
            'green'=>'Color Verde',
            'indigo'=>'Color Indigo',
            'purple'=>'Color Morado',
            'pink'=>'Color Rosado',
        ];
        return view('admin.tags.edit',compact('tag','colors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name'=>'required',
            'slug'=>"required|unique:tags,slug,$tag->id",
            'color'=>'required'
        ]);
        $tag->update($request->all());
        return redirect()->route('admin.tags.edit',$tag)->with('info','La etiqueta se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('admin.tags.index')->with('info','la etiqueta se elimino con exito');
    }
}
