<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\casts;
class castscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $casts =casts::all();
        return view("casts.index", ['casts' => $casts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("casts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:4',
            'umur' => 'required',
            'bio' => 'required',
        ]);
        $casts = new casts;
        $casts->nama = $request->nama;
        $casts->umur = $request->umur;
        $casts->bio = $request->bio;
 
        $casts->save();
        return redirect('/casts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cast = casts::find($id);

        return view('casts.detail', ['casts' => $cast]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cast = casts::find($id);

        return view('casts.edit', ['casts' => $cast]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'umur' => 'required|numeric',
            'bio' => 'required',
        ],
       [
                'nama.required' => 'Nama Harus di Isi',
                'umur.required' => 'Umur Harus di Isi',
                'bio.required' => 'Bio Harus di Isi',

        ]);
        casts::where('id',$id)
        ->update(
            [
                'nama' => $request->input('nama'),
                'umur' => $request->input('umur'),
                'bio' => $request->input('bio')
            ]
            );
        return redirect('/casts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        casts::where('id',$id)->delete();

        return redirect('/casts');
    }
}
