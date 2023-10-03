<?php

namespace App\Http\Controllers;

use App\Models\balasan;
use App\Models\diskusi;
use Illuminate\Http\Request;

class diskusiControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'diskusi' => diskusi::orderby('created_at', 'desc')->get(),
        ];
        // dd($data);
        return view('index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diskusi = $request->all();
        diskusi::create($diskusi);
        // session()->flash('success', 'Data added successfully!');
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\diskusi  $diskusi
     * @return \Illuminate\Http\Response
     */
    public function show(diskusi $diskusi, $id)
    {
        $data = [
            'diskusi' => diskusi::find($id),
        ];
        // dd($data);
        return view('show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\diskusi  $diskusi
     * @return \Illuminate\Http\Response
     */
    public function edit(diskusi $diskusi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\diskusi  $diskusi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, diskusi $diskusi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\diskusi  $diskusi
     * @return \Illuminate\Http\Response
     */
    public function destroy(diskusi $diskusi)
    {
        //
    }
}
